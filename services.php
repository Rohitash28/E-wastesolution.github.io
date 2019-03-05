<html>
<head>
	<title>CSneophyte</title>
	
   <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/logo.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
 <link href="css/services.css" rel="stylesheet" type="text/css">

</head>
<body>
<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row"">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/logo.png" alt="">
					<span style="margin-left:0px;">course</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list" style="margin-left:50px;">
						<li class="main_nav_item"><a href="indexc.html">home</a></li>
						<li class="main_nav_item"><a href="aboutus.html">about us</a></li>
						<li class="main_nav_item"><a href="courses.html">courses</a></li>
						<li class="main_nav_item"><a href="land.html">Education</a></li>
						<li class="main_nav_item"><a href="Services.html">Services</a></li>
						<li class="main_nav_item"><a href="contact.html">contact</a></li>
					</ul>
				</div>
			</nav>
		</div>
		
   <div class="header_side d-flex flex-row justify-content-center align-items-center">
            <img src="img/phone-call.svg" alt="">
            <span>+919517907356</span>
        </div>

		<!-- Hamburger -->
		
	</header>
	
	<!-- Menu -->

	<!--section 1-->
	<div class="container-fluid" id="section2">
  <h1 class="text-center" style="background-color:rgb(229,194,130)">WHAT WE PROVIDE ?</h1>
  <div class="card" style="width:100%;">
    <img class="card-img-top" src="img/16.png" alt="Card image" style="width:100%," height=200px;>
    <div class="card-body">
      <p class="card-text">There are more than 27% of students who are studying across universities of India on education loan. We understand the need of certifications and Skill set at the time of interviews. But most of then are only able to complete their collages with great difficulty. we provide free Specialisations on coursera and Udemy certifications to financially dependent and students studying on loans to improve their skills and help them to be ready for next gen Silicon Valley Jobs.</p>
      <br/>
     </div>
  </div>
</div>
<!--form-->
<div class="container" style="margin-top: 50px;">
  <h1 class="alert alert-success"> Provide us with your valid Loan UID and IFSC Code of bank to avail free Specialisation</h1>
</div>
<div class="container card " style="height:600px">
  <form name="insert" action="services.php" method="POST">
<div class="row" style="height:400px;margin-bottom:100px;">
<div class="container">
  <div class="row card" style="background-color:black;padding:30px;" >
    <div class="col card-body">
      <input type="text" class="form-control" placeholder="First name" name="nameu">
      <br/>
        <input type="email" class="form-control" placeholder="email" name="email">
      <br/>
          <input type="numeric" class="form-control" placeholder="Loan UID" name="loanuid">
       <br/>
       <input type="text" class="form-control" placeholder="Bank IFSC" name="ifsc">
       <br/>
       <button class="btn btn-success btn-block" onclick="myalert()">submit</button>
    </div>

    </div>
  <br/>
</form>

</div>

<script>
  function myalert(){
    location.href="indexc.html";
     alert("Cheers ! Submitted Sucessfully");
  }
</script>
</body>
</html>

<?php
$db = pg_connect("host=localhost port=59206 dbname=A9bkrwN3f0pMQXEc user=postgre password=cse123");
$query = "INSERT INTO REGISTER VALUES ('$_POST[nameu]','$_POST[loanuid]',
'$_POST[ifsc]','$_POST[email]')";
$result = pg_query($query); 
?>

 , 
