<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Realtime Chat App</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
	<div class="wrapper">
		<section class="form login">
			<header>ChatRoom</header>
			<form action="rooms.php" method="POST">
				<div class="error-txt">Chat with your friends using our free platform</div>
				<div class="field input">
					<label>Username</label>
					<input type="text" placeholder="Enter your name" name="name">
				</div>
				<div class="field button">
					<input type="submit" value="Claim Room">
				</div>
			</form>
		</section>
	</div>
	
</body>

</html>