<?php $class= isset($args['class']) ? $args['class'] : ''; ?>
<section class="c-today <?php echo $class; ?>">
  <?php date_default_timezone_set ('Asia/Tokyo');  ?>
  <p class="c-today__date"><?php echo date("Y.m.d D");?></p>
  <div class="c-today__temp <?php echo $class; ?>">
    <span class="js-weather-icon"><i class="fa-solid fa-cloud"></i></span>
    <span class="js-weather-temp <?php echo $class; ?>">20</span>℃
  </div>
</section>