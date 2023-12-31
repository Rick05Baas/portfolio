<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Rick Baas</title>

    <link rel="icon" href="img/logo/logo.png">
    <link rel="stylesheet" href="../../css/stylesheet.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/responsive.css">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
    <main>



        <header id="header">
            <nav>
                <div class="container">
                    <div class="logo">
                        <a href=""><img class="ogol" src="../../img/logo/logo.png" alt=""></a>
                    </div>

                    <div class="links">
                        <ul>
                            <li>
                                <a href="../../subpages/skills/">Skills</a>
                            </li>
                            <li>
                                <a href="../../subpages/projects/">My Projects</a>
                            </li>
                            <li>
                                <a href="../../subpages/about/">About me</a>
                            </li>
                            <li>
                                <a href="../../subpages/contact/">Contact</a>
                            </li>
                            <li>
                                <a href="../../" class="active">Home</a>
                            </li>
                        </ul>

                    </div>
                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </nav>

            <div class="header-content">
                <div class="area">
                    <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>

                    <div class="container grid-2">
                        <div class="column-1">
                            <br>
                            <h1 class="header-title">Admin Panel</h1>
                            <br>
                            <p class="text">
                                
                            </p>
                        </div>

                        <div class="column-2 image">
                            <form action="verwerk.php" method="post">
                                <label for="title">Titel:</label><br>
                                <input name="title" type="text">
                                <br><br>
                                <label for="image">Afbeelding:</label><br>
                                <input name="image" type="text">
                                <br><br>
                                <label for="desc">Beschrijving:</label><br>
                                <input name="desc" type="text">
                                <br><br>
                                <label for="link">Link/URL</label><br>
                                <input name="link" type="text">
                                <br><br>
                                <label for="date">Datum:</label><br>
                                <input name="data" type="text">

                                <br><br>
                                <input class="active" type="submit" value="submit">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            

            <div class="container1">
                <div class="section-content">
                    <h1>Project Overview</h1><br><br><br>
                    <?php
                class MyDB extends SQLite3
                {
                    function __construct()
                    {
                        $this->open('../../dbs/database.db');
                    }
                }

                $sql = <<<EOF
                    SELECT * from projects;
                EOF;

                $db = new MyDB();




                $ret = $db->query($sql);
                while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                    echo "<projects>";
                    echo "<img class='project-img' src='../../img/projecten/{$row['image']}'>";
                    echo "<div class='title'>{$row['title']}</div>";
                    echo "<a href='{$row['link']}' class='links1' target='_blank' >Redirect</a>";
                    echo '<button><a href="../admin/delete/delete.php?title=' . urlencode($row['title']) . '">Delete</a></button>';
                    echo "</projects>";
                }

                $db->close();

                // while($data = $result->fetchArray(SQLITE3_ASSOC))  

                ?>
                </div>
            </div>

        </header>


    </main>
    <footer class="footer">
        <div class="container">
            <div class="grid-4">
                <div class="grid-4-col footer-about">
                    <h3 class="title-sm">About this website</h3>
                    <p class="text">
                        This website is meant for educational purposes only. All content is owned by me (<span>Rick
                            Baas</span>)
                    </p>
                </div>

                <div class="grid-4-col footer-links">
                    <h3 class="title-sm">Links</h3>
                    <ul>
                        <li>
                            <a href="../../subpages/skills/">Skills</a>
                        </li>
                        <li>
                            <a href="../../subpages/projects/">My Projects</a>
                        </li>
                        <li>
                            <a href="../../subpages/about/">About Me</a>
                        </li>
                        <li>
                            <a href="../../subpages/contact/">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="grid-4-col footer-links">
                    <h3 class="title-sm">What I do</h3>
                    <ul>
                        <li>
                            <a href="../../subpages/skills/">Web Design</a>
                        </li>
                        <li>
                            <a href="../../subpages/skills/">Web Development</a>
                        </li>
                        <li>
                            <a href="../../subpages/skills/">PHP/PhpMyAdmin</a>
                        </li>
                        <li>
                            <a href="../../subpages/skills/">C-Sharp</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="bottom-footer">
                <div class="copyright">
                    <p class="text">
                        Copyright&copy;2023 All rights reserved | Made by
                        <span>Rick Baas</span>
                    </p>
                </div>

                <div class="followme-wrap">
                    <div class="followme">
                        <h3>Follow me</h3>
                        <span class="footer-line"></span>
                        <div class="social-media">
                            <a href="https://github.com/Rick05Baas">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#">
                                <i class="fab fa-question"></i>
                            </a>
                        </div>
                    </div>

                    <div class="back-btn-wrap">
                        <a href="#" class="back-btn">
                            <i class="fas fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <script src="../../js/app.js"></script>

</body>

</html>