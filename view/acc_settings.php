<div>
	<img id="img-podst" src="../resources/images/podst_settings.png" alt="ustawienia konta" class="img-responsive">
	<div class="carousel-caption txt-podst">
		<span>Ustawienia konta</span>
	</div>
</div>
<section id="podst">
	<div class="container">
      	<div class="row">
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 naglowek-podst">
          		<h2>Tutaj możesz zmienić <span class="n_bordowy"><strong>ustawienia</strong></span> swojego konta</h2>
          		<h4>Dodaj samochód, zmień hasło lub usuń wcześniej dodany pojazd - wszystko w jednym miejscu!</h4>
        	</div>
      	</div>    
    </div>
</section>
<div class="container">
	<div class="row">

		<div class="col-lg-3">
			<div class="panel panel-success">
			  	<div class="panel-heading">
			  		<h3 class="panel-title"><strong>Zmiana hasła</strong></h3>
			  	</div>
			  	<div class="panel-body p-b-gr">
				    <div class="form-group">
	                  <label>Podaj stare hasło</label>
	                  <input type="password" class="form-control" required>
	                </div>
	                <div class="form-group">
	                  <label>Podaj nowe hasło</label>
	                  <input type="password" class="form-control" required>
	                </div>
	                <div class="form-group">
	                  <label>Powtórz nowe hasło</label>
	                  <input type="password" class="form-control" required>
	                </div>
	                <button type="submit" class="btn btn-success pull-right">Zapisz</button>                           
			  	</div>
			</div>
		</div>

		<div class="col-lg-9">		
			<div class="panel panel-success">
				<div class="panel-heading">
			  		<h3 class="panel-title"><strong>Kreator dodawania pojazdu</strong> <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#dodaj_auto" ><span class="glyphicon glyphicon-plus"></span></button></h3>
			  		
			  	</div>
			  	<div id="dodaj_auto" class="panel-body collapse p-b-gr">
			  		<div class="container-flex">
						<div class="row form-group">
						    <div class="col-xs-12">
						      	<ul id="tile-step" class="nav nav-pills nav-justified thumbnail setup-panel">
						        	<li class="active">
							          	<a href="#step-1">
								            <h4 class="list-group-item-heading tile-step-txt">Krok 1</h4>
								            <p class="list-group-item-text">Dodawanie pojazdu</p>
							          	</a>
						        	</li>
						        	<li class="disabled">
						          		<a href="#step-2">
						            		<h4 class="list-group-item-heading tile-step-txt">Krok 2</h4>
						            		<p class="list-group-item-text">Marka i model</p>
						          		</a>
						        	</li>
						        	<li class="disabled">
						          		<a href="#step-3">
						            		<h4 class="list-group-item-heading tile-step-txt">Krok 3</h4>
						            		<p class="list-group-item-text">Dane techniczne</p>
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
					<form class="container-flex">
						<div class="row setup-content" id="step-1">
						    <div class="col-xs-12">					      
						        <div class="col-md-12 well text-center">
						            <div class="container-flex">
						              	<div class="row">
							              	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 step-instr-sm">
							                	<h4 class="step-instr"> Aby w pełni korzystać z serwisu niezbędne jest dodanie minimum jednego samochodu. Wystarczy kilka kroków aby to uczynić!</h4>
							              	</div>
						              	</div>
						              	<div class="row">
						              		<div class="col-lg-6" style="margin-top:5px;">
						                  		<input type="text" class="form-control" placeholder="Podaj nazwę samochodu"  required>
						                	</div>
						                	<button id="activate-step-2" class="btn btn-success btn-md pull-right" style="margin-top:5px; margin-right:15px;">Dalej</button>
						              	</div>
						            </div>          	
						        </div>						      
						    </div>
						</div>
					</form>	
					<form class="container-flex">
						<div class="row setup-content" id="step-2">
						    <div class="col-xs-12">					      
						        <div class="col-md-12 well text-center">
						          	<div class="container-flex">
						              	<div class="row">
						              		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
						                		<h4 class="step-instr"> Wybierz markę oraz model samochodu</h4>
						              		</div>
								        </div>
							            <div class="row">
							              	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							                	<select class="selectpicker" data-style="btn-success" style="display: none;">
							                		<option disabled selected hidden>MARKA</option>
							                		<option data-divider="true"></option>
							                  		<option>Alfa Romeo</option>
							                  		<option>Aston Martin</option>
							                	</select>
							              	</div>
							              	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
							                	<select class="selectpicker" data-style="btn-success" style="display: none;">
							                		<option disabled selected hidden>MODEL</option>
							                		<option data-divider="true"></option>
							                  		<option>GT</option>
							                  		<option>DB9</option>
							                	</select>
							              	</div>
							            </div>
					            	</div>
						          	<button id="activate-step-3" class="btn btn-success btn-md pull-right" style="margin-top:10px;">Dalej</button>
						        </div>						      
						    </div>
						</div>
					</form>	

					<form class="container-flex">
						<div class="row setup-content" id="step-3">
						    <div class="col-lg-12">					      
						        <div class="col-md-12 well text-center">
					            	<div class="container-flex">
					              		<div class="row">
					              			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-12">
					                			<h4 class="step-instr"> Wybierz rok produkcji oraz rodzaj silnika</h4>
					              			</div>
							            </div>							            
							            <div class="row">
							              	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="margin-top:5px;">
							                	<select class="selectpicker" data-style="btn-success" data-header="Wybierz:" style="display: none;">
							                		<option disabled selected hidden>ROK</option>
							                		<option data-divider="true"></option>
							                  		<option>2004</option>
							                  		<option>2005</option>
							                	</select>
							              	</div>
							              	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="margin-top:5px;">
							                	<select class="selectpicker" data-style="btn-success" data-show-subtext="true" data-header="Wybierz:" style="display: none;">
							                		<option disabled selected hidden>SILNIK</option>
							                		<optgroup label="Silnik benzynowy">
									                  	<option data-subtext="110 KM">1.6</option>
									                  	<option data-subtext="125 KM">1.8</option>
									                </optgroup>
									                <option data-divider="true"></option>
									                <optgroup label="Silnik Diesel">
									                  	<option data-subtext="110 KM">1.9 TDI</option>
									                  	<option data-subtext="130 KM">1.9 TDI</option>
									                  	<option data-subtext="150 KM">2.5 TDI</option>
									                </optgroup>
							                	</select>
							              	</div>
							              	<div class="col-lg-4" style="margin-top:5px;">
						                  		<input type="text" class="form-control" placeholder="Informacje dodatkowe">
						                	</div>
							              	

							            </div>
					            	</div>
						          	<button id="activate-step-4" class="btn btn-success btn-md pull-right" style="margin-top:10px;">Dalej</button>
						        </div>						      
						    </div>
						</div>
					</form>
					<form class="container-flex">    
						<div class="row setup-content" id="step-4">
						    <div class="col-lg-12">
						      	<div id="well-step4" class="col-md-12 well text-center">
						        	<div class="container-flex">
						        		<div class="row">
						        			<h4 class="step-instr">Dane Twojego samochodu znajdują się w tabeli poniżej. Sprawdź je zanim potwierdzisz!</h4>
						        		</div>
						          		<div class="row">
						              		<div class="col-lg-12">
						                		<div class="box">
						                  			<div class="box-body">
						                    			<table class="table" style="margin-top:10px">
									                      	<tr>
										                        <th>Nazwa</th>
										                        <th>Marka</th>
										                        <th>Model</th>
										                        <th>Rok</th>
										                        <th>Silnik</th>                      
										                        <th>Informacje dodatkowe</th>
									                      	</tr>
									                      	<tr>                  
										                        <td>Moje</td>
										                        <td>Alfa Romeo</td>
										                        <td>GT</td>
										                        <td>2004</td>
										                        <td>1.9 JTDm 150 KM</td>
										                        <td>Brak</td>
									                      	</tr>
									                    </table>
									                </div>
									            </div>
									        </div>
									    </div>
						          	</div>
						        	<button class="btn btn-warning btn-md pull-right">Dodaj</button>
						      	</div>
						    </div>
						</div>
					</form>
			  	</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3 class="panel-title"><strong>Samochody posiadane</strong></h3>
				</div>
				<div class="panel-body p-b-gr">
					<div class="col-lg-12">
		    			<div class="box">
		      				<div class="box-body">
			        			<table  class="table" style="margin-right:-10px">
			                      	<tr>
				                        <th>Nazwa</th>
				                        <th>Marka</th>
				                        <th>Model</th>
				                        <th>Rok</th>
				                        <th>Silnik</th>                      
				                        <th>Informacje dodatkowe</th>
				                        <th>Zarządzanie</th>
			                      	</tr>
			                      	<tr>                  
				                        <td>Moje</td>
				                        <td>Alfa Romeo</td>
				                        <td>GT</td>
				                        <td>2004</td>
				                        <td>1.9 JTDm 150 KM</td>
				                        <td>Brak</td>
				                        <td><button type="" class="btn btn-danger btn-xs" style="width:100px">Usuń</button></td>
			                      	</tr>
			                    </table>
		                	</div>
		            	</div>									      
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


	

