<?php include_once '/header.php';?>
<?php
if(!isset($_POST["submit"])){
    header("location: /index.php");
    exit();
}
?>
<div class="modal active modal-sm">
    <a href="/index.php" class="modal-overlay" aria-label="Close"></a>
    <div class="modal-container">
         <!-- modal structure here -->
        <div class="modal-header">
            <a href="/index.php" class="btn btn-clear float-right" aria-label="Close"></a>
            <h3>Add a new box</h3>
        </div>
        <form action="/include/addactivebox.inc.php" method="post">
            <input type="text" name="box" placeholder="Box Name" style="width:100%" required>   
            <input type="password" name="password" placeholder="Root Flag" style="width:100%" required> 
            <button type="submit" name="submit">submit</button>
        </form>
        <br>
        <br>
    </div>
</div>

<?php include_once '/footer.php';?>