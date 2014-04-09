      </div>
    </main>

    <footer class="silvereffect-invert">
      <div class="row">
        <?php dynamic_sidebar('footer-widget-area'); ?>
      </div>
    </footer>

    <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.1/js/vendor/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.1/js/foundation.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.1/js/foundation/foundation.orbit.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/foundation/5.2.1/js/foundation/foundation.topbar.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script type="text/javascript">
      var $buoop = {};
      $buoop.ol = window.onload;
      window.onload = function() {
        try {
          if ($buoop.ol) {
            $buoop.ol();
          }
        }
        catch (e) {}

        var e = document.createElement("script");
        e.setAttribute("type", "text/javascript");
        e.setAttribute("src", "//browser-update.org/update.js");
        document.body.appendChild(e);
      };
    </script>

    <?php wp_footer(); ?>
  </body>
</html>
