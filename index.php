<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<title>WorkandBe | Welcome</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />

	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" />

	<!-- Javascript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/kickstart.js"></script>
</head>
<body>
<div id="container" class="grid">
    <header>
	    <div class="col_6 column">
		    <h1><a href="index.html"><strong>Work</strong>andBe</a></h1>
			   </div>
					<div class="col_6 column right">
						<form id="add_job_link">
			        <button class="large green"><i class="icon-plus"></i>Add Job</button>
			</form>
		</div>
	 </header>

	 <div class="col_12 column">
		 <!-- Menu Horizontal -->
		  <ul class="menu">
			 <li class="current"><a href="index.php"><i class="icon-home" ></i> Home</a></li>
       <li><a href="jobs.php"><i class="icon-desktop" ></i> Browse Jobs</a></li>
      <li><a href="register.php"><i class="icon-user" ></i> Register</a></li>
      <li><a href="login.php"><i class="icon-key" ></i> Login<a/><li>
			</ul>
   </div> <!-- End Grid -->

   <div id="search_area" class="col_12 column">
		   <form class="horizontal " method="post" action="#">
				 <input id="keywords" type="text" placeholder="Enter keywords..." />
				 <select id="province_select">
					 <option>Select Province</option>
					 <option value="EC">Eastern Cape</option>
					 <option value="FS">Free State</option>
					 <option value="G">Gauteng</option>
					 <option value="KZN">KwaZulu-Natal</option>
					 <option value="L">Limpopo</option>
					 <option value="M">Mpumalanga</option>
					 <option value="NC">Northen Cape</option>
					 <option value="NW">North West</option>
					 <option value="WC">Western Cape</option>
				</select>
				<select id="category_select">
					<option>Select Category</option>
					<option>Artisans</option>
					<option>Carpentry</option>
					<option>Child Minding</option>
					<option>Construction</option>
					<option>Domestics</option>
					<option>Electrical</option>
					<option>General Maintanance</option>
					<option>Handy Man</option>
					<option>Landscaping & Gardening</option>
					<option>Painting</option>
					<option>Plumbing</option>
					<option>Tree Felling</option>
					<option>Tutoring</option>
					<option>Other</option>
					</select>
					<button type="submit">Submit</buttton>
			</form>
		</div>
			 <div class="col_12 column">
				 <h3>Latest Job Listings</h3>
				 <ul id="Listings">
					 <li>
						 <div class="type">
							 <span class="green">Full Time</span>
						 </div>
						 <div class="description">
							 <h5>Plumber (Durban, KwaZulu-Natal)</h5>
							 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
							 ut laoreet dolore magna aliquam erat volutpat.<a href="details.php"><i class="icon-plus"></i> Read More</a>
						 </div>
					 </li>
					 <li>
						 <div class="type">
							 <span class="green">Full Time</span>
						 </div>
						 <div class="description">
							 <h5>BrickLayer Class 3 (Johannesburg, Gauteng)</h5>
							 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
							 ut laoreet dolore magna aliquam erat volutpat.<a href="details.php"> <i class="icon-plus"></i> Read More</a>
						 </div>
					 </li>
					 <li>
						 <div class="type">
							 <span class="blue">Part Time</span>
						 </div>
						 <div class="description">
							 <h5>Painter (Kimberly, Northen Cape)</h5>
							 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
							 ut laoreet dolore magna aliquam erat volutpat.<a href="details.php"> <i class="icon-plus"></i> Read More</a>
							  </div>
					 </li>
					 <li>
					 <div class="type">
						 <span class="green">Full Time</span>
					 </div>
					 <div class="description">
						 <h5> House Painter Wanted (Johannesburg, Gauteng)</h5>
						 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt
						 ut laoreet dolore magna aliquam erat volutpat.<a href="details.php"> <i class="icon-plus"></i> Read More</a>
					 </div>
				 </li>
				 </ul>
	</div>
	<div class="clearfix"></div>
	<footer>
		<p>Copyright @copy; 2016, WorkandBe All Rights Reserved</p>
	</footer>
</body>
</html
