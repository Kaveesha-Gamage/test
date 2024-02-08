<!DOCTYPE html>

  <!-- HEAD TAG START -->
  <?php echo $page->tpl_head; ?>
  <!-- HEAD TAG END -->

  <body class="layout-centered bg-gray">


    <!-- Main Content -->
    <main class="main-content text-center pb-lg-8">
      <div class="container">

        <h1 class="display-1 text-muted mb-7">Page Not Found</h1>
        <p class="lead">Seems you're looking for something that doesn't exist.</p>
        <br>
        <button class="btn btn-secondary w-150 mr-2" type="button" onclick="window.history.back();">Go back</button>
        <a class="btn btn-secondary w-150" href="./">Return Home</a>

      </div>
    </main><!-- /.main-content -->


      <!-- Footer -->
      <?php echo $page->tpl_footer_script; ?>
      <!-- /.footer -->

  </body>
</html>
