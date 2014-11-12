<div class="content">
    <?php
    $url = $_GET['url'];

    if (empty($_SESSION['admin_username'])) {
        include_once 'login.php';
    }
    
    if (!empty($url)) {
        include_once $url;
    }
    ?>
</div>

