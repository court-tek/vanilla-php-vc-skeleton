<?php loadPartial('head') ?>
    <section>
        <ul class="header">
          <li class="header__link">home</li>
          <li class="header__link">about</li>
          <li class="header__link">contact</li>
        </ul>
        <div class="home">
          <h2><?= $home['greeting'] ?></h2>
        </div>
    </section>
<?php loadPartial('footer') ?>