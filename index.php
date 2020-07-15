<?php
// $servername = "localhost";
// $database = "email_list";
// $username = "root";
// $password = "";

// Create Connection

// $conn = mysqli_connect($servername, $username, $password, $database);

// Check Connection
// if(!$conn){
//     die("Connection failed:" . mysqli_connect_error());
// }

// if(isset($_POST['send'])){
//     $email = $_POST['email'];

//     if($email != ''){
//         $query = "INSERT INTO emails (email) VALUES ('$email')";
//         $query_run = mysqli_query($conn, $query);

        // if($query_run){
            // Email recipient recipients
            // $to = '$email'; 

            // Subject
            // $subject = 'Birthday Reminders for August';

            // Message
            // $message = '
            // <html>
            // <head>
            // <title>Birthday Reminders for August</title>
            // </head>
            // <body>
            // <p>Here are the birthdays upcoming in August!</p>
            // <table>
            //     <tr>
            //     <th>Person</th><th>Day</th><th>Month</th><th>Year</th>
            //     </tr>
            //     <tr>
            //     <td>Johny</td><td>10th</td><td>August</td><td>1970</td>
            //     </tr>
            //     <tr>
            //     <td>Sally</td><td>17th</td><td>August</td><td>1973</td>
            //     </tr>
            // </table>
            // </body>
            // </html>
            // ';

            // To send HTML mail, the Content-type header must be set
            // $headers[] = 'MIME-Version: 1.0';
            // $headers[] = 'Content-type: text/html; charset=iso-8859-1';

            // Additional headers
            // $headers[] = 'To: . $email';
            // $headers[] = 'From: Birthday Reminder <emaz4me@gmail.com>';
            // $headers[] = 'Cc: emaz4me@gmail.com';
            // $headers[] = 'Bcc: emaz4me@gmail.com';

            // Mail it
    //         if(mail($to, $subject, $message, implode("\r\n", $headers))){
    //             echo 'successfull';
    //         }
    //         else {
    //             echo 'fail';
    //         }
    //     }
    //     else{
    //         echo "Failed";
    //     }
    // }
// }
 
// Close connection
// mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input store</title>
    <!-- boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <!--boostrap -->

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- style -->
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <!-- <form action="index.php" method="post">
        <input name="email" type="email">
        <input type="submit" name="send" value="send">
    </form> -->

    <!-- Hero section -->
    <header>
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
                        <h1 class="text-primary">An App for Shopping <br> without <br> Checkout Queues.</h1>
                        <h6>Scan your purchase in registered stores yourself, Never wait in long lines or checkout queues again. </h6>
                        <h6 class="text-primary">Be the first to get the App,  Sign Up to get Early Access.</h6>
                        <div class="cta">
                            <input type="text">
                            <input type="submit" value="Notify me">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <img class="image-fluid" src="./assets/images/P6YUM71 1.png" alt="splash screen">
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
                    <div class="col-lg-4 col mg-6 col-sm-12">
                        <img class="img-fluid" src="./assets/images/Jet Black-1.png" alt="">
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                        <h2 class="text-primary">Enter A Store And Start Scanning</h2>
                        <p>You can start right away, there's no login and no registration! 
                            Scan your items with the scantopay app, before you put them in 
                            your shopping cart. Open the app, tap on the scanner and hold 
                            the barcode of an item in front of the camera. Then add the item
                             to your digital cart.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                        <h2 class="text-primary">Easy, Convienent and Time saving</h2>
                        <p>Our goal is to offer you a brand new shopping experience. That's 
                            why with walked the extra mile to make the app as easy to use 
                            as possible. We even thought of the little things, like always 
                            showing you the total of your cart. Super simple, super convenient.</p>
                    </div>
                    <div class="col-lg-4 col mg-6 col-sm-12 right">
                        <img class="img-fluid right-img" src="./assets/images/Jet Black-2.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col mg-6 col-sm-12">
                        <img class="img-fluid" src="./assets/images/Jet Black.png" alt="">
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                        <h2 class="text-primary">Using your Phone Camera as Barcode Scan  </h2>
                        <p>With the help of your mobile camera you can scan product barcode 
                            as fast as possible, no stress no queue.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                        <h2 class="text-primary">Designed with a Virtual Cart</h2>
                        <p>Our goal is to offer you a brand new shopping experience. 
                        That's why with walked the extra mile to make the app as easy to use as possible. 
                        We even thought of the little things, like always showing you the total of your cart. 
                        Super simple, super convenient. </p>
                    </div>
                    <div class="col-lg-4 col mg-6 col-sm-12 right">
                        <img class="img-fluid right-img" src="./assets/images/Group 33.png" alt="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col mg-6 col-sm-12">
                        <img class="img-fluid" src="./assets/images/Group 35.png" alt="">
                    </div>
                    <div class="col-lg-8 col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                        <h2 class="text-primary">Swift and Fast Payment System </h2>
                        <p>Your payment is instantly processed and you can just walk out. 
                        When buying certain items, or being randomly checked, 
                        it may happen that an employee needs to approve your purchase. 
                        You already know that procedure from self checkout terminals.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p class="text-center">&#169; Copyright 2020</p>
    </footer>
    

    <!-- Scripts -->
    <!-- Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <!-- AOS js -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->

    <!-- Defined script -->
    <!-- <script>
      AOS.init();
    </script> -->
</body>
</html>
