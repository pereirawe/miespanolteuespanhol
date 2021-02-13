<nav id="navbar" class="navbar navbar-expand-lg">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span> <small>MENU</small>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="./<?= $langURLGet ?>"><?= $content->nav['home'] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./about-us.php<?= $langURLGet ?>"><?= $content->nav['about-us'] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./plans.php<?= $langURLGet ?>"><?= $content->nav['plans'] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./promotions.php<?= $langURLGet ?>"><?= $content->nav['promotions'] ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./contacts.php<?= $langURLGet ?>"><?= $content->nav['contacts'] ?></a>
        </li>
    </ul>
  </div>
</nav>