<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<!-- head -->
<?php include('head.php') ?>

<body>

    <div id="action-loader" class="text-center h-100 w-100" style="padding-top: 40vh; position: fixed; z-index: 99999; top: 0; left: 0; background-color: rgba(0,0,0,0.25);">
        <div class="lottie mx-auto" style="width: 100px; height: 100px" data-options='{"path":"assets/img/animated-icons/loading-square.json"}'></div>
    </div>

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

                    <div class="card bg-100 shadow-none border">
                        <div class="row gx-0 flex-between-center">
                            <div class="col-sm-auto d-flex align-items-center"><img class="ms-n2"
                                    src="assets/img/illustrations/crm-bar-chart.png" alt="" width="90" />
                                <div>
                                    <h6 class="text-primary fs--1 mb-0">Gestion de mes</h6>
                                    <h4 class="text-primary fw-bold mb-0">Projets <span
                                            class="text-info fw-medium">Projets </span></h4>
                                </div><img class="ms-n4 d-md-none d-lg-block"
                                    src="assets/img/illustrations/crm-line-chart.png" alt="" width="150" />
                            </div>
                            <div class="col-sm-auto px-3">
                                <div class="row gx-2 align-items-center">
                                    <div class="col-auto pe-0"><a class="text-600 px-1" href="kanban.php" data-bs-toggle="tooltip" title="Kanban"><span class="nav-link-icon"><span class="fab fa-trello"></span></a></div>
                                    <div class="col-auto pe-0"><a class="text-600 px-1" href="add-projet.php" title="Créer un projet"><span class="fas fa-project-diagram"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                        include('db_connexion.php');
                        $sql = 'SELECT * FROM projets';
                        $stmt = $db->query($sql);
                        $projets = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    ?>

                    <div class="card" id="TableCrmRecentLeads" data-list='{"valueNames":["name","email","status"],"page":8,"pagination":true}'>
                        <div class="card-header d-flex flex-between-center py-2">
                        <h6 class="mb-0">Les derniers projets</h6>
                        <div class="dropdown font-sans-serif btn-reveal-trigger">
                            <button class="btn btn-link text-600 btn-sm dropdown-toggle dropdown-caret-none btn-reveal" type="button" id="recent-leads-header-dropdownundefined" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                            <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="recent-leads-header-dropdownundefined"><a class="dropdown-item" href="#!">Afficher</a><a class="dropdown-item" href="#!">Activer</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Supprimer</a>
                            </div>
                        </div>
                        </div>
                        <div class="card-body px-0 py-0">
                        <div class="table-responsive scrollbar">
                            <table class="table fs--1 mb-0">
                            <thead class="bg-200 text-800">
                                <tr>
                                    <th hidden class="sort align-middle" data-sort="id">id</th>
                                    <th class="py-3 white-space-nowrap" style="max-width: 30px;">
                                        <div class="form-check mb-0 d-flex align-items-center">
                                        <input class="form-check-input" id="checkbox-bulk-leads-select" type="checkbox" data-bulk-select='{"body":"table-recent-leads-body","actions":"table-recent-leads-actions","replacedElement":"table-recent-leads-replace-element"}' />
                                        </div>
                                    </th>
                                    <th class="sort align-middle" data-sort="nom">Nom</th>
                                    <th class="sort align-middle" data-sort="type">Type</th>
                                    <th class="sort align-middle" data-sort="progression">Progression</th>
                                    <th class="sort align-middle" data-sort="etat">Etat</th>
                                    <th class="sort align-middle text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="table-recent-leads-body">
                                
                                <?php foreach($projets as $projet): ?>
                                <tr class="hover-actions-trigger btn-reveal-trigger hover-bg-100">
                                    <td hidden class="align-middle white-space-nowrap"><?= $projet['id'] ?></td>
                                    <td class="align-middle" style="max-width: 30px;">
                                        <div class="form-check mb-0">
                                        <input class="form-check-input" type="checkbox" id="recent-leads-0" data-bulk-select-row="data-bulk-select-row" />
                                        </div>
                                    </td>
                                    <td class="align-middle white-space-nowrap">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar avatar-s">
                                                <img class="rounded" src="assets\img\icons\docs.png" alt="" />
                                            </div>
                                            <h6 class="mb-0 ps-2 text-800 name"><?= $projet['nom'] ?></h6>
                                        </div>
                                    </td>

                                    <td class="align-middle white-space-nowrap">
                                        <h6 class="mb-0 text-800 name"><?= $projet['type'] ?></h6>
                                    </td>

                                    <td class="align-middle white-space-nowrap">
                                        <?php if($projet['progression'] == NULL || $projet['progression'] == "" || $projet['progression'] == 0): ?>
                                        <small class="badge fw-semi-bold rounded-pill status badge-soft-secondary">EN ATTENTE</small>
                                        <?php endif; ?>
                                    </td>

                                    <td class="align-middle white-space-nowrap">
                                        <?php if($projet['etat'] == NULL || $projet['etat'] == "" || $projet['etat'] == 0): ?>
                                        <small class="badge fw-semi-bold rounded-pill status badge-soft-secondary">INACTIF</small>
                                        <?php else: ?>
                                        <small class="badge fw-semi-bold rounded-pill status badge-soft-success">ACTIF</small>
                                        <?php endif; ?>
                                    </td>

                                    <td class="align-middle white-space-nowrap text-end position-relative">
                                        <div class="hover-actions bg-100">
                                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm btn-supprimer">
                                            <span class="fas fa-trash text-danger"></span>
                                        </button>
                                        <?php if(!$projet['etat']): ?>
                                            <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm btn-activer">
                                                <span class="fas fa-check text-success"></span>
                                            </button>
                                        <?php endif; ?>
                                        </div>
                                        <a href="details-projet.php?id=<?= $projet['id'] ?>" class="btn btn-link text-600 btn-sm btn-reveal-sm transition-none"><span class="fas fa-folder-open text-primary"></span></a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                
                            </tbody>
                            </table>
                                                        
                        </div>
                        </div>
                        <div class="card-footer bg-light p-0">
                        <div class="pagination d-none"></div><a class="btn btn-sm btn-link d-block py-2" href="#!">Afficher la liste complète<span class="fas fa-chevron-right ms-1 fs--2"></span></a>
                        </div>
                    </div>
                    
                </div>

                <div class="modal fade" id="modal-active-projet" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg mt-6" role="document">
                        <div class="modal-content border-0">
                            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
                                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                                    <h4 class="mb-1" id="modalListNicheLabel">Activation du projet</h4>
                                </div>
                                <div class="p-4">

                                    <div class="row">
                                        
                                        <div id="page-1">
                                            <div class="mb-3">
                                                <label class="form-label" for="besoin_satisfaits">Besoins principaux satisfaits par votre produit</label>
                                                <div id="besoin_satisfaits">
                                                    <div class="placeholder-glow">
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="motivation_produit">Motivations pour utiliser le produit</label>
                                                <div id="motivation_produit">
                                                    <div class="placeholder-glow">
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="positionnement">Positionnement</label>
                                                <div id="positionnement">
                                                    <div class="placeholder-glow">
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                        <a href="#" tabindex="-1" class="btn disabled placeholder col-12 mb-2" aria-hidden="true"></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="d-flex mt-3 justify-content-end">
                                                <button type="button" onclick="voir_profil(event)" id="btn-voir-profild" class="btn btn-sm btn-primary">Suivant <i class="far fa-arrow-alt-circle-right"></i></button>
                                            </div>
                                            
                                        </div>
                                        
                                        <div id="page-2">
                                            <div class="mb-3">
                                                <label class="form-label" for="concept">Profils</label>
                                                <div >
                                                    <div id="profils" class="row g-0 text-center fs--1">
                                                        
                                                        <?php for($i = 0; $i < 9; $i++): ?>
                                                        <div class="col-6 col-md-4">
                                                            <div class="bg-white dark__bg-1100 p-3 border placeholder-glow">
                                                                <div class="card-img-top w-100"><span style="height: 250px;" class="placeholder placeholder w-100"></span></div>
                                                            </div>
                                                        </div>
                                                        <?php endfor; ?>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="mt-2">
                                                    <button type="button" onclick="quitter_profil(event)" id="btn-voir-profild" class="btn btn-sm btn-primary"><i class="far fa-arrow-alt-circle-left"></i> Précédent</button>
                                                </div>
                                                <div class="mt-2">
                                                    <button type="button" onclick="activer_projet(event)" id="btn-activer-proj" class="btn btn-sm btn-primary"><i id="form-activer-loader" class="fas fa-spinner fa-spin"></i> Activer</button>
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

    <script>
        
        var profils = ""
        var positionnnements = ""
        var motivations = ""
        var besoins = ""
        var results = [];
        var currentID = "";
                                        
        $('.btn-activer').on('click', function() {

            setLoader($('body'), 'Chargement');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            currentID = data[0];
            
            $.ajax({ //requete pour récupérer les détails du projet à partir du current ID
                type: "POST",
                url: "Projet/detail.php",
                data: {id: currentID},
                success: async function(response) {

                    projet = JSON.parse(response)
                    
                    console.log(projet);
                    
                    const prompts = [
                        `Voici les informations suivantes sur un projet e-commerce : ${projet}.
                            En les utilisants génère moi des suggestions de besoins principaux satisfaits par le ou les produit mise en jeu dans ce projet e-commerce ! !
                            Veuillez renvoyer le résultat sous forme d'un objet JSON contenant les quatre catégories de résultats, avec une structure similaire à celle-ci : 
                            [{"id": 1, "besoin": ""}, ...]
                            Assurez-vous que le résultat peut être analysé par JSON.parse() sans erreur.`,
                        `Voici les informations suivantes sur un projet e-commerce : ${projet}.
                            En les utilisants génère moi des suggestions de motivations pour utiliser le ou les produit mise en jeu dans ce projet e-commerce !
                            Veuillez renvoyer le résultat sous forme d'un objet JSON contenant les quatre catégories de résultats, avec une structure similaire à celle-ci : 
                            [{"id": 1, "motivation": ""}, ...],
                            Assurez-vous que le résultat peut être analysé par JSON.parse() sans erreur.`,
                        `Voici les informations suivantes sur un projet e-commerce : ${projet}.
                            En les utilisants génère moi des suggestions de positionnements devrant permettre l\'atteinte des objectifs de ce projet !
                            Veuillez renvoyer le résultat sous forme d'un objet JSON contenant les quatre catégories de résultats, avec une structure similaire à celle-ci :
                            [{"id": 1, "positionnement": ""}, ...]
                            Assurez-vous que le résultat peut être analysé par JSON.parse() sans erreur.`,
                        `Voici les informations suivantes sur un projet e-commerce : ${projet}.
                            En les utilisants, génère moi des suggestions des profils fictifs pouvant représenter un potentiel client pour notre projet en vue d\'atteindre notre objectif !
                            Vous indiquerez un nom, un age dans la tranche spécifiée pour le projet, le genre en tenant compte du genre spécifié pour le projet et le profil même en question.
                            Veuillez renvoyer le résultat sous forme d'un objet JSON contenant les quatre catégories de résultats, avec une structure similaire à celle-ci :
                            [{"id": 1, "nom": "", "genre": "", "age": "", "profil": ""}, ..., {"id": 9, "nom": "", "genre": "", "age": "", "profil": ""}]
                            Assurez-vous que le résultat peut être analysé par JSON.parse() sans erreur.`
                    ];

                    let num = 0;
                    for (const prompt of prompts) {
                        const data = await send_request(prompt)

                        if(num == 0) {//-----------------------------------------------Besoins----------------------------------------------
                            unSetLoader();
                            $('#modal-active-projet').modal('show')
                            // $("#btn-voir-profild").hide()
                            $("#page-2").hide()
                            $('#form-activer-loader').hide()
                            $('#btn-activer-proj').hide()
                            
                            
                            besoins = data
                            besoins_element = ""
                            for (var i = 0; i < besoins.length; i++) {
                                besoins[i].choosed = false
                                besoins_element += '<div id="besoin_'+i+'" class="card h-lg-100 mb-2 besoin">'+
                                                '<div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div>'+
                                                '<div class="card-body position-relative d-flex py-2 align-items-center">'+
                                                    '<input onchange="toggleBesoin(event, '+i+')" class="form-check-input p-2" id="check_besoin_'+i+'" type="checkbox" value="" />'+
                                                    '<p class="fs--1 mb-0 px-3 mt-1">'+besoins[i].besoin+'</p>'+
                                                '</div>'+
                                            '</div>';
                            }
                            $('#besoin_satisfaits').html(besoins_element).hide().fadeIn(1000)
                        }
                        else if(num == 1) {
                            motivations = data
                            motivations_element = ""
                            for (var i = 0; i < motivations.length; i++) {
                                motivations[i].choosed = false
                                motivations_element += '<div id="motivation_'+i+'" class="card h-lg-100 mb-2 motivation">'+
                                                '<div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div>'+
                                                '<div class="card-body position-relative d-flex py-2 align-items-center">'+
                                                    '<input onchange="toggleMotivation(event, '+i+')" class="form-check-input p-2" id="check_motivation_'+i+'" type="checkbox" value="" />'+
                                                    '<p class="fs--1 mb-0 px-3 mt-1">'+motivations[i].motivation+'</p>'+
                                                '</div>'+
                                            '</div>'

                            }
                            $('#motivation_produit').html(motivations_element).fadeIn()
                        }
                        else if (num == 2) {
                            positionnements = data
                            positionnements_element = ""
                            for (var i = 0; i < positionnements.length; i++) {
                                positionnements[i].choosed = false
                                positionnements_element += '<div id="positionnement_'+i+'" class="card h-lg-100 mb-2 positionnement">'+
                                                            '<div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div>'+
                                                            '<div class="card-body position-relative d-flex py-2 align-items-center">'+
                                                                '<input onchange="togglePositionnement(event, '+i+')" class="form-check-input p-2" id="check_positionnement_'+i+'" type="checkbox" value="" />'+
                                                                '<p class="fs--1 mb-0 px-3 mt-1">'+positionnements[i].positionnement+'</p>'+
                                                            '</div>'+
                                                        '</div>'

                            }
                            $('#positionnement').html(positionnements_element).fadeIn()
                            // $('#btn-voir-profild').fadeIn(500)

                        }
                        else if(num == 3) {
                            profils = data
                            profils_element = ""
                            for (var i = 0; i < profils.length; i++) {
                                
                                profils[i].choosed = false

                                sexe = profils[i].genre == 'Masculin' ? 'male' : 'female';
                                profils_element += '<div id="profil_'+i+'" class="col-6 col-md-4">'+
                                                        '<div class="bg-white dark__bg-1100 p-3 h-100 border">'+
                                                            '<div>'+
                                                                '<img class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm" src="assets/img/team/'+sexe+'.png" alt="" width="100" />'+
                                                            '</div>'+
                                                            '<h6 class="mb-1">'+
                                                                '<span>'+profils[i].nom+' : '+profils[i].age+' ans</span>'+
                                                            '</h6>'+
                                                            '<p class="fs--2 mb-1">'+
                                                                '<span class="text-700">'+profils[i].profil+'</span>'+
                                                            '</p>'+
                                                            '<button onclick="toggleProfil(event, '+i+')" class="btn btn-success btn-sm mt-2 text-sm">Choisir</button>'+
                                                        '</div>'+
                                                    '</div>';

                            }
                            $('#profils').html(profils_element).fadeIn()
                            
                            $('#form-activer-loader').hide()
                            $('#btn-activer-proj').show()
                        }

                        console.log(data);
                        results.push(data);
                        num++;

                    }
                    
                    console.log(results);
                    
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus, errorThrown);
                }

            })

        })

        $('.btn-supprimer').on('click', function() {
            
            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            currentID = data[0];

            if(confirm('Voulez vous vraiment supprimer ce projet ?')) {
                //lancer la requête ajax pour faire la suppression de projet
                $.ajax({
                    type: "POST",
                    url: "Projet/supprimer.php",
                    data: { id: currentID },
                    success: function(response) {
                        // console.log(response);   
                        alert(response)
                        window.location.replace("list-projet.php");
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.error(textStatus, errorThrown);
                    }
                });

            }

        })

        async function send_request(prompt) {
            const apiResponse = await fetch('https://api.openai.com/v1/engines/text-davinci-003/completions', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer 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'
                },
                body: JSON.stringify({
                    prompt: prompt,
                    max_tokens: 2048,
                    temperature: 0.5
                })
            });

            const jsonResponse = await apiResponse.json();
            response = jsonResponse.choices[0].text.trim().replace(/(\r\n|\n|\r)/gm, "")
            return JSON.parse(response)
        }

        async function send_request_2(prompt) {
            const apiResponse = await fetch('https://api.openai.com/v1/engines/text-davinci-003/completions', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer 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'
                },
                body: JSON.stringify({
                    prompt: prompt,
                    max_tokens: 1024,
                    temperature: 0.5
                })
            });

            const jsonResponse = await apiResponse.json();
            response = jsonResponse.choices[0].text.trim().replace(/(\r\n|\n|\r)/gm, "")
            return response
        }
        function quitter_profil() {
            $("#page-2").fadeOut(500)
            $("#page-1").fadeIn(1000)
        }

        function voir_profil() {
            $("#page-1").fadeOut(500)
            $("#page-2").fadeIn(1000)
        }
        
        function toggleProfil(event, i) {

            profils[i].choosed = !profils[i].choosed;
            console.log(profils[i].choosed);

            $elm = $(event.target)
            $elm.toggleClass("btn-success btn-danger");
            $elm.html(($elm.html() == "Choisir") ? "Retirer" : "Choisir");
                
        }

        function togglePositionnement(event, i) {
            positionnements[i].choosed = event.target.checked;
            console.log(positionnements[i].choosed);
        }

        function toggleMotivation(event, i) {
            motivations[i].choosed = event.target.checked;
            console.log(motivations[i].choosed);
        }

        function toggleBesoin(event, i) {
            besoins[i].choosed = event.target.checked;
            console.log(besoins[i].choosed);
        }
        
        async function activer_projet(e) {

            $('#page-1 :input').prop('disabled', true);
            $('#page-2 :input').prop('disabled', true);

            //modifier la requete, le prompt, pour récupérer un json
            
            $('#form-activer-loader').show()
            $(e.target).prop('disabled', true)


            // partie à revoir *****************************************************************

            selectedBesoins = besoins.filter(obj => obj.choosed === true)
            selectedMotivations = motivations.filter(obj => obj.choosed === true)
            selectedPositionnements = positionnements.filter(obj => obj.choosed === true)
            selectedProfils = profils.filter(obj => obj.choosed === true)

            const prompt_description = `Voici les informations suivantes sur un projet e-commerce : ${projet}.
                Voici les besoins satisfaits par le ou les produits impliqués dans ce projet ${selectedBesoins}.
                Voici les motivations pour utiliser le ou les produits impliqués dans ce projet ${selectedMotivations}.
                Voici les positionnement possibles pour le ou les produits impliqués dans ce projet ${selectedPositionnements}.
                Voici les profils fictifs pouvant représenter un potentiel client pour notre projet en vue d\'atteindre notre objectif ${selectedProfils}.
                A partir de ces informations, veuillez générer : un récapitulatif (structuré en html) du le projet, un profil type à partir des profils sélectionné et des suggestions sur :
                - des objectifs à court terme intéressant,
                - des tâches à réaliser pour l'atteinte de ces objectifs,
                - des stratégies markétings intéressante à adopter dans la même optique. 
                Veuillez renvoyer le résultat sous forme d'un objet JSON, avec la structure suivantes, et assurez-vous que ce résultat peut être analysé par un JSON.parse() sans erreur. 
                {
                    "recapitulatif": "",
                    "profil": "",
                    "suggestions": {
                        "objectifs": [{"id": 1, "objectif": ""},...],
                        "taches": [{"id": 1, "tache": ""},...],
                        "strategies": [{"id": 1, "strategie": ""},...],
                        "titres": [{"id": 1, "titre": ""},...]
                    }
                }`;

            const description = await send_request(prompt_description)
            console.log(description)

            // const data = {
            // }
            // fin de la partie à revoir ***************************************************************

            $.ajax({
                type: "POST",
                url: "Projet/activer.php",
                data: {
                    id: currentID,
                    profils: selectedProfils,
                    positionnements: selectedPositionnements,
                    motivations: selectedMotivations,
                    besoins: selectedBesoins,
                    description: description
                },
                success: async function(response) {
                    
                    // response = JSON.parse(response);
                    // console.log(response.alert, response.alert_message, response.alert_data);

                    console.log(JSON.parse(response));

                    $('#form-activer-loader').hide()
                    $(e.target).prop('disabled', false)
                    
                    //redirection
                    window.location.href = "details-projet.php?id="+currentID;

                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus, errorThrown);
                }

            })
            
        }

    </script>

</body>

</html>