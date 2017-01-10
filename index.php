<?php 
  session_start();
  include('view/content.php'); 
  include('app/Authorization.php'); //rejestracja i logowanie
?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html"; charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>SERWIS</title>
		<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css" media="screen">
    	<link rel="stylesheet" type="text/css" href="resources/css/bootstrap-select.css">
      <link href="style.css" rel="stylesheet">
    	<link href="resources/css/responsive.css" rel="stylesheet" media="screen"> 	
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
                <a class="navbar=brand" href="#"><img src="resources/images/logo1.png" class="img-responsive"></a>
              </div>
            </div>
            <div class="collapse navbar-collapse" id="m_menu">
              <ul class="nav navbar-nav" id="ul_nawigacja">
                <li class="active"><a href="index.php">Home</a></li>
                <?php if(isset($ukryc)) : ?>
                  <?php if(!$ukryc) : ?>

                  <li><a href="#aktualnosci" class="kliknij">Aktualności</a></li>
                  <li><a href="#o_nas" class="kliknij">O nas</a></li>
                  <?php endif; ?>
                <?php endif; ?>
                <li><a href="?option=mechanika">Mechanika</a></li>
                <li><a href="?option=wulkanizacja">Wulkanizacja</a></li>
                <li><a href="?option=detailing">Detailing</a></li>
              </ul>

              <?php if(!isset($_SESSION['check'])) : ?>
                
                <ul class="nav navbar-nav navbar-right"> <!-- start navbar  bez logowania-->
                  <li class="dropdown">                
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Logowanie <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" style="padding: 15px;min-width: 250px;height: auto;     max-height: 500px !important;">

                          <!-- LOGOWANIE -->
                            <form class="form" role="form" method="post" action="app/Login.php" accept-charset="UTF-8" id="login-nav">
                              <div style="margin-bottom: 10px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="login" value="" placeholder="LOGIN" required=""> 
                              </div>
                              <div style="margin-bottom: 15px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" placeholder="HASŁO" required>
                              </div>
                               <span class="help-block zly-user" style="text-align:center"> Podany login lub hasło są nieprawidłowe! </span>   
                              <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">Zaloguj</button>
                              </div>

                            </form>
                          <!-- END LOGOWANIE -->                         
                      <li class="divider">                      
                      </li>
                      <li>
                        <h6> Nie masz konta?<a href="#register" data-toggle="modal"><label style="float:right;font-family:'Open Sans';font-weight: 700;position: relative;">Zarejestruj się!</label></a></h6>
                        <h6> Zapomniałeś hasła?<a href="#pass_forg" data-toggle="modal"><label style="float:right;font-family:'Open Sans';font-weight: 700;position: relative;">Przypomnij je!</label></a></h6>

                      </li>                
                    </ul>
                  </li>
                </ul> <!-- end navbar bez logowania-->
              <?php else : ?>
                <?php if($_SESSION['check']) : ?>
                    <ul class="nav navbar-nav navbar-right"> <!-- start navbar po logowaniu -->
                      <li class="dropdown">                
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Witaj <?php echo $_SESSION['login']; ?> <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            <li><a href="?option=acc_settings">Ustawienia konta <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                            <li class="divider"></li>
                            <li><a href="?option=realizations">Realizacje <span class="badge pull-right"> 1 </span></a></li>
                            <li class="divider"></li>
                            <li><a href="app/Logout.php">Wyloguj się <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
                          </ul>
                      </li>
                    </ul> <!-- end navbar po logowaniu -->
                <?php endif; ?>
            <?php endif; ?>

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
          <form id="register1" method="POST" action="app/Register.php" >
            <div class="form-group">
              <label for="exampleInputImie1">Imię</label>
              <input type="text" class="form-control" id="exampleImie1" placeholder="Imię" name="imie" required>
            </div>
            <div class="form-group">
              <label for="exampleInputNazwisko1">Nazwisko</label>
              <input type="text" class="form-control" id="exampleNazwisko1" placeholder="Nazwisko" name="nazwisko" required>
            </div>
            <div class="form-group">
              <label for="exampleInputLogin1">Login</label>
              <input type="text" class="form-control" id="exampleInputLogin1" placeholder="Login" name="login" required>
              <div id="reg-alert"">
                <span class="help-block user-is">Podany login jest już zajęty!</span>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Adres e-mail" name="email" required>
              <div id="reg-alert"">
                <span class="help-block email-is">Podany e-mail jest już zarejestrowany!</span>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputTel">Telefon kontaktowy</label>
              <input type="tel" placeholder="Numer telefonu" class="form-control" id="exampleInputNumer1" name="numer" maxlength="15" pattern="\d*" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Hasło</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hasło" name="password" required>
            </div>
            <div class="form-group">
              <label for="exampleInputPasswordC1">Powtórz hasło</label>
              <input type="password" class="form-control" id="exampleInputPasswordC1" placeholder="Hasło" name="password2" required>
              <div id="reg-alert"">
                <span class="help-block pass-is">Podane hasła nie są zgodne!</span>
              </div>
            </div>
            
        
            <div class="checkbox">
              <label>
              <input required type="checkbox" name="check" value="zaznaczono"> Potwierdzam rejestrację oraz akceptuję <a target="_blank" href="view/regulamin.html">regulamin serwisu</a>.
              </label>
            </div>
          
          <div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-success">Zarejestruj</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal" >Zamknij</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


                        <!--###############-->
                        <!-- PRZYPOMNIENIE -->
                        <!--###############-->



<div id="pass_forg" class="modal fade" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h3>Przypomnienie hasła</h3>
        </div>
        <div class="modal-body">
          <form id="pass_forg1" method="POST" action="app/# " >  <!-- COŚ -->
            <div class="form-group">
              <label for="exampleInputLogin1">Login</label>
              <input type="text" class="form-control" id="exampleInputLogin1" placeholder="Login" name="login" required>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-mail</label>
              <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Adres e-mail" name="email" required>
            </div>
            <div class="form-group">
              <label for="exampleInputTel">Telefon kontaktowy</label>
              <input type="tel" placeholder="Numer telefonu" class="form-control" id="exampleInputNumer1" name="numer" maxlength="15" pattern="\d*" required>
            </div>        
          <div class="col-xs-12 text-center">
            <button type="submit" class="btn btn-success">Przypomnij hasło</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Zamknij</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

                                             
<!--#### STOPKA ###-->

  <section id="stopka">
    <div class="container">
      <footer class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <h3> Copyright 2016 &copy; Serwis</h3>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
          <a href="#"><img src="resources/icons/fb.png" alt="Facebook" class="img-responsive"></a>
          <a href="#"><img src="resources/icons/g+.png" alt="Google+" class="img-responsive"></a>
          <a href="#"><img src="resources/icons/tw.png" alt="Twitter" class="img-responsive"></a>
          <a href="#"><img src="resources/icons/yt.png" alt="YouTube" class="img-responsive"></a>
        </div>
      </footer>
    </div>
  </section>


<div class="modal fade" id="komunikat-p">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Twoje konto zostało utworzone!</h4>
      </div>
      <div class="modal-body">
        Teraz możesz się zalogować. Przejdź do ustawień konta, aby uzupełnić dane o swoim samochodzie. Pozwoli  to na korzystanie z serwisu!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">Zamknij</button>
      </div>
    </div>
  </div>
</div>


	<!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-select.js"></script>
  <script src="step.js"></script>
  <script src="js/skrypt.js"></script>
	</body>
</html>