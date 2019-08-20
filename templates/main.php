<main class="container">
  <section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
      <!--заполните этот список из массива категорий-->
      <?php foreach ($category as $value) { ?>
      <li class="promo__item promo__item--boards">
        <a class="promo__link" href="pages/all-lots.html"><?= esc($value); ?></a>
      </li>
      <?php } ?>
    </ul>
  </section>
  <section class="lots">
    <div class="lots__header">
      <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
      <!--заполните этот список из массива с товарами-->
      <?php foreach ($products as $value) { ?>
      <li class="lots__item lot">
        <div class="lot__image">
          <img src="<?= esc($value['url_img']); ?>" width="350" height="260" alt="">
        </div>
        <div class="lot__info">
          <span class="lot__category"><?= esc($value['category']); ?></span>
          <h3 class="lot__title"><a class="text-link" href="pages/lot.html"><?= esc($value['name']); ?></a></h3>
          <div class="lot__state">
            <div class="lot__rate">
              <span class="lot__amount">Стартовая цена</span>
              <span class="lot__cost"><?= esc(formatAmount($value['price'])); ?></span>
            </div>
            <?php $time_finish = time_counter($value['date_finish']);
              $result_time = $time_finish[0] . ':' . $time_finish[1];
              if ($time_finish[0] < 1 && $time_finish[1] > 0) { ?>
            <div class="lot__timer timer timer--finishing">
              <?= $result_time; ?>
            </div>
            <?php } else { ?>
            <div class="lot__timer timer ">
              <?= $result_time; ?>
            </div>
            <?php } ?>
          </div>
        </div>
      </li>
      <?php } ?>
    </ul>
  </section>
</main>