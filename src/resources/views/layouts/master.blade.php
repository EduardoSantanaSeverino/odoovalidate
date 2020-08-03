<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	{!! Html::style('css/bootstrap.css') !!}
	{!! Html::style('css/site.css') !!}
	<!--<link type="text/css" rel="stylesheet" href="css/bootstrap.css">-->
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header" style="margin-right: 15px;">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a class="navbar-brand" href="{{ route('home.index') }}">Laravel!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav"> 
          	<li class="active"><a href="{{ route('artes.index') }}">Artes</a></li> 
            <li><a href="{{ route('artes.create') }}">Crear</a></li> 
          	<li><a href="#">Link</a></li> 
          	<li><a href="#">Link</a></li> 
          </ul>
          <form class="navbar-form navbar-right" role="form" method="POST" action="{{ url('/login') }}">
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

	@yield('content')

	<!-- Scripts -->
	{!! Html::script('js/jquery-2.2.3.min.js') !!}
	{!! Html::script('js/bootstrap.min.js') !!}
	<!-- 
		<script src="js/jquery-2.2.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	-->

</body>
</html>