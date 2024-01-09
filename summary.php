<!--This is the "abstract" or summary of, er, me and my skills. Short and sweet-->

<div class = "copy">
    <a id="summary">
        <p>
            <?php 
            $markdown = file_get_contents("markdown/summary.md");
            echo $parser->parse($markdown); 
            echo "hellooooo";
            ?>

        </p>
    </a> 
</div>