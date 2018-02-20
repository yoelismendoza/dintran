<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Intranet Asamblea Nacional - Administrador</title>
  <!-- BOOTSTRAP STYLES-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.grid.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.grid.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
        <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
             <img src="{{ asset ('images/logo_an_gris.png') }}" class="user-image img-responsive"/>
             <hr>
             <h2>Intranet Asamblea Nacional- Administrador</h2>             
            </div>
        </div>
         <div class="row ">
                  
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>Datos de Usuario para Ingresar al Sistema</strong>  
                            </div>
                            <div class="panel-body">
                         <form name="login" class="form-login"  enctype="multipart/form-data" method="POST" action="{{route ('login.store')}}" accept-charset="UTF-8"><input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />                                       <br />
                                     <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="usuario" class="form-control" placeholder="Ingrese Usuario de Intranet " />
                                        </div>
                                                                              <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" class="form-control"  placeholder="Proporcione Contraseña o Password" />
                                        </div>
                                     
                                     <input type="submit" class="btn btn-primary" name="ingresar" value="Ingresar">
                                     
                                    <hr />
                                    
                                    </form>
                            </div>
                           
                        </div>
                    </div>
                
                
        </div>
    </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('js/jquery-1.10.2.js') }}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="{{ asset('js/jquery.metisMenu.js') }}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('js/custom.js') }}"></script>
   
</body>
</html>
