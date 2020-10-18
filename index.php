<?php include('server.php');

    if (empty($_SESSION['username'])) {
        header('location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="now.css">
</head>
<body data-spy="scroll" data-target="#menu">


    <div class="content">
    <?php if(isset($_SESSION['success'])) : ?>
        <div class="error success">
            <h3>
                <?php 
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <div id="home">


<nav class="navbar navbar-dark navbar-expand-md fixed-top">
<div class="container-fluid">
	<a class="navbar-brand" href="#"><img src="img/sti.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="menu">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#home">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#evaluation">Evaluation</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#about">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#faq">FAQ</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#contact">Contact</a>
			</li>
            <li class="nav-item">
            <p><button type="button" class="btn btn-secondary"><a href="index.php?logout='1'" style="color: black;">Logout</a></button></p>
			</li>
		</ul>
	</div>
	
</div>
</nav>

<div class="landing">
	<div class="home-wrap">
		<div class="home-inner">
		</div>
	</div>
</div>

<div class="caption center-block text-center">
<?php if (isset($_SESSION["username"])) : ?>
    <h3>Welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
    <?php endif ?>
	<a class="btn btn-outline-warning" href="#evaluation">Get Started</a>
</div>
	
</div> 

<div id="evaluation">

<div class="jumbotron">

     <h3 class="heading">Evaluation</h3>
	 <a class="btn btn-outline-warning d-flex justify-content-center" href="evaluation.php">Start Evaluation</a><br>
<div class="row">
	<div class="col-md-4 text-center">
		<h4>MISSION</h4>
		<p>We are an institution committed to provide knowledge through the development and 
		delivery of superior learning systems. We strive to provide optimum value to all our 
		stakeholders, our students, our faculty members, our employees, our partners, our shareholders, 
		and our community. we will pursue this mission with utmost integrity, dedication, transparency, 
		and creativity.</p>
	</div>
	<div class="col-md-4 text-center">
		<h4>VISION</h4>
		<p>To be the leader in innovative and relevant education that nurtures individuals
		 to become competent and responsible members of society.</p>
	</div>
	<div class="col-md-4 text-center">
		<h4>EVALUATION</h4>
		<p>Lorem ipsum dolor sit amet.</p>
	</div>
</div>
</div>
</div>

<div id="about">
<div class="container-fluid padding">
	
	<h3 class="heading">About Our Teams</h3>

<div class="row no-padding">

	<div class="col-md-6">
		<img class="portfolio" src="img/comlab1.jpg">
	</div>
	<div class="col-md-6">
		<img class="portfolio" src="img/comlab1.jpg">
	</div>
	<div class="col-md-6">
		<img class="portfolio" src="img/comlab1.jpg">
	</div>
	<div class="col-md-6">
		<img class="portfolio" src="img/comlab1.jpg">
	</div>
	
</div>
</div>
</div>

<div id="faq">

	<h3 class="heading">FAQ<br>Students Help<br>I don't know my login credentials</h3>

<div class="row padding">
	
	<div class="col-md-6">
		<div class="card text-center">
			<img class="card-img-top" src="img/register.png" width="450" height="300">
			<div class="card-body">
				<h4>Registration</h4>
				<p>To Register just put your Username, Email, Student Number, Password, and Confirm Password.<br>
				STI Register credentials format:<br>Username: [Lastname, Firstname]<br>Email: [Your email]<br>Student Number: [Your eleven(11) digits student number]<br>
				Password: [Lastname, Birthday] (YYYYMMDD)<br>Confirm Password: [Your Confirm Password]</p>
			</div>
		</div>
	</div>

	<div class="col-md-6">
		<div class="card text-center">
			<img class="card-img-top" src="img/login.png" width="450" height="300">
			<div class="card-body">
				<h4>Login</h4>
				<p>To login just put your Username and Password Account.<br>Sample:<br>Username: neil<br>
				Password: 123456789</p>
			</div>
		</div>
	</div>
	
</div>
</div>

<div id="contact">

<div class="container-fluid footer">
<div class="row">

	<div class="col-md-3"></div>
	<div class="col-md-6" text-center>
		<img src="img/sti.png">
		<p>CAREER PORTAL OF STI COLLEGE CALOOCAN</p>
		<strong>Our Location</strong>
		<p>109 Samson Road Corner Caimito St.,<br>Caloocan City 1400</p>
		<strong>Contact Info</strong>
		<p>(+632) 29-9999<br>(+632) 29-0000</p>
	</div>
	
</div>
</div>
</div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>