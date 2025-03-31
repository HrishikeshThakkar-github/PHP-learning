<?php require_once 'include/db.con.inc.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    </link>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="icon" type="image/x-icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAbCAMAAABY1h8eAAABC1BMVEVIaecpU+UrVeU7YecXTesHSuy7sHf00xb51gCzq38fUOj/rAD/0QD8zgXhuBfVrRz3pQAHSOyYmaD+7hv6xgD6wQDvtQDorwX6vACKj6vFwZP/8lX27GT42Fz401v3zlu4tp7Xzlj26Sz25i/z5UfMxG326C/y5aLx6Ifr4ovVxVr34SXo3VP28s7y4gD39dvo2QDw67n27qT25C7Ju27z5S/h0xv58Jb37Gbw67Df0ipxe6kfQ80AN90AMeD/4wx4gJ4AKt4XP9kcQddTZL+ZnJFreLD/8gy7t3XXw1fczUWlo35BWL83UMQuScemmoCIi5fOu1n71RbOtWbcvEzpyjB/f7LqwDJwd71jmlbXAAABiUlEQVR4AXTPg3oDQRRA4WjRNJ7YmU1jW+vYfP9X6V2X58PiH9psdsc/2Z0quohfuQy0kxT9I+rNraLD7n73eD0+v8er5vH74DPg0mYGQygciURjcb1YNBLxokTQAUgkU+lMFsrpKe+ZdCrvAgwWMIMxThexlvbG4I+gjqUSLldwCVLeqvAGSChYqzPw0Wi2NGy1iyX4rn/FTrfXwlCr1+0A9uuDoIml4ajcHk8m4/a0gxBG2MS+prPqdFqdtWrzBcuR/IDQEQx0OIJagshKMrvkYaaFEDMcIoGTZZbjAAlrWS1cEGWZW5Vwq26hoWjOytJ6g5l+/fdMtID9trikYNCaiZHSEHbkigj16/rMXR3aH+bH0+l0lmRZOp0vvIk0IM/vr6wkgYGyAk/RBlL724C8XEWOA4SLiDf6Tj9UfN4hinpB1BnOc3lR9N1Ez92MhfM8aeXNoyLx9Jg9PwcKHl4wEyLJFRYOB/5AnX4iEHYEFyj1cQGTqaAgCAtygdIyiAMEXIzMeFM8AOpQYns5LAk7AAAAAElFTkSuQmCC">
    <title>Flipkart</title>
</head>

<body>

    <header>
        <div class="container-fluid p-2">
            <nav class="navbar navbar-expand-lg navbar-light bg-white" style="padding-left: 5rem;">
                <a class="navbar-brand" href="#">
                    <img src="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/fkheaderlogo_exploreplus-44005d.svg" alt="Flipkart Logo" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="input-group ms-4 me-4">
                        <span class="input-group-text" id="span4search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search for Products, Brands, and More"
                            aria-describedby="span4search">
                    </div>
                    <ul class="navbar-nav ms-5">
                        <li class="nav-item dropdown me-3">
                            <!-- LOGIN BUTTON (Redirects to login.php) -->
                            <a href="signupsystem/login.php" class="btn btn-outline-primary me-2">
                                <i class="fa-regular fa-user"></i> Login
                                <button class="btn dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                            </a>

                            <!-- DROPDOWN TOGGLE BUTTON -->


                            <ul class="dropdown-menu" style="padding: 20px;">
                                <li class="dropdown-item">New Customer?
                                    <span><a href="signupsystem/signup.php" class="sign-up">Sign-up</a></span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-person-circle me-2"></i> My Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-patch-plus-fill me-2"></i> Flipkart Plus Zone</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-box-seam me-2"></i> Orders</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-heart me-2"></i> Wishlist</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-gift me-2"></i> Rewards</a></li>
                                <li><a class="dropdown-item" href="#"><i class="bi bi-wallet2 me-2"></i> Giftcard</a></li>
                            </ul>
                        </li>

                        <li class="nav-item me-3">
                            <button type="button" class="btn me-2"><i class="fa-solid fa-cart-shopping"></i> Cart</button>
                        </li>
                        <li class="nav-item me-3">
                            <button type="button" class="btn"><i class="fa-solid fa-shop"></i> Become a Seller</button>
                        </li>
                        <li class="nav-item me-3">
                            <div class="btn-group">
                                <button type="button" class="btn1" lis><img src="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/header_3verticalDots-ea7819.svg"></button>
                                <ul class="listfor3dot">
                                    <li>Notifications</li>
                                    <li>24X7 Customer Care</li>
                                    <li>Advertise</li>
                                    <li>Download App</li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container d-flex justify-content-center flex-wrap mt-3 p-4">
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center">
                <button class="btn text-center">
                    <img class="img-fluid" src="https://rukminim2.flixcart.com/flap/64/64/image/29327f40e9c4d26b.png?q=100" alt="Grocery">
                    <h5>Grocery</h5>
                </button>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center">
                <button class="btn text-center">
                    <img class="img-fluid" src="https://rukminim2.flixcart.com/flap/64/64/image/22fddf3c7da4c4f4.png?q=100" alt="Mobile">
                    <h5>Mobile</h5>
                </button>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center">
                <button class="btn text-center">
                    <img class="img-fluid" src="https://rukminim2.flixcart.com/fk-p-flap/64/64/image/0d75b34f7d8fbcb3.png?q=100" alt="Fashion">
                    <h5>Fashion</h5>
                </button>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center">
                <button class="btn text-center">
                    <img class="img-fluid" src="https://rukminim2.flixcart.com/fk-p-flap/64/64/image/0139228b2f7eb413.jpg?q=100" alt="Appliances">
                    <h5>Appliances</h5>
                </button>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center">
                <button class="btn text-center">
                    <img class="img-fluid" src="https://rukminim2.flixcart.com/flap/64/64/image/71050627a56b4693.png?q=100" alt="Flights">
                    <h5>Flights</h5>
                </button>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-3 d-flex justify-content-center">
                <button class="btn text-center">
                    <img class="img-fluid" src="https://rukminim2.flixcart.com/flap/64/64/image/dff3f7adcf3a90c6.png?q=100" alt="Flights">
                    <h5>Toys</h5>
                </button>
            </div>
        </div>


        <div class="container mt-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://rukminim2.flixcart.com/fk-p-flap/1620/270/image/ae33e00a9d467576.jpg?q=20" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://rukminim2.flixcart.com/fk-p-flap/1620/270/image/7f3cde58a30f6024.jpg?q=20" class="d-block w-100 img-fluid" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://rukminim2.flixcart.com/fk-p-flap/1620/270/image/d9290fb51138d286.png?q=20" class="d-block w-100 img-fluid" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>


        <div class="container mt-3 p-2">
            <div class="row ms-2">
                <h4>Best of Electronics</h4>
            </div>
        </div>

        <div class="container">
            <div class="d-flex">
                <div class="row" style="width: 100%;">
                    <div class="d-flex instruments2">
                        <div class="cards-wrapper">
                            <div class="card">
                                <img src="https://rukminim2.flixcart.com/image/200/200/xif0q/printer/2/l/c/dcp-b7600db-brother-original-imah32zhs8a6zct5.jpeg?q=70" class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5>Printer</h5>
                                    <p>₹4999</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://rukminim2.flixcart.com/image/200/200/xif0q/projector/s/x/v/zeb-pixaplay-25-17-zeb-pixaplay-25-full-hd-zebronics-original-imah5f67nyepnnwv.jpeg?q=70" class="card-img-top img-fluid" alt="...">
                                <div class="card-body " style="padding-top: 5rem;">
                                    <h5>Projector</h5>
                                    <p>₹35999</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://rukminim2.flixcart.com/image/312/312/l5fnhjk0/dslr-camera/f/t/m/eos-r10-24-2-r10-canon-original-imagg42fsbgv79da.jpeg?q=70" class="card-img-top mb-3" alt="...">
                                <div class="card-body ">
                                    <h5>Canon R-10</h5>
                                    <p>₹65999</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://rukminim2.flixcart.com/image/416/416/xif0q/headphone/j/p/r/-original-imah3dwf6xjtzk7d.jpeg?q=70&crop=false" class="card-img-top img-fluid" alt="...">
                                <div class="card-body ">
                                    <h5>Boat airdopes</h5>
                                    <p>₹999</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="https://rukminim2.flixcart.com/image/312/312/xif0q/monitor/9/n/9/-original-imagyahhmczxzhqw.jpeg?q=70" alt="...">
                                <div class="card-body">
                                    <h5>Monitor</h5>
                                    <p>₹14999</p>

                                </div>
                            </div>
                            <div class="card">
                                <img src="https://rukminim2.flixcart.com/image/612/612/l4yi7bk0/trimmer/q/l/1/0-5-3-mm-rechargeable-shaver-trimmer-for-men-electric-nose-original-imagfqg7c3ryt9pa.jpeg?q=70" alt="...">
                                <div class="card-body ">
                                    <p class="card-text ">Trimmer</p>
                                    <strong class="card-text">₹359</strong>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="dn" style="width: 20%;">
                        <div>
                            <img src="https://rukminim1.flixcart.com/fk-p-flap/260/810/image/d5d599c240c9b2ea.jpeg?q=20"
                                alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container heading-2 mt-3 p-2">
            <div class="row ms-2">
                <h4>Beauty,Food,Toys and more</h4>
            </div>
        </div>


        <div class="container instruments-down mb-3 ">

            <div class="initial-items-list">

                <div id="carouselExample" class="carousel slide ">
                    <div class="carousel-inner ">
                        <div class="carousel-item active">
                            <div class="cards-wrapper">
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/kl5hh8w0/puzzle/g/n/g/60-wooden-earth-jigsaw-puzzle-60-pcs-webby-original-imagyc8hsdztzdzb.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Puzzles and cube</h5>
                                        <p class="card-text">From ₹119 </p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; ">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/kzegk280/action-figure/9/v/t/3-30155-mcfarlane-2-5-original-imagbeyyzehpyk2m.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Action Toys</h5>
                                        <p class="card-text">From ₹499</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/jxz0brk0/stuffed-toy/n/t/s/4-feet-pink-very-beautiful-best-quality-for-special-gift-125-13-original-imafgv92puzkdytg.jpeg?q=90"
                                        class="card-img-top" style="margin-bottom: 1.2rem;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Soft Toys</h5>
                                        <p class="card-text">From ₹109</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/k6fd47k0/nut-dry-fruit/p/z/7/200-100-natural-california-pouch-happilo-original-imafzvw2tcazeur6.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Dry Fruits</h5>
                                        <p class="card-text">₹59</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/kdj4xow0/treadmill/b/g/c/ft098-steel-motorized-ft98-steel-motorized-motorized-fitkit-original-imafuerskytashcz.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Treadmill</h5>
                                        <p class="card-text">₹9999</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/jlph9jk0/cycle/h/f/k/skyper-26t-sskp26bk0001-16-hero-original-imaf8ru5xysfgtmx.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Cycles</h5>
                                        <p class="card-text">From ₹4499</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/kl5hh8w0/puzzle/g/n/g/60-wooden-earth-jigsaw-puzzle-60-pcs-webby-original-imagyc8hsdztzdzb.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Puzzles and cube</h5>
                                        <p class="card-text">From ₹119 </p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; ">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/kzegk280/action-figure/9/v/t/3-30155-mcfarlane-2-5-original-imagbeyyzehpyk2m.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Action Toys</h5>
                                        <p class="card-text">From ₹499</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/jxz0brk0/stuffed-toy/n/t/s/4-feet-pink-very-beautiful-best-quality-for-special-gift-125-13-original-imafgv92puzkdytg.jpeg?q=90"
                                        class="card-img-top" style="margin-bottom: 1.2rem;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Soft Toys</h5>
                                        <p class="card-text">From ₹109</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/k6fd47k0/nut-dry-fruit/p/z/7/200-100-natural-california-pouch-happilo-original-imafzvw2tcazeur6.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Dry Fruits</h5>
                                        <p class="card-text">₹59</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/kdj4xow0/treadmill/b/g/c/ft098-steel-motorized-ft98-steel-motorized-motorized-fitkit-original-imafuerskytashcz.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Treadmill</h5>
                                        <p class="card-text">₹9999</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/jlph9jk0/cycle/h/f/k/skyper-26t-sskp26bk0001-16-hero-original-imaf8ru5xysfgtmx.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Cycles</h5>
                                        <p class="card-text">From ₹4499</p>

                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="cards-wrapper">
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/kl5hh8w0/puzzle/g/n/g/60-wooden-earth-jigsaw-puzzle-60-pcs-webby-original-imagyc8hsdztzdzb.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Puzzles and cube</h5>
                                        <p class="card-text">From ₹119 </p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; ">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/kzegk280/action-figure/9/v/t/3-30155-mcfarlane-2-5-original-imagbeyyzehpyk2m.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Action Toys</h5>
                                        <p class="card-text">From ₹499</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/jxz0brk0/stuffed-toy/n/t/s/4-feet-pink-very-beautiful-best-quality-for-special-gift-125-13-original-imafgv92puzkdytg.jpeg?q=90"
                                        class="card-img-top" style="margin-bottom: 1.2rem;" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Soft Toys</h5>
                                        <p class="card-text">From ₹109</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/k6fd47k0/nut-dry-fruit/p/z/7/200-100-natural-california-pouch-happilo-original-imafzvw2tcazeur6.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Dry Fruits</h5>
                                        <p class="card-text">₹59</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/kdj4xow0/treadmill/b/g/c/ft098-steel-motorized-ft98-steel-motorized-motorized-fitkit-original-imafuerskytashcz.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Treadmill</h5>
                                        <p class="card-text">₹9999</p>

                                    </div>
                                </div>
                                <div class="card" style="width: 12rem; padding-top: 2rem;">
                                    <img src="https://rukminim2.flixcart.com/image/600/600/jlph9jk0/cycle/h/f/k/skyper-26t-sskp26bk0001-16-hero-original-imaf8ru5xysfgtmx.jpeg?q=90"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Cycles</h5>
                                        <p class="card-text">From ₹4499</p>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <button class="carousel-control-prev"
                        style=" margin-top: 7.5rem; background-color: black; color: black; width: 55px; height: 100px;"
                        type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"
                            style="width: 20px; height: 20px;"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next"
                        style=" margin-top: 7.5rem; background-color: black; color: black; width: 55px; height: 100px;"
                        type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"
                            style="width: 20px; height: 20px;"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>




    </main>
    <?php

    // Fetch users from the database
    $query = "SELECT * FROM user";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>

    <div class="container mt-5">
        <h3 class="mb-4 text-center">User Profiles</h3>

        <!-- Flexbox container for horizontal scrolling -->
        <div class="d-flex flex-row overflow-auto" style="gap: 15px; white-space: nowrap;">
            <?php foreach ($users as $user): ?>
                <div class="card" style="min-width: 250px; max-width: 250px;">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($user['name']); ?></h5>
                        <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
                        <p class="card-text"><strong>Age:</strong> <?php echo htmlspecialchars($user['age']); ?></p>
                        <p class="card-text"><strong>ID:</strong> <?php echo $user['id']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>


    <footer>
        <div class="footer-container">
            <footer class="py-5">
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">About</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">About</a></li>
                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5>Section</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">Home</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">Features</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">Pricing</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">FAQs</a></li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 "
                                    style="color: rgb(184, 182, 182);">About</a></li>
                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                            <h5>Get-notified!</h5>
                            <p>Connect with Us and we will share all the deals</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <label for="newsletter1" class="visually-hidden">Email address</label>
                                <input id="newsletter1" type="text" class="form-control"
                                    placeholder="Email address">
                                <button class="btn btn-primary" type="button">Subscribe</button>
                            </div>
                            <br>
                            <h5>Socials:</h5>
                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjUiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNSAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyLjkzMzEgMjFDMTcuOTAzNyAyMSAyMS45MzMxIDE2Ljk3MDYgMjEuOTMzMSAxMkMyMS45MzMxIDcuMDI5NDQgMTcuOTAzNyAzIDEyLjkzMzEgM0M3Ljk2MjU0IDMgMy45MzMxMSA3LjAyOTQ0IDMuOTMzMTEgMTJDMy45MzMxMSAxNi45NzA2IDcuOTYyNTQgMjEgMTIuOTMzMSAyMVoiIHN0cm9rZT0id2hpdGUiIHN0cm9rZS13aWR0aD0iMS41IiBzdHJva2UtbGluZWNhcD0icm91bmQiIHN0cm9rZS1saW5lam9pbj0icm91bmQiLz4KPHBhdGggZD0iTTE2LjY4MzEgOC4yNUgxNS4xODMxQzE0LjU4NjQgOC4yNSAxNC4wMTQxIDguNDg3MDUgMTMuNTkyMSA4LjkwOTAxQzEzLjE3MDIgOS4zMzA5NyAxMi45MzMxIDkuOTAzMjYgMTIuOTMzMSAxMC41VjIxIiBzdHJva2U9IndoaXRlIiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLWxpbmVjYXA9InJvdW5kIiBzdHJva2UtbGluZWpvaW49InJvdW5kIi8+CjxwYXRoIGQ9Ik05LjkzMzExIDEzLjVIMTUuOTMzMSIgc3Ryb2tlPSJ3aGl0ZSIgc3Ryb2tlLXdpZHRoPSIxLjUiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPgo8L3N2Zz4K"
                                alt="">

                            <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjQiIGhlaWdodD0iMjQiIHZpZXdCb3g9IjAgMCAyNCAyNCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGcgY2xpcC1wYXRoPSJ1cmwoI2NsaXAwXzE4M18yMCkiPgo8cGF0aCBkPSJNMTMuNTQzNiAxMC42MTc5TDIwLjA5NzEgM0gxOC41NDQxTDEyLjg1MzcgOS42MTQ0OEw4LjMwODg3IDNIMy4wNjY4OUw5LjkzOTY0IDEzLjAwMjNMMy4wNjY4OSAyMC45OTA4SDQuNjE5OTRMMTAuNjI5MSAxNC4wMDU2TDE1LjQyODggMjAuOTkwOEgyMC42NzA4TDEzLjU0MzIgMTAuNjE3OUgxMy41NDM2Wk0xMS40MTY1IDEzLjA5MDRMMTAuNzIwMiAxMi4wOTQ0TDUuMTc5NTMgNC4xNjkxMUg3LjU2NDkxTDEyLjAzNjMgMTAuNTY1MUwxMi43MzI2IDExLjU2MTFMMTguNTQ0OCAxOS44NzQ4SDE2LjE1OTVMMTEuNDE2NSAxMy4wOTA4VjEzLjA5MDRaIiBmaWxsPSJ3aGl0ZSIvPgo8L2c+CjxkZWZzPgo8Y2xpcFBhdGggaWQ9ImNsaXAwXzE4M18yMCI+CjxyZWN0IHg9IjMuMDY2ODkiIHk9IjMiIHdpZHRoPSIxNy42MDM5IiBoZWlnaHQ9IjE4IiByeD0iMC4yIiBmaWxsPSJ3aGl0ZSIvPgo8L2NsaXBQYXRoPgo8L2RlZnM+Cjwvc3ZnPgo=" alt="">
                            <img src="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/YoutubeLogo-8425c4.svg" alt="">
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>© 2024 Company, Inc. All rights reserved.</p>
                    <!-- <div class="col-2"><img
                            src="https://static-assets-web.flixcart.com/batman-returns/batman-returns/p/images/payment-method-c454fb.svg"
                            alt=""></div> -->

                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#twitter"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#instagram"></use>
                                </svg></a></li>
                        <li class="ms-3"><a class="link-body-emphasis" href="#"><svg class="bi" width="24"
                                    height="24">
                                    <use xlink:href="#facebook"></use>
                                </svg></a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>