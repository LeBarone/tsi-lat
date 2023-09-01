<?php ob_start();?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://domasanas-stili.lv/assets/css/mail.css">
    <title>Domāšanas Stilu Testa Rezultāti</title>
</head>
<body>
    <header>
        <a href="/"><img class="img" src="https://domasanas-stili.lv/assets/images/domasanas-stilu-tests-logo_white.svg" alt="domasanas stilu tests logo"></a>
    </header>
    <main>
    <?php
    foreach($results as $category => $style){
        if(!empty($style)){?>
        <div class="mail-category">
            <span class="mail-category-title"><?= $translations[$category] ?></span>
                <?php foreach($style as $title => $values){?>
                    <h2><?= $translations[$title] ?></h2>
                    <div><?= $levels[$values['level']] ?></div>
                    <p><?= $long_descriptions[$title]; ?></p>
                <?php }?>
         </div>       
        <?php }}?>
    </main>
    <footer>
        <span>© domasanas-stili.lv 2023</span>
    </footer>
</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
?>