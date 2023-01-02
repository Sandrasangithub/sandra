<?php
        switch ($ciudad){
            case 'Salamanca':
                include $_SERVER['DOCUMENT_ROOT'].'/assets/footers/footer-salamanca.php';
                break;
             case 'Madrid':
                include $_SERVER['DOCUMENT_ROOT'].'/assets/footers/footer-madrid.php';
                break;
            default:
                include $_SERVER['DOCUMENT_ROOT'].'/assets/footers/footer-default.php';
                break;
    }
    ?>
