<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
      <link rel="stylesheet" href="css/mine.css"/>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/w3.css">

    <!-- Custom fonts for intro-->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for intro -->
    <link href="css/business-casual.min.css" rel="stylesheet">
<!-- 
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet"> -->
 <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,800,900,200,100' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400,200,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic' rel='stylesheet' type='text/css'>


  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen"> 

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/fullwidth.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/settings.css" media="screen" />

  <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">
  
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
  <link rel="icon" href="images/favicon.png" type="image/x-icon">

  <!-- Style Switch -->
  <link rel="alternate stylesheet" type="text/css" href="css/colors/yellow-black.css" title="yellow" media="screen" />
    <link rel="alternate stylesheet" type="text/css" href="css/colors/violet-black.css" title="black" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="css/colors/orange-black.css" title="orange" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="css/colors/blue-black.css" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/red-black.css" title="red" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="css/colors/green-black.css" title="green" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="css/colors/pink-black.css" title="pink" media="screen" />
  <link rel="alternate stylesheet" type="text/css" href="css/colors/pale-green-black.css" title="pale-green" media="screen" />

  <!-- styles -->
 <!--  <link href="assets/css/bootstrap.css" rel="stylesheet"> 
  <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="assets/css/docs.css" rel="stylesheet">
  <link href="assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="assets/js/google-code-prettify/prettify.css" rel="stylesheet">
  <link href="assets/css/flexslider.css" rel="stylesheet">
  <link href="assets/css/refineslide.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="assets/css/animate.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/color/default.css" rel="stylesheet">
 -->
  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="assets/ico/favicon.ico">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">


 <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style3.css" rel="stylesheet">

      <!-- Theme Name: Plato -->

    <link rel="stylesheet" href="css/bootstrap.css"/>

  <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/mine.css"/>  

</head>
<body>


	<?php
session_start();
if (!isset($_SESSION['email'])) {
include 'nav.php';
}
else{
   include 'nav2.php'; 
}

?>
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="images/chocha.jpg" alt="Architecture" width="1500" height="800">
   <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-blue"><span class="w3-padding w3-blue w3-opacity-min"><b>Five Star</b></span> <br><br><span class="w3-hide-small w3-text-blues">Essays</span></h1>
    <br>
  </div>
    <div class="w3-display-right w3-padding w3-col l6 m8" style="max-width:500px;">
   <div class="w3-container w3-blue">
      <h2><i class="w3-margin-right"></i>Place Order</h2>
    </div>
  <div class="w3-container w3-white w3-padding-16">
      <form action="">
       <select name="category" id="document">
        <option value="Essay">Essay</option>
        <option value="Research Paper">Research Paper</option>
        <option value="Course Work">Course Work</option>
        <option value="Assignment">Assignment</option>
        <option value="Case Study">Case Study</option>
        <option value="Business Plan">Business Plan</option>
        <option value="Dissertation">Dissertation</option>
        <option value="Biography">Biography</option>
        <option value="Book Report">Book Report</option>
     </select>
     <br>   
     <br>   
      <label for="date">Deadline:</label>
                <input type="date" class="form-control" name="deadline" required>
   <br> 
   <br> 
     <label for="pages"><b>Number of pages</b></label>
     <input type="text" placeholder="Number of pages" name="pages" required>
 <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="order.php">Place your order!</a>
            </div>
    </form>
  </div>
  
  </div>
</header>
<div class="container-fluid">
 <div class="w3-row w3-center w3-padding-16 w3-section w3-light-blue" style="padding:15px" width="80%">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">10+</span><br>
        Partners
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">54+</span><br>
        Current Active Orders
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">96%</span><br>
        Client Satisfaction
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">100+</span><br>
        Meetings
      </div>
    </div>
  <h1 style="color:blue" class="text-center">Advantages of Fivestar</h1>
  <div class="row" style="padding-left:20px">
    <div class="col-md-4 ">
      <span><img src="icons/plagiarism1.png" alt="" width="50px" height="50px"></span>
      <h4>Original Non-Plagiarized Work</h4>
      <p style="font-size:14px">Professionals at Five Star Essays work extremely hard to produce quality original content. They adhere to strict standards to produce non-plagiarizes papers. </p>
    </div>
    
    <div class="col-md-4">
      <span><img src="icons/discount1.png" alt="" width="50px" height="50px"></span>
      <h4>Discounts</h4>
      <p style="font-size:14px">Five Star Essays is big on discounts. We understand that our clients want high quality essays but still need student friendly prices. Our websites guarantees prices that college students can afford. New and loyal clients get amazing discounts. </p>
    </div>
<div class="col-md-4">
      <span><img src="icons/privacy1.png" alt="" width="50px" height="50px"></span>
      <h4>Privacy</h4>
      <p style="font-size:14px">At Five Star Essays, your personal and payment details are completely safe. Our website uses secure encryption for all orders. We are committed to protecting your safety and keeping your personal details private. </p>
    </div>
    
  </div>
  <div class="row" style="padding-left:20px">
    <div class="col-md-4">
    <span><img src="icons/support2.jpg" alt="" width="60px" height="60px"></span>
    <h4>24/7 Support</h4>
    <p style="font-size:14px">Feel free to contact our customer service agents and get all the answers you need. Our live chat is always available 24 hours. </p>
    </div>
  
  
    <div class="col-md-4">
    <span><img src="icons/free1.png" alt="" width="50px" height="50px"></span>
    <h4>Free features</h4>
    <p style="font-size:14px">Professionals at Five Star Essays include free and properly formatted title and reference pages in all papers. We also deliver free revisions and amendments in our papers. </p>
    </div>
    <div class="col-md-4">
    <span><img src="icons/app1.jpg" alt="" width="50px" height="50px"></span>
    <h4>Mobile app</h4>
    <p style="font-size:14px">Coming soon!</p>
    </div>
  
    
    
  </div>
  

</div>

<br>
<br>

   <h2 style="text-align: center;">What our Clients say</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
    <h4>"Quality work delivered in a timely fashion"<br><span style="font-style:italic;">Eugene Maseria ,Student</span></h4>
    </div>
    <div class="item">
      <h4>"They have the best writers in the market"<br><span style="font-style:italic;">Joel Mungai, Student</span></h4>
    </div>
    <div class="item">
      <h4>"Best place to get help with writing online"<br><span style="font-style:italic;">Keith Ochieng, Student</span></h4>
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
<br>
<br>
</div>

 <section id="team" class="wow fadeInUp">
      <div class="container">
          <h3 class="text-center">Writers for all your papers!</h2>
  <p>
We currently have 50+ professional writers in our team. These are experts who have graduated in colleges and universities. You will also get MA and PhD writers from all majors and subject areas. Five Star Essays is one of the best essay writing services in the industry.
</p>
        <div class="section-header">
          <h2>Our Best Writers</h2>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/image1.jpg" alt=""></div>
              <div class="details">
                <h4>Strawberry </h4>
                <span>#7684</span>
                <div class="social">
                  <p>Strawberry 7684 is a native of Illinois and has been writing academic papers for the past 5 years. She holds a Master’s Degree in Economics and is currently pursuing a PhD in the same</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/image2.jpg" alt=""></div>
              <div class="details">
                <h4>Aplle </h4>
                <span>#8963</span>
                <div class="social">
                  <p>Apple 8963 holds a bachelor’s degree in marketing and has vast corporate experience. He loves to keep fit and often participates in mountain climbing.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="images/image4.jpg" alt="" ></div>
              <div class="details">
                <h4>Blueberry </h4>
                <span>#5753</span>
                <div class="social">
                <p>After serving 3 years as a motivational speaker, Blueberry 5753 is now a fulltime writer helping students get excellent scores in their academic papers</p>
                </div>
              </div>
            </div>
          </div>

         
        </div>

      </div>
    </section><!-- #team -->

<div class="container-fluid bg-blue">
  <div class="container">
    <h1 style="text-align: center; color: #fff;">Our Services</h1>
    <br>    
  <div class="col-md-4">
    <ul>
    <li id="services">Essays</li>
    <li id="services">Research Papers</li>
    <li id="services">Course Work</li>
    <li id="services">Assignments</li>
    <li id="services">Case Studies</li></ul>  </div>
  <div class="col-md-4">
    <ul>
      <li id="services">Business Plans</li>
      <li id="services">Dissertations</li>
      <li id="services">Biographies</li>
      <li id="services">Online Classes</li>
      <li id="services">Book Reports</li>
    </ul>
  </div>
  <div class="col-md-4">
  <ul>
    <li id="services">Book Reports</li>
    <li id="services">Editing Services</li>
    <li id="services">Plagiarism Check</li>
    <li id="services">Argumentative essays</li>
    <li id="services">Narrative essays</li>
    </ul>
  </div>
  </div>
<br>
</div>

 <div class="container">
      <h3 style="text-align: center;">More about Five Star Essays</h3>
      <div class="col-md-9">      
      <h4>    
Save Time with Our Customer Essay Writing Services
</h4>
      <p>We understand that essay writing can be tedious and time consuming. You can however save plenty of time and effort by engaging professionals at Five Star Essays. Spend time doing the things you love and let us take care of your academic papers. 
We’ve been offering excellent academic writing services since 2013. You can rest assured that our essay writing services will give you the best grades in your coursework. Just complete our order application form and let our experienced professionals deliver the finest quality work. 
</p>
</div>
     
<div class="col-md-3"> <span><img src="images/fse.png" alt=""></span></div>

    </div>
<div class="container">
      <div class="row">
        <div class="col-md-8">
               <div class="span6">
    <h3>Fully Customized and Original Papers in All Subjects </h3>
    <p>Regardless of how tricky the instructions are, our professional experts always finds a way produce the best quality. We have excellently trained writers who can handle diverse orders in all academic levels. We look at the complexity and the requirements of your assignment and assign it to the best writer. This way, we ensure that you get the best value for your money. </p>
    <ul>
      <li> We cover a wide variety of subjects.</li>
      <li>Our professional writers always follow your instruction and preferred writing style.</li>
      <li> Every paper will always have proper citation and referencing style you choose.</li>
    </ul>
        
          </div>
        </div>
   
     <div class="col-md-4">
       
        
     <h4>Choose FiveStarEssay.com and enjoy the following benefits</h4>
          <!-- start: Accordion -->
          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle active" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                <i class="icon-caret-down"></i> Unique and Original Content</a>
              </div>
              <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
               Order essays, custom papers, projects, and other assignments and get excellent original content written by our professionals from scratch. 
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                <i class="icon-caret-right"></i> Timely delivery of your papers </a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                Give us assignments in full confidence that they will be delivered in due time. Forget delays even on urgent orders
                </div>
              </div>
            </div>
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                <i class="icon-caret-right"></i> 24 hours customer support</a>
              </div>
              <div id="collapseThree" class="accordion-body collapse">
                <div class="accordion-inner">
               Contact us day and night via email, phone call or live chat and get the urgent help you need. Our customer service agents are available 24 hours, 7 days a week. 
                </div>
              </div>
            </div>
              <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                <i class="icon-caret-right"></i>Excellent Discounts</a>
              </div>
              <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">Try our services today and receive great discounts. Remain a loyal client and keep getting amazing discounts at Five Star Essays. Place your order now.
                </div>
              </div>
            </div>
          </div>
          <!--end: Accordion -->
            
     </div>

      </div>
</div>
     





<?php include 'footer.php' ?>
<?php include'chat.php' ?>


    <script src= "js/jquery.min.js"></script>
    <script src= "js/bootstrap.js"></script>

      <script src="assets/js/jquery.js"></script>
  <script src="assets/js/modernizr.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/google-code-prettify/prettify.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script src="assets/js/jquery.prettyPhoto.js"></script>
  <script src="assets/js/portfolio/jquery.quicksand.js"></script>
  <script src="assets/js/portfolio/setting.js"></script>
  <script src="assets/js/hover/jquery-hover-effect.js"></script>
  <script src="assets/js/jquery.flexslider.js"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/cbpAnimatedHeader.min.js"></script>
  <script src="assets/js/jquery.refineslide.js"></script>
  <script src="assets/js/jquery.ui.totop.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="assets/js/custom.js"></script>


    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/mine.css"/>

    <script src= "js/jquery.min.js"></script>
    <script src= "js/bootstrap.js"></script>


      <!-- Bootstrap core about-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap core JavaScript  intro-->
    <script src="vendor2/jquery/jquery.min.js"></script>
    <script src="vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>

    </script>
 <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>