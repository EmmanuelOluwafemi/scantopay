<?php
$servername = "localhost";
$database = "id14350974_email_list";
$username = "id14350974_admin";
$password = "Emaz4me@gmail.com";

// Create Connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check Connection
if(!$conn){
    die("Connection failed:" . mysqli_connect_error());
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scantopay</title>
    <!-- boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!--boostrap -->
    
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <!-- Fontawesome -->

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>

<?php
if(isset($_POST['send'])){
    $email = $_POST['email'];

    if($email != ''){
        // Check is email already Exist in database

        $sql_email = "SELECT * FROM emails WHERE email='$email'";
        $result_email = mysqli_query($conn, $sql_email);
        if(mysqli_num_rows($result_email) > 0){
            // Email recipient recipients
            
            $subject = "Reminder on App Release";
            
            $message = "
            <div style=\"background: #063C92; padding: 40px;\">
                <h1 style=\"text-align: center; color: #ffffff\">ScanToPay</h1>
                <br>
                <p style=\"text-align: center; color: #ffffff\">Thanks for anticipating for a long time, am happy to tell you that the app is now ready to use.</p>
            </div>
            ";
            
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // More headers
            $headers .= 'From: <scantopay>' . "\r\n";
            $headers .= 'Cc: emaz4me@gmail.com' . "\r\n";
            
            // if mail is sent successfully
            if(mail($email, $subject, $message, $headers)){
                echo '
                    <div class="pop-up">
                        <div class="wrapper">
                            <span class="close"><i class="fas fa-times"></i></span>
                            <div class="content">
                                Thanks for showing interest in our App, we will send you a mail soon.
                            </div>
                        </div>
                    </div>
                ';
            }else
            {
                echo 'failed';
            }
        }
        else{
            $query = "INSERT INTO emails (email) VALUES ('$email')";
            $query_run = mysqli_query($conn, $query);

            if($query_run){
                // Email recipient recipients
            
                $subject = "Reminder on App Release";
                
                $message = "
                <h1>ScanToPay</h1>
                <br>
                <p>Thanks for anticipating for a long time, am happy to tell you that the app is now ready to use.</p>
                ";
                
                // Always set content-type when sending HTML email
                $headers = "MIME-Version: 1.0" . "\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                
                // More headers
                $headers .= 'From: <scantopay>' . "\r\n";
                $headers .= 'Cc: emaz4me@gmail.com' . "\r\n";
                
                if(mail($email, $subject, $message, $headers)){
                    echo '
                        <div class="pop-up">
                            <div class="wrapper">
                                <span class="close"><i class="fas fa-times"></i></span>
                                <div class="content">
                                    Thanks for showing interest in our App, we will send you a mail soon.
                                </div>
                            </div>
                        </div>
                    ';
                }else
                {
                    echo 'failed';
                }
            }
            else{
                echo "Failed";
            }
        }
    }
}
 
// Close connection
mysqli_close($conn);
?>

    <!-- Preloader -->
    <div class="loader-bg">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header">
        <div class="container">
            <nav class="navbar">
                <a class="navbar-brand logo text-primary" href="#">ScanToCart</a>
            </nav>
        </div>
        
        <!-- hero section -->
        <section class="hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <h1 data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600" class="text-primary">An App for Shopping <br> without <br> Checkout Queues.</h1>
                        <h6 data-aos="fade-right" data-aos-easing="linear" data-aos-duration="900">Scan your purchase in registered stores yourself, Never wait in long lines or checkout queues again. </h6>
                        <h6 data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1200" class="text-primary">Be the first to get the App,  Sign Up to get Early Access.</h6>
                        <div class="cta">
                            <form action="index.php" method="post">
                                <input data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1400" name="email" type="email" placeholder="Enter Your Email">
                                <input  data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1600"type="submit" name="send" value="Notify me">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 hero-img-container">
                        <img data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1500" class="image-fluid img-zoomable" src="./assets/images/P6YUM71 1.png" alt="splash screen">
                    </div>
                </div>
            </div>
        </section>
    </header>

    <!-- App Description Section -->
    <main>
        <section class="about">
            <div class="container">
                <div class="row first">
                    <div class="screen-image col-lg-4 col-md-6 col-sm-12 order-2 order-sm-1">
                        <img data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000" class="img-fluid img-zoomable" src="./assets/images/Jet Black-1.png" alt="">
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 order-1 order-sm-2 d-flex justify-content-center flex-column">
                        <h2 data-aos="fade-left" data-aos-easing="linear" data-aos-duration="900" class="text-primary">Enter A Store And Start Scanning</h2>
                        <p data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1200">You can start right away, there's no login and no registration! 
                            Scan your items with the scantopay app, before you put them in 
                            your shopping cart. Open the app, tap on the scanner and hold 
                            the barcode of an item in front of the camera. Then add the item
                             to your digital cart.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                        <h2 data-aos="fade-right" data-aos-easing="linear" data-aos-duration="900" class="text-primary">Easy, Convienent and Time saving</h2>
                        <p data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1200">Our goal is to offer you a brand new shopping experience. That's 
                            why with walked the extra mile to make the app as easy to use 
                            as possible. We even thought of the little things, like always 
                            showing you the total of your cart. Super simple, super convenient.</p>
                    </div>
                    <div class="screen-image col-lg-4 col-md-6 col-sm-12 right">
                        <img data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000" class="img-fluid img-zoomable right-img" src="./assets/images/Jet Black-2.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="screen-image col-lg-4 col-md-6 col-sm-12 order-2 order-sm-1">
                        <img data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000" class="img-fluid img-zoomable" src="./assets/images/Jet Black.png" alt="">
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 order-1 order-sm-2 d-flex justify-content-center flex-column">
                        <h2 data-aos="fade-left" data-aos-easing="linear" data-aos-duration="900" class="text-primary">Using your Phone Camera as Barcode Scan  </h2>
                        <p data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1200">With the help of your mobile camera you can scan product barcode 
                            as fast as possible, no stress no queue.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                        <h2 data-aos="fade-right" data-aos-easing="linear" data-aos-duration="900" class="text-primary">Designed with a Virtual Cart</h2>
                        <p data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1200">Our goal is to offer you a brand new shopping experience. 
                        That's why with walked the extra mile to make the app as easy to use as possible. 
                        We even thought of the little things, like always showing you the total of your cart. 
                        Super simple, super convenient. </p>
                    </div>
                    <div class="screen-image col-lg-4 col-md-6 col-sm-12 right">
                        <img data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000" class="img-fluid img-zoomable right-img" src="./assets/images/Group 33.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="screen-image col-lg-4 col-md-6 col-sm-12 order-2 order-sm-1 d-flex align-item-sm-center">
                        <img data-aos="zoom-in" data-aos-easing="linear" data-aos-duration="1000" class="img-fluid img-zoomable" src="./assets/images/Group 35.png" alt="">
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 order-1 order-sm-2 d-flex justify-content-center flex-column">
                        <h2 data-aos="fade-left" data-aos-easing="linear" data-aos-duration="900" class="text-primary">Swift and Fast Payment System </h2>
                        <p data-aos="fade-left" data-aos-easing="linear" data-aos-duration="1200">Your payment is instantly processed and you can just walk out. 
                        When buying certain items, or being randomly checked, 
                        it may happen that an employee needs to approve your purchase. 
                        You already know that procedure from self checkout terminals.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="content d-flex justify-content-between align-items-center">
                <div class="footer-note">&#169; Copyright 2020</div>
                <div class="social">
                    <span><i class="fab fa-facebook-f"></i></span>
                    <span><i class="fab fa-twitter"></i></span>
                    <span><i class="fab fa-instagram"></i></span>
                    <span><i class="fab fa-linkedin-in"></i></span>
                </div>  
            </div>
        </div>
    </footer>
    

    <!-- Scripts -->
    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/js/all.min.jss"></script>

    <!-- AOS js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Zooming library -->
    <script src="https://unpkg.com/zooming/build/zooming.min.js"></script>

    <!-- Defined script -->
    <script>
        AOS.init();
          
        // Listen to images after DOM content is fully loaded
          document.addEventListener('DOMContentLoaded', function () {
            new Zooming({
              // options...
            }).listen('.img-zoomable')
        })
    
        // <!-- Modal
        $(document).ready(function(){
            $(".close").click(function(){
              $('.pop-up').hide();
            });
        });
        
        
        // -- Preloader Time Func
        
        setTimeout(function(){
            $(".loader-bg").fadeToggle();
        }, 1500);
    </script>
</body>
</html>