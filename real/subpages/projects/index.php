<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Rick Baas</title>

    <link rel="icon" href="../../img/logo/logo.png">
    <link rel="stylesheet" href="../../css/stylesheet.css">
    <link rel="stylesheet" href="./css/style1.css">
    <link rel="stylesheet" href="../../css/responsive.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
    <main>
        <header>
            <nav>
                <div class="container">
                    <div class="logo">
                        <a href="../../"><img class="ogol" src="../../img/logo/logo.png" alt=""></a>
                    </div>

                    <div class="links">
                        <ul>
                            <li>
                                <a href="../skills/">Skills</a>
                            </li>
                            <li>
                                <a href="../projects/">My Projects</a>
                            </li>
                            <li>
                                <a href="../about/">About me</a>
                            </li>
                            <li>
                                <a href="../contact/">Contact</a>
                            </li>
                            <li>
                                <a href="../../" class="active">Home</a>
                            </li>
                        </ul>
                    </div>
                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
            </nav>

            <div class="header-content">
                <div class="container grid-2">
                    <div class="column-1">
                        <h1 class="header-title">Projects</h1>
                        <p class="text">
                            Al mijn projecten vind u hieronder!
                        </p>
                    </div>

                    <div class="column-2">

                    </div>
                </div>
            </div>

        </header>



        <div class="container1">
            <div class="section-header">
                <h3 class="title" data-title="My works">Portfolio</h3>
            </div>
            <div class="section-content">
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
                    echo "<div class='desc'>{$row['desc']}</div>";
                    echo "<a href='{$row['link']}' class='links1' target='_blank' >Redirect</a>";
                    echo "</projects>";
                }

                $db->close();

                ?>
            </div>
        </div>
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
                            <a href="../skills/">Skills</a>
                        </li>
                        <li>
                            <a href="../projects/">My Projects</a>
                        </li>
                        <li>
                            <a href="../about/">About Me</a>
                        </li>
                        <li>
                            <a href="../contact/">Contact</a>
                        </li>
                    </ul>
                </div>

                <div class="grid-4-col footer-links">
                    <h3 class="title-sm">What I do</h3>
                    <ul>
                        <li>
                            <a href="#">Web Design</a>
                        </li>
                        <li>
                            <a href="#">Web Development</a>
                        </li>
                        <li>
                            <a href="#">PHP/PhpMyAdmin</a>
                        </li>
                        <li>
                            <a href="#">C-Sharp</a>
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
