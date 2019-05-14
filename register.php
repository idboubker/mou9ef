<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>mou9ef</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/register.css">
	<script type="text/javascript" src="js/jquery.js"></script>
</head>
<body>
	<header class="container-fluid header" >
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
			
			<a href=""><button class="btn btn-success sign">Sign-up</button></a>
			<a href=""><button class="btn btn-success log">Log-in</button></a>
		</div>
	</div>
	</header>
	
	
	<div class="container-fluid reg-bg " style="box-shadow: 0 12px 22px -22px rgba(0, 0, 0, 0.8) inset;">
		<div class="container">
			<div class="sign-up row">
				<div class="form offset-md-1 col-md-10 text-center">
				
					
						<div class="height-part">
							<h2>SIGN UP</h2>
						</div>
						<div class="height-part">
							<ul class="list-group">
							<div class="row">
							<span id="b-account" class="col-xs-6 col-sm-6 col-md-6 account active">
								
									<li class="list-group-item">Basic Account</li>
								
							</span>	
							<span id="h-account" class="col-xs-6 col-sm-6 col-md-6 account">
								
									<li class="list-group-item">Hirafy Account</li>
								
							</span>
							</div>	
							
							</ul>	
							
						</div>
						
						<form action="" id="form-1" style="">
						<div class="input">
						<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control input_select " placeholder="First Name">
						</div>
						
						<div class="col-md-6">
							<input type="text" class="form-control input_select " placeholder="Last Name">
						</div>	
								
						<div class="col-md-12">
							<input type="text" class="form-control input_select " placeholder="Email">
						</div>			
						<div class="col-md-12">
							<input type="text" class="form-control input_select " placeholder="Phone Number">
						</div>	
						<div class="col-md-6">
							<input type="text" class="form-control input_select " placeholder="Password">
						</div>
						
						<div class="col-md-6">
							<input type="text" class="form-control input_select " placeholder="Rpeat Password">
						</div>
						<div class="col-md-12">
							<input type="submit" class="btn btn-success srh btn_grid sub" value="Sign up">
						</div>
						
									
						</div>	
						</div>
					</form>
					
					
					<form action="" id="form-2" style="display: none;">
						<div class="input">
						<div class="row">
						<div class="col-md-6">
							<input type="text" class="form-control input_select ">
						</div>
						
						<div class="col-md-6">
							<input type="text" class="form-control input_select ">
						</div>	
								
						<div class="col-md-12">
							<input type="text" class="form-control input_select ">
						</div>			
						<div class="col-md-12">
							<input type="text" class="form-control input_select ">
						</div>	
						<div class="col-md-6">
							<input type="text" class="form-control input_select ">
						</div>
						
						<div class="col-md-6">
							<input type="text" class="form-control input_select ">
						</div>
						<div class="col-md-12">
							<input type="submit" class="btn btn-success srh btn_grid sub" value="Sign up2">
						</div>
						
									
						</div>	
						</div>
					</form>
					
					
				</div>
			</div>
		</div>
	</div>
	
	
	
	<?php
    include "footer.php";
    ?>
	
	
	
	<script>
	$(function(){
		$('#b-account').click(function(){
			$('#b-account').attr('class','col-xs-6 col-sm-6 col-md-6 account active');
			$('#h-account').attr('class','col-xs-6 col-sm-6 col-md-6 account');
			$('#form-1').attr('style','display: block;');
			$('#form-2').attr('style','display: none;');
		});
		
		$('#h-account').click(function(){
			$('#b-account').attr('class','col-xs-6 col-sm-6 col-md-6 account');
			$('#h-account').attr('class','col-xs-6 col-sm-6 col-md-6 account active');
			$('#form-2').attr('style','display: block;');
			$('#form-1').attr('style','display: none;');
		});
	}); 
	
	</script>
</body>
</html>