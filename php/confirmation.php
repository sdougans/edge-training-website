<html>
	<head>
		<title>
			Checkout | EdgeTraining
		</title>
		<link rel = "stylesheet" type = "text/css" href = "../css/confirmation.css">
		<link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="../icons/favicon.ico">
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
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
	<div class="content_wrapper">
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

			<div id="main_text">
				Thank you for your purchase!
			</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<!--<input class="form_btn" type="button" id="store_nav" value="Return to Store">-->
			</div>
			<a class="form_btn" href="../pages/store.html"><strong>Return to Store</strong></a> 
		<div id="copyright_footer">
			<div id="right_footer">
				&copy; Edge Testing 2019. All Rights Reserved. All third party trademarks are hereby acknowledged.
			</div>

		</div>
		</div>

	</body>
</html>
