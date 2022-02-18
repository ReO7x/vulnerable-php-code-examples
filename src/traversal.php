<?php
    if(isset($_GET['file'])) {
        $f = file_get_contents($_GET['file']);
        echo "<pre>{$f}</pre>";
    }
