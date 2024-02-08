<!DOCTYPE html>

  <!-- HEAD TAG START -->
  <?php echo $page->tpl_head; ?>
  <!-- HEAD TAG END -->

  <body>

    <!-- Navbar -->
    <?php echo $page->tpl_navbar; ?>
    <!-- /.navbar -->

    <!-- Header -->
    <header class="header p-0">
        <div class="h-500" data-provide="map" data-lat="6.863878" data-lng="79.91981" data-zoom="13.2"
            data-marker-lat="6.863878" data-marker-lng="79.91981"
            data-info="&lt;strong&gt;Deviitor&lt;/strong&gt;&lt;br&gt;46B Kumbukgahapokuna Rd, Udahamull, Nugegoda 10250, Sri Lanka."
            data-style="light" data-remove-controls="true"></div>
    </header><!-- /.header -->

    <!-- Main Content -->
    <main class="main-content">


        <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Contact form
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
        <section class="section">
            <div class="container">

                <form class="row gap-y" action="" method="POST" data-form="mailer">
                    <div class="col-lg-7">
                        <h3>Contact Us</h3>
                        <br>

                        <div class="alert alert-success d-on-success">We received your message and will contact you back
                            soon.</div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input class="form-control form-control-lg" type="text" name="name" placeholder="Name">
                            </div>

                            <div class="form-group col-md-6">
                                <input class="form-control form-control-lg" type="email" name="email"
                                    placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <textarea class="form-control form-control-lg" rows="4" placeholder="Message"
                                name="message"></textarea>
                        </div>

                        <button class="btn btn-lg btn-primary" type="submit">Send message</button>

                    </div>


                    <div class="col-lg-4 ml-auto text-center text-lg-left">
                        <hr class="d-lg-none">
                        <h3>Find Us</h3>
                        <br>
                        <p>46B Kumbukgaha pokuna Rd,
                            <br>Udahamulla, Nugegoda, 10250
                            <br>
                            Sri Lanka.
                        </p>
                        <p>+94 (077) 070 7945<br>+94 (076) 126 7522</p>
                        <p>hello@deviitor.com</p>
                        <div class="fw-400">Follow Us</div>
                        <div class="social social-sm social-inline">
                            <a class="social-facebook" href="https://www.facebook.com/deviitorgroup"><i
                                    class="fa fa-facebook"></i></a>
                            <a class="social-twitter" href="https://twitter.com/deviitorgroup"><i
                                    class="fa fa-twitter"></i></a>
                        </div>
                    </div>
                </form>

            </div>

        </section>



    </main><!-- /.main-content -->


    <!-- Footer -->
    <?php echo $page->tpl_footer; ?>
    <!-- /.footer -->
</body>

</html>