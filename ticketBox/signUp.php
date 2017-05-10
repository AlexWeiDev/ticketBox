<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To descover more events and fun</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="image/LOGO.png">
</head>
<body>

         <!--  <?php
                session_start();
                  $_SESSION['message']="";
                $servername ="localhost";
                $username = "ticketbox";
                $password = "ticketbox";
                $dbname = "accounts";
                $connection=mysql_connect($servername, $username, $password);
                mysql_select_db($dbname, $connection);
          ?> -->

      <section id="nav-wrapper">
             <div class="main-nav flex-container full-size"> 
                     <div class="image-holder">
                         <a href="index.php"><img src="image/LOGO.png" alt=""></a>
                     </div>   
                     <!-- seacrh-bar -->
                     <div class="search-container">
                           <form>
                                <input type="text" class="seacrh-bar" placeholder="Type name of places, celebrity or Event Name">
                                <input type="button" value="Search" name="search">
                           </form>
                        <div class="search-recommend">
                             <a target="_blank" href="#">NHL</a>
                             <a target="_blank" href="#">BRUNO MARS</a>
                             <a target="_blank" href="#">LA LA Land</a>
                             <a target="_blank" href="#">DOTA2 International</a>
                        </div>
                     </div>                 
                     <!-- burger-menu --> 
                     <div class="burger-menu">
                        <div id="one"></div>
                        <div id="two"></div>
                        <div id="three"></div>
                     </div>      
             </div>
             <nav id="desk-top">
                         <ul>
                             <li><a href="">MUSIC</a></li>
                             <li><a href="">SPORT</a></li>
                             <li><a href="">CLASSICS</a></li>
                             <li><a href="">ARTS</a></li>
                             <li><a href="">FAMILY</a></li>
                         </ul>
             </nav>

             <div class="mobile flex-container full-size"> 
                <nav>
                         <ul>
                             <li><a href="">MUSIC</a></li>
                             <li><a href="">SPORT</a></li>
                             <li><a href="">CLASSICS</a></li>
                             <li><a href="">ARTS</a></li>
                             <li><a href="">FAMILY</a></li>
                             <li><input type="text" class="seacrh-bar" placeholder="Type name of places, celebrity or Event"></li>
                         </ul>
                </nav>
            </div> 

    </section>
    <!-- end of section -->

     <section>

         <div class="signUp-container flex-container full-size">
                  	<div class="signUp-panel">
                    		<div class="content-title flex-container form-size">
                    			<h1>Create Your First Id</h1>
                    		</div>
                              <hr>

                         <div id="grating">
                            <p>You have registed as <b><?php echo $_POST['username']?></b> in TicketBox</p>
                            <p>Your password: <b><?php echo $_POST['password']?></b></p>
                            <p>Your Email Address: <b><?php echo $_POST['email']?></b></p>
                            <p>To active your Account, please click the link under:</p>
                            <p><a href="www.google.com">www.google.com/<?php echo $_POST['email']?></a></p>
                            <form action="index.php">
                              <div class="account-panel" id="grating-button">
                              <button type="submit">CONTINUE</button>
                              </div>
                            </form>
                         </div>

                      <!-- regist form for new account -->
                  		<form id="signUp-form" name="signUp-form" acition="signUp.php" method="post">
                    			<div class="account-panel" id="signUp">
                              <span></span>
            		   					  <input type="text" placeholder="Username" name="username" required>
            		   					  <br>
            							    <input type="text" placeholder="Password" name="password" required>
            							    <br>
            							    <input type="text" placeholder="Confirm Password" name="confirm" required>
            							    <br>
            							    <input type="text" placeholder="Email" name="email" required>
            							    <br>
                              <div class="checkbox">
                                  <input type="checkbox" name="option"><label>Keep me logged in.</label>
                                  <br>
                                  <input type="checkbox" name="option"><label>Sent me news and promotion.</label>
                              </div> 
            							    <button type="submit" name="send" value="send the form">Submit</button>
                              <br>
                                <p>By signing up, you agree to the <a href="">Terms of Service</a> and <a href="">Privacy Policy</a>, including Cookie Use. Others will be able to find you by email or phone number when provided.</p>
    							        </div>

                           <?php
                                if (isset($_POST['send'])){
                                  $username=$_POST['username'];
                                  $email=$_POST['email'];
                                  $password=md5($_POST['password']);
                                  $confirm=($_POST['confirm']);
                                  $result = mysql_query("SELECT * FROM users WHERE username='$username'");
                                  $num_rows = mysql_num_rows($result);

                                  if (!preg_match("/^[a-zA-Z ]*$/", $_POST['username'])) {
                                     echo '<script> 
                                           var warningInf=document.forms["signUp-form"].getElementsByTagName("span")[0]; 
                                           warningInf.style.display="block";
                                           warningInf.innerHTML="*Only letters are allowed";
                                           </script>'; 
                                  }

                                  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                                   echo'<script>
                                           var warningInf=document.forms["signUp-form"].getElementsByTagName("span")[0]; 
                                           warningInf.style.display="block";
                                           warningInf.innerHTML="*Invalid email format";
                                           </script>';
                                   }

                                  else if($num_rows>0){
                                  echo'<script>
                                           var warningInf=document.forms["signUp-form"].getElementsByTagName("span")[0]; 
                                           warningInf.style.display="block";
                                           warningInf.innerHTML="*This username has already existed";
                                           </script>';
                                  }
                                   else{
                                      $sql= mysql_query("INSERT INTO users (username, password, email) VALUES('$username','$password','$email')");
                                        echo'<script>  
                                             var oldForm=document.forms["signUp-form"];
                                              var newTitle=document.getElementsByClassName("content-title")[0].getElementsByTagName("h1")[0];
                                               var newSheet=document.getElementById("grating");
                                               newTitle.innerHTML="Hello,New User";
                                               newSheet.style.display="block";
                                               oldForm.style.display="none";</script>';
                                   } 
                              }     
                              mysql_close();
                          ?>
                   		</form>
                     <!-- end of regist form for new account -->
                    
                </div>
         </div>       
     </section>


       <footer id="footer-content-wrapper" >
                <div id="desktop-footer" class="index-footer flex-container full-size">
                        <div class="footer-content">
                            <img src="image/footer-logo-01.png" alt="">
                                   <p>Ticket Box is a world-class seller of different types of tickets for music concert, Movie, Museum and Events. It is a specialized marketing company focusing on providing convinient and safe way to its customer.</p>
                        </div>
                        <div class="footer-content">
                                    <h3>Get Help</h3>
                                    <ul>
                                        <li class=""><a href="">Order Status</a></li>
                                        <li class=""><a href="">Payment Options</a></li>
                                        <li class=""><a href="">Refund</a></li>
                                        <li class=""><a href="">Membership</a></li>
                                    </ul>
                        </div>
                        <div class="footer-content">
                                    <h3>Quick Link</h3>
                                    <ul>
                                        <li class=""><a href="">User Center</a></li>
                                        <li class=""><a href="">Sports</a></li>
                                        <li class=""><a href="">Concerts</a></li>
                                        <li class=""><a href="">Movies</a></li>
                                        <li class=""><a href="">Family</a></li>
                                    </ul>
                        </div>
                         <div class="footer-content">
                                <h3>contact us</h3>
                                <ul>
                                    <li><i class="contact-icon location"></i>123 Canada Dr Burnaby BC Canada V3J 05Z</li>
                                    <li><i class="contact-icon phone"></i>(+1)778-123-4567 / (+1)778-765-4321</li>
                                    <li><i class="contact-icon email"></i>ticket-box@ticketbox.com</li>
                                    <li>Leave Your Contact Email :</li>
                                    <li class="contact-email"><input type="text" class="seacrh-bar" placeholder="Enter email"></li>
                                </ul>
                         </div>
                </div>
                <div id="mobile-footer" class="index-footer flex-container full-size">
                         <div class="footer-content">
                                    <div class="footer-burger-menu" id="help-menu">
                                       <img src="image/arrow.png" alt="">
                                    </div>     
                                    <h3>Get Help</h3>
                                    <ul>
                                        <li class=""><a href="">Order Status</a></li>
                                        <li class=""><a href="">Payment Options</a></li>
                                        <li class=""><a href="">Refund</a></li>
                                        <li class=""><a href="">Membership</a></li>
                                    </ul>
                          </div>
                          <div class="footer-content">
                                    <div class="footer-burger-menu" id="link-menu">
                                      <img src="image/arrow.png" alt="">
                                    </div>     
                                    <h3>Quick Link</h3>
                                    <ul>
                                        <li class=""><a href="">User Center</a></li>
                                        <li class=""><a href="">Sports</a></li>
                                        <li class=""><a href="">Concerts</a></li>
                                        <li class=""><a href="">Movies</a></li>
                                        <li class=""><a href="">Family</a></li>
                                    </ul>
                          </div>
                          <div class="footer-content" id="contact">
                                <h3>contact us</h3>
                                <ul>
                                    <li><i class="contact-icon location"></i>123 Canada Dr Burnaby BC Canada V3J 05Z</li>
                                    <li><i class="contact-icon phone"></i>(+1)778-123-4567 / (+1)778-765-4321</li>
                                    <li><i class="contact-icon email"></i>ticket-box@ticketbox.com</li>
                                    <li class="contact-email"><input type="text" class="seacrh-bar" placeholder="Enter email"></li>
                                </ul>
                                  <ul id="social-meida-mobile">
                                      <li><a class="facebook" href="https://www.facebook.com/"></a></li>
                                      <li><a class="twitter" href=""></a></li>
                                      <li><a class="linkedin" href=""></a></li>
                                      <li><a class="instagram" href=""></a></li>

                                  </ul>
                                  <p>&copy;Designed By Alex Wei & Violet Zhang</p>
                         </div>
                    </div>
    </footer>
    <div class="footer-extent flex-container full-size">
                    <div class="footer-content">
                      <p>&copy;Designed By Alex Wei & Violet Zhang</p>
                    </div>
                    <div class="footer-content">
                     <!--  <ul>
                          <li><a href="">Reference</a></li>
                          <li><a href="">Style Sheet</a></li>
                          <li><a href="">Site Map</a></li>
                      </ul> -->
                    </div>
                      <div class="footer-content" id="social-media">
                      <ul>
                          <li><a class="facebook" href="https://www.facebook.com/"></a></li>
                          <li><a class="twitter" href=""></a></li>
                          <li><a class="linkedin" href=""></a></li>
                          <li><a class="instagram" href=""></a></li>
                      </ul>
                    </div>
    </div>

     <script>
          window.onload=validatForm();

          function validatForm(){
           var oSubmit=document.forms["signUp-form"].getElementsByTagName("button")[0];
           var lInput=document.forms["signUp-form"].getElementsByTagName("input");
           var warningInf=document.forms["signUp-form"].getElementsByTagName("span")[0];

         
          oSubmit.onclick=function(){
          // oSubmit.className="shakeButton";
          for (var i = 0; i < lInput.length; i++) {

            var inputName=lInput[i].name;
            var inputValue=lInput[i].value;
            if(inputName!="option" && inputValue==""){
                 warningInf.style.display="block";
                 warningInf.innerHTML="*You must fill "+inputName+" information";
                 return false; 
            }
            
               else if(lInput[1].value!=lInput[2].value){
                warningInf.style.display="block";
                warningInf.innerHTML="*Your password does not match";
                return false;
              
            }   
          }

          // var userName = document.forms["signUp-form"].[lInput[i]].name;
            // 
         //  if (userName == "") {
         //      alert("userName must be filled out");
         //      return false;
         //   }
         // }
     }

   }
     </script>
</body>
</html>