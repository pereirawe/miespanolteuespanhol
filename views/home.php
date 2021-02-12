<div class="container-fluid py-2 centered" id="home-section-1">
    <div class="row py-5">
        <div class="col-md-12">
            <p><?= $content->home['p_1'] ?></p>
            <h1 class="mt-4"><?= $content->home['h1_1'] ?></h1>
        </div>

        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h3 class="mt-3 mb-5"><?= $content->home['h3'] ?></h3>
        </div>
        <div class="col-md-2"></div>

        <div class="col-md-3">
            <div class="combo-img mb-3" id="combo-img-1"></div>
            <h4><?= $content->home['h4_1'] ?></h4>
            <p><?= $content->home['p2_1'] ?></p>
        </div>
        <div class="col-md-3">
            <div class="combo-img mb-3" id="combo-img-2"></div>
            <h4><?= $content->home['h4_2'] ?></h4>
            <p><?= $content->home['p2_2'] ?></p>
        </div>
        <div class="col-md-3">
            <div class="combo-img mb-3" id="combo-img-3"></div>
            <h4><?= $content->home['h4_3'] ?></h4>
            <p><?= $content->home['p2_3'] ?></p>
        </div>
        <div class="col-md-3">
            <div class="combo-img mb-3" id="combo-img-4"></div>
            <h4><?= $content->home['h4_4'] ?></h4>
            <p><?= $content->home['p2_4'] ?></p>
        </div>

        <div class="col-md-12">
            <a href="./plans.php" class="btn btn-primary"><?= $content->home['btn_1'] ?></a>
        </div>
    </div>
</div>

<div class="container" id="home-section-2">
    <div class="row">
        <div class="col-md-12 centered mt-5 py-2">
            <h1><?= $content->home['h1_2'] ?></h1>
        </div>
        <div class="col-md-6 py-3 centered">
            <img src="../images/home/home1.jpg" alt="" width="100%">
            <div class="p-3">
                <p><?= $content->home['p3_1'] ?></p>
            </div>
        </div>
        <div class="col-md-6 py-3 centered">
            <img src="../images/home/home2.jpg" alt="" width="100%">
            <div class="p-3">
                <p><?= $content->home['p3_2'] ?></p>
            </div>
        </div>
    </div>
</div>