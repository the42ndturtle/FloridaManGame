<html>
  <head>
    <meta charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="gameStyle.css">
    <title>Florida Man Game</title>
  </head>
  <body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="play.js"></script>
    <div id="article-wrapper">
      <div id="article">
        <h1 id="articleText"></h1>
      </div>
    </div>
    <div id="top-choice" class="choice">
      <h1 align="center" style="verticle-align: middle">REAL</h1>
    </div>
    <div id="bottom-choice" class="choice">
      <h1 align="center" style="verticle-align: middle">FAKE</h1>
    </div>
    <p id="articles" style="display: none" >
    <?php
    echo file_get_contents('articles.json');
    ?>
    </p>
  </body>
</html>
