<?php
$Email = $password = "";
$EmailErr = $passwordErr = $EmailErrXPasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"]) && empty($_POST["password"])) {
        $EmailErrXPasswordErr = "Email & Password are required";
    } else {
        if (empty($_POST["email"])) {
            $EmailErr = "Email is required";
        } else {
            $Email = $_POST["email"];
        }
        
        if (empty($_POST["password"])) {
            $passwordErr = "Password is required";
        } else {
            $password = $_POST["password"];
        }
    }

    if (empty($EmailErrXPasswordErr) && empty($EmailErr) && empty($passwordErr)) {
        include("Connections.php");
        $check_email = mysqli_query($Connections, "SELECT * FROM tbl_login WHERE email = '$Email'");
        $check_email_row = mysqli_num_rows($check_email);

        if ($check_email_row > 0) {
            while ($row = mysqli_fetch_assoc($check_email)) {
                $db_password = $row["password"];
                $db_Account_type = $row["Account_type"];

                if ($db_password == $password) {
                    session_start();
                    $_SESSION['email'] = $Email;
                    $_SESSION['Account_type'] = $db_Account_type;
                    
                    if ($db_Account_type == "1") {
                        header("Location:admin.php");
                        exit();
                    } else {
                        header("Location:user.php");
                        exit();
                    }
                } else {
                    $passwordErr = "Password is incorrect";
                }
            }
        } else {
            $EmailErr = "Email is not registered";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Form in HTML and CSS | Codehal</title>
     <link href='https'://unpkg.com/boxicons@2.1.4/css/ boxicons.min.css' rel='stylesheet'>
</head>

<style>
    @import url("https://fonts.googleapis.com/css2? family=Poppins:wght@300;400;500;600;700;800;900& display=swap");

* {
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: "Poppins", sans-serif;

}

body {
display: flex;
justify-content: center;
align-items: center;
min-height: 100vh;
background: url(img.jpg) no-repeat;
  background-size: cover;
  background-position: center;

}

.wrapper { 
  width: 420px; 
  background: transparent; 
  border: 2px solid rgba(255, 255, 255, .2);
  backdrop-filter: blur(20px);
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  
  color: #fff;
  border-radius: 10px;
  padding: 30px 40px;
}

.wrapper h1 {
  font-size: 36px;
  text-align: center;
}

.wrapper .input-box {
  position: relative;
  width: 100%;
  height: 50px;
  background: transparent;
  margin: 30px 0;
}

.input-box input {

  width: 100%;
  height: 100%;
  background: transparent;
  border: none;
  outline: none;
  border: 2px solid rgba(255, 255, 255, .2);
  border-radius: 40px;
  font-size: 16px;
  color: #fff;
  padding: 20px 45px 20px 20px; 
}

.input-box input::placeholder {
   color: #fff;
}

input-box i {
   position: absolute; 
   right: 20px; 
   top: 50%;
   transform: translateY(-50%);
   font-size: 20px;
}

.wrapper .remember-forgot {
  display: flex;
  justify-content: space-between;
  font-size: 14.5px;
  margin: -15px 0 15px;
}
 
.remember-forgot label input {
  accent-color: #fff;
  margin-right: 3px;
}

.remember-forgot a {
  color: #fff;
  text-decoration: none;
}

.remember-forgot a:hover {
  text-decoration: underline;
}

.wrapper .btn {
  width:100%;
  height:45px;
  background:#fff;
  border: none;
  outline: none;
  border-radius: 40px; 
  box-shadow: 0 0 10px rgba(0, 0, 0, .1);
  cursor: pointer;
  font-size: 16px;
  color: #333;
  font-weight: 600;
}

.wrapper .register-link {
  font-size: 14.5px;
  text-align: center;
  margin: 20px 0 15px;
}

.register-link p a {
  color: #fff;
  text-decoration: none;
  font-weight: 600;
}

.register-link p a:hover {
  text-decoration: underline;
}

.errors{
    margin: 1.5cap;
    text-align: center;
    color: #fa2020;
  }
</style>

<body>

     <div class="wrapper">
     <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
          <h1>Login</h1>    
          <div class="input-box">
          <input id="email" type="text" placeholder="Username" name="email" value="<?php echo $Email; ?>">
          <i class='bx bxs-user'></i>       
         </div>
          <div class="input-box">
          <input id="password" type="password" placeholder="Password" name="password" value="<?php echo $password; ?>"> 
          <i class='bx bxs-lock-alt'></i>    
         </div>
          
          <div class="remember-forgot">
            <label><input type="checkbox"> Remember me</label>
            <a href="#">Forgot Password</a>
          </div>
          
          <button type="submit" class="btn">Login</button>

          <div class="errors">
            <span><?php echo $EmailErr; ?></span>
            <span><?php echo $passwordErr; ?></span>
            <span><?php echo $EmailErrXPasswordErr; ?></span>
            </div>
          
          <div class="register-link">
            <p>Don't have an account? <a href="#">Register</a></p>
          </div>
          
</body>

</html>