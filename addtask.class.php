<?php

class AddTask extends DB {

    public function addTask() {
        $text = $_POST["text"];
        $sql = "INSERT INTO task (text) VALUE ('$text')";
        if (isset($_POST["submit"])) {
            $this->connect()->query($sql);
        }
    }
}

?>
