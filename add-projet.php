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

                </div>

                <script>

                    // var produits = [];

                    var projet_old = {
                        nom : '',
                        type: '',
                        details: {
                            id_niche: '',
                            niche: '',
                            sous_categorie_niche: '',
                            personae: {
                                positionnement: [],
                                personnalite: {
                                    traits_caractere: [],
                                    interets_personnels: [],
                                    qualite: [],
                                    defaut: [],
                                    passion: [],
                                    peur: []
                                }
                            },
                            produit: {
                                type: '',
                                concept : '',
                                liste: '',
                                cibles: {
                                    canaux_achat: [],
                                    frequence_achat: [],
                                    montant_moyen: [],
                                    tranche_age: [],
                                    genre: []
                                }
                            }
                        }
                    }

                    var projet = {
                        nom : '',
                        type: '',
                        details: {
                            id_niche: '',
                            niche: '',
                            sous_categorie_niche: '',
                            personae: {
                                positionnement: [],
                                personnalite: {
                                    traits_caractere: [],
                                    interets_personnels: [],
                                    qualite: [],
                                    defaut: [],
                                    passion: [],
                                    peur: []
                                }
                            },
                            produit: {
                                type: '',
                                concept : '',
                                produits: [],
                                cibles: {
                                    canaux_achat: [],
                                    frequence_achat: [],
                                    montant_moyen: [],
                                    tranche_age: [],
                                    genre: []
                                }
                            }
                        }
                    }
                    
                </script>

                <div class="row g-3 mb-3">

                    <div class="col-lg-12 col-xl-12 col-xxl-12 h-100">
                        <div class="card theme-wizard mb-5 mb-lg-0 mb-xl-5 mb-xxl-0 h-100">
                            <div class="card-header bg-light pt-3 pb-2">
                                <ul class="nav nav-pills mb-3" role="tablist" id="pill-tab2">
                                    <li class="nav-item" role="presentation">
                                        <button disabled class="nav-link active" data-wizard-step="data-wizard-step"
                                            data-bs-toggle="pill" data-bs-target="#form-wizard-progress-tab1"
                                            type="button" role="tab" aria-controls="form-wizard-progress-tab1"
                                            aria-selected="true"><span class="fas fa-lock me-2"
                                                data-fa-transform="shrink-2"></span><span
                                                class="d-none d-md-inline-block fs--1">Informations
                                                élémentaires</span></button>
                                    </li>

                                    <li id="produit-nav-item" class="nav-item ecom-nav-item" role="presentation">
                                        <button disabled class="nav-link" data-wizard-step="data-wizard-step"
                                            data-bs-toggle="pill" data-bs-target="#form-wizard-progress-tab2"
                                            type="button" role="tab" aria-controls="form-wizard-progress-tab2"
                                            aria-selected="false"><span class="fas fa-tags me-2"
                                                data-fa-transform="down-2 shrink-2"></span><span
                                                class="d-none d-md-inline-block fs--1">Produit</span></button>
                                    </li>
                                    
                                    <li class="nav-item ecom-nav-item" role="presentation">
                                        <button disabled id="personae-type-nav-item" class="nav-link" data-wizard-step="data-wizard-step"
                                            data-bs-toggle="pill" data-bs-target="#form-wizard-progress-tab3"
                                            type="button" role="tab" aria-controls="form-wizard-progress-tab3"
                                            aria-selected="false"><span class="fas fa-user me-2"
                                                data-fa-transform="shrink-2"></span><span
                                                class="d-none d-md-inline-block fs--1">Personae Type </span></button>
                                    </li>

                                    <li id="done-nav-item" class="nav-item ecom-nav-item" role="presentation">
                                        <button disabled class="nav-link" data-wizard-step="data-wizard-step"
                                            data-bs-toggle="pill" data-bs-target="#form-wizard-progress-tab4"
                                            type="button" role="tab" aria-controls="form-wizard-progress-tab4"
                                            aria-selected="false"><span class="fas fa-thumbs-up me-2"
                                                data-fa-transform="shrink-2"></span><span
                                                class="d-none d-md-inline-block fs--1">Terminé</span></button>
                                    </li>
                                </ul>
                                <script>
                                    $('.ecom-nav-item').hide()
                                </script>
                            </div>
                            <div class="progress" style="height: 2px;">
                                <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                            <div class="card-body py-4">
                                <div class="tab-content">
                                    <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel"
                                        aria-labelledby="form-wizard-progress-tab1" id="form-wizard-progress-tab1">
                                        <form novalidate="novalidate">
                                            <div class="mb-3">
                                                <label class="form-label" for="nom-projet">Nom du projet</label>
                                                <input class="form-control" type="text" name="name" placeholder="" id="nom-projet" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label" for="type-projet">Type du projet*</label>
                                                <select class="form-select" name="type-projet" id="type-projet" required="required" data-wizard-validate-email="true">
                                                    <option value=""></option>
                                                    <?php
                                                        $types = json_decode(file_get_contents("./data/type-projets.json"));
                                                        foreach($types as $type):
                                                            echo '<option value="'.$type->slug.'">'.$type->name.'</option>';
                                                        endforeach;
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="ecom-element">
                                                <div class="mb-3">
                                                    <label class="form-label" for="niche">Niche*</label>
                                                    <div class="d-flex" style="align-items: center;">
                                                        <button id="btn-list-niches" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal-list-niche">
                                                            <span class="fas fa-list ms-2" data-fa-transform="shrink-3"></span> 
                                                            Voir la liste détaillée
                                                        </button>
                                                        <div id="choosed-niche-element" class="px-3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <script>
                                                $(".ecom-element").hide()
                                                $('#type-projet').on('change', function(e) {

                                                    //lors d'un changement de type de rpojet on désactive
                                                    

                                                    if($(this).val() == 'boutique-ecom') {
                                                        $(".ecom-element").fadeIn(750)
                                                        $('.ecom-nav-item').fadeIn(750)
                                                    }
                                                    else {
                                                        $(".ecom-element").fadeOut(750)
                                                        $('.ecom-nav-item').fadeOut(750)
                                                    }

                                                    
                                                    $("#choosed-niche-element").html("")
                                                    $("#btn-continuer").prop("disabled", true);

                                                })
                                            </script>
                                        </form>
                                    </div>
                                    <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                        aria-labelledby="form-wizard-progress-tab2" id="form-wizard-progress-tab2">
                                        <form class="form-validation">

                                            <div class="mb-3">
                                                <label class="form-label" for="type-produit">Type produit*</label>
                                                <select class="form-select" name="gender" id="type-produit" required="required" data-wizard-validate-email="true">
                                                    <option value=""></option>
                                                    <option value="mono">Mono produit</option>
                                                    <option value="multi">Multi produits</option>
                                                </select>
                                                
                                                <button id="btn-add-produit" class="btn btn-primary my-3" type="button" data-bs-toggle="modal" data-bs-target="#modal-add-produit">
                                                    <span class="fas fa-list ms-2" data-fa-transform="shrink-3"></span> 
                                                    Ajouter un produit
                                                </button>
                                                
                                                <div id="list-produit" class="mt-2"></div>

                                                <div class="my-3">
                                                    <label class="form-label" for="concept">Concept*</label>
                                                    <textarea name="concept" id="concept" class="form-control" placeholder="Exemple : Boutique e-commerce de vêtements éco-responsables pour les passionnés de mode durable, offrant des articles tendance, de qualité et respectueux de l'environnement" cols="30" rows="5"></textarea>
                                                </div>

                                            </div>

                                            <label class="form-label" for="niche">Cible*</label>
                                            <fieldset style="padding: 20px; border-left: 0.5px dashed gray;">
                                                <?php
                                                    $cibles = json_decode(file_get_contents("./data/cibles.json"));
                                                        foreach($cibles as $cible):
                                                ?>
                                                            <div class="mb-3 ml-3">
                                                                <label class="form-label" for="<?= $cible->slug ?>"><?= $cible->name ?>*</label>
                                                                <select class="form-select js-choice" size="1" multiple="multiple" id="<?= $cible->slug ?>" required="required">
                                                                    <?php
                                                                        foreach($cible->elements as $element):
                                                                            echo '<option value="'.$element.'">'.$element.'</option>';
                                                                        endforeach;
                                                                    ?>
                                                                </select>
                                                            </div>
                                                <?php
                                                        endforeach;
                                                ?>
                                            </fieldset>
                                            <script>

                                                document.addEventListener('DOMContentLoaded', function() {

                                                    var selectElements = document.querySelectorAll('.js-choice');

                                                    selectElements.forEach(function(selectElement) {
                                                    
                                                        var choice = new Choices(selectElement, {
                                                            removeItemButton: true,
                                                            placeholder: true,
                                                        });
 
                                                        selectElement.addEventListener('change', function(e) {
                                                            var selectedValues = choice.getValue(true);
                                                            var elementId = event.target.id;
                                                            projet.details.produit.cibles[elementId] = selectedValues
                                                            console.log(projet.details.produit.cibles);
                                                        });

                                                    });

                                                });

                                            </script>
                                        </form>
                                    </div>
                                    <div class="tab-pane px-sm-3 px-md-5" role="tabpanel"
                                        aria-labelledby="form-wizard-progress-tab3" id="form-wizard-progress-tab3">
                                        <form>
                                            <div id="personeas_element"></div>
                                        </form>
                                    </div>
                                    <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel"
                                        aria-labelledby="form-wizard-progress-tab4" id="form-wizard-progress-tab4">
                                        <div class="wizard-lottie-wrapper">
                                            <div class="lottie wizard-lottie mx-auto my-3"
                                                data-options='{"path":"assets/img/animated-icons/celebration.json"}'>
                                            </div>
                                        </div>
                                        <h4 class="mb-1">Merci ! </h4>
                                        <p>Vous êtes à la fin de la création de votre projet</p>
                                        <button id="btn-terminer" class="btn btn-primary px-5 my-3">Terminer</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light">
                                <div class="px-sm-3 px-md-5">
                                    <ul class="pager wizard list-inline mb-0">
                                        <li class="previous">
                                            <button class="btn btn-link ps-0" type="button"><span
                                                    class="fas fa-chevron-left me-2"
                                                    data-fa-transform="shrink-3"></span>Retour</button>
                                        </li>
                                        <li class="next">
                                            <button id="btn-continuer" class="btn btn-primary px-5 px-sm-6" type="submit">Continuer<span
                                                    class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3">
                                                </span></button>
                                            <script>
                                                // on desactive le btn continuer et ne l'active qu'au choix d'une niche et si les autres éléments 
                                                // de cette partie du formulaire sont remplis ou sélectionnés
                                                $("#btn-continuer").prop("disabled", true);
                                                
                                            </script>
                                        </li>
                                    </ul>
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

    <div class="modal fade" id="modal-add-produit" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
                <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
                <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                    <h4 class="mb-1" id="modalListNicheLabel">Ajout de produit</h4>
                </div>
                <div class="p-4">

                    <div class="row">
                        <div class="mb-3">
                            <label class="form-label" for="nom-projet">Nom</label>
                            <input class="form-control" type="text" name="name" placeholder="" id="nom-produit" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="concept">Desciption*</label>
                            <textarea name="concept" id="description-produit" class="form-control" placeholder="" cols="30" rows="4"></textarea>
                        </div>
                        <div class="d-flex mt-2">
                            <button type="button" onclick="ajouterProduit(event)" class="btn btn-sm btn-primary px-2 fsp-75 badge-soft-info border-white">Ajouter</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        </div>
    </div>

    <script>

        $('#btn-add-produit').hide()

        $('#type-produit').on('change', function() {
            $(this).val() ? $('#btn-add-produit').show() : $('#btn-add-produit').hide()
        })

        function ajouterProduit(event) {
            event.preventDefault()

            $('#modal-add-produit').modal('hide')
            projet.details.produit.produits.push({
                nom: $('#nom-produit').val(),
                description: $('#description-produit').val()
            })

            showProductsList(projet.details.produit.produits);

            $('#nom-produit').val('')
            $('#description-produit').val('')

            if($('#type-produit').val() == 'mono') $('#btn-add-produit').hide()

            console.log(projet.details.produit.produits);
        }

        function showProductsList(produits) {
            $('#list-produit').html(`${produits.length > 0 ? `<div class="">
                                        <h5 class="mb-2">${produits.length > 1 ? 'Produits' : 'Produit'}</h5>
                                    </div>
                                    <div class="list-group">
                                        ${produits.map(produit => {
                                            return `<a class="list-group-item list-group-item-action flex-column align-items-start p-2 p-sm-3" href="#">
                                                        <div class="d-flex flex-column flex-sm-row justify-content-between mb-1 mb-md-0">
                                                            <h5 class="mb-1">${produit.nom}</h5>
                                                        </div>
                                                        <label class="form-check-label mb-1">${produit.description}</label>
                                                        <button type="button" onclick="supprimerProduit(event, ${JSON.stringify(produit.nom).replace(/"/g, '&quot;')})" class="btn btn-sm btn-danger px-2 fsp-75 badge-soft-info border-white"><i class="fas fa-trash"></i> Supprimer</button>
                                                    </a>`;
                                        }).join('')}
                                    </div>` : ``}`);
        }

        function supprimerProduit(event, nom) {
            projet.details.produit.produits = projet.details.produit.produits.filter(item => item.nom !== nom );
            showProductsList(projet.details.produit.produits);
            if(projet.details.produit.produits.length == 0 && $('#type-produit').val() == 'mono') $('#btn-add-produit').show()
        }

    </script>
    
    <div class="modal fade" id="modal-list-niche" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg mt-6" role="document">
        <div class="modal-content border-0">
            <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
            <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
            <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                <h4 class="mb-1" id="modalListNicheLabel">Liste des niches</h4>
                <p class="fs--2 mb-0">Avec <a class="link-600 fw-semi-bold" href="#!">sous-catégorie</a></p>
            </div>
            <div class="p-4">
                
                <div class="row">
                    <?php
                    $niches = json_decode(file_get_contents("./data/niches.json"));
                    foreach($niches as $niche): 
                    ?>
                    <div class="col-lg-6 mb-4">
                        <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i></span>
                            <div class="flex-1">
                                <h5 class="mb-2 fs-0"><?= $niche->name ?></h5>
                                <div class="fs--2 mt-3">
                                    <?php
                                        foreach($niche->sous_categories as $sous_categorie):
                                            $sous_categorie_text = str_replace("'", "\\'", $sous_categorie);
                                            $niche_name = str_replace("'", "\\'", $niche->name);
                                    ?>
                                        <div class="d-flex align-items-center">
                                            <span class="dot bg-300"></span>
                                            <span class="fw-semi-bold">
                                                <a onclick="choisirNiche(event, '<?= $niche->id ?>', '<?= $niche_name ?>', '<?= $sous_categorie_text ?>' )" href="#"><?= $sous_categorie ?></a>
                                            </span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <script>
        function choisirNiche(event, nicheId, nicheName, sous_categorie) {
            event.preventDefault();
            $("#modal-list-niche").modal('hide')
            var choosed_niche_element = $("#choosed-niche-element")
            choosed_niche_element.html('<h6 class="mt-2">'+sous_categorie+'</h6>')
            
            //on active au choix d'une niche
            $("#btn-continuer").prop("disabled", false);

            projet.details.id_niche = nicheId
            projet.details.niche = nicheName
            projet.details.sous_categorie_niche = sous_categorie

            $.ajax({
                type: "POST",
                url: "set_personaes.php",
                data: { niche_id: nicheId },
                success: function(response) {
                    // console.log(response);
                    $('#personeas_element').html(response)
                    // on réinitialise les personae qui avait été choisi avant le changement de la niche 
                    projet.details.personae.personnalite = {
                        traits_caractere: [],
                        interets_personnels: [],
                        qualite: [],
                        defaut: [],
                        passion: [],
                        peur: []
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus, errorThrown);
                }
            });

        }

        
        function toggleElement(array, element) {
            if(array.includes(element))
                array.splice(array.indexOf(element), 1)
            else
                array.push(element)
        }

        function choisirElementPersonea(event, elementPersonnalite, personae_id, personae_slug) {
            
            event.preventDefault();
            // $("#modal-list-personae-"+personae_id).modal('hide')

            id = JSON.parse(personae_id)
            slug = JSON.parse(personae_slug)
            name = JSON.parse(elementPersonnalite)

            toggleElement(projet.details.personae.personnalite[slug], name)

            $.each($(".element-personae-"+slug), function(index, element) {
                if(element.innerText.trim() === name) element.classList.toggle("text-success")
            });
            
            $("#choosed-personae-element-"+id).html(`
                ${projet.details.personae.personnalite[slug]
                    .map( item => {
                        name = JSON.stringify(item)
                        return `<span class="badge badge-soft-info">
                                    ${item} <a href="#!"><i onclick="choisirElementPersonea(event, ${JSON.stringify(name).replace(/"/g, '&quot;')}, ${JSON.stringify(personae_id).replace(/"/g, '&quot;')}, ${JSON.stringify(personae_slug).replace(/"/g, '&quot;')})" class="fas fa-times"></i></a>
                                </span>`;
                    })
                    .join(" ")}
            `);

            console.log(projet.details.personae.personnalite[slug]);

        }

        $('#btn-terminer').on('click', function() {

            //on ajoute chaque élément dans la variable object projet

            projet.nom = $('#nom-projet').val()
            projet.type = $('#type-projet').val()
            // projet.details.personae.positionnement = $('#positionnement').val()
            
            projet.details.produit.type = $('#type-produit').val()
            projet.details.produit.concept = $('#concept').val()
            // projet.details.produit.cibles.canaux_achat = $('#canaux_achat').val()
            // projet.details.produit.cibles.frequence_achat = $('#frequence_achat').val()
            // projet.details.produit.cibles.montant_moyen = $('#montant_moyen').val()
            // projet.details.produit.cibles.genre = $('#genre').val()
            // projet.details.produit.cibles.tranche_age = $('#tranche_age').val()

            console.log(projet);

            //on fait une requete ajax, pour ajouter à la base de données
            $.ajax({
                url: 'Projet/ajouter.php',
                method: 'POST', 
                data: projet, 
                success: function(response) {
                    // $('#result').html(response);
                    console.log(response);
                    window.location.replace("list-projet.php");
                }
            });

            //on redirige vers la liste des projets

        })
    </script>

</body>

</html>