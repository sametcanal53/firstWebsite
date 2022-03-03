<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-color:#000">
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <div class="credits">
              Telif Hakkı &copy;
              <span id="copyright">
                <script>
                  document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script>
              </span>
              - Tüm Hakları Saklıdır
            </div>
            <div class="credits">
              <strong><a href="https://sametcanal.com/tr/index" style="color:#0ff;">Sametcan AL</a></strong> tarafından tasarlanmıştır
            </div>
            <a href="https://www.facebook.com/sametcanal53" target="_blank"><i class="fa fa-facebook-f"></i></a>
            <a class="ml-2" href="https://www.twitter.com/sametcanal53" target="_blank"><i class="fa fa-twitter"></i></a>
            <a class="ml-2" href="https://www.linkedin.com/in/sametcanal53" target="_blank"><i class="fa fa-linkedin"></i></a>
            <a class="ml-2" href="https://www.instagram.com/sametcanal53" target="_blank"><i class="fa fa-instagram"></i></a>
            <a class="ml-2" href="https://www.github.com/sametcanal53" target="_blank"><i class="fa fa-github"></i></a>
          </div>
        </div>
  </footer>
</section>
<!--/ Section Contact-footer End /-->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/jquery/jquery-migrate.min.js"></script>
<script src="../lib/popper/popper.min.js"></script>
<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/counterup/jquery.waypoints.min.js"></script>
<script src="../lib/counterup/jquery.counterup.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../lib/lightbox/js/lightbox.min.js"></script>
<script src="../lib/typed/typed.min.js"></script>

<!-- Template Main Javascript File -->
<script src="../js/main.js"></script>


<?php

if (isset($_GET["mail"])) {
?>
  <script>
    $(function() {
      $("#yonlendir1").modal();
    });
  </script>
<?php
}
?>

<?php

if (isset($_GET["email"])) {
?>
  <script>
    $(function() {
      $("#yonlendir2").modal();
    });
  </script>
<?php
}
?>


</body>

</html>