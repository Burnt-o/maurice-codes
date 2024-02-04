<!-- Sandwhiches title text between a background and foreground image.
When the user scrolls down, the title text will move down too and disappear behind the foreground image.
-->


<div id ="hero">


    <div id="hero-paragraph-text-wrapper">
                <p id="hero-paragraph-text">
                <?php
                echo file_get_contents("markdown/summary.md"); 
                ?>
                </p>
    </div>



        <div id="background-hero-background">
         </div>

        <div id="background-hero-foreground">
        </div>



        <div id="hero-background-lights" class="observe-lights">
        </div>


    <div id="hero-title-normal">
            <h1 >Hi, I'm Maurice.</h1>
        </div>

        <div id="hero-title-glass">
            <h1 >Hi, I'm Maurice.</h1>
        </div>
        <div >

        </div>




</div>


<div id = "hero-spacer"></div>


<div id="hero-transition-wrapper">
                 <img id="hero-transition" src="assets/images/backgrounds/hero-transition-3.png"></img>
 </div>

