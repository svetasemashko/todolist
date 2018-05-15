<?php

include ("view.php");
include ("db.class.php");
include ("task.class.php");
include ("viewtask.class.php");
include ("addtask.class.php");
include("mark.php");

class IndexPage extends HTMLPage
{
    public function mainPart()
    {
        echo "To do list<p>";
    }
}

$page = new IndexPage("Your To Do List");
$page->compile();

$newtask = new AddTask();


$task = new ViewTask();
$task->showAllTasks();

$done = new MarkAsDone();

?>