<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- TITLE -->
        <title> Paperhead In Pajamas</title>

        <!-- css links-->
         <link rel="stylesheet" href="css/contacts.css">
         <link rel="stylesheet" href="css/header.css">
         <link rel="stylesheet" href="css/reset.css">    
    </head>
    <script src="js/header.js">
                 </script>
    <body>
        <!-- whole website div-->
        <div class="home-main">
           <?php 
           include_once 'includes/header.php';
           ?>
                 <div class="contact-container">
                    <h2>Contact Us</h2>
                    
                    <!-- contact form -->
                    <form id="contact-form">
                        <label for="name">Name:</label><br>
                        <input type="text" id="name" name="name" required><br>
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email" required><br>
                        <label for="message">Message:</label><br>
                        <textarea id="message" name="message" required></textarea><br>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
                <!-- footer part-->
                <div class="footer">
                    <!--grid item #1-->
                    <div class="grid-item1">
                        <img src="photos/facebook-brands-solid.svg">
                        <a>Lorem Ipsum</a>
                    </div>
                    <!--grid item #2-->
                    <div class="grid-item2">
                        <img src="photos/instagram-brands-solid.svg">
                        <a>Lorem Ipsum</a>
                    </div>
                    <!--grid item #3-->
                    <div class="grid-item3">
                        <img src="photos/tiktok-brands-solid.svg">
                        <a>Lorem Ipsum</a>
                    </div>
                    <!--grid item #4-->
                    <div class="grid-item4">
                        <img src="photos/youtube-brands-solid.svg">
                        <a>Lorem Ipsum</a>
                    </div>
                    <!-- footer end-->
                </div>
                <!--whole website end-->
            </div>
    </body>
</html