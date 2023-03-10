<?php 
include_once 'functions.php';
$login = '';

if (isset($_SESSION['user_id']) && isset($_SESSION['user_type'])) {
  $user_id = preg_replace('#[^0-9]#','',$_SESSION['user_id']);
  $user_type = test_input($_SESSION["user_type"]);
  $login = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

 <title>Watoto Kwanza</title>

 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=Edge">
 <meta name="description" content="">
 <meta name="keywords" content="">
 <meta name="author" content="">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/font-awesome.min.css">
 <link rel="stylesheet" href="css/aos.css">
 <link rel="stylesheet" href="css/owl.carousel.min.css">
 <link rel="stylesheet" href="css/owl.theme.default.min.css">

 <!-- MAIN CSS -->
 <link rel="stylesheet" href="css/style.css">

 <style>
  body{
    background-color:black;
  }
  
  </style>

</head>
<body>

 <!-- MENU BAR -->
 <nav style="background-color:rgb(34, 192, 105)" class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="./">
      <i class="fa fa-bullhorn"></i>
      WATOTO KWANZA
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a href="#how-it-works" class="nav-link smoothScroll">How it Works</a>
      </li>
      <li class="nav-item">
        <a href="tips" class="nav-link smoothScroll">Guides & Tips</a>
      </li>
      <li class="nav-item">
        <a href="#frequently-question" class="nav-link smoothScroll">FAQ's</a>
      </li>
      <?php if(!$login){ ?>
      <li class="nav-item">
        <a href="signup" class="nav-link">Signup</a>
      </li>
      <li class="nav-item">
        <a href="login" class="nav-link login">Login</a>
      </li>
      <?php }else{ ?>
      <li class="nav-item">
        <a href="app/logout" class="nav-link login">Logout</a>
      </li>
       <?php } ?>
    </ul>
  </div>
</div>
</nav>


<!-- HERO -->
<section class="hero hero-bg d-flex justify-content-center align-items-center">
 <div class="container">
  <div class="row">

    <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
      <div class="hero-text">
       <div class="text-white" data-aos="fade-up">
        <h2>Do not keep it to yourself</h2>
        <h3>Speak up</h3>
        <p class="text-white">Press the button and help would reach you soon, where ever you are</p>
        <p class="text-white">Have you found something worth reporting? </p>
        <p class="text-white">Stay strong. Stand right. Speak up</p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="btn-center"><button class="custom-btn btn-bg btn" data-toggle="modal" data-target="#chatbot" data-aos="fade-up" data-aos-delay="100">Help Me!</button></div>
    <div class="btn-center"><a href="app/reports" class="btn btn-outline btn-primary" data-aos="fade-up" data-aos-delay="200"><i class="fa fa-phone mr-2"></i> <b style="color:red"> Report an issue </b></a></div>
  </div>

  <div class="col-md-4">
    <div class="hero-image" data-aos="fade-up" data-aos-delay="300">

      <img src="images/speakup.png" class="img-fluid" alt="working girl">
    </div>
  </div>

</div>
</div>
</section>

<!-- ABOUT -->

<section class="section-padding pb-20" id="how-it-works">
  <div class="container">
   <div class="row">

    <div class="col-lg-12 col-12">
      <h2 class="text-center" data-aos="fade-up" data-aos-delay="100"> How it Works </h2>
      <p class="text-center mb-5" data-aos="fade-up">Its really simple. Follow the steps and get started today!</p>
    </div>

    
    <div class="col-12">
      <div class="howit-bg"></div>

      <div class="row">
        <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
          <div class="how">
            <span class="icon">
              <i class="fa fa-life-saver"></i>
            </span>
            <div class="desc">
              <h4>Ask for Help</h4>
              <p>Ask questions and seek help on any issues and get response from our active 24/7 SpeakUp bot. Do not keep it to yourself. Speak up Today!</p>
            </div>
          </div>
        </div>

        <div class="col-md-3 text-center how" data-aos="fade-up" data-aos-delay="200">
            <span class="icon">
              <i class="fa fa-gittip"></i>
            </span>
            <div class="desc">
              <h4>Get tips</h4>
              <p>Get guides and tips to stay on top of any situation, get counsels and legal advice, learn to overcome victimization and stay protected</p>
            </div>
        </div>

        <div class="col-md-3 text-center how" data-aos="fade-up" data-aos-delay="300">
            <span class="icon">
              <i class="fa fa-check-square-o"></i>
            </span>
            <div class="desc">
              <h4>Verify Report</h4>
              <p>Reports submited as an eyewitness or a victim are properly verified on either end of either parties involved</p>
            </div>
        </div>

        <div class="col-md-3 text-center how" data-aos="fade-up" data-aos-delay="400">
            <span class="icon">
              <i class="fa fa-flag-checkered"></i>
            </span>
            <div class="desc">
              <h4>Get Followed Up</h4>
              <p>Get assigned to professional responders who are well equiped to follow up your report and get it resolved.</p>
            </div>
          </div>
        </div>

    </div>

  </div>
</div>
</section>



<section class="featured section-padding">
  <div class="container-fluid">
   <div class="row">

    <div class="col-lg-12 col-12">

      <h2 class="mb-5 text-center" data-aos="fade-up">
        Featured <strong>Reports</strong>
      </h2>

      <div class="owl-carousel owl-theme" id="featured-slide">
        <div class="item featured-wrapper" data-aos="fade-up" data-aos-delay="100">
         <img src="images/tp (1).jpg" style="width:50vw; height:60vh"class="img-fluid" alt="featured image">

         <div class="featured-info">
          <small>Sex For Grade</small>

          <h3 data-aos="fade-up" data-aos-delay="180">
           <a href="#">
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia consequatur quisquam quo excepturi nobis ad ipsa dolores, velit numquam eligendi?</span>
            <i class="fa fa-angle-right featured-icon"></i>
          </a>
        </h3>
      </div>
    </div>

    <div class="item featured-wrapper" data-aos="fade-up">
     <img src="images/tp (2).jpg" style="width:50vw; height:60vh" class="img-fluid" alt="featured image">

     <div class="featured-info">
      <small>Rape Attempt</small>

      <h3 data-aos="fade-up" data-aos-delay="180">
       <a href="#">
        <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, id?</span>
        <i class="fa fa-angle-right featured-icon"></i>
      </a>
    </h3>
  </div>
</div>

<div class="item featured-wrapper" data-aos="fade-up">
 <img src="images/tp (3).jpg" style="width:50vw; height:60vh" class="img-fluid" alt="featured image">

 <div class="featured-info">
  <small>Bullying</small>

  <h3 data-aos="fade-up" data-aos-delay="180">
   <a href="#">
    <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat iste corrupti ducimus?</span>
    <i class="fa fa-angle-right featured-icon"></i>
  </a>
</h3>
</div>
</div>

<div class="item featured-wrapper" data-aos="fade-up">
 <img src="images/tp (4).jpg" style="width:50vw; height:60vh" class="img-fluid" alt="featured image">

 <div class="featured-info">
  <small>Molestation</small>

  <h3>
   <a href="#">
    <span>Race Bicycle</span>
    <i class="fa fa-angle-right featured-icon"></i>
  </a>
</h3>
</div>
</div>

<div class="item featured-wrapper" data-aos="fade-up">
 <img src="images/featured/featured-image05.jpg" style="width:40vw; height:50vh"  class="img-fluid" alt="featured dd image">

 <div class="featured-info">
  <small>Video</small>

  <h3>
   <a href="#">
    <span>Ultimate HealthCare</span>
    <i class="fa fa-angle-right featured-icon"></i>
  </a>
</h3>
</div>
</div>
</div>
</div>

</div>
</div>
</section>


<!-- Achivement -->
<section class="achievement">
  <div class="container">

    <!-- Achievement Code goes here-->
    <div class="row">

      <div class="col-lg-4 col-md-4 col-12">
        <div class="achievement-space" data-aos="fade-up" data-aos-delay="100">
         <span class="reports">2</span>
         <h4 class="report-text" >Reported Case</h4>

       </div>
     </div>

     <div class="col-lg-4 col-md-4 col-12">
      <div class="achievement-space" data-aos="fade-up" data-aos-delay="140">
       <span class="reports">2</span>
       <h4 class="report-text">Featured Cases</h4>
     </div>
   </div>

   <div class="col-lg-4 col-md-4 col-12">
    <div class="achievement-space" data-aos="fade-up" data-aos-delay="180">
     <span class="reports">2</span>
     <h4 class="report-text">Professional Responders</h4>
   </div>
 </div>


</div>

</div>
</section>



<!--  Frequently Question Start  -->
<section class="frequently-question section-padding-half">
 <div class="container">
  <div class="row">

  <div class="col-lg-12 col-12">
      <h2 class="text-center mb-3" data-aos="fade-up">Frequently Asked Questions</h2>
    </div>

    <div class="col-md-6 mb-5">
      <h3 class="btn-center">Stay Strong, Stay Right, Speak Up</h3>
      <p class="text-justify" data-aos="fade-up" data-aos-delay="100">We aim at providing swift response to tackle this under reported cases and challenge of sexual harassment, rape, sex for grade and other gender based violence in our schools and immediate community.</p>

      <p data-aos="fade-up" data-aos-delay="100">Minors can report cases on sex for grades, rape sexual harassment, bullying and gender based violence, etc. They can also get tips and guides. This system is aimed to help and provide solutions to this ravaging under reported issues baffling our society. Reported cases are followed up, giving guides and tips on possible way out based on the report and help asked for
      </p>

    <div class="btn-center mt-4"><a href="app/reports" class="btn btn-outline-faq btn-primary" data-aos="fade-up" data-aos-delay="100"><i class="fa fa-phone mr-2"></i> Make a report</a></div>
    </div>

    <div class="col-md-6">
              <div class="accordion" id="frequently-question">     
               <div class="card">
                  <div class="card-body" id="heading_one">
                      <a href="#collapse_one" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse_one">
                      <h5 class="card-title mb-n1">How to get help when needed?</h5></a>
                  </div>
                <div id="collapse_one" class="collapse" aria-labelledby="heading_one" data-parent="#frequently-question">
                  <div class="card-body">
                    Need help? The speakUp chatbot is here for you to respondent to any of your question. 
                    Unable to answer your questions? Never mind, you be assigned to a professional responder on signup
                   
                 </div>
                </div>
              </div>

              <div class="card">
                  <div class="card-body" id="heading_two">
                      <a href="#collapse_two" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse_two">
                      <h5 class="card-title mb-n1">How is my reports handled?</h5></a>
                  </div>
                <div id="collapse_two" class="collapse" aria-labelledby="heading_two" data-parent="#frequently-question">
                  <div class="card-body" >
                    This platform is a confidence reporting platform, you can report as either a victim or an eye witness.
                    Also your personally is well protected as you can submit a report as an anonymous or a bystannder.
                    Your report submitted with solid evidence would be addressed by our well equipped responders 
                   
                 </div>
                </div>
              </div>

              <div class="card">
                  <div class="card-body" id="heading_three">
                      <a href="#collapse_three" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse_three">
                      <h5 class="card-title mb-n1">What can I  do before help comes</h5></a>
                  </div>
                <div id="collapse_three" class="collapse" aria-labelledby="heading_three" data-parent="#frequently-question">
                  <div class="card-body">
                   Kindly stay calm, do not be stressed up. Report to a trusted person not to stay alone.
                   Try as muxh as possible to gether evidences, either voice record, video record or even written document of the seen.
                   
                 </div>
                </div>
              </div>

              <div class="card">
                  <div class="card-body" id="heading_four">
                      <a href="#collapse_four" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse_four">
                      <h5 class="card-title mb-n1">I need Tips and Guides</h5></a>
                  </div>
                <div id="collapse_four" class="collapse" aria-labelledby="heading_four" data-parent="#frequently-question">
                  <div class="card-body">
                   The website is equipped with enough tips and guides for any situationn.
                   
                 </div>
                </div>
              </div>

              <div class="card">
                  <div class="card-body" id="heading_five">
                      <a href="#collapse_five" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="collapse_five">
                      <h5 class="card-title mb-n1">How can I speak with a responder?</h5></a>
                  </div>
                <div id="collapse_five" class="collapse" aria-labelledby="heading_five" data-parent="#frequently-question">
                  <div class="card-body">
                   Upon signup you would get a response from an assigned responder with a minute. Always available to give help
                   
                 </div>
                </div>
              </div>
      
    </div>
  </div>

</div>
</div>
</section>


<button class="float btn" id="menu-share" data-toggle="modal" data-target="#chatbot"><i class="fa fa-wechat"></i></button>

<div aria-hidden="true" aria-labelledby="staticBackdropLabel" role="dialog" tabindex="-1" id="chatbot" data-backdrop="static" data-keyboard="false" class="modal fade" role="dialog">
 <div class="modal-dialog my-scroll-border">

   <div class="modal-content">
    <div class="bot-header"> 
      SpeakUp Chatbot 

      <button type="button" class="close btn" data-dismiss="modal" >&times;</button></div>
      <div class="modal-body my-scroll-div">

        <ul class="chats">

          <!-- Chat by us. Use the class "by-me". -->
          <li class="by-me">
            <div class="avatar pull-left">
              <img class="bot-img" src="images/avatar.jpg" alt="" />
            </div>

            <div class="chat-content">
              <div class="chat-meta">SpeakUp <span class="pull-right">now</span></div>
              Hello there, how can I help you?
              <div class="clearfix"></div>
            </div>
          </li>

          <div class="msg"> </div>

        </ul>

    </div>
    <div class="modal-footer bot-footer my-scroll-footer"> 
      <div class="message-box">
        <input type="text" id="message" class="form-control" placeholder="Enter your reply...">
        <button class="btn btn-primary" style="display: none;" id="reply-bot">Send <i class="fa fa-send"></i></button>
      </div> 
    </div>

  </div>
</div>
</div>

<footer class="site-footer">
  <div class="container">
    <div class="row footer-row">

    
      <div class="col-md-6 col-12 ">
        <ul class="social-icon">
          <li><a href="#" class="fa fa-instagram"></a></li>
          <li><a href="#" class="fa fa-twitter"></a></li>
          <li><a href="#" class="fa fa-facebook"></a></li>
          <li><a href="#" class="fa fa-whatsapp"></a></li>
          <li><a href="#" class="fa fa-envelope"></a></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="text-center col-md-12 col-12" >
        <p class="copyright-text">Copyright &copy; <script>document.write(new Date().getFullYear());</script> WATOTO KWANZA 
          <br>Designed by VICTOR'S GROUP </p>
        </div>

      </div>
    </div>
  </footer>


  <!-- SCRIPTS -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/custom.js"></script>

</body>
</html>