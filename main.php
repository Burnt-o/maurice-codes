<!--This is the "abstract" or summary of, er, me and my skills. Short and sweet-->


<div class="main" >
    <a id ="heroAnchor" class="nav-anchor"></a>





<?php
include "hero.php";
?>
<div id="hero-transition-wrapper">
                 <img id="hero-transition" src="assets/images/backgrounds/hero-transition-3.png"></img>
 </div>
<div id="content">


            <div id="projects">
                <a id="projectsAnchor" class="nav-anchor">
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

            <?php
    include "contact.php";
    ?>




<div id="background-image">
<div id="background-image-lights" class="background-lights observe-lights">
</div>
</div>




</div>

</div>