
    <?php
    // --- DADOS DO PERFIL (PREENCHA COM SEUS DADOS) ---
    $nome = "Charlies Brown jr♫♫";
    $bio = "❝𝖀𝖓𝖘 𝖛𝖎𝖛𝖛𝖊𝖗 𝖈𝖔𝖒𝖔 𝖘𝖊 𝖓𝖚𝖓𝖈𝖆 𝖋𝖔𝖘𝖘𝖊𝖒 𝖒𝖔𝖗𝖗𝖊𝖗 𝖔𝖚𝖙𝖗𝖔𝖘 𝖒𝖔𝖗𝖗𝖊𝖒 𝖈𝖔𝖒𝖔 𝖘𝖊 𝖓𝖚𝖓𝖈𝖆 𝖙𝖎𝖛𝖊𝖘𝖘𝖊𝖒 𝖛𝖎𝖛𝖎𝖉𝖔❞<br><br>
    @𝕾𝖆𝖓𝖙𝖔𝖘<br><br>
    𝕾𝖐𝖆𝖙𝖊 𝕭𝖔𝖆𝖗𝖉";
    $imagem ="https://i.pinimg.com/736x/ee/f3/55/eef3556161bfa4884de825e6c16a0248.jpg"; // Pegue o link da SUA foto.
    $links = [
        "𝐢𝐧𝐬𝐭𝐚𝐠𝐫𝐚𝐦" => "https://instagram.com/iguinxit",
        "𝐖𝐡𝐚𝐭𝐬𝐀𝐩𝐩"  => "https://wa.me/17981924356",
        "𝐌𝐞𝐮 𝐣𝐨𝐠𝐨 𝐟𝐚𝐯𝐨𝐫𝐢𝐭𝐨" => "https://play.google.com/store/apps/details?id=com.dts.freefireth&hl=pt_BR",
        "𝐌𝐮𝐬𝐢𝐜𝐚 𝐝𝐨 𝐌𝐨𝐦𝐞𝐧𝐭𝐨" => "https://www.youtube.com/watch?v=oD9izvb3gO0"
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
     
        
        </div>
        >
            <?php
                foreach ($links as $texto => $url) {
                $classe_extra = "";
                // DESAFIO: Se o texto for "WhatsApp" (ou outro que você queira), mude a variável $classe_extra para "destaque". Escreva o IF aqui:
                if($texto == "𝐢𝐧𝐬𝐭𝐚𝐠𝐫𝐚𝐦"){
                    $classe_extra="destaque";
                }
                // O PHP constrói o botão HTML
                echo "<a href='$url' class='btn $classe_extra' target='_blank'>
                $texto
                </a>";
                }

            ?>
        </div>
        <div class="area-contato">
            <a href="contato.php" class="btn-msg">📧 Mandar Mensagem</a>
        </div>
    </div>
</body>
</html>
</body>
</html>