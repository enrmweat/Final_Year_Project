<?PHP
require_once("include/membersite_config.php");

if(!$fgmembersite->CheckLogin())
{
    $fgmembersite->RedirectToURL("login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Liverpool WiFi | Map</title>
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
              <li class="active"><a href="wifimaplocation.php" title="View Wi-Fi Hotspots In Liverpool" accesskey="m">Wi-Fi <em>M</em>ap & Location</a></li>
            
              </li>
              <!-- this is my dropdown box within my navbar -->
               <li class="dropdown">
                <a  href="#" class="dropdown-toggle" data-toggle="dropdown" accesskey="i" title="FAQ & Information">FAQ & <em>I</em>nformation <b class="caret"></b></a>
                <ul class="dropdown-menu">
                 <li><a href="faq.html" accesskey="q" title="FAQ Page" >FA<em>Q</em>s</a></li>
                  <!--<li><a href="clubsessions.html" title="Information on the sessions we run!" accesskey="c"><em>C</em>lub Sessions</a></li>
                  <li><a href="racingteam.html" title="Our superb racing team!" accesskey="o"><em>O</em>ur Racing Team</a></li>-->
                  <li class="divider"></li>
                  <li><a href="accesskeysinfo.html" title="Information on how to use access keys" accesskey="k">List of Access <em>K</em>eys</a></li>
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

   
  
   <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 85%; margin: 0; padding: 0.2 }
      #map_canvas { height: 100% }
    </style>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDINxXHHp6_arevhHdyZZ5W3ty0mEWjzd4&sensor=true">
    </script>
    <script type="text/javascript" src="http://google-maps-utility-library-v3.googlecode.com/svn/tags/markerclustererplus/2.0.9/src/markerclusterer.js"></script>
    <script type="text/javascript" src="assets/js/geolocationmarker.js"></script>
    <script type="text/javascript">
    //declare map and map type (zoom level and where to centre the map on loading)
function initialize() {
  var mapOptions = {
    zoom: 17,
    panControl: true,
    zoomControl: true,
    mapTypeControl: true,
    scaleControl: true,
    streetViewControl: true,
    overviewMapControl: true,
    
    center: new google.maps.LatLng(53.403938,-2.987954),
    mapTypeId: google.maps.MapTypeId.HYBRID
  }
  
  var map = new google.maps.Map(document.getElementById("map_canvas"),
                                mapOptions);


  //var mcOptions = {gridSize: 50};
  var GeoMarker = new GeolocationMarker(map);
  
  setMarkers(map, wifimaplocation);
}

/**
 * Data for the markers consisting of a name, a LatLng and a zIndex for
 * the order in which these markers should display on top of each
 * other.
 */
var wifimaplocation = [
  ['BT Openzone Business Hub', 53.410133,-2.980967, 4],
  ['BT Openzone Business Hub 2', 53.410581,-2.98513, 5],
  ['BT Openzone Business Hub 3', 53.410341,-2.986254, 3],
  ['Wireless Outdoor Coverage (L1 6ER)', 53.408816,-2.983669, 2],
  ['Yates Bros Wine Lodge', 53.407319,-2.98397, 1],
  ['BT Openzone Business Hub 4', 53.408373,-2.982217, 6],
  ['BT Openzone Business Hub 5', 53.408926,-2.983751, 7],
  ['Liverpool Marriot Hotel',53.408926,-2.983751, 8],
  ['Wireless Outdoor Coverage (L1 1 St Johns Lane', 53.408563,-2.982344, 9],
  ['Wireless Outdoor Coverage (L1 1 Roe St)', 53.407407,-2.981337, 10],
  ['BT Openzone Business Hub 6', 53.40701,-2.981944, 11],
  ['McDonald&#39s St Johns Precinct', 53.407121,-2.980573, 12],
  ['BT Openzone Business Hub 7', 53.406705,-2.980839, 13],
  ['BT Openzone Business Hub 8', 53.406859,-2.980066, 14],
  ['Network Rail - Liverpool Lime Street', 53.408688,-2.9788, 15],
  ['Wetherspoons', 53.405942,-2.979522, 16],
  ['Crown', 53.406484,-2.978754, 17],
  ['BT Openzone Business Hub 9', 53.406574,-2.978513, 18],
  ['BT Openzone Business Hub 10', 53.406574,-2.978513, 19],
  ['BT Openzone Business Hub 11', 53.406488,-2.978749, 20],
  ['Wireless Outdoor Coverage (L3 5 Bolton St)', 53.405898,-2.97773, 21],
  ['BT Openzone Business Hub 12', 53.408026,-2.977398, 22],
  ['Wireless Outdoor Coverage (Skelhorne St)', 53.416157,-2.988889, 23],
  ['McDonald&#39s (Ranelagh Street)', 53.404594,-2.977877, 24],
  ['Wireless Outdoor Coverage (Renshaw St)', 53.404639,-2.977296, 25],
  ['Wetherspoons', 53.405183,-2.980989, 26],
  ['BT Openzone Business Hub 13', 53.405339,-2.979956, 27],
  ['BT Openzone Business Hub 14', 53.404869,-2.97993, 28],
  ['BT Openzone Business Hub 15', 53.403862,-2.979275, 29],
  ['Brew Tea Bar', 53.403862,-2.979275, 30],
  ['Starbucks Coffee', 53.404054,-2.980643, 31],
  ['BT Openzone Business Hub 16', 53.404054,-2.980643, 32],
  ['Office (Holmes Building Wood Street)', 53.404223,-2.981673, 33],
  ['BT Openzone Business Hub 17', 53.403512,-2.980543, 34],
  ['Djandos-Riff', 53.403512,-2.980543, 35],
  ['Bar Liverpool Ltd', 53.403512,-2.980543, 36],
  ['O Neills', 53.404174,-2.981809, 37],
  ['BT Openzone Business Hub 18', 53.405538,-2.98094, 38],
  ['Currys/PC World', 53.404789,-2.982451, 39],
  ['BT Pay Phone (Church Street)', 53.405506,-2.982687, 40],
  ['BT Openzone Business Hub 19', 53.406759,-2.98384, 41],
  ['BT Openzone Business Hub 20', 53.406686,-2.984221, 42],
  ['BT Openzone Business Hub 21', 53.406775,-2.98454, 43],
  ['Cafe Nero', 53.407034,-2.98483, 44],
  ['Ice', 53.406795,-2.98491, 45],
  ['BT Openzone Business Hub 22', 53.406142,-2.984355, 46],
  ['WiFi Pod Office', 53.402954,-2.984422, 47],
  ['BT Openzone Business Hub 23', 53.403424,-2.984184, 48],
  ['BT Openzone Business Hub 24', 53.404203,-2.984097, 49],
  ['BT Openzone Business Hub 25', 53.404697,-2.985109, 50],
  ['BT Openzone Business Hub 26', 53.403798,-2.985541, 51],
  ['BT Openzone Business Hub 27',53.406863,-2.98583, 52],
  ['McDonalds', 53.405218,-2.986485, 53],
  ['WELKIN (Wetherspoons)', 53.405998,-2.985895, 54],
  ['BT Openzone Business Hub 28', 53.405237,-2.98648, 55],
  ['BT Openzone Business Hub 29', 53.405741,-2.986495, 56],
  ['1Pco Lord Street Liverpool', 53.405183,-2.98649, 57],
  ['BT Openzone Business Hub 30', 53.405132,-2.987064, 58],
  ['BT Openzone Business Hub 31', 53.403868,-2.987311, 59],
  ['BT Openzone Business Hub 32', 53.403894,-2.98648, 60],
  ['Liverpool Moat House', 53.401345,-2.985981, 61],
  ['Wireless Outdoor Coverage (Paradise Street)', 53.401345,-2.985981, 62],
  ['Starbucks 2', 53.402583,-2.986039, 63],
  ['John Lewis', 53.402963,-2.986796, 64],
  ['BT Openzone Business Hub 33', 53.402986,-2.98442, 65],
  ['Cafe Nero', 53.404462,-2.984958, 66],
  ['BT Openzone Business Hub 34', 53.406296,-2.99516, 67],
  ['BT Openzone Business Hub 35', 53.404654,-2.991283, 68],
  ['Wireless Outdoor Coverage (James Street)', 53.404654,-2.991283, 69],
  ['BT Openzone Business Hub 36', 53.405285,-2.99319, 70],
  ['BT Openzone Business Hub 37', 53.405608,-2.99139, 71],
  ['BT Openzone Business Hub 38', 53.405682,-2.991801, 72],
  ['Brunswick Street', 53.40619,-2.992869, 73],
  ['Wireless Outdoor Coverage (Brunswick Street)', 53.40619,-2.992869, 74],
  ['Heywood House Hotel', 53.406695,-2.988615, 75],
  ['BT Openzone Business Hub 39', 53.406657,-2.990288, 76],
  ['BT Openzone Business Hub 40', 53.408013,-2.988277, 77],
  ['BT Openzone Business Hub 41', 53.408262,-2.98766, 78],
  ['Premier Inn - Liverpool City Centre', 53.409174,-2.988051, 79],
  ['BT Openzone Business Hub 42', 53.409295,-2.987504, 80],
  ['BT Openzone Business Hub 43', 53.409577,-2.988051, 81],
  ['BT Openzone Business Hub 44', 53.409922,-2.987174, 82],
  ['Liverpool - Hatton Garden / Tithebarn Street', 53.410632,-2.987276, 83],
  ['BT Openzone Business Hub 45', 53.410302,-2.98627, 84],
  ['Wireless Outdoor Coverage - Liverpool (Hatton Garden)', 53.410302,-2.98627, 85],
  ['BT Openzone Business Hub 46', 53.410993,-2.986823, 86],
  ['BT Openzone Business Hub 47', 53.410542,-2.985216, 87],
  ['Brunswick Vaults', 53.410376,-2.989443, 88],
  ['BT Openzone Business Hub 48', 53.410168,-2.98884, 89],
  ['BT Openzone Business Hub 49', 53.410389,-2.989615, 90],
  ['BT Openzone Business Hub 50', 53.408943,-2.990245, 91],
  ['Railway', 53.408969,-2.990422, 92],
  ['BT Openzone Business Hub 51', 53.408787,-2.991678, 93],
  ['BT Openzone Business Hub 52', 53.408774,-2.994178, 94],
  ['BT Openzone Business Hub 53', 53.405682,-2.978199, 95],
  ['Brew Tea Bar', 53.410159,-2.993776, 96],
  ['BT Openzone Business Hub 54', 53.410159,-2.993776, 97],
  ['Cross Keys Public House', 53.409916,-2.993743, 98],
  ['BT Openzone Business Hub 55', 53.404812,-2.977298, 99],
  ['BT Openzone Business Hub 56', 53.404313,-2.976676, 100],
  ['BT Openzone Business Hub 57', 53.404697,-2.976611, 101],
  ['stayCity Liverpool Mount Pleasant', 53.405183,-2.976314, 102],
  ['BT Openzone Business Hub 58', 53.405132,-2.976547, 103],
  ['BT Openzone Business Hub 59', 53.404275,-2.973522, 104],
  ['BT Openzone Business Hub 60', 53.404646,-2.972556, 105],
  ['BT Openzone Business Hub 61', 53.404518,-2.972341, 106],
  ['BT Openzone Business Hub 62', 53.404607,-2.971161, 107],
  ['Wireless Outdoor Coverage (Brownlow Hill)', 53.403878,-2.97129, 108],
  ['BT Openzone Business Hub 63', 53.40526,-2.967471, 109],
  ['Starbucks', 53.41154,-2.965196, 110],
  ['BT Openzone Business Hub 64', 53.410888,-2.967041, 111],
  ['Liverpool - London Road', 53.409455,-2.97659, 112],
  ['BT Openzone Business Hub 65', 53.41012,-2.969573, 113],
  ['Wireless Outdoor Coverage (Pembroke Place)', 53.409238,-2.971505, 114]
 



];

function setMarkers(map, locations) {
  // Add markers to the map

  // Marker sizes are expressed as a Size of X,Y
  // where the origin of the image (0,0) is located
  // in the top left of the image.

  // Origins, anchor positions and coordinates of the marker
  // increase in the X direction to the right and in
  // the Y direction down.
  var infowindow = new google.maps.InfoWindow();
   var image = new google.maps.MarkerImage('image.png',
  //     // This marker is 20 pixels wide by 32 pixels tall.
       new google.maps.Size(40, 35),
  //     // The origin for this image is 0,0.
      new google.maps.Point(0,0),
  //     // The anchor for this image is the base of the flagpole at 0,32.
       new google.maps.Point(0, 0));
   var shadow = new google.maps.MarkerImage('shadow.png',
  //     // The shadow image is larger in the horizontal dimension
  //     // while the position and offset are the same as for the main image.
       new google.maps.Size(62, 35),
       new google.maps.Point(0,0),
       new google.maps.Point(0, 0));
  //     // Shapes define the clickable region of the icon.
  //     // The type defines an HTML <area> element 'poly' which
  //     // traces out a polygon as a series of X,Y points. The final
  //     // coordinate closes the poly by connecting to the first
  //     // coordinate.
  var shape = {
      coord: [1, 1, 1, 20, 18, 20, 18 , 1],
      type: 'poly'
  };
  for (var i = 0; i < locations.length; i++) {
    var wifi = locations[i];
    var myLatLng = new google.maps.LatLng(wifi[1], wifi[2]);
    var marker = new google.maps.Marker({
        position: myLatLng,
        map: map,
        shadow: shadow,
        icon: image,
        shape: shape,
        title: wifi[0],
        zIndex: wifi[3]
    });

    //var mc = new MarkerClusterer(map, marker, mcOptions);

    google.maps.event.addListener(marker, 'click', (function(marker, i) {
      return function() {
        infowindow.setContent(wifimaplocation[i][0]);
        infowindow.open(map, marker);
      }
    })(marker, i));
    
  }
}
  
          
      
    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas" style="width:100%; height:100%"></div>

     <p align="right">
    Logged in as: <?= $fgmembersite->UserFullName() ?>
    </p>
   <a class="pull-right btn btn-mini btn-info" href="login-home.php" title="Your Account" accesskey="m">My Account</a>
 <div class="container">

  <hr>

        <!-- this places a footer at the bottom of the page, it contains the "Copyright" and the Connect to facebook link -->
       <footer>
        <p>&copy; Michael Weatherall 2012 &nbsp<a href="https://twitter.com/WifiLiverpool" target="_blank"><img src="assets/img/twitter-bird-light-bgs.png" title="Twitter Support Page" width="35px" height="35px"; alt="Twitter" align="right"></a></p>
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


     
 

  </body>
</html>
