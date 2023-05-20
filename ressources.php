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

                
                <div class="row g-0">
                    <div class="col-lg-8 pe-lg-2">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="mb-0">Ressources du projet : ####
                                </h5>
                            </div>
                            <div class="card-body bg-light">          
                                <div id="tableExample2" data-list='{"valueNames":["name","email","age"],"page":5,"pagination":true}'>
                                    <div class="table-responsive scrollbar">
                                        <table class="table table-bordered table-striped fs--1 mb-0">
                                        <tbody class="list">
                                            <tr>
                                                <td class="name">Une premire fois</td>
                                                <td class="age">
                                                    <button class="btn btn-warning btn-sm" type="button">
                                                    <span class="fas fa-edit" data-fa-transform="shrink-3"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="name">Une premire fois</td>
                                                <td class="age">
                                                    <button class="btn btn-warning btn-sm" type="button">
                                                    <span class="fas fa-edit" data-fa-transform="shrink-3"></span>
                                                    </button>
                                                </td>
                                            </tr>
                                           
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center mt-3">
                                        <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                                        <ul class="pagination mb-0"></ul>
                                        <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"> </span></button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ">
                                <div class="col-auto">
                                    <form class="row gx-2">
                                        <div class="col-auto"><small>Mes projets : </small></div>
                                            <div class="col-auto">
                                            <select class="form-select form-select-sm" aria-label="Bulk actions">
                                                <option selected="">Projet 2023</option>
                                                <option value="Refund">Projet 2025</option>
                                                <option value="Delete">Projet 2027</option>
                                            </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                     </div>
                             
                    <div class="col-lg-4 ps-lg-2">
                        <div class="sticky-sidebar">
                            <div class="card mb-3 overflow-hidden">
                                <div class="card-header">
                                    <h5 class="mb-0">Prompt</h5>
                                </div>
                                <div class="card-body bg-light">
                                    <form>
                                        <div class="mb-3">
                                            <!-- <label class="form-label" for="old-password">Votre requête</label> -->
                                            <input class="form-control" id="old-password" type="password" placeholder="Entre votre requête ici" />
                                        </div>
                                        <a class="btn btn-falcon-primary btn-sm" href="#!">Lancer</a>
                                    </form>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="mb-0">Ajouter une ressource</h5>
                                </div>
                                <div class="card-body bg-light">
                                    <form>
                                        <div class="mb-3">
                                            <!-- <label class="form-label" for="old-password">Votre requête</label> -->
                                            <input class="form-control" id="old-password" type="password" placeholder="Entre la ressource ici" />
                                        </div>
                                        <a class="btn btn-falcon-primary btn-sm" href="#!">Ajouter</a>
                                    </form>

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