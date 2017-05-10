<!-- <?php
      
          $_SESSION['message']="";
          $servername ="localhost";
          $username = "ticketbox";
          $password = "ticketbox";
          $dbname = "accounts";
          $connection=mysqli_connect($servername, $username, $password, $dbname);
       

      //         if (!$connection) {
      //          die("Connection failed: " . mysqli_connect_error());
      //        }else{
      //        echo "Connected successfully";
      // }
               
            $result=NULL;
            $queryArray = array();
            $goodQuery="";
            $search_output="";
            if (isset($_POST['search']) && $_POST['search'] != ""){
            $goodQuery="true";
            $keyword=$connection->real_escape_string($_POST['keyword']);
            // $sql ="SELECT id, events, celebrity,type,event_time,place FROM searchengine";
            $result = $connection->query("SELECT * FROM searchengine WHERE id LIKE '$keyword%' OR events LIKE '$keyword%'  OR Celebrity LIKE '$keyword%' OR type LIKE '$keyword%' OR event_time LIKE '$keyword%' OR place LIKE '$keyword%'OR city LIKE '$keyword%'");
                                    
            if ($result->num_rows> 0) {
                $search_output = "<hr /><strong>$result</strong><hr />";
                // output data of each row
                while($rows = $result->fetch_assoc()) {
                    $queryArray[] = $rows;
                    // echo "id: " . $rows["id"]. " events: " . $rows["events"]. " Celebrity: " . $rows["celebrity"]. "Type:". $rows["type"]."Event Time". $rows["event_time"]."Place:". $rows["place"]." City:". $rows["city"]. " <br>";
                }
            } else {
                // echo "No results";
                  $goodQuery = false;
                  $search_output = "<hr />0 results for <strong>$searchquery</strong><hr />";
             }
            }
              if($goodQuery){
                  $_SESSION['search_output'] = $queryArray;
                  header("Location:searchResult.php");
                  echo $search_output;
                  exit;
              }
              else{
              echo $search_output;
              }
  
             /*login system*/
             if(isset($_POST['signIn'])){
               if($username!="" && $password!=""){
                  $username=mysqli_real_escape_string($_POST['username']);
                  $password=md5($_POST['password']);
                  header("Location:searchResult.php");
                } 

                 else{
                    echo "please fill out all fileds";
                }
              } 
            mysqli_close($connection);
  ?> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ticket Box</title>
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="shortcut icon" href="image/LOGO.png">
</head>
<body>
   
 <!--     head navigation bar  -->
     <header>
     	<nav class="index-nav flex-container full-size">
     		<ul class="user-account">
     			<li>
	     			<span>Hi, Welcome to Ticket Box </span>
	      		    [<a id="button" href="#loginScreen"> Sign In</a> ]
      		    </li>
     			<li class="single-sub"> 
     			     <a href="">User Center</a>
	                 <ul class="subtitle">
	                    <li><a title="LA" href="#"  target="_blank">My Ticket</a></li>
	                    <li><a title="NY" href="#"  target="_blank">Retrade</a></li>
	                    <li><a title="CH" href="#"  target="_blank">Setting</a></li>
	                    <li><a title="CH" href="#"  target="_blank">Coupons</a></li>
	                 </ul>
     			</li>
     		</ul>
              
     		 <ul class="website-tools">
     			    <li class="mega-sub">
                         <a href="#"><i class="icon"></i>Location</a>
                         <ul class="subtitle">
                            <li class="sub-menu-title"><span>USA Cities</span></li>
                            <li><a title="LA" href="#"  target="_blank">Los Angles</a></li>
                            <li><a title="NY" href="#"  target="_blank">New York</a></li>
                            <li><a title="CH" href="#"  target="_blank">Chicago</a></li>
                            <li><a title="MI" href="#"  target="_blank">Miami</a></li>
                            <li><a title="SF" href="#"  target="_blank">San francisco</a></li>
                            <li><a title="BS" href="#"  target="_blank">Boston</a></li>
                            <li><a title="HS" href="#"  target="_blank">Houston</a></li>
                            <li><a title="SE" href="#"  target="_blank">Seattle</a></li>
        
                            <li class="sub-menu-title"><span>CANADA Cities</span></li>
                            <li><a title="LA" href="#"  target="_blank">Toronto</a></li>
                            <li><a title="NY" href="#"  target="_blank">Vancouver</a></li>
                            <li><a title="CH" href="#"  target="_blank">Ottawa</a></li>
                            <li><a title="MI" href="#"  target="_blank">Montreal</a></li>
                            <li><a title="SF" href="#"  target="_blank">Quebec City </a></li>
                            <li><a title="BS" href="#"  target="_blank">Calgary</a></li>
                            <li><a title="HS" href="#"  target="_blank">Edmonton</a></li>
                            <li><a title="SE" href="#"  target="_blank">Regina</a></li>
                            <li><a title="AT" href="#"  target="_blank">Victoria</a></li>
                        </ul>
                    </li>

     			    <li class="single-sub">
                        <a href="#"><i class="icon globle"></i>Globle sites</a>
                        <ul class="subtitle">
                            <li><a lang="fr" title="LA" href="#"  target="_blank">Français</a></li>
                            <li><a lang="es" title="NY" href="#"  target="_blank">Español</a></li>
                            <li><a lang="zh-Hans" title="CH" href="#"  target="_blank">中文</a></li>
                            <li><a lang="ja" title="CH" href="#"  target="_blank">日本语</a></li>
                        </ul>

                    </li>

                    <li class="single-sub">
                        <a href="#"><i class="icon support"></i>T-Support</a>
                        <ul class="subtitle">
                                <li><a title="LA" href="#"  target="_blank">Guide</a></li>
                                <li><a title="NY" href="#"  target="_blank">Report</a></li>
                                <li><a title="CH" href="#"  target="_blank">Policy</a></li>
                                <li><a title="CH" href="#"  target="_blank">Q&A</a></li>
                        </ul>
                    </li>
     		</ul>
     	</nav>
     </header>
     <!-- end of head navigation bar-->
     
     <!-- site logo and research bar -->
     <section id="nav-wrapper">
             <div class="main-nav flex-container full-size"> 
                     <div class="image-holder">
                         <a href="index.php"><img src="image/LOGO.png" alt="ticketbox-logo"></a>
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
                             <li><a href="">CLASSICAL</a></li>
                             <li><a href="">ARTS</a></li>
                             <li><a href="">FAMILY</a></li>
                         </ul>
             </nav>

             <div class="mobile flex-container full-size"> 
                <nav>
                         <ul>
                             <li><a href="">MUSIC</a></li>
                             <li><a href="">SPORT</a></li>
                             <li><a href="">CLASSICAL</a></li>
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
     
     <!-- image slider section  -->
    <section id="image-slider-wrapper">
              <div id="desktop-slider" class="image-slider flex-container full-size">
                    <img src="image/Music550.png" alt="type-music">
                   <img src="image/movie550.png" alt="type-classical">
                   <img src="image/Sports55011.png" alt="type-sport">
                   <img src="image/Family550.png" alt="type-movie">
             </div>

             <div class="image-selector flex-container box-size">
                    <div class="selector-item"><img src="image/MusicIcon.png" alt="type-music"></div>
                    <div class="selector-item"><img src="image/MovieIcon.png" alt="type-classical"></div>
                    <div class="selector-item"><img src="image/SportsIcon.png" alt="type-sport"></div>
                    <div class="selector-item"><img src="image/FamilyIcon.png" alt="type-movie"></div>
             </div>
    </section>
     <!-- end of image slider section  -->

    <section id="ticket-content-wrapper">
            <!-- desktop version -->
            <div class="index-content">
                     <div class="content-title flex-container content-size">
                         <h2>COMING SOON</h2>
                    </div>
                    <div class="ticket-slider flex-container content-size">
                          <form>
                               <input type="button" value="MOVIE" class="button-selected">
                               <input type="button" value="CONCERT">
                               <input type="button" value="SPORT">
                               <input type="button" value="FAMILY">
                          </form>
                    </div>

                    <!-- ticket-slider -->
                    <div id="event-intro" class="ticket-slider flex-container content-size">
                          <div class="poster-holder">
                                <a href=""><img src="image/MOVIE0.jpg" alt="ticket-infor-new"></a> 
                                <div class="poster-infor"> 
                                    <div class="movie"> 
                                      <h4>POWER MOVIE 2017</h4>  
                                      <span>Summer 2017</span><br>
                                      <span>(2D) $10</span>  
                                      <span>(3D) $15</span>
                                    </div> 
                                    <div class="concert">  
                                        <h4>International Tour I</h4>   
                                        <span>Fall 2018</span><br>
                                        <span> $50  $80  $120</span>             
                                    </div>
                                    <div class="sport">  
                                        <h4>Hockey:Chicago vs. Washington</h4>   
                                        <span>October 2017</span><br> 
                                        <span> $70  $100  $130</span>                     
                                    </div> 

                                    <div class="family">  
                                        <h4>Color in Motion 5k</h4>   
                                        <span>January 14, 2017</span><br> 
                                        <span>Adult:$20 Under 12:$10</span>                     
                                    </div> 
                                </div>   
                          </div>

                          <div class="poster-holder">
                                <a href="details.php"><img src="image/MOVIE1.jpg" alt="ticket-infor-new"></a>
                                <div class="poster-infor"> 
                                   <div class="movie">  
                                      <h4>Kong: Skull Island</h4>   
                                      <span>March 10, 2017</span><br>
                                      <span>(3D CC/DS) $ 15</span>
                                      <span>(CC/DS) $9</span>  
                                   </div>   
                                   <div class="concert">  
                                        <h4>Coldplay 2017</h4>   
                                        <span>March 30th 2017</span><br>
                                        <span> $150  $180  $220</span>             
                                    </div>
                                    <div class="sport">  
                                        <h4>Soccer: Vancouver Whitecaps 2017</h4>   
                                        <span>Summer  2017</span><br> 
                                        <span> $65  $85  $125</span>                     
                                    </div> 
                                    <div class="family">  
                                        <h4>VSO Concert Show</h4>   
                                        <span>April 7, 2017</span><br> 
                                        <span>$35 $70 $100</span>                     
                                    </div>                     
                                </div>
                             
                          </div>
                           <div class="poster-holder">
                                <div class="poster-infor">  
                                    <div class="movie">  
                                      <h4>Life</h4>   
                                      <span>March 24, 2017</span><br>
                                      <span>(CC/DS) $9</span>
                                    </div>
                                     <div class="concert">  
                                        <h4>International Opera Concert</h4>   
                                        <span>May 2nd, 2017</span><br>
                                        <span>$40 $60 $80</span>             
                                    </div>
                                    <div class="sport">  
                                        <h4>MMA 2017</h4>   
                                        <span>January 2017</span><br> 
                                        <span>$120 $200 $300</span>                     
                                    </div> 
                                    <div class="family">  
                                        <h4>Sea To Sky Gondola</h4>   
                                        <span>Day Pass :$40</span><br> 
                                        <span>Annual Pass :$120</span>                     
                                    </div>                                               
                                </div>
                                 <a href=""><img src="image/MOVIE2.jpg" alt="ticket-infor-new"></a>
                          </div>
                           <div class="poster-holder">
                                <div class="poster-infor"> 
                                    <div class="movie">   
                                        <h4>Space Between Us</h4> 
                                        <span>February 2nd, 2017</span><br>
                                        <span>(CC/DS) $10</span>
                                    </div> 
                                     <div class="concert">  
                                        <h4>Requiem 2017</h4>   
                                        <span>February 26th, 2017</span><br>
                                        <span>$35  $65  $95</span>             
                                    </div>
                                    <div class="sport">  
                                        <h4>Baseball Postseason 2017</h4>   
                                        <span>October 2017</span><br> 
                                        <span>$150  $250 $350</span>                     
                                    </div> 
                                    <div class="family">  
                                        <h4>Abbotsford Tulip</h4>   
                                        <span>Day Pass: $5</span><br> 
                                        <span>Weekly Pass: $20</span>                     
                                    </div>                                               
                                </div>
                                 <a href=""><img src="image/MOVIE3.jpg" alt="ticket-infor-new"></a>
                          </div>
                          <div class="poster-holder">
                                    <div class="poster-infor">  
                                        <div class="movie">   
                                           <h4>Detour</h4>
                                           <span>January 1st, 2017</span><br>
                                           <span>(CC/DS) $10</span>  
                                        </div>      
                                         <div class="concert">  
                                            <h4>Hyuna(North America Tour)</h4>   
                                            <span>February-March 2017</span><br>
                                            <span>$130  $150  $170</span>             
                                        </div>
                                        <div class="sport">  
                                          <h4>World Figure Skating</h4>   
                                          <span>Winter 2017</span><br> 
                                          <span>$350  $450  $550</span>                     
                                        </div> 
                                      <div class="family">  
                                          <h4>Vancouver Children's Festival</h4>   
                                          <span>May-June, 2017</span><br> 
                                          <span>Events Pass:$15</span>                     
                                       </div>                                            
                                    </div>
                                 <a href=""><img src="image/MOVIE4.jpg" alt="ticket-infor-new"></a>
                          </div>
                    </div>  
            </div>
    </section>

    <section>
         <div class="index-content popular-events">
                   <div class="content-title flex-container content-size">
                         <h2>BEST SALES</h2>
                   </div>

                    <div class="content-title flex-container content-size">
                            <p>What’s popular now? Follow up our best saled tickets.</p>
                   </div>

                   <div class="popular-content flex-container content-size">
                           <div class="popular-item-cell flex-container content-size">
                               <a href="#" class="fill-div"></a>
                               <div class="image-container">
                                   <img src="image/bestSales1.jpg" alt="hot-events-ticket">
                               </div>
                                <div class="text-container">
                                       <h4>Taylor Swift The 1989 World Tour</h4>
                                       <p>The 1989 World Tour was the fourth concert tour by American singer-songwriter Taylor Swift, in support of her fifth studio album, 1989 (2014).</p>
                                </div>
                          </div>

                          <div class="popular-item-cell flex-container content-size">
                               <a href="#" class="fill-div"></a>
                                <div class="image-container">
                                   <img src="image/bestSales2.jpg" alt="hot-events-ticket">
                                </div>
                                <div class="text-container">
                                       <h4>La La Land(2016)</h4>

                                       <p>A jazz pianist falls for an aspiring actress in Los Angeles.</p>
                                </div>
                          </div>

                     </div>

                     <div class="popular-content flex-container content-size">
                           <div class="popular-item-cell flex-container content-size">
                               <a href="#" class="fill-div"></a>
                               <div class="image-container">
                                   <img src="image/bestSales3.jpg" alt="hot-events-ticket">
                               </div>
                                <div class="text-container">
                                       <h4>Beauty and the Beast(2017)</h4>
                                       <p>An adaptation of the fairy tale about a monstrous-looking prince and a young woman who fall in love.</p>
                                </div>
                          </div>
                          <div class="popular-item-cell flex-container content-size">
                                <a href="#" class="fill-div"></a>
                               <div class="image-container">
                                   <img src="image/bestSales4.jpg" alt="hot-events-ticket">
                                </div>
                                   <div class="text-container">
                                       <h4>Doctor Strange(2016)</h4>
                                       <p>While on a journey of physical and spiritual healing, a brilliant neurosurgeon is drawn into the world of the mystic arts.</p>
                                   </div>
                          </div>

                     </div>
                     <div class="popular-content flex-container content-size">
                           <div class="popular-item-cell flex-container content-size">
                              <a href="#" class="fill-div"></a>
                               <div class="image-container">
                                   <a href=""><img src="image/bestSales5.jpg" alt="hot-events-ticket"></a>
                               </div>
                                <div class="text-container">
                                       <h4>EDM 2017</h4>
                                       <p>Ultra Music Festival is an annual outdoor electronic music festival that takes place during March in the city of Miami, Florida. The festival was founded in 1999 by Russell Faibisch and Alex Omes.</p>
                                </div>
                          </div>
                          <div class="popular-item-cell flex-container content-size">
                             <a href="#" class="fill-div"></a>
                               <div class="image-container">
                                   <img src="image/bestSales6.jpg" alt="hot-events-ticket">
                                </div>
                                   <div class="text-container">
                                       <h4>Moonlight(2016)</h4>
                                       <p>A chronicle of the childhood, adolescence and burgeoning adulthood of a young, African-American, gay man growing up in a rough neighborhood of Miami.</p>
                                   </div>
                          </div>

                     </div>
              
        </div>
             

    
    </section>

    <section id="celebrity-content-wrapper">
         <div class="index-content">
                   <div class="content-title flex-container content-size">
                         <h2>HOT ENTERTAINERS</h2>  
                   </div>

                    <div class="content-title flex-container content-size">
                        <p></p>
                   </div>
                    
                   <div class="celebrity-content flex-container item-size">
                       <div class="celebrity-item ">         
                           <div class="item-box">
                                <div class="celebrity-infor">  
                                    <h4>JUSTIN BIBBER</h4> 
                                       <div class="celebrity-infor-list">
                                       <ul>
                                          <li><a href="">Site</a></li>
                                          <li><a href="">Events</a></li>
                                          <li><a href="">Ticket</a></li>
                                          <li><a href="">Others</a></li>
                                        </ul>
                                    </div>                           
                                </div>
                               <a href=""><img class="item-large" src="image/justin-bieber.jpg" alt="celebrity-justin-bieber"></a>
                           </div>
                           <div class="item-box">
                                <div class="celebrity-infor">  
                                    <h4>BRUNO MARS</h4>
                                       <div class="celebrity-infor-list">
                                       <ul>
                                          <li><a href="">Site</a></li>
                                          <li><a href="">Events</a></li>
                                          <li><a href="">Ticket</a></li>
                                          <li><a href="">Others</a></li>
                                        </ul>
                                    </div>                            
                                </div>
                                <a href=""><img class="item-small" src="image/bruno-mars.jpg" alt="celebrity-bruno-mars"></a>
                            </div>
                       </div>
                        <div class="celebrity-item"> 
                            <div class="item-box">
                                <div class="celebrity-infor">  
                                    <h4>ARIANA GRANDE</h4>
                                       <div class="celebrity-infor-list">
                                       <ul>
                                          <li><a href="">Site</a></li>
                                          <li><a href="">Events</a></li>
                                          <li><a href="">Ticket</a></li>
                                          <li><a href="">Others</a></li>
                                        </ul>
                                    </div>                            
                                </div>
                                 <a href=""><img class="item-small" src="image/ariana-grande.jpg" alt="celebrity-ariana-grande"></a>
                            </div>
                            <div class="item-box">
                                <div class="celebrity-infor">  
                                    <h4>JUSTIN TIMBERLAKE</h4>
                                       <div class="celebrity-infor-list">
                                       <ul>
                                          <li><a href="">Site</a></li>
                                          <li><a href="">Events</a></li>
                                          <li><a href="">Ticket</a></li>
                                          <li><a href="">Others</a></li>
                                        </ul>
                                    </div>                            
                                </div>
                                <a href=""><img class="item-large" src="image/justin-timberlake.jpg" alt="celebrity-justin-timberlake"></a>
                           </div>
                          
                       </div>
                         <div class="celebrity-item">
                            <div class="item-box">
                                <div class="celebrity-infor">  
                                    <h4>TAYLOR SWIFT</h4>  
                                       <div class="celebrity-infor-list">
                                       <ul>
                                          <li><a href="">Site</a></li>
                                          <li><a href="">Events</a></li>
                                          <li><a href="">Ticket</a></li>
                                          <li><a href="">Others</a></li>
                                        </ul>
                                    </div>                          
                                </div>
                               <a href=""><img src="image/taylor-swift.jpg" alt="celebrity-jtaylor-swift"></a>
                           </div>
                            <div class="item-box">
                                <div class="celebrity-infor">  
                                    <h4>CHAINSMOKERS</h4>   
                                    <div class="celebrity-infor-list">
                                       <ul>
                                          <li><a href="">Site</a></li>
                                          <li><a href="">Events</a></li>
                                          <li><a href="">Ticket</a></li>
                                          <li><a href="">Others</a></li>
                                        </ul>
                                    </div>                         
                                </div>
                                 <a href=""><img  src="image/the-chainsmokers.jpg" alt="celebrity-the-chainsmokers"></a>
                           </div>
                       </div>  

                       <div class="celebrity-item">
                             <div class="item-box">
                                <div class="celebrity-infor">  
                                    <h4>ED SHEERAN</h4>
                                    <div class="celebrity-infor-list">
                                       <ul>
                                          <li><a href="">Site</a></li>
                                          <li><a href="">Events</a></li>
                                          <li><a href="">Ticket</a></li>
                                          <li><a href="">Others</a></li>
                                        </ul>
                                      </div>                        
                                </div>
                                <a href=""><img src="image/ed-sheeran.jpg" alt="celebrity-ed-sheeran"></a>
                             </div>
                            <div class="item-box">
                                <div class="celebrity-infor">  
                                    <h4>ADELE ADKINS</h4>

                                      <div class="celebrity-infor-list">
                                       <ul>
                                          <li><a href="">Site</a></li>
                                          <li><a href="">Events</a></li>
                                          <li><a href="">Ticket</a></li>
                                          <li><a href="">Others</a></li>
                                        </ul>
                                      </div>                      
                                </div>

                                 <a href=""><img src="image/adele.jpg" alt="celebrity-adele"></a>
                           </div>
                       </div>  
                         <div class="celebrity-item">
                             <div class="item-box">
                                <div class="celebrity-infor">  
                                    <h4>TROYE SIVAN</h4>
                                    <div class="celebrity-infor-list">
                                       <ul>
                                          <li><a href="">Site</a></li>
                                          <li><a href="">Events</a></li>
                                          <li><a href="">Ticket</a></li>
                                          <li><a href="">Others</a></li>
                                        </ul>
                                      </div>                        
                                </div>
                                <a href=""><img src="image/Troye.jpg" alt="celebrity-troye"></a>
                             </div>
                             <div class="item-box">
                                <div class="celebrity-infor">  
                                    <h4>EMMA WATSON</h4>
                                    <div class="celebrity-infor-list">
                                       <ul>
                                          <li><a href="">Site</a></li>
                                          <li><a href="">Events</a></li>
                                          <li><a href="">Ticket</a></li>
                                          <li><a href="">Others</a></li>
                                        </ul>
                                      </div>                        
                                </div>
                                <a href=""><img src="image/emma-watson.jpg" alt="celebrity-emma-watson"></a>
                             </div>
                          </div>
                   </div>
         </div>
    </section>

    <footer id="footer-content-wrapper" >

                <div id="desktop-footer" class="index-footer flex-container full-size">
                        <div class="footer-content">
                            <img src="image/footer-logo-01.png" alt="footer-logo-ticket-website">
                                   <p>TicketBox is a still building template of online booking system which aimed at helping customer to book tickets safely and conveniently. Various types of tickets of music concert, Movie, Museum and Events can be easily found with It. </p>
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
                                        <li class=""><a href="">Sport</a></li>
                                        <li class=""><a href="">Concert</a></li>
                                        <li class=""><a href="">Movie</a></li>
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
                                       <img src="image/arrow.png" alt="burger-menu-ticketbox">
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
                                      <img src="image/arrow.png" alt="burger-menu-ticketbox">
                                    </div>     
                                    <h3>Quick Link</h3>
                                    <ul>
                                        <li class=""><a href="">User Center</a></li>
                                        <li class=""><a href="">Sport</a></li>
                                        <li class=""><a href="">Concert</a></li>
                                        <li class=""><a href="">Movie</a></li>
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
          <form method="post">
              <input type="text" placeholder="Username" name="username" required>
              <input type="text" placeholder="Password" name="password" required>
              <button type="submit" name="signIn">LOGIN</button><br>
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
    <script type="text/javascript" src="Javascript/mainJs.js"></script>
</body>

</html>