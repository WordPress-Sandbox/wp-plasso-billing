<?php $plasso = get_theme_mod('plasso'); ?>
<div class="how-it-works" id="details">
  <div class="content">
    <h3 class="section-title">
      <?php echo $plasso['details_title']; ?>
    </h3>

    <div class="grid">
      <?php foreach($plasso['details_detail'] as $id => $detail) { ?>
      <div class="col-1-3">
	      <?php if(!empty($detail['icon'])) { ?>
				<img src="<?php echo wp_get_attachment_url($detail['icon']); ?>">
	      <?php } ?>

	      <h5><?php echo $detail['title']; ?></h5>
				<p><?php echo $detail['text']; ?></p>
			</div>
			<?php } ?>
    </div>
  </div>
</div>