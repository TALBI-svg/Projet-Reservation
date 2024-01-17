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
    </div>
</body>
</html>