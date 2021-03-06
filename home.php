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
    <title>I BANK</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Invest project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styless.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

    <div class="super_container">

        <!-- Home -->

        <div class="home">
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
                                        <div class="coins">
                                            <!-- <ul>
                                                <li>BTC $10200</li>
                                                <li>ETH $979</li>
                                                <li>LTC $230</li>
                                            </ul> -->
                                        </div>
                                        <div class="register_login">
                                            <span>Hello <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></span>
                                            <a href="logout.php"><button>Sign Out</button></a>
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
                                            <li class="active hassubs">
                                                <a href="index.php">Home
											</a>
                                            </li>
                                            <!-- end Home -->
                                            <!-- Personal -->
                                            <li class="hassubs">
                                                <a href="personal.php">Personal
												<svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
												</svg>
											</a>
                                            </li>
                                            <!-- end Personal -->
                                            <!-- Account -->
                                            <li class="hassubs">
                                                <a  href="transfer.php" >
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
												<svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
												</svg>
											</a>
                                            </li>
                                            <!-- end Account -->
                                            <li class="hassubs">
                                                <a href="history.php">
                                                <?php
                                                    require_once 'config.php';
                                                    // Attempt select query execution
                                                    $sql = "SELECT * FROM users";
                                                    if ($result = mysqli_query($link, $sql)) {
                                                    echo " <a href='history.php?id=" . $_SESSION["id"] . "'<span >History</span>";
                                                    } else {
                                                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                                    }
                                                ?>
												<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
												</svg>
											</a>
                                            </li>
                                            <li class="hassubs">
                                                <a href="about.html">About us
												<svg version="1.1" id="Layer_10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
												</svg>
											</a>
                                            </li>
                                            <li><a href="contact.html">contact
											<svg version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
												<g>
													<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
												</g>
											</svg>
										</a></li>
                                        </ul>
                                    </div>
                                    <div class="main_menu_contact ml-auto">
                                        <div class="main_menu_phone"><img src="images/phone-call.svg" alt=""><span>+84375 344 993</span></div>
                                        <div class="main_menu_email"><img src="images/envelope.svg" alt=""><span>ibank@gmail.com</span></div>
                                        <div class="main_menu_search">
                                            <div class="main_menu_search_button">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="15px" height="15px">
												<g>
												<path class="mag_path" d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#f4f4f8"/>
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

                <!-- Menu -->

                <div class="menu">
                    <div class="menu_register_login">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="menu_register_login_content d-flex flex-row align-items-center justify-content-end">
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
                                        <a href="home.php">home</a>
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

        <!-- Intro -->

        <div class="intro">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="intro_image text-lg-right text-center"><img src="images/intro.png" alt=""></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="intro_content">
                            <!-- <div class="intro_title_container">
                                <div class="intro_subtitle">take a look at our</div>
                                <h1 class="intro_title">Buy and Sell Bitcoin</h1>
                            </div> -->
                            <div class="intro_text">
                                <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit.Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer
                                    ut ultricies orci, lobo rtis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit. Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui.
                                    Sed ut iaculis elit.</p>
                            </div>
                            <div class="link_button intro_button"><a href="#">read more</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services -->

        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- Testimonials Slider -->

                        <div class="services_slider_container">
                            <div class="owl-carousel owl-theme services_slider">

                                <!-- Services Item -->
                                <div class="owl-item">
                                    <div class="services_item d-flex flex-column align-items-center justify-content-center">
                                        <div class="services_item_bg"></div>
                                        <div class="services_icon"><img class="svg" src="images/services_1.svg" alt=""></div>
                                        <div class="services_title">Exchange Fiat for Crypto</div>
                                        <p class="services_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
                                        <div class="services_link"><a href="#">Read More</a></div>
                                    </div>
                                </div>

                                <!-- Services Item -->
                                <div class="owl-item">
                                    <div class="services_item d-flex flex-column align-items-center justify-content-center">
                                        <div class="services_item_bg"></div>
                                        <div class="services_icon"><img class="svg" src="images/services_2.svg" alt=""></div>
                                        <div class="services_title">Exchange Fiat for Crypto</div>
                                        <p class="services_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
                                        <div class="services_link"><a href="#">Read More</a></div>
                                    </div>
                                </div>

                                <!-- Services Item -->
                                <div class="owl-item">
                                    <div class="services_item d-flex flex-column align-items-center justify-content-center">
                                        <div class="services_item_bg"></div>
                                        <div class="services_icon"><img class="svg" src="images/services_3.svg" alt=""></div>
                                        <div class="services_title">Exchange Fiat for Crypto</div>
                                        <p class="services_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
                                        <div class="services_link"><a href="#">Read More</a></div>
                                    </div>
                                </div>

                                <!-- Services Item -->
                                <div class="owl-item">
                                    <div class="services_item d-flex flex-column align-items-center justify-content-center">
                                        <div class="services_item_bg"></div>
                                        <div class="services_icon"><img class="svg" src="images/services_1.svg" alt=""></div>
                                        <div class="services_title">Exchange Fiat for Crypto</div>
                                        <p class="services_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
                                        <div class="services_link"><a href="#">Read More</a></div>
                                    </div>
                                </div>

                                <!-- Services Item -->
                                <div class="owl-item">
                                    <div class="services_item d-flex flex-column align-items-center justify-content-center">
                                        <div class="services_item_bg"></div>
                                        <div class="services_icon"><img class="svg" src="images/services_2.svg" alt=""></div>
                                        <div class="services_title">Exchange Fiat for Crypto</div>
                                        <p class="services_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
                                        <div class="services_link"><a href="#">Read More</a></div>
                                    </div>
                                </div>

                                <!-- Services Item -->
                                <div class="owl-item">
                                    <div class="services_item d-flex flex-column align-items-center justify-content-center">
                                        <div class="services_item_bg"></div>
                                        <div class="services_icon"><img class="svg" src="images/services_3.svg" alt=""></div>
                                        <div class="services_title">Exchange Fiat for Crypto</div>
                                        <p class="services_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta.</p>
                                        <div class="services_link"><a href="#">Read More</a></div>
                                    </div>
                                </div>

                            </div>

                            <div class="services_nav services_prev d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_l.png" alt=""></div>
                            <div class="services_nav services_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Converter -->

        <div class="converter">
            <div class="converter_background parallax-window" data-parallax="scroll" data-image-src="images/converter.jpg" data-speed="0.8"></div>

            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="converter_content">
                            <div class="converter_title_container">
                                <div class="converter_subtitle">take a look at our</div>
                                <h1 class="converter_title">Bitcoin To Fiat Currency Calculator</h1>
                            </div>
                            <div class="converter_text">
                                <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit.Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer
                                    ut ultricies orci, lobo rtis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit. Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui.
                                    Sed ut iaculis elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="converter_container">
                            <form action="#">
                                <input type="text" value="1" class="converter_input_value converter_input">
                                <select class="dropdown_converter converter_input">
								<option>btc</option>
								<option>ltc</option>
								<option>eth</option>
							</select>
                                <div class="eq">=</div>
                                <input type="text" value="9400,45" readonly class="converter_input converter_result">
                                <select class="dropdown_converter converter_input">
								<option>eur</option>
								<option>usd</option>
								<option>gbp</option>
							</select>
                            </form>
                            <form action="#">
                                <input type="text" value="10400" class="converter_input_value converter_input">
                                <select class="dropdown_converter converter_input">
								<option>usd</option>
								<option>eur</option>
								<option>gbp</option>
							</select>
                                <div class="eq">=</div>
                                <input type="text" value="1.02" readonly class="converter_input converter_result">
                                <select class="dropdown_converter converter_input">
								<option>btc</option>
								<option>ltc</option>
								<option>eth</option>
							</select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Info -->

        <div class="info">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <div class="section_subtitle">take a look at our</div>
                            <div class="section_title">A simple trading system</div>
                        </div>
                    </div>
                </div>
                <div class="row info_row">

                    <!-- Info Item -->
                    <div class="col-lg-4 info_col">
                        <div class="info_item text-center">
                            <div class="info_image"><img src="images/info_1.png" alt=""></div>
                            <div class="info_title">Create your wallet</div>
                            <div class="info_text">
                                <p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Info Item -->
                    <div class="col-lg-4 info_col">
                        <div class="info_item text-center">
                            <div class="info_image"><img src="images/info_2.png" alt=""></div>
                            <div class="info_title">Make payments</div>
                            <div class="info_text">
                                <p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Info Item -->
                    <div class="col-lg-4 info_col">
                        <div class="info_item text-center">
                            <div class="info_image"><img src="images/info_3.png" alt=""></div>
                            <div class="info_title">Buy or sell orders</div>
                            <div class="info_text">
                                <p>Sed ut iaculis elit, quis varius mauris. Integer ut ultric ies orci, lobortis egesta s sem. Duis non volutpat arcu. Sed ut iaculis elit, quis varius mauris.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- News -->

        <div class="news">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section_title_container text-center">
                            <div class="section_subtitle">take a look at our</div>
                            <div class="section_title">Latest News in Crypto</div>
                        </div>
                    </div>
                </div>
                <div class="row news_row">

                    <!-- News Item -->
                    <div class="col-lg-4 news_col">
                        <div class="news_item">
                            <div class="news_image">
                                <img src="images/news_1.jpg" alt="https://unsplash.com/@silverhousehd">
                            </div>
                            <div class="news_content">
                                <div class="news_title">New Regulations on the Crypto Market</div>
                                <div class="news_text">
                                    <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci.</p>
                                </div>
                            </div>
                            <div class="news_button"><a href="news.html">read more</a></div>
                        </div>
                    </div>

                    <!-- News Item -->
                    <div class="col-lg-4 news_col">
                        <div class="news_item">
                            <div class="news_image">
                                <img src="images/news_2.jpg" alt="https://unsplash.com/@silverhousehd">
                            </div>
                            <div class="news_content">
                                <div class="news_title">Good News from the Crypto World</div>
                                <div class="news_text">
                                    <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci.</p>
                                </div>
                            </div>
                            <div class="news_button"><a href="news.html">read more</a></div>
                        </div>
                    </div>

                    <!-- News Item -->
                    <div class="col-lg-4 news_col">
                        <div class="news_item">
                            <div class="news_image">
                                <img src="images/news_3.jpg" alt="https://unsplash.com/@silverhousehd">
                            </div>
                            <div class="news_content">
                                <div class="news_title">Bitcoin price goes to the Moon with new laws</div>
                                <div class="news_text">
                                    <p>Morbi ut dapibus dui. Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci.</p>
                                </div>
                            </div>
                            <div class="news_button"><a href="news.html">read more</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Footer -->

        <footer class="footer">
            <div class="container">
                <div class="row">

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_col">
                        <div class="footer_about">
                            <div class="logo_container footer_logo">
                                <div class="logo">
                                    <a href="#">
                                        <div class="logo_line_1"><span>i</span>bank</div>
                                        <div class="logo_line_2">Financial</div>
                                        <div class="logo_img"><img src="images/logo01.png" alt=""></div>
                                    </a>
                                </div>
                            </div>
                            <p class="footer_about_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit. Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec.</p>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-3 footer_col">
                        <div class="footer_links">
                            <div class="footer_title">Useful Links</div>
                            <ul>
                                <li><a href="home.php">Home</a></li>
                                <li><a href="personal.php">Personal</a></li>
                                <li><a href="transfer.php">Transfer</a></li>
                                <li><a href="history.php">History</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Footer Column -->
                    <div class="col-lg-6 footer_col">
                        <div class="footer_newsletter">
                            <div class="footer_title">Subscribe to our newsletter</div>
                            <form action="#" class="footer_newsletter_form">
                                <input type="email" class="footer_newsletter_input" placeholder="Your E-mail" required="required">
                                <button class="footer_newsletter_button" type="submit">subscribe</button>
                            </form>
                            <div class="footer_newsletter_text">Sed ut iaculis elit, quis varius mauris. Integer ut ultricies orci, lobortis egestas sem. Morbi ut dapibus dui. Sed ut iaculis elit. Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec.</div>
                            <div class="footer_social">
                                <ul>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-reddit-alien" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 order-md-1 order-2">
                            <div class="copyright_content d-flex flex-row align-items-center justify-content-start">
                                <div class="cr">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());
                                    </script>By IBANK
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 order-md-2 order-1">
                        <nav class="footer_nav d-flex flex-row align-items-center justify-content-md-end">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about.html">About us</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="news.html">Blog</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
    </div>
    </footer>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap4/popper.js"></script>
    <script src="styles/bootstrap4/bootstrap.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
