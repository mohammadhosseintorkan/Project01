<?php
include '__php__.php';

//$parameters = $_POST;
if (isset($_GET['id']) && Validation:: naturalNumber($_GET['id'])) {

    $blogid = $_GET['id'];
    // بررسی آیا این شماره مقاله وجود دارد

    $db = new DB();
    $userid = Authentication:: uid();
    if ($userid) {
        $table = LikeBlog:: find("Userid = {$userid} AND Blogid = {$blogid}");

        if (isset($table[0])) {// مقاله قبلا لایک شده
            // آن را از لایک در بیار
            $row = $table[0];
            LikeBlog:: delete($row['id']);
        } else {
            // محصول را لایک کن
            $parameters = [
                'Userid' => $userid,
                'Blogid' => $blogid
            ];

            // B. Insert in DB
            LikeBlog:: add($parameters);
        }
    } else {
        Alert::alerts('شما مجوز لایک مقاله را ندارید!');
        redirect('dashboard.php');
    }

    unset($db);
} else {
    Alert::alerts('دسترسی غیر مجاز!');
    redirect('dashboard.php');
}
redirect('blog.php'); // با ایجکس نیاز نیست