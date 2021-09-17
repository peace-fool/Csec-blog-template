<script>
              if ( window.history.replaceState ) {
                window.history.replaceState( null, null, window.location.href );
              }
</script>
<?php
            include '../include/comdbh.inc.php';
            include '../comments.php';
            $file = '../names.txt';
            
            $file_arr = file($file);
            $num_lines = count($file_arr);
            $last_arr_index = $num_lines - 1;
            $rand_index = rand(0, $last_arr_index);
            $rand_text = $file_arr[$rand_index];
            
            echo "
            <form action='".setComment($conn)."' method='post'>
              <input type='hidden' name='uid' value='$rand_text'>
              <textarea name='message' id='' cols='42' rows='2'></textarea>
              <br>
              <button class='btn btn-primary btn-sm' type='submit' name='commentSubmit'>Comment</button>
            </form><br>";
            getComment($conn);
?>