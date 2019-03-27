<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>
    <script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=e60f2aa6-582f-40a9-9eb2-4f55ef1f62a1"> </script>
  </head>
  <body>

    <?php
    require_once 'vendor/autoload.php';

    $app = new \Slim\Slim();
    $app->get("/pruebas", function() use ($app){
      echo "Hola prros desde Slim PHP";
    });
    $app->get("/probando", function() use ($app){
      echo "Hola prros desde Slim PHP la otra ruta";
    });
    $app->run();
    ?>

  </body>
</html>
 <!-- Start of dooplyhelp Zendesk Widget script -->
 <!-- End of dooplyhelp Zendesk Widget script -->
