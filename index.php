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
      <h1 class="main-title">Participa y gana</h1>

      <ul class="instrucciones text-left">
        <li>
          <span class="number">1</span>
          <span class="instruccion">Selecciona el partido</span>
        </li>
        <li>
          <span class="number">2</span>
          <span class="instruccion">Ingresa en las casillas cual sera el marcador final</span>
        </li>
        <li>
          <span class="number">3</span>
          <span class="instruccion">Ingresa tu nombre, apellido y correo electronico</span>
        </li>
        <li>
          <form action="form.php" method="get">
            <select class="form-control" name="encuentro" required>
              <option value="">Visitor vs Home</option>
              <?php
                $encuentros = array(
                  "Pittsburgh, Washington", 
                  "Carolina, Denver", 
                  "New York, Buffalo", 
                  "Philadelphia, Chicago", 
                  "Houston, New England", 
                  "Atlanta, New Orleans", 
                  "Miami, Cincinnati", 
                  "New York, Minnesota", 
                  "Arizona, San Francisco", 
                  "Tampa Bay, Carolina", 
                  "Denver, San Diego", 
                  "New York, Arizona", 
                  "Chicago, Green Bay", 
                  "Houston, Denver", 
                  "Jacksonville, Tennessee", 
                  "Minnesota, Chicago", 
                  "Atlanta, Tampa Bay", 
                  "Buffalo, Seattle", 
                  "Cleveland, Baltimore", 
                  "Cincinnati, New York", 
                  "New Orleans, Carolina", 
                  "Houston, Oakland", 
                  "Pittsburgh, Indianapolis", 
                  "Green Bay, Philadelphia", 
                  "Dallas, Minnesota", 
                  "Indianapolis, New York", 
                  "Oakland, Kansas City", 
                  "Baltimore, New England", 
                  "Los Angeles, Seattle", 
                  "Carolina, Washington", 
                  "New York, Philadelphia", 
                  "Detroit, Dallas");



                foreach ($encuentros as &$encuentro) {
                  $value_spaces = str_replace(' ', '', $encuentro);
                  $value_commas = str_replace(',', '_', $value_spaces);
                  $value = strtolower($value_commas);
                  
                  echo "<option value=". $value .">". $encuentro ."</option>";
                }
              ?>
            </select>

            <button type="submit" class="btn btn-default pull-right">Siguiente</button>

            <div class="clearfix"></div>

          </form>
        </li>

      </ul>




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
