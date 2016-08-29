<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Guess the final score</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="main-row row">
    <div class="form-container col-sm-6 col-sm-offset-6 text-center">
      <img class="centered main-partner" src="images/2.png" alt="">
      <h1 class="main-title">Guess the final score</h1>
      <?php
        $equipos = explode("_", $_GET['encuentro']);
      ?>

      <div class="vs centered">
        <img src="images/<? echo $equipos[0]; ?>.png" height="70px" width="70px" alt="">
        <span>vs</span>
        <img src="images/<? echo $equipos[0]; ?>.png"  height="70px" width="70px" alt="">
      </div>
      


      <div class="form row">
        <form action="sender.php" method="post">
          <div class="col-sm-4 col-sm-offset-2">
            <div class="form-group">
              <input type="text" class="form-control" name="name" id="name" placeholder="NAME" required="true">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="EMAIL"  required="true">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="marker" id="marker" placeholder="MARKER" required="true">
            </div>
          </div>
          <div class=col-sm-4>
            <div class="checkbox">
              <label>
                <input type="checkbox"  required="true"> Rules and cond
              </label>
              <span>Terms and conditions of the promotion</span>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>
          </div>
        </form>
      </div>

      <div class="prizes">
        <span class="tag">Prizes</span>
        <img src="images/5.png"  height="70px" width="70px" alt="">
        <img src="images/6.png"  height="70px" width="70px" alt="">
        <img src="images/7.png"  height="70px" width="70px" alt="">
      </div>

      <div class="sponsors text-center">
        <img src="images/8.png"  height="70px" width="70px" alt="">
        <img src="images/9.png"  height="70px" width="70px" alt="">
        <img src="images/10.png"  height="70px" width="70px" alt="">
        <img src="images/11.png"  height="70px" width="70px" alt="">
        <img src="images/12.png"  height="70px" width="70px" alt="">
        <img src="images/13.png"  height="70px" width="70px" alt="">
      </div>
    </div>
  </div>
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
