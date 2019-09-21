<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <!-- FONT: LATO -->
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <!-- FONT: FONTAWESOME -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <!-- CSS:STYLE-->
  <link rel="stylesheet" href="style.css">
  <!-- JS: JQUERY -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--JS:JS SCRIPT -->
  <script src="script.js" charset="utf-8"></script>
  <!-- JS: MOMENT -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
  <!-- JS: CHART JS -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
  <!-- JS: HANDLEBARS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
  <title>PHP-DBCRUD-READ-ADD-UPDATE</title>

</head>
  <body>
    <div class="container">
      <h1>LISTA BEVANDE<span class="addelement"><i class="fas fa-plus"></i></span></h1>
      <div class="box-item">

      </div>
    </div>

    <script id="item-template" type="text/x-handlebars-template">
    <div class="items" data-id={{{id}}}>
      <i class="fas fa-pencil-alt update"></i>
      <i class="fas fa-trash remove"></i>
      <h2>Nome Bevanda:<span>{{{name}}}</span></h2>
      <h2>Marca:<span>{{{brand}}}</span></h2>
      <h2>Prezzo:<span>{{{price}}}</span></h2>
      <h2>Data-Scadenza:[<span>{{{expiry}}}</span>]</h2>
    </div>
  </script>
  </body>
</html>
