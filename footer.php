<footer class="footer">
<?php if(!isset($_SESSION['gdpr'])){?>
        <div class="gdpr-popup">
            <p>Izvēloties sākt testu, Jūs piekrītat mūsu privātuma politikai
                <a href="/gdpr" target="_blank">Privātuma politika</a>.
            </p>
        </div>
    <?php } ?>
    <div class="container">
        <div class="footer__nav">
            <ul role="menu">
                <li role="none"><a href="/apraksts" role="menuitem" target="_blank" rel="noopener">Par testu</a></li>
                <li role="none"><a href="/gdpr" role="menuitem" target="_blank" rel="noopener">Privātuma Politika</a></li>
            </ul>
        </div>
        <div class="footer__copyright"><span>© domasanas-stili.lv 2023</span></div>
    </div>
</footer>