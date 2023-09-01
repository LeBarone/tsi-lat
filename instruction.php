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
                <h1 style="color: white">DOMĀŠANAS STILU TESTS</h1>
                <p style="color: white">
                Testa apgalvojumi ir par dažādiem domāšanas stiliem, kas cilvēkiem piemīt un tiek izmantoti risinot problēmas,
                veicot uzdevumus, īstenojot jebkāda veida projektus un pieņemot lēmumus.<br><br>
                Uzmanīgi izlasi katru apgalvojumu un novērtē, cik lielā mērā tas atbilst tam, kā Tu rīkojies skolā, mājās vai darbā.<br><br>
                Atzīmē <b>"Nepavisam neatbilst"</b>, ja apgalvojums Tev nemaz neatbilst – tas nozīmē, ka Tev nav raksturīgi rīkoties šādā veidā. Atzīmē <b>"Pilnīgi atbilst"</b>,
                ja apgalvojums Tev atbilst pilnībā – tas nozīmē, ka Tu gandrīz vienmēr rīkojies šādā veidā.<br><br> 
                Lai norādītu, ka apgalvojums Tev atbilst dažādās pakāpēs, izmanto starpvērtības.<br><br>
                
                Atceries, ka nav pareizu vai nepareizu atbilžu. Vienkārši izvēlies sev atbilstošāko atbildi skalā zem apgalvojuma.
                Testa izpildei nav laika ierobežojuma, tomēr centies neveltīt pārāk daudz laika vienam apgalvojumam.

                </p>
                <p style="color: white;margin-bottom: 50px;">Aizverot pārlūku, Tavi testa rezultāti tiks dzēsti.</p>
                <div class="form-container">
                    <form class="form-element" method="post" action="/post" >
                        <input type="hidden" name="action" value="newTest">
                        <button class="button btn--xl has-icon-forward" type="submit">Sākt</button>
                    </form>
                    <?php if(isset($_SESSION['data'])){?>
                        <form class="form-element" method="post" action="/post" >
                        <input type="hidden" name="action" value="continueTest">
                        <button class="button btn--xl has-icon-forward" type="submit">Turpināt</button>
                    </form>
                    <?php }?>
                </div>
                
            </div>
        </div>
    </main>
    <?php require_once('footer.php'); ?>
</body>