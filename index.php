<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <script type="text/javascript" src="sample.js"></script> -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>MyPortfolio</title>
  </head>

  <body>
    <div class="link-sp" id="top"></div>
    <header><?php include(dirname(__FILE__).'/header.php'); ?></header>
    <div class="back">
        <div class="title">
          <p>Kenta Mori Portfolio</p>
        </div>
        <div class="link-sp" id="profile"></div>
        <div class="content-outer" >
          <div class="content">
            <img class="icon" src="images/icon_profile.png" alt="">
            <h1>Profile</h1>
            <h3>森 健太 &ensp; Mori Kenta</h3>
            <h3>工学院大学 情報学部 コンピュータ科学科</h3>
          </div>
        </div>
        <div class="link-sp" id="works"></div>
        <div class="content-outer">
          <div class="content" >
            <img class="icon" src="images/icon_works.png" alt="">
            <h1>Works</h1>
            <h3>myApp</h3>
          </div>
        </div>

    </div>
    <footer><?php include(dirname(__FILE__).'/footer.php'); ?></footer>
  </body>
</html>
