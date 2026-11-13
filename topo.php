<?php $titulo = $titulo ?? "Boletim da Turma"; ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($titulo); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header class="topo">
        <h1>Boletim da Turma</h1>
        <p>Curso de Desenvolvimento Web</p>
    </header>
    <main class="container">
