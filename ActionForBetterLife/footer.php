
       <!-- Footer -->
    <footer>
      <div class="row pt-4">
        <div class="col-12 text-center">
          <div class="social-icon col-12">
            <a href="http://www.doosan.com/rss_en.php">
              <i class="fa fa-rss" aria-hidden="true" title="RSS"></i>
            </a>
            <a href="https://www.youtube.com/Doosan" target="_blank">
              <i class="fa fa-youtube-play" aria-hidden="true" title="YouTube"></i>
            </a>
          </div>
          <div class="link-container">
            <a href="http://www.doosan.com/en/contact-us/">Contact Us</a> &#124; 
            <a href="http://www.doosan.com/en/legal/">Legal Notice</a> &#124; 
            <a href="http://www.doosan.com/en/terms/">Term of Use</a> &#124; 
            <a href="http://www.doosan.com/en/privacy/">Privacy</a>
          </div>
          <p>&copy; 2018 Doosan Corporation.</p>
        </div>
      </div>
    </footer>

   <!-- jQuery.slim.min.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- popper.min.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- bootstrap.min.js -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <!-- Form Validation -->
    <script>
      (function() {
        'use strict';

        window.addEventListener('load', function() {
            var form = document.getElementById('needs-validation');
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                  event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          }, false);
      })();
    </script>    	
