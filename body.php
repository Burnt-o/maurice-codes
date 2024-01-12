<!--This is the "abstract" or summary of, er, me and my skills. Short and sweet-->

<div class="summary copy">
    <a id="summary">
        <p>
            <?php 
            echo $parser->parse(file_get_contents("markdown/summary.md")); 
            ?>
        </p>
    </a> 
</div>




<div class="projectsHeader copy">
    <a id="projectsHeader">

        <?php
        include('projects/ProjectInformation.php');
        include('projects/projectInformationCollection.php');

        syslog(LOG_DEBUG, count($projectInformationCollection));

        // loop over all projects and render them
        /**@var ProjectInformation $project */
        foreach ($projectInformationCollection as $project)
        {
            $latte = new Latte\Engine;
            // cache directory
            $latte->setTempDirectory('/tempdir');
            $project->display($latte);
        }

        ?>

       

    </a> 
</div>

