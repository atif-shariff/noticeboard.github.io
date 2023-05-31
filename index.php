<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SMART NOTICE BOARD</title>
	<link rel="stylesheet" href="css/style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>
	<nav>
		<div class="menu">
			<div class="logo">
				<a href="index.php">DIGITAL SIGNAGE</a>
			</div>
			<ul>
				<li><a href="index.php">Home</a></li>
				<?php
				session_start();
				if(isset($_SESSION['username'])){
					echo '<li><a href="contents.php">Upload</a></li>';
				}else{
					echo '<li><a href="login.php">login</a></li>';
				}
			?>
			</ul>
		</div>
	</nav>
	<div class="img"></div>


	<div class="center">
		<div class="container">
			<span class="text first-text">Digital Notice Board Developed by</span>
			<span class="text sec-text"></span>
		</div>

		<script>
			const text = document.querySelector(".sec-text");

			const textLoad = () => {
				setTimeout(() => {
					text.textContent = "Atif";
				}, 0);
				setTimeout(() => {
					text.textContent = "Heena";
				}, 4000);
				setTimeout(() => {
					text.textContent = "Adnan";
				}, 8000); //1s = 1000 milliseconds
			}

			textLoad();
			setInterval(textLoad, 12000);
		</script>



		<!-- <div class="title">Notice <Board> --> -->
		<div class="sub_title">Login or Signup to use our services</div>
		<div class="btns">
			<button class="GFG" <?php if(isset($_SESSION['username'])){ echo 'onclick="window.location.href = \'
				logout.php\'"'; echo 'value="Logout"' ; } else { echo 'onclick="window.location.href = \' login.php\'"';
				} ?>>
				<?php if(isset($_SESSION['username'])){ echo 'Logout'; } else { echo 'Click Here'; } ?>
			</button>
			<button class="GFG" <?php if(isset($_SESSION['username'])){ echo 'onclick="window.location.href = \'
				contents.php\'"'; echo 'value="upload"' ; } else { echo 'onclick="window.location.href = \'
				About.php\'"'; } ?>>
				<?php if(isset($_SESSION['username'])){ echo 'Upload'; } else { echo 'About'; } ?>
			</button>



		</div>
	</div>
	<section class="about-us">
		<div class="container">
			<div class="content">
				<div class="left-side">
					<div class="address details">
						<i class="fas fa-map-marker-alt"></i>
						<div class="topic">Address</div>
						<div class="text-one">HBR LAYOUT</div>
						<div class="text-two">BANGALORE 560043</div>
					</div>
					<div class="phone details">
						<i class="fas fa-phone-alt"></i>
						<div class="topic">Phone</div>
						<div class="text-one">+91 8971708675</div>
						<div class="text-two">+91 9148915298</div>
						<div class="text-two">+91 8792645215</div>
					</div>
					<div class="email details">
						<i class="fas fa-envelope"></i>
						<div class="topic">Email</div>
						<div class="text-one">atifshariffahmed1234@gmail.com</div>
						<div class="text-two">michalshariff@gmail.com</div>
					</div>
				</div>
				<div class="right-side">
					<div class="topic-text">Send us a message</div>
					<p>If you have any work from me or any types of quries related to my work, you can send me message
						from here. It's my pleasure to help you.</p>




					<form action="connect.php" method="post">
						<div class="input-box">
							<input type="text" placeholder="Enter your name" id="name" name="name">
						</div>
						<div class="input-box">
							<!-- <input type="email" placeholder="Enter your email"> -->
							<input type="email" id="email" placeholder="Enter your email" name="email">
						</div>
						<div class="input-box message-box">
							<input type="text" placeholder="Enter your queries" name="queries">
						</div>
						<div class="button">
							<input type="submit" value="Send">
						</div>
				</div>
			</div>
		</div>
		</form>
	</section>




</body>

</html>