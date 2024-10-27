<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- TITLE -->
        <title> Paperhead In Pajamas</title>

        <!-- css links-->
         <link rel="stylesheet" href="css/header.css">
         <link rel="stylesheet" href="css/reset.css">
         <link rel="stylesheet" href="css/footer.css">
         <link rel="stylesheet" href="css/index.css">    
    </head>

    <body>
        <!-- whole website div-->
        <div class="home-main">
            <!-- header div-->
            <?php
                include_once 'includes/header.php';
            ?>
            <!-- homepage body -->
             <div class="body-logo-name-container">
                <div class="body-logo-name"></div> 
             </div>
             <div class="body-center-container">
                <!-- container-->
                 <div class="body-center-text">
                    <h3> WELCOME </h3>
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <a href="shop.php"> SEE ALL PRODUCTS </a>
                 </div>
             </div>
             <!-- footer part-->
             <div class="footer">
                <!--grid item #1-->
                <div class="grid-item1">
                    <img src="photos/facebook-brands-solid.svg">
                    <a> Lorem Ipsum </a>
                </div>
                <!--grid item #2-->
                <div class="grid-item2">
                    <img src="photos/instagram-brands-solid.svg">
                    <a> Lorem Ipsum </a>
                </div>
                <!--grid item #3-->
                <div class="grid-item3">
                    <img src="photos/tiktok-brands-solid.svg">
                    <a> Lorem Ipsum </a>
                </div>
                <!--grid item #4-->
                <div class="grid-item4">
                    <img src="photos/youtube-brands-solid.svg">
                    <a> Lorem Ipsum </a>
                </div>
             </div>
        <!-- end of whole page div-->
        </div>
    </body>
</html>