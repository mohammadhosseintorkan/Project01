<?php
include '__php__.php';

if (!Authentication:: check()) {
    Alert::alerts('ابتدا وارد شوید');
    $_SESSION['redirect'] = $_SERVER['REQUEST_URI'];
    redirect('login.php');
}

$db = new DB();
$uid = Authentication:: uid();
if ($uid) {
    $table = User:: find("id = {$uid}");
    $row = $table[0];
}


unset($db);

$alerts = Alert::alerts();
view('dashboard', null, null, $alerts);