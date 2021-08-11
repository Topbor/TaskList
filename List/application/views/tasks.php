
    <div class="add-items"> 
		<a class="add" href="index.php?status=new"><i class="fas fa-plus"></i></a>
        <a class="add" href="index.php?status=import"><i class="fas fa-file-upload"></i></a>
	</div>
        <div class="list-wrapper">
            <ul>
                <?php
            foreach($data as $b){

            echo '<li>
            <div class="task-name"> 
                <a class="name" href="index.php?status=show&TaskID='.$b->id.'">'.$b->title.'</a>
                </div>';

            echo '
            <div class="items">	
            <a class="edit" href="index.php?status=edit&TaskID='.$b->id.'"> <i class="fas fa-edit"></i></a>
            <a class="del" href="index.php?status=delete&TaskID='.$b->id.'"> <i class="fas fa-trash"></i></a>
            </div>
            </li>';
}
?>
            </ul>
        </div>


                    