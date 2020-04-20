<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'links/links.php'; ?>
	<?php include 'css/style.php'; ?>
</head>
<body>

<!-- //////////// Navbar /////////////-->
		<nav class="navbar navbar-expand-lg p-3 navbar_style">
	  <a class="navbar-brand pl-5" href="#">COVID-19</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse pr-5 text-capitalize" id="navbarSupportedContent">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item active">
	        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#aboutid">About</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="#symptoms">Symptoms</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="#prevent">Prevention</a>
	      </li>

	      <li class="nav-item">
	        <a class="nav-link" href="#contact">Contact</a>
	      </li>
	    </ul>
	  </div>
	</nav>

<!-- //////////// Main Header/////////////-->
	<div class=" container-fluid main_header" id="mainHeader">
		<div class="row">
			<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
				<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
					<img src="images/coronaMain.png" width="400" height="400">
				</div>
				
			</div>

			<div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
				<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
					<h1>Let's Stay Safe And Fight Together Against Cor<span class="img_rotate"><img src="images/coronaRotate.png" width="100" height="100"></span>na Virus</h1>
				</div>
				
			</div>
		</div>
		
	</div>

<!-- //////////// Corona Latest Update /////////////-->
	<section class="corona_update" id="update">
		<div class="mb-3">
				<h2 class="text-center text-uppercase">Covid-19 Updates</h2>
		</div>

		<div class="d-flex justify-content-around align-items-center mt-5">
			<div>
				<h1 class=count>2,876,567</h1>
				<p>Passenger Screened At The Airpot</p>
			</div>
			
			<div>
				<h1 class=count>674</h1>
				<p>Active COVID-19 Cases*</p>
			</div>

			<div>
				<h1 class=count>154</h1>
				<p>Cured/Discharged Cases</p>
			</div>

			<div>
				<h1 class=count>34</h1>
				<p>Death Cases</p>
			</div>
		</div>
	</section>

<!-- ////////////About Section///////////////-->

	<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
		<div class="section_header text-center mb-5 mt-4">
			<h2>About COVID-19</h2>
		</div>

		<div class="row pt-5">
			<div class="col-lg-5 col-md-6 col-12 ml-5">
				<img src="images/aboutCorona.jpg" class="img-fluid" width="300" height="300">
			</div>

			<div class="col-lg-6 col-md-6 col-12">
				<h2>What Is Covid-19 (Corona Virus)</h2>
				<p>Coronaviruses are a group of related viruses that cause diseases in mammals and birds. In humans, coronaviruses cause respiratory tract infections that can range from mild to lethal. Mild illnesses include some cases of the common cold (which has other possible causes, predominantly rhinoviruses), while more lethal varieties can cause SARS, MERS, and COVID-19. Symptoms in other species vary: in chickens, they cause an upper respiratory tract disease, while in cows and pigs they cause diarrhea. There are yet to be vaccines or antiviral drugs to prevent or treat human coronavirus infections. </p>
				<p>Coronaviruses constitute the subfamily Orthocoronavirinae, in the family Coronaviridae, order Nidovirales, and realm Riboviria.They are enveloped viruses with a positive-sense single-stranded RNA genome and a nucleocapsid of helical symmetry. The genome size of coronaviruses ranges from approximately 26 to 32 kilobases, one of the largest among RNA viruses.They have characteristic club-shaped spikes that project from their surface, which in electron micrographs create an image reminiscent of the solar corona from which their name derives.</p>
			</div>
		</div>
		
	</div>


<!-- /*////////////Symptoms/////////*/ -->

	<div class="container-fluid pt-5 pb-5" id="symptoms">
			<div class="section_header text-center mb-5 mt-4">
				<h2>CoronaVirus Symptoms</h2>
			</div>

			<div class="row">

				<div class="col-lg-4 col-md-4 col-12 mt-3">
					<figure class="text-center">
						<img src="images/cough.png" class="img-fluid" width="200" height="200">
						<figcaption><h3>Cough</h3></figcaption>
					</figure>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-3">
					<figure class="text-center">
						<img src="images/runnyNose.jpg" class="img-fluid" width="250" height="250">
						<figcaption><h3>Runny Nose</h3></figcaption>
					</figure>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-3">
					<figure class="text-center">
						<img src="images/fever.jpg" class="img-fluid" width="180" height="180">
						<figcaption><h3>Fever</h3></figcaption>
					</figure>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-3">
					<figure class="text-center">
						<img src="images/cold.jpg" class="img-fluid" width="230" height="230">
						<figcaption><h3>Cold</h3></figcaption>
					</figure>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-3">
					<figure class="text-center">
						<img src="images/tirdness.jpg" class="img-fluid" width="170" height="170">
						<figcaption><h3>Tirdness</h3></figcaption>
					</figure>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-3">
					<figure class="text-center">
						<img src="images/difficultyBreath.png" class="img-fluid" width="230" height="230">
						<figcaption><h3>Difficulty Breathing</h3></figcaption>
					</figure>
				</div>
			</div>
	</div>

<!-- /////Prevention////// -->

	<div class="container-fluid sub_section pt-5 pb-5" id="prevent">
		<div class="section_header text-center mb-5 mt-4">
			<h2>6-Steps Prevention Against CoronaVirus</h2>
		</div>

		<div class="container">

			<div class="row">

				<div class="col-lg-4 col-md-4 col-12 mt-5">
						<div class="row">
							<div class="col-lg-6 col-md-4 col-12">
								<figure class="text-center">
									<img src="images/handWash.jpg" class="img-fluid" width="200" height="200">
								</figure>
							</div>

							<div class="col-lg-6 col-md-8 col-12">
								<p>Wash Your Hand Properly With Soap For Atleast 20 Seconds</p>
							</div>
						</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-4 col-12">
							<figure class="text-center">
								<img src="images/coverMouth.jpg" class="img-fluid" width="200" height="200">
							</figure>
						</div>

						<div class="col-lg-6 col-md-8 col-12">
							<p>Cover Your Mouth While Coughing Or Sneezing</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-4 col-12">
							<figure class="text-center">
								<img src="images/socialDistance.jpg" class="img-fluid" width="200" height="200">
							</figure>
						</div>

						<div class="col-lg-6 col-md-8 col-12">
							<p>Keep Distance Of Atleast 6 Feet Between You And Others</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-4 col-12">
							<figure class="text-center">
								<img src="images/isolate.jpg" class="img-fluid" width="200" height="200">
							</figure>
						</div>

						<div class="col-lg-6 col-md-8 col-12">
							<p>Stay At home And Stay Safe</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-4 col-12">
							<figure class="text-center">
								<img src="images/news.jpg" class="img-fluid" width="200" height="200">
							</figure>
						</div>

						<div class="col-lg-6 col-md-8 col-12">
							<p>Keep Updating Yourself With Latest News And Avoid Rumors</p>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 col-12 mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-4 col-12">
							<figure class="text-center">
								<img src="images/doctor.png" class="img-fluid" width="200" height="200">
							</figure>
						</div>

						<div class="col-lg-6 col-md-8 col-12">
							<p>If You Are Not Feeling Well Then Contact The Doctor Immediately</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>

	</div>

<!-- ////////Contact us Asap/////// -->

	<div class="container-fluid pt-5 pb-5" id="contact">
		<div class="section_header text-center mb-5 mt-4">
			<h2>Contact Us ASAP</h2>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-12">
					
					<form>
						<div class="form-group">
						    <label>Username</label>
						    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
						  </div>

						<div class="form-group">
						    <label>Email address</label>
						    <input type="email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
						  </div>

						 <div class="form-group">
						    <label>Mobile</label>
						    <input type="number" class="form-control" name="mobileno" placeholder="mobile" autocomplete="off" required>
						  </div>
<!-- ////////////////MultiSelect CheckBox/////////// -->
						<div>
							<label>Select Symptoms</label>

								<div class="d-flex align-items-center">
									<div class="custom-control custom-checkbox mr-5">
					        			<input type="checkbox" class="custom-control-input" id="symptoms1" name="symptoms[]" value="cold">
					        			<label class="custom-control-label" for="symptoms1">Cold</label>
					    			</div>

							    	<div class="custom-control custom-checkbox mr-5">
							        	<input type="checkbox" class="custom-control-input" id="symptoms2" name="symptoms[]" value="fever">
							        	<label class="custom-control-label" for="symptoms2">Fever</label>
							    	</div>

							    	<div class="custom-control custom-checkbox mr-5">
							        	<input type="checkbox" class="custom-control-input" id="symptoms3" name="symptoms[]" value="breath">
							        	<label class="custom-control-label" for="symptoms3">Difficulty In Breath</label>
							    	</div>

							    	<div class="custom-control custom-checkbox mr-5">
							        	<input type="checkbox" class="custom-control-input" id="symptoms4" name="symptoms[]" value="weak">
							        	<label class="custom-control-label" for="symptoms4">Feeling Weak</label>
							    	</div>
								</div>
							
						</div> 
					    

					  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Example textarea</label>
						    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						  </div>

						  <div class="form-group">
						    <button type="button" class="btn btn-primary">Submit</button>
						  </div>
						  
					</form>

				</div>
				

			</div>
		</div>

	</div>

<!-- ///////Scroll Behaviour////////// -->
	<div class="container scrolltop float-right pr-5">
		<i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
	</div>

<!-- //////////Footer Style//////// -->

	<footer class="mt-5">
		<div class="footer_style text-center text-white container-fluid">
			<p>Created By Mohak</p>
		</div>
	</footer>

<!-- /////////////////Script/////////// -->

<script type="text/javascript">

///////jQuery Code////////////
	$('.count').counterUp({
		delay:10,
		time:3000
	})

///////////////scroll top and down function////////
	myBtn=document.getElementById('myBtn');
	window.onscroll=function() {scrollFunction()};

	function scrollFunction(){
		if(document.body.scrollTop >100 || document.documentElement.scrollTop>100)
		{
			myBtn.style.display="block";
		}
		else
		{
			myBtn.style.display="none";
		}
	}

	function topFunction(){
		document.body.scrollTop=0; //for Safari
		document.documentElement.scrollTop=0 //for chrome,firefox,IE
	}

</script>

</body>
</html>