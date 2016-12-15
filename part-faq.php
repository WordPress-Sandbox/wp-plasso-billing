<?php $plasso = get_theme_mod('plasso'); ?>
<div class="faq" id="faq">
  <div class="content">
    <h3 class="section-title">
      <?php echo $plasso['faq_headline']; ?>
    </h3>

    <div class="grid">
      <?php foreach($plasso['faq_q'] as $id => $q) { ?>
      <div class="col-1-3">
	      <h6><?php echo $q['question']; ?></h6>
				<p><?php echo $q['answer']; ?></p>
			</div>
			<?php } ?>
    </div>
  </div>
</div>