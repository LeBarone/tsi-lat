<?php
// If there is stored results, get them, if not: 404 page
$results = $_SESSION['results'] ? $_SESSION['results'] : broken("Ievadīto atbilžu punktu skaits ir pārāk zems, rezultātu nav iespējams aprēķināt.");
?>
<body class="page-survey">
    <header class="header">
        <div class="container">
            <a class="header__logo" href="/"><img class="img" src="assets/images/domasanas-stilu-tests-logo_white.svg" alt="domasanas stilu tests logo"></a>
        </div>
    </header>
    <div class="result-summary">
        <div class="container">
            <span class="cat">Rezultāti</span>
            <h1 class="h1">Tavi dominējošie domāšanas stili:</h1>
            <div class="summ-items">
                <?php foreach($results as $style => $substyle){
                    if(!empty($substyle)){?>
                    <a class="summ-item" href="#<?= $style ?>">
                        <span class="cat"><?= $translations[$style] ?></span>
                        <span class="title"><?= $translations[key($substyle)] ?></span>
                    </a><?php
                }} ?>
            </div>
        </div>
    </div>
    <main class="body__page">
        <div class="container">
            <div class="survey__body">
            <div class="result_info">
                    <div class="m0"><b>Zemāk vari iepazīties ar visu domāšanas stilu aprakstiem, kuri Tev piemīt.</b></div>
                    <p>Ja vēlies uzzināt vairāk par Prāta pārvaldības teoriju, dodies uz sadaļu <a href="/apraksts" class="cta" role="menuitem" target="_blank" rel="noopener">Par testu!</a></p>
                </div>
                <div class="longform-items">
                    <?php foreach($results as $style => $substyle){
                        if(!empty($substyle)){?>
                    <div class="longform-item" id="<?= $style ?>">
                        <span class="cat"><?= $translations[$style] ?></span>
                        <div class="longform-item--content">
                        <?php foreach($substyle as $title => $data){
                            $level = $data['level'];?>
                            <div class="longform-item--subcontent">
                                <h2 class="title"><?= $translations[$title] ?></h2>
                                <div class="level"><?= $levels[$level] ?></div>
                                <p class="short-description"><?= $descriptions[$title]; ?></p>
                                <span class="cta longform-trigger" onclick="openLongDescription(event)" tabindex="0">Lasīt pilnu aprakstu</span>
                                <div class="long-description">
                                    <p><?= $long_descriptions[$title]; ?></p>
                                    <span class="cta longform-trigger-close" onclick="closeLongDescription(event)" tabindex="0">&uarr; Aizvērt pilno aprakstu</span>
                                </div>
                            </div>
                        <?php }?>
                        </div>
                    </div>
                    <?php }}?>
                    <form id="form-email-results" action="/post" method="post">
                    <h2>Ja vēlies saņemt rezultātus e-pastā, norādi savu e-pasta adresi:</h2>
                        <input class="form-input form-input--email form-element" type="email" name="email-address" required>
                        <input type="hidden" name="action" value="sendEmail">
                        <button class="form-element" type="button" onclick="submitEmailForm(event)">Nosūtīt</button>
                    </form>
                    <div id="email-form-response" class="hidden">asdsad</div>
                </div>
                <div class="form-container">
                    <form method="post" action="/post" >
                        <input type="hidden" name="action" value="continueTest">
                        <button class="button has-icon-back form-element" type="submit">Atpakaļ</button>
                    </form>
                    <form method="post" action="/post" >
                        <input type="hidden" name="action" value="newTest">
                        <button class="button form-element" type="submit">Sākt jaunu testu</button>
                    </form>
                </div>
                
            </div>
        </div>
    </main>
    <script src="assets/scripts/page-results.js"></script>
    <?php require_once('footer.php'); ?>
</body>