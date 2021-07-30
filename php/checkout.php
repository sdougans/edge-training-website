<html>
	<head>
		<title>
			Form | EdgeTraining
		</title>
		<link rel = "stylesheet" type = "text/css" href = "../css/checkout.css">
		<link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="../icons/favicon.ico">
		<script>
			function homeAlert(){
				var text;
				if(confirm("This transaction will be cancelled if you leave this page. Continue?")){
					window.location.href='../pages/homePage.html'
				}
			}
			function logoutAlert(){
				var text;
				if(confirm("This transaction will be cancelled if you log out. Continue?")){
					window.location.href='../pages/loginPage.html'
				}
			}
			function formAlert(){
				var text;
				if(confirm("This transaction will be cancelled if you leave this page. Continue?")){
					window.location.href='../pages/formPage.html'
				}
			}
			function advFormAlert(){
				var text;
				if(confirm("This transaction will be cancelled if you leave this page. Continue?")){
					window.location.href='../pages/advancedFormPage.html'
				}
			}
			function storeAlert(){
				var text;
				if(confirm("This transaction will be cancelled if you go back to the store. Continue?")){
					window.location.href='../pages/store.html'
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
					<a onclick="homeAlert()">Home</a>
					<a onclick="formAlert()">Simple form</a>
					<a onclick="advFormAlert()">Advanced form</a>
					<a onclick="storeAlert()">Store</a>
                    <a onclick="logoutAlert()">Logout</a>
				</div>
			</div>
			<!--<div class="big_text">-->
				<!--Your price is: <p class="form_para" annoy1="total_price"><?php echo $_POST["total_price"]; ?></p></br>-->
				<!--<p class="form_para" annoy1="bread"><?php echo $_POST["bread"]; ?></p></br>
				<p class="form_para" annoy1="bread_quantity"><?php echo $_POST["bread_quantity"]; ?></p></br>
				<p class="form_para" annoy1="bread_price"><?php echo $_POST["bread_price"]; ?></p></br>-->
			<!--</div>-->
			<div id="main_area">
				<div class="form_div">
					<form class="myForm" name="basic_form" method="post" action="../php/confirmation.php" onsubmit="return validateForm()">
						<div class="row">
							<div class="col-50">
								<h2>Delivery Information</h2>
								<br>
								<label><strong>Full Name:</strong>
									<input type="text" required name="full_name" id="full_name" >
								</label>
								<br>
								<label><strong>Email:</strong>
									<input type="email" required name="email" id="email">
								</label>
								<br>
								<label><strong>Address 1:</strong>
									<input type="text" required name="address1" id="address1">
								</label>
								<br>
								<label><strong>Address 2:</strong>
									<input type="text" name="address2" id="address2">
								</label>
								<br>
								<label><strong>Address 3:</strong>
									<input type="text" name="address3" id="address3">
								</label>
								<br>
								<div class="row">
									<div class="col-50">
										<label><strong>City</strong>
											<input type="text" required name="city" id="city">
										</label>
									</div>
									<div class="col-50">
										<label><strong>Postcode</strong>
											<input type="text" required name="postcode" id="postcode">
										</label>
									</div>
								</div>
							</div>
							<div class ="col-50">
								<h2>Payment</h2>
								<br>
								<label><strong>Card Type</strong>
									<select id="card_type" name="card_type" required>
										<option value="" selected="selected">Select One</option>
										<option value="visa" >Visa</option>
										<option value="mastercard" >Mastercard</option>
										<option value="am_ex" >American Express</option>
									</select>
								</label>
								<br>
									<label><strong>Name on Card:</strong>
										<input type="text" required name="card_name" id="card_name">
									</label>
								<br>
								<div class="row">
									<div class="col-50">
										<label><strong>Card Number:</strong>
											<input pattern=".{16,16}" required title="16 digits required" type="text" onkeypress="isInputNumber(event)" name="card_number" id="card_number" maxlength="16" placeholder="5555-5555-5555-5555">
										</label>
										<script>
											function isInputNumber(evt){
													
												var ch = String.fromCharCode(evt.which);
													
												if(!(/[0-9]/.test(ch))){
													evt.preventDefault();
												}
													
											}
										</script>
									</div>
									<div class="col-50">
										<label><strong>CVV:</strong>
											<input pattern=".{3,3}" required title="3 digits required" type="text" onkeypress="isInputNumber(event)" name="cvv" id="cvv" maxlength="3" placeholder="123">
										</label>
										<script>
											function isInputNumber(evt){
													
												var ch = String.fromCharCode(evt.which);
													
												if(!(/[0-9]/.test(ch))){
													evt.preventDefault();
												}
												
											}
										</script>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-50">
										<label><strong>Exp Month:</strong>
											<select id="exp_m" name="exp_m" required>
												<option value="">--</option>
												<option>01</option>
												<option>02</option>
												<option>03</option>
												<option>04</option>
												<option>05</option>
												<option>06</option>
												<option>07</option>
												<option>08</option>
												<option>09</option>
												<option>10</option>
												<option>11</option>
												<option>12</option>
											</select>
										</label>
									</div>
									<div class="col-50">
										<label><strong>Exp Year:</strong>
											<select id="exp_y" name="exp_y" required>
												<option value="">--</option>
												<option>19</option>
												<option>20</option>
												<option>21</option>
												<option>22</option>
												<option>23</option>
												<option>24</option>
												<option>25</option>
												<option>26</option>
												<option>27</option>
												<option>28</option>
												<option>29</option>
												<option>30</option>
												<option>31</option>
												<option>32</option>
												<option>33</option>
												<option>34</option>
												<option>35</option>
												<option>36</option>
												<option>37</option>
												<option>38</option>
												<option>39</option>
											</select>
										</label>
									</div>
								</div>
								<br>
								<br>
								<br>
								<br>
								<p class="form_para" annoy1="total_price">Your price is: <?php echo $_POST["total_price"]; ?></p>
							</div>
						</div>
						<div>
							<input class="form_btn" type="submit" id="submit_btn"></input>
						</div>
						<br>
					</form>
					<br><br><br>
				</div>
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