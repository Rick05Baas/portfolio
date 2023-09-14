<?php

class MyDB extends SQLite3
{
    function __construct()
    {
        $this->open('../../../dbs/database.db');
    }
}



$db = new MyDB();


if (isset($_GET['title'])) {

    $title = urldecode($_GET['title']);



    try {
        $db->exec("DELETE FROM projects WHERE title = '$title'");
    } catch (PDOException $e) {
        echo "Error deleting post: " . $e->getMessage();
    }

    header('Location: ../');

} else {

    echo "Invalid post title.";

}

?>