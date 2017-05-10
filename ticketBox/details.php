<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To descover more events and fun</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="shortcut icon" href="image/LOGO.png">
</head>
<body>

   <!-- site logo and research bar -->
     <section id="nav-wrapper">
             <div class="main-nav flex-container full-size"> 
                     <div class="image-holder">
                         <a href="index.php"><img src="image/LOGO.png" alt=""></a>
                     </div>   
                     <!-- seacrh-bar -->
                     <div class="search-container">
                           <form action="searchResult.php" method="post">
                                <input type="text" class="seacrh-bar" placeholder="Type name of places, celebrity or Event Name" name="keyword">
                                <input type="submit" value="search" name="search">
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
                             
                         </ul>

                         <div class="search-container">
                             <form method="post">
                                  <input type="text" class="seacrh-bar" placeholder="Type name of places, celebrity or Event Name" name="keyword">
                                  <input type="submit" value="search" name="search">
                             </form>
                         </div>
                </nav>
            </div> 
    </section>
    <!-- end of section -->

  <section>
       <div class="details-content flex-container content-size">
	        <div class="image-container"><img src="image/MOVIE1.jpg" alt=""></div>
	        <div class="text-container">
	             <div class="title-rating flex-container">
		              <h1>Kong : Skull Island 2017</h1>
		              <span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>&#x2605;</span><span>☆</span>
	              </div>
	                
	              <h4 class="detailed-intro" >Story Line</h4>
		            <p class="detailed-intro">A diverse team of scientists, soldiers and adventurers unite to explore a mythical, uncharted island in the Pacific, as dangerous as it is beautiful. Cut off from everything they know, the team ventures into the domain of the mighty Kong, igniting the ultimate battle between man and nature... <span><a href="">Read More</a></span></p>
		            <h4>Director</h4>
		            <p>Jordan Vogt-roberts</p>
		            <h4>Casts</h4>
		            <p> Tom Hiddleston , Samuel L Jackson , John Goodman , Brie Larson...</p>
		            <h4>Release Date</h4>
		            <p>February 28, 2017 (Odeon Leicester Square)<br>March 10, 2017 (United States)</p>
	              <form>
	                  <button type="submit">View Trailer</button>
	                  <button type="submit">Share</button>
                </form>
	        </div>
       </div>
  </section>

  <section id="order-option" class="content-size">

       <div class="details-content flex-container content-size">
            <div class="calender">
              <div class="calender-icon">
               <img src="image/calendar.png" alt="">
              </div>
              <label>SELECT DATE:</label>
              <input type="text" id="datepicker" placeholder="Today">
            </div>
       </div>  

        <div class="details-content flex-container content-size">
           <div class="ticket-option">
               <h3>Vancouver International Village Cinemas</h3>
               <span>88 west pender,Vancouver,BC, V6B 6N9</span>
               <hr>
               <div class="selector">
                 <span>3D CC/DS</span>
                 <input type="radio" id="radioa" name="radios">
                 <label for="radioa">3:10PM</label>
                 <input type="radio" id="radiob" name="radios">
                 <label for="radiob">3:50PM</label>
                 <input type="radio" id="radioc"  name="radios">
                 <label for="radioc">10:10PM</label> 
              
               </div>
               <hr>
               <div class="selector">
               <span>CC/DS</span>
                 <input type="radio" id="radiod" name="radios">
                 <label for="radiod">3:10PM</label>
                 <input type="radio" id="radioe" name="radios">
                 <label for="radioe">3:50PM</label>
                 <input type="radio" id="radiof"  name="radios">
                 <label for="radiof">10:10PM</label> 
               </div>
               <form action="purchase-overview.php">
               <button type="submit" name="purchase" value="Buy Ticket">Buy Ticket</button>
               </form>

           </div>
           <div class="ticket-option">
               <h3>Burnaby Shopping Center Cinemas</h3>
               <span>777 North Road,Burnaby,BC, V6B 6N9</span>
               <hr>
               <div class="selector">
                 <span>3D CC/DS</span>
                 <input type="radio" id="radio1" name="radios">
                 <label for="radio1">3:10PM</label>
                 <input type="radio" id="radio2" name="radios">
                 <label for="radio2">3:50PM</label>
                 <input type="radio" id="radio3"  name="radios">
                 <label for="radio3">10:10PM</label> 
                
               </div>
               <hr>
               <div class="selector">
                 <span>CC/DS</span>
                 <input type="radio" id="radio4" name="radios">
                 <label for="radio4">3:10PM</label>
                 <input type="radio" id="radio5" name="radios">
                 <label for="radio5">3:50PM</label>
                 <input type="radio" id="radio6"  name="radios">
                 <label for="radio6">10:10PM</label> 
               </div>
               <button type="submit" name="purchase" value="Buy Ticket">Buy Ticket</button>
           </div>

       </div> 

       <div class="details-content flex-container content-size">
           <div class="ticket-option">
               <h3>Cineplex Cinemas metropolis</h3>
               <span>4700 Kingsway, Burnaby, BC V5H 4N2</span>
               <hr>
               <div class="selector">
               <span>3D CC/DS</span>
                 <input type="radio" id="radio_1" name="radios">
                 <label for="radio_1">3:10PM</label>
                 <input type="radio" id="radio_2" name="radios">
                 <label for="radio_2">3:50PM</label>
                 <input type="radio" id="radio_3"  name="radios">
                 <label for="radio_3">10:10PM</label> 
               </div>
               <hr>
               <div class="selector">
                  <span>CC/DS</span>
                 <input type="radio" id="radio_4" name="radios">
                 <label for="radio_4">3:10PM</label>
                 <input type="radio" id="radio_5" name="radios">
                 <label for="radio_5">3:50PM</label>
                 <input type="radio" id="radio_6"  name="radios">
                 <label for="radio_6">10:10PM</label> 
               </div>
               <button type="submit" name="purchase" value="Buy Ticket">Buy Ticket</button>
                 

           </div>
           <div class="ticket-option">
               <h3>Silvercity Riverport Richmond</h3>
               <span>14211 Entertainment Way, Richmond, BC V6W 1K4</span>
               <hr>
               <div class="selector">
               <span>3D CC/DS</span>
                 <input type="radio" id="radio_a" name="radios">
                 <label for="radio_a">3:10PM</label>
                 <input type="radio" id="radio_b" name="radios">
                 <label for="radio_b">3:50PM</label>
                 <input type="radio" id="radio_c"  name="radios">
                 <label for="radio_c">10:10PM</label> 
               </div>
               <hr>
               <div class="selector">
                 <span>CC/DS</span> 
                  <input type="radio" id="radio_d" name="radios">
                 <label for="radio_d">3:10PM</label>
                 <input type="radio" id="radio_e" name="radios">
                 <label for="radio_e">3:50PM</label>
                 <input type="radio" id="radio_f"  name="radios">
                 <label for="radio_f">10:10PM</label> 
               </div>
               <button type="submit" name="purchase" value="Buy Ticket">Buy Ticket</button>
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
                      </ul>
                       -->
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

    <div id="loginScreen">
       <div class="account-panel" id="signIn-account">
            <h1 class="account-panel-title">LOG IN</h1>
            <p class="account-panel-para">Explore more events and fun</p>
          <form>
              <input type="text" placeholder="Username" name="uname" required>
              <input type="text" placeholder="Password" name="upass" required>
              <button type="submit">LOGIN</button><br>
              <h4><a href="signUp.php">Do not have an account?</a></h4>
          </form>
       </div>

       <div class="account-panel" id="signIn-socialMedia">
            <div class="signIn-image">
                <img src="image/signInB.jpg" alt="signIn">
            </div>
            <div class="cover"></div>
    
             <div class="signIn-text">
                <h1 class="account-panel-title">SIGN IN</h1>
                <p class="account-panel-para">with one of your social media profile, to share a lot of hot and fresh events with your friens.</p>
                     <form action="https://www.facebook.com/">
                       <button type="submit" id="facebook-button"></button>
                    </form>
                    <form action="https://accounts.google.com/ServiceLogin?hl=en&passive=true&continue=https://www.google.ca/%3Fgfe_rd%3Dcr%26ei%3DcHTlWPjPDc_M8gecxqqgCw">
                    <button type="submit" id="google-button"></button>
                    </form>
                    <form action="https://twitter.com/">
                    <button type="submit" id="twitter-button"></button>
                    </form>
              
            </div>

       </div>
        
         <a href="#" class="cancel">&times;</a>
    </div>

    <div id="popup-cover"> 
    </div>


  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="Javascript/mainJs.js"></script>

 <script>
      $(function() {
        $( "#datepicker" ).datepicker();
      } );
  </script>



</body>
</html>