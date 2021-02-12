<div id="about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12 centered py-5">
                <p><?= $content->aboutUs['p1_1'] ?></p>
                <h1><?= $content->aboutUs['h1_1'] ?></h1>
            </div>
            <div class="col-md-12">
                <h2><?= $content->aboutUs['h2_1'] ?></h2>
                <p><?= $content->aboutUs['p2_1'] ?></p>
                <h2><?= $content->aboutUs['h2_2'] ?></h2>
                <p><?= $content->aboutUs['p2_2'] ?></p>
                <h2><?= $content->aboutUs['h2_3'] ?></h2>
                <p><?= $content->aboutUs['p2_3'] ?></p>
                <hr>
            </div>
        </div>
    </div>
    <div class="container centered">
        <div class="row">
            <div class="col-md-6" style="display: flex;align-items: center;">
                <div>
                    <h2><?= $content->aboutUs['founders'][0]['title'] ?></h2>
                    <h1><?= $content->aboutUs['founders'][0]['name'] ?></h1>
                    <hr>
                    <p><?= $content->aboutUs['founders'][0]['bio'] ?></p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="../images/about-us/alejandro.jpg" alt="Alejandro Tovar" width="100%">
            </div>
            <div class="col-md-12 py-2">
                <hr>
            </div>
            <div class="col-md-6">
                <img src="../images/about-us/claudio.jpg" alt="Alejandro Tovar" width="100%">
            </div>
            <div class="col-md-6" style="display: flex;align-items: center;">
                <div>
                    <h2><?= $content->aboutUs['founders'][1]['title'] ?></h2>
                    <h1><?= $content->aboutUs['founders'][1]['name'] ?></h1>
                    <hr>
                    <p><?= $content->aboutUs['founders'][1]['bio'] ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
