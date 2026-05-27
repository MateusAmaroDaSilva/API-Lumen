<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Confirmação de Ingresso</title>
    <style>
        body { font-family: 'Helvetica Neue', Arial, sans-serif; background-color: #f4f7f6; margin: 0; padding: 20px; }
        .container { background-color: #ffffff; padding: 30px; border-radius: 12px; max-width: 600px; margin: 0 auto; box-shadow: 0 8px 16px rgba(0,0,0,0.05); }
        .header { background: linear-gradient(135deg, #024DDF 0%, #0A3AA0 100%); color: #ffffff; padding: 30px 20px; border-radius: 12px 12px 0 0; text-align: center; margin: -30px -30px 20px -30px; }
        .header h1 { margin: 0; font-size: 26px; font-weight: 700; }
        .content { color: #4a4a4a; line-height: 1.6; font-size: 16px; }
        .ticket-details { background-color: #f8fafc; padding: 24px; border-radius: 8px; margin: 24px 0; border-left: 5px solid #024DDF; border-right: 1px solid #e2e8f0; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; }
        .ticket-details p { margin: 8px 0; font-size: 15px; }
        .ticket-details p strong { color: #1a202c; display: inline-block; width: 150px; }
        .highlight { color: #024DDF; font-weight: bold; }
        .footer { margin-top: 40px; font-size: 13px; color: #94a3b8; text-align: center; border-top: 1px solid #f1f5f9; padding-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Ingresso Confirmado! 🎉</h1>
        </div>
        
        <div class="content">
            <p>Olá, <strong>{{ $userName }}</strong>!</p>
            <p>Sua compra foi processada com sucesso e seu ingresso está garantido. Abaixo estão os detalhes do seu evento:</p>
            
            <div class="ticket-details">
                <p><strong>Evento:</strong> {{ $event->getName() }}</p>
                <p><strong>Data:</strong> {{ date('d/m/Y \à\s H:i', strtotime($event->getEventDate()->format('Y-m-d H:i:s'))) }}</p>
                <p><strong>Número do Ingresso:</strong> <span class="highlight">#{{ str_pad($ticket->getId(), 6, '0', STR_PAD_LEFT) }}</span></p>
                <p><strong>Valor:</strong> R$ {{ number_format($event->getPrice(), 2, ',', '.') }}</p>
            </div>
            
            <p>Apresente este e-mail no dia do evento (digitalmente pelo celular ou impresso).</p>
            <p>Esperamos que você tenha uma ótima experiência e aproveite muito o evento!</p>
        </div>
        
        <div class="footer">
            <p>Este é um e-mail automático enviado pelo <strong>Sistema de Ingressos</strong>.</p>
            <p>Por favor, não responda a este e-mail. Se precisar de ajuda, entre em contato conosco.</p>
        </div>
    </div>
</body>
</html>
