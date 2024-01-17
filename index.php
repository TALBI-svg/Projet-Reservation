<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid wrapper">
        <!-- navbar area --> 
        <nav class="navbar navbar-expand-lg bg-white mx-5">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Hotel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav me-auto ms-5">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>    
                <li class="nav-item">
                  <a class="nav-link" href="#">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link">contact</a>
                </li>
              </ul>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">login</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-primary" href="#">Signup</a>
                </li>
              </ul> 
            </div>
          </div>     
        </nav>
        <!-- welcome area -->
        <section class="Welcome mx-5 px-3">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 left-area p-0">
                    <p class="slugon-area">Best Appartment & Hotel <span class="text text-warning">Services</span></p>
                    <p class="subslugon-area pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi harum quis non tempore, provident modi nostrum, illum aliquid esse, velit quod libero eligendi beatae explicabo cumque unde. Nisi pariatur id dolor laboriosam ex magnam dolorum!</p>
                    <div class="d-flex pt-2">
                        <div class="d-flex align-items-end">
                            <p class="fw-bold fs-2 p-0">432</p>
                            <p class="ps-3 pb-2">lorem</p>
                        </div>
                        <div class="d-flex align-items-end ps-3">
                            <p class="fw-bold fs-2 p-0">432</p>
                            <p class="ps-3 pb-2">lorem</p>
                        </div>
                    </div>
                    <p class="btn btn-primary px-3 py-2 mt-3">Check more <i class="ps-2 fa-solid fa-arrow-right"></i></p>
                    <a href="#" class="feedback-area d-flex rounded p-2 bg-white shadow text-decoration-none text text-dark">
                        <img src="./assets/images/feedback_home.png" class="rounded" alt="">
                        <div class="right-feed d-flex justify-content-between">
                            <div class="ps-3">
                                <h5 class="">Marie christine</h5>
                                <div class="">
                                    <i class="fa-solid fw-light fa-star text text-warning"></i>
                                    <i class="fa-solid fw-light fa-star text text-warning"></i>
                                    <i class="fa-solid fw-light fa-star text text-warning"></i>
                                    <i class="fa-solid fw-light fa-star text text-warning"></i>
                                    <i class="fa-solid fw-light fa-star text text-warning"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-md-0 col-lg-6 right-area d-flex justify-content-end pe-1 pt-3">
                    <img src="./assets/images/bg_home2.jpg" class="rounded leftside" alt="bg_home">
                    <div class="rightside me-2">
                        <img src="./assets/images/bg_home1.jpg" class="rounded ms-1 mb-1 img-fluid" alt="bg_home">
                        <img src="./assets/images/bg_home3.jpg" class="rounded ms-1 img-bottom" alt="bg_home">
                    </div>
                </div>
            </div>
        </section>
        <!-- rooms area -->
        <section class="Rooms mx-5 px-3">
            <div class="row">
              <div class="col-12 col-md-4 mx-auto">
                <h1 class="fw-bold">Choose your luxurious room</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, sit.</p>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6 mx-auto">
              <div id="carouselExampleDark" class="carousel carousel-dark slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="card border-0">
                      <div class="d-flex images-container rounded">
                        <a href="#">
                          <img src="./assets/images/rooms_home1.jpg" class="room-img" alt="...">
                        </a>
                        <a href="#"> 
                          <img src="./assets/images/rooms_home2.jpg" class="room-img" alt="...">
                        </a>
                        <a href="#"> 
                          <img src="./assets/images/rooms_home3.jpg" class="room-img" alt="...">
                        </a>
                      </div>
                      <div class="card-body ps-1">
                        <h5 class="card-title">Standard</h5>
                        <p class="card-text">We offer our customers <span class="text text-primary">standard</span> rooms because their comfort interests us.</p>
                        <p class="btn btn-primary">Show more</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="card border-0">
                      <div class="d-flex images-container rounded">
                        <a href="#">
                          <img src="./assets/images/rooms_home4.jpg" class="room-img" alt="...">
                        </a>
                        <a href="#">
                          <img src="./assets/images/rooms_home5.jpg" class="room-img" alt="...">
                        </a>
                        <a href="#">
                          <img src="./assets/images/rooms_home6.jpg" class="room-img" alt="...">
                        </a>
                      </div>
                      <div class="card-body ps-1">
                        <h5 class="card-title">Medium</h5>
                        <p class="card-text">We offer our customers <span class="text text-success">medium</span> rooms because their comfort interests us.</p>
                        <p class="btn btn-primary">Show more</p>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="card border-0">
                      <div class="d-flex images-container rounded">
                      <a href="#">
                        <img src="./assets/images/rooms_home7.jpg" class="room-img" alt="...">
                      </a>
                      <a href="#">
                        <img src="./assets/images/rooms_home8.jpg" class="room-img" alt="...">
                      </a>
                      <a href="#">
                        <img src="./assets/images/rooms_home9.jpg" class="room-img" alt="...">
                      </a>
                      </div>
                      <div class="card-body ps-1">
                        <h5 class="card-title">VIP</h5>
                        <p class="card-text">We offer our customers <span class="text text-warning">vip</span> rooms because their comfort interests us.</p>
                        <p class="btn btn-primary">Show more</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pt-3">
                  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <i class="fa-solid fa-angle-left"></i>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
              </div>
            </div>
        </section>
        <!-- services area -->
        <section class="Services mx-5 px-3">
            <div class="row pb-3">
              <div class="col-12 col-md-4 mx-auto">
                <h1 class="fw-bold">What Services, We Give You !</h1>
              </div>
            </div>
            <div class="row pt-5 mx-auto d-flex justify-content-center">
              <div class="col-12 col-md-4 col-lg-2 d-flex justify-content-center">
                <div class="card text text-center border-0 shadow" style="width: 19rem;">
                  <div class="p-3 pt-3"><i class="rounded-circle p-3 bg-warning text text-white fa-solid fa-wifi"></i></div>
                  <div class="card-body">
                    <h5 class="card-title">Free wifi</h5>
                    <p class="card-text pb-4 fw-light">Stay connected effortlessly with complimentary high-speed WiFi, offering seamless browsing and uninterrupted connectivity throughout your stay</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-2 d-flex justify-content-center">
                <div class="card text text-center border-0 shadow" style="width: 19rem;">
                  <div class="p-3 pt-3"><i class="rounded-circle p-3 bg-warning text text-white fa-solid fa-bath"></i></div>
                  <div class="card-body">
                    <h5 class="card-title">Beauty & helth</h5>
                    <p class="card-text pb-4 fw-light"> the overall state of physical, mental, and emotional well-being, while beauty pertains to physical appearance and aesthetics.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-2 d-flex justify-content-center">
                <div class="card text text-center border-0 shadow" style="width: 19rem;">
                  <div class="p-3 pt-3"><i class="rounded-circle p-3 bg-warning text text-white fa-solid fa-headset"></i></div>
                  <div class="card-body">
                    <h5 class="card-title">Team support</h5>
                    <p class="card-text pb-4 fw-light">Providing prompt and attentive assistance, our team is dedicated to ensuring a seamless and enjoyable experience for all guests at our hotel.</p>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-4 col-lg-2 d-flex justify-content-center">
                <div class="card text text-center border-0 shadow" style="width: 19rem;">
                  <div class="p-3 pt-3"><i class="rounded-circle p-3 bg-warning text text-white fa-solid fa-person-hiking"></i></div>
                  <div class="card-body">
                    <h5 class="card-title">Excursions</h5>
                    <p class="card-text pb-4 fw-light">Excursions and guided tours Flower arrangement Ironing service Laundry and valet service Mail services Room service (24-hour)</p>
                  </div>
                </div>
              </div>
              </div>
            </div>
        </section>
    </div>
</body>
</html>