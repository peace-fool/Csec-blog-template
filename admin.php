<?php include_once 'header.php';?>

<div class="modal active modal-sm">
    <a href="index.php" class="modal-overlay" aria-label="Close"></a>
    <div class="modal-container">
         <!-- modal structure here -->
        <div class="modal-header">
            <a href="index.php" class="btn btn-clear float-right" aria-label="Close"></a>
            <h3>login</h3>
        </div>
        <form action="include/login.inc.php" method="post">
            <input type="text" name="user" placeholder="User Name"  style="width: 100%;"  required>
            <input type="password" name="password" placeholder="Password" style="width: 100%;" required> 
            <button type="submit" name="submit">submit</button>
        </form>
        <br>
        <br>
    </div>
</div>

<?php include_once 'footer.php';?>