<?php require APPROOT . '/views/includes/header.php'; 
?>
    <h1>Profile view</h1>

    <?php
        if (isLoggedIn()) {
            echo '<li class="nav-item"><a class="nav-link" href="/MVC/Login/logout"><i class="fa-solid fa-user-plus"></i> Log Out</a></li>';
          } 
    ?>
    
<?php require APPROOT . '/views/includes/footer.php'; ?>