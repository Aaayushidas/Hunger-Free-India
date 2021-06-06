<?php
	// Initialize session
	session_start();

	if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== false) {
		header('location: login.php');
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<link href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/cosmo/bootstrap.min.css" rel="stylesheet" integrity="sha384-qdQEsAI45WFCO5QwXBelBe1rR9Nwiss4rGEqiszC+9olH1ScrLrMQr1KmDR964uZ" crossorigin="anonymous">
	<link rel="stylesheet" href="donate.css">
  
</head>
<body>
	<main>
		<section class="container wrapper">
			<div class="page-header">
				<h2 id="xx" class="display-5">Welcome home <?php echo $_SESSION['username']; ?></h2>
			</div>

			<a href="password_reset.php" class="btn" id="yyy" >Reset Password</a>
			<a href="logout.php" class="btn" id="yy" >Log Out</a>
		</section>
    <div id="box">
    <div class="note">
       <form action="nhaayu.php">
   <h2>Donation Form</h2>
   <label for="form" class="lab">Your name</label>
<input type="name" name="name"  class="form" >

<label for="form" class="lab">Your number</label>
<input type="number" name="number"  class="form" >

<label for="form" class="lab">Your email</label>
<input type="email" name="email"  class="form" >

<label for="form" class="lab" >Donation Amount</label>
<input type="number" name="amount"  class="form" >

<button class="btn" id="bt" >DONATE</button>
   </form>
    </div>
</div>
    <footer>
        <div class="foot">
            Copyright &copy; www.hungerfreeindia.com. All rights reserved!
        </div>
    </footer>
	</main>
</body>
</html>