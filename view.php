<?php

abstract class HTMLPage {
    public $title;

    public function __construct($title)
    {
        $this -> title = $title;
    }

    public function htmlStart()
    {
        echo <<<HTML
<html>
<head>
<meta charset="utf-8">
<title>$this->title</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
HTML;
    }

    public function form()
    {
        echo <<<HTML
<form action="index.php" method="post" enctype="multipart/form-data">
Create new task:
<textarea name="text"></textarea>
<input type="submit" name="submit" value="Add">
</form>
HTML;
    }

    abstract public function mainPart();

    public function htmlEnd()
    {
        echo <<<HTML
</body>
</html>
HTML;
    }

//    public function menu()
//    {
//        echo <<<HTML
//<!--<a href="index.php">Main page</a>-->
//<!--<a href="newtask.class.php">Add new task</a>-->
//<!--<a href="mark.php">Edit task</a>-->
//
//HTML;
//
//    }

    public function compile()
    {
        $this->htmlStart();
        $this->form();
        $this->mainPart();
//        $this->menu();
        $this->htmlEnd();
    }
}

?>