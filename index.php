<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>22x Ventures</title>
    <meta content="" name="description">
    <meta content="" name="keywords">



    <?php include('inc/header.php') ?>

        <!--  BANNER SLIDER  -->
        <div class="banner" style="background: #000;height: 100vh;
    position: relative;
    overflow: hidden; display: flex;
    align-items: center;">

            <div class="container">
                <div class="banBox">
                    <div id="demo" class="carousel slide" data-bs-ride="false" data-bs-interval="false">

                        <!-- Indicators/dots -->


                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row align-items-center position-relative">
                                    <div class="col-lg-7">
                                        <div class="BannerTxtBox">

                                            <p class="sliderHeading text-white">Create the Life You Dream</p>
                                            <!-- <p class="sliderHeading text-white">Live Your
                                                <span style="position: relative;"><img src="assets/img/blackArrow.png" class="blackArrow" alt="Alt"> <span class="yellowText">Best</span></span> Life
                                            </p> -->
                                            <p class="sliderSubHeading text-white">Complementary access to strategies tailored to your unique “Lifestage,” ensuring your path to financial freedom.</p>
                                        </div>
                                        <div class="faIconBox d-flex gap-2">
                                            <i class="fa"><img class="img-fluid" onclick="openPopup()" style="filter: invert(1);" src="assets/img/user.png" alt=""></i>
                                            <i class="fa"><img class="img-fluid" id="playButton" style="filter: invert(1);" src="assets/img/volume.png" alt=""></i>
                                            <div id="audioPopup" class="popup">
                                                <span class="close">&times;</span>
                                                <audio controls>
                                                    <source src="assets/img/1-30%20voiceover.mp3" type="audio/mp3">
                                                </audio>
                                            </div>



                                            <div id="videoPopup" class="overlay">
                                                <div class="popup-content">
                                                    <button class="close-btn" onclick="closePopup()">&times;</button>
                                                    <video id="popupVideo" controls>
                                                        <source src="assets/img/45avatar.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-lg-5" style="position: relative;">
                                        <div class="innerSlider">
                                            <div class="slider-for">
                                                <a href="assets/img/sl-Inner1.jpg" class="item-slick"><img src="assets/img/sl-Inner1.jpg" alt="Alt"></a>
                                                <a href="assets/img/sl-Inner2.jpg" class="item-slick"><img src="assets/img/sl-Inner2.jpg" alt="Alt"></a>
                                                <a href="assets/img/sl-Inner3.jpg" class="item-slick"><img src="assets/img/sl-Inner3.jpg" alt="Alt"></a>

                                                <a href="assets/img/sl-Inner4.jpg" class="item-slick"><img src="assets/img/sl-Inner4.jpg" alt="Alt"></a>

                                            </div>

                                            <div id="videoModal" class="modal">
                                                <div class="modal-content">

                                                    <span class="close" onclick="closeModal()">&times;</span>
                                                    <video id="popupVideo1" controls>
                                                        <source src="assets/img/15sec-avatar.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                            <!-- <div id="videoPopup2" class="overlay">
                                            <div class="popup-content">
                                                <button class="close-btn" onclick="closePopup()">&times;</button>
                                                <video id="popupVideo2" controls>
                                                    <source src="assets/img/45avatar.mp4" type="video/mp4">
                                                </video>
                                            </div>
                                        </div> -->
                                        </div>

                                        <div class="buttons">
                                            <button id='toggle'><img class="img-fluid" src="assets/img/playIcon.png" alt=""></button>

                                        </div>

                                        <div class="showPopup">
                                            <span id="camera-icon"><img class="img-fluid" src="assets/img/cameraIcon.png" alt=""></span>
                                            <span id="video-icon"><img class="img-fluid thumbnail" onclick="openModal()" src="assets/img/videoIcon.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row align-items-center position-relative">
                                    <div class="col-lg-7">
                                        <div class="BannerTxtBox">
                                            <p class="sliderHeading text-white">Financial Freedom Access for All

                                            </p>
                                            <p class="sliderSubHeading text-white">Our goal is to democratize wealth building.
                                            </p>
                                        </div>
                                        <div class="faIconBox d-flex gap-2">
                                            <i class="fa"><img class="img-fluid" onclick="openPopup()" style="filter: invert(1);" src="assets/img/user.png" alt=""></i>
                                            <i class="fa"><img class="img-fluid" id="playButton" style="filter: invert(1);" src="assets/img/volume.png" alt=""></i>
                                            <div id="audioPopup" class="popup">
                                                <span class="close">&times;</span>
                                                <audio controls>
                                                    <source src="assets/img/1-30%20voiceover.mp3" type="audio/mp3">
                                                </audio>
                                            </div>



                                            <div id="videoPopup" class="overlay">
                                                <div class="popup-content">
                                                    <button class="close-btn" onclick="closePopup()">&times;</button>
                                                    <video id="popupVideo" controls>
                                                        <source src="assets/img/45avatar.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>

                                    </div>


                                    <div class="col-lg-5" style="position: relative;">

                                        <div class="innerSlider">
                                            <div class="slick-slider">
                                                <a href="assets/img/sl-Inner8.jpg" class="item-slick"><img src="assets/img/sl-Inner8.jpg" alt="Alt"></a>
                                                <a href="assets/img/sl-Inner2.jpg" class="item-slick"><img src="assets/img/sl-Inner2.jpg" alt="Alt"></a>
                                                <a href="assets/img/sl-Inner3.jpg" class="item-slick"><img src="assets/img/sl-Inner3.jpg" alt="Alt"></a>

                                                <a href="assets/img/sl-Inner4.jpg" class="item-slick"><img src="assets/img/sl-Inner4.jpg" alt="Alt"></a>

                                            </div>

                                            <div id="videoModal" class="modal">
                                                <div class="modal-content">

                                                    <span class="close" onclick="closeModal()">&times;</span>
                                                    <video id="popupVideo1" controls>
                                                        <source src="assets/img/45avatar.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="buttons">
                                            <button id='toggle1'><img class="img-fluid" src="assets/img/playIcon.png" alt=""></button>

                                        </div>

                                        <div class="showPopup">
                                            <span id="camera-icon1"><img class="img-fluid" src="assets/img/cameraIcon.png" alt=""></span>
                                            <span id="video-icon1"><img class="img-fluid thumbnail" onclick="openModal()" src="assets/img/videoIcon.png" alt=""></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row align-items-center position-relative">
                                    <div class="col-lg-7">
                                        <div class="BannerTxtBox">
                                            <p class="sliderHeading text-white">Complementary Access to Digital Family Office Kit
                                            </p>
                                            <p class="sliderSubHeading text-white">Your universal key to wealth, financial, risk management strategies, tools, and world-class resources.  Turn-key solutions tailored to your current means. 

                                            </p>

                                        </div>

                                        <div class="faIconBox d-flex gap-2">

                                            <i class="fa"><img class="img-fluid" onclick="openPopup()" style="filter: invert(1);" src="assets/img/user.png" alt=""></i>


                                            <div id="videoPopup" class="overlay">
                                                <div class="popup-content">
                                                    <button class="close-btn" onclick="closePopup()">&times;</button>
                                                    <video id="popupVideo" controls>
                                                        <source src="assets/img/45avatar.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>

                                            <i class="fa"><img class="img-fluid" id="playButton" style="filter: invert(1);" src="assets/img/volume.png" alt=""></i>
                                            <div id="audioPopup" class="popup">
                                                <span class="close">&times;</span>
                                                <audio controls>
                                                    <source src="assets/img/1-30%20voiceover.mp3" type="audio/mp3">
                                                </audio>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-5  text-center">
                                        <div class="boxWealth">
                                            <p class="boxHeading text-white">Private Wealth, Financial, and Risk Management <span class="yellowTextColor">Tool Kit</span></p>
                                            <div class="d-flex gap-3 justify-content-center mt-5">
                                                <a href="#" class="office-kit-box text-center text-white">
                                                SRA
                                            </a>
                                                <a href="#" class="office-kit-box text-center text-white">
                                                TFRA
                                            </a>
                                                <a href="#" class="office-kit-box text-center text-white">
                                                Children Straight Fund
                                            </a>
                                                <a href="#" class="office-kit-box text-center text-white">
                                                Children Straight Fund
                                            </a>
                                                <a href="#" class="office-kit-box text-center text-white">
                                                ABC
                                            </a>
                                                <a href="#" class="office-kit-box text-center text-white">
                                                DFL
                                            </a>
                                            </div>
                                            <div class="mt-5">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-2">
                                                        <img src="assets/img/two-hammers.png" alt="">
                                                    </div>
                                                    <div class="col-lg-10 text-start">
                                                        <ul class="text-white finance-ul">
                                                            <li>Free Financial Plan</li>
                                                            <li>Wealth Strategy</li>
                                                            <li>Insurance</li>
                                                            <li>Research Analysis</li>
                                                            <li>Tax Mitigation</li>
                                                            <li>Estate Plan</li>
                                                            <li>Legal </li>
                                                            <li>Virtual Assistant</li>
                                                            <li>Risk Management</li>
                                                            <li>Club Access</li>
                                                            <li>Private Investment</li>
                                                            <li>Private Credit</li>

                                                                
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row align-items-center position-relative">
                                    <div class="col-lg-7">
                                        <div class="BannerTxtBox">
                                            <p class="sliderHeading text-white">SLider 4</p>

                                        </div>
                                    </div>
                                    <div class="col-lg-5" style="position: relative;">
                                        <img src="assets/img/sl-Inner8.jpg" alt="Alt" style="opacity: 0;;">

                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="row align-items-center position-relative">
                                    <div class="col-lg-7">
                                        <div class="BannerTxtBox">
                                            <p class="sliderHeading text-white">SLider 5</p>

                                        </div>
                                    </div>
                                    <div class="col-lg-5" style="position: relative;">
                                        <img src="assets/img/sl-Inner8.jpg" alt="Alt" style="opacity: 0;;">

                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row align-items-center position-relative">
                                    <div class="col-lg-7">
                                        <div class="BannerTxtBox">
                                            <p class="sliderHeading text-white">SLider 6</p>

                                        </div>
                                    </div>
                                    <div class="col-lg-5" style="position: relative;">
                                        <img src="assets/img/sl-Inner8.jpg" alt="Alt" style="opacity: 0;;">

                                    </div>
                                </div>
                            </div>


                            <div class="carousel-item">
                                <div class="row align-items-center position-relative">
                                    <div class="col-lg-7">
                                        <div class="BannerTxtBox">
                                            <p class="sliderHeading text-white">SLider 7</p>

                                        </div>
                                    </div>
                                    <div class="col-lg-5" style="position: relative;">
                                        <img src="assets/img/sl-Inner8.jpg" alt="Alt" style="opacity: 0;;">

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="indicatorBox">
                            <div class="indicatorGroup">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="4"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="5"></button>
                                    <button type="button" data-bs-target="#demo" data-bs-slide-to="6"></button>
                                </div>
                                <!-- Left and right controls/icons -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>


        


        <section class="section familyOff" style="background:#000; ">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <p class="sectionHeading text-white">DIGITAL FAMILY OFFICE KIT</p>
                    <p class="sectionSubHeading text-white">We bring strategies from successful family offices and businesses to the public.</p>

                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-lg-3 mb-3">
                        <div class="reaserch-box">
                            <div class="img-div">
                                <img src="assets/img/img-1.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-white text-uppercase fw-500">Research Report </p>
                                    <div class="img-sound-div">
                                        <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                        <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription text-white mt-2 secTitle">
                                    Have You Saved Enough to Support Your Lifestyle in Retirement?
                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">
                                    Learn how to shield your life savings from market losses; and multiply your money without fees …
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="reaserch-box">
                            <div class="img-div">
                                <img src="assets/img/img-2.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-white text-uppercase fw-500">Research Report </p>
                                    <div class="img-sound-div">
                                        <a href=""> <img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2 "></a>
                                        <a href=""><img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription text-white mt-2 secTitle">
                                    Add tax-free income streams to supplement social security and savings; build legacy
                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Enjoy lifestyle benefits of tax-free income; and create family legacy …

                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="reaserch-box">
                            <div class="img-div">
                                <img src="assets/img/img-3.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-white text-uppercase fw-500">Product</p>
                                    <div class="img-sound-div">
                                        <a href=""> <img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                        <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription text-white mt-2 secTitle">What is better than a 529 College Savings Plan?

                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Flexible tax-free account used anytime and for any purpose, plus tax free pension fund …

                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 mb-3">
                        <div class="reaserch-box">
                            <div class="img-div">
                                <img src="assets/img/img-4.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-white text-uppercase fw-500">Research Report </p>
                                    <div class="img-sound-div">
                                        <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                        <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription text-white mt-2 secTitle">For retail workers and younger professionals with average earners

                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Gig- | retail workers – create lifetime annual income and retirement account within your current means …

                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <div class="reaserch-box">
                            <div class="img-div">
                                <img src="assets/img/img-5.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-white text-uppercase fw-500">Product </p>
                                    <div class="img-sound-div">
                                        <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                        <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription text-white mt-2 secTitle">Achieve peace of mind. Financial care for special needs
                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Lifetime financial care funding is within your control, today …
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <div class="reaserch-box">
                            <div class="img-div">
                                <img src="assets/img/img-6.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-white text-uppercase fw-500">Product </p>
                                    <div class="img-sound-div">
                                        <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                        <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription text-white mt-2 secTitle">Create your own bank like Walt Disney


                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Take control, create your own banking system using life insurance…
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <div class="reaserch-box">
                            <div class="img-div">
                                <img src="assets/img/img-7.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-white text-uppercase fw-500">Product </p>
                                    <div class="img-sound-div">
                                        <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                        <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription text-white mt-2 secTitle">How would you live your debt free life?
                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Pay off your debts 70% faster without adding new monthly payment …
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 mb-3">
                        <div class="reaserch-box">
                            <div class="img-div">
                                <img src="assets/img/img-8.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-white text-uppercase fw-500">RISK MANAGEMENT
                                    </p>
                                    <div class="img-sound-div">
                                        <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                        <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription text-white mt-2 secTitle">Magic multi-use of insurance for financial and risk management
                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Financial legacy, asset protection, life, health, workforce bonus, wealth platform, and more …
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="reaserch-box">
                            <div class="img-div">
                                <img src="assets/img/img-16.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-white text-uppercase fw-500">INVESTMENT </p>
                                    <div class="img-sound-div">
                                        <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                        <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription mt-3 text-white secTitle">Challenge; shoot down our Principal Safe Fund model
                                </p>

                                <p class="sectionDescription mt-5 main-description text-white">U.S. first real principal protected fund, guaranteed no-loss with built-in growth …
                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="reaserch-box reaserchWhite">
                            <div class="img-div">
                                <img src="assets/img/img-10.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-uppercase fw-700">CASE STUDY
                                    </p>
                                    <div class="img-sound-div">
                                        <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                        <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription mt-5">DFL case. </p>

                                <!-- <p class="sectionDescription text-white mt-4 main-description">Gig- | retail workers – create lifetime annual income and retirement account within your current means … </p> -->
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="reaserch-box reaserchWhite">
                            <div class="img-div">
                                <img src="assets/img/img-11.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-uppercase fw-700">CASE STUDY</p>
                                    <div class="img-sound-div">
                                        <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                        <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription mt-5">SRA case.
                                </p>
                                <!-- 
                        <p class="sectionDescription text-white mt-4 main-description">Gig- | retail workers – create lifetime annual income and retirement account within your current means … 

                        </p> -->
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="reaserch-box reaserchWhite">
                            <div class="img-div">
                                <img src="assets/img/img-12.jpg" alt="" class="img-fluid">
                            </div>
                            <div class="content-div ">
                                <div class="research-div d-flex justify-content-between">
                                    <p class="sectionDescription text-uppercase fw-700">CASE STUDY</p>
                                    <div class="img-sound-div">
                                        <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                        <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                    </div>
                                </div>

                                <p class="sectionDescription mt-5">Starlight Opportunity Fund case.

                                </p>
                                <div class="d-flex justify-content-between align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn"> Demo</a>
                                    <a href="" class="sra-btn"> SRA</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        
        <section class="section5" style=" background: url(assets/img/dotBg.jpg) repeat;
position: relative;
overflow: hidden; display: flex;
align-items: center;">

            <div class="container">
                <div class="row justify-content-center text-center mb-1">
                    <p class="sectionHeading text-white">WORKER’S BENEFITS

                    </p>

                </div>

                <div class="banBox">
                    <div id="demo2" class="carousel slide" data-bs-ride="false" data-bs-interval="false">

                        <!-- Indicators/dots -->


                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row align-items-center position-relative">
                                    <div class="col-lg-5" style="position: relative;">
                                        <div class="innerSlider">
                                            <div class="slider-for2">
                                                <div class="item-slick"><img src="assets/img/image48.png" alt="Alt"></div>
                                                <div class="item-slick"><img src="assets/img/sl-Inner2.jpg" alt="Alt"></div>
                                                <div class="item-slick"><img src="assets/img/sl-Inner3.jpg" alt="Alt"></div>

                                                <div class="item-slick"><img src="assets/img/sl-Inner4.jpg" alt="Alt"></div>

                                            </div>

                                            <div id="videoModal2" class="modal">
                                                <div class="modal-content">

                                                    <span class="close" onclick="closeModal()">&times;</span>
                                                    <video id="popupVideo1" controls>
                                                        <source src="assets/img/15sec-avatar.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="buttons">
                                            <button id='toggle2'><img class="img-fluid" src="assets/img/playIcon.png" alt=""></button>

                                        </div>

                                        <div class="showPopup">
                                            <span id="camera-icon2"><img class="img-fluid" src="assets/img/cameraIcon.png" alt=""></span>
                                            <span id="video-icon2"><img class="img-fluid thumbnail" onclick="openModal()" src="assets/img/videoIcon.png" alt=""></span>
                                        </div>
                                    </div>


                                    <div class="col-lg-7">
                                        <div class="BannerTxtBox">
                                            <p class="slicksliderHeading text-white">Revolutionizing Total Workforce Benefits
                                            </p>
                                            <p class="sliderSubHeading text-white">For Talent Acquisition and Retention.  Design total rewards centered around the entire workforce – founders, executives, employees and contractors.</p>
                                        </div>
                                        <div class="faIconBox d-flex gap-2">
                                            <i class="fa"><img class="img-fluid" onclick="openPopup()" style="filter: invert(1);" src="assets/img/user.png" alt=""></i>
                                            <i class="fa"><img class="img-fluid" id="playButton" style="filter: invert(1);" src="assets/img/volume.png" alt=""></i>
                                            <div id="audioPopup" class="popup">
                                                <span class="close">&times;</span>
                                                <audio controls>
                                                    <source src="assets/img/1-30%20voiceover.mp3" type="audio/mp3">
                                                </audio>
                                            </div>



                                            <div id="videoPopup" class="overlay">
                                                <div class="popup-content">
                                                    <button class="close-btn" onclick="closePopup()">&times;</button>
                                                    <video id="popupVideo" controls>
                                                        <source src="assets/img/45avatar.mp4" type="video/mp4">
                                                    </video>
                                                </div>
                                            </div>
                                        </div>

                                    </div>



                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class=" trapez-wrapper">
                                            <div class="trapez-box text-center">
                                                <p class="box-big-heading text-white mb-2"># 1</p>
                                                <p class="box-small-heading text-white mb-0">BPO FOR DISRUPTORS
                                                </p>
                                            </div>
                                            <div class="trapez-box text-center">
                                                <p class="box-big-heading text-white mb-2">13</p>
                                                <p class="box-small-heading text-white mb-0">DELIVERY SITES
                                                </p>
                                            </div>
                                            <div class="trapez-box text-center">
                                                <p class="box-big-heading  mb-2">60 %</p>
                                                <p class="box-small-heading  mb-0">OR MORE COST SAVINGS
                                                </p>
                                            </div>
                                            <div class="trapez-box text-center">
                                                <p class="box-big-heading text-white mb-2">30 +</p>
                                                <p class="box-small-heading text-white mb-0">LANGUAGES
                                                </p>
                                            </div>
                                            <div class="trapez-box text-center">
                                                <p class="box-big-heading text-white mb-2">95 +</p>
                                                <p class="box-small-heading text-white mb-0">VOLUNTARY CLIENT RETENTION
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ">
                                        <p class="slicksliderHeading text-white">Industry Leading 401K Solution</p>
                                        <p class="sliderSubHeading text-white">Outsource company’s benefits adminstration.  We manage employee’s customer experience, sales, back-office operations, QA, and compliance.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 ">
                                        <p class="boxHeading text-white text-center">Total Workforce Benefits Bundle</p>

                                        <div class="d-flex mt-2 justify-content-center gap-3">
                                            <div class="work-box-1 d-flex">
                                                <p class="text-center text-white mb-0 px-5">Employees
                                                    Benefits
                                                    </p>
                                                <div class=" d-flex employees-img mt-2">

                                                    <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                                    <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                                </div>
                                            </div>

                                            <div class="work-box-1 d-flex">
                                                <p class="text-center text-white mb-0 px-5">Contractors
                                                    Benefits
                                                    </p>
                                                <div class=" d-flex employees-img mt-2">

                                                    <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                                    <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="d-flex justify-content-center mt-3">
                                            <span class="yellowText-1">Plus</span>
                                        </div>

                                        <p class="boxHeading text-white text-center mt-2">Digital Family Office sub-Kit – Supplemental
                                        </p>

                                        <div class="d-flex gap-3 justify-content-center mt-4">
                                            <a href="#" class="office-kit-box text-center text-white">
                                        SRA
                                    </a>
                                            <a href="#" class="office-kit-box text-center text-white">
                                        TFRA
                                    </a>
                                            <a href="#" class="office-kit-box text-center text-white">
                                        Children Straight Fund
                                    </a>
                                            <a href="#" class="office-kit-box text-center text-white">
                                                Horizon Breakout Fund
                                                
                                    </a>
                                            <a href="#" class="office-kit-box text-center text-white">
                                                IBC

                                    </a>
                                            <a href="#" class="office-kit-box text-center text-white">
                                        DFL
                                    </a>
                                        </div>

                                        <div>
                                            <p class="text-white text-center mt-4">Your Wealth | Financial | Risk Management <span class="yellowTextColor">Tool Kit</span></p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 ">
                                        <p class="slicksliderHeading text-white">More than 401K, and health insurance
                                        </p>
                                        <p class="sliderSubHeading text-white">Total rewards and life benefits designed around worker’s families and legacy.

                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="indicatorBox">
                            <div class="indicatorGroup">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#demo2" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#demo2" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#demo2" data-bs-slide-to="2"></button>
                                    <button type="button" data-bs-target="#demo2" data-bs-slide-to="3"></button>
                                    <button type="button" data-bs-target="#demo2" data-bs-slide-to="4"></button>
                                    <button type="button" data-bs-target="#demo2" data-bs-slide-to="5"></button>
                                    <button type="button" data-bs-target="#demo2" data-bs-slide-to="6"></button>
                                </div>
                                <!-- Left and right controls/icons -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>


  <section class="workValue" style="background:#000;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-11">
            <p class="sectionHeading text-white  text-center ">360<sup>0</sup> WORKER’S VALUE</p>
            <p class="sectionSubHeading text-white  text-center ">Every day, we research and analyze strategies to add value to our clients </p>
    
        <div class="row justify-content-center mt-5">
            <div class="col-lg-3">
                <div class="reaserch-box-1">
                    <div class="content-div-1 ">
                        <div class="research-div-1 d-flex justify-content-between">
                            <p class="sectionDescription text-white text-uppercase fw-500">SOLUTION
                            </p>
                            <div class="img-sound-div">
                                <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>


                        <p class="sectionDescription text-white  mt-3 main-description-1">
                            Wealth | Financial | Risk Management - Benefits Supplemental to all workers

                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-4 buttons-div-1">
                            <a href="" class="demo-btn-1"> Demo <img src="assets/img/btn-arrow.png" alt="" class="img-fluid ms-2" ></a>
                            <a href="" class="sra-btn-1">Family Office Kit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="reaserch-box-1">
                    <div class="content-div-1 ">
                        <div class="research-div-1 d-flex justify-content-between">
                            <p class="sectionDescription text-white text-uppercase fw-500">RESEARCH REPORT
                            </p>
                            <div class="img-sound-div">
                                <a href=""> <img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2 "></a>
                                <a href=""><img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>

                        <p class="sectionDescription text-white  mt-3 main-description-1">
                            Best-in-class service and access to more investment alternatives

                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-4 buttons-div-1">
                            <a href="" class="demo-btn-1"> Demo <img src="assets/img/btn-arrow.png" alt="" class="img-fluid ms-2" ></a>
                            <a href="" class="sra-btn-1">401K
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="reaserch-box-1">
                    <div class="content-div-1 ">
                        <div class="research-div-1 d-flex justify-content-between">
                            <p class="sectionDescription text-white text-uppercase fw-500">RESEARCH REPORT
                            </p>
                            <div class="img-sound-div">
                                <a href=""> <img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>

                        <p class="sectionDescription text-white  mt-3 main-description-1">
                            Unique Captive solution for group benefits with cost and risk reduction

                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-4 buttons-div-1">
                            <a href="" class="demo-btn-1"> Demo <img src="assets/img/btn-arrow.png" alt="" class="img-fluid ms-2" ></a>
                            <a href="" class="sra-btn-1">1099’s
                                Benefits
                                </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="reaserch-box-1">
                    <div class="content-div-1 ">
                        <div class="research-div-1 d-flex justify-content-between">
                            <p class="sectionDescription text-white text-uppercase fw-500">BPO SOLUTION
                            </p>
                            <div class="img-sound-div">
                                <a href=""><img src="assets/img/volume-new.png" alt="" class="img-fluid mx-2"></a>
                                <a href=""> <img src="assets/img/folder-new.png" alt="" class="img-fluid"></a>
                            </div>
                        </div>
                        <p class="sectionDescription text-white  mt-3 main-description-1">
                            Fractional HR BPO could be a cost-effective alternative

                        </p>
                        <div class="d-flex justify-content-between align-items-center mt-4 buttons-div-1">
                            <a href="" class="demo-btn-1"> Demo <img src="assets/img/btn-arrow.png" alt="" class="img-fluid ms-2" ></a>
                            <a href="" class="sra-btn-1"> HR BPO
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> 

    </div>
</section>


        <section class="py-5" style="background: #000;">
            <div class="container">

           

                <div class="row justify-content-center text-center mb-1">
                    <span class="d-flex justify-content-center align-items-center gap-2"><p class="sectionHeading text-white">COMMUNITIES by
                    </p>
                    <img src="assets/img/cityfont.png" style=" height: 46px;" class="img-fluid">
                </span>
                    <p class="sectionSubHeading text-white">We invest in the operations of communities, non-profits, and associations. 
                    </p>

                </div>




                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row justify-content-center align-items-center ">
                                <div class="col-lg-5">
                                    <img src="assets/img/image39.jpg" alt="" class="img-fluid funding-img">
                                </div>

                                <div class="col-lg-7">
                                    <p class="boxHeading text-white ">Faith Based Organizations
                                    </p>
                                    <p class="sliderSubHeading text-white mt-3">
                                        Contribute to operating budgets of Faith Based organizations to help local communities and states uplift and support social values.
                                    </p>

                                    <p class="sliderSubHeading text-white mt-3">
                                        BPO and investments.
                                    </p>
                                    <div class="faIconBox d-flex gap-2">
                                        <i class="fa"><img class="img-fluid" style="filter: invert(1);" src="assets/img/user.png" alt=""></i>
                                        <i class="fa"><img class="img-fluid" id="" style="filter: invert(1);" src="assets/img/volume.png" alt=""></i>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center align-items-center ">
                                <div class="col-lg-5">
                                    <img src="assets/img/image28.jpg" alt="" class="img-fluid funding-img">
                                </div>

                                <div class="col-lg-7">
                                    <p class="boxHeading text-white ">Church and Charitable Organizations

                                    </p>
                                    <p class="sliderSubHeading text-white mt-3">
                                        Streamline Backoffice functions of worship organizations, implementing select business best practices.

                                    </p>

                                    <p class="sliderSubHeading text-white mt-3">
                                        BPO and investments.
                                    </p>
                                    <div class="faIconBox d-flex gap-2">
                                        <i class="fa"><img class="img-fluid" style="filter: invert(1);" src="assets/img/user.png" alt=""></i>
                                        <i class="fa"><img class="img-fluid" id="" style="filter: invert(1);" src="assets/img/volume.png" alt=""></i>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row justify-content-center align-items-center ">
                                <div class="col-lg-5">
                                    <img src="assets/img/image41.jpg" alt="" class="img-fluid funding-img">
                                </div>

                                <div class="col-lg-7">
                                    <p class="boxHeading text-white ">Special Needs | Neurodiverse Community

                                    </p>
                                    <p class="sliderSubHeading text-white mt-3">
                                        Peace of mind… Financial Care solving lifetime funding support for individuals with special needs.
                                    </p>

                                    <p class="sliderSubHeading text-white mt-3">
                                        Investments and Not-for-Profit.

                                    </p>
                                    <div class="faIconBox d-flex gap-2">
                                        <i class="fa"><img class="img-fluid" style="filter: invert(1);" src="assets/img/user.png" alt=""></i>
                                        <i class="fa"><img class="img-fluid" id="" style="filter: invert(1);" src="assets/img/volume.png" alt=""></i>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row justify-content-center align-items-center ">
                                <div class="col-lg-5">
                                    <img src="assets/img/image40.jpg" alt="" class="img-fluid funding-img">
                                </div>

                                <div class="col-lg-7">
                                    <p class="boxHeading text-white ">Association: Asian-American Leadership


                                    </p>
                                    <p class="sliderSubHeading text-white mt-3">
                                        Asian-Americans contributes vastly to local communities. We are co-investing to deliver wealth, financial, and risk management.
                                    </p>

                                    <p class="sliderSubHeading text-white mt-3">
                                        Investments and Not-for-Profit.

                                    </p>
                                    <div class="faIconBox d-flex gap-2">
                                        <i class="fa"><img class="img-fluid" style="filter: invert(1);" src="assets/img/user.png" alt=""></i>
                                        <i class="fa"><img class="img-fluid" id="" style="filter: invert(1);" src="assets/img/volume.png" alt=""></i>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row justify-content-center align-items-center ">
                                <div class="col-lg-5">
                                    <img src="assets/img/image42.jpg" alt="" class="img-fluid funding-img">
                                </div>

                                <div class="col-lg-7">
                                    <p class="boxHeading text-white ">Association: ESOP Advocacy



                                    </p>
                                    <p class="sliderSubHeading text-white mt-3">
                                        Employee ownership is an extraordinary opportunity that should be available to everyone. How can the ESOP model be improved?
                                    </p>

                                    <p class="sliderSubHeading text-white mt-3">
                                        Workforce Benefits and Not-for-Profit.

                                    </p>
                                    <div class="faIconBox d-flex gap-2">
                                        <i class="fa"><img class="img-fluid" style="filter: invert(1);" src="assets/img/user.png" alt=""></i>
                                        <i class="fa"><img class="img-fluid" id="" style="filter: invert(1);" src="assets/img/volume.png" alt=""></i>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


                <button id="carouselToggle" class="pause-play-btn mt-3">
                    <img id="carouselToggleIcon" src="assets/img/pauseIcon.png" alt="Pause">
                </button>

            </div>
        </section>


        <section class="section familyOff" style="background: url(assets/img/dotBg.jpg) repeat;">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <p class="sectionHeading text-white">SERVICES</p>
                    <p class="sectionSubHeading text-white">Access to Functional and Industry Experts. 
                    </p>

                </div>

                <div class="row justify-content-center mt-5">
                    <div class="col-lg-4 mb-3">
                        <div class="reaserch-box colorBoxbg">
                            <div class="img-div" style="background: #555071;">
                            </div>
                            <div class="content-div ">

                                <p class="sectionDescription text-white mt-2 secTitle">
                                    Shared Services Outsourcing: SMB Tax and Bookkeeping, and Back Office Services

                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="d-flex justify-content-end align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn" style="border: 0px;">Expand  <img src="assets/img/btn-arrow.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="reaserch-box colorBoxbg">
                            <div class="img-div" style="background: #000000;">
                            </div>
                            <div class="content-div ">

                                <p class="sectionDescription text-white mt-2 secTitle">
                                    Advisory: Start-ups, SMB and Mid-Market M&A, and Due Diligence

                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="d-flex justify-content-end align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn" style="border: 0px;">Expand  <img src="assets/img/btn-arrow.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="reaserch-box colorBoxbg">
                            <div class="img-div" style="background: #62301a;">
                            </div>
                            <div class="content-div ">

                                <p class="sectionDescription text-white mt-2 secTitle">Consulting: SPV and Fund Reporting, Management and Administration


                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="d-flex justify-content-end align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn" style="border: 0px;">Expand  <img src="assets/img/btn-arrow.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-3">
                        <div class="reaserch-box colorBoxbg">
                            <div class="img-div" style="background: #3a3a3a;">
                            </div>
                            <div class="content-div ">

                                <p class="sectionDescription text-white mt-2 secTitle">Consulting: Owner’s Risk Management, and Succession 


                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="d-flex justify-content-end align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn" style="border: 0px;">Expand  <img src="assets/img/btn-arrow.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="reaserch-box colorBoxbg">
                            <div class="img-div" style="background: #313428;">
                            </div>
                            <div class="content-div ">

                                <p class="sectionDescription text-white mt-2 secTitle">Consulting: Value Chain Assessment, Workforce Strategy, and Post-Merger Integration


                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="d-flex justify-content-end align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn" style="border: 0px;">Expand  <img src="assets/img/btn-arrow.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="reaserch-box colorBoxbg">
                            <div class="img-div" style="background: #0e2841;">
                            </div>
                            <div class="content-div ">

                                <p class="sectionDescription text-white mt-2 secTitle">Shared Services Outsourcing: HR Administration


                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="d-flex justify-content-end align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn" style="border: 0px;">Expand  <img src="assets/img/btn-arrow.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="reaserch-box colorBoxbg">
                            <div class="img-div" style="background: #114f6b;">
                            </div>
                            <div class="content-div ">

                                <p class="sectionDescription text-white mt-2 secTitle">
                                    Shared Services Outsourcing: SMB Tax and Bookkeeping, and Back Office Services

                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="d-flex justify-content-end align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn" style="border: 0px;">Expand  <img src="assets/img/btn-arrow.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="reaserch-box colorBoxbg">
                            <div class="img-div" style="background: #5c5923;">
                            </div>
                            <div class="content-div ">

                                <p class="sectionDescription text-white mt-2 secTitle">Shared Services Outsourcing: PR and Marketing Services


                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="d-flex justify-content-end align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn" style="border: 0px;">Expand  <img src="assets/img/btn-arrow.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-3">
                        <div class="reaserch-box colorBoxbg">
                            <div class="img-div" style="background: #5b2d72;">
                            </div>
                            <div class="content-div ">

                                <p class="sectionDescription text-white mt-2 secTitle">
                                    Industry SME Network


                                </p>

                                <p class="sectionDescription text-white mt-4 main-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                                <div class="d-flex justify-content-end align-items-center mt-4 buttons-div">
                                    <a href="" class="demo-btn" style="border: 0px;">Expand <img src="assets/img/btn-arrow.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                  
                </div>


            </div>
        </section>


        <section style="background: #000;">
            <div class="container">

                <div class="row justify-content-center text-center mb-1">
                    <p class="sectionHeading text-white">BUILT FOR PARTNERS

                    </p>
                    <p class="sectionSubHeading text-white">Join our community and partner-ecosystem.

                    </p>

                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <img src="assets/img/ifImg.jpg" class="img-fluid" style="    margin: 20px auto;
    display: table;">
                    </div>
                </div>
            </div>
        </section>
      

        <?php include('inc/footer.php') ?>