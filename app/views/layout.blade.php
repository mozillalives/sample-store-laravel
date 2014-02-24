<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sample Store!</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
    
    <link rel="stylesheet" href="/css/master.css" type="text/css" media="screen" title="no title" charset="utf-8">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        
    <style type="text/css" media="screen">
        table td {
            text-align: left;
        }
    </style>
  </head>

  <body>
      
      <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Sample Store!</a>
              </div>
              <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                  <li {{ "ProductController@showList" == Route::currentRouteAction() ? 'class="active"' : '' }}><a href="{{ URL::action('ProductController@showList') }}">List</a></li>
                  <li {{ "ProductController@showAddOne" == Route::currentRouteAction() ? 'class="active"' : '' }}><a href="{{ URL::action('ProductController@showAddOne') }}">Add One</a></li>
                </ul>
              </div>
            </div>
          </div>

    <div class="container">

        <div class="starter-template">
            <div id="ajax-result-msg"></div>
            @yield('content')
        </div>
        
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    @yield('extrajs')
    
  </body>
</html>
