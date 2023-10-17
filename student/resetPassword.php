<!DOCTYPE html>
<html>
<head>
	<title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<style type="text/css">
		
		body {
  font-family: Arial;
  color: white;
}

.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  
  left: 0;

  /*background-color: #20374D;*/
}

.right {
  right: 0;
  left: 50;
  /*background-color: #FFB800;*/
}
.HOME{
	margin-top: 600px;
	margin-right: 20px;
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.centered img {
  width: 150px;
  display: absolute;
  border-radius: 10%;
}

.btn{
	width: 100%;
	color: white;
	background-color: #FFB800; 
	}
.back{
	position: absolute;
width: 200px;
height: 30px;
left: 450px;
top: 600px;
}
.bg-image{
	position: absolute;
	width: 100%;
	height: 100vh;
	}
	.form-box{
		background-color: white;
		color: black;
		width: 50%;
		padding: 20px;
		border-radius: 20px 0px 0px 20px ;
	}
	</style>

</head>
<body>
	<img src="image/bg-std login.jpg" class="bg-image">
	<div class="container center">

		<div class="column split left">
		    
		   <img class="img-responsive centered" src="image/resetphoto.png" alt="logo" width="60%" height="auto">
            
		</div>  
	
		<div class="column split right" style="text-align: left;">
			<h2 style="text-align: center;">RESET PASSWORD</h2> 
			<div class="centered form-box">
				<form>
				<label class="label-1"">ENTER OTP</label>
			    <div class="form-group"> 
	                <input type="password" class="form-control"> 
	            </div> 
			       <label>NEW PASSWORD</label> 
	            <div class="form-group"> 
	                <input type="password" id="password" class="form-control"> 
	            </div> 
			       <label>CONFIRM PASSWORD</label>
			       <div class="form-group">
			       <input type="password" id="cpassword"class="form-control"> 
			       	
			       </div>
        	  		<input type="checkbox" 
           onclick="Toggle1()">
    <strong>Show Password</strong>
      
    <script>
        // Change the type of input to password or text
        function Toggle1() {
            var temp = document.getElementById("password");
            var cpass = document.getElementById("cpassword");
            if (temp.type === "password") {
                temp.type = "text";
                cpass.type="text";
            }
            else {
                temp.type = "password";
                cpass.type="password";
            }
        }
    </script>
    <button class="btn" type="button">RESET PASSWORD</button>
</div>  
		<div class="column split right HOME" style="text-align: right;">
			<h4 >BACK TO HOME</h4> 
			</form>
		</div>
		
</div>
<!-- <div><img src="Rectangle 107.png" width="750" height="665">
<div class="left">
	
</div>
<div>
	
</div>
</div> -->s
	<strong>
        <p>Click on the checkbox to show
            or hide password: 
        </p>
    </strong>
      
    <strong>Password</strong>: 
    <input type="password" 
           value="geeksforgeeks" 
           id="typepass">
      
    <input type="checkbox" 
           onclick="Toggle()">
    <strong>Show Password</strong>
      
    <script>
        // Change the type of input to password or text
        function Toggle() {
            var temp = document.getElementById("typepass");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
    </script>
	
</body>
</html>