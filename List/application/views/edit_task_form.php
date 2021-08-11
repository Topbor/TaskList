

    <div class="list-wrapper">
    <?php
        foreach($data as $b){
            echo   ' <form action="index.php"  method="post">
            <p>Task title: <input type="text" value="'.$b->title.'" name="title"></p>
            <p>Responsible: <input type="text" value="'.$b->responsible.'" name="responsible"></p>
            <p>Deadline: <input type="date" value="'.$b->deadline.'" name="deadline"></p>
            <p>Status: <input type="text" value="'.$b->status.'" name="stat"></p>
            <input type="hidden" name="id" value="'.$b->id.'">
            <input type="hidden" name="status" value="update">
            <p><input type="submit" name="sub" value="Submit"></p>
        </form>';
        }?>
    </div>
