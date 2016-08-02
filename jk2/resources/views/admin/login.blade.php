<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
  	<!-- BOOTSTRAP STYLES-->
    <link href="{{ asset('/public/admin/css/bootstrap.css') }}" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{ asset('/public/admin/css/font-awesome.css') }}" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{ asset('/public/admin/css/custom.css') }}" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  </head>
  <body>
    <div class="container">
      <div class="row text-center ">
        <div class="col-md-12">
          <br/><br/>
          <h2> Binary Admin : Login</h2>
          <h5>( Login yourself to get access )</h5>
          <br />
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">

          <div class="panel panel-default">
            <div class="panel-heading">
              <strong>Enter Details To Login </strong>
              <strong> @if(Session::has('flash_message'))
                    <div class="alert alert-success" style="margin-left:404px; width: 325px; float: left; text-align: center;">
                        {{ Session::get('flash_message') }}
                    </div>
                  @endif</strong>
            </div>
            <div class="panel-body">
              <form method="POST" action="{{ route('admin.jk-admin')}}">
                <br />
                 {{ csrf_field() }}
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                  <input type="text" name="email" class="form-control" placeholder="Your Email"/>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group input-group">
                  <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                  <input type="password" class="form-control" name="password" placeholder="Your Password" />
                   @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div> 
                <input type="submit" class="btn btn-primary" name="login" value="Login"> 
              </form>
            </div>    
          </div>
        </div>
      </div>
    </div>
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('/public/admin/js/jquery-1.10.2.js') }}"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('/public/admin/js/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('/public/admin/js/jquery.metisMenu.js') }}"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('/public/admin/js/custom.js') }}"></script>
  </body>
</html>
