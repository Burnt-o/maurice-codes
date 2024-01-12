<?php
include('StringArray.php');

class ProjectInformation
{
    private string $title;
    private StringArray $tags;
    private string $copy;
    private string $link;

    function __construct($title, StringArray $tags, $copy, $link)
    {
        $this->title = $title;
        $this->tags = $tags;
        $this->copy = $copy;
        $this->link = $link;
    }

    // display
    function display(Latte\Engine &$latte) : void 
    {
        $latte->render('templates/projectInfo.latte', [$this->title, $this->tags, $this->copy, $this->link]);
    }
}

?>