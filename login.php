<?php include_once 'header.php'; ?>

<div class="modal active modal-sm">
    <a href="index.php" class="modal-overlay" aria-label="Close"></a>
    <div class="modal-container">
        <!-- modal structure here -->
        <div class="modal-header">
            <a href="index.php" class="btn btn-clear float-right" aria-label="Close"></a>
            <p>Enter root flag of box:</p>
            <h3 id="machine"></h3>
        </div>
        <form action="include/login.inc.php" method="post">
            <input type="password" name="password" placeholder="Root Flag" style="width: 77%;" required>
            <input id="BoxName" type="hidden" name="box">
            <button type="submit" name="submit">submit</button>
        </form>
        <br>
        <br>
    </div>
</div>
<script>
    <?php
    $var = $_GET["box"];
    ?>
    document.getElementById("machine").innerHTML = "<?php echo $var; ?>";
    document.getElementById("BoxName").value = "<?php echo $var; ?>";
</script>

<?php include_once 'footer.php'; ?>