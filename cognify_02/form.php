<?php
include "connect.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	    $username = $_POST["username"];
        $email = $_POST["email"];
		$password = $_POST["password"];
		$phone = $_POST["phone"];
        $address = $_POST["address"];

   


	$sql = "INSERT INTO `register`(`Username`,`Email`,`Password`, `Phone`,`Address`) VALUES ('$username', '$email', '$password','$phone','$address')";
    $result = mysqli_query($con, $sql);
		if ($result) 
		{
            echo '<script>alert("Registration SuccessFull !!!")</script>';
 		} 
 		else 
 		{
 	       echo '<script>alert("Registration UnSuccessFull !!!")</script>';
		}
	}
  
?>






<html>      
    <style>
           @import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

    </style>

    <body>

      <div class="login-page">
        <div class="form">
          <div class="login">
            <div class="login-header">
              <p className="h2 text-center white mb-3">Register Here</p>
            </div>
          </div>
          <form class="register" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" name="username" id="username" placeholder="Username" required/>
            <input type="email" name="email" id="email" placeholder="Email" required/>
            <input type="password" name="password" id="password" placeholder="Password" required/>
            <input type="number" name="phone" id="phone" placeholder="Mobile No" required/>
            <input type="text" name="address" id="address" placeholder="Address" required/>
            <button>Register</button>
          </form>
        </div>
      </div>
    </body>
</html>