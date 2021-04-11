<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bank</title>
    <link rel="stylesheet" href="static/style/style.css" class="style">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
          crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300&family=Poppins:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
          integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <meta name="viewport" content = "width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer/">



    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>




    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

</head>
<body>






    <!--Navigation Bar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar lazy">
        <div class="container-fluid">
            <a class="navbar-brand" href=""><h4><span class="nav-link-white">Bank</span></h4></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-dark text-light"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link " href=""><span class = "nav-link-white">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href=""><span class = "nav-link-white">Services</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=""><span class = "nav-link-white">Blog</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href=""><span class = "nav-link-white">Careers</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href=""><span class = "nav-link-white">Contact Us</span></a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

    <!--Header-->
    <header class="mainHead ">

    <div class="row">
        <!--    image block   -->
        <div class="pink col">
            <img src="static/images/img7.jpg" alt="" class="mainImage">
        </div>

        <div class="col ">
            <div class="side-text ">
                <h3>Lorem Ipsum</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborummolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum


                </p>
                    <div class="buttons">

                        <a href="sections/login/signup.php" class="btn btn-outline-secondary mx-0 ml-4" id = "left">Join us</a>
                        <a href="sections/login/login.php" class="btn btn-dark">
                            Log In
                        </a>
                    </div>
            </div>

        </div>
    </div>


    </header>





<main >
    <div class="container py-5 my-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom text-center">OUR SERVICES</h2>
        <div class="row g-5 py-5">

            <div class="col-md-4 d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <i  class="fas fa-wallet fa-2x"></i>
                </div>
                <div>
                    <h2>INDIVIDUAL BANKING</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-dark">
                        Primary button
                    </a>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <i class="fas fa-dollar-sign fa-2x"></i>
                </div>
                <div>
                    <h2>ONLINE BANKING</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-dark">
                        Primary button
                    </a>
                </div>
            </div>
            <div class="col-md-4 d-flex align-items-start">
                <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
                    <i class="fas fa-unlock-alt fa-2x" ></i>
                </div>
                <div>
                    <h2>SECURITY</h2>
                    <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence and probably just keep going until we run out of words.</p>
                    <a href="#" class="btn btn-dark">
                        Primary button
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="container my-5">
        <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
            <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
                <h2 class="display-3 fw-bold lh-1 mb-3 money ">Get More from your money</h2>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                    <button type="button" class="btn btn-dark btn-lg px-4 me-md-2 fw-bold">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </div>
            <div class="col-lg-4  p-0 position-relative overflow-hidden shadow-lg">
                <div >
                    <img class="d-block rounded-lg-3" src="static/images/money1.jpg" alt="" >
                </div>
            </div>
        </div>
    </div>

    <div class="container col-xxl-8  px-1 py-2">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 px-4">

            <div class="col-lg-6">
                <h2 class="display-5 fw-bold lh-1 mb-3 money ">THE FUTURE OF PAYMENT IS HERE</h2>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-dark btn-lg px-4 me-md-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </div>

            <div class="col-10 col-sm-8 col-lg-6">
                <img src="static/images/money1.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"  loading="lazy">
            </div>
        </div>
    </div>

    <div class="container py-5" id="custom-cards">
        <h2 class="pb-2 border-bottom">EXPLORE MORE</h2>

        <div class="row row-cols-3 align-items-stretch py-5">
            <div class="col col-sm-12 col-lg-4 my-5 ">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url(''); background-position : center;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>Earth</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col col-sm-12 col-lg-4 my-5 ">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                    style="background-image: url(''); background-position : center;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>Pakistan</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>4d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col col-sm-12 col-lg-4 my-5 ">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                    style="background-image: url(''); background-position : center;">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                                <small>California</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                                <small>5d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">CAREERS</h1>
                <p class="lead text-muted">Interested in working with us Come Join us !!<p>
                    <a href="#" class="btn btn-primary my-2">Main call to action</a>
                    <a href="#" class="btn btn-secondary my-2">Secondary action</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

                        <div class="card-body">
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</main>



<script src ="static/js/script.js" ></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- cdnjs -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <!-- jsDeliver -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>




    <script>
    $('.lazy').Lazy({
        // your configuration goes here
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        visibleOnly: true,
        onError: function(element) {
            console.log('error loading ' + element.data('src'));
        }
    });
</script>

</body>
</html>