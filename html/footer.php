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
    <script type="text/javascript">
      $(document).foundation({
        orbit: {
          animation: 'fade',
          timer_speed: 5000,
          pause_on_hover: true,
          resume_on_mouseout: false,
          animation_speed: 4000,
          navigation_arrows: true,
          slide_number: false,
          timer_container_class: 'timer',
          timer_progress_class: 'timer-progress',
          timer_show_progress_bar: false,
          bullets: false
        }
      });
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
