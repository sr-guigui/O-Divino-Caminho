<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Captar respostas do formulário 
    $pecado_grave = $_POST['pecado_grave'];
    $motivo_erro = $_POST['motivo_erro'];
    $pecado_capital = $_POST['pecado_capital'];
    $apego = $_POST['apego'];
    $amor_deus = $_POST['amor_deus'];

    $destino = "";
    $camada = "";
    $conselho = "";

    // 1. INFERNO ====================
    if ($pecado_grave == "Sim") {
        $destino = "Inferno";

        if ($motivo_erro == "Falta de controle") {
            $camada = "Círculos da Incontinência (2º ao 5º Círculo)";
            $conselho = "Você corre perigo. Seus desejos (comida, dinheiro, prazer) estão te controlando. Para melhorar: Pratique o autocontrole, jejum e pequenas renúncias diárias. Arrependa-se logo!";
        } elseif ($motivo_erro == "Raiva") {
            $camada = "7º Círculo (Os Violentos)";
            $conselho = "A agressividade pode destruir sua alma. Para melhorar: Busque o perdão, aprenda a respirar antes de agir e peça a Deus a virtude da mansidão. Peça desculpas a quem você feriu.";
        } elseif ($motivo_erro == "Mentira") {
            $camada = "8º e 9º Círculos (Fraudulentos e Traidores)";
            $conselho = "Este é o nível mais profundo, o pecado do intelecto frio. Para melhorar: Seja transparente. Pare de manipular os outros para ganho próprio. Confesse a verdade, custe o que custar.";
        }
    }

    // 2. PURGATÓRIO  =============
    elseif ($pecado_grave == "Não" && ($apego == "Totalmente apegado" || $apego == "Tento lutar")) {
        $destino = "Purgatório";

        if ($pecado_capital == "Orgulho") {
            $camada = "1ª Cornija (Os Orgulhosos)";
            $conselho = "O orgulho pesa sua alma. Para evitar muito tempo de purificação, pratique a humildade: faça serviços invisíveis que ninguém vai elogiar e reconheça seus erros.";
        } elseif ($pecado_capital == "Inveja") {
            $camada = "2ª Cornija (Os Invejosos)";
            $conselho = "A inveja cega espiritualmente. Para melhorar: Aprenda a celebrar as vitórias dos outros e agradeça a Deus pelo que você já tem.";
        } elseif ($pecado_capital == "Ira") {
            $camada = "3ª Cornija (Os Iracundos)";
            $conselho = "A raiva te cega como uma fumaça densa. Para melhorar: Ore por aqueles que te irritam e pratique a paciência e a mansidão diariamente.";
        } elseif ($pecado_capital == "Preguiça") {
            $camada = "4ª Cornija (Os Preguiçosos)";
            $conselho = "Você ama a Deus de forma fraca e lenta. Para melhorar: Acorde com um propósito, vença a procrastinação e sirva ao próximo com alegria e zelo.";
        } elseif ($pecado_capital == "Avareza") {
            $camada = "5ª Cornija (Os Avarentos)";
            $conselho = "Sua alma está muito presa às coisas materiais. Para melhorar: Pratique a caridade financeira. Doe aquilo que te custa e desapegue-se dos bens terrenos.";
        } elseif ($pecado_capital == "Gula") {
            $camada = "6ª Cornija (Os Gulosos)";
            $conselho = "Seus apetites estão desordenados. Para melhorar: Pratique o jejum, coma apenas o necessário e pare de buscar conforto emocional na comida ou bebida.";
        } elseif ($pecado_capital == "Luxúria") {
            $camada = "7ª Cornija (Os Luxuriosos)";
            $conselho = "Seu coração se apega fácil aos prazeres carnais. Para melhorar: Evite gatilhos visuais, proteja seus pensamentos e busque a virtude da castidade e pureza.";
        }
    }

    // 3. PARAÍSO  ===============
    elseif ($pecado_grave == "Não" && $apego == "Desapegado") {
        $destino = "Paraíso";

        if ($amor_deus == "Inconstante") {
            $camada = "Esferas Inferiores (Céu da Lua ou de Mercúrio)";
            $conselho = "Sua alma está salva, mas seu amor ainda tem traços de busca por reconhecimento. Para subir mais alto: Faça o bem no escondido, sem esperar aplausos da terra.";
        } elseif ($amor_deus == "Ativo") {
            $camada = "Esferas Intermediárias (Céu do Sol, Marte ou Júpiter)";
            $conselho = "Você tem um amor forte e prático, é o nível dos justos e guerreiros da fé. Para melhorar: Continue usando seus talentos para o bem, lembrando que toda força vem de Deus.";
        } elseif ($amor_deus == "Contemplativo") {
            $camada = "Esferas Superiores (Céu de Saturno, Estrelas Fixas ou o Empíreo)";
            $conselho = "Seu coração já busca as coisas do alto. Para melhorar: Mantenha sua vida de oração fervorosa e deixe que sua luz interior ilumine e guie os que estão na escuridão.";
        }
    }
} else {
    
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Termômetro Espiritual - Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        
        <img src="logo.png" width="500" alt="Logo">

        <h2>Seu Diagnóstico Espiritual</h2>

        <strong> Destino Atual: </strong>
        <?php echo $destino; ?>
        <br><br>

        <strong> Onde você estaria (Camada): </strong>
        <?php echo $camada; ?>
        <br><br>

        <strong> Como melhorar de vida hoje: </strong>
        <?php echo $conselho; ?>
        <br><br>
        <a class="btn" href="index.html">Voltar</a>
    </div>
    <br><br>

</body>

</html>