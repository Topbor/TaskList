

    <div class="list-wrapper">
        <form enctype="multipart/form-data" action="index.php" method="post">
        <p>Choose file  <input type="file" name="userfile" accept=".xls, .xlsx"></p>
        <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
        <input type="hidden" name="status" value="import_save">
        <p><input type="submit" name="sub" value="Submit"></p>
        </form>
    </div>
