  <div class="slide-alert-group"></div>
  <div class="interrupt">
    <div class="interrupt-content">
      <div class="interrupt-content-inner">
        <div class="text-center">
          <div class="mb-2">
            <span class="fas fa-cog fa-4x fa-spin fa-fw"></span>
          </div>
          <h3>Processing request...</h3>
        </div>
      </div>
    </div>
  </div>
  <!-- Post Script -->
  <script>
    $(document).ready(function() {
      $('body').on('submit', '#login-form', function() {
        showInterrupt();

        delay_ajax_request(1000, 'core/ajax/login.php', 'POST', $(this).serialize(), function(response) {
          hideInterrupt();
          
          slide_alert(response.status, response.message);

          if(response.status === 'ok') {
            window.location = response.redirect_to;
          }
        });

        return false;
      });
    });
  </script>
</body>
</html>
