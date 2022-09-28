<?php
include ( 'header.php' );
require_once 'api/route.php';

$route = new Route();

$route->add('/', function() {
  //include ( 'routes/home.php' );
  include ( 'routes/equipe.php' );
});
$route->add('/equipe', function() {
  include ( 'routes/equipe.php' );
});

$route->listen();

include ( 'footer.php' );
?>