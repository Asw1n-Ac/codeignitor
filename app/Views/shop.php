<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>eKART</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">

        <div class="container-fluid">
            <a class="navbar-brand" href="#">eKART</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            CATEGORY
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">ELECTRONICS</a></li>
                            <li><a class="dropdown-item" href="#">FASHION</a></li>
                            <li><a class="dropdown-item" href="#">HOME&FURNITURE</a></li>
                            <li><a class="dropdown-item" href="#">GROCERRY</a></li>
                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- banner -->

    <img src="<?= BASEURL . ('imgs/banner.jpg') ?>" class="" alt="..." width="100%" height="500px">

    <!-- About -->
    <!-- <img src="<?= BASEURL.('imgs/shoping_thumbnail.jpg') ?>" class=" float-end" alt="..." > -->


        <main>
            <section class="py-5">
                <div class="container-md">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>About Us</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, est fugit! Veniam assumenda doloremque nesciunt, a odit minus
                                voluptatum non cumque rerum dolores provident sunt ad vitae quidem obcaecati aperiam numquam excepturi, tempora magni necessitatibus
                                odio tempore. Ratione, minus officia, natus, modi suscipit enim ea odit officiis consequuntur totam maiores!
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed alias voluptas provident error! Illum quidem eius porro
                                deserunt. Mollitia, accusantium iusto quis nisi eveniet ducimus natus distinctio nulla ipsam! Asperiores a, dolor expedita,
                                cum corrupti error commodi illum temporibus tempora, consectetur maiores voluptate laudantium mollitia excepturi at? Dolores, cumque repellendus.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <img src="<?= BASEURL.('imgs/shoping_thumbnail.jpg') ?>" alt="About Image" class="rounded " width="350px" height="300px">
                        </div>
                    </div>
                </div>
            </section>
        </main>

    <!-- Features section  -->
    <!-- <div class="container-fluid features py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!-- Card -->
    <div class="container-fluid px-4" style="margin-top: 20px;">
        <div class="row gx-5" style="margin-left: 23%;">

            <div class="card col-sm-4" style="width: 18rem;">

                <img src="<?= BASEURL . ('imgs/mobile.jpg') ?>" class="card-img-top" alt="..." height="150px;" width="6rem;" style="margin-top: 10px;">
                <div class="card-body">
                    <h5 class="card-title">MOBILES</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="<?= BASEURL . ('./mobile') ?>" class="btn btn-primary">></a>
                </div>
            </div>
            <div class="card col-sm-4" style=" width: 18rem;">
                <img src="<?= BASEURL . ('imgs/cloths.jpg') ?>" class="card-img-top" alt="..." height="150px;" width="6rem;" style="margin-top: 10px;">
                <div class="card-body">
                    <h5 class="card-title">CLOTHS</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">></a>
                </div>
            </div>
            <div class="card col-sm-4" style=" width: 18rem;">
                <img src="<?= BASEURL . ('imgs/grocery.jpg') ?>" class="card-img-top" alt="..." height="150px;" width="6rem;" style="margin-top: 10px;">
                <div class="card-body">
                    <h5 class="card-title">GROCERY</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">></a>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <footer class="footer bg-dark text-light" style="margin-top: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>About Us</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="col-md-3">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Follow Us</h5>
                    <ul class="list-unstyled">
                        <li><a href="#"><i class="fab fa-facebook"></i> Facebook</a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i> Twitter</a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i> Instagram</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="text-center">&copy; 2024 Your Company. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>


</body>

</html>