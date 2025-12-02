
    <?php
    // index.php

    $page = isset($_GET['page']) ? $_GET['page'] : 'index';

    switch ($page) {
        case 'index':
            $content = "pages/index.php";  // file konten
            break;

        default:
            $content = "pages/404.php";
            break;
    }

    // setelah $content ditentukan, baru panggil template
    include "master.php";
