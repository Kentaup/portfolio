<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- <script type="text/javascript" src="sample.js"></script> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="master.css">
    <title>MyPortfolio</title>
  </head>

  <body>
    <header><?php include(dirname(__FILE__).'/header.php'); ?></header>

    <div class="containar m-3">
      <div class="row border border-dark m-3">
        <h2 class="">プロフィール</h2>
        <p class="col-sm-12">森健太 20歳</p>
        <p class="col-sm-12">工学院大学情報学部コンピュータ科学科3年  <a href="https://www.kogakuin.ac.jp/faculty/lab/info_lab145.html" target="_blank">高信頼ソフトウェア開発工学研究室</a> 所属</p>
        <p>経験</p>
        <ul>
          <li>大学の講義でC,Javaを修得</li>
          <li>大学の委員会でHPの運営を担当(<a href="http://www.ns.kogakuin.ac.jp/~wws5018/" target="_blank">工学院大学学生団体ポータルサイトSHAiR</a>)</li>
          <li>株式会社セレスの３日間インターンにてPHPを用いたwebアプリのチーム開発を経験</li>
          <li>現在Rubyを習得中</li>
        </ul>
        <p class="col-sm-12">趣味:和太鼓</p>
      </div>
      <div class="row border border-dark m-3">
        <h2 class="col-sm-12">成果物</h2>
        <p class="col-sm-12">和太鼓の会 鼓遊 ホームページ</p>
      </div>
      <div class="row border border-dark m-3">
        <h2 class="col-sm-12">リンク</h2>
        <ul>
          <li><a href="https://github.com/Kentaup" target="_blank">GitHub</a></li>
          <li><a href="https://twitter.com/moridaiko" target="_blank">Twitter</a> </li>
          <li><a href="https://www.facebook.com/profile.php?id=100040431405771" target="_blank">facebook</a></li>
          <!-- <li>Qiita : </li> -->
        </ul>
      </div>
    </div>


    <footer><?php include(dirname(__FILE__).'/footer.php'); ?></footer>
  </body>
</html>
