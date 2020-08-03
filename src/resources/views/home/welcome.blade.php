<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Odoo Validate Me - Login Form</title>
    
    {!! Html::style('css/normalize.css') !!}
    {!! Html::style('css/login.css') !!}
    {!! Html::script('js/prefixfree.min.js') !!}

  </head>

  <body>

    <div class="login">
    <h1>Login Me</h1>
   <!--  <form method="post">
        <input type="text" name="u" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form> -->
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {!! csrf_field() !!}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

            <div class="col-md-6">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

            <div class="col-md-6">
                <input type="password" class="form-control" name="password">

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

       <!--  
       <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember"> Remember Me
                    </label>
                </div>
            </div>
        </div> 
        -->

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary btn-block btn-large">
                    <i class="fa fa-btn fa-sign-in"></i>Login
                </button>
            </div>
        </div>
    </form>
</div>
    
  </body>
</html>
