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
                                        <?php endif; ?>
                                    </td>

                                    <td class="align-middle white-space-nowrap text-end position-relative">
                                        <div class="hover-actions bg-100">
                                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm btn-supprimer">
                                            <span class="fas fa-trash text-danger"></span>
                                        </button>
                                        <button class="btn icon-item rounded-3 me-2 fs--2 icon-item-sm btn-activer">
                                            <span class="fas fa-check text-success"></span>
                                        </button>
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
                                        <!-- <div class="mb-3">
                                            <label class="form-label" for="nom-projet">Quelques lignes sur votre projet</label>
                                            <fieldset style="padding: 20px; border-left: 0.5px dashed gray;">
                                            </fieldset>
                                        </div> -->
                                        <div class="mb-3">
                                            <label class="form-label" for="besoin_satisfaits">Besoins principaux satisfaits par votre produit</label>
                                            <div id="besoin_satisfaits"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="motivation_produit">Motivations pour utiliser le produit</label>
                                            <div id="motivation_produit"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="positionnement">Positionnement</label>
                                            <div id="positionnement"></div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label" for="concept">Profils</label>
                                            <div id="profils"></div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <button type="button" onclick="activer_projet(event)" class="btn btn-sm btn-primary"><i id="form-activer-loader" class="fas fa-spinner fa-spin"></i> Activer</button>
                                        </div>
                                        <div id="recapitulatif"></div>
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
                                        
        $('.btn-activer').on('click', function() {

            setLoader($('body'), 'Chargement');

            $tr = $(this).closest('tr');

            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();

            currentID = data[0];

            //lancer une requête ajax pour récupérer les details de ce projet
            $.ajax({
                type: "POST",
                url: "Projet/detail.php",
                data: {id: currentID},
                success: async function(response) {

                    projet = JSON.parse(response)
                    console.log(projet);

                    let prompt = 'Soit les informations suivantes sur un projet e-commerce. ' + JSON.stringify(projet) + '. ';

                    // let details = JSON.parse(projet.details)
                    // let niche = details.niche
                    // let sous_niche = details.sous_categorie_niche
                                                                
                    // let personae = details.personae
                    // let {positionnement, personnalite } = personae
                    
                    // let produit = details.produit
                    // let {type, concept, liste, cibles} = produit

                    // let prompt_all = prompt
                    // prompt_all += 'À partir de ces informations, veuillez utiliser vos connaissances sur les projets e-commerce et le web marketing pour générer :'
                    // prompt_all += '- 03 Trois exemples de besoins principaux satisfaits par le ou les produits impliqués dans ce projet.'
                    // prompt_all += '- 03 Trois exemples de motivations pour utiliser le ou les produits impliqués dans ce projet.'
                    // prompt_all += '- 03 Trois suggestions de positionnements qui pourraient aider à atteindre les objectifs de ce projet.'
                    // prompt_all += '- 03 Trois exemples de profils fictifs de clients potentiels pour ce projet afin d\'atteindre nos objectifs.'
                    // prompt_all += 'Veuillez renvoyer le résultat sous forme d\'un objet JSON contenant les quatre catégories de résultats, avec une structure similaire à celle-ci :'
                    // prompt_all += '[[{"id":1,"besoin":""},...],[{"id":1,"motivation":""},...],[{"id":1,"positionnement":""},...],[{"id":1,"profil":""},...]]'
                    // prompt_all += 'Assurez-vous que le résultat peut être analysé par JSON.parse() sans erreur !' 

                    const prompt_all = `Voici les informations suivantes sur un projet e-commerce : ${JSON.stringify(projet)}.
                        À partir de ces informations, veuillez utiliser vos connaissances sur les projets e-commerce et le web marketing pour générer :
                        - Cinq suggestions de besoins principaux satisfaits par le ou les produits impliqués dans ce projet.
                        - Cinq suggestions de motivations pour utiliser le ou les produits impliqués dans ce projet.
                        - Cinq suggestions de positionnements qui pourraient aider à atteindre les objectifs de ce projet.
                        - Dix suggestions de profils fictifs (formulation textuelle détaillée avec du réalisme avec un nom) de clients potentiels pour ce projet afin d'atteindre nos objectifs.
                        Veuillez renvoyer le résultat sous forme d'un objet JSON contenant les quatre catégories de résultats, avec une structure similaire à celle-ci : 
                        [
                            [{"id": 1, "besoin": ""}, ...],
                            [{"id": 1, "motivation": ""}, ...],
                            [{"id": 1, "positionnement": ""}, ...],
                            [{"id": 1, "profil": ""}, ..., {"id": 10, "profil": ""}]
                        ]
                        Assurez-vous que le résultat peut être analysé par JSON.parse() sans erreur.`;
                    

                        // const apiResponse = await fetch('send_request.php', {
                        //     method: 'POST',
                        //     headers: {
                        //         'Content-Type': 'application/json',     
                        //     },
                        //     body: JSON.stringify({
                        //         prompt: prompt_all,
                        //         max_tokens: 2048,
                        //         temperature: 0.5
                        //     })
                        // });
                        // const jsonResponse = await apiResponse.json();
                        // console.log(jsonResponse);

                    const all = await send_request(prompt_all)
                    console.log(all)
                    // alert("gama")

                    // let prompt_besoins = prompt
                    // prompt_besoins += 'En les utilisants génère moi des exemples de besoins principaux satisfaits par le ou les produit mise en jeu dans ce projet e-commerce !'
                    // prompt_besoins += 'Renvoie le résultat dans un format json => exemple : [{"id": 1, "besoin": ""}] !'

                    // besoins = await send_request(prompt_besoins)
                    // console.log(besoins);
                    besoins = all[0]
                    
                    var besoins_elements = ""
                    for (var i = 0; i < besoins.length; i++) {
                        besoins[i].choosed = false
                        besoins_elements += '<div id="besoin_'+i+'" class="card h-lg-100 mb-2 besoin">'+
                                        '<div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div>'+
                                        '<div class="card-body position-relative d-flex py-2 align-items-center">'+
                                            '<input onchange="toggleBesoin(event, '+i+')" class="form-check-input p-2" id="check_besoin_'+i+'" type="checkbox" value="" />'+
                                            '<p class="fs--1 mb-0 px-3 mt-1">'+besoins[i].besoin+'</p>'+
                                        '</div>'+
                                    '</div>'
                    }-
                    $('#besoin_satisfaits').html(besoins_elements)

                    // let prompt_motivations = prompt
                    // prompt_motivations += 'En les utilisants génère moi des exemples motivations pour utiliser le ou les produit mise en jeu dans ce projet e-commerce !'
                    // prompt_motivations += 'Renvoie le résultat dans un format json => exemple : [{"id": 1, "motivation": ""}] !'

                    // motivations = await send_request(prompt_motivations)
                    // console.log(motivations);
                    motivations = all[1]

                    var motivations_elements = ""
                    for (var i = 0; i < motivations.length; i++) {
                        motivations[i].choosed = false
                        motivations_elements += '<div id="motivation_'+i+'" class="card h-lg-100 mb-2 motivation">'+
                                        '<div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div>'+
                                        '<div class="card-body position-relative d-flex py-2 align-items-center">'+
                                            '<input onchange="toggleMotivation(event, '+i+')" class="form-check-input p-2" id="check_motivation_'+i+'" type="checkbox" value="" />'+
                                            '<p class="fs--1 mb-0 px-3 mt-1">'+motivations[i].motivation+'</p>'+
                                        '</div>'+
                                    '</div>'
                    }
                    $('#motivation_produit').html(motivations_elements)

                    // let prompt_positionnement = prompt
                    // prompt_positionnement += 'En les utilisants génère moi des suggestions de positionnements devrant permettre l\'atteinte des objectifs de ce projet !'
                    // prompt_positionnement += 'Renvoie le résultat dans un format json => exemple : [{"id": 1, "positionnement": ""}] !'

                    // positionnements = await send_request(prompt_positionnement)
                    // console.log(positionnements);
                    positionnements = all[2]
                    
                    var positionnements_elements = ""
                    for (var i = 0; i < positionnements.length; i++) {
                        positionnements[i].choosed = false
                        positionnements_elements += '<div id="positionnement_'+i+'" class="card h-lg-100 mb-2 positionnement">'+
                                        '<div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div>'+
                                        '<div class="card-body position-relative d-flex py-2 align-items-center">'+
                                            '<input onchange="togglePositionnement(event, '+i+')" class="form-check-input p-2" id="check_positionnement_'+i+'" type="checkbox" value="" />'+
                                            '<p class="fs--1 mb-0 px-3 mt-1">'+positionnements[i].positionnement+'</p>'+
                                        '</div>'+
                                    '</div>'
                    }
                    $('#positionnement').html(positionnements_elements)

                    let prompt_profil = prompt
                    prompt_profil += 'En les utilisants, génère moi trois (03) exemples des profils fictifs (fait une bonne formulation textuelle) pouvant représenter un potentiel client pour notre projet en vue d\'atteindre notre objectif !'
                    prompt_profil += 'Renvoie le résultat dans un format json => exemple : [{"id": 1, "profil": ""},...] !'
                    
                    // profils = await send_request(prompt_profil)
                    profils = all[3]
                    
                    var profils_elements = ""
                    for (var i = 0; i < profils.length; i++) {
                        profils[i].choosed = false
                        profils_elements += '<div id="profil_'+i+'" class="card h-lg-100 mb-2 profil">'+
                                        '<div class="bg-holder bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-1.png);"></div>'+
                                        '<div class="card-body position-relative d-flex py-2 align-items-center">'+
                                            '<input onchange="toggleProfil(event, '+i+')" class="form-check-input p-2"  id="check_profil_'+i+'" type="checkbox" value="" />'+
                                            '<p class="fs--1 mb-0 px-3 mt-1">'+profils[i].profil+'</p>'+
                                        '</div>'+
                                    '</div>'
                    }
                    $('#profils').html(profils_elements)
                                                                                                            
                    unSetLoader();
                    $('#form-activer-loader').hide()
                    $('#modal-active-projet').modal('show')

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
        
        function toggleProfil(event, i) {
            profils[i].choosed = event.target.checked;
            console.log(profils[i].choosed);
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
            $('#form-activer-loader').show()
            $(e.target).prop('disabled', true)
            filteredBesoins = besoins.filter(obj => obj.choosed === true)
            filteredMotivations = motivations.filter(obj => obj.choosed === true)
            filteredPositionnements = positionnements.filter(obj => obj.choosed === true)
            filteredProfils = profils.filter(obj => obj.choosed === true)
            const prompt_recap = `Voici les informations suivantes sur un projet e-commerce : ${JSON.stringify(projet)}.
                Voici les besoins satisfaits par le ou les produits impliqués dans ce projet ${JSON.stringify(filteredBesoins)}.
                Voici les motivations pour utiliser le ou les produits impliqués dans ce projet ${JSON.stringify(filteredMotivations)}.
                Voici les positionnement possibles pour le ou les produits impliqués dans ce projet ${JSON.stringify(filteredPositionnements)}.
                Voici les profils fictifs pouvant représenter un potentiel client pour notre projet en vue d\'atteindre notre objectif ${JSON.stringify(filteredProfils)}.
                A partir de ces informations, et vos bases de connaissances du domaine, veuillez générer un récapitulatif sur le projet, les objectifs à court terme intéressant,
                les tâches à mettre en place et quelques propositions de stratégies interessantes à place. 
                Renvoi le résultat au format HTML avec les balises nécessaires à un affichage structuré !`;

                const recap = await send_request_2(prompt_recap)
                console.log(recap)

                $('#form-activer-loader').hide()
                $(e.target).prop('disabled', false)

                $('#recapitulatif').html(recap)
                
                // $('#modal-active-projet').modal('show')
        }

    </script>

</body>

</html>