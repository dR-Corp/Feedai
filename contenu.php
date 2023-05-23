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
                                        <h4 class="text-primary fw-bold mb-0">Contenu <span
                                                class="text-info fw-medium">web</span></h4>
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
                <?php
                        include('db_connexion.php');
                        $projet_id = 8;
                        $sql = 'SELECT * FROM historics WHERE projet_id = :projet_id ORDER BY projet_id DESC LIMIT 1';
                        // $stmt = $db->query($sql);
                        // $historics = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        $stmt = $db->prepare($sql);
                        $stmt->execute(array(':projet_id' => $projet_id));
                        $historics = $stmt->fetch(PDO::FETCH_ASSOC);
                        
                    ?>

                <div class="row g-0">
                    <div class="col-lg-8 pe-lg-2">
                        <div class="card mb-3">
                            <div class="card-header d-flex justify-content-between">
                                <h5 class="mb-0">Contenu généré</h5>
                                <div class="d-flex">
                                    <div class="d-none d-md-block">
                                        <button class="btn btn-falcon-default btn-sm ms-2" type="button"><span
                                                class="fas fa-chevron-left"></span></button>
                                        <button class="btn btn-falcon-default btn-sm ms-2" type="button"><span
                                                class="fas fa-chevron-right"></span></button>
                                    </div>
                                    
                                    <div class="dropdown font-sans-serif">
                                        <button
                                            class="btn btn-falcon-default text-600 btn-sm ms-2" id="btn-update"
                                            type="button" aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-edit"></span></button>
                                        <button
                                            class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none ms-2"
                                            type="button" id="email-settings" data-bs-toggle="dropdown"
                                            data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-save"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end border py-2"
                                            aria-labelledby="email-settings"><a class="dropdown-item"
                                                href="#!" id="btn-ajouter"><span class="fas fa-database mx-2"></span> Ressource</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#!"><span class="fas fa-file mx-2"></span> Document</a>
                                        </div>
                                        <button
                                            class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none ms-2"
                                            type="button" id="email-settings" data-bs-toggle="dropdown"
                                            data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span
                                                class="fas fa-expand"></span></button>
                                                <!-- class="fas fa-expand-arrows-alt"></span></button> -->
                                    </div>      
                                </div>
                            </div>
                            <div class="card-body bg-light">
                                
                                <div id="div-redaction" class="border p-4">Aucun contenu à afficher pour le moment !</div>

                                <form id="form-edit-redaction" class="row g-3">
                                    <div class="col-lg-12">
                                        <label class="form-label" for="intro"><h5 class="fs-0" id="titrePrompt"><?php echo $historics['title'];?></h5></label>
                                        <textarea class="form-control py-4" readOnly id="details" name="intro" cols="30"
                                            rows="13">
                                            <?php if ($historics != null) :?>
                                                <?php echo json_decode($historics['details']);?>
                                           <?php endif;?>
                                        </textarea>
                                    </div>
                                    <!-- <div class="col-12 d-flex justify-content-end">
                                        <button class="btn btn-primary" type="submit">Update </button>
                                    </div> -->
                                </form>
                            </div>
                        </div>
                        <!-- <?php
                            include('db_connexion.php');
                            $projet_id = 8;
                            $sql = 'SELECT * FROM historics WHERE projet_id = :projet_id  ORDER BY id DESC';
                            $stmt = $db->prepare($sql);
                            $stmt->execute(array(':projet_id' => $projet_id));
                            $historics = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            if($historics != null):
                        ?> -->
                        <div class="card mb-3">
                            <div class="card-header">
                                <h5 class="mb-0">Historique</h5>
                            </div>
                            <div class="card-body bg-light" id="historic">
                            
                            </div>
                        </div>
                        <?php endif;?>

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
                                            <input class="form-control" id="prompt" type="text" name="prompt"
                                                placeholder="Entre votre requête ici" />
                                        </div>
                                        <a class="btn btn-falcon-primary btn-sm" id="btn-prompt" ><i id="form-activer-loader" class="fas fa-spinner fa-pulse"></i> Lancer</a>
                                    </form>
                                </div>
                            </div>
                            <?php
                                include('db_connexion.php');
                                $projet_id = 8;
                                $user_id = 1;
                                $sql = 'SELECT * FROM contenu_web WHERE projet_id = :projet_id AND user_id = :user_id ORDER BY id DESC';
                                $stmt = $db->prepare($sql);
                                $stmt->execute(array(':projet_id' => $projet_id,':user_id'=>$user_id));
                                $contentWeb = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                if($contentWeb != null):
                            ?>
                            <div class="card mb-3 overflow-hidden">
                                <div class="card-header">
                                    <h5 class="mb-0">Ressources</h5>
                                </div>
                                
                                <div class="card-body bg-light border-top" id="ressources">
                                    
                                </div>
                               
                            </div>
                            <?php endif ;?>

                            <div class="card mb-3">
                                <div class="card-header">
                                    <h5 class="mb-0">Suggestions de contenu</h5>
                                </div>
                                <div id="suggestions" class="card-body bg-light"></div>
                            </div>

                            <script>

                                var projet_id = 8;

                                function rediger_suggestion(id) {
                                    
                                    $.ajax({
                                        url: 'get_titre_suggestion.php',
                                        method: 'GET',
                                        data: {
                                            id: id
                                        },
                                        dataType: 'json',
                                        success: function(response) {
                                            console.log(response);
                                            var titre = response;
                                            var prompt = 'Redige moi un contenu web sur le titre ' + titre.contenu
                                            
                                            $("#prompt").val(prompt)
                                            supprimer_suggestion(titre.id)
                                        },
                                        error: function(xhr, status, error) {
                                            console.log("Une erreur s'est produite : " + error);
                                        }
                                    });

                                }
                                
                                function supprimer_suggestion(id) {
                                    
                                    $.ajax({
                                        url: 'del_titres_suggestions.php',
                                        method: 'GET',
                                        data: {
                                            id: id
                                        },
                                        dataType: 'json',
                                        success: function(response) {
                                            console.log(response);
                                            // actualisation de la liste des suggestions
                                            show_titres_suggestions(projet_id);
                                            // $("#suggestion_"+id).hide()
                                        },
                                        error: function(xhr, status, error) {
                                            console.log("Une erreur s'est produite : " + error);
                                        }
                                    });

                                }

                                $(document).ready(function() {
                                    projet_id = 8;
                                    show_titres_suggestions(projet_id);
                                });

                                function show_titres_suggestions(projet_id) { 

                                    var id_projet = 8; // à récupérer du projet actif

                                    $.ajax({
                                        url: 'get_titres_suggestions.php',
                                        method: 'GET',
                                        data: {
                                            id_projet: id_projet
                                        },
                                        dataType: 'json',
                                        success: function(response) {
                                            var titres = response;

                                            var cardBody = $('#suggestions');
                                            cardBody.html("")

                                            if(titres.length > 0) {

                                                $.each(titres, function(index, titre) {
                                                    var suggestion = $('<div id="suggestion_'+titre.id+'" class="suggestion"></div>');
                                                    var fsContainer = $('<div class="fs--1 d-flex justify-content-start align-items-start"></div>');
                                                    var iconContainer = $('<div class="d-flex px-2"></div>');
                                                    var redigerLink = $('<a href="#!" onclick="rediger_suggestion(' + titre.id + ')" class="mx-2" title="rediger"><i class="fas fa-pen"></i></a>');
                                                    var supprimerLink = $('<a href="#!" onclick="supprimer_suggestion(' + titre.id + ')" title="supprimer"><i class="fas fa-trash text-secondary"></i></a>');
                                                    var titreElement = $('<p></p>').text(titre.contenu);
                                                    var borderDiv = $('<div class="border-dashed-bottom mb-3"></div>');

                                                    iconContainer.append(redigerLink, supprimerLink);
                                                    fsContainer.append(iconContainer, titreElement);
                                                    suggestion.append(fsContainer, borderDiv);
                                                    cardBody.append(suggestion);
                                                });
                                            }
                                            else {
                                                cardBody.html('<div class="fs--1"><p>Aucune suggestion</p></div>');
                                            }
                                        },
                                        error: function(xhr, status, error) {
                                            console.log("Une erreur s'est produite : " + error);
                                        }
                                    });
                                }

                            </script>

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
        
        $('#form-edit-redaction').hide()

        $('#btn-update').on('click', function() {
            $('#details').prop('readOnly', false);
            $('#form-edit-redaction').show()
            $('#div-redaction').hide()
        });
        
        $('#form-activer-loader').hide();
        // $('#div-redaction').hide()

        $('#btn-prompt').on('click', function() {
            
            $('#form-edit-redaction').hide()

            $('#form-activer-loader').show();
            $('.btn-falcon-primary').addClass('disabled');

            //on ajoute chaque élément dans la variable object prompt
            prompt_req = $('#prompt').val();
            user_id = 1;
            projet_id = 8;
            //on fait une requete ajax, pour ajouter à la base de données
            $.ajax({
                url: 'Projet/detail.php',
                method: 'POST', 
                data: {id: projet_id}, 
                success: async function(response) {
                    // $('#result').html(response);
                    console.log(prompt_req);

                    projet = JSON.parse(response);

                    let prompt = 'Soit les informations suivantes sur un projet e-commerce. ' + JSON.stringify(projet) + '. ';

                    // const prompt_all = `Voici les informations suivantes sur un projet e-commerce : ${JSON.stringify(projet)}.
                    //     À partir de ces informations, veuillez utiliser vos connaissances sur les projets e-commerce et le web marketing pour générer :
                    //     ${prompt_req} 
                    //     Veuillez renvoyer le résultat sous forme d'un objet JSON avec une structure similaire à celle-ci : {"titre": "","body":""}
                    //     Assurez-vous que le résultat peut être analysé par JSON.parse() sans erreur.`;

                    const prompt_all = `Voici les informations suivantes sur un projet e-commerce : ${JSON.stringify(projet)}.
                        À partir de ces informations, veuillez utiliser vos connaissances sur les projets e-commerce et le web marketing pour générer :
                        ${prompt_req} 
                        Veuillez renvoyer le résultat sous forme d'un objet JSON avec une structure similaire à celle-ci : {"titre": "","body":""}.
                        Le contenu de body doit âtre donc contenu web redigé de A à Z (article de blog ou fiche de produit, ...) et structuré en html avec titre (balises h3) et sous titre (balises h5).
                        Assurez-vous que l'onjet final peut être analysé par JSON.parse() sans erreur.`;

                    const all = await send_request(prompt_all)
                    // console.log(all);
                    console.log(all.titre);
                    console.log(all.body);
                    $('#details').html(all.body)

                    $('#div-redaction').show()
                    $('#div-redaction').html(all.body)

                    $('#titrePrompt').html(all.titre)     

                   // Créez un objet historic et assignez les valeurs correspondantes
                    const historic = {
                        projet_id: projet.id,
                        titre: all.titre,
                        details: all.body,
                        type: "web"
                    };
                    // console.log(historic);

                    //on fait une requete ajax, pour ajouter à la base de données
                    $.ajax({
                        url: 'Historics/ajouter.php',
                        method: 'POST', 
                        data: historic, 
                        success: function(response) {
                            // $('#result').html(response);
                            console.log(response);
                            listHistorics(projet_id);
                            var user_id = 1
                            listRessource(user_id,projet_id);
                            // window.location.replace("contenu.php.php");
                        }
                    });

                    $('#form-activer-loader').hide();
                    $('.btn-falcon-primary').removeClass('disabled');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus, errorThrown);
                }
            });
        
        });

        $('#btn-ajouter').on('click', function() {
            //on ajoute chaque élément dans la variable object prompt
          
            const contentWeb = {
                projet_id : 2,
                user_id : 1,
                titre : $('#titrePrompt').text(),
                contenu : $('#details').val(),
            }
            console.log(contentWeb);
            //on fait une requete ajax, pour ajouter à la base de données
            $.ajax({
                url: 'ContentWeb/ajouter.php',
                method: 'POST', 
                data: contentWeb, 
                success: async function(response) {
                    // $('#result').html(response);
                    console.log(response);
                    listHistorics(projet_id);
                    var user_id = 1
                    listRessource(user_id,projet_id);
                   
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus, errorThrown);
                }
            });
        
        });

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

        function listHistorics(projet_id){
             //on fait une requete ajax, pour récupérer une liste des historiques à la base de données
            $.ajax({
                url: 'Historics/liste.php',
                method: 'POST', 
                data: { id: projet_id }, 
                success: function(response) {
                    // $('#result').html(response);
                    var historics = JSON.parse(response);
                    console.log(historics.length);

                    var html = '';
                    for (var i = 0; i < historics.length; i++) {
                        html += '<div class="bg-light border-bottom mt-3">' +
                                    '<p class="fs-0">' + historics[i].title + '</p>' +
                                '</div>';
                    }

                    $('#historic').html(html);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus, errorThrown);
                }
            });
        }

        function listRessource(user_id,projet_id){
             //on fait une requete ajax, pour récupérer une liste des historiques à la base de données
             const data = {
                projet_id : 8,
                user_id : 1
             }
            $.ajax({
                url: 'ContentWeb/liste.php',
                method: 'POST', 
                data: data, 
                success: function(response) {
                    // $('#result').html(response);
                    var contentWeb = JSON.parse(response);

                    var html = '';
                    for (var i = 0; i < contentWeb.length; i++) {
                        html += '<div class="bg-light border-bottom mt-3">' +
                                    '<p class="fs-0">' + contentWeb[i].titre + '</p>' +
                                '</div>';
                    }

                    $('#ressources').html(html);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error(textStatus, errorThrown);
                }
            });
        }

        $(document).ready(function() {
            // Appel de la fonction listHistorics() après le chargement complet de la page
            var projet_id = 8;
            var user_id = 2 ;
            listHistorics(projet_id);
            listRessource(user_id,projet_id);
        });

        
    </script>

</body>

</html>