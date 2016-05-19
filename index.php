<?php
   ob_start();
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dota 2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="scripts.js" ></script>
  <link rel="icon" href="images/title.png" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">DOTA 2</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>


        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin Part
          <span class="caret"></span></a>
          <ul class="dropdown-menu">

            <li><a href="retrieve.php">Retrieve, edit, delete</a></li>
            <!-- <li><a href="localhost/dota2/add_data.php">Insert</a></li> -->

          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/dota2.jpg" alt="dota2" width="1200" height="700">
        <div class="carousel-caption">
          <h3>DOTA 2</h3>
          <p>Welcome to our website.</p>
        </div>
      </div>

      <div class="item">
        <img src="images/dota2-wiki-section.jpg" alt="dota2" width="1200" height="700">
        <div class="carousel-caption">
          <h3>DOTA 2</h3>
          <p>Welcome to our website</p>
        </div>
      </div>

      <div class="item">
        <img src="images/20150821205737-2463.jpg" alt="dota2" width="1200" height="700">
        <div class="carousel-caption">
          <h3>DOTA2</h3>
          <p>Welcome to our website</p>
        </div>
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

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>DOTA 2</h3>
  <p><em>We love to play!</em></p>
  <p>Dota 2 is a free-to-play multiplayer online battle arena (MOBA) video game developed and published by Valve Corporation. The game was released for Microsoft Windows, OS X, and Linux in July 2013, following a Windows-only public beta testing phase that began in 2011, and is the stand-alone sequel to Defense of the Ancients (DotA), a mod for Warcraft III: Reign of Chaos and its expansion pack, The Frozen Throne. Dota 2 is one of the most actively played games on Steam, with maximum peaks of over a million concurrent players.</p>
  <br>





<h3>Our Team</h3>

  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>First Player</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <div class="loader"></div>
      </a>
      <div id="demo" class="collapse">
        <p>Student of SDU</p>
        <p>From Kazakhstan</p>
        <p>Enthusiast</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Second Player</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
         <div class="loader"></div>
      </a>
      <div id="demo2" class="collapse">
        <p>Student of SDU</p>
        <p>From Kazakhstan</p>
        <p>Enthusiast</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Third Player</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <div class="loader"></div>
      </a>
      <div id="demo3" class="collapse">
       <p>Student of SDU</p>
        <p>From Kazakhstan</p>
        <p>Enthusiast</p>
      </div>
    </div>
  </div>
<br>





<h4>Demonstration of loading contents of page by AJAX</h2>
<h2> To be a good player, you should have a good teacher. We recommend you to consider these fantastic courses</h4>
<form>
         Select a Course:
         <select name = "cds" onchange = "showCD(this.value)">
            <option name = "qqq" value = "">Select a course:</option>
            <option name = "qqq" value = "Professional Style">Professional Style</option>
            <option name = "qqq" value = "Getting Agile">Getting Agile</option>
            <option name = "qqq" value = "The best one">The best one</option>
         </select>
</form>
<div id = "txtHint"><b>Course info will be listed here...</b></div>
<br>
<h4>Javascript Validation</h4>

<form name="myForm"
onsubmit="return validateForm()" >
Name: <input type="text" name="fname">
<input type="submit" value="Submit">
</form>
<br>

<h4>User Authentication</h4>
 <h2>Enter Username and Password</h2>
      <div class = "container form-signin">
         <?php
            $msg = '';

            if (isset($_POST['login']) && !empty($_POST['username'])
               && !empty($_POST['password'])) {

               if ($_POST['username'] == 'user' &&
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'user';

                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->



         <form class = "form-signin" role = "form"
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control"
               name = "username" placeholder = "username = user"
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
<br>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit"
               name = "login">Login</button>
         </form>

         Click here to clean <a href = "logout.php" tite = "Logout">Session.</a>


</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Tournaments dates</h3>
    <p class="text-center">We are waiting for you.<br> You're welcome!</p>
    <ul class="list-group">
      <li class="list-group-item">10 May<span class="label label-danger">It's late!</span></li>
      <li class="list-group-item">11 May <span class="label label-danger">It's late!</span></li>
      <li class="list-group-item">11 June <span class="badge">GO</span></li>
    </ul>


  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"></button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Zhezkazgan, KZ</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +8 (771) 6997712</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: https://vk.com/id239267944</p>
    </div>

    <div class="col-md-8">
    <form action="" method="post">
First Name: <input type="text" name="first_name"><br>
<br>
Last Name: <input type="text" name="last_name"><br><br>
Email: <input type="text" name="email"><br><br>
Message:<br><textarea rows="5" name="message" cols="30"></textarea><br><br>
<input type="submit" name="submit" value="Submit">
</form>
      <div class="row">



      </div>

      <div class="row">
        <div class="col-md-12 form-group">
<?php
if(isset($_POST['submit'])){
    $to = "dias97_12@mail.ru";
    $from = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";

    }
?>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Website Made By <a href="https://vk.com/id239267944" data-toggle="tooltip">Dias</a></p>
</footer>



</body>
</html>
