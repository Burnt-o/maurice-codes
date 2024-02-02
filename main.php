<!--This is the "abstract" or summary of, er, me and my skills. Short and sweet-->


<div class="main" >
    <a id ="heroAnchor"></a>





<?php
include "hero.php";
?>

<div id="content">


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

            <?php
    include "contact.php";
    ?>

</div>

</div>