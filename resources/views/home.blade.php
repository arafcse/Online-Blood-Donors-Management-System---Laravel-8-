<!doctype html>
<html lang="en">

<head>
   @include("master.homecss")
</head>

<body>
        <header class="continer-fluid ">
            <div class="header-top">
                <div class="container">
                    <div class="row col-det">
                        <div class="col-lg-6 d-none d-lg-block">
                            <ul class="ulleft">
                                <li>
                                    <i class="far fa-envelope"></i>
                                    OnlineBlood@bloodbank.com
                                    <span>|</span></li>
                                <li>
                                    <i class="far fa-clock"></i>
                                    Service Time : 12:AM</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <ul class="ulright">
    
                                     <li> 
                                        <i class="fas fa-user"></i>
                                            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-0 py-0 sm:block">
                    @auth
                        <li>
                            <x-app-layout>
                                
                            </x-app-layout>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="text-sm text-white underline">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 text-sm text-white underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif
                                       
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu-jk" class="header-bottom">
                <div class="container">
                    <div class="row nav-row">
                        <div class="col-md-2 logo">
                            <a href="{{URL::to('/home')}}"><img src="assets/images/logo.jpg" alt="logo"></a>
                        </div>
                        <div class="col-md-9 nav-col">
                            <nav class="navbar navbar-expand-lg navbar-light">

                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#navbarNav"
                                    aria-controls="navbarNav"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#">Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#about">About Us</a>
                                        </li>

                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link" href="#process">Services</a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a class="nav-link" href="#gallery">Gallery</a>
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="#feedback">Feedback</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact">Contact US</a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        
    <!-- ################# Slider Starts Here#######################--->

    <div class="slider-detail">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="assets/images/slider/slide-02.jpg" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Blood is a necessary element in the human body. Without blood, the human body is incomplete. Blood is donated in the conventional way by blood donation services or blood bank.
                             
                        </p>

                        <div class=" vbh">

                            
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <img class="d-block w-100" src="assets/images/slider/slide-03.jpg" alt="Third slide">
                    <div class="carousel-caption vdg-cur d-none d-md-block">
                        <h5 class=" bounceInDown">Donate Blood & Save a Life</h5>
                        <p class=" bounceInLeft">Through the use of online blood bank management system, blood transfusion safety is expected to be enhanced or improved. 
                            </p>

                        <div class=" vbh">

                            
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>
    
    <!--*************** About Us Starts Here ***************-->
   <section id="about" class="contianer-fluid about-us">
       <div class="container">
           <div class="row session-title">
               <h2>About Us</h2>
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
           </div>
            <div class="row">
                <div class="col-md-6 text">
                    <h2>About Blood Doners</h2>
                    <br>
                    <br>
                    <p>Blood transfusion safety remains an important public health concern in Bangladesh. The availability of blood products of all blood types and the provision of its safety ensure public trust of its excellent healthcare system. However, lack of availability of these blood products and provision of unsafe blood products still impact morbidity and mortality in the Sultanate. </p>
                    <p> Through the use of online blood bank management system, blood transfusion safety is expected to be enhanced or improved. Risks on improper blood donors’ documentation, and misplaced records can be minimized or totally avoided. Also, processes involving blood bag collection, storage, and inventory will be systematized and organized, hence, improving the healthcare management.</p>
                    <p> Blood is a necessary element in the human body. Without blood, the human body is incomplete. Blood is donated in the conventional way by blood donation services or blood bank. Many Bangladesh blood banks don't help the online database of blood donors.</p>
                </div>
                <div class="col-md-6 image">
                    <img src="assets/images/about.jpg" alt="">
                </div>
            </div>
       </div>
   </section>
    
          

    <!-- ################# Donation Process Start Here #######################--->
     
     <section id="process" class="donation-care">
         <div class="container">
           <div class="row session-title">
               <h2>Blood Bank Management System</h2>
               <p>You can take our services, We will serve as soon as possible.</p>
           </div>
            <div class="row">
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img src="assets/images/gallery/g1.jpg" alt="">
                     <h4>Donor Registration</h4>
                     <p>Just fillup the form and become a donor. Your blood can save anybodys life.</p>
                     <button class="btn btn-sm btn-danger"><a href="{{url('/donorsregistration')}}"> Go <i class="fas fa-arrow-right"></i></a></button>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img src="assets/images/gallery/g2.jpg" alt="">
                        <h4>Search For Donors</h4>
                     <p>Do you have serious paitent? Don't be late. Search here for donors in your area.</p>
                     <button class="btn btn-sm btn-danger"><a href="{{url('/donorsearch')}}">Go <i class="fas fa-arrow-right"></i></a></button>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 vd">
                    <div class="bkjiu">
                     <img src="assets/images/gallery/g3.jpg" alt="">
                        <h4>Donate Us</h4>
                     <p>If you got any help from our service then please! donate us.</p>
                     <button class="btn btn-sm btn-danger">Go <i class="fas fa-arrow-right"></i></button>
                     </div>
                 </div>     
         </div>
     </section>
     
    
      <!-- ################# Gallery Start Here #######################--->
     
    <div id="gallery" class="gallery container-fluid">
        <div class="container">
            <div class="session-title row">
                <h2>Checkout Our Gallery</h2>
            </div>
            <div class="gallery-row row">
                    <div id="gg-screen"></div>
                    <div class="gg-box">
                            <div class="gg-element">
                                <img src="assets/images/gallery/g1.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g2.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g3.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g4.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g5.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g6.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g7.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g8.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g9.jpg">
                            </div>
                            <div class="gg-element">
                                <img src="assets/images/gallery/g10.jpg">
                            </div>
                            
                            
                          </div>
            </div>
        </div>
    </div>     
     
         <!--################### Feedback Starts Here #######################--->
        
         
        </div>

     
     

   
      <!--*************** Footer  Starts Here *************** -->
  @include("master.footer")
    
    
</body>

    @include("master.homescript")
</html>
