# PaperheadinPajamas

Assigned Tasks

# About HTML & CSS design - Lander
# Shop HTML & CSS design - Hannah
# Contact HTML design - Ivy

Instruction for designing
- Content of the Web Page can be found at this link: https://docs.google.com/document/d/1b1D71fmqjAAVmfdx3LUcy-SkTz15VDy8oAAlv5Xf6Q4/edit?usp=sharing
- Design in Mobile version: Instructions to View html file in mobile view is below
- Fork this repository to make a copy of this repository and make your changes in your own copy of this repository: Instructions to for repository is below
- When done, create a pull request to merge the changes with the main repository: Instruction to create a pull request is below
- For reference, follow the design of the index.html file
- When using logos, use .svg file and when using background photos, use .jpeg file format and add the photos downloaded in the photos folders
- create all the css files in the css folder
- create all the javascript files in the js folder
- custom fonts can be added by using this code in a css file:
  @font-face {
    font-family: 'Darumadrop One'; // this is the custom name
    src: url('../fonts/DarumadropOne-Regular.woff2') format('woff2'),
        url('../fonts/DarumadropOne-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
@font-face {
    font-family: 'Poppins'; // this is the custom name
    src: url('../fonts/Poppins-Regular.woff2') format('woff2'),
        url('../fonts/Poppins-Regular.woff') format('woff');
    font-weight: normal;
    font-style: normal;
    font-display: swap;
}
- Copy the header code for now, this is the code:
<!-- header div-->
            <div class="header">
                <!-- logo div-->
                <div class="header-logo">
                </div>
                <!-- logoname div-->
                <div class="header-logo-name">
                    <img src="photos/logo-name.svg">
                </div>
                <!-- search button-->
                 <div>
                    <div class="search-btn">
                        <form>
                            <button type="submit"></button>
                            <input type="search" placeholder="Search..." id ="search" name="search">
                        </form>
                    </div>
                </div>
                <!-- close button-->
                 <div class="btn-container">
                    <div class="nav-bar-btn"></div>
                 </div>
                <!-- nav bar items-->
                 <div >
                    <nav class="header-nav-bar-mobile">
                        <ul>
                            <li> <a href="index.html"> Home </a> </li>
                            <li> <a href="about.html"> About </a></li>
                            <li> <a> Shop </a> </li>
                            <li> <a> Contact </a></li>
                        </ul>
                    </nav>
                 </div>
                <!-- end of header div-->

Database Design - Dennis

Instructions for designing
- always have a primary key
- Create a table for Users including admin, separate the admin from users by adding a role column
- table for all the products(include image)
- table for category
- table for customer orders
- table for order details
- table for inventory log

Desktop Version - Aaron & Me
wag ka na aaron ako 
BackEnd - Me

How to View HTML file in mobile view from desktop
- Press Inspect in html file
- Press ctrl + shift + m

How to Fork this repository
- Press this repository
- Find the fork icon, It is in between Unwatch and Star

How to create a pull request
- In your copy of the repository, find the pull request: It is in between the Issues and Actions
- After pressing the pull request, press the new pull request button
- Press the Create pull request button

