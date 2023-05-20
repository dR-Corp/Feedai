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

                <div class="row mb-3"></div>

                <div class="row mb-3">
                    <div class="col">
                        <div class="card bg-100 shadow-none border">
                            <div class="row gx-0 flex-between-center">
                                <div class="col-sm-auto d-flex align-items-center"><img class="ms-n2"
                                        src="assets/img/illustrations/crm-bar-chart.png" alt="" width="90" />
                                    <div>
                                        <h6 class="text-primary fs--1 mb-0">Centre de </h6>
                                        <h4 class="text-primary fw-bold mb-0">Suggestion <span
                                                class="text-info fw-medium">ia</span></h4>
                                    </div><img class="ms-n4 d-md-none d-lg-block"
                                        src="assets/img/illustrations/crm-line-chart.png" alt="" width="150" />
                                </div>
                                <div class="col-md-auto p-3">
                                    <form class="row gx-2">
                                        <div class="col-auto"><small>Projets : </small></div>
                                        <div class="col-auto">
                                            <select class="form-select form-select-sm" aria-label="Bulk actions">
                                                <option selected="">Projet 2023</option>
                                                <option value="Refund">Projet 2025</option>
                                                <option value="Delete">Projet 2027</option>
                                            </select>
                                        </div>
                                        <!-- </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-0">
                    <div class="col-lg-8 pe-lg-2">
                        
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="mb-0">Objectifs</h5>
                            </div>
                            <div class="card-body bg-light">

                                <div class="d-flex">
                                    <div class="flex-1 position-relative ps-3">
                                        <ul>
                                            <li><h6 class="fs-0 mb-2">Big Data Engineer</h6></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="mb-0">Taches à réaliser</h5>
                            </div>
                            <div class="card-body bg-light">

                                <div class="d-flex">
                                    <div class="flex-1 position-relative ps-3">
                                        <ul>
                                            <li><h6 class="fs-0 mb-2">Big Data Engineer</h6></li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="mb-0">Stratégie marketings</h5>
                            </div>
                            <div class="card-body bg-light">

                                <div class="d-flex">
                                    <div class="flex-1 position-relative ps-3">
                                        <ul>
                                            <li><h6 class="fs-0 mb-2">Big Data Engineer</h6></li>
                                        </ul>
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