<?php

use App\App;
use App\Autoloader;
use App\Ctrl\AdminCtrl;
use App\Ctrl\RecetteCtrl;

require '../app/Autoloader.php';

Autoloader::register();

if (!isset($_GET['target']) || $_GET['target'] == '' || $_GET['target'] == 'recette') {
    $ctrl = new RecetteCtrl(App::getInstance()->getDb());
    if (!isset($_GET['action'])) {
        $ctrl->index();
    } elseif ($_GET['action'] == 'list') {
        $ctrl->list();
    } elseif ($_GET['action'] == 'show' && isset($_GET['id']) && ctype_digit($_GET['id'])) {
        $id = intval($_GET['id']);
        $ctrl->show($id);
    }
} elseif (isset($_GET['target']) && $_GET['target'] == 'admin') {
    $ctrl = new AdminCtrl(App::getInstance()->getDb());
    if (!array_key_exists('action', $_GET)) {
        $ctrl->index();
    }
}
/*
} elseif (isset($_GET['']) && $_GET[''] != '') {

} elseif (isset($_GET['']) && $_GET[''] != '') {

} elseif (isset($_GET['']) && $_GET[''] != '') {

}
*/

