<?php

class MarkAsDone extends DB {

    public function markAsDone() {
        $sql = "UPDATE task SET done='1'";
        $this->connect()->query($sql);
    }
}

?>