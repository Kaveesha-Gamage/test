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
        <div class="h-500" data-provide="map" data-lat="-37.8898196" data-lng="145.1686677" data-zoom="13.2"
            data-marker-lat="-37.8898196" data-marker-lng="145.1686677"
            data-info="&lt;strong&gt;Deviitor&lt;/strong&gt;&lt;br&gt; Unit 2, 770 Waverley Road, Glen Waverley Victoria 3150, Australia"
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
                        <p>
                        Unit 2,
                        <br> 770 Waverley Road,
                        <br> Glen Waverley Victoria
                        <br> 3150, Australia
                        </p>
                        <p>
                        <a href="tel:+61406245109">+61 40 624 5109</a>
                        </p>
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