<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<!-- head -->
<?php include('head.php') ?>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
                var container = document.querySelector('[data-layout]');
                container.classList.remove('container');
                container.classList.add('container-fluid');
            }
            </script>

            <?php include('sidebar.php') ?>

            <div class="content">

                <?php include('header.php') ?>

                <div class="row g-3 mb-3">

                    <div class="col-md-12 col-lg-7 col-xxl-7 align-self-start">
                        <div class="row g-3">
							<div class="col-12">
								<div class="card h-md-100 ecommerce-card-min-width">
									<div class="card-header pb-0">
										<h6 class="mb-0 mt-2 d-flex align-items-center">Tableau de Bord<span
												class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top"
												title="Calculated according to last week's sales"><span
													class="far fa-question-circle" data-fa-transform="shrink-1"></span></span>
										</h6>
									</div>
									<div class="card-body ">
										<div class="row">
											<p>Bienvenu sur FEED-AI une appplication web pour bien gérer vos projets</p>
										</div>
									</div>
								</div>
							</div>
                            <div class="col-12">
                                <div class="card bg-transparent-50 overflow-hidden">
                                    <div class="card-header position-relative">
                                        <div class="bg-holder d-none d-md-block bg-card z-index-1"
                                            style="background-image:url(assets/img/illustrations/ecommerce-bg.png);background-size:230px;background-position:right bottom;z-index:-1;">
                                        </div>
                                        <!--/.bg-holder-->

                                        <div class="position-relative z-index-2">
                                            <div>
                                                <h3 class="text-primary mb-1">Bonsoir, Johnattan!</h3>
                                                <p>Voici tout ce qui s'est passé en votre abscence</p>
                                            </div>
                                            <div class="d-flex py-3">
                                                <div class="pe-3">
                                                    <p class="text-600 fs--1 fw-medium">Today's visit </p>
                                                    <h4 class="text-800 mb-0">14,209</h4>
                                                </div>
                                                <div class="ps-3">
                                                    <p class="text-600 fs--1">Today’s total sales </p>
                                                    <h4 class="text-800 mb-0">$21,349.29 </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="mb-0 list-unstyled">
                                            <li
                                                class="alert mb-0 rounded-0 py-3 px-card alert-warning border-x-0 border-top-0">
                                                <div class="row flex-between-center">
                                                    <div class="col">
                                                        <div class="d-flex">
                                                            <div class="fas fa-circle mt-1 fs--2"></div>
                                                            <p class="fs--1 ps-2 mb-0"><strong>5 products</strong>
                                                                didn’t publish to your Facebook page</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center"><a
                                                            class="alert-link fs--1 fw-medium" href="#!">View products<i
                                                                class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                                                </div>
                                            </li>
                                            <li
                                                class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top border-x-0 border-top-0">
                                                <div class="row flex-between-center">
                                                    <div class="col">
                                                        <div class="d-flex">
                                                            <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                                            <p class="fs--1 ps-2 mb-0"><strong>7 orders</strong> have
                                                                payments that need to be captured</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center"><a
                                                            class="alert-link fs--1 fw-medium" href="#!">View payments<i
                                                                class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                                                </div>
                                            </li>
                                            <li
                                                class="alert mb-0 rounded-0 py-3 px-card greetings-item border-top  border-0">
                                                <div class="row flex-between-center">
                                                    <div class="col">
                                                        <div class="d-flex">
                                                            <div class="fas fa-circle mt-1 fs--2 text-primary"></div>
                                                            <p class="fs--1 ps-2 mb-0"><strong>50+ orders</strong> need
                                                                to be fulfilled</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto d-flex align-items-center"><a
                                                            class="alert-link fs--1 fw-medium" href="#!">View orders<i
                                                                class="fas fa-chevron-right ms-1 fs--2"></i></a></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-md-12 col-lg-5 col-xxl-5">
                        <div class="card">
                            <div class="card-header bg-light">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="mb-0">Mes projets</h6>
                                    </div>
                                    <div class="col-auto text-center pe-card">
                                        <button class="btn btn-primary" type="button"
                                            data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                                            <span class="fas fa-angle-left"></span>
                                        </button>
                                        <button class="btn btn-primary" type="button"
                                            data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                                            <span class="fas fa-angle-right"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="row g-0 py-2 position-relative border-bottom border-200">
                                    <div class="container-fluid">
                                        <div id="carouselExampleIndicators3" class="carousel slide"
                                            data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="col-md-12">
                                                        <div class="card overflow-hidden">
                                                            <div class="card-img-top"><img class="img-fluid"
                                                                    src="assets/img/generic/1.jpg"
                                                                    alt="Card image cap" /></div>
                                                            <div class="card-body">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-3">
                                                                        <div class="bg-soft-primary px-3 py-3 rounded text-center"
                                                                            style=" height:60px;">
                                                                            <h5
                                                                                class="text-primary mb-0 d-flex flex-column mt-n1">
                                                                                <span>09</span><small
                                                                                    class="text-primary fs--2 lh-1">MAR
                                                                                    2023</small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <h5>Developper web</h5>
                                                                        <p class="">Lorem ipsum dolor sit, amet
                                                                            consectet</p>
                                                                        <h6><a href=""
                                                                                class="badge rounded-pill bg-primary">Domaine</a>
                                                                        </h6>

                                                                    </div>
                                                                    <div class="dropdown-divider"></div>
                                                                    <div class="col-sm-6 justify-content-center">
                                                                        <div class="row">
                                                                            <h6 class="mb-1 fw-semi-bold">Niche</h6>
                                                                            <p class="">Landing</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <h6 class="mb-1 ">Objectifs</h6>
                                                                            <p class="">Landing</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <button class="btn btn-primary">Add Projet</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item ">
                                                    <div class="col-md-12">
                                                        <div class="card overflow-hidden">
                                                            <div class="card-img-top"><img class="img-fluid"
                                                                    src="assets/img/generic/1.jpg"
                                                                    alt="Card image cap" /></div>
                                                            <div class="card-body">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-3">
                                                                        <div class="bg-soft-primary px-3 py-3 rounded text-center"
                                                                            style=" height:60px;">
                                                                            <h5
                                                                                class="text-primary mb-0 d-flex flex-column mt-n1">
                                                                                <span>09</span><small
                                                                                    class="text-primary fs--2 lh-1">MAR
                                                                                    2023</small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <h5>Developper web</h5>
                                                                        <p class="">Lorem ipsum dolor sit, amet
                                                                            consectet</p>
                                                                        <h6><a href=""
                                                                                class="badge rounded-pill bg-primary">Domaine</a>
                                                                        </h6>

                                                                    </div>
                                                                    <div class="dropdown-divider"></div>
                                                                    <div class="col-sm-6 justify-content-center">
                                                                        <div class="row">
                                                                            <h6 class="mb-1 fw-semi-bold">Niche</h6>
                                                                            <p class="">Landing</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <h6 class="mb-1 ">Objectifs</h6>
                                                                            <p class="">Landing</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <button class="btn btn-primary">Add Projet</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item ">
                                                    <div class="col-md-12">
                                                        <div class="card overflow-hidden">
                                                            <div class="card-img-top"><img class="img-fluid"
                                                                    src="assets/img/generic/1.jpg"
                                                                    alt="Card image cap" /></div>
                                                            <div class="card-body">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-3">
                                                                        <div class="bg-soft-primary px-3 py-3 rounded text-center"
                                                                            style=" height:60px;">
                                                                            <h5
                                                                                class="text-primary mb-0 d-flex flex-column mt-n1">
                                                                                <span>09</span><small
                                                                                    class="text-primary fs--2 lh-1">MAR
                                                                                    2023</small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <h5>Developper web</h5>
                                                                        <p class="">Lorem ipsum dolor sit, amet
                                                                            consectet</p>
                                                                        <h6><a href=""
                                                                                class="badge rounded-pill bg-primary">Domaine</a>
                                                                        </h6>

                                                                    </div>
                                                                    <div class="dropdown-divider"></div>
                                                                    <div class="col-sm-6 justify-content-center">
                                                                        <div class="row">
                                                                            <h6 class="mb-1 fw-semi-bold">Niche</h6>
                                                                            <p class="">Landing</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <h6 class="mb-1 ">Objectifs</h6>
                                                                            <p class="">Landing</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <button class="btn btn-primary">Add Projet</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row g-0">
                    <div class="col-xxl-12 col-lg-12 px-xxl-2">
                        <div class="card h-100">
                            <div class="card-header bg-light py-2">
                                <div class="row flex-between-center">
                                    <div class="col-auto">
                                        <h6 class="mb-0">Top Products</h6>
                                    </div>
                                    <div class="col-auto ">
                                        <button class="btn btn-primary" type="button"
                                            data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                                            <span class="fas fa-angle-left"></span>
                                        </button>
                                        <button class="btn btn-primary" type="button"
                                            data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                                            <span class="fas fa-angle-right"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body h-100">
                                <div class="row g-0  py-2 position-relative">
                                    <div class="container-fluid">
                                        <div id="carouselExampleIndicators3" class="carousel slide"
                                            data-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="col-md-12">
                                                        <div class="card overflow-hidden">

                                                            <div class="card-body">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-3">
                                                                        <div class="bg-soft-primary px-3 py-3 rounded text-center"
                                                                            style=" height:60px;">
                                                                            <h5
                                                                                class="text-primary mb-0 d-flex flex-column mt-n1">
                                                                                <span>09</span><small
                                                                                    class="text-primary fs--2 lh-1">MAR
                                                                                    2023</small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <h5>Developper web</h5>
                                                                        <p>Lorem ipsum dolor sit, amet consectet</p>
                                                                        <h6><a href="" class="badge bg-primary">Projet
                                                                                1</a></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item ">
                                                    <div class="col-md-12">
                                                        <div class="card overflow-hidden">

                                                            <div class="card-body">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-3">
                                                                        <div class="bg-soft-primary px-3 py-3 rounded text-center"
                                                                            style=" height:60px;">
                                                                            <h5
                                                                                class="text-primary mb-0 d-flex flex-column mt-n1">
                                                                                <span>09</span><small
                                                                                    class="text-primary fs--2 lh-1">MAR
                                                                                    2023</small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <h5>Developper web</h5>
                                                                        <p class="">Lorem ipsum dolor sit, amet
                                                                            consectet</p>
                                                                    </div>
                                                                    <div class="dropdown-divider"></div>
                                                                    <div class="col-sm-6 justify-content-center">
                                                                        <div class="row">
                                                                            <h6 class="mb-1 fw-semi-bold">Niche</h6>
                                                                            <p class="">Landing</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <h6 class="mb-1 ">Objectifs</h6>
                                                                            <p class="">Landing</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <button class="btn btn-primary">Add Projet</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="carousel-item ">
                                                    <div class="col-md-12">
                                                        <div class="card overflow-hidden">

                                                            <div class="card-body">
                                                                <div class="row justify-content-center">
                                                                    <div class="col-md-3">
                                                                        <div class="bg-soft-primary px-3 py-3 rounded text-center"
                                                                            style=" height:60px;">
                                                                            <h5
                                                                                class="text-primary mb-0 d-flex flex-column mt-n1">
                                                                                <span>09</span><small
                                                                                    class="text-primary fs--2 lh-1">MAR
                                                                                    2023</small></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-9">
                                                                        <h5>Developper web</h5>
                                                                        <p class="">Lorem ipsum dolor sit, amet
                                                                            consectet</p>
                                                                    </div>
                                                                    <div class="dropdown-divider"></div>
                                                                    <div class="col-sm-6 justify-content-center">
                                                                        <div class="row">
                                                                            <h6 class="mb-1 fw-semi-bold">Niche</h6>
                                                                            <p class="">Landing</p>
                                                                        </div>
                                                                        <div class="row">
                                                                            <h6 class="mb-1 ">Objectifs</h6>
                                                                            <p class="">Landing</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-footer">
                                                                <button class="btn btn-primary">Add Projet</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- footer -->
                <?php include('footer.php') ?>

            </div>

        </div>
    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- page custom -->
    <?php include('page-custom.php') ?>

    <!-- script js -->
    <?php include('script.php') ?>

</body>

</html>