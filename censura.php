<?php


// controllo sica che la varibile esista o che sia vuota
$badword = (empty($_POST['badword']) || !isset($_POST['badword'])) ? '' : $_POST['badword'];
$paragrafo = (empty($_POST['paragrafo']) || !isset($_POST['paragrafo'])) ? '' : $_POST['paragrafo'];

$badword_len = strlen($badword);
$censura_str = '';


$paragrafo_censurato = str_replace($badword, '***', $paragrafo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>

  <title>Testo censurato</title>
</head>
<body>

  <div class="container my-5">
    <h1>Controllo badword</h1>
    <div class="row">
      <div class="col-6">
        <h3>Testo originale</h3>
        <p><?php echo $paragrafo ?></p>
        <p>Lunghezza paragrafo: <?php echo strlen($paragrafo ) ?></p>

      </div>
      <div class="col-6">
      <h3>Testo censurato</h3>
        <p><?php echo $paragrafo_censurato ?></p>
        <p>Lunghezza paragrafo: <?php echo strlen($paragrafo_censurato ) ?></p>

      </div>
    </div>
   

  </div>

  
</body>
</html>