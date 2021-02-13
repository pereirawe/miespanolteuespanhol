<div id="plans">
    <div class="container">
        <div id='plan_1' class="row my-5">
            <div class="col-md-6">
                <img src="../images/plans/aula1.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <h2><?= $content->plans['plan_1']['title'] ?></h2>
                <p><?= $content->plans['plan_1']['text'] ?></p>
                <ol>
                    <?php
                        foreach ($content->plans['plan_1']['content'] as $contentLi) {
                            echo '<li>'.$contentLi.'</li>';
                        }
                    ?>
                </ol>
            </div>
        </div>
        <hr>
        <div id='plan_2' class="row my-5">
            <div class="col-md-6">
                <img src="../images/plans/aula2.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6">
            <h2><?= $content->plans['plan_2']['title'] ?></h2>
                <p><?= $content->plans['plan_2']['text'] ?></p>
                <ol>
                    <?php
                        foreach ($content->plans['plan_2']['content'] as $contentLi) {
                            echo '<li>'.$contentLi.'</li>';
                        }
                    ?>
                </ol>
            </div>
        </div>
        <hr>
        <div id='plan_3' class="row my-5">
            <div class="col-md-6">
                <img src="../images/plans/aula3.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6">
            <h2><?= $content->plans['plan_3']['title'] ?></h2>
                <p><?= $content->plans['plan_3']['text'] ?></p>
                <ol>
                    <?php
                        foreach ($content->plans['plan_3']['content'] as $contentLi) {
                            echo '<li>'.$contentLi.'</li>';
                        }
                    ?>
                </ol>
            </div>
        </div>
        <hr>
        <div id='plan_4' class="row my-5">
            <div class="col-md-6">
                <img src="../images/plans/aula4.jpg" alt="" width="100%">
            </div>
            <div class="col-md-6">
            <h2><?= $content->plans['plan_4']['title'] ?></h2>
                <p><?= $content->plans['plan_4']['text'] ?></p>
                <ol>
                    <?php
                        foreach ($content->plans['plan_4']['content'] as $contentLi) {
                            echo '<li>'.$contentLi.'</li>';
                        }
                    ?>
                </ol>
            </div>
        </div>
    </div>
</div>