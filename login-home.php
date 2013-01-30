<?PHP
require_once("./include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
      <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
      <title>Liverpool WiFi | My Account</title>
      <link rel="STYLESHEET" type="text/css" href="style/fg_membersite.css">
      <link rel="shortcut icon" href="assets/ico/favicon.ico"/>
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
            <ul class="nav">
              <li ><a href="index.php" accesskey="h" title="Home Page"><i class="icon-home icon-inverse"></i><em>H</em>ome</a></li>
              <li><a href="about.php" accesskey="a" title="About us"><em>A</em>bout</a></li>
               <!--<li><a href="contact.html" accesskey="1" title="Contact Us" >Get In Touch!</a></li> -->
              <li><a href="wifimaplocation.php" title="View Wi-Fi Hotspots In Liverpool" accesskey="m">Wi-Fi <em>M</em>ap & Location</a></li>
            
              </li>
              <!-- this is my dropdown box within my navbar -->
              <li class="dropdown">
                <a  href="#" class="dropdown-toggle" data-toggle="dropdown" accesskey="i" title="FAQ & Information">FAQ & <em>I</em>nformation <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="faq.html" accesskey="q" title="FAQ Page" >FA<em>Q</em>s</a></li>
                  <!--<li><a href="clubsessions.html" title="Information on the sessions we run!" accesskey="c"><em>C</em>lub Sessions</a></li>
                  <li><a href="racingteam.html" title="Our superb racing team!" accesskey="o"><em>O</em>ur Racing Team</a></li>-->
                  <li class="divider"></li>
                  <li><a href="accesskeysinfo.html" title="information on how to use access keys" accesskey="k">List of Access <em>K</em>eys</a></li>
                  </ul>
            </ul>
            <!-- this displays the sign in sction on the right hand side of the navbar -->
          <ul class="nav pull-right">
          <li class="divider-vertical"></li>
          <li><a href="login.php" title="Login"accesskey="l"><em>L</em>ogin</a></li>
         
            
          <li><a href="register.php" title="Resgister"accesskey="r"><em>R</em>egister</a></li>
           
           
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

		<div id='fg_membersite_content'>
		<h2>Welcome back <?= $fgmembersite->UserFullName(); ?>!</h2>
		

		<p><a href='change-pwd.php'>Change password</a></p>

		<br><br><br>
		<p><a href='logout.php'>Logout</a></p>
		</div>


      <hr>

        <!-- this places a footer at the bottom of the page, it contains the "Copyright" and the Connect to facebook link -->
       <footer>
        <p>&copy; Michael Weatherall 2012 &nbsp<center><i class="icon-thumbs-up icon-inverse"></i><a href="http://www.facebook.com/group.php?gid=2256597544">Find and Like us on Facebook!</center></a></p>
      </footer>

    </div> <!-- /container -->

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


</body>
</html>
