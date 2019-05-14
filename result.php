<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mou9ef</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/rating.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/check-box.css">
	<script src="js/jquery.js"></script>
</head>
<body>
	
	<header class="container-fluid">
	<div class="row">
		<div class="left-head col-md-4 col-sm-2">
			<a href="index.php"><img src="img/logo.png" alt=""></a>
		</div>
		
		<div class="right-head col-md-8 col-sm-10 text-right">
			<span class="lang">
			<label for="lang"><img src="img/lang.png" alt="">
				<select id="lang" class="form-control">
       				<option value="" selected class="hidden-xm" disabled>Language</option>
        			<option>Arabic</option>
        			<option>Frensh</option>
        			<option>English</option>
     			 </select>
     		 </label>
		   	</span>
			
			<a href="register.php"><button class="btn btn-success sign">Sign-up</button></a>
			<a href="register.php"><button class="btn btn-success log">Log-in</button></a>
		</div>
	</div>
	</header>
	<div class="container-fluid " style="box-shadow: 0 12px 22px -22px rgba(0, 0, 0, 0.8) inset; background: white;">
	<div class="container" >
		<div class="row">
			<div class="ads">
				<img src="" alt="">
			</div>
		</div>
		
			<div class="search">
				<form action="" method="">
				
					
					<div class="row text-center">
						<div class="col-md-2"></div>
				<div class="col-sm-6 col-md-3 ">
					<select name="" id="sel-vil" class="form-control chev">
						<option value="">Agadir</option>
						<option value="">Marrakech</option>
						<option value="">Rabat</option>
					</select>
				</div>
				
				<div class="col-sm-6 col-md-3 ">
					<select name="" id="sel-job" class="form-control chev">
						<option value="">Carpenter</option>
						<option value="">Lawyer</option>
						<option value="">Plumber</option>
					</select>
				</div>	
				
				<div class="col-sm-6 offset-sm-3 offset-md-0 col-md-2 ">	
					<input type="submit" class="btn btn-success srh" value="SEARCH">
				</div>	
				<div class="col-md-2"></div>
					</div>
					
					
				</form>
			</div>
		
		
		
			<div class="found">
		<div class="row">	
				<span class="col-6 col-sm-2 col-md-4 col-lg-3 text-center"><p>75 found!</p></span>
				<span class="col-0 col-sm-9 col-md-8 col-lg-8 favth-hidden-sm"><hr></span>
			</div>
		</div>
		</div>
	</div>
	
	<div class="container">
	<div class="row">
		<!--content-->
		
		<div class="col-sm-6 col-md-4 col-lg-3 col_filter text-center shadow">
		<h3 class="ad_search">ADVANCED SEARCH</h3>
		<hr>
		
		<button class="btn btn_grid" type="submit">GRID</button><br>
		<button class="btn btn-info btn_map" type="submit">MAP</button>
			
				<form action="" method="">
				
					<select name="" id="" class="form-control input_select chev">
						<option value="">individual</option>
						<option value="">Marrakech</option>
						<option value="">Rabat</option>
					</select>
					
					<select name="" id="" class="form-control input_select chev">
						<option value="">sort by..</option>
						<option value="">Lawyer</option>
						<option value="">Plumber</option>
					</select>
					
					<select name="" id="" class="form-control input_select chev">
						<option value="">selector..</option>
						<option value="">Lawyer</option>
						<option value="">Plumber</option>
					</select>
					
					
					<input type="text" class="form-control input_select" placeholder="search by name, email..">
					
					<div>
					
					
					
					
					
					<div class="left">
						<input type="checkbox" class="" id="ch_rate">
					<label for="ch_rate">Rate :</label>
					</div>
					<div class="rating">
					
      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
    </div>
					
					
					</div>
					 <br><hr class="space">
					<div class="left">
						<input type="checkbox" class="" id="resume1">
					<label for="resume1">Resume included</label>
					</div>
					
					<br><hr class="space">
					<div class="left">
						<input type="checkbox" class="" id="resume2">
					<label for="resume2">WhatsApp included</label>
					</div>
					
					<br><hr class="space">
					<div class="left">
						<input type="checkbox" class="" id="resume3">
					<label for="resume3">Email included</label>
					</div>
					
					<br><hr class="space">
					<button type="submit" class="btn btn-success srh btn_grid sub">Go
  					<img src="img/go.png" alt=""> 
					</button>
				</form>
				
			<br><br><hr class="space">
				<!--ads-->
				<div class="lb_ads"></div>
				
			
		</div>
		
		<div class="col-sm-5 col-md-7 col-lg-8">
		
			<div class="row">
		<div class="offset-2 offset-sm-0 col-8 col-sm-12 col-md-6 col-lg-4 col_result box">
			<div class="row">
				<div class="col-md-11 no_p_m art shadow">
					<div class="img_bg"></div>
					<hr>
					<div class="des_art">
						<h5>John doe</h5>
						<div>
							
						
						<div class="rating left">
					
      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
      
    </div>	
    <img src="img/fav.png" class="right" alt="">
    </div>
					</div>
					
				</div>
				
			</div>	
		</div>
		
		<div class="offset-2 offset-sm-0 col-8 col-sm-12 col-md-6 col-lg-4  col_result box ">
			<div class="row">
				<div class="col-md-11 no_p_m art shadow">
					<div class="img_bg"></div>
					<hr>
					<div class="des_art">
						<h5>John doe</h5>
						<div>
							
						
						<div class="rating left">
					
      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
      
    </div>	
    <img src="img/fav.png" class="right" alt="">
    </div>
					</div>
					
				</div>
				
			</div>	
		</div>
		
		<div class="offset-2 offset-sm-0 col-8 col-sm-12 col-md-6 col-lg-4  col_result box">
			<div class="row">
				<div class="col-md-11 no_p_m art shadow">
					<div class="img_bg"></div>
					<hr>
					<div class="des_art">
						<h5>John doe</h5>
						<div>
							
						
						<div class="rating left">
					
      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
      
    </div>	
    <img src="img/fav.png" class="right" alt="">
    </div>
					</div>
					
				</div>
				
			</div>	
		</div>
		
		

			
		
			<br>
			
				
			
		<div class="offset-2 offset-sm-0 col-8 col-sm-12 col-md-6 col-lg-4  col_result box">
			<div class="row">
				<div class="col-md-11 no_p_m art shadow">
					<div class="img_bg"></div>
					<hr>
					<div class="des_art">
						<h5>John doe</h5>
						<div>
							
						
						<div class="rating left">
					
      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
      
    </div>	
    <img src="img/fav.png" class="right" alt="">
    </div>
					</div>
					
				</div>
				
			</div>	
		</div>
		
		<div class="offset-2 offset-sm-0 col-8 col-sm-12 col-md-6 col-lg-4  col_result box">
			<div class="row">
				<div class="col-md-11 no_p_m art shadow">
					<div class="img_bg"></div>
					<hr>
					<div class="des_art">
						<h5>John doe</h5>
						<div>
							
						
						<div class="rating left">
					
      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
      
    </div>	
    <img src="img/fav.png" class="right" alt="">
    </div>
					</div>
					
				</div>
				
			</div>	
		</div>
		
		<div class="offset-2 offset-sm-0 col-8 col-sm-12 col-md-6 col-lg-4  col_result box">
			<div class="row">
				<div class="col-md-11 no_p_m art shadow">
					<div class="img_bg"></div>
					<hr>
					<div class="des_art">
						<h5>John doe</h5>
						<div>
							
						
						<div class="rating left">
					
      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
      
    </div>	
    <img src="img/fav.png" class="right" alt="">
    </div>
					</div>
					
				</div>
				
			</div>	
		</div>
		
		

			</div>
		
		
		
		<!--ads center-->
				<div class="row">
			<div class="ads">
				<img src="" alt="">
			</div>
		</div>
		<br><br>
		<div class="row">
		<div class="offset-2 offset-sm-0 col-8 col-sm-12 col-md-6 col-lg-4 col_result box">
			<div class="row">
				<div class="col-md-11 no_p_m art shadow">
					<div class="img_bg"></div>
					<hr>
					<div class="des_art">
						<h5>John doe</h5>
						<div>
							
						
						<div class="rating left">
					
      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
      
    </div>	
    <img src="img/fav.png" class="right" alt="">
    </div>
					</div>
					
				</div>
				
			</div>	
		</div>
		
		<div class="offset-2 offset-sm-0 col-8 col-sm-12 col-md-6 col-lg-4 col_result box">
			<div class="row">
				<div class="col-md-11 no_p_m art shadow">
					<div class="img_bg"></div>
					<hr>
					<div class="des_art">
						<h5>John doe</h5>
						<div>
							
						
						<div class="rating left">
					
      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
      
    </div>	
    <img src="img/fav.png" class="right" alt="">
    </div>
					</div>
					
				</div>
				
			</div>	
		</div>
		
		<div class="offset-2 offset-sm-0 col-8 col-sm-12 col-md-6 col-lg-4 col_result box">
			<div class="row">
				<div class="col-md-11 no_p_m art shadow">
					<div class="img_bg"></div>
					<hr>
					<div class="des_art">
						<h5>John doe</h5>
						<div>
							
						
						<div class="rating left">
					
      <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Meh">5 stars</label>
      <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Kinda bad">4 stars</label>
      <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Kinda bad">3 stars</label>
      <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Sucks big tim">2 stars</label>
      <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
      
    </div>	
    <img src="img/fav.png" class="right" alt="">
    </div>
					</div>
					
				</div>
				
			</div>	
		</div>
		
		

			</div>
		
		</div>
		
		
		</div>
		
		
		
		
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-8 text-center paging">
				<a href="" ><button class="paging-num">1</button></a>
				<a href="" ><button class="paging-num">2</button></a>
				<a href="" ><button class="paging-num">3</button></a>
				<a href="" ><button class="paging-gt"><img src="img/gt.svg" alt=""></button></a>
				
				
			</div>
		</div>
		
		<div class="row">
			<div class="f-ads">
				<img src="" alt="">
			</div>
		</div>
	</div>
	
	<?php
    include "footer.php";
    ?>
	
	<div class="container-fluid golden-footer">
	<div class="container ">
			<div class="row ">
				<span class="text-left col-6">&copy; Mou9ef.com 2019</span>
				<span class="text-right col-6">
					
							<span><a href=""><img src="img/f-instg.svg" alt=""></a></span>
							<span><a href=""><img src="img/f-twiter.svg" alt=""></a></span>
							<span><a href=""><img src="img/f-facebook.svg" alt=""></a></span>
						
				</span>
			</div>
		</div>
	</div>	
	
</body>
</html>