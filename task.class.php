<?php

class Task extends DB {

    public function getAllTasks() {

        $sql = "SELECT * FROM task";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}

?>