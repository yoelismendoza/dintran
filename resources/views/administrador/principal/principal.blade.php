<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
  <!-- BOOTSTRAP STYLES-->
    <!--<link href="assets/css/bootstrap.css" rel="stylesheet" />-->
    {!!Html::style('assets/css/bootstrap.css')!!}

     <!-- FONTAWESOME STYLES-->
    <!--<link href="assets/css/font-awesome.css" rel="stylesheet" />-->
    {!!Html::style('assets/css/font-awesome.css')!!}

        <!-- CUSTOM STYLES-->
    <!--<link href="assets/css/custom.css" rel="stylesheet" />-->
    {!!Html::style('assets/css/custom.css')!!}


     <!-- MORRIS CHART STYLES-->
    <!--<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />-->
    {!!Html::style('assets/js/morris/morris-0.4.3.min.css')!!}
    {!!Html::style('chosen/chosen.css')!!}

     <!-- GOOGLE FONTS-->
         
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
               <div class="titulo"> <strong>Sistema para la Gestión de HCM de los Trabajadores de la Asamblea Nacional</strong></div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 12px;"> <a href="{{ route('login.index') }}" class="btn btn-danger square-btn-adjust">Cerrar Sesión</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
        <li class="text-center">
                    <img src="{{ asset ('images/logo3.png') }}" class="user-image img-responsive"/>
          </li>

                    <li>
                        <a  href="{{ route('principal.index') }}"><i class="fa fa-square-o fa-3x"></i>Inicio</a>
                    </li>
        
                    <li>
                        <a href="#"><i class="fa fa-dashboard fa-3x"></i> Configurar<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('parentesco.index') }}">Parentesco</a>
                            </li>
                            <li>
                                <a href="{{ route('situacion.index') }}">Situacion</a>
                            </li>
                            <li>
                                <a href="{{ route('parentesco.index') }}">Usuarios</a>
                            </li>
                        </ul>

                      </li>  

                    <li>
                        <a  href="{{ route('titular.index') }}"><i class="fa fa-qrcode fa-3x"></i>Trabajador</a>
                    </li>

                      <li>
                        <a href="#"><i class="fa fa-edit fa-3x"></i>Reportes<span class="fa arrow"></span></a>
                               
                    </li>                    
                    <li>
                        <a  href="{{ route('ficha.index') }}"><i class="fa fa-qrcode fa-3x"></i>Buscar</a>
                    </li>
                            
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >

            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                      <h2> @yield('titulo')</h2>   
                      @yield('content')    
                    </div>

                    
                </div>              
                 <!-- /. ROW  -->
                  <hr />      

        </div>
                          
    </div>
                        
</div>
 
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    
<!--<script src="{{ asset('js/jquery.min.js') }}"></script>-->
{!!Html::style('js/jquery.min.js')!!}
{!!Html::style('js/validCampoFranz.js')!!}
    <!--<script src="js/validCampoFranz.js"></script>-->
{!!Html::style('vendors/nicEdit.js')!!}
    
     
   <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script>

      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/parsley.min.js')}}"></script>
    
    <!-- METISMENU SCRIPTS -->
    <script src="{{asset('assets/js/jquery.metisMenu.js')}}"></script>
    
     <!-- MORRIS CHART SCRIPTS -->
     <script src="{{asset('assets/js/morris/raphael-2.1.0.min.js')}}"></script>
    
     
    <script src="{{asset('assets/js/morris/morris.js')}}"></script>
    
      <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    

    <script src="{{asset('jcrop/js/jquery.Jcrop.js')}}"></script>
    
  <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>

<script type="text/javascript">
    $('.datepicker').datepicker({
    format: "yyyy-mm-dd",
    language: "es"
});
 </script> 
   
</body>
</html>
