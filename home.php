<body class="page-home">
    <header class="header">
        <div class="container">
            <a class="header__logo" href="/"><img class="img" src="assets/images/domasanas-stilu-tests-logo_white.svg" alt="domasanas stilu tests logo"></a>
        </div>
    </header>
    <main class="body__page">
        <img class="hero" src="assets/images/hero.png" alt="hero">
        <div class="container">
            <div class="main-content">
                <h1 class="heading a-h1">Izpildi testu un uzzini, kāds <span class="decorate">domāšanas stils</span> piemīt tieši Tev!</h1>
                <?php if(isset($_SESSION['results'] )){
                    echo '<a class="button btn--xl btn--home_results" href="/rezultats">Rezultāti</a>';
                    echo '<a class="button btn--xl btn-main_cta has-icon-forward" href="/instrukcija">Sākt jaunu testu</a>';
                    echo '<p class="comment">Rezultāti zudīs, kad aizvērsi pārlūkprogrammas logu.</p>';
                } else {
                    echo '<a class="button btn--xl btn-main_cta has-icon-forward" href="/instrukcija">Uz testu</a>';
                }; ?>
            </div>
        </div>
    </main>
    <?php require_once('footer.php'); ?>
</body>