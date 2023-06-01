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
                                        <h6 class="text-primary fs--1 mb-0">Gestion des </h6>
                                        <h4 class="text-primary fw-bold mb-0">Requetes à <span
                                                class="text-info fw-medium">gpt</span></h4>
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
                            
                            <div id="requests_card" class="card h-100 mb-3">
                                <div class="card-header d-flex flex-between-center border-bottom border-200">
                                    <h5 class="mb-0">Listes</h5>
                                    <div class="dropdown font-sans-serif btn-reveal-trigger">
                                        <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="crm-lead-conversion" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-ellipsis-h fa-w-16 fs--2" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis-h" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M328 256c0 39.8-32.2 72-72 72s-72-32.2-72-72 32.2-72 72-72 72 32.2 72 72zm104-72c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72zm-352 0c-39.8 0-72 32.2-72 72s32.2 72 72 72 72-32.2 72-72-32.2-72-72-72z"></path></svg><!-- <span class="fas fa-ellipsis-h fs--2"></span> Font Awesome fontawesome.com --></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="crm-lead-conversion">
                                            <a onclick="validate_selected()" class="dropdown-item" href="#!">Valider</a>
                                            <div class="dropdown-divider"></div>
                                            <a onclick="delete_selected()" class="dropdown-item text-danger" href="#!">Supprimer</a>
                                        </div>
                                    </div>
                                </div>
                                <div id="requetes" class="card-body p-0 overflow-hidden"></div>
                            </div>

                            <div id="edition_card" class="card h-100 mb-3">
                                <div class="card-header d-flex flex-between-center border-bottom border-200">
                                    <h5 class="mb-0">Nom de la requete</h5>
                                    <div class="dropdown font-sans-serif btn-reveal-trigger">
                                        <a href="#!" class="btn btn-link btn-sm"><span class="fas fa-chevron-left fs--2"></span> Requêtes</a>
                                    </div>
                                </div>
                                <div id="edition" class="card-body p-0 overflow-hidden">

                                    <div class="p-3">

                                        <!-- <textarea name="" id="edtition_textarea" cols="30" rows="10" class="form-control"></textarea> -->
                                        
                                        <div class="dropdown font-sans-serif d-inline-block mb-2">
                                            <div id="dropdownMenuContent" class="dropdown-menu dropdown-menu-start py-0" aria-labelledby="">
                                                <a class="dropdown-item" href="#!">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                            </div>
                                        </div>
                                        
                                        <div id="edition_textarea" class="custom-textarea form-control" contenteditable="true"></div>

                                    </div>

                                </div>
                            </div>

                        </div>

                        <style>
                            .custom-textarea:focus {
                                outline: none;
                            }

                            .form-control:focus {
                                outline: none;
                                box-shadow: none;
                            }

                            .custom-textarea {
                                min-height: 40vh;
                                /* white-space: pre-wrap; */
                                overflow-wrap: break-word; /* or word-wrap: break-word; */
                                overflow-x: auto;                                
                            }
                        </style>

                        <script>
                            $(document).ready(function() {

                                $("#edition_textarea").on("contextmenu", function(e) {
                                    e.preventDefault(); // Prevent the default right-click context menu

                                    var dropdownMenu = $("#dropdownMenuContent");
                                    dropdownMenu.css({ top: e.pageY - $(this).offset().top, left: e.pageX - $(this).offset().left });
                                    dropdownMenu.show();
                                });

                                $(document).on("click", function() {
                                    $("#dropdownMenuContent").hide();
                                });

                                $("#edition_textarea").on("input", function(e) {
                                    // e.preventDefault(); // Prevent the default right-click context menu
                                    if(e.originalEvent.data == "/") {
                                        console.log(e.originalEvent);
                                        var dropdownMenu = $("#dropdownMenuContent");
                                        // dropdownMenu.css({ top: e.clientHeight - $(this).offset().top, left: e.clientHeight - $(this).offset().left });
                                        dropdownMenu.css({ top: e.clientHeight - $(this).offsetTop, left: e.clientWidth - $(this).offsetLeft });
                                        dropdownMenu.show();
                                    }
                                    
                                });
                                
                                $(document).on('keyup', function(e) {
                                    // console.log(e.key);
                                    if(e.key == "Escape") {
                                        $("#dropdownMenuContent").hide();
                                    }
                                })

                                var textarea = document.getElementById("edition_textarea");

                                textarea.addEventListener("input", function(event) {
                                    var caretPosition = getCaretPosition(event.clientX, event.clientY, textarea);
                                    console.log("Position X :", caretPosition.x);
                                    console.log("Position Y :", caretPosition.y);
                                });

                                function getCaretPosition(clientX, clientY, element) {
                                    var range = document.caretRangeFromPoint(clientX, clientY);
                                    var rect = range.getBoundingClientRect();
                                    var caretPosition = {
                                        x: rect.left + window.pageXOffset,
                                        y: rect.top + window.pageYOffset
                                    };
                                    return caretPosition;
                                }

                            });
                        </script>
                        
                    </div>
                    <div class="col-lg-4 pe-lg-2">
                        <div class="card h-100 mb-3">
                            
                            <div class="card-body p-4 oberflow-hidden">
                                <ul class="treeview" id="treeviewExample">
                                    
                                    <!-- tables listes -->
                                    <li class="treeview-list-item">
                                        <div class="treeview-item">
                                            <a class="flex-1" href="#!">
                                                <p class="treeview-text"><span class="me-2 fas fa-database "></span> package.json</p>
                                            </a>
                                        </div>
                                    </li>

                                    <!-- table columns listes -->
                                    <li class="treeview-list-item">
                                        <a data-bs-toggle="collapse" href="#treeviewExample-1-1" role="button" aria-expanded="false">
                                            <p class="treeview-text">table</p>
                                        </a>
                                        <ul class="collapse treeview-list" id="treeviewExample-1-1" data-show="false">
                                            <li class="treeview-list-item">
                                                <div class="treeview-item">
                                                    <a class="flex-1" href="#!">
                                                        <p class="treeview-text"><span class="me-2 fas fa-columns"></span> column</p>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    
                                </ul>
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

        var requetes = [];
        
        load_requests_list();
        
        function load_requests_list () {

            $.ajax({
                url: 'Request/list.json',
                method: 'GET',
                data: {},
                dataType: 'json',
                success: function(requests) {
                    
                    var requests_container = $('#requetes');
                    var components = ""

                    if(requests.length > 0) {

                        $.each(requests, function(index, element) {

                            validate_btn = `<button onclick="validate_request('${element.id}')" class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm">
                                                <span class="fas fa-check text-success"></span>
                                            </button>`
                            invalidate_btn = `<button onclick="invalidate_request('${element.id}')" class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm">
                                                <span class="fas fa-times text-warning"></span>
                                            </button>`

                            components += `<div class="d-flex justify-content-between hover-actions-trigger btn-reveal-trigger px-card hover-bg-100">
                                                    <div class="form-check mb-0 d-flex align-items-center">
                                                        <input onchange="toggle_element('${element.id}')" class="form-check-input rounded-3 p-2 mt-0" type="checkbox" id="objectif_${element.id}" />
                                                        <label class="form-check-label mb-0 p-3" for="request_${element.id}">${element.name}</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="hover-actions">
                                                            ${!element.status ? validate_btn : invalidate_btn}
                                                            <button onclick="edit_request('${element.id}')" class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm">
                                                                <span class="fas fa-edit text-primary"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>`;

                        });
                        
                        requests_container.html(components);
                    }
                    else {
                        requests_container.html('<div class="mt-3"><p>Aucune suggestion de strategie pour le moment</p></div>');
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Une erreur s'est produite : " + error);
                }
            });

        }

        // load_projet(id_projet);
        // function load_projet (id_projet) {

        //     // on va selectionner a ce niveau le projet qui est censé etre actif
        //     $.ajax({
        //         url: 'Projet/list.php',
        //         method: 'GET',
        //         data: {},
        //         dataType: 'json',
        //         success: function(projets) {

        //             console.log(projets);                   
        //             var elements_container = $('#projets');
        //             var components = ""

        //             if(projets.length > 0) {

        //                 $.each(projets, function(index, projet) {
        //                     components += `<option ${id_projet == projet.id ? 'selected' : ''} value="${projet.id}">${projet.nom}</option>`;
        //                 });
                        
        //                 elements_container.html(components);
        //             }

        //         },
        //         error: function(xhr, status, error) {
        //             console.log("Une erreur s'est produite : " + error);
        //         }
        //     });


        // }

        function toggle_element(id) {

        }

        function validate_request(id) {

        }

        function invalidate_request(id) {
            
        }

    </script>

</body>

</html>