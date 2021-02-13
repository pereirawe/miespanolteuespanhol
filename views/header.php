<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $content->subtitle ? $content->subtitle . ' | ' : '' ?> <?= $content->title ?></title>

    <link rel='shortcut icon' type="image/x-icon" href='./favicon.ico'/>

    <!-- This site is optimized SEO -->
    <meta name="description" content="<?= $content->description ?>"/>
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
    <link rel="canonical" href="https://miespanolteuespanhol.com/"/>
    <meta property="og:locale" content="pt_BR"/>
    <meta property="og:locale:alternate" content="en_US"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?= $content->title ?>"/>
    <meta property="og:description" content="<?= $content->description ?>"/>
    <meta property="og:url" content="https://miespanolteuespanhol.com/"/>
    <meta property="og:site_name" content="<?= $content->title ?>"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:description" content="<?= $content->description ?>"/>
    <meta name="twitter:title" content="<?= $content->title ?>"/>

    <meta name="keywords" content=""/>

    <meta property="og:image" content="https://miespanolteuespanhol.com/images/logo500x500.jpg#T67sDMFGFX"/>
    <meta name="twitter:domain" content="<?= $content->title ?>"/>
    <meta name="twitter:image" content="https://miespanolteuespanhol.com/images/logo500x500.jpg#T67sDMFGFX"/>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--AOS Animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/main.css#T67sDMFGFX">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-J7Z2SS8TYE"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-J7Z2SS8TYE');
    </script>

</head>
<body ng-app="collagenelixir4uApp" ng-controller="collagenelixir4uController as collagenelixir4u">

<div id="page-loading" ng-if="loading" data-aos="fade-up"></div>

<div id="header">
    <div class="container centered" data-aos="fade-up">
        <a href="./<?= $langURLGet ?>">
            <img class="my-2" src="./images/logo.png" alt="" height="130">
            <h3>Instituto de idiomas</h3>
        </a>
    </div>
</div>