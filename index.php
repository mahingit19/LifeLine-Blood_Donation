<?php

session_start();

$get_db = "";
if (isset($_GET["db"])){
    $get_db = $_GET["db"];
    if ($get_db == "install"){
        header("Location: files/php/db_install.php");
    }
    else if ($get_db == "drop123456789"){
        header("Location: files/php/db_drop.php");
    }
    else{
        header("Location: files/php/error400.php");
    }
}

?>


<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LifeLine - Blood Donation</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.13/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="files/image/logo.jpg">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .banner {
            background-image: url('files/image/banner.webp');
            background-size: cover;
            object-fit: cover;
            border-image: fill 0 linear-gradient(#0001, #685353);
        }

        .myfont {
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }
         /* Card hover animation */
         .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Image animation */
        .team-image:hover {
            transform: scale(1.1);
            transition: transform 0.3s ease-in-out;
        }

        .myWrapper{
            width: 100%;
            height: min-content;
            /* background-color: #685353; */
            overflow-x: hidden;
        }
    </style>
</head>

<body>
    <div class="myWrapper">
        <?php include "files/php/header.php"; ?>

        <?php
    
        $page = 'home';
        if (isset($_GET['page'])){
            $page = $_GET['page'];
        }
        if (isset($_GET['submit'])){
            $submit = $_GET['submit'];
        }
        if (isset($page)){
            if ($page=='home'){
                include "files/php/homepage.php"; 
            }
            else if ($page=='about'){
                include "files/php/about.php"; 
            }
            else if ($page=='search-donor'){
                include "files/php/search-donor.php"; 
            }
            else if ($page=='register'){
                include "files/php/register.php"; 
            }
            else if ($page=='login-page'){
                include "files/php/login-page.php"; 
            }
            else if ($page=='faqs'){
                include "files/php/faqs.php"; 
            }
            else if ($page=='different-blood-group'){
                include "files/php/faqs/different-blood-group.php"; 
            }
            else if ($page=='different-blood-term'){
                include "files/php/faqs/different-blood-term.php"; 
            }
            else if ($page=='how-often-can-i-donate-blood'){
                include "files/php/faqs/how-often-can-i-donate-blood.php"; 
            }
            else if ($page=='what-is-blood'){
                include "files/php/faqs/what-is-blood.php"; 
            }
            else if ($page=='what-is-blood-donation'){
                include "files/php/faqs/what-is-blood-donation.php"; 
            }
            else if ($page=='who-can-donate-blood'){
                include "files/php/faqs/who-can-donate-blood.php"; 
            }
            else if ($page=='contact'){
                include "files/php/contact.php"; 
            }
            else if ($page=='team'){
                include "files/php/team.php"; 
            }
            else {
                include "files/php/error.php";
            }
        }

        ?>

        <?php include "files/php/footer.php"; ?>
    </div>
</body>

</html>
