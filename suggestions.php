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
                                            <select id="projets" class="form-select form-select-sm" aria-label="Bulk actions">
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
                        <div class="mb-3">
                            <div class="card h-100">
                                <div class="card-header d-flex flex-between-center border-bottom border-200">
                                    <h5 class="mb-0">Objectifs</h5>
                                    <div class="dropdown font-sans-serif btn-reveal-trigger">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="crm-lead-conversion" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-lead-conversion">
                                            <a onclick="validate_selected('objectifs')" class="dropdown-item" href="#!">Valider</a>
                                            <div class="dropdown-divider"></div>
                                            <a onclick="delete_selected('objectifs')" class="dropdown-item text-danger" href="#!">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="objectifs" class="card-body p-0 overflow-hidden"></div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="card h-100">
                                <div class="card-header d-flex flex-between-center border-bottom border-200">
                                    <h5 class="mb-0">Stratégies</h5>
                                    <div class="dropdown font-sans-serif btn-reveal-trigger">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="crm-lead-conversion" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-lead-conversion">
                                            <a onclick="validate_selected('strategies')" class="dropdown-item" href="#!">Valider</a>
                                            <div class="dropdown-divider"></div>
                                            <a onclick="delete_selected('strategies')" class="dropdown-item text-danger" href="#!">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="strategies" class="card-body p-0 overflow-hidden"></div>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <div class="card h-100">
                                <div class="card-header d-flex flex-between-center border-bottom border-200">
                                    <h5 class="mb-0">Tâches à réaliser</h5>
                                    <div class="dropdown font-sans-serif btn-reveal-trigger">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="crm-lead-conversion" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-lead-conversion">
                                            <a onclick="validate_selected('taches')" class="dropdown-item" href="#!">Valider</a>
                                            <div class="dropdown-divider"></div>
                                            <a onclick="delete_selected('taches')" class="dropdown-item text-danger" href="#!">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="taches" class="card-body p-0 overflow-hidden"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="card h-100">
                                <div class="card-header d-flex flex-between-center border-bottom border-200">
                                    <h5 class="mb-0">Titre à rédiger</h5>
                                    <div class="dropdown font-sans-serif btn-reveal-trigger">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="crm-lead-conversion" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-lead-conversion">
                                            <a onclick="validate_selected('titres')" class="dropdown-item" href="#!">Valider</a>
                                            <div class="dropdown-divider"></div>
                                            <a onclick="delete_selected('titres')" class="dropdown-item text-danger" href="#!">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="titres" class="card-body p-0 overflow-hidden"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 pe-lg-2"></div>

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

        id_projet = 8

        var selected_elements = {
            objectifs: [],
            strategies: [],
            taches: [],
            titres: []
        };
                
        load_suggestions("objectifs", id_projet);
        load_suggestions("strategies", id_projet);
        load_suggestions("taches", id_projet);
        load_suggestions("titres", id_projet);

        load_projet(id_projet);
        function load_projet (id_projet) {

            // on va selectionner a ce niveau le projet qui est censé etre actif
            $.ajax({
                url: 'Projet/list.php',
                method: 'GET',
                data: {},
                dataType: 'json',
                success: function(projets) {

                    console.log(projets);                   
                    var elements_container = $('#projets');
                    var components = ""

                    if(projets.length > 0) {

                        $.each(projets, function(index, projet) {
                            components += `<option ${id_projet == projet.id ? 'selected' : ''} value="${projet.id}">${projet.nom}</option>`;
                        });
                        
                        elements_container.html(components);
                    }

                },
                error: function(xhr, status, error) {
                    console.log("Une erreur s'est produite : " + error);
                }
            });


        }

        function validate_suggestion(type_sug, id) {
            $.ajax({
                url: 'Suggestion/validate.php',
                method: 'GET',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    console.log(type_sug);
                    // affichage de la notification
                    toast(response)
                    // actualisation de la liste des suggestions
                    load_suggestions(type_sug, id_projet)
                },
                error: function(xhr, status, error) {
                    console.log("Une erreur s'est produite : " + error);
                }
            });
        }

        function validate_selected (type_sug) {

            $.ajax({
                url: 'Suggestion/validate_multiple.php',
                method: 'GET',
                data: {
                    ids: selected_elements[type_sug].join(',')
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);

                    toast(response)
                    load_suggestions(type_sug, id_projet)
                    selected_elements[type_sug] = []
                    console.log(selected_elements);

                },
                error: function(xhr, status, error) {
                    console.log("Une erreur s'est produite : " + error);
                }
            });
        }

        function delete_selected (type_sug) {

            $.ajax({
                url: 'Suggestion/delete_multiple.php',
                method: 'GET',
                data: {
                    ids: selected_elements[type_sug].join(',')
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);

                    toast(response)
                    load_suggestions(type_sug, id_projet)
                    selected_elements[type_sug] = []
                    console.log(selected_elements);

                },
                error: function(xhr, status, error) {
                    console.log("Une erreur s'est produite : " + error);
                }
            });
        }

        function delete_suggestion(type_sug, id) {
            $.ajax({
                url: 'Suggestion/delete.php',
                method: 'GET',
                data: {
                    id: id
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                    console.log(type_sug);
                    // affichage de la notification
                    toast(response)
                    // actualisation de la liste des suggestions
                    load_suggestions(type_sug, id_projet)
                },
                error: function(xhr, status, error) {
                    console.log("Une erreur s'est produite : " + error);
                }
            });
        }

        function toast (response) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'bottom-end',
                showConfirmButton: false,
                timer: 3000,
            })

            Toast.fire({
                icon: response.alert,
                title: response.alert_message
            })
        }
        
        function toggle_element(type_sug, id) {
            selected_elements[type_sug].includes(id) ? selected_elements[type_sug].splice(selected_elements[type_sug].indexOf(id), 1) : selected_elements[type_sug].push(id)
            console.log(selected_elements);
        }

        function load_suggestions (type_sug, id_projet) {

            $.ajax({
                url: 'Suggestion/get_'+type_sug+'.php',
                method: 'GET',
                data: {
                    id_projet: id_projet
                },
                dataType: 'json',
                success: function(elements) {
                    
                    var elements_container = $('#'+type_sug);
                    var components = ""

                    if(elements.length > 0) {

                        $.each(elements, function(index, element) {

                            validate_btn = `<button onclick="validate_suggestion('${type_sug}', '${element.id}')" class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm">
                                                <span class="fas fa-check text-success"></span>
                                            </button>`

                            components += `<div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-card hover-bg-100">
                                                    <div class="form-check mb-0 d-flex align-items-center">
                                                        <input onchange="toggle_element('${type_sug}', '${element.id}')" class="form-check-input rounded-3 p-2 mt-0" type="checkbox" id="objectif_${element.id}" />
                                                        <label class="form-check-label mb-0 p-3" for="${type_sug}_${element.id}">${element.contenu}</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="hover-actions">
                                                            <button onclick="delete_suggestion('${type_sug}', '${element.id}')" class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm">
                                                                <span class="fas fa-trash text-danger"></span>
                                                            </button>
                                                            ${!element.etat ? validate_btn : ''}
                                                        </div>
                                                    </div>
                                                </div>`;

                        });
                        
                        elements_container.html(components);
                    }
                    else {
                        elements_container.html('<div class="mt-3"><p>Aucune suggestion de strategie pour le moment</p></div>');
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Une erreur s'est produite : " + error);
                }
            });

        }

    </script>

</body>

</html>