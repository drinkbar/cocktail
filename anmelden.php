<?php

$eingeloggt = false;


?>


<?php

include "inc/dbaccess.inc.php";
include "inc/session.inc.php";
if (!isset($_REQUEST['seite']))
	$_REQUEST['seite']="start";

?>

<!doctype html>
<html class="no-js" lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thedrinkbar.de</title>
    <link rel="stylesheet" type="text/css" href="css/foundation.css">
	<link rel="stylesheet" type="text/css" href="css/foundation-icons.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
  </head>
  
  <body>

	 
	  
	  
	  <main>		  
	   		 	
	  	   		
	  
			
			
					<div class ="row">
						<hr />
						<div class="large-12 columns">
							<h5>Werde Mitglied auf Drinkbar.de!</h5>
						</div>
					</div>
						
						
						
						
						
						
					 <div class="regist">
						<div class ="row"> 
						  <div class="large-12 columns">
							 
						
							  <form data-abide novalidate>
						 
					        	  	<fieldset>
					        			<input type="radio" name="pokemon" value="Red" id="pokemonRed" required><label>Herr</label>
					        			<input type="radio" name="pokemon" value="Blue" id="pokemonBlue" required><label>Frau</label>
  						        		<span class="form-error">
  						          		  Triff bitte noch eine Auswahl!
  						        	  </span>
					        		</fieldset>
							
							
						     
							  	  <label>Vorname
						        	  <input type="text" placeholder="Max" required>
						        	  <span class="form-error">
						          		Gib bitte noch deinen Vornamen ein!
						        	</span>
						      	  </label>
							  
						      		<label>Nachname
						        		<input type="text" placeholder="Mustermann" required>
						        		<span class="form-error">
						          		  Gib bitte noch deinen Nachnamen ein!
						        	  </span>
						      		</label>
						    
			      		<label>Nickname
			        		<input type="text" placeholder="Nick12" required>
			        		<span class="form-error">
			          		  Gib bitte noch einen Nickname ein!
			        	  </span>
			      		</label>
						
			      		<label>E-mail Adresse
			        		<input type="text" placeholder="max-mustermann@mail.de" required>
			        		<span class="form-error">
			          		  Gib bitte noch deine E-mail Adresse ein!
			        	  </span>
			      		</label>
						   
						  
						      <label>Passwort
								  <input type="password" id="password" placeholder="yeti4preZ" aria-describedby="exampleHelpText" 									required pattern="alpha_numeric">
								    <span class="form-error">
										Gib bitte ein g&uuml;ltiges Passwort ein!
								    </span>
							 	 </label>
							 	 <p class="help-text" id="exampleHelpText">Mindestens 9 Zeichen</p>
										 
								      
								       
								<label>Passwort wiederholen
								          <input type="password" placeholder="yeti4preZ" required pattern="alpha_numeric" 											data-equalto="password">
								          <span class="form-error">
								           Du hast dein Passwort falsch wiederholt!
								          </span>
								</label>
							
								
								<label>Geburtstag</label>
								
								<div class="small-12 large-4 columns">
						        
									<label> Tag
						          <select required>
						            <option value="">Auswahl treffen...</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
						          </select>
							  		</label>
									
									</div>
									
									
									
								<div class="small-12 large-4 columns">
		
	  								<label> Monat
	  					          <select required>
	  					            <option value="">Auswahl treffen...</option>
									<option value="1">Januar</option>
									<option value="2">Februar</option>
									<option value="3">M&auml;rz</option>
									<option value="4">April</option>
									<option value="5">Mai</option>
									<option value="6">Juni</option>
									<option value="7">Juli</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">Oktober</option>
									<option value="11">November</option>
									<option value="12">Dezember</option>
	  					          </select>
	  						  		</label>
									</div>
								
								<div class="small-12 large-4 columns">
	  								<label> Jahr
	  					          <select required>
	  					            <option value="">Auswahl treffen...</option>
									<option value="1950">1950</option>
									<option value="1951">1951</option>
									<option value="1952">1952</option>
									<option value="1953">1953</option>
									<option value="1954">1954</option>
									<option value="1955">1955</option>
									<option value="1956">1956</option>
									<option value="1957">1957</option>
									<option value="1958">1958</option>
									<option value="1959">1959</option>
									<option value="1960">1960</option>
									<option value="1961">1961</option>
									<option value="1962">1962</option>
									<option value="1963">1963</option>
									<option value="1964">1964</option>
									<option value="1965">1965</option>
									<option value="1966">1966</option>
									<option value="1967">1967</option>
									<option value="1968">1968</option>
									<option value="1969">1969</option>
									<option value="1970">1970</option>
									<option value="1971">1971</option>
									<option value="1972">1972</option>
									<option value="1973">1973</option>
									<option value="1974">1974</option>
									<option value="1975">1975</option>
									<option value="1976">1976</option>
									<option value="1977">1977</option>
									<option value="1978">1978</option>
									<option value="1979">1979</option>
									<option value="1980">1980</option>
									<option value="1981">1981</option>
									<option value="1982">1982</option>
									<option value="1983">1983</option>
									<option value="1984">1984</option>
									<option value="1985">1985</option>
									<option value="1986">1986</option>
									<option value="1987">1987</option>
									<option value="1988">1988</option>
									<option value="1989">1989</option>
									<option value="1990">1990</option>
									<option value="1991">1991</option>
									<option value="1992">1992</option>
									<option value="1993">1993</option>
									<option value="1994">1994</option>
									<option value="1995">1995</option>
									<option value="1996">1996</option>
									<option value="1997">1997</option>
									<option value="1998">1998</option>
									<option value="1999">1999</option>
									<option value="2000">2000</option>
									<option value="2001">2001</option>
									<option value="2002">2002</option>
									<option value="2003">2003</option>
									<option value="2004">2004</option>
	  					          </select>
	  						  		</label>
						        </div>
								
										  
										  <label><input type="checkbox" required> 
										 
										  Ich habe die <a href="nutzungsbedingungen.html">Nutzungsbedingungen</a> gelesen und 										akzeptiere diese.
									  
						        			<span class="form-error">
						          		 	   Du musst unsere Nutzungsbedingngen akzeptieren, um dich anzumelden.
						        	 	 	</span>
									 	 </label>
										  
										  <div data-abide-error class="alert callout" style="display: none;">
										    <p><i class="fi-alert"></i> Bitte f&uuml;lle alle Felder vollst&auml;ndig aus!</p>
										  </div>
										  
										      
										   
										   
									        <button class="button" type="reset" value="Reset">L&ouml;schen</button>
									        <button class="button" type="submit" value="Submit">Anmelden</button>
									      
									
										  </form>
						   </div>
						</div>
						
					</div>
					
					
					
				
			
					
	  </main>
	  
   
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
