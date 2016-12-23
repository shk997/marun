<?php 
  include('view/content.php'); 
  include('app/Authorization.php'); //rejestracja i logowanie

?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>SERWIS</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
    <link href="style.css" rel="stylesheet">
    <link href="resources/css/animate.css" rel="stylesheet" media="screen">	
    <link rel="stylesheet" type="text/css" media="all" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset=latin,latin-ext">
		<style>
   /*
    	[class*="col-"]{
        background-color: rgba(255,195,50,.3);
        border: 1px solid rgba(255,195,50,.4);
        padding: 10px;
      }
   	*/ 


  
    </style>
	</head>
<body>
                        <!--########-->
                        <!-- NAVBAR -->
                        <!--########-->
  <header id="menu" class="navbar-fixed-top">
    <div class="container">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <nav class="navbar navbar-inverse" role="navigation" id="pasek_nawigacji">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#m_menu">
                <span class="sr-only">Nawigacja</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div id="logo">
                <a class="navbar=brand" href="#"><img src="images/logo.png" class="img-responsive"></a>
              </div>
            </div>
            <div class="collapse navbar-collapse" id="m_menu">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Home</a></li>
                <?php if(isset($ukryc)) : ?>
                  <?php if(!$ukryc) : ?>

                  <li><a href="#aktualnosci">Aktualności</a></li>
                  <li><a href="#o_nas">O nas</a></li>
                  <?php endif; ?>
                <?php endif; ?>
                <li><a href="index.php?option=mechanika">Mechanika</a></li>
                <li><a href="index.php?option=wulkanizacja">Wulkanizacja</a></li>
                <li><a href="index.php?option=detailing">Detailing</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">                
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logowanie <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu" style="padding: 15px;min-width: 250px;">
                    <li>
                      <div class="row">
                        <div class="col-md-12">
                          <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                            <div style="margin-bottom: 10px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="LOGIN">     
                            </div>
                            <div style="margin-bottom: 15px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                              <input id="login-password" type="password" class="form-control" name="password" placeholder="HASŁO">
                            </div>
                            
                            <div class="form-group">
                              <button type="submit" class="btn btn-success btn-block">Zaloguj</button>
                            </div>

                          </form>
                        </div>
                      </div>
                    </li>
                    <li class="divider">                      
                    </li>
                    <li>
                      <h6> Nie masz konta?<a href="#register" data-toggle="modal"><label style="float:right;font-family:'Open Sans';font-weight: 700;position: relative;">Zarejestruj się!</label></a></h6>                          
                    </li>                
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
                        <!--#############-->
                        <!-- REJESTRACJA -->
                        <!--#############-->
<div id="register" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3>Rejestracja</h3>
          </div>
        <div class="modal-body">
          <form method="POST" action="index.php?method=register" >
            <div class="form-group">
              <label for="exampleInputImie1">Imię</label>
              <input type="text" class="form-control" id="exampleImie1" placeholder="Imię" name="imie">
            </div>
            <div class="form-group">
              <label for="exampleInputNazwisko1">Nazwisko</label>
              <input type="text" class="form-control" id="exampleNazwisko1" placeholder="Nazwisko" name="nazwisko">
            </div>

            <div class="form-group">
              <label for="exampleInputLogin1">Login12312</label>
              <input type="text" class="form-control" id="exampleInputLogin1" placeholder="Login" name="login">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Adres e-mail" name="email">
           </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Hasło</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hasło" name="password">
            </div>
            <div class="form-group">
              <label for="exampleInputPasswordC1">Powtórz hasło</label>
              <input type="password" class="form-control" id="exampleInputPasswordC1" placeholder="Hasło" name="password_confirmation">
            </div>
            
        
            <div class="checkbox">
              <label>
              <input type="checkbox" name="check" value="zaznaczono"> Potwierdzam rejestrację oraz akceptuję regulamin serwisu.
              </label>
            </div>
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default">Zarejestruj</button>
            <button type="button" class="btn btn-default" data-dismiss="modal" >Zamknij</button>
        </div>
        </form>
      </div>
    </div>
  </div>



                                               
<!--#### AKTUALNOSCI ###-->
<?php echo $view; ?>                                                 
<!--#### STOPKA ###-->
<hr>
  <section id="stopka">
    <div class="container">
      <footer class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h2> Copyright 2016 &copy; Serwis</h2>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <a href="#"><img src="icons/fb.png" alt="Facebook" class="img-responsive"></a>
          <a href="#"><img src="icons/g+.png" alt="Google+" class="img-responsive"></a>
          <a href="#"><img src="icons/tw.png" alt="Twitter" class="img-responsive"></a>
          <a href="#"><img src="icons/yt.png" alt="YouTube" class="img-responsive"></a>
        </div>
      </footer>
    </div>
  </section>

	<!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

  <script type="text/javascript" src="js/bootstrap-select.js"></script>
  <script>
    $(document).ready(function () {
    $('.selectpicker').selectpicker();
    });
  </script>

	</body>
</html>