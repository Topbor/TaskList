

    <div class="list-wrapper">
    <h4>Not all fields was filled correctly</h4>
    <?php
        foreach($data as $b){
            echo   ' <form action="index.php"  method="post">
            <p>Task title: <input  class="err" type="text" value="'.$b->title.'" name="title"></p>
            <p>Responsible: <input  class="err" type="text" value="'.$b->responsible.'" name="responsible"></p>
            <p>Deadline: <input  class="err" type="date" value="'.$b->deadline.'" name="deadline"></p>
            <p>Status: <input  class="err" type="text" value="'.$b->status.'" name="stat"></p>
            <input type="hidden" name="id" value="'.$b->id.'">
            <input type="hidden" name="status" value="update">
            <p><input type="submit" name="sub" value="Submit"></p>
        </form>';
        }?>
    </div>
