<?php
    include("db.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
</head>
<body>
    <!-- Header section  -->
    <section id="header">
        <div class="header container">
            <div class="navbar">
                <div class="logo">
                    <a href="#home"><img src="./assets/image/logo.png" width="110px"></a>
                </div>
                <nav>
                    <ul id="menuitems">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#portfolio">PORTFOLIO</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </nav>
                <img src="./assets/image/menu.png" class="menu-icon" onclick="menutoggle()">
            </div>
        </div>
    </section>
    <!-- End Header section  -->

    <!-- Home section  -->
    <section id="home">
        <div class="home container">
            <div>
                <h1>Hello!<br> My Name Is <br>Iqbal Muqri</h1>
                <div>
                    <a href="#about" class="btn">Get To Know Me</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Home section  -->

    <!-- About section  -->
    <section id="about">
        <div class="about container">
            <div class="cardabout"></div>
            <div class="text">
                <h1>ABOUT ME</h1>
                <h2>Background</h2>
                <?php
                                    $sql = "SELECT * FROM about"; 
    

                                    $qry=mysqli_query($conn,$sql);
                                    $row=mysqli_num_rows($qry);
                    
                                    if($row > 0)
                    {   
                        $d = mysqli_fetch_assoc($qry)
                    
                ?>
                <p> 
                    <?php echo $d['background']; ?> </p>
                </p>
                <?php
                    }
                ?>
            </div>
            <div class="text">
                <h1>BIODATA</h1>
                <?php
                                    $sql = "SELECT * FROM biodata"; 
    

                                    $qry=mysqli_query($conn,$sql);
                                    $row=mysqli_num_rows($qry);
                    
                                    if($row > 0)
                    {   
                        $d = mysqli_fetch_assoc($qry)
                    
                ?>
                <div class="info">
                  <h2>Personal Information</h2>
                  <p>Name : <?php echo $d['name']; ?> </p>
                  <p>Place/Date Of Birth : <?php echo $d['dob']; ?></p>
                  <p>Age : <?php echo $d['age']; ?></p>	
                  <p>Gender : <?php echo $d['gender']; ?></p>	
                  <p>Hobbies : <?php echo $d['hobbies']; ?></p>
                  <p>Address : <?php echo $d['address']; ?></p>
                  <p>Email : <?php echo $d['email']; ?></p>
                  <br/>
                  <br/>
                  <?php
                    }
                    ?>
                  <h2>Education</h2>
                  <?php
                                    $sql = "SELECT * FROM education"; 
    

                                    $qry=mysqli_query($conn,$sql);
                                    $row=mysqli_num_rows($qry);
                    
                                    if($row > 0)
                    {   
                        $d = mysqli_fetch_assoc($qry)
                    
                ?>
                  <ul>
                    <li> <?php echo $d['sk']; ?> </li>
                    <li> <?php echo $d['indo']; ?> </li>
                    <li> <?php echo $d['smk']; ?> </li>
                    <li> <?php echo $d['diploma']; ?> </li>
                    <li> <?php echo $d['degree']; ?> </li>
                  </ul>
                  <br/>
                  <br/>
                  <?php
                    }
                    ?>
                  <h2>Working Experience</h2>
                  <?php
                                    $sql = "SELECT * FROM experience"; 
    

                                    $qry=mysqli_query($conn,$sql);
                                    $row=mysqli_num_rows($qry);
                    
                                    if($row > 0)
                    {   
                        $d = mysqli_fetch_assoc($qry)
                    
                ?>
                  <ul>
                    <li> <?php echo $d['company1']; ?> </li>
                    <li> <?php echo $d['company2']; ?> </li>
                  </ul>
                  <?php
                    }
                    ?>
                </div>
              </div>
              <div class="cardabout2"></div>
              <br/>
        </div>
    </section>
    <!-- End About section  -->
    
    <!-- portfolio section  -->
    <section id="portfolio">
        <div class="portfolio container">
            
            <div class="gallery">
                <div class="title">
                    <h1>WEB DESIGN</h1>
                </div>
                <div class="photo">
                    <img src="./assets/image/portfolio/sb1.png">
                    <img src="./assets/image/portfolio/sb2.png">
                    <img src="./assets/image/portfolio/sb3.png">
                    
                    <img src="./assets/image/portfolio/4.PNG">
                    <img src="./assets/image/portfolio/5.PNG">
                    <img src="./assets/image/portfolio/6.PNG">

                    <img src="./assets/image/portfolio/1.jpg">
                    <img src="./assets/image/portfolio/2.jpg">
                    <img src="./assets/image/portfolio/3.jpg">
                </div>
                <div class="title">
                    <h1>POSTER DESIGN</h1>
                </div>
                <div class="photo">
                    
                    <img src="./assets/image/portfolio/ps1.png">
                    <img src="./assets/image/portfolio/ps2.png">
                    <img src="./assets/image/portfolio/ps3.png">
                    <img src="./assets/image/portfolio/7.png">
                    <img src="./assets/image/portfolio/8.png">
                    <img src="./assets/image/portfolio/9.png">
                </div>
                <div class="title">
                    <h1>PHOTO MANIPULATION</h1>
                </div>
                <div class="photo">
                    <img src="./assets/image/portfolio/10.jpg">
                    <img src="./assets/image/portfolio/11.jpg">
                    <img src="./assets/image/portfolio/12.png">
                </div>
                <div class="title">
                    <h1>SHIRT DESIGN</h1>
                </div>
                <div class="photo">
                    <img src="./assets/image/portfolio/13.png">
                    <img src="./assets/image/portfolio/14.PNG">
                    <img src="./assets/image/portfolio/15.png">
                </div>
            </div>
        </div>
    </section>
    <!-- end portfolio section  -->

    <!-- contact section  -->
    <section id="contact">
        <div class="contact container">
            <!-- popup section  -->
            <div class="popup">
                <div id="close">+</div>
                <span>THANK YOU FOR REACHING OUT TO ME!</span>
            </div>
            <!-- end popup section  -->
            <div class="contact-info">
                <div><i class="fas fa-map-marker-alt"></i>Summer Glades, Cyberjaya</div>
                <div><i class="fas fa-envelope"></i>imuqri31@gmail.com</div>
                <div><i class="fas fa-phone"></i>+6011 3797 7925</div>
            </div>
            <div class="contact-form">
                <h2>REACH ME OUT!</h2>
                <form action="" class="mailbox">
                    <input type="text" name="name" class="textbox" placeholder="Your Name" required>
                    <input type="email" name="email" class="textbox" placeholder="Your Email" required>
                    <textarea type="Message" rows="5" placeholder="Your Message" required></textarea>
                    <input type="submit" id="submit" class="send-btn" value="SEND">
                </form>
            </div>
        </div>
    </section>
    <!-- end contact section  -->

    <!-- footer section  -->
    <section id="footer">
        <div class="footer container">
            <div class="logo">
                <img src="./assets/image/logo.png" width="110px">
            </div>
            <p>Copyright &#169; 2023 - Slash Hj Tapah. All right reserved </p>
        </div>
    </section>
    <!-- end footer section  -->

    <!--script -->
    <script src="script.js"></script>
    <!--script -->
</body>
</html>