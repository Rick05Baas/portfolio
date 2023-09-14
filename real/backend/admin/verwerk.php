<?php
                class MyDB extends SQLite3
                {
                    function __construct()
                    {
                        $this->open('../../dbs/database.db');
                    }
                }

                // $sql = <<<EOF
                //     SELECT * from projects;
                // EOF;

                $db = new MyDB();

                // $ret = $db->query($sql);

                $title = $_POST['title'];
                $image = $_POST['image'];
                $desc = $_POST['desc'];
                $link = $_POST['link'];
                $data = $_POST['date'];

                $ret = $db->query("INSERT INTO `projects` (`title`, `image`, `desc`, `link`, `date`) VALUES ('$title','$image','$desc','$link','$date')");

                if (!headers_sent()) {
                    header("Location: ../admin/");
                    exit;
                }

                $db->close();

                ?>