
<footer class="hero is-dark is-small">
  <div class="hero-body">
    <div class="container has-padding-top-40">
      <div class="is-flex wrap py-6">
        <div class="column is-2" data-aos="fade-in" data-aos-delay="400">
          <h3 class="is-size-6 is-uppercase has-margin-bottom-10">Nosotros</h3>
          <div class="todosm">
            <?php echo wp_nav_menu(['menu' => 'Nosotros', 'menu_class' => '', 'echo' => false]); ?>

          </div>
        </div>

        <div class="column is-2" data-aos="fade-in" data-aos-delay="400">
          <h3 class="is-size-6 is-uppercase has-margin-bottom-10">Recursos</h3>
          <div class="todosm">
            <?php echo wp_nav_menu(['menu' => 'Recursos', 'menu_class' => '', 'echo' => false]); ?>

          </div>
        </div>

        <div class="column is-3" data-aos="fade-in" data-aos-delay="400">
          <h3 class="is-size-6 is-uppercase has-margin-bottom-10">Legal</h3>
          <div class="todosm">
            <?php echo wp_nav_menu(['menu' => 'Legal', 'menu_class' => '', 'echo' => false]); ?>

          </div>
        </div>
        <div class="column is-2" data-aos="fade-in" data-aos-delay="400">
          <h3 class="is-size-6 is-uppercase has-margin-bottom-10">S&iacute;guenos</h3>
          <div class="todosm">
            <a href="#" class="ico-rrss has-text-dark has-margin-right-5"><span width="18" height="18" data-feather="instagram"></span></a>
            <a href="#" class="ico-rrss has-text-dark has-margin-right-5"><span class="bg-svg" width="18" height="18" data-feather="facebook"></span></a>
            <a href="#" class="ico-rrss has-text-dark has-margin-right-5"><span class="bg-svg" width="18" height="18" data-feather="twitter"></span></a>
          </div>
        </div>
        <div class="column is-2" data-aos="fade-in" data-aos-delay="400">
          <h3 class="is-size-6 is-uppercase has-margin-bottom-10">Contacto</h3>
          <div class="todosm">
            <?php echo $__env->make('components.info-contacto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
          </div>
        </div>
      </div>
      <div class="level is-paddingless">
        <div class="level-left">
          <div class="column is-size-7">
            Copyright &copy; 20<?php echo e(date(y)); ?>. Todos los derechos reservados. Intraders
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php /**PATH C:\laragon\www\cointrader\web\app\themes\cointraders\resources\views/partials/footer.blade.php ENDPATH**/ ?>