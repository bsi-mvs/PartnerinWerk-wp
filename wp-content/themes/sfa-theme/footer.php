<?php if(!is_front_page()) : ?>
  <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <?php if(is_active_sidebar('sidebar')): ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div><!-- /.blog-sidebar -->
<?php endif; ?>
  </div><!-- /.row -->

  </div><!-- /.container -->
<footer class="blog-footer">
  <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>
      </main>
      <?php wp_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script> 
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap/bootstrap.bundle.js" type="text/javascript"></script>

    <script type="text/javascript">
      $(function() {        
        $('.nav').children(':last-child').removeClass("nav-item");
        $('.nav').children(':last-child').addClass("nav-item-last");
      });    
    </script>
  </body>
</html>