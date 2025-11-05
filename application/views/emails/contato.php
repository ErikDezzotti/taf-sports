<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem de Contato - TAF Sports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .email-container {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 30px;
        }
        .header {
            background: #ff6600;
            color: white;
            padding: 20px;
            text-align: center;
            border-radius: 5px 5px 0 0;
            margin: -30px -30px 20px -30px;
        }
        .field {
            margin-bottom: 15px;
            padding: 10px;
            background: white;
            border-left: 3px solid #ff6600;
        }
        .field-label {
            font-weight: bold;
            color: #ff6600;
            margin-bottom: 5px;
        }
        .field-value {
            color: #333;
        }
        .message-box {
            background: white;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
            min-height: 100px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h2>Nova Mensagem de Contato</h2>
            <p>TAF Sports - Gestão de Carreiras no Futebol</p>
        </div>

        <div class="field">
            <div class="field-label">Nome:</div>
            <div class="field-value"><?= html_escape($nome) ?></div>
        </div>

        <div class="field">
            <div class="field-label">E-mail:</div>
            <div class="field-value"><a href="mailto:<?= html_escape($email) ?>"><?= html_escape($email) ?></a></div>
        </div>

        <?php if (!empty($telefone)): ?>
        <div class="field">
            <div class="field-label">Telefone:</div>
            <div class="field-value"><?= html_escape($telefone) ?></div>
        </div>
        <?php endif; ?>

        <div class="field">
            <div class="field-label">Assunto:</div>
            <div class="field-value"><?= html_escape($assunto) ?></div>
        </div>

        <div class="field">
            <div class="field-label">Mensagem:</div>
            <div class="message-box">
                <?= $mensagem ?>
            </div>
        </div>

        <div class="footer">
            <p>Esta mensagem foi enviada através do formulário de contato em <?= date('d/m/Y \à\s H:i') ?></p>
            <p><strong>TAF Sports</strong> - Gestão de Carreiras no Futebol</p>
        </div>
    </div>
</body>
</html>
