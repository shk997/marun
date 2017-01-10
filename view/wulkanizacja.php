<div>
	<img id="img-podst" src="../resources/images/podst_wulk.png" alt="wulkanizacja" class="img-responsive">
	<div class="carousel-caption txt-podst">
		<span>wulkanizacja</span>
	</div>
</div>

<section id="podst">
	<div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 naglowek-podst">
          <h2>Złóż <span class="n_bordowy"><strong>zamówienie</strong></span></h2>
          <h4>Przejdź kolejno kilka poniższych kroków, aby zrealizować zamówienie.</h4>
        </div>
      </div>    
    
    </div>
  </section>

  <!--
 <section id="podst">
  <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 naglowek-podst">
              <h2>Zaloguj się, aby <span class="n_bordowy"><strong>złożyć</strong></span> zamówienie</h2>
              <h4>Lub przejdź do rejestracji jeśli jeszcze nie masz konta.</h4>
          </div>
        </div>    
    </div>
</section>
--> 

<div class="container">
  <div class="row form-group">
    <div class="col-xs-12">
      <ul id="tile-step" class="nav nav-pills nav-justified thumbnail setup-panel">
        <li class="active">
          <a href="#step-1">
            <h4 class="list-group-item-heading tile-step-txt">Krok 1</h4>
            <p class="list-group-item-text">Wybór samochodu</p>
          </a>
        </li>
        <li class="disabled">
          <a href="#step-2">
            <h4 class="list-group-item-heading tile-step-txt">Krok 2</h4>
            <p class="list-group-item-text">Wybór usługi</p>
          </a>
        </li>
        <li class="disabled">
          <a href="#step-3">
            <h4 class="list-group-item-heading tile-step-txt">Krok 3</h4>
            <p class="list-group-item-text">Informacje dodatkowe</p>
          </a>
        </li>
        <li class="disabled">
          <a href="#step-4">
            <h4 class="list-group-item-heading tile-step-txt">Krok 4</h4>
            <p class="list-group-item-text">Podsumowanie</p>
          </a>
        </li>    
      </ul>
    </div>
  </div>
</div>  

<form class="container">
  <div class="row setup-content" id="step-1">
    <div class="col-xs-12">
      
        <div class="col-md-12 well text-center">
          <h2 class="text-center"> KROK 1</h2>
            <div class="container-flex">
              <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                <h4 class="step-instr"> Wybierz z listy samochód, którego będzie dotyczyć usługa.</h4>
              </div>
              </div>
              <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
                <select class="selectpicker" data-style="btn-success" style="display: none;">
                  <option>Alfa</option>
                </select>
              </div>
              </div>
            </div>
          <button id="activate-step-2" class="btn btn-success btn-md pull-right">Dalej</button>
        </div>
      
    </div>
  </div>
</form>

<form class="container">
  <div class="row setup-content" id="step-2">
    <div class="col-xs-12 col-lg-12">
      <div id="well-step2" class="col-md-12 col-lg-12 well text-center">
        <h2 class="text-center"> KROK 2</h2>
          <div class="container-flex">
            <div class="row">
              <div class= "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h4 class="step-instr"> Wybierz interesujące Cię usługi z kategorii podanych poniżej.</h4>
              </div> 
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h4 class="step-instr"> Sezonowe:</h4>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h4 class="step-instr"> Naprawcze:</h4>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <select class="selectpicker" data-style="btn-success" style="display: none;">
                  <option value="" disabled selected style="display: none;">Wybierz z listy:</option>
                  <option>Wymiana opon; stalowe</option>
                  <option>Wymiana opon; alu</option>
                  <option>Wymiana całych kół</option>
                </select>
              </div>
              <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <select class="selectpicker" multiple="" data-style="btn-success" style="display: none;">                  
                  <option>Wulkanizacja</option>
                  <option>Prostowanie felgi</option>
                </select>
              </div>
            </div>
          </div>
          <button id="activate-step-3" class="btn btn-success btn-md pull-right">Dalej</button>
      </div>
    </div>
  </div>
</form>

<form class="container">
  <div class="row setup-content" id="step-3">
    <div class="col-xs-12">
      <div id="well-step3" class="col-md-12 well text-center">
        <h2 class="text-center"> KROK 3</h2>
          <div class="container-flex">
            <div class="row">
              <div class= "col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h4 class="step-instr">Podaj dodatkowe informacje, które uwzględnimy podczas realizacji.</h4>
                <h5>Możesz np. zasugerować dogodny dla Ciebie termin, jeśli będzie to możliwe - dostosujemy się!</h5>
              </div> 
            </div>
            <div class="row">
              <div id="step-textarea" class="col-lg-12">
                <textarea class="form-control" rows="3"></textarea>
              </div>
            </div>            
          </div>

        <button id="activate-step-4" class="btn btn-success btn-md pull-right">Dalej</button>
      </div>
    </div>
  </div>
</form>

<form class="container">    
  <div class="row setup-content" id="step-4">
    <div class="col-xs-12">
      <div id="well-step4" class="col-md-12 well text-center">
        <h2 class="text-center"> KROK 4</h2>
        <div class="container-flex">
        <div class="row">
        <h4>Twoje zamówienie znajduje się poniżej w tabeli jeśli wszystko się zgadza - zaznacz pole potwierdzające, a następnie je wyślij!</h4>
        </div>
          <div class="row">
            
              <div class="col-lg-12">
                <div class="box">
                  <div class="box-body">
                    <table class="table">
                      <tr>
                        <th>Samochód</th>
                        <th>Usługa</th>
                        <th>Informacje dodatkowe</th>
                      </tr>
                      <tr>                  
                        <td>Alfa</td>
                        <td>Coś tam</td>
                        <td>ble ble</td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="checkbox pull-left">
                <label>
                  <input required type="checkbox" name="check" value="zaznaczono"> Potwierdzam swoje zamówienie
                </label>
              </div>
            </div>
          </div>
        <button class="btn btn-success btn-md pull-right">Zakończ</button>
      </div>
    </div>
  </div>
</form>