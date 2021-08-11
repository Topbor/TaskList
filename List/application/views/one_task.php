
    <div class="list-wrapper">
        <?php
        foreach($data as $b){
            echo '<p> Title: '.$b->title.' </p>';
            echo '<p> Responsible: '.$b->responsible.' </p>';
            echo '<p> Deadline: '.$b->deadline.' </p>';
            echo '<p> Status: '.$b->status.' </p>';
        }
        ?>
    </div>
