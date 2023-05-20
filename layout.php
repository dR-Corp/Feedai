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