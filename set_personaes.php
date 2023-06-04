<?php
session_start();
$niche_id = $_POST['niche_id'];

$personaes = json_decode(file_get_contents("./data/personae.json"), true);

// Filtre les éléments dont la propriété "niche_id" est égale à 2
$personaesFiltered = array_filter($personaes, function($element) use ($niche_id) {
    return $element['niche_id'] == $niche_id;
});

if($personaesFiltered):

    $personae = reset($personaesFiltered);

    // echo json_encode($personae);

    ?>
    <div class="mb-3">
        <label class="form-label font-weight-bold" for="positionnement">Positionnement*</label>
        <select id="positionnement" class="form-select js-choices" size="1" multiple="multiple" required="required">
            <option value=""></option>
            <option value="Site de vente classique">Site de vente classique</option>
            <option value="Marque Ecommerce">Marque Ecommerce</option>
        </select>
    </div>
    <script>
        var selectElement = document.querySelector('.js-choices');

        var choices = new Choices(selectElement, {
            removeItemButton: true,
            placeholder: true,
        });

        selectElement.addEventListener('change', function(e) {
            var selectedValues = choices.getValue(true);
            var elementId = event.target.id;
            projet.details.personae.positionnement = selectedValues
            console.log(projet.details.personae.positionnement);
        });

    </script>

    <label class="form-label" for="niche">Personnalité*</label>
    <fieldset class="mb-3" style="padding: 20px; border-left: 0.5px dashed gray;">
    <div class="row">
    <?php

    foreach($personae['personnalite'] as $personnalite):
    ?>
        <div class="col-sm-6">
            <div class="mb-3">
                <label class="form-label" for="niche"><?= $personnalite['name'] ?>*</label>
                <div class="d-flex mb-2">
                    <button id="btn-list-personae" class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal-list-personae-<?= $personnalite['id'] ?>">
                        <span class="fas fa-list ms-2" data-fa-transform="shrink-3"></span> Choisir
                    </button>
                </div>
                <div id="choosed-personae-element-<?= $personnalite['id'] ?>" class="text-sm text-xs fs--1"></div>
            </div>
        </div>
        <div class="modal fade" id="modal-list-personae-<?= $personnalite['id'] ?>" data-bs-keyboard="false" data-bs-backdrop="static" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg mt-6" role="document">
            <div class="modal-content border-0">
                <div class="position-absolute top-0 end-0 mt-3 me-3 z-index-1">
                <button type="button" class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
                <div class="bg-light rounded-top-lg py-3 ps-4 pe-6">
                    <h4 class="mb-1" id="modalListNicheLabel">Liste des <?= $personnalite['name'] ?></h4>
                    <p class="fs--2 mb-0">Avec <a class="link-600 fw-semi-bold" href="#!">description</a></p>
                </div>
                <div class="p-4">
                    
                    <div class="row">
                        <?php 
                        $elements = $personnalite['elements'];
                        foreach($elements as $element): 
                        ?>
                        <div class="col-lg-11 mb-4">
                            <div class="d-flex"><span class="fa-stack ms-n1 me-3"><i class="fas fa-circle fa-stack-2x text-200"></i><i class="fa-inverse fa-stack-1x text-primary fas fa-align-left" data-fa-transform="shrink-2"></i></span>
                                <div class="flex-1">
                                    <h5 class="mb-2 fs-0"><a href="#" class="element-personae-<?= $personnalite['slug'] ?>" onclick="choisirElementPersonea(event, JSON.stringify(<?= htmlentities(json_encode($element['name'])) ?>), JSON.stringify(<?= htmlentities(json_encode($personnalite['id'])) ?>), JSON.stringify(<?= htmlentities(json_encode($personnalite['slug'])) ?>) )"><?= $element['name'] ?></a></h5>
                                    <div class="fs--2">
                                        <p class="text-word-break fs--1"> <?= $element['description'] ?> </p>
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

    <?php
    endforeach;
    ?>
    </div>
<?php
else:
    echo "Le personae type n'est pas encore disponible, pour le niche que vous avez eu à choisir !";
endif;
?>