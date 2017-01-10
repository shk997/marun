<!--#### KARUZELA ###-->  

<div id="pokaz-slajdow" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="item active"> 
      <img src="resources/images/1a.png" alt="wulkanizacja" class="img-responsive">
        <div class="carousel-caption">
          <h1>ZIMA TRWA</h1><h2>Nie zwlekaj z wymianą opon, bezpieczeństwo jest najważniejsze!</h2>
          <p>Przyjedź już dziś i uzyskaj rabat -10% na wymianę ogumienia!</p>
        </div>
    </div>
    <div class="item">
      <img src="resources/images/2a.png" alt="mechanika" class="img-responsive">
      <div class="carousel-caption">
        <h1>SEZONOWY PRZEGLĄD TECHNICZNY</h1><h2>Sprawdź w jakim stanie są podzespoły Twojego samochodu!</h2>
         <p>Pierwszy raz u nas? Zapraszamy na darmową kontrolę techniczną pojazdu!</p>
      </div>
    </div>
    <div class="item">
      <img src="resources/images/3a.png" alt="detailing" class="img-responsive">
      <div class="carousel-caption">
        <h1>PAKIET ZIMA</h1><h2>Zabezpiecz swoje auto przed zimowymi warunkami atmosferycznymi!</h2>
        <p>Dokładne mycie, dekantaminacja lakieru, glinkowanie oraz zabezpieczenie powłoką ceramiczną lub woskiem!</p>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#pokaz-slajdow" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#pokaz-slajdow" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!--#### AKTUALNOSCI ###-->
<section id="aktualnosci">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2><span class="n_bordowy">Aktualności</span> w serwisie</h2>
        <h4>Zapraszamy do zapoznania się z aktualnościami:</h4>
      </div>
    </div>
    <div class="row">
      <div class="panel-group" id="accoring">
<?php include('app/Database.php'); $new = new Database(); $new->table = "articles"?>

<?php foreach($new->get() as $tab) : ?>
<!--#### AKTUALNOSC #01 ###-->
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 panel panel-aktualnosci">
          <div class="panel-heading">
            <a href="#aktualnosci_01<?php echo $tab['id']; ?>" data-toggle="collapse" data-parent="#according">
              <h3><?php echo $tab['title']; ?></h3>
              <h6>Data publikacji: <?php echo date('d-m-Y', strtotime($tab['published_at'])); ?><span class="glyphicon glyphicon-menu-down"></span></h6>
            </a>
          </div>
          <div id="aktualnosci_01<?php echo $tab['id']; ?>" class="panel-collapse collapse">
            <div id="p-b-ff" class="panel-body">
             <?php echo $tab['content']; ?>
            </div>
          </div>
         </div>
<?php endforeach; ?>

      </div>
    </div>
  </div>
</section>


<!--#### O_NAS ###--> 


  <hr>
  <section id="o_nas">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 naglowek-o_nas">
          <h2>Łączy nas <span class="n_bordowy"><strong>pasja</strong></span> - motoryzacja</h2>
          <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
        </div>
      </div>    
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4">
          <div id="tile" class="thumbnail">
            <img src="resources/images/mechanika1a.png">
            <h3>MECHANIKA</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim nec ex eu pulvinar.</p>
          </div>
        </div>

        <div class="col-sm-4 col-md-4 col-lg-4">
          <div id="tile" class="thumbnail">
            <img src="resources/images/wulkanizacja1a.png">
            <h3>WULKANIZACJA</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim nec ex eu pulvinar.</p>
          </div>

        </div>
        <div class="col-sm-4 col-md-4 col-lg-4">
          <div id="tile" class="thumbnail">
            <img src="resources/images/detailing1a.png">
            <h3>DETAILING</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dignissim nec ex eu pulvinar.</p>
          </div>
        </div>
    </div>
    </div>
  </section> 