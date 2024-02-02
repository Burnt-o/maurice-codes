<!--This is the "abstract" or summary of, er, me and my skills. Short and sweet-->
<div class="main" >
<?php
include "hero.php";
?>


    <div class="background-image">

    <div id="hero-transition-wrapper">
        <img id="hero-transition" src="assets/images/backgrounds/hero-transition-3.png"></img>
    </div>

        <div id="projects">
            <a id="projectsAnchor">
            </a>

            <?php
            // Render each project using Latte templating engine
            require_once'projects/ProjectInformation.php';
            require_once'projects/projectInformationCollection.php';

            foreach ($projectInformationCollection as $project) {
                $latte = new Latte\Engine;
                $latte->setTempDirectory('./tempdir'); // cache directory
                $project->display($latte);
            }
            ?>
        
        </div>
    </div>
</div>