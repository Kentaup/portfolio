<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <script type="text/javascript" src="sample.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>MyPortfolio</title>
  </head>

  <body>
    <div class="link-sp" id="top"></div>
    <header><?php include(dirname(__FILE__).'/header.php'); ?></header>
    <div class="bg">
      <div class="bg-c">
        <div class="content">
          <p class="title">Kenta Mori Portfolio</p>
          <div class="link-sp" id="profile"></div>
          <div class="content-outer" >
            <div class="content-inner">
              <img class="icon" src="images/icon_profile.png" alt="">
              <h1>Profile</h1>
              <h3>森 健太 &ensp; Mori Kenta</h3>
              <h3>工学院大学 情報学部 コンピュータ科学科</h3>
            </div>
          </div>
          <div class="link-sp" id="works"></div>
          <div class="content-outer">
            <div class="content-inner">
              <img class="icon" src="images/icon_works.png" alt="">
              <h1>Works</h1>
              <h3>和太鼓の会 鼓遊 ホームページ</h3>
              <p>URL: <a href="https://koyu.herokuapp.com/">https://koyu.herokuapp.com</a> </p>
              <p>使用技術:HTML,CSS,javascript,Bootstrap4</p>
            </div>
          </div>
          <div class="link-sp" id="skills"></div>
          <div class="content-outer">
            <div class="content-inner">
              <img class="icon" src="images/icon_works.png" alt="">
              <h1>Skills</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer><?php include(dirname(__FILE__).'/footer.php'); ?></footer>
  </body>
</html>
