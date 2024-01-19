<!--This is the "abstract" or summary of, er, me and my skills. Short and sweet-->
<div class="main">
    <section class="summary copy">
        <a id="summary" class="anchorLink">
            <h1>Hi, I’m Maurice.</h1>
            <p>
                <?php
                echo file_get_contents("markdown/summary.md");
                ?>
            </p>
        </a>
    </section>




        <a id="projects">


            <!--Render each project-->
            <?php
            require_once'projects/ProjectInformation.php';
            require_once'projects/projectInformationCollection.php';

            // using Latte templating engine
            
            foreach ($projectInformationCollection as $project) {
                $latte = new Latte\Engine;
                $latte->setTempDirectory('./tempdir'); // cache directory
                $project->display($latte);
            }
            ?>



        </a>

</div>