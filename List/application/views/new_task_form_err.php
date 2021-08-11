<h4>Not all fields was filled correctly</h4>
    <div class="list-wrapper">
        <form action="index.php" method="post">
        <p>Task title: <input class="err" type="text" name="title"></p>
        <p>Responsible: <input class="err" type="text" name="responsible"></p>
        <p>Deadline: <input  class="err" type="date" name="deadline"></p>
        <p>Status: <input  class="err" type="text" name="stat"></p>
        <input type="hidden" name="status" value="addnew">
        <p><input type="submit" name="sub" value="Submit"></p>
        </form>
    </div>
