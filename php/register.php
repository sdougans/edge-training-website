<html>
	<head>
		<title>
			Form | EdgeTraining
		</title>
		<link rel = "stylesheet" type = "text/css" href = "../css/login.css">
		<link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="../icons/favicon.ico">
		<script>
			function logoutAlert(){
				var text;
				if(confirm("Are you sure you want to log out?")){
					window.location.href='../pages/loginPage.html'
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
				// define variables and set to empty values
				$username = $password = "";

				if ($_SERVER["REQUEST_METHOD"] == "POST") {
					$username = test_input($_POST["username"]);
					$password = test_input($_POST["password"]);
				  
					$dbhost = 'localhost';
					$dbuser = 'root';
					$dbpass = '';
				   
					$mysqli = new mysqli($dbhost, $dbuser, $dbpass, "EdgeTraining");
				   
					$sql = 'SELECT username FROM loginDetails';
					$result = $mysqli->query($sql);

					$unique = True;
					while($row = mysqli_fetch_array($result)) {
						if($row['username'] == $username){
							$unique = False;
						}
					}
					
					if($unique){
						$sql = "INSERT INTO loginDetails (username, password) VALUES ('$username', '$password')";
						$retval = $mysqli->query( $sql);
						
						echo "Registration successful";
						header("refresh:5;url=../pages/homePage.html");
					}
					else{
						echo "Username already exists";
						header("refresh:5;url=../pages/loginPage.html");
					}
				   
					mysqli_close($mysqli);

				}

				function test_input($data) {
				  $data = trim($data);
				  $data = stripslashes($data);
				  $data = htmlspecialchars($data);
				  return $data;
				}
				?>
				</div>
		</div>
		<div id="copyright_footer">
			<div id="left_footer">
			</div>
			<div id="right_footer">
				&copy; Edge Testing 2019. All Rights Reserved. All third party trademarks are hereby acknowledged.
			</div>
		</div>
	</body>
</html>