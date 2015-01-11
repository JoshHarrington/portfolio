<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Josh Harrington Design</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="../css/c-css/base.css">
        <script src="../js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
    
          <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

       
       <aside 
           <?php

            if ($page == "QNA") {
                echo 'class="navSidebar qna"';
            } else {
                echo 'class="navSidebar"';
            }

            ?>
        >
           <nav>
               <ul>
                   <li><a href="/" 
                   <?php
                    
                    if ($page == "PORTFOLIO") {
                        echo 'class="current"';
                    }

                    ?>
                   >Portfolio</a></li>
                   <li><a href="/qna.php"                   
                   <?php
                    
                    if ($page == "QNA") {
                        echo 'class="current"';
                    }

                    ?>
                   >Q&amp;A</a></li>
                   <li><a href="/blog.php"
                   <?php
                    
                    if ($page == "BLOG") {
                        echo 'class="current"';
                    }

                    ?>
                   >Blog</a></li>
                   <li><a href="/cv.php"
                   <?php
                    
                    if ($page == "CV") {
                        echo 'class="current"';
                    }

                    ?>
                   >CV</a></li>
               </ul>
           </nav>
       </aside>