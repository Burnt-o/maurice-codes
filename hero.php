<!-- Sandwhiches title text between a background and foreground image.
When the user scrolls down, the title text will move down too and disappear behind the foreground image.
-->
<div class ="hero">


<div class="hero-text-paragraph-wrapper">
            <p class="hero-text-paragraph">
            <?php
            echo file_get_contents("markdown/summary.md"); 
            ?>
            </p>
    </div>

    <div class="background-hero"></div>
    <div class="hero-text-top-wrapper">
        <h1 class="hero-text-top">Hi, I'm Maurice.</h1>
    </div>



    <div class="background-hero-foreground"></div>


</div>

<div class = "hero-spacer"></div>