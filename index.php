
    <?php
    // --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
    $nome = "Charlies Brown jr♫♫";
    $bio = "A vida me ensinou  nunca desistir<br>
    @Santos<br>
    𝕾𝖐𝖆𝖙𝖊 𝕭𝖔𝖆𝖗𝖉<br>";
    $imagem ="https://i.pinimg.com/736x/ee/f3/55/eef3556161bfa4884de825e6c16a0248.jpg"; // Pegue o link da SUA foto.
    $links = [
        "Instagram" => "https://instagram.com/iguinxit",
        "WhatsApp"  => "https://wa.me/17981924356",
        "Meu Jogo Favorito" => "https://play.google.com/store/apps/details?id=com.dts.freefireth&hl=pt_BR",
        "Música do Momento" => "https://www.youtube.com/watch?v=oD9izvb3gO0"
    ];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BioLink de <?php echo $nome; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <img src="<?php echo $imagem; ?>" alt="Foto de Perfil" class="avatar">

        <h1> <?php echo $nome; ?> </h1>
        <p> <?php echo $bio; ?> </p>
        <div class="lista-links">
            <?php
                foreach ($links as $texto => $url) {
                $classe_extra = "";
                // DESAFIO: Se o texto for "WhatsApp" (ou outro que você queira), mude a variável $classe_extra para "destaque". Escreva o IF aqui:
                if($texto == "Instagram"){
                    $classe_extra="destaque";
                }
                // O PHP constrói o botão HTML
                echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                $texto
                </a>";
                }
            ?>
        </div>
    </div>
</body>
</html>
</body>
</html>