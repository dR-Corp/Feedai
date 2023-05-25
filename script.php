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
<!-- <script src="vendor/jquery/jquery.js"></script> -->


<script>
    //gestion du loader
    var setLoader = (element, text) => {
        // element.prepend('<div id="action-loader" class="text-center fa-2x text-secondary h-100 w-100" style="padding-top: 40vh; position: fixed; z-index: 99999; top: 0; left: 0; background-color: rgba(0,0,0,0.8);">'+
        //     '<i id="loader-icon" class="fas fa-spinner fa-2x fa-spin mt-1"></i>'+
        //     '<div id="loader-text" class="text-sm mt-3">'+text+'</div>'+
        // '</div>');
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
</script>

<script src="vendors/fullcalendar/main.min.js"></script>
<script src="assets/js/flatpickr.js"></script>
<script src="vendors/dayjs/dayjs.min.js"></script>
<script src="vendors/lottie/lottie.min.js"> </script>
<script src="vendors/prism/prism.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>

<!-- <div id="action-loader" class="text-center h-100 w-100" style="padding-top: 40vh; position: fixed; z-index: 99999; top: 0; left: 0; background-color: rgba(0,0,0,0.25);">
    <div class="lottie mx-auto" style="width: 100px; height: 100px" data-options='{"path":"assets/img/animated-icons/loading-square.json"}'></div>
</div> -->