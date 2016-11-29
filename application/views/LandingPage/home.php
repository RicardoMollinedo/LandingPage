<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

<!-- Mirrored from themeebit.com/demos/html/materialab-v2.01/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Oct 2016 00:14:01 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conferencia Episcopal Boliviana</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/assets_landing/calendario2.css');?>">
    <!-- ====Google font==== -->
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,700,700italic,400italic,300italic,300' rel='stylesheet' type='text/css'>

    <!-- ====Open Sans==== -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,600italic,400italic,700italic,300,300italic' rel='stylesheet' type='text/css'>

    <!-- ====Bootstrap css==== -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/assets_landing/css/bootstrap.min.css')?>" />

    <!-- ====Material==== -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/assets_landing/css/mdb.min.css')?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/css/material-design-iconic-font.min.css')?>" />

    <!-- ====Font awesome css==== -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/assets_landing/css/font-awesome.min.css')?>" />


    <!-- ====Animate css==== -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/assets_landing/css/animate.css')?>" />

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <!-- ====Meanmenu css==== -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/assets_landing/css/meanmenu.min.css')?>" />


    <!-- ====VenoBox css==== -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/assets_landing/css/venobox.css')?>" />


    <!-- ====Owl carousel 2 css==== -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/assets_landing/css/owl.carousel.css')?>" />


    <!-- ====Custom css==== -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/assets_landing/style.css')?>" />


    <!-- ====Favicons==== -->
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/assets_landing/img/favicon_app.png')?>">
    <link rel="shortcut icon" type="image/png" href="
    "/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

<link rel="stylesheet" href="<?php echo base_url('assets/assets_landing/book.css');?>">
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
  $(function(){
   
      $('#compartir').css({'background-color': '#00008B'});
     
  });
  </script>
 <script>
        // initialize and setup facebook js sdk
        window.fbAsyncInit = function() {
            FB.init({
              appId      : '1264241866940216',
              xfbml      : true,
              version    : 'v2.8'
            });
            FB.getLoginStatus(function(response) {
                if (response.status === 'connected') {
                    document.getElementById('status').innerHTML = 'We are connected.';
                    document.getElementById('login').style.visibility = 'hidden';
                } else if (response.status === 'not_authorized') {
                    document.getElementById('status').innerHTML = 'We are not logged in.'
                } else {
                    document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
                }
            });
        };
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_US/sdk.js";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        
        // login with facebook with extra permissions
        function login() {
            FB.login(function(response) {
                if (response.status === 'connected') {
                    document.getElementById('status').innerHTML = 'We are connected.';
                    document.getElementById('login').style.visibility = 'hidden';
                } else if (response.status === 'not_authorized') {
                    document.getElementById('status').innerHTML = 'We are not logged in.'
                } else {
                    document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
                }
            }, {scope: 'publish_actions'});
        }
        
        // getting basic user info
        function getInfo() {
            FB.api('/me', 'GET', {fields: 'first_name,last_name,name,id'}, function(response) {
                document.getElementById('status').innerHTML = response.first_name + response.last_name;
            });
        }

        function post(){
            var obt = $('#information').text();

            FB.api('/me/feed','post',{message: obt},function(response){
                document.getElementById('status').innerHTML=response.id;
            });
        }


    </script>

</head>

    
    <body class="home-3 onepage" id="body">
        <!-- ==== PRELOADER START==== -->
        <!--div class="preloader-area">
            <div class="preloader">
                <div class="loader">
                    <div class="loader-inner pacman">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- ====PRELOADER END==== -->
        
        <!-- ====HEADER START==== -->
        <header class="header_area navbar hidden-xs">
            <div class="container-fluid">
                <div class="row top_menu_area">
                    
                    <div class="col-xs-12 col-sm-12">
                        <!-- START MENU AREA -->
                        <nav class="navbar-collapse collapse in">
                            <ul class="nav navbar-nav navbar-right menu">
                                <li class="smoth-scroll active">
                                    <a data-hover="Home" href="#body">Home</a>
                                   
                                </li>
                                <li class="smoth-scroll">
                                    <a data-hover="¿Que Ofrecemos?" href="#services">¿Que Ofrecemos?</a>
                                </li>
                                

                                <li class="smoth-scroll">
                                    <a data-hover="Tiempos Liturgicos" href="#book2">Tiempos Liturgicos</a>
                                    
                                </li>
                                
                                <li class="smoth-scroll">
                                    <a data-hover="Calendario Liturgico" href="#calendario">Calendario Liturgico</a>
                                    
                                </li>
                                <li class="smoth-scroll">
                                    <a data-hover="Hoja Dominical" href="#hoja_dominical">Hoja Dominical</a>

                                </li>
                                <li class="smoth-scroll">
                                    <a data-hover="Log In" href="http://calendario.iglesia.org.bo/index.php/profile/login">Log In</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- END MENU AREA -->
                        
                        <!-- Mobile Menu Start -->
                        <nav class="mobile_menu hidden">
                            <ul>
                                <li class="smoth-scroll">
                                    <a href="#body">Home</a>
                                    
                                </li>
                                <li class="smoth-scroll">
                                    <a href="#services">Services</a>
                                </li>
                                <li class="smoth-scroll">
                                    <a href="#about">About</a>
                                </li>
                                <li class="smoth-scroll">
                                    <a href="#Portfolio">Tiempos Liturgicos</a>
                                    <ul>
                                        <li>
                                            <a href="protfolio-1.html">Protfolio 1</a>
                                        </li>
                                        <li>
                                            <a href="protfolio-2.html">Protfolio 2</a>
                                        </li>
                                        <li>
                                            <a href="protfolio-3.html">Protfolio 3</a>
                                        </li>
                                        <li>
                                            <a href="LandingPage/case_study.html">Case Study</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="smoth-scroll">
                                    <a href="#blog">Blog</a>
                                    <ul>
                                        <li>
                                            <a href="blog_grid.html">Blog Grid</a>
                                        </li>
                                        <li>
                                            <a href="blog-left_sidebar.html">Blog Left Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="blog-right_sidebar.html">Blog Right Sidebar</a>
                                        </li>
                                        <li>
                                            <a href="single_blog-full.html">Single Blog Full</a>
                                        </li>
                                        <li>
                                           <a href="single_blog-left_sidebar.html">
                                                Single Blog Left Sidebar
                                            </a>
                                        </li>
                                        <li>
                                            <a href="single_blog-right_sidebar.html">
                                                Single Blog Right Sidebar
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="smoth-scroll">
                                    <a href="#contact">Contact US</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- Mobile Menu End -->
                    </div>
                </div>
            </div>
        </header>                         
        <!-- ====HEADER END==== -->
        
        <!-- ====SLIDER START==== --> 
        <section class="slider_area">
            <div class="slider_left_bg">
                <div class="container">
                    <div class="mainSlider">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="dtable">
                                    <div class="dcell">
                                        <div class="slider_caption text-left">
                                            <h4 class="fadeInLeft_slide animated" style="animation-delay: .4s">Bienvenido a la </h4>
                                            <h1 class="fadeInRight_slide animated" style="animation-delay: .4s">Conferencia Episcopal</h1>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="dtable">
                                    <div class="dcell">
                                        <div class="slider_caption text-left">
                                           <h4 class="fadeInLeft_slide animated" style="animation-delay: .4s">Unete</h4>
                                           <h1 class="fadeInRight_slide animated" style="animation-delay: .4s">a nosotros</h1>
                                            <p class="colorWh fadeInUp_slide animated" style="animation-delay: .4s">Inicia sesion y disfruta de las opciones del calendario liturgico</p>
                                            <a class="th_bt btn waves-effect waves-light fadeInDown_slide animated" style="animation-delay: .8s" href="#!">Registrate</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- ====SLIDER END==== -->
        
        <!-- ====FEATURE AERE==== --> 
        <section class="feature_area" id="services">
            <div class="container">
                <div class="row fix_m">
                    <div class="col-xs-12 col-sm-6 col-md-6 fix_p">
                        <div class="single_feature text-center">
                            <i class="zmdi zmdi-devices"></i>
                            <h4>Pagina de la Ceb</h4>
                            <div class="single_cap">
                            <p>Visita nuestra pagina www.iglesia.org.bo</p>
                            
                            </div>
                        </div>   
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 fix_p">
                        <div class="single_feature text-center">
                            <i class="zmdi zmdi-globe-alt"></i>
                            <h4>Facebook CEB</h4>
                            <div class="single_cap">
                            <p>Unete a nuestra comunidad</p>
                         
                            </div>
                        </div>   
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- ====FEATURE AERE END==== -->
        
        <!-- ====ABOUT US==== -->
        <section id="about" class="about_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="about_left">
                            <img src="<?php echo base_url('assets/assets_landing/img/about_image.jpg')?>" alt=""/>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="section_title">
                            <h5 class="smallHd">¿Quienes somos?</h5>
                            <h2 class="secHd">Conferencia Episcopal</h2>
                        </div>
                        <div class="about_text">
                            <p>Somos una organizacion que busca ayudar a las personas en el aspecto espiritual</p>
                           <p class="ab_text">Nuestro objetivo es el guiar a las personas por el buen camino</p>
                      
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====ABOUT US==== -->

        <!-- ====START PROJECT AREA==== -->

        <section class="project_area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single_fact text-center">
                            <div class="fact_icon">
                                <div class="RXcircleEffect"></div>
                                <i class="zmdi zmdi-case-check"></i>
                            </div>
                            <h2><span class="counter">900</span>+</h2>
                            <p>Usuarios</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single_fact text-center">
                            <div class="fact_icon">
                                <div class="RXcircleEffect"></div>
                                <i class="zmdi zmdi-code-smartphone"></i>
                            </div>
                            <h2><span class="counter">300</span>+</h2>
                            <p>Visitas </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="single_fact text-center">
                            <div class="fact_icon">
                                <div class="RXcircleEffect"></div>
                                <i class="zmdi zmdi-palette"></i>
                            </div>
                            <h2><span class="counter">400</span>+</h2>
                            <p>Registrados </p>
                        </div>
                    </div>
                    
                </div>
            </div> 
        </section>
        <!-- ====END START PROJECT AREA==== -->
        
        <!-- ====PROTFOLIO AREA==== -->
       
        <!-- ====END PROTFOLIO AREA==== -->
        
        <!-- ====START WHY CHOOSE==== -->
        <div class="row" id="calendario">
                    <div class="col-xs-12">
                        <div class="section_title mb80">
                            <br>
                            <h5 class="smallHd text-center">MIRA:</h5>
                            <h2 class="secHd text-center">CALENDARIO </h2>
                        </div>
                    </div>                                                
        </div>
<section class="skill_and_video">
            <div class="video_area">
                <div class="video_control">
                    <div class="dtable">
                        <div class="dcell">
                            <a href="https://www.youtube.com/FSalbM4cFYQ?rel=0&amp;autoplay=1" data-type="youtube" id="control" class="btn waves-effect waves-light veno">
                                <i class="zmdi zmdi-play"></i>
                            </a>
                            <h4>Mira las grabaciones</h4>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="container fix_p" id="VideoContainer">
                <div class="row">
                    <div class="col-xs-12 col-sm-offset-5 col-sm-7 section-padding skillBg">

                        <div class="row">
                            <div class="col-sm-12">
            
  <!-- inspired by http://colorhunt.co/c/8184 and 
    https://dribbble.com/shots/2407357-Calendar%60 -->

<button id="HolaPrueba">HOla</button>
    <div class="container2">

<input type="text" id="fecha" name="fechaactual" ></input>
         
      <div class="calendar" id="calendar-app">
  <div class="calendar--day-view" id="day-view">
    <span class="day-view-exit" id="day-view-exit">&times;</span>
    <span class="day-view-date" id="day-view-date">MAY 29 2016</span>
    <div class="day-view-content">
      <div class="day-highlight">
        You <span class="day-events" id="day-events">had no events for today </span>. &nbsp; <span tabindex="0" onkeyup="if(event.keyCode != 13) return; this.click();" class="day-events-link" id="add-event" data-date>Add a new event?</span>
      </div>
      <div class="day-add-event" id="add-day-event-box" data-active="false">
        <div class="row">
          <div class="half">
            <label class="add-event-label">
               Name of event
              <input type="text" class="add-event-edit add-event-edit--long" placeholder="New event" id="input-add-event-name">
             
            </label>
          </div>
          <div class="qtr">
            <label class="add-event-label">
          Start Time
              <input type="text" class="add-event-edit" placeholder="8:15" id="input-add-event-start-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
              <input type="text" class="add-event-edit" placeholder="am" id="input-add-event-start-ampm" data-options="a,p,am,pm">
            </label>
          </div>
          <div class="qtr">
            <label class="add-event-label">
          End Time
              <input type="text" class="add-event-edit" placeholder="9" id="input-add-event-end-time" data-options="1,2,3,4,5,6,7,8,9,10,11,12" data-format="datetime">
              <input type="text" class="add-event-edit" placeholder="am" id="input-add-event-end-ampm" data-options="a,p,am,pm">
            </label>
          </div>
          <div class="half">
            <a onkeyup="if(event.keyCode != 13) return; this.click();" tabindex="0" id="add-event-save" class="event-btn--save event-btn">save</a>
            <a tabindex="0" id="add-event-cancel" class="event-btn--cancel event-btn">cancel</a>
          </div>
        </div>
        
      </div>
      <div id="day-events-list" class="day-events-list">
        
      </div>
      <div class="day" id="inspirational-quote">
        Every child is an artist.  The problem is how to remain an artist once he grows up. –Pablo Picasso
      </div>
    </div>
  </div>
  <div class="calendar--view" id="calendar-view">
    <div class="cview__month">
      <span class="cview__month-last" id="calendar-month-last">Apr</span>
      <span class="cview__month-current" id="calendar-month">May</span>
      <span class="cview__month-next" id="calendar-month-next">Jun</span>
    </div>
    <div class="cview__header">Dom</div>
    <div class="cview__header">Lun</div>
    <div class="cview__header">Mar</div>
    <div class="cview__header">Mie</div>
    <div class="cview__header">Jue</div>
    <div class="cview__header">Vie</div>
    <div class="cview__header">Sab</div>
    <div class="calendar--view" id="dates">
    </div>
  </div>
  <div class="footer">
    <span><span id="footer-date" class="footer__link">Today is May 30</span></span>    
  </div>
</div>
<input type="text" id="fecha" name="fechaactual" ></input>
    












 <script>
 $('#HolaPrueba').click(function(){

    $.ajax({
       type: "POST",
       url: "<?php base_url('index.php/home/read/'); ?>",
       data: {'Hoy':'South Park 2016'},
       success: function(data){
         
        console.log('-ya funciona ');
       }
  }
    );

 });
   function CalendarApp(date) {
  
  if (!(date instanceof Date)) {
    date = new Date();
  }
  
  this.days = ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'];
  this.months = ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'];
  this.quotes = ['Whatever the mind of man can conceive and believe, it can achieve. –Napoleon Hill', 'Strive not to be a success, but rather to be of value. –Albert Einstein', 'Two roads diverged in a wood, and I—I took the one less traveled by, And that has made all the difference.  –Robert Frost', 'I attribute my success to this: I never gave or took any excuse. –Florence Nightingale', 'You miss 100% of the shots you don’t take. –Wayne Gretzky', 'The most difficult thing is the decision to act, the rest is merely tenacity. –Amelia Earhart', 'Every strike brings me closer to the next home run. –Babe Ruth', 'Definiteness of purpose is the starting point of all achievement. –W. Clement Stone', 'Life isn’t about getting and having, it’s about giving and being. –Kevin Kruse', 'Life is what happens to you while you’re busy making other plans. –John Lennon', 'We become what we think about. –Earl Nightingale', 'Life is 10% what happens to me and 90% of how I react to it. –Charles Swindoll', 'The most common way people give up their power is by thinking they don’t have any. –Alice Walker', 'The mind is everything. What you think you become.  –Buddha', 'Winning isn’t everything, but wanting to win is. –Vince Lombardi', 'Every child is an artist.  The problem is how to remain an artist once he grows up. –Pablo Picasso', ' You can never cross the ocean until you have the courage to lose sight of the shore. –Christopher Columbus', 'I’ve learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel. –Maya Angelou', 'Either you run the day, or the day runs you. –Jim Rohn', 'Whether you think you can or you think you can’t, you’re right. –Henry Ford', 'The two most important days in your life are the day you are born and the day you find out why. –Mark Twain', 'Whatever you can do, or dream you can, begin it.  Boldness has genius, power and magic in it. –Johann Wolfgang von Goethe', 'The best revenge is massive success. –Frank Sinatra', 'People often say that motivation doesn’t last. Well, neither does bathing.  That’s why we recommend it daily. –Zig Ziglar', 'Life shrinks or expands in proportion to one’s courage. –Anais Nin', 'If you hear a voice within you say “you cannot paint,” then by all means paint and that voice will be silenced. –Vincent Van Gogh', 'There is only one way to avoid criticism: do nothing, say nothing, and be nothing. –Aristotle', 'Ask and it will be given to you; search, and you will find; knock and the door will be opened for you. –Jesus', 'The only person you are destined to become is the person you decide to be. –Ralph Waldo Emerson', 'Go confidently in the direction of your dreams.  Live the life you have imagined. –Henry David Thoreau',  'Few things can help an individual more than to place responsibility on him, and to let him know that you trust him.  –Booker T. Washington'];
  this.apts = [
    {
      name: 'Finish this web app',
      endTime: new Date(2016, 4, 30, 23),
      startTime: new Date(2016, 4, 30, 21),
      day: new Date(2016, 4, 30).toString()
    },
     {
      name: 'My Birthday!',
      endTime: new Date(2016, 4, 1, 23, 59),
      startTime: new Date(2016, 4, 1, 0),
      day: new Date(2016, 4, 1).toString()
    },
    
  ];
  
  this.aptDates = [new Date(2016, 4, 30).toString(),new Date(2016, 4, 1).toString()];
  this.eles = {
  };
  this.calDaySelected = null;
  
  this.calendar = document.getElementById("calendar-app");
  
  this.calendarView = document.getElementById("dates");
  
  this.calendarMonthDiv = document.getElementById("calendar-month");
  this.calendarMonthLastDiv = document.getElementById("calendar-month-last");
  this.calendarMonthNextDiv = document.getElementById("calendar-month-next");
  
  this.dayInspirationalQuote = document.getElementById("inspirational-quote");
   
  this.todayIsSpan = document.getElementById("footer-date");
  // this.eventsCountSpan = document.getElementById("footer-events");
  this.dayViewEle = document.getElementById("day-view");
  this.dayViewExitEle = document.getElementById("day-view-exit");
  this.dayViewDateEle = document.getElementById("day-view-date");
  this.addDayEventEle = document.getElementById("add-event");
  this.dayEventsEle = document.getElementById("day-events");
  
  this.dayEventAddForm = {
    cancelBtn: document.getElementById("add-event-cancel"),
    addBtn: document.getElementById("add-event-save"),
    nameEvent:  document.getElementById("input-add-event-name"),
    startTime:  document.getElementById("input-add-event-start-time"),
    endTime:  document.getElementById("input-add-event-end-time"),
    startAMPM:  document.getElementById("input-add-event-start-ampm"),
    endAMPM:  document.getElementById("input-add-event-end-ampm")
  };
  this.dayEventsList = document.getElementById("day-events-list");
  this.dayEventBoxEle = document.getElementById("add-day-event-box");
  
  /* Start the app */
  this.showView(date);
  this.addEventListeners();
  this.todayIsSpan.textContent = "Today is " +  this.months[date.getMonth()] + " " + date.getDate();  
}

CalendarApp.prototype.addEventListeners = function(){
  
  this.calendar.addEventListener("click", this.mainCalendarClickClose.bind(this));
  this.todayIsSpan.addEventListener("click", this.showView.bind(this));
  this.calendarMonthLastDiv.addEventListener("click", this.showNewMonth.bind(this));
  this.calendarMonthNextDiv.addEventListener("click", this.showNewMonth.bind(this));
  this.dayViewExitEle.addEventListener("click", this.closeDayWindow.bind(this));
  this.dayViewDateEle.addEventListener("click", this.showNewMonth.bind(this));
  this.addDayEventEle.addEventListener("click", this.addNewEventBox.bind(this));
  this.dayEventAddForm.cancelBtn.addEventListener("click", this.closeNewEventBox.bind(this));
  this.dayEventAddForm.cancelBtn.addEventListener("keyup", this.closeNewEventBox.bind(this));
  
  this.dayEventAddForm.startTime.addEventListener("keyup",this.inputChangeLimiter.bind(this));
  this.dayEventAddForm.startAMPM.addEventListener("keyup",this.inputChangeLimiter.bind(this));
  this.dayEventAddForm.endTime.addEventListener("keyup",this.inputChangeLimiter.bind(this));
  this.dayEventAddForm.endAMPM.addEventListener("keyup",this.inputChangeLimiter.bind(this));
  this.dayEventAddForm.addBtn.addEventListener("click",this.saveAddNewEvent.bind(this));

};
CalendarApp.prototype.showView = function(date){
  if ( !date || (!(date instanceof Date)) ) date = new Date();
  var now = new Date(date),
      y = now.getFullYear(),
      m = now.getMonth();
  var today = new Date();
  
  var lastDayOfM = new Date(y, m + 1, 0).getDate();
  var startingD = new Date(y, m, 1).getDay();
  var lastM = new Date(y, now.getMonth()-1, 1);
  var nextM = new Date(y, now.getMonth()+1, 1);
 
  this.calendarMonthDiv.classList.remove("cview__month-activate");
  this.calendarMonthDiv.classList.add("cview__month-reset");
  
  while(this.calendarView.firstChild) {
    this.calendarView.removeChild(this.calendarView.firstChild);
  }
  
  // build up spacers
  for ( var x = 0; x < startingD; x++ ) {
    var spacer = document.createElement("div");
    spacer.className = "cview--spacer";
    this.calendarView.appendChild(spacer);
  }
  
  for ( var z = 1; z <= lastDayOfM; z++ ) {
   
    var _date = new Date(y, m ,z);
    var day = document.createElement("div");
    day.className = "cview--date";
    day.textContent = z;
    day.setAttribute("data-date", _date);
    day.onclick = this.showDay.bind(this);

    day.submit;
    
    // check if todays date
    if ( z == today.getDate() && y == today.getFullYear() && m == today.getMonth() ) {
      day.classList.add("today");
    }
    
     // check if has events to show
    if ( this.aptDates.indexOf(_date.toString()) !== -1 ) {
      day.classList.add("has-events");
    }
    
    this.calendarView.appendChild(day);
  }
  
  var _that = this;
  setTimeout(function(){
    _that.calendarMonthDiv.classList.add("cview__month-activate");
  }, 50);
  
  this.calendarMonthDiv.textContent = this.months[now.getMonth()] + " " + now.getFullYear();
  this.calendarMonthDiv.setAttribute("data-date", now);

  
  this.calendarMonthLastDiv.textContent = "← " + this.months[lastM.getMonth()];
  this.calendarMonthLastDiv.setAttribute("data-date", lastM);
  
  this.calendarMonthNextDiv.textContent = this.months[nextM.getMonth()] + " →";
  this.calendarMonthNextDiv.setAttribute("data-date", nextM);
  
}
CalendarApp.prototype.showDay = function(e, dayEle) {
  e.stopPropagation();
  if ( !dayEle ) {
    dayEle = e.currentTarget;
  }
  var dayDate = new Date(dayEle.getAttribute('data-date'));
  //-------------
    var dias = new Date(dayEle);
//----------------
  this.calDaySelected = dayEle;

// var pruebas= "<?php echo $Prueba; ?>"
 //console.log("La prueba final"+pruebas);

 
 this.openDayWindow(dayDate);
  

  
};


CalendarApp.prototype.openDayWindow = function(date){
  
  var now = new Date();
  var day = new Date(date);
  this.dayViewDateEle.textContent = this.days[day.getDay()] + ", " + this.months[day.getMonth()] + " " + day.getDate() + ", " + day.getFullYear();
  this.dayViewDateEle.setAttribute('data-date', day);
  this.dayViewEle.classList.add("calendar--day-view-active");
  
  /* Contextual lang changes based on tense. Also show btn for scheduling future events */
  var _dayTopbarText = '';
  if ( day < new Date(now.getFullYear(), now.getMonth(), now.getDate())) {
    _dayTopbarText = "had ";
    this.addDayEventEle.style.display = "none";
  } else {
     _dayTopbarText = "have ";
     this.addDayEventEle.style.display = "inline";
  }
  this.addDayEventEle.setAttribute("data-date", day);
  
  var eventsToday = this.showEventsByDay(day);
 
  //this.dayEventsList.innerHTML = this.showEventsCreateHTMLView(eventsToday);
  while(this.dayEventsList.firstChild) {
    this.dayEventsList.removeChild(this.dayEventsList.firstChild);
  }
  
  this.dayEventsList.appendChild(this.showEventsCreateElesView(eventsToday));
var Hoy=day.getDate();
console.log("Aqui hay mas problemas en el dia: "+Hoy);
     $.ajax({
       url: "<?php echo base_url('index.php/home/read'); ?>",
       type: "POST",
       
       data: {'Hoy':Hoy},
       success: function(data){
         
        console.log(Hoy+'-ya funciona');
       }
  }
    );


     var variable_post="Mi texto recargado";
       /// Invocamos a nuestro script PHP
    $.post("read", { variable: Hoy }, function(data){
       /// Ponemos la respuesta de nuestro script en el DIV recargado
    
    });         
  "<?php foreach($leidita as $lect):  ?>" 

  if(day.getDate()=="<?php echo $lect['lct_id'];?>")
  {



console.log(' Verificacion si da ');
  //"<?php $variablephp=date('d'); echo $variablephp;if($variablephp){ ?>"
  this.dayEventsEle.textContent = _dayTopbarText + "events ondsa ya" +this.months[day.getMonth()] + "," + day.getDate() + ", " + day.getFullYear();
 // "<?php } ?>"
 var prueba=day.getDate();
 var Descripcion="<?php echo $lect['lct_description']?>";
 this.dayInspirationalQuote.textContent = ''+Descripcion+"<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds<br>dasdasdasds";

  console.log(prueba+" carajo south");
  //document.getElementById("fecha").value(day.getDate());
  }
  else{

    this.dayEventsEle.textContent = _dayTopbarText + "events ondsa ya" +this.months[day.getMonth()] + "," + day.getDate() + ", " + day.getFullYear();
  }

"<?php endforeach; ?>"
};

CalendarApp.prototype.showEventsCreateElesView = function(events) {
  var ul = document.createElement("ul");
  ul.className = 'day-event-list-ul';
  events = this.sortEventsByTime(events);
  var _this = this;
  events.forEach(function(event){
    var _start = new Date(event.startTime);
    var _end = new Date(event.endTime);
    var idx = event.index;
    var li = document.createElement("li");
    li.className = "event-dates";
    // li.innerHtml
    var html = "<span class='start-time'>" + _start.toLocaleTimeString(navigator.language,{hour: '2-digit', minute:'2-digit'}) + "</span> <small>through</small> ";
    html += "<span class='end-time'>" + _end.toLocaleTimeString(navigator.language,{hour: '2-digit', minute:'2-digit'}) + ( (_end.getDate() != _start.getDate()) ? ' <small>on ' + _end.toLocaleDateString() + "</small>" : '') +"</span>";
    

    html += "<span class='event-name'>" + event.name + "</span>";
    
    var div = document.createElement("div");
    div.className = "event-dates";
    div.innerHTML = html;
    
    var deleteBtn = document.createElement("span");
    var deleteText = document.createTextNode("delete");
    deleteBtn.className = "event-delete";
    deleteBtn.setAttribute("data-idx", idx);
    deleteBtn.appendChild(deleteText);
    deleteBtn.onclick = _this.deleteEvent.bind(_this);
    
    div.appendChild(deleteBtn);
    
    li.appendChild(div);
    ul.appendChild(li);
  });
  return ul;
};
CalendarApp.prototype.deleteEvent = function(e) {
  var deleted = this.apts.splice(e.currentTarget.getAttribute("data-idx"),1);
  var deletedDate = new Date(deleted[0].day);
  var anyDatesLeft = this.showEventsByDay(deletedDate);
  if ( anyDatesLeft === false ) {
    // safe to remove from array
    var idx = this.aptDates.indexOf(deletedDate.toString());
    if (idx >= 0) {
       this.aptDates.splice(idx,1);
      // remove dot from calendar view
      var ele = document.querySelector('.cview--date[data-date="'+ deletedDate.toString() +'"]');
      if ( ele ) {
        ele.classList.remove("has-events");
      }
    }
  }
  this.openDayWindow(deletedDate);;
};
CalendarApp.prototype.sortEventsByTime = function(events) {
  if (!events) return [];
  return events.sort(function compare(a, b) {
    if (new Date(a.startTime) < new Date(b.startTime)) {
      return -1;
    }
    if (new Date(a.startTime) > new Date(b.startTime)) {
      return 1;
    }
    // a must be equal to b
    return 0;
  });
};
CalendarApp.prototype.showEventsByDay = function(day) {
  var _events = [];
  this.apts.forEach(function(apt, idx){
    if ( day.toString() == apt.day.toString() ) {
      apt.index = idx;
      _events.push(apt);
    }
  });
  return (_events.length) ? _events : false;
};
CalendarApp.prototype.closeDayWindow = function(){
  this.dayViewEle.classList.remove("calendar--day-view-active");
  this.closeNewEventBox();
};
CalendarApp.prototype.mainCalendarClickClose = function(e){
  if ( e.currentTarget != e.target ) {
    return;
  }
  
  this.dayViewEle.classList.remove("calendar--day-view-active");
  this.closeNewEventBox();
};
CalendarApp.prototype.addNewEventBox = function(e){
  var target = e.currentTarget;
  this.dayEventBoxEle.setAttribute("data-active", "true"); 
  this.dayEventBoxEle.setAttribute("data-date", target.getAttribute("data-date"));
  
};
CalendarApp.prototype.closeNewEventBox = function(e){
  
  if (e && e.keyCode && e.keyCode != 13) return false;
  
  this.dayEventBoxEle.setAttribute("data-active", "false");
  // reset values
  this.resetAddEventBox();
  
};
CalendarApp.prototype.saveAddNewEvent = function() {
  var saveErrors = this.validateAddEventInput();
  if ( !saveErrors ) {
    this.addEvent();
  }
};

CalendarApp.prototype.addEvent = function() {
  
  var name = this.dayEventAddForm.nameEvent.value.trim();
  var dayOfDate = this.dayEventBoxEle.getAttribute("data-date");
  var dateObjectDay =  new Date(dayOfDate);
  var cleanDates = this.cleanEventTimeStampDates();
  
  this.apts.push({
    name: name,
    day: dateObjectDay,
    startTime: cleanDates[0],
    endTime: cleanDates[1]
  });
  this.closeNewEventBox();
  this.openDayWindow(dayOfDate);
  this.calDaySelected.classList.add("has-events");
  // add to dates
  if ( this.aptDates.indexOf(dateObjectDay.toString()) === -1 ) {
    this.aptDates.push(dateObjectDay.toString());
  }
  
};
CalendarApp.prototype.convertTo23HourTime = function(stringOfTime, AMPM) {
  // convert to 0 - 23 hour time
  var mins = stringOfTime.split(":");
  var hours = stringOfTime.trim();
  if ( mins[1] && mins[1].trim() ) {
    hours = parseInt(mins[0].trim());
    mins = parseInt(mins[1].trim());
  } else {
    hours = parseInt(hours);
    mins = 0;
  }
  hours = ( AMPM == 'am' ) ? ( (hours == 12) ? 0 : hours ) : (hours <= 11) ? parseInt(hours) + 12 : hours;
  return [hours, mins];
};
CalendarApp.prototype.cleanEventTimeStampDates = function() {
  
  var startTime = this.dayEventAddForm.startTime.value.trim() || this.dayEventAddForm.startTime.getAttribute("placeholder") || '8';
  var startAMPM = this.dayEventAddForm.startAMPM.value.trim() || this.dayEventAddForm.startAMPM.getAttribute("placeholder") || 'am';
  startAMPM = (startAMPM == 'a') ? startAMPM + 'm' : startAMPM;
  var endTime = this.dayEventAddForm.endTime.value.trim() || this.dayEventAddForm.endTime.getAttribute("placeholder") || '9';
  var endAMPM = this.dayEventAddForm.endAMPM.value.trim() || this.dayEventAddForm.endAMPM.getAttribute("placeholder") || 'pm';
  endAMPM = (endAMPM == 'p') ? endAMPM + 'm' : endAMPM;
  var date = this.dayEventBoxEle.getAttribute("data-date");
  
  var startingTimeStamps = this.convertTo23HourTime(startTime, startAMPM);
  var endingTimeStamps = this.convertTo23HourTime(endTime, endAMPM);
  
  var dateOfEvent = new Date(date);
  var startDate = new Date(dateOfEvent.getFullYear(), dateOfEvent.getMonth(), dateOfEvent.getDate(), startingTimeStamps[0], startingTimeStamps[1]);
  var endDate = new Date(dateOfEvent.getFullYear(), dateOfEvent.getMonth(), dateOfEvent.getDate(), endingTimeStamps[0], endingTimeStamps[1]);
  
  // if end date is less than start date - set end date back another day
  if ( startDate > endDate ) endDate.setDate(endDate.getDate() + 1);
  
  return [startDate, endDate];
  
};
CalendarApp.prototype.validateAddEventInput = function() {

  var _errors = false;
  var name = this.dayEventAddForm.nameEvent.value.trim();
  var startTime = this.dayEventAddForm.startTime.value.trim();
  var startAMPM = this.dayEventAddForm.startAMPM.value.trim();
  var endTime = this.dayEventAddForm.endTime.value.trim();
  var endAMPM = this.dayEventAddForm.endAMPM.value.trim();
  
  if (!name || name == null) {
    _errors = true;
    this.dayEventAddForm.nameEvent.classList.add("add-event-edit--error");
    this.dayEventAddForm.nameEvent.focus();
  } else {
     this.dayEventAddForm.nameEvent.classList.remove("add-event-edit--error");
  }
  
//   if (!startTime || startTime == null) {
//     _errors = true;
//     this.dayEventAddForm.startTime.classList.add("add-event-edit--error");
//   } else {
//      this.dayEventAddForm.startTime.classList.remove("add-event-edit--error");
//   }
  
  return _errors;
  
  
};
var timeOut = null;
var activeEle = null;
CalendarApp.prototype.inputChangeLimiter = function(ele) {
  
  if ( ele.currentTarget ) {
    ele = ele.currentTarget;
  }
  if (timeOut && ele == activeEle){
    clearTimeout(timeOut);
  }
  
  var limiter = CalendarApp.prototype.textOptionLimiter;

  var _options = ele.getAttribute("data-options").split(",");
  var _format = ele.getAttribute("data-format") || 'text';
  timeOut = setTimeout(function(){
    ele.value = limiter(_options, ele.value, _format);
  }, 600);
  activeEle = ele;
  
};
CalendarApp.prototype.textOptionLimiter = function(options, input, format){
  if ( !input ) return '';
  
  if ( input.indexOf(":") !== -1 && format == 'datetime' ) {
 
    var _splitTime = input.split(':', 2);
    if (_splitTime.length == 2 && !_splitTime[1].trim()) return input;
    var _trailingTime = parseInt(_splitTime[1]);
    /* Probably could be coded better -- a block to clean up trailing data */
    if (options.indexOf(_splitTime[0]) === -1) {
      return options[0];
    }
    else if (_splitTime[1] == "0" ) {
      return input;
    }
    else if (_splitTime[1] == "00" ) {
      return _splitTime[0] +  ":00";
    }
    else if (_trailingTime < 10 ) {
      return _splitTime[0] + ":" + "0" + _trailingTime;
    }
    else if ( !Number.isInteger(_trailingTime) || _trailingTime < 0 || _trailingTime > 59 )  {
      return _splitTime[0];
    } 
    return _splitTime[0] + ":" + _trailingTime;
  }
  if ((input.toString().length >= 3) ) {
    var pad = (input.toString().length - 4) * -1;
    var _hour, _min;
    if (pad == 1) {
      _hour = input[0];
      _min = input[1] + input[2];
    } else {
      _hour = input[0] + input[1];
      _min = input[2] + input[3];
    }
    
    _hour = Math.max(1,Math.min(12,(_hour)));
    _min = Math.min(59,(_min));
    if ( _min < 10 ) { 
      _min = "0" + _min;
    }
    _min = (isNaN(_min)) ? '00' : _min;
    _hour = (isNaN(_hour)) ? '9' : _hour ;

    return _hour + ":" + _min;
    
  }

  if (options.indexOf(input) === -1) {
    return options[0];
  }
  
  return input;
};
CalendarApp.prototype.resetAddEventBox = function(){
  this.dayEventAddForm.nameEvent.value = '';
  this.dayEventAddForm.nameEvent.classList.remove("add-event-edit--error");
  this.dayEventAddForm.endTime.value = '';
  this.dayEventAddForm.startTime.value = '';
  this.dayEventAddForm.endAMPM.value = '';
  this.dayEventAddForm.startAMPM.value = '';
};
CalendarApp.prototype.showNewMonth = function(e){
  var date = e.currentTarget.dataset.date;
  var newMonthDate = new Date(date);
  this.showView(newMonthDate);
  this.closeDayWindow();
  return true;
};

var calendar = new CalendarApp();
console.log(calendar);





  </script>

    </div>
    

                            </div>
                        </div>
                        <!-- FINAL CARD --> 
                    </div>
                </div>
            </div>   
        </section>
        <!-- ====END WHY CHOOSE==== -->
        
        <!-- ====START SERVICE AREA==== -->
        
        <!-- ====START OUR TEAM AREA==== -->
        
        <!-- ====START OUR TEAM AREA==== -->
        
        <!-- ====START PROCESS TABLE==== -->
       
        
        <!-- ====END PROCESS TABLE==== -->
        
        <!-- ====START SKILL AND VEDIO TABLE==== -->
       
        <!-- ====END SKILL AND VEDIO TABLE==== -->
        
        <!-- ====START PRICING TABLE==== -->
       
        <!-- ====END PRICING TABLE==== -->
        
        <!-- ====START CLIENT PART==== -->
       
        <!-- ====END CLIENT PART==== -->
        
        <!-- ====START PARTNER==== -->
       
        <!-- ====END PARTNER==== -->
        
        <!-- ====START BLOG TABLE==== -->
  
          <br>
          <br>
</section>
        <!-- ====BREADCUM END==== -->
        
        <!-- ====START CASE STUDY TABLE==== -->

<div><br></div>
<div><br></div>
<section id="head-book">
<div class="section_title mb80" >
                            <h5 class="smallHd text-center">Conoce todo sobre:</h5>
                            <h2 class="secHd text-center">TIEMPOS LITURGICOS</h2>
                        </div>

</section>  
          <br>

<section class="body2" id="book2"></section>

<div class='book' id="booklet">
 <?php foreach($reader as $fields):  ?> 
  <div id='page-1' class='page no-anim'>  
  
    <div class='side-1' id='p1'>

      <div class='content'>
      

        <h1><?php echo $fields['ltt_name'] ?></h1>
        <p>
        <div class="Liturgic_titles">Introduccion </div><br>
        <?php echo $fields['ltt_introduction']; ?><br>
        <div class="Liturgic_titles">Instruccion </div> <br>
        <?php echo $fields['ltt_instructions']; ?> <br>
        <div class="Liturgic_titles">Normas </div> <br>
        <?php echo $fields['ltt_rules']; ?>
        </p>
       

      </div><!-- .content -->
      
    </div><!-- .side-1 -->    
 
    <div class='side-2' id='p2'>      
      <div class='content'>
        
      </div><!-- .content -->
    </div><!-- .side-2 -->
    
  </div><!-- .page -->
   <?php endforeach; ?>

</div>
        <!--fin libro -->

        <!-- ====INICIO HOJA DOMINICAL==== -->

        <div class="row" id="hoja_dominical">
            <div class="col-xs-12">
                <div class="section_title mb80">
                    <br>
                    <h5 class="smallHd text-center">ENTERATE DE LA ÚLTIMA:</h5>
                    <h2 class="secHd text-center">HOJA DOMINICAL </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12" ALIGN="CENTER">
                <iframe src="<?php echo base_url()?>assets/Hoja_dominical.pdf" width="50%" height="450px"></iframe>
            </div>
        </div>

        <!-- ====FIN HOJA DOMINICAL==== -->



        <!-- ====START GOOGLE API AREA==== -->
        <br>

        <section id="contact" class="map-area">
            <div class="contact_google_map" align="center">
                <iframe width="1250" height="768" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/streetview?location=-16.4951657%2C-68.136699&key=AIzaSyBY6Rk7jiJ8X_efINdPCNn_H4IcN6T97G8" allowfullscreen></iframe>
            </div>

        </section>

        <!-- ====FINISH GOOGLE API AREA==== -->


        <!-- ====END BLOG TABLE==== -->
        
        <!-- ====START SUBSCRIBE==== -->
       
        <!-- ====END SUBSCRIBE==== -->
        
        <!-- ====START CONTACT AREA==== -->
      
        <!-- ====END CONTACT==== -->
        
        <!-- ====START SOCIAL Link==== -->
      
       
        <!-- ====END FOOTER TOP==== -->
        
        <!-- ====START FOOTER AREA==== -->
        <footer class="footer_area">
            
            <div class="footer_bottom">
                <div class="container">
                    <div class="ft_area">
                        <div class="row">
                            <div class="col-md-9 fix_p_l">
                                <nav>
                                    <ul class="ft_bottom">      

                                   
                                        <li><a href="#body">Home</a></li>
                                        <li><a href="#services">¿Que Ofrecemos?</a></li>
                                        <li><a href="#book2"> Tiempos Liturgicos </a></li>
                                        <li><a href="#calendario">Calendario Liturgico</a></li>
                                        <li><a href="#hoja_dominical">Hoja Dominical</a></li>
                                       
                                        
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-5 fix_p">
                                <div class="ft_paragraph">
     <!--
                                    <p>©2016 Design by <a href="https://www.behance.net/googoling">Faridul Haque</a> and Develop by <a href="http://themeebit.com/">ThemeeBiT</a>.</p>
     -->
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>              
        </footer>
        <!-- ====END FOOTER AREA==== -->
        
        <!-- ====jQuery Latest version==== -->
         <script src="<?php echo base_url('assets/assets_landing/js/vendor/jquery-1.12.0.min.js')?>"></script>

<!-- ====Google Maps API==== -->


<!-- ====Material==== -->
<script src="<?php echo base_url('assets/assets_landing/js/mdb.min.js')?>"></script>

<!-- ====Bootstrap JS==== -->
<script src="<?php echo base_url('assets/assets_landing/js/bootstrap.min.js')?>"></script>

<!-- ====jQuery Counterup==== -->
<script src="<?php echo base_url('assets/assets_landing/js/waypoints.min.js')?>"></script>
<script src="<?php echo base_url('assets/assets_landing/js/jquery.counterup.min.js')?>"></script>

<!-- ====jQuery Meanmenu==== -->
<script src="<?php echo base_url('assets/assets_landing/js/jquery.meanmenu.min.js')?>"></script>

<!-- ====jQuery easing==== -->
<script src="<?php echo base_url('assets/assets_landing/js/jquery.easing.1.3.min.js')?>"></script>

<!-- ====jQuery owl carousel==== -->
<script src="<?php echo base_url('assets/assets_landing/js/owl.carousel.min.js')?>"></script>

<!-- ====jQuery parallax==== -->
<script src="<?php echo base_url('assets/assets_landing/js/jquery.parallax-1.1.3.js')?>"></script>

<!-- ====jQuery isotop==== -->
<script src="<?php echo base_url('assets/assets_landing/js/isotope.pkgd.min.js')?>"></script>

<!-- ====jQuery Packery==== -->
<script src="<?php echo base_url('assets/assets_landing/js/packery.js')?>"></script>

<!-- ====jQuery VenoBox==== -->
<script src="<?php echo base_url('assets/assets_landing/js/venobox.min.js')?>"></script>

<!-- ====jQuery appear and knob==== -->
<script src="<?php echo base_url('assets/assets_landing/js/jquery.knob.min.js')?>"></script>

<!--Opacity & Other IE fix for older browser-->
<!--[if lte IE 8]>
<script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
<![endif]-->

<!-- ====jQuery main script==== -->

<script src="<?php echo base_url('assets/assets_landing/js/main.js')?>"></script>
 <script src="<?php echo base_url();?>assets/assets_landing/js/book.js"></script>
 <script src="<?php echo base_url('assets/assets_landing/js/calendar.js');?>"></script>
 






</body>

<!-- Mirrored from themeebit.com/demos/html/materialab-v2.01/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Oct 2016 00:14:01 GMT -->
</html>