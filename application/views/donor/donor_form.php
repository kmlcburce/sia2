<nav class="navbar navbar-expand-sm" style="background-color: #fbe8a6; font-size: 18px;letter-spacing: 1px">
		  	<ul class="navbar-nav">
			    <li class="nav-item">
			      <a class="nav-link" href="echo base_url()">ABOUT</a>
			    </li>

			    <li class="nav-item">
			      <a class="nav-link" href="#">FAQ</a>
			    </li>
				
			    <li class="nav-item">
			      <a class="nav-link" href="#">DONATE</a>
			    </li>
				
                <li class="nav-item">
                    <a class="nav-link" href="#" style="margin-left: 1500px">LOGOUT</a>
                </li>
			</ul>
		</nav>
    <br>
    <br>
	
    <br>
    	<div class="d-flex justify-content-center" id="donate">
            <div class="card col-md-4 shadow p-3 mb-5"style="background-color: #303c6c">
             	<div class="card-body">
        			<h2 style="text-align: center; font-family: 'Abril Fatface', cursive;"> DONATION FORM </h2>
        			<div class="border-bottom"></div>
					
        			<form method = "post" action = "<?php echo base_url('controller_donor/donor_input'); ?>">
            			<br>
            			<div class="form-group">
            				<h5>Categories:</h5>
            				 <p> <input type="checkbox" name = "check" name = "checkCan" id = "check"> Canned Goods x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityCG" name = "checkQuant" id = "checkQuant"></p>
							
            				 <p><input type="checkbox" name = "check[]" name = "Noodles" id = "check"> Noodles x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityN" name = "checkQuant" id = "checkQuant[]"></p>

            				 <p><input type="checkbox" name = "check[]" name = "CannedDrinks" id = "check"> Canned Drinks x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityCD" name = "checkQuant[]" id = "checkQuant"></p>

            				 <p><input type="checkbox" name = "check[]" id = "check" name = "Milk"> Milk x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityM" name = "checkQuant[]" id = "checkQuant[]"></p>

            				 <p><input type="checkbox" name = "check[]" name ="JuicePack"id = "check"> Juice Packs x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityJ" name = "checkQuant[]" id = "checkQuant"></p>

            				 <p><input type="checkbox" name = "check[]" name = "Others" id = "check"> Others x <input type="number" placeholder="Qty" min="1" style="width: 50px" name = "f_quantityO" name = "checkQuant[]" id = "checkQuant"></p>							
            		    </div>
						<br>
						
            			<div class="form-group">
            				<input type="submit" class="btn btn-info" name = "submit">
            			</div>
    		        </form>
    	        </div>
    	    </div>
    	</div>
