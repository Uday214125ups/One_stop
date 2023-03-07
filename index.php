<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap"rel="stylesheet"/>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <section class="landing_page">
        <div class="bottom_white-circle"></div>
        <div class="top_white-circle"></div>
        <div class="left_pink-cicle"></div>
        <div class="top-left_pink-cicle"></div>
        <div class="right_pink-circle"></div>
        <img src="v1_3.png" class="img-lady" alt="actor">
        <div class="images">
            <img src="v3_67.png" class="img-dancer">
        </div>
        <div class="v3_67"></div>
  
        <div class="navbar">
          <a class="nav_link" href="#home">Home </a>
          <a class="nav_link" href="#event"> Events </a>
          <a class="nav_link" href="#article">  Article</a>
          <a class="nav_link" href="#contactus"> Contact Us </a>
          <button class="btn-login">Login</button>
        </div>
  
  
        <div id="home" class="label">
          <div class="label_text">
            <span class="label_text-1">One Stop Solution </span
            ><span class="label_text-2">For All Events</span>
          </div>
          <div class="button">
            <button class="btn_event">Events</button>
          </div>
        </div>
        <div class="v1_63"></div>
        <div class="top-right_blue-circle"></div>
        <div class="logo">
          <div class="logo_img"></div>
          <span class="logo_text">GLA University</span>
        </div>
        
      </section>

      <section class="video">
        <div class="video-content">
            <video class="video-item" src="v1.mp4" autoplay loop muted controls>
            </video>
        </div>
        <h2 class="ticket-heading video-head">Event videos</h2>
    </section> 

      <section class="moment">
        <div class="grid">
    
            <div class="grid-item">
            <img class="grid-main" src="g7.png" alt="">
            <h2 class="grid-text">Best Moments From The Festival And Events </h2>
            </div>
            <div class="grid-item">
            <img src="g1.png" alt="">
            </div>
            <div class="grid-item">
            <img src="g2.png" alt="">
            </div>
            <div class="grid-item">
            <img src="g3.png" alt="">
            </div>
            <div class="grid-item">
            <img src="g4.png" alt="">
            </div>
            <div class="grid-item">
                <img src="g5.png" alt="">
            </div>

            <div class="grid-item">
                <img src="g6.png" alt="">
            </div>
                    
                    
        </div>
    </section>

    <section class="event" id="event">
        <h2 class="ticket-heading">Event Details</h2>
        <div class="scroll">
        <?php
      
            $servername = "localhost";
            $username = "root";
            $pass = "";
            $dbname = "onestop";
            $conn = new mysqli($servername, $username, "$pass", $dbname);
            
            
            
            
            
                
                    
                    $sql= "SELECT * from events";
                   
                    $result = mysqli_query($conn,$sql);      
            
                    if(mysqli_num_rows($result)>0){
            
                        while($rows=mysqli_fetch_assoc($result)){
                            echo "<div class=col>
                            <div class=card data-tilt data-tilt-perspective=700 >
                                <img class=img src=images/model-2.jpg>
                                    <div class=detail>
                                        <h1 class=heading-1>".$rows['name']."</h1>
                                        <div class=line></div>
                                        
                                        <div class=work>
                                        ".$rows['info']."       
                                        </div>
                                        <div class=line></div>
                
                                        <div class='work dateTime'>
                                            Date : ".$rows['date']."<br>
                                            Time : ".$rows['time']."  
                                        </div>
                
                                        <div class=line></div>
                
                
                                        <div class='work location'>
                                            Location : ".$rows['location']."
                                        </div>
                                        
                                        <div class=line></div>
                            
                                        <div class='work contact'>
                                            Phone no : ".$rows['phoneno']." <br>
                                            Email Id : ".$rows['emailid']."
                                        </div>
                                        <div class=line></div>
                
                                        <button class=btn>".$rows['ticket_price']."</button>
                                    </div>
                            </div>";
                        }
                      
                      
                      
                      }
                      
                    
            
                        ?>
                        </div>
            
    </section>

    <section id="article" class="article">
        <h2 class="ticket-heading">Articles</h2>
        <div class="row">

            <div class="story">
                <figure class="story__shape">
                    <img src="nat-8.jpg" alt="photo" class="story__img">
                </figure>
                <!-- <figcaption class="story__caption">Mary Smith</figcaption> -->
    
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">I had a best week ever with my family </h3>
    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quaerat asperiores soluta deleniti voluptatum quas, dignissimos ve.</p>
                </div>
            </div>

            <div class="story">
                <figure class="story__shape">
                    <img src="nat-8.jpg" alt="photo" class="story__img">
                </figure>
                <!-- <figcaption class="story__caption">Mary Smith</figcaption> -->

    
                <div class="story__text">
                    <h3 class="heading-tertiary u-margin-bottom-small">I had a best week ever with my family </h3>
    
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt quaerat asperiores soluta deleniti voluptatum quas, dignissimos ve.</p>
                </div>
            </div>

        </div>
        

        
    </section>

    <section class="banner">
        <div class="overlay"></div>
        <div class="banner-title">
            <h3 class="text-white">Follow Us On Social Media</h3>
            <div class="links-gp">
                <img  class="links"  src="images/facebook.png" alt="">
                <img  class="links" src="images/instagram.png" alt="">
                <img  class="links" src="images/telegram.png" alt="">
            </div>
        
        </div>
    </section>

    <footer id="contactus" class="footer">
        
        <div class="item">

            <div class="item_list">
                <li class="item_list-m"><a href="#">Media</a></li> 
                <li class="item_list-m"><a href="#">Media</a></li> 
                <li class="item_list-m"><a href="#">Media</a></li> 
            </div>

            <div class="item_list">
                <li class="item_list-m"><a href="#">Media</a></li> 
                <li class="item_list-m"><a href="#">Media</a></li> 
                <li class="item_list-m"><a href="#">Media</a></li> 
            </div>

            <div class="item_list">
                <li class="item_list-m"><a href="#">Media</a></li> 
                <li class="item_list-m"><a href="#">Media</a></li> 
                <li class="item_list-m"><a href="#">Media</a></li> 
            </div>
        </div>
        <div class="cpr">All &copy; rights reserved</div>
    </footer>

    <script src="vanilla-tilt.js"></script>
</body>
</html>