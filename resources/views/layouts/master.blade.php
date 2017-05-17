
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Gabriel Rojas">
    <link rel="icon" href="../../favicon.ico">

    <title>Sistema de votación</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/votes.css" rel="stylesheet">
  </head>

  <body>

    @include('layouts.nav')
      <hr>
      <hr>
      <div class="container">
          <div class="row">
            @yield('content')          
          </div>
      </div>

    @yield('footer')
    
  </body>
</html>
