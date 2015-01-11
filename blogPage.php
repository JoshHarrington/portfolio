<?php
   $root = $_SERVER['DOCUMENT_ROOT'];
   $path = $root."/html/head.php";
   include_once($path);
?>





       <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        


       <section class="navSidebar">
           <nav>
               <ul>
                   <li><a href="/portfolio.php">Portfolio</a></li>
                   <li><a href="/qna.php">Q&amp;A</a></li>
                   <li><a href="/blog.php" class="current">Blog</a></li>
                   <li><a target="_blank" href="/Josh_Harrington_CV.pdf">CV (.pdf)</a></li>
               </ul>
           </nav>
       </section>
       
       <section class="contentBlock interview">
           <h1 class="title">Blog Article Title</h1>
           
           <div class="blogListItem">
               <div class="blogImg">
                   <img src="/img/coast.jpg" alt="Coast">
               </div>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, autem. Reprehenderit eum enim reiciendis amet facilis itaque impedit, vitae, sequi iste fuga dolores numquam sunt assumenda dicta pariatur eaque ea voluptates fugiat. Deleniti sunt voluptatem mollitia maiores rem doloribus, unde earum fuga reprehenderit! Molestias, perspiciatis eos repellat! Necessitatibus laborum quisquam incidunt quas facilis maxime nostrum. Autem labore iusto distinctio, facere laboriosam in harum natus debitis velit incidunt reprehenderit est perspiciatis iste enim molestias quis a soluta veniam blanditiis asperiores quae vero porro quam. Nihil, omnis eius eum asperiores rerum sunt obcaecati ad sed blanditiis iste, amet, autem doloribus architecto perspiciatis, quas nemo pariatur animi?</p>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos voluptates, blanditiis, hic animi molestias rerum eveniet esse. Eum ratione, mollitia necessitatibus, dignissimos laudantium odio soluta obcaecati repellat non asperiores nemo labore magni, rem alias odit doloribus ea voluptas pariatur cupiditate, a tempore voluptate molestiae. Velit, repellendus fugit debitis? Ipsam ipsa architecto maxime magni voluptatum sed totam consectetur possimus voluptates, maiores vero! Dolore possimus magnam, esse, itaque, iure hic fugit quae perspiciatis explicabo nam doloribus porro adipisci. Exercitationem beatae magni non eaque ut id sunt, voluptas quam neque provident. Laboriosam, cupiditate, minus? Delectus tempora neque, eius doloribus laudantium quod odio sequi illum est? Illum, assumenda sint, odit atque eos ex repellendus doloremque impedit magni veritatis, alias obcaecati suscipit totam. Nulla iure reiciendis inventore, perferendis quasi eaque dolore. Ipsa quaerat debitis ducimus maiores, expedita, tenetur placeat consequuntur, eos culpa doloremque et eaque.</p>
           </div>
           
           <div class="moreArticles">
               <h2>Looking for some more articles?</h2>
               
                <div class="blogListItem">
                    <a href="#na" class="blogImg">
                       <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit</h3>
                       <img src="/img/lightning.jpg" alt="Lightning">
                    </a>
               </div>
               
               <div class="blogListItem">
                   <a href="#na" class="blogImg">
                       <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit</h3>
                       <img src="/img/coast.jpg" alt="Coast">
                   </a>
               </div>
               
           </div>


       </section>
        




<?php
   $path = $root."/html/footer.php";
   include_once($path);
?>
