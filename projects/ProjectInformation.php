<?php
include('StringArray.php');

class ProjectInformation
{
    private string $id;
    private string $title;
    private StringArray $tags;
    private string $copy;
    private string $link;

    function __construct($id, $title, StringArray $tags, $copy, $link)
    {
        $this->id = $id;
        $this->title = $title;
        $this->tags = $tags;
        $this->copy = $copy;
        $this->link = $link;
    }

    // display
    function display(Latte\Engine &$latte) : void 
    {
        $latte->render('templates/projectInfo.latte', [$this->id, $this->title, $this->tags, $this->copy, $this->link]);
    }
}

