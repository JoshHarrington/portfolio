<?php
    $page = "BLOG";

    $root = $_SERVER['DOCUMENT_ROOT'];
    $path = $root."/html/head.php";
    include_once($path);
?>

       
       <section class="contentBlock interview">
           <h1 class="title">Blog</h1>
           
           <div class="blogListItem">
               <a href="/blog/mediaBrand.php" class="blogImg brand">
                   <h2>Why is the &#39;independent&#39; media intent on destroying the reputation of Russell Brand?</h2>
                   <span class="bgImg" data-img-source="http://i.guim.co.uk/static/w-1430/h--/q-95/sys-images/Guardian/Pix/pictures/2014/10/8/1412761498119/Russell-Brand-017.jpg"></span>               </a>
               <em>First posted on <a target="_blank" href="https://medium.com/@josh_harrington/why-is-the-media-left-intent-on-destroying-the-reputation-of-russell-brand-7002f880e5d5">medium</a>.</em>
               <p>Russell Brand is an important figure in politics today, whether you agree with his viewpoints or not, he’s important.</span></p>
               <p>The reason that he’s important is because he is able to publicly empathise with a huge section of the population that for the longest time has been ignored and vilified by the centre right. However instead of embracing him as the advantage to the left that he is, the left and independent media has begun a campaign to undermine and demonise him.</p>
               <p><a href="/blog/mediaBrand.php">Read &raquo;</a></p>
           </div>

            <div class="blogListItem">
               <a href="/blog/futureOfAgriculture.php" class="blogImg agriculture">
                   <h2>Future of Agriculture</h2>
                   <span class="bgImg" data-img-source="http://www.dmginfo.com/?post_type=slider_items&p=747"></span>               </a>
               <p>Featured on <a target="_blank" href="http://madeinbrunel.com/blog/article/title">madeinbrunel.com</a>, this article sums up the reasons why we need to change our Agricultural methods and what will happen if we don't encourage innovation and reduce waste.</p>
               <p><span>Problem:</span>Agriculture already takes half of the land on Earth that can support life, by 2050 Agriculture could take 88% of that land.</p>
                 <p><span>Possible solution:</span>Encourage development of lab grown meat. Reduce waste in post-industrial nations such as the UK.</p>
                 <p><a href="/blog/futureOfAgriculture.php">Read &raquo;</a></p>
           </div>
           
           <div class="blogListItem">
               <a href="/blog/brunelsChart.php" class="blogImg brunelsChart">
                   <h2>Brunel's Chart</h2>
                   <span class="bgImg"></span>
               </a>
               <p>&#91;Written 2012&#93; Conceptual solution to get student's involved with the University radio through a direct voted for Chart.</p>
               <p>The chart would allow users to become advocates of their chosen song getting them to share the chart and get other students to vote for their track.</p>
               <p><a href="/blog/brunelsChart.php">Read &raquo;</a></p>
           </div>
           


       </section>
        

<?php
   $path = $root."/html/footer.php";
   include_once($path);
?>