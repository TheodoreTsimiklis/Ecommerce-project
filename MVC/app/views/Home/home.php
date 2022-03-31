<?php require APPROOT . '/views/includes/header.php'; 
?>
    <h1>Home View</h1>

    <?php
        if($data != []){
            echo '<div class="alert alert-success" role="alert">'.
             $data['msg'].'
          </div>';
        }
    ?>
<?php require APPROOT . '/views/includes/footer.php'; ?>