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
