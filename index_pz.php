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
		<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css" media="screen">
    <link rel="stylesheet" type="text/css" href="resources/css/bootstrap-select.css">
    <link href="style.css" rel="stylesheet">
    <link href="resources/css/animate.css" rel="stylesheet" media="screen">
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
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Witaj Imię <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                      <li><a href="#settings" data-toggle="modal">Ustawienia konta <span class="glyphicon glyphicon-cog pull-right"></span></a></li>
                      <li class="divider"></li>
                      <li><a href="#">Realizacje <span class="badge pull-right"> 1 </span></a></li>
                      <li class="divider"></li>
                      <li><a href="#">Wyloguj się <span class="glyphicon glyphicon-log-out pull-right"></span></a></li>
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
                        <!-- ZARZADZANIE -->
                        <!--#############-->
<div id="settings" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3>Ustawienia konta</h3>
        </div>        
        <div class="modal-body">


          <form id="add-car1" method="POST" action="app/Register.php" >
            <div class="form-group">
              <label for="exampleInputImie1">Imię</label>
              <input type="text" class="form-control" id="exampleImie1" placeholder="Imię" name="imie">
            </div>

       
            
        
            <div class="checkbox">
              <label>
              <input type="checkbox" name="check" value="zaznaczono"> Potwierdzam chęć usunięcia konta.
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










<!-- <section id="add-car">
  <div class="container">
    <div class="row">
      <div class="panel-group" id="accoring">
  ### DODAWANIE ###
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 panel panel-aktualnosci">
          <div class="panel-heading">
            <a href="#dodawanie_01" data-toggle="collapse" data-parent="#according">
            <h3>
            <span class="n_bordowy">Dodaj</span> swój pojazd
            </h3>
            <h5>Zapraszamy do zapoznania się z aktualnościami: 
            <span class="glyphicon glyphicon-menu-down"></span></h5></a>
          </div>
          <div id="dodawanie_01" class="panel-collapse collapse">
            <div class="panel-body">gfdg
              
              TUTAJ FORMULARZE!
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>  -->


            
            
        
            <div class="checkbox">
              <label>
              <input type="checkbox" name="check" value="zaznaczono"> Potwierdzam rejestrację oraz akceptuję <a target="_blank" href="view/regulamin.html">regulamin serwisu</a>.
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


                                               
<!--#### AKTUALNOSCI ###-->
<?php echo $view; ?>                                                 
<!--#### STOPKA ###-->

  <section id="stopka">
    <div class="container">
      <footer class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h3> Copyright 2016 &copy; Serwis</h3>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <a href="#"><img src="resources/icons/fb.png" alt="Facebook" class="img-responsive"></a>
          <a href="#"><img src="resources/icons/g+.png" alt="Google+" class="img-responsive"></a>
          <a href="#"><img src="resources/icons/tw.png" alt="Twitter" class="img-responsive"></a>
          <a href="#"><img src="resources/icons/yt.png" alt="YouTube" class="img-responsive"></a>
        </div>
      </footer>
    </div>
  </section>

	<!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
  <script src="js/wlasny.js"></script>
  <script type="text/javascript" src="js/bootstrap-select.js"></script>
  <script src="js/skrypt.js"></script>
	</body>
</html>