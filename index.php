
<?php 
  include 'dashboard/jayant/include/dbcon.php';
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" />
    <!-- Devicon Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/konpa/devicon@master/devicon.min.css">

    <!-- Web Fonts -->
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <!-- Custom Css -->
    <link rel="stylesheet" href="css/custom.css">
    <title>Jayant Sharma</title>
    <!-- profile-icon -->
	<link rel="icon" href="images/1.jpg" type="image/jpg">
  </head>
  <body>
    <!-- Navbar starts here -->
    <header class="container-fluid nav_style mx-auto">
      <div class="row">
          <div class="col-md-12 col-12">
              <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="myNavbar">
                  <div class="container-fluid justify-content-end">
                    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
                    <button class="navbar-toggler rounded-circle py-2 navbar_btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav  mb-2 mb-lg-0 m-auto">
                        <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#aboutme_section">about me</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#skills_section">skills</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#project_section">projects</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#contact_section">contact me</a>
                        </li>
                        
                        
                      </ul>
                      
                    </div>
                  </div>
                </nav>
          </div>
      </div>
  </header>
  <!-- Navbar Ends Here -->

  <!-- Profile starts -->
  
  <div class=" container-fluid profile">
   <?php 
   $sql2 = "SELECT * FROM details ORDER BY id desc";
    $run2=mysqli_query($con,$sql2);
   ?>
    <div class="row ">
      <div class="col-md-10 mx-auto">
      <div class="row justify-content-around">
      <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start">
      
        <span class="animated_text">Hello I'm</span>
        <h2 class="profile_name">Jayant Sharma</h2>
        <p>Web Developer</p>
        <ul class="profile_contact">
        <?php 
         $result3=mysqli_fetch_assoc($run2);
         $text4=explode("||",$result3['text1']);
         $text5=explode("||",$result3['text2']); 
          $text6=explode("||",$result3['text3']);
          for($i2=0;$i2<count($text4);$i2++){
            echo '<li>'.$text6[$i2].$text5[$i2].'</li>';
           }
         
         
            
        ?>
          
          <!-- <li><i class="fa fa-phone"></i><a href="callto:">+91 7728081684</a></li>
          <li><i class="fa fa-map-marker"></i><address>Jaipur,Rajasthan</address></li> -->
      </ul>
        <ul class="profile_social_icon mb-5">
        <?php $result2=mysqli_fetch_assoc($run2);
        $text1=explode("||",$result2['text1']);
        $text2=explode("||",$result2['text2']); 
         $text3=explode("||",$result2['text3']);
          // print_r($arr2);
          for($i2=0;$i2<count($text1);$i2++){
           echo '<li><a href="'.$text2[$i2].'" target="_blank">'.$text3[$i2].'</a></li>';
          }
        ?>
         
        </ul>
        <div class="profile_buttons">
          <button class="my_button mr-5" onclick="window.open('#contact_section','_self')">Hire Me</button>
          <a href="resume/myresume.pdf" target="_blank"><button class="download">Download CV <i class="fas fa-download"></i></button></a>
         
        </div>

      </div>


        <div class="col-md-3 align-self-center d-none d-lg-block ">
          <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 0.8s; animation-delay: 0.6s; animation-name: fadeInUp;">
            <div class="img-border">
                <img src="images/1.jpg" alt="" class="img-fluid">
            </div>
        </div>
      </div>
        </div>
      </div>
      </div>
    
  </div>

  <!-- Profile ends -->


  <!-- Aboutme Section Starts Here -->
  <div class=" container-fluid py-5" id="aboutme_section">
    <div class="row">
      <div class="col-md-10 col-11 mx-auto">
        <div class="main_title one text-center ">
          <h4>WHO AM I?</h4>
          <h3> <span>ABOUT</span> ME</h3>
          <span class="border"></span>
        </div>
        <div class="row justify-content-between my-5">
          <div class="col-md-4 col-12 d-flex align-items-center">
            <figure class="d-flex">
              <img src="images/1.jpg" class="img-fluid d-lg-none" alt="">
              <img src="images/about.png" class="img-fluid d-none d-lg-block" alt="">
            </figure>
          </div>
          <div class="col-md-7 col-12 aboutme_text align-self-center ">
            <!-- <p>Seems like you are showing concern about getting to know me.</p> -->
            <h2 class="my-3"><span class="animated_text">Hey there!</span></h2>
            <p class="first_para">I am JAYANT. A Passionate Web Developer. I love to play with coding, building websites, and focusing on learning new technologies. When dealing with a project I pay attention to the smallest details addressing problems with patience. </p>
            <p class="second_para">P.S. Pretty much like every developer, I can't survive without StackOverflow and YouTube. Wait, of course Google too :)</p>
            <p class="quote">"Everything has a solution, only if you're trying with patience and hard effort !!"</p>

                      
            <a href="resume/myresume.pdf" style="text-decoration:none" download><button class="download d-block">Download CV <i class="fas fa-download"></i></button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
   <!-- Aboutme Section Ends Here -->

   <!-- Skills Section starts here -->
  
   <div class=" container-fluid py-5" id="skills_section">
    <div class="row">
      <div class="col-md-10 col-11 mx-auto">
        <div class="main_title one text-center pb-4 pb-md-5 ">
          <h4>WHAT I DO</h4>
          <h3>MY <span>SKILLS</span> </h3>
          <span class="border"></span>
        </div>
        <div class="row justify-content-center">

        <?php 
          $sql = "SELECT * FROM skills_category WHERE status = '1' ORDER BY id desc";
          $run = mysqli_query($con,$sql);
          while($result = mysqli_fetch_assoc($run)){
            $skillCat=$result['name'];
        ?>

         <div class="col-md-3 col-11 m-2 m-md-3">
           <h2 class="text-center py-4 py-md-5 text-capitalize"><?php echo $result['name'];?></h2>
           <div class="row justify-content-center">
             <?php

              $sql1 = "SELECT * FROM skills WHERE skill_category='$skillCat' and status = '1' ORDER BY id desc";
              $run1 = mysqli_query($con,$sql1);
              while($result1= mysqli_fetch_assoc($run1)){

             ?>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><?php echo $result1['html']; ?></div>
             <!-- <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-bootstrap-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-css3-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-javascript-plain colored"></i></div> -->
              <?php } ?>
           </div>
         </div>
          <?php }?>
         <!-- <div class="col-md-3 col-11 m-2 m-md-3">
           <h2 class="text-center py-4 py-md-5">Web Design Technology</h2>
           <div class="row justify-content-center">
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-html5-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-bootstrap-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-css3-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-javascript-plain colored"></i></div>
           </div>
         </div>
         <div class="col-md-3 col-11 m-2 m-md-3">
           <h2 class="text-center py-4 py-md-5">Web Design Technology</h2>
           <div class="row justify-content-center">
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-html5-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-bootstrap-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-css3-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-javascript-plain colored"></i></div>
           </div>
         </div>
         <div class="col-md-3 col-11 m-2 m-md-3">
           <h2 class="text-center py-4 py-md-5">Web Design Technology</h2>
           <div class="row justify-content-center">
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-html5-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-bootstrap-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-css3-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-javascript-plain colored"></i></div>
           </div>
         </div>
         <div class="col-md-3 col-11 m-2 m-md-3">
           <h2 class="text-center py-4 py-md-5">Web Design Technology</h2>
           <div class="row justify-content-center">
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-html5-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-bootstrap-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-css3-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-javascript-plain colored"></i></div>
           </div>
         </div>
         <div class="col-md-3 col-11 m-2 m-md-3">
           <h2 class="text-center py-4 py-md-5">Web Design Technology</h2>
           <div class="row justify-content-center">
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-html5-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-bootstrap-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-css3-plain-wordmark colored"></i></div>
             <div class="col-md-6 px-0 col-4 pb-4 pb-md-5 text-center"><i class="devicon-javascript-plain colored"></i></div>
           </div>
         </div> -->
         
       
         
         
         
        </div>
      </div>
    </div>
  </div>
   <!-- Skills Section ends here -->


   <!-- Project Section Starts Here -->
   <div class="container-fluid py-5" id="project_section">
    <div class="row">
      <div class="col-md-10 col-11 mx-auto">
        <div class="main_title one text-center ">
          <h4>PROJECTS</h4>
          <h3>MY <span>PROJECTS</span> </h3>
          <span class="border"></span>
        </div>
        <div class="btn-group d-block text-center py-5">
					<button type="button" id="btn1" class="my_button active m-1 m-md-2">ALL</button>
					<button type="button" id="btn1" data-filter=".php"  class="my_button m-1 m-md-2">PHP</button>
					<button type="button" id="btn1" data-filter=".codeigniter" class="my_button m-1 m-md-2">CODEIGNITER</button>
					<button type="button" id="btn1" data-filter=".design" class="my_button m-1 m-md-2">WEB DESIGN</button>
					<button type="button" id="btn1" data-filter=".wordpress" class="my_button m-1 m-md-2">WORDPRESS</button>
				</div>
        <div class="row justify-content-between grid">
        <?php 
          
					$sql = "SELECT * FROM project WHERE status = '1' ORDER BY id desc";
					$run = mysqli_query($con,$sql);
					while($result = mysqli_fetch_assoc($run)) {
				 ?>
          <div class="col-md-12  project_area  <?php echo $result['project_category']; ?> p-md-5 mb-3 mb-md-5">
            <div class="row justify-content-between">
              <div class="col-md-5 project_image"><figure><img src="./dashboard/jayant/img/project/<?php echo $result['image']; ?>" class="img-fluid" alt=""></figure></div>
              <div class="col-md-6 project_details">
                <h2 class="project_name"><?php echo $result['name']; ?></h2>
                <ul class="stack">
                <?php $string=$result['used_element'];
                      $arr=explode(",",$string);
                      
                      for($i=0;$i<count($arr);$i++){
                        echo "<li>".$arr[$i]."</li>";
                      }
                ?>
                  <!-- <li>Html</li>
                  <li>css</li>
                  <li>Jquery</li>
                  <li>Ajax</li>
                  <li>PHP</li> -->
                </ul>
                <p class="about_project"><?php echo $result['type']; ?></p>
                <div class="project_buttons text-center">
                <button class="my_button mr-2 visit" onClick="window.open('<?php echo $result['site'];?>','_blank');">Visit Site</button>
                <button class="my_button github"><i class="fab fa-github" onClick="window.open('<?php echo $result['github'];?>','_blank');" aria-hidden="true"></i> Github</button>
              </div>

              </div>
            </div>
						
						
					</div>
          <?php } ?>
          
           
        </div>
      </div>
    </div>
  </div>
   <!-- Project Section Ends Here -->
   
   <!-- Contact Section Starts Here -->
   <div class=" container-fluid" id="contact_section">
    <div class="row">
      <div class="col-md-10 col-11 mx-auto">
        <div class="main_title one text-center ">
          <h4>CONTACT ME</h4>
          <h3>GET <span>IN TOUCH WITH ME</span> </h3>
          <span class="border"></span>
        </div>
        <div class="row mt-md-5 mt-5 ">
          <div class="col-md-3 d-none d-lg-block col-10 contact_img">
            <figure>
              <img src="https://icon-library.com/images/cycling-icon/cycling-icon-7.jpg" class="img-fluid" alt="">
            </figure>
          </div>

          <div class="col-md-6 col-10 contact-inner">
            <form id="contactForm">
              <div class="mb-3">
                
                <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Type your name" required autocomplete="off" value="">
                
                
              </div>
              <div class="mb-3">
                
                <input type="number" class="form-control" id="mobile" name="mobile" aria-describedby="emailHelp" placeholder="Type your mobile" onkeyup="mobileVerify()"  required autocomplete="off" maxlength="10">
                <span id="errorMobile" class="text-danger" style="display: none;">Please Enter Correct Mobile No.</span>
                <!-- <div class="invalid-feedback">
                  Please Enter Your Mobile No.
                </div> -->
              </div>
              <div class="mb-3">
                
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Type your e-mail" required autocomplete="off">
                
              </div>
              <div class="mb-3">
                
                <textarea type="textarea" class="form-control" id="message" name="message" aria-describedby="emailHelp" placeholder="Type your Message" required autocomplete="off"></textarea>
                
              </div>
              
              <button class="my_button d-block mx-auto" id="submit" type="submit"> Send</button>
              <span style="color:red;" id="msg"></span>
            </form>
          </div>
          
        
        </div>
      </div>
    </div>
  </div>
   <!-- Contact Section Ends Here -->

   
    <!-- Contact Links Starts -->
    <div class=" container-fluid py-5 contact_links">
      <div class="row">
        <div class="col-10 col-md-10 mx-auto">
          <div class="row justify-content-around">
          <?php for($i2=0;$i2<count($text4);$i2++){
            echo '<div class="col-md-3 col-10 contact_share_div">
            <p>'.$text6[$i2].'</p>
            <br/>
            <p class="font-weight-bold">'.$text5[$i2].'</p>
          </div>';
           
            
          }
          ?>
            <!-- <div class="col-md-3 col-10 contact_share_div">
              <p><i class="fab fa-2x fa-whatsapp" aria-hidden="true"></i></p>
              <br/>
              <p class="font-weight-bold">+917728091234</p>
            </div>
            <div class="col-md-3 col-10 contact_share_div">
              <p><i class="fas fa-2x fa-map-marker" aria-hidden="true"></i></p>
              <br/>
              <p class="font-weight-bold">Jaipur</p>
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Contact Links Ends -->




    <!-- Social Networking Link section starts here -->

    <section class="my-5">
      <div class="container">
        <div class="row justify-content-center socialsites_links">
       <?php for($i2=0;$i2<count($text1);$i2++){
           echo '  <div class="col-lg-1 col-2 ">
           <a href="'.$text2[$i2].'" target="_blank">'.$text3[$i2].'</a>
             
           </div>';
          }
        
          ?>
          <!-- <div class="col-lg-1 col-2 socialsites_links">
            <i class="fab fa-instagram fa-2x" aria-hidden="true"></i>
          </div>
          <div class="col-lg-1 col-2 socialsites_links">
            <i class="fab fa-github fa-2x" aria-hidden="true"></i>
          </div>
          <div class="col-lg-1 col-2 socialsites_links">
            <i class="fab fa-twitter fa-2x" aria-hidden="true"></i>
          </div>
          <div class="col-lg-1 col-2 socialsites_links">
            <i class="fab fa-behance fa-2x" aria-hidden="true"></i>
          </div> -->
        </div>
      </div>
    </section>
    <!-- Social Networking Link section ends here -->

    <!-- Back to Top Functionality -->
    <a id="back2Top" title="Back to top" href="#">&#10148;</a>

      <!-- Footer -->
        <footer class="text-center">
          <p>	&copy; Jayant Sharma 2020 | All Rights Reserved</p>
        </footer>
      <!-- Footer Ends -->

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="js/jquery.js"></script>
    <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="js/isotope.min.js"></script>

    <script>
      $(document).ready(function () {
        // $('#project_section .btn-group button')[0].addClass('active');
let $btns = $('#project_section .btn-group button');

$btns.click(function(e) {
  // $('#project_section .btn-group button')[0].removeClass('active');
  $('#project_section .btn-group button').removeClass('active');
  e.target.classList.add('active');

  let selector = $(e.target).attr('data-filter');
  $('#project_section .grid').isotope({
    filter:selector
  });
  return false;
})

// $('#project_section .btn-group #btn1').trigger('click');

});
/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 100) {
        jQuery('#back2Top').fadeIn();
    } else {
        jQuery('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/

// nav link color change on scroll
$('body').scrollspy({
  target: '#myNavbar',
  offset: 50
});
// contact us form validation
function mobileVerify(){
  var form=document.getElementById('contactForm');
  var phoneno = /^\d{10}$/;
  var mobile = document.getElementById("mobile");
  if(!mobile.value.match(phoneno)){
    document.getElementById('errorMobile').style.display='';
    console.log(mobile.value.match(phoneno));
    // console.log(form);
    document.getElementById("submit").disabled = true;
  }
  if(mobile.value.match(phoneno)){
    document.getElementById('errorMobile').style.display='none';
    document.getElementById("submit").disabled = false;
  }
  if(mobile.value=='')
  {
    document.getElementById('errorMobile').style.display='none';
    document.getElementById("submit").disabled = false;
  }
  
}
document.getElementById('contactForm').addEventListener('submit',function(event){
  
  // $name=$('#name').val();
  // $email=$('#email').val();
  // $mobile=$('#mobile').val();
  // $message=$('#message').val();
  $('#msg').html('');
		$('#submit').html('Please wait');
		$('#submit').attr('disabled',true);
  // console.log($('#contactForm').serialize());
  // console.log($name,$email,$mobile,$message);
  $.ajax({
    url:'contact.php',
    type:'post',
    data:$('#contactForm').serialize(),
    success:function(result){
      jQuery('#msg').html(result);
				jQuery('#submit').html('Send');
				jQuery('#submit').attr('disabled',false);
				jQuery('#contactForm')[0].reset();
    }
  });
  event.preventDefault();

});




// For Navigation
let navItem=document.getElementsByClassName('nav-link');
// console.log(navItem);

 for(let i=0;i<navItem.length;i++){
  // console.log('hello');
  // if(navItem[i].classList=='active'){
  //   navItem[i].classList.remove('active');
  //   console.log('removed');
  // }
  navItem[i].addEventListener('click',function(){
    for(let i=0;i<navItem.length;i++){
     navItem[i].classList.remove('active');
    }
  navItem[i].classList.add('active');
  
 }
  )};
  
  

    </script>
  </body>
</html>