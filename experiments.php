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
                   <li><a href="#na">CV (.pdf)</a></li>
               </ul>
           </nav>
       </section>
       
       <section>
           <div class="resizeBlock">
               <input type="checkbox" class="tipperHover--check" id="tipperHover--check" checked/>

<div class="anyblock">
  <label for="tipperHover--check" class="tipperHover--label"></label>
</div>

<p class="instruction"><span>Hello there, this is an experiment showing a CSS only tipper. The big purple box acts like a checkbox so you can turn the tipper on and off. </span><span>Inspired by the <a href="http://onehackoranother.com/projects/jquery/tipsy/">tipsy project</a>, which has been used by my good friends at <a href="http://www.inktrap.co.uk/">Inktrap</a>.</span></p>

           </div>
       </section>
        
        
        <section class="contentRow">
            <div class="toggleRow">
                <input type="checkbox" id="toggle1" class="toggleInput">
                <label for="toggle1" class="toggleBtn1 toggleBtn"></label>
            </div>
            <div class="toggleRow">
                <input type="checkbox" id="toggle2" class="toggleInput" checked="checked">
                <label for="toggle2" class="toggleBtn2 toggleBtn"></label>
            </div>
            <div class="toggleRow">
                <input type="checkbox" id="toggle2a" class="toggleInput">
                <label for="toggle2a" class="toggleBtn2a toggleBtn"></label>
            </div>
            <div class="toggleRow">
                <input type="checkbox" id="toggle3" class="toggleInput">
                <label for="toggle3" class="toggleBtn3 toggleBtn"></label>
            </div>
            <div class="toggleRow">
                <input type="checkbox" id="toggle4" class="toggleInput">
                <label for="toggle4" class="toggleBtn4 toggleBtn"></label>
            </div>
            <div class="toggleRow">
                <input type="checkbox" id="toggle5" class="toggleInput">
                <label for="toggle5" class="toggleBtn5 toggleBtn"></label>
            </div>
            <div class="toggleRow">
                <input type="checkbox" id="toggle6" class="toggleInput">
                <label for="toggle6" class="toggleBtn6 toggleBtn"></label>
            </div>
            <div class="toggleRow cropToggle">
                <input type="checkbox" id="toggle7" class="toggleInput">
                <label for="toggle7" class="toggleBtn7 toggleBtn"></label>
            </div>
            <div class="toggleRow cropToggle2">
                <input type="checkbox" id="toggle7a" class="toggleInput" checked="checked">
                <label for="toggle7a" class="toggleBtn7a toggleBtn"></label>
            </div>
            <div class="toggleRow cropToggle">
                <input type="checkbox" id="toggle7b" class="toggleInput">
                <label for="toggle7b" class="toggleBtn7b toggleBtn"></label>
            </div>
            <div class="toggleRow cropToggle">
                <input type="checkbox" id="toggle7c" class="toggleInput">
                <label for="toggle7c" class="toggleBtn7c toggleBtn"></label>
            </div>
            <div class="toggleRow cropToggle">
                <input type="checkbox" id="toggle7d" class="toggleInput">
                <label for="toggle7d" class="toggleBtn7d toggleBtn"></label>
            </div>
            <div class="toggleRow cropToggle">
                <input type="checkbox" id="toggle7e" class="toggleInput" checked="checked">
                <label for="toggle7e" class="toggleBtn7e toggleBtn"></label>
            </div>
            <div class="toggleRow cropToggle">
                <input type="checkbox" id="toggle7f" class="toggleInput">
                <label for="toggle7f" class="toggleBtn7f toggleBtn"></label>
            </div>
            <div class="toggleRow">
                <input type="checkbox" id="toggle7g" class="toggleInput">
                <label for="toggle7g" class="toggleBtn7g toggleBtn"></label>
            </div>
            <div class="toggleRow">
                <input type="checkbox" id="toggle7h" class="toggleInput">
                <label for="toggle7h" class="toggleBtn7h toggleBtn"></label>
            </div>
            <div class="toggleRow">
                <input type="checkbox" id="toggle8" class="toggleInput">
                <label for="toggle8" class="toggleBtn8 toggleBtn"></label>
            </div>
        </section>
        
        <section class="contentRow">
            
            <div class="gallery">
                <input type="radio" class="input for1" id="input1" name="galleryInput" checked="checked">
                <input type="radio" class="input for2" id="input2" name="galleryInput">
                <input type="radio" class="input for3" id="input3" name="galleryInput">
                <input type="radio" class="input for4" id="input4" name="galleryInput">
                <input type="radio" class="input for5" id="input5" name="galleryInput">
                
                <div class="galleryContainer">
                    <label for="input1" class="label for1 arrow"></label>
                    <label for="input2" class="label for2 arrow"></label>
                    <label for="input3" class="label for3 arrow"></label>
                    <label for="input4" class="label for4 arrow"></label>
                    <label for="input5" class="label for5 arrow"></label>

                    <div class="slide for1"></div>
                    <div class="slide for2"></div>
                    <div class="slide for3"></div>
                    <div class="slide for4"></div>
                    <div class="slide for5"></div>
                </div>
                
                <label for="input1" class="label for1 thumbnail"></label>
                <label for="input2" class="label for2 thumbnail"></label>
                <label for="input3" class="label for3 thumbnail"></label>
                <label for="input4" class="label for4 thumbnail"></label>
                <label for="input5" class="label for5 thumbnail"></label>
            </div>
            
        </section>




<?php
   $path = $root."/html/footer.php";
   include_once($path);
?>