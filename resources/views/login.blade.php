<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cyber | Management </title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset("vendors/bootstrap/dist/css/bootstrap.min.css") }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset("vendors/font-awesome/css/font-awesome.min.css") }}">
    <!-- NProgress -->
    <link rel="stylesheet" href="{{ asset("vendors/nprogress/nprogress.css") }}">
    <!-- Animate.css -->
   
    <link rel="stylesheet" href="{{ asset("vendors/animate.css/animate.min.css") }}">

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{ asset("build/css/custom.min.css") }}">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="POST" action="/login">
            {!! csrf_field() !!}
              <h1>Formulario Login</h1>
              <div>
                <input type="email" class="form-control" name="email" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div style="margin-left:100px">
                <input type="submit" class="btn btn-default submit" value="Entrar">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class=""></i> Cyber Management</h1>
                  <p>©2018 Todos los derechos reservados</p>
                </div>
              </div>
            </form>
          </section>
        </div>

      </div>
    </div>
  </body>
</html>
