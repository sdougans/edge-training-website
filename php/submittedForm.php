<html>
	<head>
		<title>
			Form | EdgeTraining
		</title>
		<link rel = "stylesheet" type = "text/css" href = "../css/form.css">
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
				EdgeTraining
			</div>
		</div>
		<div id="main_div">
			<div id="left_stuff">
				<div id="left_menu_links">
					<a href="../pages/homePage.html">Home</a>
					<a href="../pages/formPage.html">Simple form</a>
					<a href="../pages/advancedFormPage.html">Advanced form</a>
					<a href="../pages/store.html">Store</a>
                    <a onclick="logoutAlert()">Logout</a>
				</div>
			</div>
			<div class="big_text">
				Welcome <p class="form_para" annoy1="name_text"><?php echo $_POST["name"]; ?></p></br>
				Your gender is: <p class="form_para" annoy2="gender_text"><?php echo $_POST["gender"]; ?></p></br>
				Your age is: <p class="form_para" annoy3="age_text"><?php echo $_POST["age"]; ?></p></br>
				Your password is: <p class="form_para" annoy4="pass_text"><?php echo $_POST["pass"]; ?></p>
			</div>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<a id="home_btn" href="../pages/homePage.html"><strong>Return to Home</strong></a> 
		</div>
		<div id="copyright_footer">
			&copy; Edge Testing 2019. All Rights Reserved. All third party trademarks are hereby acknowledged.
		</div>
	</body>
</html>