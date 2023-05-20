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
                                        <h6 class="text-primary fs--1 mb-0">Gestion de </h6>
                                        <h4 class="text-primary fw-bold mb-0">Stratégie et <span
                                                class="text-info fw-medium">marketing</span></h4>
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
                            <div class="card h-100" id="table" data-list='{"valueNames":["path","views","time","exitRate"],"page":8,"pagination":true,"fallback":"pages-table-fallback"}'>
                                <div class="card-header">
                                    <div class="row flex-between-center">
                                        <div class="col-auto col-sm-6 col-lg-7">
                                            <h5 class="mb-0">Historique</h5>
                                        </div>
                                        <div class="col-auto col-sm-6 col-lg-5">
                                            <div class="h-100">
                                                <form>
                                                <div class="input-group">
                                                    <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search for a page" aria-label="search" />
                                                    <div class="input-group-text bg-transparent"><span class="fa fa-search fs--1 text-600"></span></div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body px-0 py-0 container">
                                    <div class="table-responsive scrollbar">
                                        <table class="table fs--1 mb-0 overflow-hidden ">
                                        <thead class="bg-200 text-900">
                                            <tr>
                                            <th class="sort pe-1 align-middle white-space-nowrap" >Titre</th>
                                            <th class="sort pe-1 align-middle white-space-nowrap " data-sort="views">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list" >
                                            <tr class="btn-reveal-trigger" id="strategies">
                                                
                                            </tr>
                                        </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center d-none" id="pages-table-fallback">
                                        <p class="fw-bold fs-1 mt-3">No Page found</p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row align-items-center">
                                        <div class="pagination d-none"></div>
                                            <div class="col">
                                                <p class="mb-0 fs--1"><span class="d-none d-sm-inline-block me-2" data-list-info="data-list-info"></span></p>
                                            </div>
                                            <div class="col-auto d-flex">
                                                <button class="btn btn-sm btn-primary" type="button" data-list-pagination="prev"><span>Previous</span></button>
                                                <button class="btn btn-sm btn-primary px-4 ms-2" type="button" data-list-pagination="next"><span>Next</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- MODAL  -->
                            <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl mt-6" role="document">
                                    <div class="modal-content border-0">
                                    <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
                                        <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-0">
                                        <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                                        <h4 class="mb-1" id="staticBackdropLabel">Détails de la stratégie :</h4>
                                        <p class="fs--2 mb-0">Added by <a class="link-600 fw-semi-bold" href="#!">Antony</a></p>
                                        </div>
                                        <div class="p-4">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i></span>
                                                    <div class="flex-1">
                                                        <h5 class="mb-2 fs-0">Description</h5>
                                                        <p class="text-word-break fs--1">The illustration must match to the contrast of the theme. The illustraion must described the concept of the design. To know more about the theme visit the page. </p>
                                                    </div>
                                                </div>
                                            <div class="d-flex ">
                                                <div class="flex-1">
                                                    <textarea id="zone-texte" class="form-control" style="display:none;">Texte initial</textarea>
                                                </div>
                                            </div>
                                            <hr class="my-4" />
                                            <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-tag" data-fa-transform="shrink-2"></i></span>
                                                <div class="flex-1">
                                                <h5 class="mb-2 fs-0">Actions</h5>
                                                <div class="d-flex">
                                                    <span class="badge me-1 py-2 badge-soft-warning" id="modifier-texte" type="button">Modifier</span>
                                                    <span class="badge me-1 py-2 badge-soft-primary" type="button">Optimiser</span>
                                                    <span class="badge me-1 py-2 badge-soft-danger" type="button">Supprimer</span>
                                                </div>
                                                <hr class="my-4" />
                                                </div>
                                            </div>
                                            </div>

                                            <script>
                                                // Récupération du bouton et du textarea
                                                const boutonModifier = document.getElementById("modifier-texte");
                                                const zoneTexte = document.getElementById("zone-texte");

                                                // Ajout d'un écouteur d'événement au clic sur le bouton
                                                boutonModifier.addEventListener("click", () => {
                                                    // Affichage du textarea
                                                    zoneTexte.style.display = "block";
                                                });
                                            </script>

                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4 ps-lg-2">
                        <!-- <div class="sticky-sidebar">
                            <div class="card mb-3 overflow-hidden">
                                <div class="card-header">
                                    <h5 class="mb-0">Prompt</h5>
                                </div>
                                <div class="card-body bg-light">
                                    <form>
                                        <div class="mb-3">
                                            <input class="form-control" id="old-password" type="password"
                                                placeholder="Entre votre requête ici" />
                                        </div>
                                        <a class="btn btn-falcon-primary btn-sm" href="#!">Lancer</a>
                                    </form>
                                </div>
                            </div> -->

                            <!-- <div class="card mb-3 overflow-hidden">
                                <div class="card-header">
                                    <h5 class="mb-0">Ressources</h5>
                                </div>
                                <div class="card-body bg-light border-top">
                                    <p class="fs-0">Une petite première</p>
                                    <hr>
                                    <p class="fs-0">Bon voilà la ressource de guerre</p>
                                    <hr>
                                    <p class="fs-0">C'est plutôt bien</p>
                                </div>
                            </div> -->

                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="mb-0">Suggestions de Feed ai</h5>
                                </div>
                                <div class="card-body bg-light">
                                    <h5 class="fs-0">Ceci est un exemple de suggestion</h5>
                                    <p class="fs--1">Transfer this account to another user or to an organization where
                                        you have the ability to create repositories.</p><a
                                        class="btn btn-falcon-warning d-block" href="#!">Utiliser</a>
                                    <div class="border-dashed-bottom my-4"></div>
                                    <h5 class="fs-0">Bon encore une autre</h5>
                                    <p class="fs--1">Once you delete a account, there is no going back. Please be
                                        certain.</p><a class="btn btn-falcon-warning d-block" href="#!">Utiliser</a>
                                </div>
                            </div>

                            <!-- <div class="card mb-3 overflow-hidden">
                                <div class="card-header">
                                    <h5 class="mb-0">Titre à rediger</h5>
                                </div>
                                <div class="card-body bg-light border-top">
                                    <p class="fs-0">Un premier titre.</p>
                                    <hr>
                                    <p class="fs-0">Un deuxième titre.</p>
                                    <hr>
                                    <p class="fs-0">Un troisième rapport.</p>
                                </div>
                            </div> -->

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
    <script>
    
            function listStrategy(projet_id){
                 //on fait une requete ajax, pour récupérer une liste des historiques à la base de données
                $.ajax({
                    url: 'strategie/liste.php',
                    method: 'POST', 
                    data: { id: projet_id }, 
                    success: function(response) {
                        // $('#result').html(response);
                        var strategies = JSON.parse(response);
                        console.log(strategies.length);
    
                        var html = '';
                        for (var i = 0; i < strategies.length; i++) {
                            html += '<td class="align-middle white-space-nowrap path" >' + strategies[i].title + '</td>'+
                                '<td class="align-middle white-space-nowrap views" >'+
                                '<button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm btn-update" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">'+
                                '<span class="fas fa-edit text-warning"></span></button>'+'<button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm btn-supprimer"><span class="fas fa-trash text-danger"></span></button></td>';
                        }

                        $('#strategies').html(html);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error(textStatus, errorThrown);
                    }
                });
            }
    
            $(document).ready(function() {
                // Appel de la fonction listHistorics() après le chargement complet de la page
                var projet_id = 2 ;
                listStrategy(projet_id);
            });
    
            
        </script>
</body>

</html>