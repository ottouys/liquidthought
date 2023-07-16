<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */
?>
</div><!-- #main .wrapper -->
<footer id="colophon" role="contentinfo">
  <div class="container">
    <div class="row">
      <div class="col footer-main-info">
        <h2>Stay up to date</h2>
        <h6>Whether you want to stay in the loop with Happy Hunny updates or just say "hi" when you miss us, subscribe
          to our mailing list today.</h6>
        <div id="newsletter-signup">
          <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8"
            class="newsletter-form">
            <div class="fields">
              <input id="NewsletterForm--footer" type="email" name="contact[email]" class="field__input" value=""
                aria-required="true" autocorrect="off" autocapitalize="off" autocomplete="email" placeholder="Email"
                required="">
              <button type="submit" class="newsletter-form__button field__button" name="commit" id="Subscribe"
                aria-label="Subscribe">
                Sign me up
              </button>
            </div>
          </form>
          <span>We don't do spam. While our newsletters are short and always sweet, you can unsubscribe at any
            time.</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-8">

      </div>
      <div class="col-4" class="socials">

      </div>
    </div>
    <div class="seperator">
      <hr />
    </div>
    <div class="row copyright">
      <p>Copyright © 2022 Happy Hunny | All rights reserved</p>
      <div>
        <img src="//happyhunny.co.za/cdn/shop/t/2/assets/footer-logo-visa.svg?v=65670134466400942721654162161"
          alt="mastercard">
        <img src="//happyhunny.co.za/cdn/shop/t/2/assets/footer-logo-mastercard.svg?v=173426895483975008841654162160"
          alt="mastercard">
      </div>
    </div>
  </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Search</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form">
          <?php get_search_form(); ?>
        </div>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
  integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>

</html>