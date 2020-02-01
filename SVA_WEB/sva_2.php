<!DOCTYPE html>
<html lang="en">

    <head>
                <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <title>SVA</title>

        <!--    Google Fonts-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

        <!--Fontawesom-->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!--Animated CSS-->
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Bootstrap Carousel-->
        <link type="text/css" rel="stylesheet" href="css/carousel.css" />

        <link rel="stylesheet" href="css/isotope/style.css">

        <!--Main Stylesheet-->
        <link href="css/style.css" rel="stylesheet">
        <!--Responsive Framework-->
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->



        <style>
            .logo_img{
                max-width: 100%;
                /*height: auto;*/
                min-width: 50px;
                min-height: 45px;
                max-height: auto;
            }
            .img_slider{
                width: 100%;
                /*                min-height: 100px;
                                max-height: 500px;*/
            }



        </style>
        <!--<script src="http://code.jquery.com/jquery-latest.min.js"></script>-->
        <script src="js/jquery-latest.min.js"></script>
        <script type="text/javascript" >
            $(document).on('click', 'a[href^="#"]', function (event) {
                event.preventDefault();

                $('html, body').animate({
                    scrollTop: $($.attr(this, 'href')).offset().top
                }, 500);
            });
        </script>


    </head>

    <body data-spy="scroll" data-target="#header">

        <!--Start Hedaer Section-->
        <section id="header">
            <div class="header-area">
                <div class="top_header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                                <div class="address">
                                    <i class="fa fa-home floatleft"></i>
                                    <p>Womens sector , Thirumudivakkam, Chennai - 6000132</p>
                                </div>
                            </div>
                            <!--End of col-md-4-->
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                                <div class="address">
                                    <i class="fa fa-phone floatleft"></i>
                                    <p>+91 9840943077 &nbsp;&nbsp; 9940453368</p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zero_mp">
                                <div class="phone">
                                    <i class="fa fa-envelope floatleft"></i>
                                    <p>srivishnu.biobags@gmail.com</p>
                                </div>
                            </div>

                            <!--End of col-md-4-->
                            <!--                            <div class="col-md-4">
                                                            <div class="social_icon text-right">
                                                                <a href=""><i class="fa fa-facebook"></i></a>
                                                                <a href=""><i class="fa fa-twitter"></i></a>
                                                                <a href=""><i class="fa fa-google-plus"></i></a>
                                                                <a href=""><i class="fa fa-youtube"></i></a>
                                                            </div>
                                                        </div>-->
                            <!--End of col-md-4-->
                        </div>
                        <!--End of row-->
                    </div>
                    <!--End of container-->
                </div>

                <!--End of top header-->
                <div class="header_menu text-center" data-spy="affix" data-offset-top="50" id="nav">
                    <div class="container">
                        <nav class="navbar navbar-default zero_mp ">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <a class="navbar-brand custom_navbar-brand" href="#"><img class="logo_img" src="img/i green logo new i Green.png" alt="" style="width: auto;height: 100%"></a>

                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                &nbsp;
                                <a class="navbar-brand custom_navbar-brand" href="#"><img class="logo_img" src="img/new igreen banner.png" alt="" style="width: auto;height: 100%"></a>
                                <a class="navbar-brand custom_navbar-brand" href="#"><img class="logo_img" src="img/svalogo3.png" alt="" style="width: auto;height: 80%"></a>

                                <!--<a class="navbar-brand custom_navbar-brand" href="#"></a>-->
                                <!--<a class="navbar-brand custom_navbar-brand" href="#"></a>-->
                            </div>
                            <!--End of navbar-header-->

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse zero_mp" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right main_menu">
                                    <li class="active"><a href="#header">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="#welcome">about</a></li>
                                    <li><a href="#why">why compostable</a></li>

                                    <li><a href="#portfolio">products</a></li>
                                    <!--                                    <li><a href="#event">event</a></li>
                                                                        <li><a href="#testimonial">testimonial</a></li>-->
                                    <!--<li><a href="#blog">blog</a></li>-->
                                    <li><a href="#contact">contact us</a></li>
                                </ul>
                            </div>
                            <!-- /.navbar-collapse -->
                        </nav>
                        <!--End of nav-->
                    </div>
                    <!--End of container-->
                </div>
                <!--End of header menu-->
            </div>
            <!--end of header area-->
        </section>
        <!--End of Hedaer Section-->



        <!--Start of slider section-->
        <section id="slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel" data-interval="3000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <div class="slider_overlay">
                            <img class="img_slider" src="img/solution.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <!--                                    <h3>Protect</h3>-->
                                    <i class="fa fa-exclamation-triangle fa-4x" aria-hidden="true"></i>
                                    <h2>Stop Pollution !</h2>
                                    <p>We have a solution. </p>
                                    <!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                    <!--<a href="" class="custom_btn">Read  More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider_overlay">
                            <img class="img_slider" src="img/bioproducts.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <!--                                    <h3><i class="fa fa-recycle" aria-hidden="true"></i></i></h3>-->
                                    <i class="fa fa-recycle fa-4x" aria-hidden="true"></i>
                                    <h2>OUR PRODUCTS USE 100% BIO COMPOSTABLE MATERIAL</h2><!--
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                    <!--<a href="" class="custom_btn">Read  More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider_overlay">
                            <img class="img_slider" src="img/ecofriendly.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <!--                                    <h3>Protect</h3>-->
                                    <i class="fa fa-refresh fa-4x" aria-hidden="true"></i>
                                    <h2>100% ECO FRIENDLY PRODUCTS</h2>
                                    <!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                    <!--<a href="" class="custom_btn">Read  More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider_overlay">
                            <img class="img_slider" src="img/gogreen.jpg" alt="...">
                            <div class="carousel-caption">
                                <div class="slider_text">
                                    <!--                                    <h3>Protect</h3>-->
                                    <i class="fa fa-leaf fa-4x" aria-hidden="true"></i>
                                    <h2>GO GREEN,</h2>
                                    <p>No Plastic , Every thing is fantastic</p>
                                    <!--                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                                    <!--<a href="" class="custom_btn">Read  More</a>-->
                                </div>
                            </div>
                        </div>
                    </div>


                    <!--End of item-->
                </div>
                <!--End of Carousel Inner-->
            </div>
        </section>
        <!--end of slider section-->



        <!--Start of welcome section-->
        <section id="welcome">
            <div class="container carousel-fade" id="welcome" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="wel_header">
                            <h2>welcome to <img src="img/eye3.png" width="40px" height="20px"> Green</h2>
                            <p>Our I Green  Organization Established in the year of 2017 .It is  trading company in the business of supplying Bio Compostable bags.  We are supplying all king of Compostable Bags </p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
        </section>


        <section id="why">
            <div class="container carousel-fade" id="why" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="why_header">
                            <h2>Why <img src="img/whycompostable.png" width="40px" height="20px"> Compostable</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="why_icon">
                                        <i class="fa fa-leaf"></i>
                                    </div>
                                    <h4>eco friendly</h4>
                                    <p>Unlike conventional plastics made from petroleum , Green Bioblend resin originate from renewable plant resources, which can serve as alternative product to most petroleum based plastics, to reduce human being’s dependence on oil resources.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->

                    <div class="col-md-4">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="why_icon">
                                        <i class="fa fa-tint"></i>
                                    </div>
                                    <h4>polution free</h4>
                                    <p>Plastics that act as pollutants are categorized into micro-, meso-, or macro debris, based on size.Plastics are inexpensive and durable, and as a result levels of plastic production by humans are high.Chemical structure of most plastics renders them resistant to many natural processes of degradation and as a result they are slow to degrade. Together, these two factors have led to a high prominence of plastic pollution in the environment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                    <div class="col-md-4">
                        <div class="item">
                            <div class="single_item">
                                <div class="item_list">
                                    <div class="why_icon">
                                        <i class="fa fa-cog"></i>
                                    </div>
                                    <h4>Save Earth</h4>
                                    <p>Plastic pollution is any plastic that ends up in the environment – from bottles and bags to less obvious sources like teabags and clothes.
                                        In the past 100 years humans have produced a lot of plastic. It's cheap, strong, light and versatile. So it's not surprising we're using tonnes of the stuff. All of it eventually ends up in the ground, in the sea and even in the air.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-4-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--end of welcome section-->



        <!--Start of volunteer-->
        <!--        <section id="volunteer">
                    <div class="container">
                        <div class="row vol_area">
                            <div class="col-md-8">
                                <div class="volunteer_content">
                                    <h3>Become a <span>Volunteer</span></h3>
                                    <p>Join Our Team And Help the world. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur.</p>
                                </div>
                            </div>
                            End of col-md-8
                            <div class="col-md-3 col-md-offset-1">
                                <div class="join_us">
                                    <a href="" class="vol_cust_btn">join us</a>
                                </div>
                            </div>
                            End of col-md-3
                        </div>
                        End of row and vol_area
                    </div>
                    End of container
                </section>-->
        <!--end of volunteer-->



        <!--Start of portfolio-->
        <section id="portfolio" class="text-center " >
            <div class="col-md-12">
                <div class="portfolio_title">
                    <h2>PRODUCTS</h2>
                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>-->
                </div>
            </div>
            <!--End of col-md-2-->
            <div class="colum">
                <div class="container">
                    <div class="row">
                        <form action="/">
                            <ul id="portfolio_menu" class="menu portfolio_custom_menu">
                                <li>
                                    <button data-filter="*" class="my_btn btn_active">Show All</button>
                                </li>
                                <li>
                                    <button data-filter=".red" class="my_btn">W-Carry Bags</button>
                                </li>
                                <li>
                                    <button data-filter=".blue" class="my_btn">Sambar Bags</button>
                                </li>
                                <li>
                                    <button data-filter=".green" class="my_btn">D-Cut Bags</button>
                                </li>
                                <li>
                                    <button data-filter=".yellow" class="my_btn">Grocery Bags</button>
                                </li>
                                <li>
                                    <button data-filter=".black" class="my_btn">Garments Bags</button>
                                </li>
                                <li>
                                    <button data-filter=".white" class="my_btn">Garbage Bags</button>
                                </li>
                            </ul>
                            <!--End of portfolio_menu-->
                        </form>
                        <!--End of Form-->
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="notes">

                                <div class="note blue">
                                    <div class="img_overlay">
                                        <p>SAMBAR BAG</p>
                                        <p>4 X 6</p>
                                    </div>
                                    <img src="img/sambar_bag.jpg" alt="">
                                </div>
                                <div class="note blue">
                                    <div class="img_overlay">
                                        <p>SAMBAR BAG</p>
                                        <p>5 X 7</p>
                                    </div>
                                    <img src="img/sambar_bag.jpg" alt="">

                                </div>



                                <div class="note red">
                                    <div class="img_overlay">
                                        <p>W - CARRY BAG</p>
                                        <p>10 X 14</p>
                                    </div>
                                    <img src="img/w_medium_cover.jpeg" alt="">
                                </div>
                                <div class="note red">
                                    <div class="img_overlay">
                                        <p>W - CARRY BAG</p>
                                        <p>13 X 16</p>
                                    </div>
                                    <img src="img/w_medium_cover.jpeg" alt="">
                                </div>
                                <div class="note red">
                                    <div class="img_overlay">
                                        <p>W - CARRY BAG</p>
                                        <p>16 X 20</p>
                                    </div>
                                    <img src="img/w_medium_cover.jpeg" alt="">
                                </div>


                                <div class="note green">
                                    <div class="img_overlay">
                                        <p>D - CUT BAG</p>
                                        <p>10 X 14</p>
                                    </div>
                                    <img src="img/d_cut_bag.jpg" alt="">
                                </div>
                                <div class="note green">
                                    <div class="img_overlay">
                                        <p>D - CUT BAG</p>
                                        <p>13 X 16</p>
                                    </div>
                                    <img src="img/d_cut_bag.jpg" alt="">
                                </div>
                                <div class="note green">
                                    <div class="img_overlay">
                                        <p>D - CUT BAG</p>
                                        <p>16 X 20</p>
                                    </div>
                                    <img src="img/d_cut_bag.jpg" alt="">
                                </div>

                                <div class="note yellow">
                                    <div class="img_overlay">
                                        <p>PLAIN COVER</p>
                                        <p>1-KG</p>
                                    </div>
                                    <img src="img/plaincover.png" alt="">
                                </div>
                                <div class="note yellow">
                                    <div class="img_overlay">
                                        <p>PLAIN COVER</p>
                                        <p>3-KG</p>
                                    </div>
                                    <img src="img/plaincover.png" alt="">
                                </div>
                                <div class="note yellow">
                                    <div class="img_overlay">
                                        <p>PLAIN COVER</p>
                                        <p>5-KG</p>
                                    </div>
                                    <img src="img/plaincover.png" alt="">
                                </div>

                                <div class="note black">
                                    <div class="img_overlay">
                                        <p>CUSTOM</p>
                                    </div>
                                    <img src="img/garments.jpg" alt="">
                                </div>

                                <div class="note white">
                                    <div class="img_overlay">
                                        <p>19 X 21</p>
                                    </div>
                                    <img src="img/garbage_bag.png" alt="">
                                </div>
                                <div class="note white">
                                    <div class="img_overlay">
                                        <p>30 X 40</p>
                                    </div>
                                    <img src="img/garbage_bag.png" alt="">
                                </div>
                            </div>
                            <!--End of notes-->
                        </div>
                        <!--End of col-lg-12-->
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
            <!--End of colum-->
        </section>
        <!--end of portfolio-->



        <!--Start of counter-->
        <section id="counter">
            <div class="counter_img_overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="counter_header">
                                <h2>OUR ACHIVEMENT</h2>
                                <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                            </div>
                        </div>
                        <!--End of col-md-12-->
                    </div>
                    <!--End of row-->
                    <div class="row">
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <img src="img/supplier_png.png" alt="">
                                    <div class="counter_text">
                                        <span class="counter">6</span>
                                        <p>suppliers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <img src="img/our products png.png" alt="">
                                    <div class="counter_text">
                                        <span class="counter">21</span>
                                        <p>products</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <img src="img/customer png.png" alt="">
                                    <div class="counter_text">
                                        <span class="counter">87</span>
                                        <p>customers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="counter_item text-center">
                                <div class="sigle_counter_item">
                                    <img src="img/emp.png" alt="" style="color: green">
                                    <div class="counter_text">
                                        <span class="counter">31</span>
                                        <p>employees</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of row-->
                </div>
                <!--End of container-->
            </div>
        </section>
        <!--end of counter-->



        <!--start of event-->
        <!--        <section id="event">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="event_header text-center">
                                    <h2>latest event</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                            </div>
                        </div>
                        End of row
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6 zero_mp">
                                        <div class="event_item">
                                            <div class="event_img">
                                                <img src="img/tree_cut_1.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 zero_mp">
                                        <div class="event_item">
                                            <div class="event_text text-center">
                                                <a href=""><h4>One Tree Thousand Hope</h4></a>
                                                <h6>15-16 May in Dhaka</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adip scing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <a href="" class="event_btn">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                End of row
                                <div class="row">
                                    <div class="col-md-6 zero_mp">
                                        <div class="event_item">
                                            <div class="event_text text-center">
                                                <a href=""><h4>One Tree Thousand Hope</h4></a>
                                                <h6>15-16 May in Dhaka</h6>
                                                <p>Lorem ipsum dolor sit amet, consectetur adip scing elit. Lorem ipsum dolor sit amet,consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                <a href="" class="event_btn">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 zero_mp">
                                        <div class="event_item">
                                            <div class="event_img">
                                                <img src="img/tree_cut_2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                End of row
                            </div>
                            End of col-md-8
                            <div class="col-md-4">
                                <div class="event_news">
                                    <div class="event_single_item fix">
                                        <div class="event_news_img floatleft">
                                            <img src="img/tree_cut_3.jpg" alt="">
                                        </div>
                                        <div class="event_news_text">
                                            <a href="#"><h4>Let’s plant 200 tree each...</h4></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="event_news">
                                    <div class="event_single_item fix">
                                        <div class="event_news_img floatleft">
                                            <img src="img/tree_cut_4.jpg" alt="">
                                        </div>
                                        <div class="event_news_text">
                                            <a href="#"><h4>Keep your house envirome..</h4></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="event_news">
                                    <div class="event_single_item fix">
                                        <div class="event_news_img floatleft">
                                            <img src="img/tree_cut_3.jpg" alt="">
                                        </div>
                                        <div class="event_news_text">
                                            <a href="#"><h4>Urgent Clothe Needed Needed</h4></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="event_news">
                                    <div class="event_single_item fix">
                                        <div class="event_news_img floatleft">
                                            <img src="img/tree_cut_4.jpg" alt="">
                                        </div>
                                        <div class="event_news_text">
                                            <a href="#"><h4>One Tree Thousand Hope</h4></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="event_news">
                                    <div class="event_single_item fix">
                                        <div class="event_news_img floatleft">
                                            <img src="img/tree_cut_3.jpg" alt="">
                                        </div>
                                        <div class="event_news_text">
                                            <a href="#"><h4>One Tree Thousand Hope</h4></a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, veniam.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            End of col-md-4
                        </div>
                        End of row
                    </div>
                    End of container
                </section>-->
        <!--end of event-->



        <!--Start of testimonial-->
        <!--        <section id="testimonial">
                    <div class="testimonial_overlay">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="testimonial_header text-center">
                                        <h2>testimonials</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            End of row
                            <section id="carousel">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                                                 Carousel indicators 
                                                <ol class="carousel-indicators">
                                                    <li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
                                                </ol>
                                                 Carousel items 
                                                <div class="carousel-inner">
                                                    <div class="active item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="profile-circle">
                                                                    <img src="img/tree_cut_3.jpg" alt="">
                                                                </div>
                                                                <div class="testimonial_content">
                                                                    <i class="fa fa-quote-left"></i>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                                </div>
                                                                <div class="testimonial_author">
                                                                    <h5>Sadequr Rahman Sojib</h5>
                                                                    <p>CEO, Fourder</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="profile-circle">
                                                                    <img src="img/tree_cut_3.jpg" alt="">
                                                                </div>
                                                                <div class="testimonial_content">
                                                                    <i class="fa fa-quote-left"></i>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                                </div>
                                                                <div class="testimonial_author">
                                                                    <h5>Sadequr Rahman Sojib</h5>
                                                                    <p>CEO, Fourder</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    End of item with active
                                                    <div class="item">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="profile-circle">
                                                                    <img src="img/tree_cut_3.jpg" alt="">
                                                                </div>
                                                                <div class="testimonial_content">
                                                                    <i class="fa fa-quote-left"></i>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                                </div>
                                                                <div class="testimonial_author">
                                                                    <h5>Sadequr Rahman Sojib</h5>
                                                                    <p>CEO, Fourder</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="profile-circle">
                                                                    <img src="img/tree_cut_3.jpg" alt="">
                                                                </div>
                                                                <div class="testimonial_content">
                                                                    <i class="fa fa-quote-left"></i>
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                                                                </div>
                                                                <div class="testimonial_author">
                                                                    <h5>Sadequr Rahman Sojib</h5>
                                                                    <p>CEO, Fourder</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    ENd of item
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    End of row
                                </div>
                                End of container
                            </section>
                            End of carousel
                        </div>
                    </div>
                    End of container
                </section>-->
        <!--end of testimonial-->



        <!--Start of blog-->
        <!--        <section id="blog">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="latest_blog text-center">
                                    <h2>latest blog</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo cum libero vitae quos eaque commodi.</p>
                                </div>
                            </div>
                        </div>
                        End of row
                        <div class="row">
                            <div class="col-md-4">
                                <div class="blog_news">
                                    <div class="single_blog_item">
                                        <div class="blog_img">
                                            <img src="img/climate_effect.jpg" alt="">
                                        </div>
                                        <div class="blog_content">
                                            <a href=""><h3>Climate change is affecting bird migration</h3></a>
                                            <div class="expert">
                                                <div class="left-side text-left">
                                                    <p class="left_side">
                                                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                        <span class="time">Aug 19, 2016</span>
                                                        <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                                    </p>
                                                    <p class="right_side text-right">
                                                        <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                                            <span class="count">0</span></a>
                                                    </p>
                                                </div>
                                            </div>
        
                                            <p class="blog_news_content">Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit. </p>
                                            <a href="" class="blog_link">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            End of col-md-4
                            <div class="col-md-4">
                                <div class="blog_news">
                                    <div class="single_blog_item">
                                        <div class="blog_img">
                                            <img src="img/air_pollutuon.jpg" alt="">
                                        </div>
                                        <div class="blog_content">
                                            <a href=""><h3>How to avoid indoor air pollution?</h3></a>
                                            <div class="expert">
                                                <div class="left-side text-left">
                                                    <p class="left_side">
                                                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                        <span class="time">Aug 19, 2016</span>
                                                        <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                                    </p>
                                                    <p class="right_side text-right">
                                                        <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                                            <span class="count">0</span></a>
                                                    </p>
                                                </div>
                                            </div>
        
                                            <p class="blog_news_content">Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit. </p>
                                            <a href="" class="blog_link">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            End of col-md-4
                            <div class="col-md-4">
                                <div class="blog_news">
                                    <div class="single_blog_item">
                                        <div class="blog_img">
                                            <img src="img/threat_bear.jpg" alt="">
                                        </div>
                                        <div class="blog_content">
                                            <a href=""><h3>Threat to Yellowstone’s grizzly bears.</h3></a>
                                            <div class="expert">
                                                <div class="left-side text-left">
                                                    <p class="left_side">
                                                        <span class="clock"><i class="fa fa-clock-o"></i></span>
                                                        <span class="time">Aug 19, 2016</span>
                                                        <a href=""><span class="admin"><i class="fa fa-user"></i> Admin</span></a>
                                                    </p>
                                                    <p class="right_side text-right">
                                                        <a href=""><span class="right_msg text-right"><i class="fa fa-comments-o"></i></span>
                                                            <span class="count">0</span></a>
                                                    </p>
                                                </div>
                                            </div>
        
                                            <p class="blog_news_content">Lorem ipsum dolor sit amet, consectetur adipscing elit. Lorem ipsum dolor sit amet, conse ctetur adipiscing elit. consectetur Lorem ipsum dolor sitamet, conse ctetur adipiscing elit. </p>
                                            <a href="" class="blog_link">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            End of col-md-4
                        </div>
                        End of row
                    </div>
                    End of container
                </section>-->
        <!-- end of blog-->



        <!--Start of Purches-->
        <!--        <section id="purches">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2 class="purches_title">Buy our wordpress theme</h2>
                            </div>
                            <div class="col-md-2 col-md-offset-4">
                                <a href="" class="purches_btn">purches</a>
                            </div>
                        </div>
                        End of row
                    </div>
                    End of container
                </section>-->
        <!--End of purches-->



        <!--Start of Market-->
        <!--        <section id="market">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="market_area text-center">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="market_logo">
                                                <a href=""><img src="img/audiojungle.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="market_logo">
                                                <a href=""><img src="img/codecanyon.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="market_logo">
                                                <a href=""><img src="img/graphicriver.png" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="market_logo">
                                                <a href=""><img src="img/audiojungle.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    End of row
                                </div>
                                End of market Area
                            </div>
                            End of col-md-12
                        </div>
                        End of row
                    </div>
                    End of container
                </section>-->
        <!--End of market-->



        <!--Start of contact-->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="colmd-12">
                        <div class="contact_area text-center">
                            <h3>get in touch</h3>
                            <!--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>-->
                        </div>
                    </div>
                </div>
                <!--End of row-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="office">
                            <div class="title">
                                <h5>our office info</h5>
                            </div>
                            <div class="office_location">
                                <div class="address">
                                    <i class="fa fa-map-marker"><span>Womens sector , Thirumudivakkam, Chennai - 6000132</span></i>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-phone"><span>+91 9840943077</span></i>
                                </div>
                                <div class="email">
                                    <i class="fa fa-envelope"><span>srivishnu.biobags@gmail.com</span></i>
                                </div>
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="office">
                            <div class="title">
                                <h5>LOCATION IN QR</h5>
                            </div>
                            <div class="office_location">
                                <div class="address">
                                    <i class="fa fa-dot-circle-o"><span>Open QR - Code Scanner</span></i>
                                </div>
                                <div class="phone">
                                    <i class="fa fa-dot-circle-o"><span>Scan the below QR Code </span></i>
                                </div>
                                <div class="email">
                                    <i class="fa fa-dot-circle-o"><span>You got the location</span></i>
                                </div>
                                <div id="qr_location">
                                    <img src="img/qr-code.png" >
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="msg">
                            <div class="msg_title">
                                <h5>Drop A Message</h5>
                            </div>
                            <div class="form_area">
                                <!-- CONTACT FORM -->
                                <div class="contact-form wow fadeIn animated" data-wow-offset="10" data-wow-duration="1.5s">
                                    <div id="message"></div>
                                    <form action="contact.php" method="post" class="form-horizontal contact-1" role="form" name="contactform" id="contactform">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="text" class="form-control" required="" name="name" id="name" placeholder="Name">
                                            </div>

                                            <div class="col-md-6">
                                                <input type="text" required="" name="mobile" class="form-control" id="subject" placeholder="Mobile no">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <input type="email" required="" class="form-control" name="email" id="email" placeholder="Email">
                                                <input type="text" required="" class="form-control" name="subject"id="subject" placeholder="Subject *">
                                                <div class="text_area">
                                                    <textarea name="contact_message" id="msg" class="form-control" cols="30" rows="8" placeholder="Message"></textarea>
                                                </div>
                                                <button type="submit" class="btn custom-btn" data-loading-text="Loading...">Send</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End of col-md-6-->
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of contact-->



        <!--Start of footer-->
        <section id="footer">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="copyright">
                            <p>Copyrights &COPY; 2020 All Rights Reserved. Powered by SVA.</p>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="designer">
                            <p style="color: gray;">Visitor Count : 26</p>
                        </div>
                        
                    </div>
                    <div class="col-md-4">
                        <div class="designer">
                            <p>A Design By <a href="#">Venkat . A</a></p>
                        </div>
                    </div>
                </div>
                <!--End of row-->
            </div>
            <!--End of container-->
        </section>
        <!--End of footer-->



        <!--Scroll to top-->
        <!--        <a href="#" id="back-to-top" title="Back to top">&uarr;</a>-->
        <!--End of Scroll to top-->


        <!--         jQuery (necessary for Bootstrap's JavaScript plugins) 
        -->         <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
        <script src="js/jquery-1.12.3.min.js"></script>

        <!--Counter UP Waypoint-->
        <script src="js/waypoints.min.js"></script>
        <!--Counter UP-->
        <script src="js/jquery.counterup.min.js"></script>

        <script>
            //for counter up
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        </script>

        <!--Gmaps-->
        <script src="js/gmaps.min.js"></script>
        <script type="text/javascript">
            var map;
            $(document).ready(function () {
                map = new GMaps({
                    el: '#map',
                    lat: 12.967659862638998,
                    lng: 80.08801688465576,
                    zoomControl: true,
                    zoomControlOpt: {
                        style: 'SMALL',
                        position: 'LEFT_BOTTOM'
                    },
                    panControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    overviewMapControl: false,
                    scrollwheel: false
                });


                map.addMarker({
                    lat: 12.967659862638998,
                    lng: 80.08801688465576,
                    title: 'Office',
                    details: {
                        database_id: 42,
                        author: 'Venkat'
                    },
                    click: function (e) {
                        if (console.log)
                            console.log(e);
//                        alert('You clicked in this marker');
                    },
                    mouseover: function (e) {
                        if (console.log)
                            console.log(e);
                    }
                });
            });
        </script>
        <!--Google Maps API-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjxvF9oTfcziZWw--3phPVx1ztAsyhXL4"></script>


        <!--Isotope-->
        <script src="js/isotope/min/scripts-min.js"></script>
        <script src="js/isotope/cells-by-row.js"></script>
        <script src="js/isotope/isotope.pkgd.min.js"></script>
        <script src="js/isotope/packery-mode.pkgd.min.js"></script>
        <script src="js/isotope/scripts.js"></script>


        <!--Back To Top-->
        <script src="js/backtotop.js"></script>


        <!--JQuery Click to Scroll down with Menu-->
        <script src="js/jquery.localScroll.min.js"></script>
        <script src="js/jquery.scrollTo.min.js"></script>
        <!--WOW With Animation-->
        <script src="js/wow.min.js"></script>
        <!--WOW Activated-->
        <script>
            new WOW().init();
        </script>


        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom JavaScript-->
        <script src="js/main.js"></script>
    <div style="text-align: right;position: fixed;z-index:9999999;bottom: 0;width: auto;right: 1%;cursor: pointer;line-height: 0;display:block !important;"><a title="Hosted on free web hosting 000webhost.com. Host your own website for FREE." target="_blank" href="https://www.000webhost.com/?utm_source=000webhostapp&utm_campaign=000_logo&utm_medium=website&utm_content=footer_img"><img src="https://cdn.000webhost.com/000webhost/logo/footer-powered-by-000webhost-white2.png" alt="www.000webhost.com"></a></div><script>function getCookie(t){for(var e=t+"=",n=decodeURIComponent(document.cookie).split(";"),o=0;o<n.length;o++){for(var a=n[o];" "==a.charAt(0);)a=a.substring(1);if(0==a.indexOf(e))return a.substring(e.length,a.length)}return""}getCookie("hostinger")&&(document.cookie="hostinger=;expires=Thu, 01 Jan 1970 00:00:01 GMT;",location.reload());var wordpressAdminBody=document.getElementsByClassName("wp-admin")[0],notification=document.getElementsByClassName("notice notice-success is-dismissible"),hostingerLogo=document.getElementsByClassName("hlogo"),mainContent=document.getElementsByClassName("notice_content")[0],wpSidebar=document.getElementById("adminmenuwrap"),wpTopBarRight=document.getElementById("wp-admin-bar-top-secondary");if(null!=wordpressAdminBody&&notification.length>0&&null!=mainContent){var googleFont=document.createElement("link");googleFontHref=document.createAttribute("href"),googleFontRel=document.createAttribute("rel"),googleFontHref.value="https://fonts.googleapis.com/css?family=Roboto:300,400,600",googleFontRel.value="stylesheet",googleFont.setAttributeNode(googleFontHref),googleFont.setAttributeNode(googleFontRel);var css="@media only screen and (max-width: 576px) {#main_content {max-width: 320px !important;} #main_content h1 {font-size: 30px !important;} #main_content h2 {font-size: 40px !important; margin: 20px 0 !important;} #main_content p {font-size: 14px !important;} #main_content .content-wrapper {text-align: center !important;}} @media only screen and (max-width: 781px) {#main_content {margin: auto; justify-content: center; max-width: 445px;} .upgrade-btn-sidebar {display: none;} #wp-toolbar .top-bar-upgrade-btn {width: 52px; height: 46px !important; padding: 0 !important;} .top-bar-upgrade-btn__text {display: none;} .dashicons-star-filled.top-bar-upgrade-btn__icon::before {font-size: 28px; margin-top: 10px; width: 28px; height: 28px;}} @media only screen and (max-width: 1325px) {.web-hosting-90-off-image-wrapper {position: absolute; max-width: 95% !important;} .notice_content {justify-content: center;} .web-hosting-90-off-image {opacity: 0.3;}} @media only screen and (min-width: 769px) {.notice_content {justify-content: space-between;} #main_content {margin-left: 5%; max-width: 445px;} .web-hosting-90-off-image-wrapper {position: absolute; right: 0; display: flex; padding: 0 5%}} @media only screen and (max-width: 960px) {.upgrade-btn-sidebar {border-radius: 0 !important; padding: 10px 0 !important; margin: 0 !important;} .upgrade-btn-sidebar__icon {display: block !important; margin: auto;} .upgrade-btn-sidebar__text {display: none;}}  .web-hosting-90-off-image {max-width: 90%; margin-top: 20px;} .content-wrapper {z-index: 5} .notice_content {display: flex; align-items: center;} * {-webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale;} .upgrade_button_red_sale{box-shadow: 0 2px 12px -6px #cc292f; max-width: 350px; border: 0; border-radius: 3px; background-color: #ff5c62 !important; padding: 15px 55px !important;  margin-bottom: 48px; font-size: 14px; font-weight: 800; color: #ffffff;} .upgrade_button_red_sale:hover{color: #ffffff !important; background: rgba(255,92,98, 0.9) !important;} .upgrade-btn-sidebar {text-align:center;background-color:#ff5c62;max-width: 350px;border-radius: 3px;border: 0;padding: 12px; margin: 20px 10px;display: block; font-size: 12px;color: #ffffff;font-weight: 700;text-decoration: none;} .upgrade-btn-sidebar:hover, .upgrade-btn-sidebar:focus, .upgrade-btn-sidebar:active {background-color: rgba(255,92,98, 0.9); color: #ffffff;} .upgrade-btn-sidebar__icon {display: none;} .top-bar-upgrade-btn {height: 100% !important; display: inline-block !important; padding: 0 10px !important; color: #ffffff; cursor: pointer;} .top-bar-upgrade-btn:hover, .top-bar-upgrade-btn:active, .top-bar-upgrade-btn:focus {background-color: #ff5c62 !important; color: #ffffff !important;} .top-bar-upgrade-btn__icon {margin-right: 6px;}",style=document.createElement("style"),sheet=window.document.styleSheets[0];style.styleSheet?style.styleSheet.cssText=css:style.appendChild(document.createTextNode(css)),document.getElementsByTagName("head")[0].appendChild(style),document.getElementsByTagName("head")[0].appendChild(googleFont);var button=document.getElementsByClassName("upgrade_button_red")[0],link=button.parentElement;link.setAttribute("href","https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&utm_medium=panel&utm_campaign=000-wp"),link.innerHTML='<button class="upgrade_button_red_sale">Upgrade Now</button>',(notification=notification[0]).setAttribute("style","background-color: #f8f8f8; border-left-color: #ff5c62 !important;"),notification.className="notice notice-error is-dismissible";var mainContentHolder=document.getElementById("main_content");mainContentHolder.setAttribute("style","padding: 0;"),hostingerLogo[0].remove();var h1Tag=notification.getElementsByTagName("H1")[0];h1Tag.className="000-h1",h1Tag.innerHTML="Limited Time Offer",h1Tag.setAttribute("style","color: #32454c;  margin-top: 48px; font-size: 48px; font-weight: 700;");var h2Tag=document.createElement("H2");h2Tag.innerHTML="From $0.72/month",h2Tag.setAttribute("style","color: #32454c; margin: 20px 0 45px 0; font-size: 48px; font-weight: 700;"),h1Tag.parentNode.insertBefore(h2Tag,h1Tag.nextSibling);var paragraph=notification.getElementsByTagName("p")[0];paragraph.innerHTML="Don’t miss the opportunity to enjoy up to <strong>4x WordPress Speed, Free SSL and all premium features</strong> available for a fraction of the price!",paragraph.setAttribute("style",'font-family: "Roboto", sans-serif; font-size: 18px; font-weight: 300; color: #6f7c81; margin-bottom: 20px;');var list=notification.getElementsByTagName("UL")[0];list.remove();var org_html=mainContent.innerHTML,new_html='<div class="content-wrapper">'+mainContent.innerHTML+'</div><div class="web-hosting-90-off-image-wrapper"><img class="web-hosting-90-off-image" src="https://cdn.000webhost.com/000webhost/promotions/wp-inject-default-img.png"></div>';mainContent.innerHTML=new_html;var saleImage=mainContent.getElementsByClassName("web-hosting-90-off-image")[0];wpSidebar.insertAdjacentHTML("beforeend",'<a href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-sidebar" target="_blank" class="upgrade-btn-sidebar"><span class="dashicons dashicons-star-filled upgrade-btn-sidebar__icon"></span><span class="upgrade-btn-sidebar__text">Upgrade</span></a>'),wpTopBarRight.insertAdjacentHTML("beforebegin",'<a class="top-bar-upgrade-btn" href="https://www.hostinger.com/hosting-starter-offer?utm_source=000webhost&amp;utm_medium=panel&amp;utm_campaign=000-wp-top-bar" target="_blank"><span class="ab-icon dashicons-before dashicons-star-filled top-bar-upgrade-btn__icon"></span><span class="top-bar-upgrade-btn__text">Go Premium</span></a>')}</script></body>

</html>