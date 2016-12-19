<?php $plasso = get_theme_mod('plasso'); ?>
<header id="intro">
  <div class="header-text">
    <div class="header-text-content">
      <div class="logo-title">
        <h1><?php echo $plasso['intro_title']; ?></h1>
      </div>

      <nav class="header-nav">
        <?php if($plasso['about_toggle'] == true) { ?>
        <li><a class="scroll" href="#details">About</a></li>
        <?php } ?>

        <?php if($plasso['pricing_toggle'] == true) { ?>
        <li><a class="scroll" href="#pricing">Pricing</a></li>
        <?php } ?>

        <?php if($plasso['contact_toggle'] == true) { ?>
        <li><a class="scroll" href="#contact">Contact</a></li>
        <?php } ?>

        <?php if(!empty($plasso['space_id'])) { ?>
        <li><a class="plo-button" href="https://plasso.co/s/<?php echo $plasso['space_id']; ?>/login">Log In</a></li>
        <?php } ?>
      </nav>

      <div class="hero-text">
        <h2><?php echo $plasso['intro_tagline']; ?></h2>

        <p>
          <?php echo $plasso['intro_text']; ?>
        </p>

        <?php if($plasso['pricing_toggle'] == true) { ?>
        <a class="btn scroll" href="#pricing"><?php echo $plasso['intro_button']; ?></a>
        <?php } ?>
      </div>
    </div>
  </div>

  <div class="header-image" style="background-image: url(<?php echo $plasso['intro_image']; ?>);">
  </div>
</header>