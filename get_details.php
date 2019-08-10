 <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
<meta name="description" content="Friends Details Form">
  <meta name="theme-color" content="#eb99ff">
  <meta name="keywords" content="HTML,CSS,XML,JavaScript">
  <meta name="description" content="Friends Details Form">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>facebook</title>
	<style>
		#dialogoverlay{
			display: none;
			opacity: 0.7;
			position: fixed;
			top: 0px;
			left: 0px;
			background: #fefefe;
			width: 100%;
			height: 100%;
			z-index: 9999;
		}
		#dialogbox{
			display: none;
			position: fixed;
			background: #7c7d7e;
			border-radius: 10px;
			width: 480px;
			z-index: 9999;
		}
		/*#dialogoverlay1{
			display: none;
			opacity: 0.7;
			position: fixed;
			top: 0px;
			left: 0px;
			background: #fefefe;
			width: 100%;
			height: 100%;
			z-index: 9999;
		}*/
		#dialogbox1{
			display: none;
			position: fixed;
			background: #7c7d7e;
			border-radius: 10px;
			width: 480px;
			z-index: 9999;
		}
		#dialogbox-header{
			background: #6d84b4;
			margin: 10px 10px 0px 10px;
			padding: 10px;
			color: white;
			font-size: 20px;
		}
		#dialogbox-body{
			background: white;
			color: black;
			font-size: 14px;
			margin:0px 10px 0px 10px;
			padding:10px;
		}
		#dialogbox-footer{
			background: #f2f2f2;
			margin: 0px 10px 10px 10px;
			padding: 10px;
			text-align: right;
		}
		#dialogbox-footer-button{
			background: #6d84b4;
			padding: 5px;
			color: white;
			border: 0px;
		}
		body{
		margin: 0;
		padding: 0;
		background: url();
		background-size:cover;
		background-position: center;
		font-family: sans-serif;
		}
		.loginbox{
			width: 420px;
			height: 950px;
			background: #eb99ff;
			color:#ff0000;
			top: 50%;
			margin-top: 1px;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 70px 30px;
		}
		.avatar{
			width: 110px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: 18%;
			left: calc(50% - 60px);
		}
		h1{
			margin-top: 220px;
			padding: 0 0 18px;
			text-align: center;
			font-size: 22px;
		}
		h2{
			padding: 0 0 18px;
			text-align: center;
			font-size: 18px;
		}
		.loginbox p{
			margin: 0;
			padding: 0;
			margin-left:10px;
			font-weight: bold;
		}
		.loginbox input{
			width: 100%;
			margin-left:10px;
			margin-bottom: 10px;
		}
		.loginbox input[type="text"] ,input[type="email"],input[type="date"],input[type="radio"],input[type="number"], input[type="password"]{
			border: none;
			border-bottom: 0.5px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: #000;
			font-size: 16px;
			margin-bottom: 20px;
		}
		.loginbox input[type="submit"]{
			border: none;
			outline: none;
			width: 100%;
			height: 40px;
			background: #0272a6;
			color: #fff;
			font-size: 18px;
			border-radius: 20px;
		}
		.loginbox input[type="submit"]:hover{
			cursor: pointer;
			background: #ffc107;
			margin-bottom: 10px;
			color: #000;
		}
		.loginbox a{
			text-decoration: none;
			font-size: 18px;
			line-height: 20px;
			color: #ff0000;
			text-align: center;
			
		}
		.loginbox a:hover{
			color: #ffc107;
		}
		.ss{
			margin-left: 10px;
		}
		.forgot{
			margin-left: 10%;
		}
		.notacc{
			margin-left: 70px;
		}
	</style>
	<script>
		function Login(){
			var dol=document.getElementById("dialogoverlay");
			var db=document.getElementById("dialogbox");
			var db1=document.getElementById("dialogbox1");
			dol.style.display="none";
			db.style.display="none";
			db1.style.display="none";
		}
		function Online(){
			var password=document.myform.pass.value;
			if (password==null || password=="") {
				var dol=document.getElementById("dialogoverlay");
				var db=document.getElementById("dialogbox");
				dol.style.display="block";
				db.style.display="block";
				var winW=window.innerWidth;
				var winH=window.innerHeight;

				db.style.left=(winW/2)-480/2+"px";
				db.style.top="250px";

			}else if(password.length<8){
				var dol1=document.getElementById("dialogoverlay");
				var db1=document.getElementById("dialogbox1");
				dol1.style.display="block";
				db1.style.display="block";

				var winW1=window.innerWidth;
				var winH1=window.innerHeight;

				db1.style.left=(winW1/2)-480/2+"px";
				db1.style.top="250px";

			}

		}
	</script>
</head>
<body>
	<div id="dialogoverlay"></div>
		<div id="dialogbox">
			<div id="dialogbox-header">Error...</div>
			<div id="dialogbox-body">password cann't be blank.</div>
			<div id="dialogbox-footer">
				<button id="dialogbox-footer-button" onclick="Login()">OK</button>
			</div>
		</div>
		<div id="dialogoverlay"></div>
		<div id="dialogbox1">
			<div id="dialogbox-header">Error...</div>
			<div id="dialogbox-body">Password must be contain adleast 8 charecters.</div>
			<div id="dialogbox-footer">
				<button id="dialogbox-footer-button" onclick="Login()">OK</button>
			</div>
		</div>
		<!--<button onclick="Online()">Ok</button>-->
		<div class="loginbox">
			<img src="avatar.png" class="avatar">
			<h1>Friends</h1>
			<form name="myform" action="confirm_details.php" method="post">
				<label><p>Fullname</p><input type="text" name="name" placeholder="Enter the fullname"></label><br>
				<label><p>Job</p><input type="text" name="course" placeholder="Enter the job"></label><br>
				<label><b class="ss">Gender</b>
				<select name="gender">
				  <option value="male">Male</option>
				  <option value="female">Female</option>
				  <option value="other">Other</option>
				</select></label><br>
				<label><b class="ss">Date Of Birth</b><input type="date" name="bday"></label><br>
				<label><p>Email</p><input type="email" name="email" placeholder="Enter the email"></label><br>
				<label><p>Phone Number</p><input type="number" name="number" placeholder="Enter the phone number"></label><br>
				<label><p>Address</p><input type="text" name="address" placeholder="Enter the address"></label><br>
				<input type="submit" name="sub" value="Register">
				<a href="https://universityofkelaniyacal.000webhostapp.com/contact.php" class="forgot">Click to Contact with Saru in Online!</a><br>
			</form>
		</div>
		
</body>
</html>