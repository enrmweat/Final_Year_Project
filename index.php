<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Liverpool WiFi | Home</title>
     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

     <!-- this imports my custom css file and sets the padding of the body section -->
    <link href="mycustomcss.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

    <!-- this section initiates the java to allow my site to respond to different screen sizes -->
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    

    <!-- HTML5, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicon and icon section -->
   <link rel="shortcut icon" href="assets/ico/favicon.ico"/>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>
          <!-- this is my code for the navbar it contains all the links and information needed to navigate through the page, this complete section
          continues throughout my whole site -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <!-- this is my main section within the navbar, it contains all the page navigation links -->
          <a class="brand" href="index.php" title="Return to Home Page"><img src="assets/img/Logo.png"></a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-left">
              <li class="active"><a href="index.php" accesskey="h" title="Home Page"><i class="icon-home icon-inverse"></i><em>H</em>ome</a></li>
              <li><a href="about.php" accesskey="a" title="About us"><em>A</em>bout</a></li>
               <!--<li><a href="contact.html" accesskey="1" title="Contact Us" >Get In Touch!</a></li> -->
              <li><a href="wifimaplocation.php" title="View Wi-Fi Hotspots In Liverpool" accesskey="m">Wi-Fi <em>M</em>ap & Location</a></li>
            
              </li>
              <!-- this is my dropdown box within my navbar -->
               <li class="dropdown">
                <a  href="#" class="dropdown-toggle" data-toggle="dropdown" accesskey="i" title="FAQ & Information">FAQ & <em>I</em>nformation <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="faq.html" accesskey="q" title="FAQ Page" >FA<em>Q</em>s</a></li>
                  <li><a href="clubsessions.html" title="Information on the sessions we run!" accesskey="c"><em>C</em>lub Sessions</a></li>
                  <li><a href="racingteam.html" title="Our superb racing team!" accesskey="o"><em>O</em>ur Racing Team</a></li>
                  <li class="divider"></li>
                  <li><a href="accesskeyinfo.html" title="information on how to use access keys" accesskey="l"><em>L</em>ist of Access Keys</a></li>
                  </ul>
            </ul>
            <!-- this displays the sign in sction on the right hand side of the navbar -->
          <ul class="nav pull-right">
          <li class="divider-vertical"></li>
          <li><a href="login.php" title="Login" >Login</a></li>
         
            
          <li><a href="register.php" title="Resgister" >Register</a></li>

           
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div align='right'><a href='http://www.hit-counter-html-code.com'><img src='http://www.hit-counter-html-code.com/c.php?d=9&id=92339&s=18' border='0' title='free website hit counter'></a><br/>
  <small><a href='http://www.hit-counter-html-code.com' title="hit counter html code">Visitors!!</a></small></div>
    
    <a class="pull-right" href="login-home.php" title="Your Account" accesskey="m">My Account</a>


    <H1>Website Currently Under Construction</h1>

    <div class="container">

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Welcome!!</h1>
        <p>This website has been set-up to provide easy access to information regarding Wi-Fi hotspots in and around the Liverpool City Area. To use this service, a free one-time sign-up
          is required, it only takes 2 minutes, so please head on over to my <a href="register.php" title="Register"> registration page</a> and sign up!.
        For more information please click below</p>
        <p><a href='about.php' title="See the About page for more info!" class="btn btn-large">Learn more &raquo;</a></p>
      </div>

      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2>More information?</h2>
          <p>For more information regarding what services are offered and what services are not offered by this website, please click here!, if you cannot find the information
          you are looking for, please head on over to my <a href="about.php" title="Contact Me"> About page </a> and drop me an email using the contact form or Email option!  </p>
          <p><a class="btn" href="faq.html">View details &raquo;</a></p>
        </div>
        <div class="span4">
          <h2>Head Over to the Map</h2>
          <p>Once you have signed up, if u wish to get straight to the offered service, please click the button below!<br>
          <br><br><br> </p>
          <p><a class="btn" href="wifimaplocation.php">Hotspot Map &raquo;</a></p>
       </div>
        <div class="span4">
          <h2>Contact Me!</h2>
          <p>If you wish to contact me regarding this service or with any problems/updates regarding the location of any Wi-Fi Hotspots, whether it be their not where they're supposed to be or are no longer there. Please Use the link below to contact me using my contact form!. Thankyou</p>
          <a href="#myModal" role="button" class="btn" data-toggle="modal">Contact Us!</a>
      <!--modal body-->
      <div id="myModal" class="modal hide fade" tadindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: block;">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
          <h3 id="myModalLabel">Contact Us</h3>
        </div>
        <div class="modal-body">
          <h4>Contact Form</h4>
    <p> Please fill in the below form</p>
    <body>
    <form action="contact.php" method="post">
    Your name<br>
    <input type="text" name="cf_name"><br>
    Your e-mail<br>
    <input type="text" name="cf_email"><br>
    Message<br>
    <textarea name="cf_message"></textarea><br>
    <input type="submit" value="Send">
    <input type="reset" data-dismiss="modal" value="Close">
  </form>
  </body>
    </div>
  </div>
        </div>
      </div>

      <hr>

        <!-- this places a footer at the bottom of the page, it contains the "Copyright" and the Connect to facebook link -->
       <footer>
        <p>&copy; Michael Weatherall 2012 &nbsp<center><i class="icon-thumbs-up icon-inverse"></i><a href="http://www.facebook.com/group.php?gid=2256597544">Find and Like us on Facebook!</center></a></p>
      </footer>

    </div> <!-- /container -->

    
    <!-- ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- added new jquery files to allow for JS actions, for dropdown actions and other java actions -->
    <script text/javascript src="assets/js/jquery-1.8.2.min.js"></script>
    <script text/javascript src="assets/js/bootstrap.min.js"></script>
   <script language ="javascript">
    $(function(){
      $('.dropdown-toggle').dropdown();
    $('.dropdown input, .dropdown label').click(function (e) {
        e.stopPropagation();
      });
  });

  </script>
  <script type='text/javascript'>
// <![CDATA[
    var pwdwidget = new PasswordWidget('thepwddiv','password');
    pwdwidget.MakePWDWidget();
    
    var frmvalidator  = new Validator("register");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("username","req","Please provide a username");
    
    frmvalidator.addValidation("password","req","Please provide a password");

// ]]>
</script>

     
 

  </body>
</html>
