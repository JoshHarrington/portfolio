<?php
    $page = "CV";

    $root = $_SERVER['DOCUMENT_ROOT'];
    $path = $root."/html/head.php";
    include_once($path);
?>
      
                    
       <article class="centralContent">
           <h1 class="title">Portfolio</h1>
           
            <section class="contentRow">

               <h2 class="fe">Tipper</h2>
               
    <p><span>Experiment showing a CSS only tipper. The big purple box acts like a checkbox so you can turn the tipper on and off. </span><span>Inspired by the <a target="_blank" href="http://onehackoranother.com/projects/jquery/tipsy/">tipsy project</a>, which has been used by my good friends at <a target="_blank" href="http://www.inktrap.co.uk/">Inktrap</a>.</span></p>

               <div class="resizeBlock">
                   <input type="checkbox" class="tipperHover--check" id="tipperHover--check" checked/>

    <div class="anyblock">
      <label for="tipperHover--check" class="tipperHover--label"></label>
    </div>


               </div>
           </section>
           
           <section class="contentRow">
              <h2 class="fe">Toggle switches &#91;part 1&#93;</h2>
              <p>
              <span>All of these toggles were created with a single checkbox and it's label.</span>
              <span>Inspired by: <a target="_blank" href="http://a.singlediv.com/">http://a.singlediv.com/</a>.</span></p>
              <p class="hint">&#91;Click the switches to see the &#40; css-only&#41; animation&#93;</p>
               <div class="toggleRow">
                <input type="checkbox" id="toggle2a" class="toggleInput">
                <label for="toggle2a" class="toggleBtn2a toggleBtn"></label>
            </div>
            <div class="toggleRow">
                <input type="checkbox" id="toggle3" class="toggleInput">
                <label for="toggle3" class="toggleBtn3 toggleBtn"></label>
            </div>
           </section>

            <section class="contentRow">
               
                <h2 class="fe">Toggle switches &#91;part 2&#93;</h2>
                <div class="toggleRow cropToggle2">
                    <input type="checkbox" id="toggle7a" class="toggleInput">
                    <label for="toggle7a" class="toggleBtn7a toggleBtn"></label>
                </div>
                <div class="toggleRow cropToggle">
                    <input type="checkbox" id="toggle7b" class="toggleInput">
                    <label for="toggle7b" class="toggleBtn7b toggleBtn"></label>
                </div>
                <div class="toggleRow cropToggle">
                    <input type="checkbox" id="toggle7d" class="toggleInput" checked="checked">
                    <label for="toggle7d" class="toggleBtn7d toggleBtn"></label>
                </div>

            </section>

              
            <section class="contentRow">
               
                <h2 class="fe">Toggle switches &#91;part 3&#93;</h2>
                <div class="toggleRow">
                    <input type="checkbox" id="toggle8" class="toggleInput">
                    <label for="toggle8" class="toggleBtn8 toggleBtn"></label>
                </div>

            </section>
            
            
            
        <section class="contentRow">
                <h2 class="fe">Javascript-less Gallery</h2>
                <p><span>Inspired by the <a target="_blank" href="http://alistapart.com/article/radio-controlled-web-design">Radio-Controlled Web Design article</a> on A List Apart by <a target="_blank" href="http://alistapart.com/author/artlawry">Art Lawry</a>.</span></p>
                <p class="hint">&#91;Use the arrows or the thumbnails to navigate through the gallery&#93;</p>
            
            <div class="gallery">
                <input type="radio" class="input for1" id="input1" name="galleryInput">
                <input type="radio" class="input for2" id="input2" name="galleryInput" checked="checked">
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

        
       </article>
       
       
<!--
CV Content



Josh Harrington / Curriculum Vitae Service and Product Design

Contact
e. josh@joshharrington.co.uk 
w. http://joshharrington.co.uk 
t. +44 (0) 7944 549 545

Education
Brunel University - Uxbridge, Middlesex
http://brunel.ac.uk
Degree: 2009 to 2013
• BSc (Hons) Product Design with Professional Practice (2:1)

Queen Mary’s Grammar School - Walsall, West Midlands
http://www.qmgs.walsall.sch.uk
A Level: 2009
• Five A Levels including Art and Design & Technology

￼￼Skills
Adobe Creative Suite 
 • InDesign
• Illustrator
• Photoshop

Workshop Experience 
 • Spot-welding
• Sheet Metal rolling
• Turning (Lathe)

Web Technologies
• Progressive enhancement methodology
• (DRY) SASS
• Responsive web design, by default
• CSS and markup experimentation
• CMS - WordPress, Expression Engine, Drupal

Computer Aided Design
• SolidWorks & PhotoView 360 
• Alias

￼Work Experience
Josh Harrington / Curriculum Vitae Service and Product Design

Reading Room, International Design Consultancy - http://readingroom.com
November 2013 to Present, User Experience Developer
• Front end development lead, multiple significant projects
• User experience development and consultancy
• Supporting team members with front end development issues
• Developing framework for front end starter kit
• Presenting at forums with concepts for company progression
• Developing non-javascript web solutions to improve accessibility • Implementing modular structure for templating

Naked Creativity, Design Consultancy - http://nakedcreativity.co.uk
August 2013, Web Designer
• XSL Code Construction and reworking
• Website Design and Development
• Research and application of online form system

Win Naturally Brand, Health Food Producer - http://winnaturally.com
May to November 2012, Packaging and Graphic Designer • Packaging Design
• Graphic Design for Packaging
• Encourage and focus brand development

Ambay Software, Software Consultancy, Leamington Spa - http://ambay.com
March to May 2012, Design and Development Assistant
• Web Theme Development - BlogEngine.NET & Telligent Community 
• App Development - Sencha Touch

TC Communications, Marketing Comms Agency, Ascot - http://tccommunications.co.uk
October to December 2011, Graphic & Web Design Internship 
 • Website Design and Development
• Advert Design

Seren, Customer Experience Consultancy, Shoreditch - http://seren.com
September 2011, Design Internship
• Client presentation, template design
• Service research and analysis, data visualisation

Radio Brunel, Student Radio Station - Brunel University, Uxbridge - http://radiobrunel.com
June 2010 to August 2011, Music Manager
• Managing a team
• Developing concepts for music chart voted for by students online • Engaging and involving listeners
• Presenting radio show
-->

       
       
       


<?php
   $path = $root."/html/footer.php";
   include_once($path);
?>