<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pagamento Recusado</title>
    <style>
        body { font-family: 'Helvetica Neue', Arial, sans-serif; background-color: #f4f7f6; margin: 0; padding: 20px; }
        .container { background-color: #ffffff; padding: 30px; border-radius: 12px; max-width: 600px; margin: 0 auto; box-shadow: 0 8px 16px rgba(0,0,0,0.05); }
        .header { background: linear-gradient(135deg, #DF023B 0%, #A00A23 100%); color: #ffffff; padding: 30px 20px; border-radius: 12px 12px 0 0; text-align: center; margin: -30px -30px 20px -30px; }
        .header h1 { margin: 0; font-size: 26px; font-weight: 700; }
        .content { color: #4a4a4a; line-height: 1.6; font-size: 16px; }
        .ticket-details { background-color: #fff1f2; padding: 24px; border-radius: 8px; margin: 24px 0; border-left: 5px solid #DF023B; border-right: 1px solid #ffe4e6; border-top: 1px solid #ffe4e6; border-bottom: 1px solid #ffe4e6; }
        .ticket-details p { margin: 8px 0; font-size: 15px; }
        .ticket-details p strong { color: #1a202c; display: inline-block; width: 150px; }
        .footer { margin-top: 40px; font-size: 13px; color: #94a3b8; text-align: center; border-top: 1px solid #f1f5f9; padding-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Ops, o pagamento falhou! 😔</h1>
        </div>
        
        <div class="content">
            <p>Olá, <strong>{{ $userName }}</strong>!</p>
            <p>Infelizmente, o pagamento do seu ingresso não pôde ser processado. Abaixo estão os detalhes da tentativa:</p>
            
            <div class="ticket-details">
                <p><strong>Evento:</strong> {{ $event->getName() }}</p>
                <p><strong>Data:</strong> {{ date('d/m/Y \à\s H:i', strtotime($event->getEventDate()->format('Y-m-d H:i:s'))) }}</p>
                <p><strong>Forma escolhida:</strong> {{ strtoupper(str_replace('_', ' ', $paymentMethod)) }}</p>
                <p><strong>Valor:</strong> R$ {{ number_format($event->getPrice(), 2, ',', '.') }}</p>
            </div>
            
            <p>O valor não foi debitado e sua vaga não foi reservada. Por favor, acesse o sistema novamente e tente com outra forma de pagamento.</p>
        </div>
        
        <div class="footer">
            <p>Este é um e-mail automático enviado pelo <strong>Sistema de Ingressos</strong>.</p>
            <p>Por favor, não responda a este e-mail. Se precisar de ajuda, entre em contato conosco.</p>
        </div>
    </div>
</body>
</html>
