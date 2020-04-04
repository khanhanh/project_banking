<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("location: login.php");
    exit;
}
?>
 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>History</title>
    <!-- link -->
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrapp.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styless.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" href="css/account3.css">
    <link rel="stylesheet" href="css/history.css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 1000px;
            margin: 0 auto;
            padding-bottom: 30px;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <!-- Top -->
    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="top_bar_container d-flex flex-row align-items-center
										justify-content-start">
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
                            <div class="main_menu_contact">
                                <div class="main_menu_phone"><img src="images/phone-call.svg" class="svg" alt=""><span>+84375344993</span></div>
                                <div class="main_menu_email"><img src="images/envelope.svg" class="svg" alt=""><span>ibank@gmail.com</span></div>
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
    <!-- end top -->
    <!-- Main Menu -->
    <div class="main_menu">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="main_menu_container d-flex flex-row align-items-center
										justify-content-start">
                        <div class="main_menu_content">
                            <ul class="main_menu_list">
                                <li>
                                    <a href="home.php">home</a>
                                </li>
                                <li><a href="personal.php">Personal
																	<svg version="1.1" id="Layer_4"
																		xmlns="http://www.w3.org/2000/svg"
																		xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
																		width="9px" height="5px" viewBox="0 0 9 5"
																		enable-background="new 0 0 9 5" xml:space="preserve">
																		</svg>
																	</a>
                                </li>
                                <li class="hassubs">
                                    <a href="transfer.php">
                                    <?php
                                                    require_once 'config.php';
                                                    // Attempt select query execution
                                                    $sql = "SELECT * FROM users";
                                                    if ($result = mysqli_query($link, $sql)) {
                                                    echo " <a href='transfer.php?id=" . $_SESSION["id"] . "'<span >Transfer</span>";
                                                    } else {
                                                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                    }
                                                ?>
																		<svg version="1.1" id="Layer_5"
																			xmlns="http://www.w3.org/2000/svg"
																			xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
																			width="9px" height="5px" viewBox="0 0 9 5"
																			enable-background="new 0 0 9 5" xml:space="preserve">
																			</svg>
																		</a>
                                </li>
                                <li class="active hassubs">
                                    <a href="history.php">History
																							<svg version="1.1" id="Layer_10"
																								xmlns="http://www.w3.org/2000/svg"
																								xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
																								y="0px"
																								width="9px" height="5px" viewBox="0 0 9 5"
																								enable-background="new 0 0 9 5" xml:space="preserve">
																								</svg>
																							</a>
                                </li>
                                <li><a href="about.html">About us
																												<svg version="1.1" id="Layer_15"
																													xmlns="http://www.w3.org/2000/svg"
																													xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
																													y="0px"
																													width="9px" height="5px" viewBox="0 0 9 5"
																													enable-background="new 0 0 9 5"
																													xml:space="preserve">
																													<g>
																														<polyline class="arrow_d" fill="none"
																															stroke="#FFFFFF" stroke-miterlimit="10"
																															points="0.022,-0.178 4.5,4.331 9.091,-0.275"/>
																														</g>
																													</svg>
																												</a></li>
                                <li><a href="contact.html">Contact
																													<svg version="1.1" id="Layer_16"
																														xmlns="http://www.w3.org/2000/svg"
																														xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
																														y="0px"
																														width="9px" height="5px" viewBox="0 0 9 5"
																														enable-background="new 0 0 9 5"
																														xml:space="preserve">
																														<g>
																															<polyline class="arrow_d" fill="none"
																																stroke="#FFFFFF" stroke-miterlimit="10"
																																points="0.022,-0.178 4.5,4.331 9.091,-0.275"/>
																															</g>
																														</svg>
																													</a></li>
                            </ul>
                        </div>
                        <div class="main_menu_contact ml-auto">
                            <div class="main_menu_search">
                                <div class="main_menu_search_button">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="15px" height="15px">
																														<g>
																															<path class="mag_path"
																																d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5
																																S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z
																																M217.5,382.9
																																C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z"
																																fill="#f4f4f8" />
																															</g>
																														</svg>
                                </div>
                                <div class="main_menu_search_content">
                                    <form action="#">
                                        <input class="search_input" type="search" placeholder="Keyword" required="required">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end menu -->
    <!-- content -->
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header clearfix">
                        <h2 class="texthead" >History</h2>
                    </div>
                    <?php
                    // Include config file
                    require_once 'config.php';
                    // Attempt select query execution
                    $sql = "SELECT * FROM history";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>NumberCard</th>";
                                        echo "<th>Time</th>";
                                        echo "<th>Content</th>";
                                        echo "<th>Amount($)</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['stt'] . "</td>";
                                        echo "<td>" . $row['rand'] . "</td>";
                                        echo "<td>" . $row['time'] . "</td>";
                                        echo "<td>" . $row['content'] . "</td>";
                                        echo "<td>" . $row['x'] . "</td>";

                                    echo "</tr>";
                                }
                                echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->
    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <!-- Footer Column -->
                <div class="col-lg-3
                                                                    footer_col">
                    <div class="footer_about">
                        <div class="logo_container
                                                                            footer_logo">
                            <div class="logo">
                                <a href="#">
                                    <div class="logo_line_1"><span>i</span>bank</div>
                                    <div class="logo_line_2">Financial</div>
                                    <div class="logo_img"><img src="images/logo01.png" alt=""></div>
                                </a>
                            </div>
                        </div>
                        <p class="footer_about_text">Transaction is safe, secure, convenient and convenient.
                        </p>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-3
                                                                    footer_col">
                    <div class="footer_links">
                        <div class="footer_title">Useful Links
                        </div>
                        <ul>
                            <li><a href="home.php">Home</a></li>
                            <li><a href="personal.php">Personal</a></li>
                            <li><a href="transfer.php">Transfer</a></li>
                            <li><a href="history.php">History</a></li>
                            <li><a href="about.html">About
                                                                                    us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-6
                                                                    footer_col">
                    <div class="footer_newsletter">
                        <div class="footer_title">Subscribe to our newsletter
                        </div>
                        <form action="#" class="footer_newsletter_form">
                            <input type="email" class="footer_newsletter_input" placeholder="Your
                                                                                E-mail" required="required">
                            <button class="footer_newsletter_button" type="submit">subscribe</button>
                        </form>
                        <div class="footer_newsletter_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit. Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec.
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i
                                                                                            class="fa
                                                                                            fa-google-plus"
                                                                                            aria-hidden="true"></i></a></li>
                                <li><a href="#"><i
                                                                                            class="fa
                                                                                            fa-pinterest"
                                                                                            aria-hidden="true"></i></a></li>
                                <li><a href="#"><i
                                                                                            class="fa
                                                                                            fa-reddit-alien"
                                                                                            aria-hidden="true"></i></a></li>
                                <li><a href="#"><i
                                                                                            class="fa
                                                                                            fa-twitter"
                                                                                            aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4
                                                                        order-md-1
                                                                        order-2">
                        <div class="copyright_content
                                                                            d-flex
                                                                            flex-row
                                                                            align-items-center
                                                                            justify-content-start">
                            <div class="cr">
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                By IBANK
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8
                                                                    order-md-2
                                                                    order-1">
                    <nav class="footer_nav
                                                                        d-flex
                                                                        flex-row
                                                                        align-items-center
                                                                        justify-content-md-end">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About
                                                                                    us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="news.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        </div>
    </footer>
    <!-- end footer -->
</body>

<script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>
</html>

