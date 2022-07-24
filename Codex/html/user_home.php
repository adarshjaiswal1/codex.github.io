<?php
  session_start();

  if(!isset($_SESSION['username']))
  {
    echo "Your're logged out";
    header('location:login_form.html');
  }

?>

<!DOCTYPE html>
<Html>
    <head>
        <title>
            Home
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="icon" href="images/icon.png">
        <link rel="stylesheet" href="user_home_style.css">
    </head>
    <body>
         <section class="banner">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
              <div class="item active">
                <img src="images/giphy1.gif" alt="error">
                <div class="carousel-caption">
                  <h2>Talk is cheap</h2>
                  <p>Show me the Code</p>
                </div>
              </div>

              <div class="item">
                <img src="images/giphy2.gif" alt="error">
                <div class="carousel-caption">
                  <h2>Gamer's don't die</h2>
                  <p>THEY RESPAWN</p>
                </div>
              </div>
          
              <div class="item">
                <img src="images/giphy3.gif" alt="error"> 
                <div class="carousel-caption">
                  <h2>While(!(Succeed=try()));</h2>
                 
                </div>
              </div>
              <div class="item">
                <img src="images/giphy4.gif" alt="error"> 
                <div class="carousel-caption">
                  <h2>Hello maniacs</h2>
                  <p>Let's make some Fantastic robots </p>
                </div>
              </div>
            
            </div>
          
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                
              </div>
              <header>
                <a class="logo" href="user_home.php"><img src="images/icon.png " width="100" alt=""></a>
              
              <div class="navbar">
                <ul>
                  <li><a href="user_home.php">HOME</a></li>
                  <li class="dropdown"><a href="/Codex/html/After login/events/events.php">EVENTS</a></li>
                  <li><a href="#about">ABOUT US</a></li>
                  <li><a href="#contact">CONTACT</a></li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="/Codex/html/user dashboard/user_dashboard.php" name="username"><?php echo $_SESSION['username'] ; ?>
                            <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                           <li><a href="logout.php">logout</a></li>
                        </ul>
                 </li>          
                </ul>
              </div>
              </header>
            </div>
          </nav>

        </section>
        <a name="about"></a>
        <section class="sec about" id="About">
          <div class="content">
              <div class="mxw800p">
                 <h3>Who We Are ?</h3>
                 <p>
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                   Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                 </p>
                 <a href="#" class="btn">Read more</a>
              </div>
          </div>
      </section>
      <section class="sec" id="About">
          <div class="content">
              <div class="mxw800p">
                 <h3>What We Do ?</h3>
                 <p>
                  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  
                 </p>
                 <a href="#" class="btn">Read more</a>
              </div>
              <div class="work">
                  <div class="box">
                      <div class="iconBox">
                          <img src="images/design7.png" alt="">
                      </div>
                      <div class="content">
                          <h2>Development</h2>
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                          </p>
                      </div>
                  </div>
                  <div class="box">
                      <div class="iconBox">
                          <img src="images/pen_8.png" alt="">
                      </div>
                      <div class="content">
                          <h2>Hacathons</h2>
                          <p>
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <a name="contact"></a>
      <section class="Contact_Us">
        <div class="container1">
            <div class="contactinfo">
                <div>
                    <h2>Contact Info</h2>
                <ul class="info">
                    <li>
                        <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="24" height="24"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M85.94983,14.319c-27.63467,0 -50.1165,22.47467 -50.1165,50.1165c0,32.12817 42.77067,84.323 44.591,86.53033l5.5255,6.70083l5.5255,-6.70083c1.82033,-2.20017 44.591,-54.40217 44.591,-86.53033c0,-27.63467 -22.48183,-50.1165 -50.1165,-50.1165zM100.35483,83.0545l-10.13367,10.13367l-28.68817,-28.68817l28.724,-28.73117l10.13367,10.13367l-18.59033,18.5975z"></path></g></g></svg></span>
                        <span>lorem ipsum vasor isbui
                        </span>
                    </li>
                    <li>
                        <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="24" height="24"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M86,94.20583l-71.595,-38.66417c0.93167,-11.03667 10.17667,-19.70833 21.42833,-19.70833h100.33333c11.25167,0 20.49667,8.67167 21.42833,19.70833zM93.16667,121.83333c0,12.18333 3.3325,21.53583 8.02667,28.66667h-65.36c-11.86083,0 -21.5,-9.63917 -21.5,-21.5v-61.31083l69.1225,37.37417c0.78833,0.43 1.64833,0.645 2.54417,0.645c0.89583,0 1.75583,-0.215 2.54417,-0.645l4.6225,-2.50833zM157.66667,67.68917v21.35667c-4.33583,-0.82417 -11.64583,-3.15333 -16.48333,-9.5675c-0.5375,-0.71667 -1.14667,-1.32583 -1.8275,-1.89917zM132.58333,164.83333c-0.29383,0 -0.58408,-0.03583 -0.87075,-0.1075c-0.31175,-0.07883 -31.37925,-8.24525 -31.37925,-42.8925v-21.57883c0,-1.978 1.60533,-3.58333 3.58333,-3.58333c0.1505,0 16.30058,-0.2365 25.8,-12.9c1.35092,-1.806 4.38242,-1.806 5.73333,0c9.49942,12.6635 25.6495,12.9 25.81075,12.9c1.97083,0.01075 3.57258,1.6125 3.57258,3.58333v21.57883c0,34.64725 -31.0675,42.81367 -31.37925,42.8925c-0.28667,0.07167 -0.57692,0.1075 -0.87075,0.1075z"></path></g></g></svg></span>
                        <span>loremipsum@gmail.com
                        </span>
                    </li>
                    <li>
                        <span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                            width="24" height="24"
                            viewBox="0 0 172 172"
                            style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M127.15234,14.27734c-2.18814,0.00053 -4.1576,1.32735 -4.98005,3.35504c-0.82245,2.02769 -0.33375,4.35156 1.23575,5.87624l12.32471,12.32471h-40.77441c-1.93842,-0.02741 -3.74144,0.99102 -4.71865,2.66532c-0.97721,1.6743 -0.97721,3.74507 0,5.41937c0.97721,1.6743 2.78023,2.69273 4.71865,2.66532h40.77441l-12.32471,12.32471c-1.40412,1.34815 -1.96971,3.35005 -1.47866,5.23364c0.49105,1.88359 1.96202,3.35456 3.84561,3.84561c1.88359,0.49105 3.88549,-0.07455 5.23364,-1.47866l21.5,-21.5c2.09823,-2.0991 2.09823,-5.50149 0,-7.60059l-21.5,-21.5c-1.01222,-1.0424 -2.4033,-1.63064 -3.85628,-1.6307zM48.00407,14.37533c-1.7892,-0.13913 -3.6302,0.05907 -5.43799,0.63688l-7.71256,2.47054c-7.65042,2.44383 -13.51213,8.99288 -15.40413,17.2238c-4.49708,19.55783 0.89824,43.36763 16.17399,71.42871c15.265,28.02525 31.9915,44.87559 50.18766,50.55159c7.70775,2.40442 16.04426,0.2842 21.87793,-5.57096l5.85791,-5.8859c5.46817,-5.48967 6.26215,-14.42303 1.85465,-20.89811l-8.83236,-12.97559c-3.79117,-5.5685 -10.52464,-7.93232 -16.70589,-5.87191l-13.4235,4.47917c-1.79167,0.59842 -3.80136,0.28392 -5.24902,-0.93083c-5.46458,-4.59025 -10.10091,-10.16272 -13.90642,-16.70589c-3.81267,-6.5575 -6.27279,-13.20604 -7.38363,-19.94629c-0.29025,-1.763 0.38252,-3.54745 1.67969,-4.78011l11.51286,-10.92497c4.8805,-4.62967 6.36523,-12.07483 3.68132,-18.40657l-6.15885,-14.5293c-2.322,-5.47713 -7.24405,-8.94686 -12.61166,-9.36426z"></path></g></g></svg></span>
                        <span> 6793789827
                        </span>
                    </li>
                </ul>
            </div>
                <ul class="sci">
                    <li><a href="https://www.facebook.com/codex123456/"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="30" height="30"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M86,17.2c-37.9948,0 -68.8,30.8052 -68.8,68.8c0,34.49173 25.41013,62.97493 58.5144,67.95147v-49.71947h-17.02227v-18.08293h17.02227v-12.03427c0,-19.92333 9.70653,-28.66667 26.2644,-28.66667c7.9292,0 12.126,0.59053 14.10973,0.85427v15.78387h-11.29467c-7.02907,0 -9.48293,6.66787 -9.48293,14.17853v9.88427h20.59987l-2.79213,18.08293h-17.80773v49.8628c33.58013,-4.55227 59.48907,-33.2648 59.48907,-68.0948c0,-37.9948 -30.8052,-68.8 -68.8,-68.8z"></path></g></g></svg></a>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="30" height="30"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M57.32214,17.2c-22.12493,0 -40.12214,18.01386 -40.12214,40.14453v57.33333c0,22.12493 18.01386,40.12214 40.14453,40.12214h57.33333c22.12493,0 40.12214,-18.01386 40.12214,-40.14453v-57.33333c0,-22.12493 -18.01386,-40.12214 -40.14453,-40.12214zM126.13333,40.13333c3.1648,0 5.73333,2.56853 5.73333,5.73333c0,3.1648 -2.56853,5.73333 -5.73333,5.73333c-3.1648,0 -5.73333,-2.56853 -5.73333,-5.73333c0,-3.1648 2.56853,-5.73333 5.73333,-5.73333zM86,51.6c18.9716,0 34.4,15.4284 34.4,34.4c0,18.9716 -15.4284,34.4 -34.4,34.4c-18.9716,0 -34.4,-15.4284 -34.4,-34.4c0,-18.9716 15.4284,-34.4 34.4,-34.4zM86,63.06667c-12.66573,0 -22.93333,10.2676 -22.93333,22.93333c0,12.66573 10.2676,22.93333 22.93333,22.93333c12.66573,0 22.93333,-10.2676 22.93333,-22.93333c0,-12.66573 -10.2676,-22.93333 -22.93333,-22.93333z"></path></g></g></svg></a></li>
                    <li><a href="https://github.com/proDaddy3"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="30" height="30"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M86,14.33333c-39.58463,0 -71.66667,32.08203 -71.66667,71.66667c0,39.58464 32.08203,71.66667 71.66667,71.66667c39.58464,0 71.66667,-32.08203 71.66667,-71.66667c0,-39.58463 -32.08203,-71.66667 -71.66667,-71.66667zM86,28.66667c31.60612,0 57.33333,25.72722 57.33333,57.33333c0,3.35938 -0.33594,6.66276 -0.89583,9.85417c-1.76367,-0.39192 -4.36719,-0.86784 -7.39062,-0.89583c-2.23958,-0.02799 -5.03906,0.33594 -7.39062,0.67188c0.81185,-2.49153 1.34375,-5.23503 1.34375,-8.0625c0,-6.88672 -3.35937,-13.29753 -8.73437,-18.58854c1.48372,-5.51497 2.93945,-14.97722 -0.89583,-18.8125c-11.33789,0 -17.60872,8.09049 -17.91667,8.51042c-3.49935,-0.83984 -7.11067,-1.34375 -10.97396,-1.34375c-4.95508,0 -9.68619,0.89583 -14.10937,2.23958l1.34375,-1.11979c0,0 -6.29883,-8.73437 -17.91667,-8.73437c-4.05924,4.08724 -2.21159,14.44531 -0.67187,19.70833c-5.48698,5.23503 -8.95833,11.42188 -8.95833,18.14063c0,2.35156 0.5599,4.59115 1.11979,6.71875c-1.98763,-0.22396 -9.1543,-0.89583 -12.09375,-0.89583c-2.60351,0 -6.63476,0.61589 -9.85417,1.34375c-0.44792,-2.85547 -0.67187,-5.76692 -0.67187,-8.73437c0,-31.60612 25.72722,-57.33333 57.33333,-57.33333zM39.19271,95.18229c2.82747,0 11.42188,1.00781 12.54167,1.11979c0.13997,0.39193 0.27995,0.75586 0.44792,1.11979c-3.07942,-0.27994 -9.04232,-0.69987 -12.98958,-0.22396c-2.63151,0.30794 -5.99088,1.25976 -8.95833,2.01563c-0.22396,-0.89583 -0.5039,-1.76367 -0.67187,-2.6875c3.13542,-0.67187 7.25065,-1.34375 9.63021,-1.34375zM135.04688,96.75c2.85547,0.02799 5.45899,0.50391 7.16667,0.89583c-0.08399,0.47591 -0.33594,0.86784 -0.44792,1.34375c-1.81966,-0.41992 -4.8151,-1.03581 -8.28646,-1.11979c-1.67969,-0.02799 -4.36719,0.05599 -6.71875,0.22396c0.11198,-0.22396 0.13997,-0.44792 0.22396,-0.67187c2.43555,-0.33594 5.54297,-0.69987 8.0625,-0.67187zM43.67188,98.76563c4.03125,0.02799 7.81055,0.30794 9.40625,0.44792c3.75131,6.9987 11.33789,12.17774 23.06771,14.33333c-2.88347,1.5957 -5.45899,3.83528 -7.39062,6.49479c-1.67969,0.13997 -3.44336,0.22396 -5.15104,0.22396c-4.98307,0 -8.09049,-4.45117 -10.75,-8.28646c-2.6875,-3.83528 -5.99088,-4.25521 -7.83854,-4.47917c-1.87565,-0.22396 -2.51953,0.83985 -1.56771,1.56771c5.45899,4.19922 7.41862,9.18229 9.63021,13.66146c1.98763,4.03125 6.15885,6.27083 10.75,6.27083h0.89583c-0.13997,0.78385 -0.22396,1.51172 -0.22396,2.23958v7.83854c-16.54492,-6.69076 -29.14258,-20.82812 -33.81771,-38.29687c2.93945,-0.72786 6.24284,-1.48372 8.73438,-1.79167c1.14778,-0.13997 2.60351,-0.25195 4.25521,-0.22396zM133.47917,99.66146c3.2194,0.08399 6.07487,0.69987 7.83854,1.11979c-3.94726,14.83724 -13.68945,27.18294 -26.65104,34.71354v-4.25521c0,-6.10286 -4.8151,-13.9414 -11.64583,-17.69271c11.33789,-2.07161 18.72851,-7.02669 22.61979,-13.66146c2.71549,-0.19597 5.9069,-0.27994 7.83854,-0.22396zM89.58333,129c1.95964,0 3.58333,1.6237 3.58333,3.58333v10.30208c-2.35156,0.30794 -4.73112,0.44792 -7.16667,0.44792v-10.75c0,-1.95963 1.6237,-3.58333 3.58333,-3.58333zM75.25,136.16667c1.95964,0 3.58333,1.6237 3.58333,3.58333v3.13542c-2.40755,-0.30794 -4.8431,-0.75586 -7.16667,-1.34375v-1.79167c0,-1.95963 1.6237,-3.58333 3.58333,-3.58333zM103.91667,136.16667c1.73568,0 3.2474,1.25976 3.58333,2.91146c-2.32357,0.95183 -4.70312,1.81966 -7.16667,2.46354v-1.79167c0,-1.95963 1.6237,-3.58333 3.58333,-3.58333z"></path></g></g></svg></a></li>
                    <li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                        width="30" height="30"
                        viewBox="0 0 172 172"
                        style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#cccccc"><path d="M137.6,22.93333h-103.2c-6.33533,0 -11.46667,5.13133 -11.46667,11.46667v103.2c0,6.33533 5.13133,11.46667 11.46667,11.46667h103.2c6.33533,0 11.46667,-5.13133 11.46667,-11.46667v-103.2c0,-6.33533 -5.13133,-11.46667 -11.46667,-11.46667zM62.80293,126.13333h-16.91333v-54.4208h16.91333zM54.17427,63.9324c-5.4524,0 -9.86133,-4.4204 -9.86133,-9.86133c0,-5.44093 4.41467,-9.8556 9.86133,-9.8556c5.4352,0 9.8556,4.4204 9.8556,9.8556c0,5.44093 -4.4204,9.86133 -9.8556,9.86133zM126.15627,126.13333h-16.90187v-26.46507c0,-6.3124 -0.11467,-14.4308 -8.7892,-14.4308c-8.80067,0 -10.15373,6.87427 -10.15373,13.97213v26.92373h-16.90187v-54.4208h16.22533v7.43613h0.22933c2.25893,-4.27707 7.7744,-8.7892 16.00173,-8.7892c17.12547,0 20.29027,11.27173 20.29027,25.92613z"></path></g></g></svg></a></li>

                </ul>
               
            </div>
            <div class="contactform">
                <h2>Send a message</h2>
                <div class="formbox">
                    <div class="inputbox w50">
                        <input type="text" name="" required>
                        <span>First Name</span>
                    </div>
                    <div class="inputbox w50">
                        <input type="text" name="" required>
                        <span>last Name</span>
                    </div>
                    <div class="inputbox w50">
                        <input type="text" name="" required>
                        <span>Email address</span>
                    </div>
                    <div class="inputbox w50">
                        <input type="text" name="" required>
                        <span>Mobile Number</span>
                    </div>
                    <div class="inputbox w100">
                        <textarea name="" required></textarea>
                        <span>&nbsp;&nbsp;Write your message here....</span>
                    </div>
                    <div class="inputbox w100">
                        <input type="submit" value="Send">
                    </div>
                </div>
            </div>
    
        </div>
    </section> 
    <script type="text/javascript">
       window.addEventListener("scroll",function()
            {
                var header =document.querySelector("header");
                header.classList.toggle("sticky",window.scrollY > 0);
            })
    </script>
    </body>
</Html>