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
     <header>
     </header>
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
         <div class="purchase-process flex-container content-size">
               <div class="title-purchase">
                    <h1>PURCHASE TICKETS</h1>
                </div>
                <nav class="progress-bar flex-container full-size">
                     <ul>
                        <li><a href="purchase-overview.php">Overview</a></li>
                        <li><a href="purchase-payment.php">Payment</a></li>
                        <li><a class="using"  href="purchase-review.php">Review Order</a></li>
                        <li><a href="purchase-confirm.php">Enjoy It!</a></li>
                    </ul>
                </nav>

                <div class="progress-container flex-container content-size">
                       <div class="payment-image">
                              <div class="payment-infor">
                                   <h3>SUMMARY</h3>
                                   <br>
                                   <p><b>Name:</b> Kong : Skull Island 2017</p>
                                   <p><b>Types:</b> (3D CC/DS)</p>
                                   <p><b>Date:</b> March 30, 2017 3:50PM</p>
                                   <div class="payment-result">
                                       <p>Adult Movie Tickets<b> *2 </b><span>CAD$30</span></p>
                                       <p>Discount For Point<span>CAD$0</span></p>
                                       <p>Gift Car Discount<span>CAD$0</span></p>
                                   </div>
                                   <h4>CAD$30</h4>
                               </div>
                       </div>

                       <div class="payment-text ">
                                  
                                  <h2>Payment Information</h2>
                                  <hr>
                                  <div class="review-form">
                                    <div class="form-input">
                                       <p><b>Payment To: </b>TicketBox Tech.Co.,Ltd</p>
                                       <p><b>Payment Method:</b> Credit Card ( Visa )</p>
                                       <p><b>Cardholder Name: </b>Alex Grey</p>
                                       <p><b>Card Name: </b>3700-42xx-xxxx-xx17</p>
                                       <p><b>CVC Code: </b>079V</p>
                                       <p><b>Expired Date: </b>2019-07-02</p>
                                       <p><b>Email Adress: </b>Alex_Grey@gmail.com</p>
                                      
                                    </div>
                                  
                                  </div>
                               <hr>
                             

                              <div class="option-buttons continue-shopping flex-container content-size">
                                 <form action="purchase-confirm.php">
                                 <button type="submit" name="purchase" value="Buy Ticket">CONFIRM</button>
                                 </form>
                              </div>
                       </div>
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
                    <!--   <ul>
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
</body>
</html>