<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front-End Project First Part</title>

    <!-- Bootstrap links/version -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;500&family=Quicksand:wght@400;600&display=swap"
        rel="stylesheet">

    <!--ICONS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

    <!--stylesheet -->
    <link rel="stylesheet" href="./css/style.css" rel="stylesheet">

</head>

<body class="background-colour">

    <!----------------------------------------HEADER---------------------------------------->
    <!---------------------TOP BAR--------------------->
    <nav class="navbar navbar-expand-lg navbar-light top-bar top-bar-color">

        <!--LOGO-->
        <a href="./index.php"><img src="imgs/LOGO.png" alt=""></a>

        <!--MENU HAMBURGUESA-->
        <button class="navbar-toggler menu-mob" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="fas fa-bars"></span>
        </button>

        <!------------------------DESPLEGABLE MENU---------------------------->
        <div class="collapse navbar-collapse top-nav-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-space me-auto mb-2 mb-lg-0">

                <!--OPCIONES DE MENU-->
                <li class="nav-item">
                    <a class="nav-link top-nav-link active" aria-current="page" href="./index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link top-nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu dropdown-box" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">Youtubers</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">PvP</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">Shooters</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">Multiplayer</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">Fight</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">E3</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">E-Sports</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">Horror</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">RPG</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">Blizzcon</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">Sumer Game Fest</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">GDC</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">Ubisoft Forward</a></li>
                        <li><a class="dropdown-item top-dropdown-item" href="./category.php">Nintendo Direct</a></li>
                    </ul>
                </li>
            </ul>

            <!--TEXT FIELD SEARCH-->
            <form class="d-flex search-container">
                <input class="form-control input-search" type="search" placeholder="Search" aria-label="Search">
                <button class="search-btn" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!------------------------------------CATEGORY POSTS------------------------------------>
    <section class="categories-section">
        <!--EVENT-->
        <div class="card card-category mb-3">
            <div class="row">
                <!--IMAGE-->
                <div class="col">
                    <img class="category-image" src="./imgs/blank picture.png" alt="">
                </div>
                <!--BASIC INFO-->
                <div class="col category-col">
                        <h5 class="card-title title-category">EVENT TITLE</h5>
                        <p class="info-category">Cost</p>
                        <p class="info-category">Place</p>
                        <p class="info-category">Type of audience</p>
                        <p class="info-category">Date</p>
                </div>
                <!--HASTAGS AND BUTTON-->
                <div class="col category-col">

                        <div class="hastags-container">
                            <a class="id-hastag" href="./category.php">#Youtubers</a>
                            <a class="id-hastag" href="./category.php">#PvP</a>
                        </div>

                        <p class="card-text info-category"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="./specificevent.php" class="btn general-btns">SEE MORE</a>
                </div>
            </div>
        </div>

        <!--EVENT-->
        <div class="card card-category mb-3">
            <div class="row">
                <!--IMAGE-->
                <div class="col">
                    <img class="category-image" src="./imgs/blank picture.png" alt="">
                </div>
                <!--BASIC INFO-->
                <div class="col category-col">
                        <h5 class="card-title title-category">EVENT TITLE</h5>
                        <p class="info-category">Cost</p>
                        <p class="info-category">Place</p>
                        <p class="info-category">Type of audience</p>
                        <p class="info-category">Date</p>
                </div>
                <!--HASTAGS AND BUTTON-->
                <div class="col category-col">

                        <div class="hastags-container">
                            <a class="id-hastag" href="./category.php">#Youtubers</a>
                            <a class="id-hastag" href="./category.php">#PvP</a>
                        </div>

                        <p class="card-text info-category"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="./specificevent.php" class="btn general-btns">SEE MORE</a>
                </div>
            </div>
        </div>

        <!--EVENT-->
        <div class="card card-category mb-3">
            <div class="row">
                <!--IMAGE-->
                <div class="col">
                    <img class="category-image" src="./imgs/blank picture.png" alt="">
                </div>
                <!--BASIC INFO-->
                <div class="col category-col">
                        <h5 class="card-title title-category">EVENT TITLE</h5>
                        <p class="info-category">Cost</p>
                        <p class="info-category">Place</p>
                        <p class="info-category">Type of audience</p>
                        <p class="info-category">Date</p>
                </div>
                <!--HASTAGS AND BUTTON-->
                <div class="col category-col">

                        <div class="hastags-container">
                            <a class="id-hastag" href="./category.php">#Youtubers</a>
                            <a class="id-hastag" href="./category.php">#PvP</a>
                        </div>

                        <p class="card-text info-category"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="./specificevent.php" class="btn general-btns">SEE MORE</a>
                </div>
            </div>
        </div>

        <!--EVENT-->
        <div class="card card-category mb-3">
            <div class="row">
                <!--IMAGE-->
                <div class="col">
                    <img class="category-image" src="./imgs/blank picture.png" alt="">
                </div>
                <!--BASIC INFO-->
                <div class="col category-col">
                        <h5 class="card-title title-category">EVENT TITLE</h5>
                        <p class="info-category">Cost</p>
                        <p class="info-category">Place</p>
                        <p class="info-category">Type of audience</p>
                        <p class="info-category">Date</p>
                </div>
                <!--HASTAGS AND BUTTON-->
                <div class="col category-col">

                        <div class="hastags-container">
                            <a class="id-hastag" href="./category.php">#Youtubers</a>
                            <a class="id-hastag" href="./category.php">#PvP</a>
                        </div>

                        <p class="card-text info-category"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="./specificevent.php" class="btn general-btns">SEE MORE</a>
                </div>
            </div>
        </div>

        <!--EVENT-->
        <div class="card card-category mb-3">
            <div class="row">
                <!--IMAGE-->
                <div class="col">
                    <img class="category-image" src="./imgs/blank picture.png" alt="">
                </div>
                <!--BASIC INFO-->
                <div class="col category-col">
                        <h5 class="card-title title-category">EVENT TITLE</h5>
                        <p class="info-category">Cost</p>
                        <p class="info-category">Place</p>
                        <p class="info-category">Type of audience</p>
                        <p class="info-category">Date</p>
                </div>
                <!--HASTAGS AND BUTTON-->
                <div class="col category-col">

                        <div class="hastags-container">
                            <a class="id-hastag" href="./category.php">#Youtubers</a>
                            <a class="id-hastag" href="./category.php">#PvP</a>
                        </div>

                        <p class="card-text info-category"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="./specificevent.php" class="btn general-btns">SEE MORE</a>
                </div>
            </div>
        </div>

        <!--EVENT-->
        <div class="card card-category mb-3">
            <div class="row">
                <!--IMAGE-->
                <div class="col">
                    <img class="category-image" src="./imgs/blank picture.png" alt="">
                </div>
                <!--BASIC INFO-->
                <div class="col category-col">
                        <h5 class="card-title title-category">EVENT TITLE</h5>
                        <p class="info-category">Cost</p>
                        <p class="info-category">Place</p>
                        <p class="info-category">Type of audience</p>
                        <p class="info-category">Date</p>
                </div>
                <!--HASTAGS AND BUTTON-->
                <div class="col category-col">

                        <div class="hastags-container">
                            <a class="id-hastag" href="./category.php">#Youtubers</a>
                            <a class="id-hastag" href="./category.php">#PvP</a>
                        </div>

                        <p class="card-text info-category"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="./specificevent.php" class="btn general-btns">SEE MORE</a>
                </div>
            </div>
        </div>


    </section>




    <!----------------------------------------FOOTER---------------------------------------->
    <footer class="footer-section">
        <div class="footer">
            <p class="year">Copyright ????? 2021 | gamerstation.com</p>
        </div>
    </footer>

</body>

</html>