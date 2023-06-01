<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
<script src="vendors/popper/popper.min.js"></script>
<script src="vendors/bootstrap/bootstrap.min.js"></script>
<script src="vendors/anchorjs/anchor.min.js"></script>
<script src="vendors/is/is.min.js"></script>
<script src="vendors/echarts/echarts.min.js"></script>
<script src="vendors/fontawesome/all.min.js"></script>
<script src="vendors/lodash/lodash.min.js"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
<script src="vendors/list.js/list.min.js"></script>
<script src="assets/js/theme.js"></script>
<script src="vendors/fullcalendar/main.min.js"></script>
<script src="assets/js/flatpickr.js"></script>
<script src="vendors/dayjs/dayjs.min.js"></script>
<script src="vendors/lottie/lottie.min.js"> </script>
<script src="vendors/prism/prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>

<script>

    //gestion du chargement de projet

    function load_projet(user_id) {
    
        $.ajax({
            url: 'Projet/liste.php',
            method: 'POST', 
            data: {user_id:user_id},
            dataType: 'json',
            success: function(projets) {

                var projects_select = $('#projets');
                var projects_elements = ""
                if(projets.length > 0) {

                    if(!localStorage.getItem('active_project')) localStorage.setItem('active_project', projets[0].id);
                    
                    active_project = localStorage.getItem('active_project');

                    $.each(projets, function(index, projet) {
                        projects_elements += `<option ${active_project == projet.id ? 'selected' : ''} value="${projet.id}">${projet.nom}</option>`;
                    });

                    projects_select.html(projects_elements);

                }
                else {
                    projects_select.html('<option selected disabled>Aucun projet !</option>');
                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error(textStatus, errorThrown);
            }
        });

    }      

    // INITIALISATION DES VALEURS

    var user_id = 1;

    var active_project = ""

    var projet_id = ""

    load_projet(user_id); // la valeur de active_project sera initialisée à ce niveau 

    var projet_id = active_project;

    // on va aussi procéder à une révision de cette façon de faire la chose, car si une mise à jour est faire par l'utilisateur dans le localStorage, il pourrait y faire un injection

    // en cas de sélection d'un nouveau projet
    
    $('#projets').on('change', function() {

        var active_project = $(this).val();
        
        localStorage.removeItem('active_project');

        localStorage.setItem('active_project', active_project);
        
        location.reload();
    });


</script>

<script>
    // gestion du loader
    var setLoader = (element, text) => {
        $('#action-loader').show()
    }
    var setLoaderText = (text) => {
        $('#loader-text').html(text);
    }
    var changeLoadericon = (icon) => {
        $('#loader-icon').toggleClass('fa-spinner fa-spin fa-'+icon);
    }
    var unSetLoader = () => {
        // $('#action-loader').remove();
        $('#action-loader').hide()
    }
    $('#action-loader').hide();

    // gestion du toast
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
</script>