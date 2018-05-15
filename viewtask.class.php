<?php

class ViewTask extends Task {

    public function showAllTasks() {

       $datas = $this->getAllTasks();
       foreach ($datas as $data) {
           echo "<br>".$data['id']." ";
           echo $data['text']." ";
           if (!$data['done']) {
               echo "
<form action='index.php' method='post' enctype='multipart/form-data'>
<input type='submit' name='done' value='Mark as done'>
</form>
";
           }
           if(isset($_POST['done'])) {
               $done = new MarkAsDone();
               $done->markAsDone();
           }
       }
    }

}

?>