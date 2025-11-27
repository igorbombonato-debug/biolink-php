
    <?php
    // --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
    $nome = "Charlies Brown jr";
    $bio = "A vida me ensinou  nunca desistir";
    $imagem ="https://i.pinimg.com/736x/ee/f3/55/eef3556161bfa4884de825e6c16a0248.jpg"; // Pegue o link da SUA foto.
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioLink de <?php echo $nome; ?></title>

</head>
<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">

        <h1> <?php echo $nome; ?> </h1>
        <p> <?php echo $bio; ?> </p>

        <div class="lista-links"></div>
    </div>
</body>
</html>
</body>
</html>