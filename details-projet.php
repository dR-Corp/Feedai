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

                <?php
                    $id_projet = $_GET['id'];

                    include('db_connexion.php');

                    $sql = 'SELECT * FROM projets';
                    $stmt = $db->query($sql);
                    $projets = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    $sql = "SELECT * FROM projets WHERE id = '$id_projet' ";
                    $stmt = $db->query($sql);
                    $projet = $stmt->fetch(PDO::FETCH_ASSOC);

                    $details = json_decode($projet['details'], true);
                    $produit = $details['produit'];
                    $personae = $details['personae'];

                    // $description = json_decode($projet['description'], true);
                    $profil_type = isset($details['profil_type']) ? $details['profil_type'] : "";
                    $recapitulatif = isset($details['recapitulatif']) ? $details['recapitulatif'] : "";

                    $positionnements = isset($details['positionnements']) ? $details['positionnements'] : [];
                    $motivations = isset($details['motivations']) ? $details['motivations'] : [];
                    $profils = isset($details['profils']) ? $details['profils'] : [];
                    $besoins = isset($details['besoins']) ? $details['besoins'] : [];
                    
                ?>

                <div class="row g-3 mb-3">
                    <div class="card ">
                        <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(assets/img/icons/spot-illustrations/corner-4.png);opacity: 0.7;">
                        </div>
                        <!--/.bg-holder-->
                        <div class="card-body position-relative">
                            <div class="row flex-between-center">
                                <div class="col-sm-auto mb-2 mb-sm-0">
                                    <h5>
                                        <?= $projet['nom'] ?>
                                        <?php if($projet['progression'] == "" || $projet['progression'] == "EN ATTENTE"): ?>
                                            <div class="badge rounded-pill badge-soft-secondary fs--2">En attente<span class="fas fa-exclamation ms-1" data-fa-transform="shrink-2"></span></div>
                                        <?php else: ?>
                                            <div class="badge rounded-pill badge-soft-success fs--2">Terminé<span class="fas fa-check ms-1" data-fa-transform="shrink-2"></span></div>
                                        <?php endif; ?>
                                    </h5>
                                    <p class="fs--1"><?= $projet['created_at'] ?></p>

                                    <div>
                                        <strong class="me-2"><?= $projet['type'] ?></strong>
                                    </div>
                                    <div>
                                        <strong class="me-2">Niche : </strong>
                                        <?= $details['niche'] .' | '. $details['sous_categorie_niche'] ?>
                                    </div>

                                    <?php if(!$projet['etat']): ?>
                                        <button id="btn-active-project" class="btn btn-sm btn-falcon-default mt-3" type="button" data-bs-toggle="modal" data-bs-target="#modal-active-projet">
                                            Activer le projet
                                        </button>
                                    <?php else: ?>
                                    <small class="badge fw-semi-bold rounded-pill status badge-soft-success">PROJET ACTIF</small>
                                    <?php endif; ?>

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
                                                            <div class="mb-3">
                                                                <label class="form-label" for="nom-projet">Quelques lignes sur votre projet</label>
                                                                <fieldset style="padding: 20px; border-left: 0.5px dashed gray;">
                                                                    <div class="mb-3 ml-3">
                                                                        <label class="form-label" for="besoin_satifaits">Besoins principaux satisfaits par votre produit</label>
                                                                        <select class="form-select" name="gender" id="besoin_satifaits" required="required" data-wizard-validate-email="true">
                                                                            <option value=""></option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3 ml-3">
                                                                        <label class="form-label" for="motivation_produit">Motivations pour utiliser le produit</label>
                                                                        <select class="form-select" name="gender" id="motivation_produit" required="required" data-wizard-validate-email="true">
                                                                            <option value=""></option>
                                                                        </select>
                                                                    </div>
                                                                </fieldset>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="motivation_produit">Positionnement</label>
                                                                <select class="form-select" name="gender" id="motivation_produit" required="required" data-wizard-validate-email="true">
                                                                    <option value=""></option>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="concept">Profils</label>
                                                                
                                                            </div>
                                                            <div class="d-flex mt-2">
                                                                <button type="button" onclick="" class="btn btn-sm btn-primary px-2 fsp-75 badge-soft-info border-white">Activer</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-sm-auto">
                                <div class="row gx-2 align-items-center">
                                    <div class="col-auto">
                                    <form class="row gx-2">
                                        <div class="col-auto"><small>Mes projets : </small></div>
                                        <div class="col-auto">
                                        <select class="form-select form-select-sm" aria-label="Bulk actions">
                                            <?php foreach($projets as $projet): ?>
                                            <option value="<?= $projet['id'] ?>"><?= $projet['nom'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        </div>
                                    </form>
                                    </div>
                                    <div class="col-auto pe-0"><a class="text-600 px-1" href="kanban.php" data-bs-toggle="tooltip" title="Kanban"><span class="nav-link-icon"><span class="fab fa-trello"></span></a></div>
                                    <div class="col-auto pe-0"><a class="text-600 px-1" href="add-projet.php" title="Créer un projet"><span class="fas fa-project-diagram"></span></a></div>
                                </div>
                                </div>
                            </div>             
                        </div>
                    </div>
                </div>

                <div class="row g-3 mb-3">
					
                    <div class="card mb-3">
                        <div class="card-body">
                            
                            <div class="row">
                                <div class="col-12">
                                <div class="overflow-hidden mt-4">
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item"><a class="nav-link active ps-0" id="activity-tab" data-bs-toggle="tab" href="#tab-activity" role="tab" aria-controls="tab-activity" aria-selected="true">Activités et tâches réalisées</a></li>
                                        <li class="nav-item"><a class="nav-link px-2 px-md-3" id="produits-tab" data-bs-toggle="tab" href="#tab-produits" role="tab" aria-controls="tab-produits" aria-selected="false">Produits</a></li>
                                        <li class="nav-item"><a class="nav-link px-2 px-md-3" id="specifications-tab" data-bs-toggle="tab" href="#tab-specifications" role="tab" aria-controls="tab-specifications" aria-selected="false">Personae</a></li>
                                        <li class="nav-item"><a class="nav-link px-2 px-md-3" id="description-tab" data-bs-toggle="tab" href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="false">Description</a></li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">

                                        <div class="tab-pane fade show active" id="tab-activity" role="tabpanel" aria-labelledby="activity-tab">
                                            <div class="mt-3">
                                                <div class="col-xxl-12 col-lg-12 order-xxl-1">
                                                    <div class="card h-100">
                                                        <!-- <div class="card-header">
                                                        <h6 class="mb-0">Recent Activity</h6>
                                                        </div> -->
                                                        <div class="card-body scrollbar recent-activity-body-height ps-2">
                                                        <div class="row g-3 timeline timeline-primary timeline-past pb-card">
                                                            <div class="col-auto ps-4 ms-2">
                                                            <div class="ps-2">
                                                                <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span class="text-primary fas fa-envelope"></span></div>
                                                            </div>
                                                            </div>
                                                            <div class="col">
                                                            <div class="row gx-0 border-bottom pb-card">
                                                                <div class="col">
                                                                <h6 class="text-800 mb-1">Antony Hopkins sent an Email</h6>
                                                                <p class="fs--1 text-600 mb-0">Got an email for previous year sale report</p>
                                                                </div>
                                                                <div class="col-auto">
                                                                <p class="fs--2 text-500 mb-0">2m ago</p>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 timeline timeline-primary timeline-past pb-card">
                                                            <div class="col-auto ps-4 ms-2">
                                                            <div class="ps-2">
                                                                <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span class="text-primary fas fa-archive"></span></div>
                                                            </div>
                                                            </div>
                                                            <div class="col">
                                                            <div class="row gx-0 border-bottom pb-card">
                                                                <div class="col">
                                                                <h6 class="text-800 mb-1">Emma archived a board</h6>
                                                                <p class="fs--1 text-600 mb-0">A finished project's board is archived recently</p>
                                                                </div>
                                                                <div class="col-auto">
                                                                <p class="fs--2 text-500 mb-0">26m ago</p>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 timeline timeline-primary timeline-current pb-card">
                                                            <div class="col-auto ps-4 ms-2">
                                                            <div class="ps-2">
                                                                <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span class="text-primary fas fa-code"></span></div>
                                                            </div>
                                                            </div>
                                                            <div class="col">
                                                            <div class="row gx-0 border-bottom pb-card">
                                                                <div class="col">
                                                                <h6 class="text-800 mb-1">Falcon v3.0.0 released with new features</h6>
                                                                <p class="fs--1 text-600 mb-0">Falcon new version is released successfully with new Dashboards</p>
                                                                </div>
                                                                <div class="col-auto">
                                                                <p class="fs--2 text-500 mb-0">1h ago</p>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 timeline timeline-primary  pb-card">
                                                            <div class="col-auto ps-4 ms-2">
                                                            <div class="ps-2">
                                                                <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span class="text-primary fas fa-code-branch"></span></div>
                                                            </div>
                                                            </div>
                                                            <div class="col">
                                                            <div class="row gx-0 border-bottom pb-card">
                                                                <div class="col">
                                                                <h6 class="text-800 mb-1">Rowan shared a link to the board</h6>
                                                                <p class="fs--1 text-600 mb-0">A link is shared with attachments</p>
                                                                </div>
                                                                <div class="col-auto">
                                                                <p class="fs--2 text-500 mb-0">3h ago</p>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="row g-3 timeline timeline-primary">
                                                            <div class="col-auto ps-4 ms-2">
                                                            <div class="ps-2">
                                                                <div class="icon-item icon-item-sm rounded-circle bg-200 shadow-none"><span class="text-primary far fa-file-code"></span></div>
                                                            </div>
                                                            </div>
                                                            <div class="col">
                                                            <div class="row gx-0">
                                                                <div class="col">
                                                                <h6 class="text-800 mb-1">Anna updated a file</h6>
                                                                <p class="fs--1 text-600 mb-0">Fixed some bugs and spelling errors on this update</p>
                                                                </div>
                                                                <div class="col-auto">
                                                                <p class="fs--2 text-500 mb-0">4h ago</p>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="tab-produits" role="tabpanel" aria-labelledby="produits-tab">
                                            <div class="mt-3">
                                                <table class="table fs--1 mt-3">
                                                    <tbody>
                                                        
                                                        <tr>
                                                            <td class="bg-100" style="width: 30%;">Type</td>
                                                            <td><?= $produit['type'] ?></td>
                                                        </tr>
                                                        <?php if($produit['type'] == "mono"): ?>
                                                        <tr>
                                                            <td class="bg-100" style="width: 30%;">Nom</td>
                                                            <td><?= $produit['liste'][0]['nom'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bg-100" style="width: 30%;">Description</td>
                                                            <td><?= $produit['liste'][0]['description'] ?></td>
                                                        </tr>
                                                        <?php else: ?>
                                                        <tr>
                                                            <td class="bg-100" style="width: 30%;">Liste des produits</td>
                                                            <td>
                                                                <ul>
                                                                    <?php foreach($produit['liste'] as $element): ?>
                                                                    <li>
                                                                        <div>
                                                                            <h5><?= $element['nom'] ?></h5>
                                                                            <p><?= $element['description'] ?></p>
                                                                        </div>
                                                                    </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <?php endif; ?>

                                                        <tr>
                                                            <td class="bg-100" style="width: 30%;">concept</td>
                                                            <td><?= $produit['concept'] ?></td>
                                                        </tr>

                                                        <tr>
                                                            <td class="bg-100" style="width: 30%;">Canaux d'achat</td>
                                                            <td><?= $produit['cibles']['canaux_achat'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bg-100" style="width: 30%;">Fréquence d'achat</td>
                                                            <td><?= $produit['cibles']['frequence_achat'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bg-100" style="width: 30%;">Montant d'achat</td>
                                                            <td><?= $produit['cibles']['montant_moyen'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bg-100" style="width: 30%;">Tranche d'âge</td>
                                                            <td><?= $produit['cibles']['tranche_age'] ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="bg-100" style="width: 30%;">Genre</td>
                                                            <td><?= $produit['cibles']['genre'] ?></td>
                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="tab-specifications" role="tabpanel" aria-labelledby="specifications-tab">
                                            <table class="table fs--1 mt-3">
                                                <tbody>
                                                    
                                                    <tr>
                                                        <td class="bg-100" style="width: 30%;">Positionnement</td>
                                                        <td><?= $personae['positionnement'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-100" style="width: 30%;">Traits de caractère</td>
                                                        <td><?= $personae['personnalite']['traits_caractere'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-100" style="width: 30%;">Intérêts personnels</td>
                                                        <td><?= $personae['personnalite']['interets_personnels'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-100" style="width: 30%;">Qualités</td>
                                                        <td><?= $personae['personnalite']['qualite'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-100" style="width: 30%;">Défaut</td>
                                                        <td><?= $personae['personnalite']['defaut'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-100" style="width: 30%;">Passions</td>
                                                        <td><?= $personae['personnalite']['passion'] ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="bg-100" style="width: 30%;">Peurs</td>
                                                        <td><?= $personae['personnalite']['peur'] ?></td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="tab-pane fade" id="tab-description" role="tabpanel" aria-labelledby="description-tab">
                                            <div class="mt-3">
                                                <div id="recapitulatif" class="mb-3">
                                                    <?php if(isset($recapitulatif)): ?>
                                                        <div id="recapitulatif" class="mb-3">
                                                            <h3>Récapitulatif</h3>
                                                            <?php echo $recapitulatif ?>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if(isset($profil_type)): ?>
                                                        <div id="profil_type" class="mb-3">
                                                            <h3>Profil type</h3>
                                                            <?php echo $profil_type ?>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if(isset($motivations)): ?>
                                                        <div id="motivations" class="mb-3">
                                                            <h3>Motivations</h3>
                                                            <ul>
                                                                <?php foreach($motivations as $motivation): ?>
                                                                    <li><?= $motivation['motivation'] ?></li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if(isset($besoins)): ?>
                                                        <div id="besoins" class="mb-3">
                                                            <h3>Besoins</h3>
                                                            <ul>
                                                                <?php foreach($besoins as $besoin): ?>
                                                                    <li><?= $besoin['besoin'] ?></li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if(isset($positionnements)): ?>
                                                        <div id="positionnements" class="mb-3">
                                                            <h3>Positionnements</h3>
                                                            <ul>
                                                                <?php foreach($positionnements as $positionnement): ?>
                                                                    <li><?= $positionnement['positionnement'] ?></li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    <?php endif; ?>

                                                    <?php if(isset($profils)): ?>
                                                        <div id="profils" class="mb-3">
                                                            <h3>Profils</h3>
                                                            <ul>
                                                                <?php foreach($profils as $profil): ?>
                                                                    <li><?= $profil['profil'] ?></li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    <?php endif; ?>
                                                    
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