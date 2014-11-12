<div class="content">
    <?php
    $url = $_GET['url'];
    
    if (!empty($url)) {
        include_once $url;
    } else {
        include_once 'home.php';
    }
    ?>
</div>

