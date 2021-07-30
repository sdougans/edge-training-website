<html>

<head>
	<title>
		Form | EdgeTraining
	</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
	<link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="../icons/favicon.ico">
	<script>
		function logoutAlert() {
			var text;
			if (confirm("Are you sure you want to log out?")) {
				window.location.href = '../pages/loginPage.html'
			}
		}
	</script>
</head>

<body>
	<div id="top_div">
		<div id="title_div">
			Welcome to EdgeTraining
		</div>
	</div>
	<div id="main_div">
		Please wait....
		<img class="main_text" src="../img/loading.svg" alt="Animated spinning loading icon" height="82" width="82">
		<div class="main_text">
			<?php

			$username = $password = "";
			$valid = 'False';
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$username = test_input($_POST["username"]);
				$password = test_input($_POST["password"]);

				if ($username == "user1" && $password == "pass1") {
					$valid = 'True';
				} else if ($username == "user2" && $password == "pass2") {
					$valid = 'True';
				} else if ($username == "user3" && $password == "pass3") {
					$valid = 'True';
				} else if ($username == "user4" && $password == "pass4") {
					$valid = 'True';
				} else if ($username == "user5" && $password == "pass5") {
					$valid = 'True';
				} else {
					$dbhost = 'localhost';
					$dbuser = 'root';
					$dbpass = '';
					$valid = 'False';

					$mysqli = new mysqli($dbhost, $dbuser, $dbpass, "EdgeTraining");
					$sql = 'SELECT username, password FROM loginDetails';
					$result = $mysqli->query($sql);

					$match = "";
					while ($row = mysqli_fetch_array($result)) {
						if ($row['username'] == $username and $row['password'] == $password) {
							$match = "Yes";
						}
					}

					if (strlen($match) == 0) {
						echo "Invalid username or password";
					} else {
						echo "Login successful";
						$valid = 'True';
					}
					mysqli_close($mysqli);
				}
			}

			function test_input($data)
			{
				$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			if ($valid == 'True') {
				header("refresh:2;url=../pages/homePage.html");
			} else {
				header("refresh:2;url=../pages/loginPage.html");
			}
			?>
		</div>
	</div>
</body>

</html>