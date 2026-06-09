<?php

namespace App\Infrastructure\Notifications;

use App\Application\Notifications\TicketNotifierInterface;
use App\Domain\Event\Entities\Event;
use App\Domain\Sale\Entities\Ticket;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class MailTicketNotifier implements TicketNotifierInterface
{
    public function notifyConfirmed(
        Ticket $ticket,
        Event $event,
        string $userName,
        string $userEmail
    ): void {
        try {
            $html = $this->buildHtml($ticket, $event, $userName);

            Mail::html($html, function ($message) use ($userEmail, $userName, $event) {
                $message->to($userEmail, $userName)
                        ->subject("Ingresso confirmado — {$event->getName()}");
            });

            Log::info('E-mail de confirmação enviado.', [
                'ticket_id'  => $ticket->getId(),
                'user_email' => $userEmail,
            ]);
        } catch (\Throwable $e) {
            Log::error('Falha ao enviar e-mail de confirmação do ingresso.', [
                'ticket_id'  => $ticket->getId(),
                'user_email' => $userEmail,
                'error'      => $e->getMessage(),
            ]);
        }
    }

    private function buildHtml(Ticket $ticket, Event $event, string $userName): string
    {
        $eventName = htmlspecialchars($event->getName(), ENT_QUOTES);
        $name      = htmlspecialchars($userName, ENT_QUOTES);
        $date      = $event->getEventDate()->format('d/m/Y \à\s H:i');
        $price     = number_format($event->getPrice(), 2, ',', '.');
        $ticketId  = $ticket->getId();
        $serial     = '#' . str_pad((string) $ticketId, 4, '0', STR_PAD_LEFT);
        $bg        = '#EFE7D8'; 
        $surface   = '#FBF6EC'; 
        $ink       = '#1C1814'; 
        $inkSoft   = '#4C4339'; 
        $muted     = '#8A7C66'; 
        $vermilion = '#D6402E'; 
        $vermLight = '#E2685A';
        $border    = '#C6B89C'; 
        $serif     = "'Fraunces', Georgia, 'Times New Roman', serif";
        $sans      = "'Archivo', -apple-system, 'Segoe UI', Helvetica, Arial, sans-serif";
        $mono      = "'Space Mono', 'Courier New', monospace";
        $barcodeWidths = [3, 1, 2, 4, 1, 3, 1, 1, 2, 3, 1, 4, 2, 1, 3, 1, 2, 1, 3, 2, 1, 4, 1, 2, 3, 1, 2, 1];
        $barcode = '';
        foreach ($barcodeWidths as $i => $w) {
            $color = $i % 2 === 0 ? $ink : 'transparent';
            $barcode .= "<td width=\"{$w}\" style=\"width:{$w}px;background:{$color};font-size:0;line-height:0;\">&nbsp;</td>";
        }

        return <<<HTML
        <!DOCTYPE html>
        <html lang="pt-BR">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="x-apple-disable-message-reformatting">
            <title>Ingresso confirmado</title>
            <link href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,600;9..144,700;9..144,900&family=Archivo:wght@400;600;700;800&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
            <style>
                body { margin:0; padding:0; width:100%; background:{$bg}; }
                @media (max-width: 600px) {
                    .wrap { width:100% !important; }
                    .pad { padding-left:22px !important; padding-right:22px !important; }
                }
            </style>
        </head>
        <body style="margin:0;padding:0;background:{$bg};">
            <div style="display:none;max-height:0;overflow:hidden;opacity:0;color:{$bg};font-size:1px;line-height:1px;">
                Ingresso {$serial} confirmado para {$eventName}. Guarde como comprovante.
            </div>

            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:{$bg};">
                <tr>
                    <td align="center" style="padding:36px 16px;">

                        <table role="presentation" class="wrap" width="520" cellpadding="0" cellspacing="0" style="width:520px;max-width:520px;background:{$surface};border:1.5px solid {$ink};border-radius:4px;">

                            <tr>
                                <td style="background:{$ink};border-radius:3px 3px 0 0;padding:13px 22px;">
                                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td style="font-family:{$mono};font-size:11px;font-weight:700;letter-spacing:0.26em;text-transform:uppercase;color:{$surface};">
                                                Admit&nbsp;One
                                            </td>
                                            <td align="right" style="font-family:{$mono};font-size:11px;letter-spacing:0.12em;color:{$vermLight};">
                                                {$serial}
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td class="pad" style="padding:30px 34px 8px;">
                                    <div style="font-family:{$mono};font-size:11px;font-weight:700;letter-spacing:0.2em;text-transform:uppercase;color:{$vermilion};">
                                        &#9646;&#9646;&nbsp;&nbsp;Ingresso confirmado
                                    </div>
                                    <h1 style="margin:14px 0 0;font-family:{$serif};font-size:30px;line-height:1.05;font-weight:700;letter-spacing:-0.02em;color:{$ink};">
                                        {$eventName}
                                    </h1>
                                    <p style="margin:18px 0 0;font-family:{$sans};font-size:15px;line-height:1.6;color:{$inkSoft};">
                                        Olá, <strong style="color:{$ink};">{$name}</strong>. Sua compra foi
                                        confirmada com sucesso. Apresente este comprovante na entrada do evento.
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td class="pad" style="padding:24px 34px 4px;">
                                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td style="padding:11px 0;border-bottom:1px solid {$border};font-family:{$mono};font-size:11px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:{$muted};">Data</td>
                                            <td align="right" style="padding:11px 0;border-bottom:1px solid {$border};font-family:{$sans};font-size:15px;font-weight:700;color:{$ink};">{$date}</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:11px 0;border-bottom:1px solid {$border};font-family:{$mono};font-size:11px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:{$muted};">Nº do ingresso</td>
                                            <td align="right" style="padding:11px 0;border-bottom:1px solid {$border};font-family:{$mono};font-size:15px;font-weight:700;color:{$ink};">{$serial}</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td class="pad" style="padding:18px 34px 6px;">
                                    <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td style="font-family:{$mono};font-size:11px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:{$muted};vertical-align:middle;">Valor pago</td>
                                            <td align="right" style="font-family:{$serif};font-size:34px;font-weight:700;letter-spacing:-0.02em;color:{$ink};white-space:nowrap;">
                                                <span style="font-size:15px;font-weight:600;color:{$muted};">R$</span>&nbsp;{$price}
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding:20px 18px 0;">
                                    <div style="border-top:2px dashed {$border};font-size:0;line-height:0;">&nbsp;</div>
                                </td>
                            </tr>

                            <tr>
                                <td class="pad" style="padding:16px 34px 26px;">
                                    <table role="presentation" cellpadding="0" cellspacing="0" height="36" style="height:36px;">
                                        <tr>{$barcode}</tr>
                                    </table>
                                    <div style="font-family:{$mono};font-size:10px;letter-spacing:0.16em;color:{$muted};text-transform:uppercase;margin-top:8px;">
                                        Bilheteria &middot; Sistema de Ingressos
                                    </div>
                                </td>
                            </tr>
                        </table>

                        <table role="presentation" class="wrap" width="520" cellpadding="0" cellspacing="0" style="width:520px;max-width:520px;">
                            <tr>
                                <td style="padding:18px 8px 0;font-family:{$mono};font-size:11px;line-height:1.6;letter-spacing:0.04em;color:{$muted};">
                                    E-mail automático &mdash; não é necessário respondê-lo.
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
            </table>
        </body>
        </html>
        HTML;
    }
}
