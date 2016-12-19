<?php $plasso = get_theme_mod('plasso'); ?>
<div class="pricing" id="pricing">
  <div class="content">
    <h3 class="section-title">
      <?php echo $plasso['pricing_headline']; ?>
    </h3>

    <div class="grid">
      <?php foreach($plasso['pricing_plan'] as $id => $plan) { ?>
      <div class="col-1-3">
        <div class="pricing-card">
          <h5><?php echo $plan['name']; ?></h5>

          <div class="price"><?php echo $plan['price']; ?></div>
          <div class="period">/<?php echo $plan['period']; ?></div>

          <ul>
            <li><?php echo $plan['text']; ?></li>
          </ul>

          <a class="btn plo-button" href="https://plasso.co/s/<?php echo $plasso['space_id']; ?>?preselect=<?php echo $plan['id']; ?>"><?php echo $plan['button']; ?></a>
        </div>
			</div>
			<?php } ?>
    </div>
  </div>
</div>