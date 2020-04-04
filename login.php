<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: home.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: home.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Invest project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/login1.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
    <link rel="stylesheet" type="text/css" href="css/utill.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>

    <div class="super_container">

        <!-- Home -->

        <!-- <div class="home">
            <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/system_2.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_content_inner">
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        <!-- Header -->

        <header class="header">

            <!-- Top Bar -->
            <div class="top_bar">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="top_bar_container d-flex flex-row align-items-center justify-content-start">
                                <div class="logo_container">
                                    <div class="logo">
                                        <a href="#">
                                            <div class="logo_line_1"><span>i</span>bank</div>
                                            <div class="logo_line_2">Financial</div>
                                            <div class="logo_img"><img src="images/logo0.png" alt=""></div>
                                        </a>
                                    </div>
                                </div>
                                <div class="top_bar_content ml-auto">
                                    <div class="main_menu_social">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a>
                                            </li>
                                            <li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="burger">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Menu -->
            <div class="main_menu">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="main_menu_container d-flex flex-row align-items-center justify-content-start">
                                <div class="main_menu_content">
                                    <ul class="main_menu_list">
                                        <!-- Home -->
                                        <li>
                                            <a href="index.php">Home
                                            </a>
                                        </li>
                                        <!-- end Home -->
                                        <!-- Personal -->
                                        <li class="hassubs">
                                            <a href="personall.html">Personal
                                                <svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="9px" height="5px" viewBox="0 0 9 5"
                                                    enable-background="new 0 0 9 5" xml:space="preserve">
                                                </svg>
                                            </a>
                                            
                                        </li>
                                        <!-- end Personal -->
                                        <!-- Account -->
                                        <li class="hassubs">
                                            <a href="login.php" onclick="alert('Please come login')">Transfer
                                                <svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="9px" height="5px" viewBox="0 0 9 5"
                                                    enable-background="new 0 0 9 5" xml:space="preserve">
                                                </svg>
                                            </a>
                                        </li>
                                        <!-- end Account -->
                                        <li class="hassubs">
                                            <a href="login.php" onclick="alert('Please come login')">History
                                                <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="9px" height="5px" viewBox="0 0 9 5"
                                                    enable-background="new 0 0 9 5" xml:space="preserve">
                                                </svg>
                                            </a>
                                        </li>
                                        <li class="hassubs">
                                            <a href="about.html">About us
                                                <svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="9px" height="5px" viewBox="0 0 9 5"
                                                    enable-background="new 0 0 9 5" xml:space="preserve">
                                                </svg>
                                            </a>
                                        </li>
                                        <li><a href="contact.html">contact
                                                <svg version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                    width="9px" height="5px" viewBox="0 0 9 5"
                                                    enable-background="new 0 0 9 5" xml:space="preserve">

                                                </svg>
                                            </a></li>
                                    </ul>
                                </div>
                                <div class="main_menu_contact ml-auto">
                                    <div class="main_menu_phone"><img src="images/phone-call.svg" alt=""><span>+84375
                                            344 993</span></div>
                                    <div class="main_menu_email"><img src="images/envelope.svg"
                                            alt=""><span>ibank@gmail.com</span></div>
                                    <div class="main_menu_search">
                                        <div class="main_menu_search_button">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                                                viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="15px"
                                                height="15px">
                                                <g>
                                                    <path class="mag_path"
                                                        d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"
                                                        fill="#f4f4f8" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="main_menu_search_content">
                                            <form action="#">
                                                <input class="search_input" type="search" placeholder="Keyword"
                                                    required="required">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu -->

            <div class="menu">
                <div class="menu_register_login">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div
                                    class="menu_register_login_content d-flex flex-row align-items-center justify-content-end">
                                    <div class="register"><a href="#">register</a></div>
                                    <div class="login"><a href="#">login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <ul class="menu_list">
                    <li class="menu_item">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="#">home</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="about.html">about us</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="listings.html">services</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="news.html">portfolio</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="contact.html">blog</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu_item">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="contact.html">contact</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
    </div>
    <!-- content -->
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/services_background.jpg"
            width="1200" height="2120" data-speed="0.8"></div>
    <div class="container">
        <form style="padding-top: 230px; padding-left:230px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" >
            <div class="">
                <div class="">
                    <div class="wrap-login100">
                            <span class="login100-form-title p-b-48">
                                <img src="images/logo1.png" alt="">
                            </span>
                            <span class="login100-form-title p-b-26">
                                Welcome
                            </span>
                            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                                <label style="color:black;">Username</label>
                                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                                <span class="help-block"><?php echo $username_err; ?></span>
                            </div>  

                            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                                <label style="color:black;">Password</label>
                                <input type="password" name="password" class="form-control">
                                <span class="help-block"><?php echo $password_err; ?></span>
                            </div>

                            <div class="container-login100-form-btn">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn" type="submit" name="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>

                            <div class="textsignup">
                                <span class="txt1">
                                    Don’t have an account?
                                </span>

                                <a class="txt2" href="register.php">
                                    Sign Up
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </form>
    </div>





    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA">
    </script>
    <script src="js/contact_custom.js"></script>
    <!--===============================================================================================-->
    <script src="js/main.js"></script>


</body>

</html>