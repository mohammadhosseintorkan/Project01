<?php
include '__php__.php';

$db = new DB();
$table = Blog::find();

foreach ($table as $key => $row) {
    $userid = Authentication:: uid();

    if ($userid) {
        $likeTable = LikeBlog:: find("Userid = {$userid} AND Blogid = {$row['id']}");
        if (isset($likeTable[0]))
            $table[$key]['like'] = true;
    }
}

unset($db);

$alerts = Alert::alerts();

view('blog', null, ['table' => $table], $alerts);