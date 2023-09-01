<?php
// If page is stored in session, retrive it, if not, it's 1
$page = isset($_SESSION['next_page']) ? $_SESSION['next_page'] : 1;
// Progress = previous page x 8 questions
$progress = isset($_SESSION['data']) ? count($_SESSION['data']) : 0;
// If it's last page (8) name it Iesniegt, else Tālāk
$button = ($page == 8) ? 'Iesniegt' : 'Tālāk';
?>
<body class="page-survey">
  <header class="header">
    <div class="container">
      <a class="header__logo" href="/"><img class="img" src="assets/images/domasanas-stilu-tests-logo_white.svg" alt="domasanas stilu tests logo"></a>
    </div>
  </header>
  <div class="section--progress-bar">
    <div class="container ">
      <div class="progress-bar">
        <progress id="progress-bar" value="<?= $progress ?>" max="65"></progress>
        <label for="progress-bar" style="width: 75px;"><span class="progress-amount"><?= $progress ?></span> no 65</label>
      </div>
    </div>
  </div>
  <main class="body__page">
    <div class="container">
      <div class="survey__body">
        <form id="form_survey" method="post" action="/post">
        <?php foreach ($pages[$page] as $id){
            $statement = $statements[$id]; ?>
              <div class="survey__item" id="<?= $id ?>">
                <div class="survey__question"><?= $statement ?></div>
                <div class="survey__radios">
                 <?php for ($i = 1; $i <= 7; $i++) {
                    $labelText = ${"opt_" . $i}; ?>
                    <label class='form-control' for='<?= $id ?>-opt_<?= $i ?>'>
                    <?= "<input class='form-input' type='radio' name='$id' id='$id-opt_$i' value='$i'" . checkMe($id, $i) . "/>" ?>
                      <span class="gg-check"></span>
                      <span class="label-text"><?= $labelText ?></span>
                    </label>
                  <?php } ?>
                </div>
              </div>
            <?php } ?>
          <input type="hidden" name="page" value="<?= $page; ?>">
          <input type="hidden" name="action" value="nextPage">
          <button type="submit" class="button cta--next_page has-icon-forward"><?= $button ?></button>
        </form>
        <?php if($page > 1){?>
          <form id="form_back" action="/post" method="post" onsubmit="return copyRadioValues()">
            <input type="hidden" name="action" value="prevPage">
            <input type="hidden" name="page" value="<?= $page; ?>">
            <button type="submit" class="button cta--prev_page has-icon-back">Atpakaļ</button>
          </form>
        <?php }?>
      </div>
    </div>
  </main>
  <script src="assets/scripts/page-test.js"></script>
  <?php require_once('footer.php'); ?>
</body>