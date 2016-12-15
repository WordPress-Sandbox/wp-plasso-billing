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

        <?php if($plasso['faq_toggle'] == true) { ?>
        <li><a class="scroll" href="#faq">FAQ</a></li>
        <?php } ?>

        <?php if($plasso['contact_toggle'] == true) { ?>
        <li><a class="scroll" href="#contact">Contact</a></li>
        <?php } ?>
      </nav>

      <div class="hero-text">
        <h2><?php echo $plasso['intro_tagline']; ?></h2>

        <p>
          <?php echo $plasso['intro_text']; ?>
        </p>

        <a class="btn plo-button" href="https://plasso.co/s/<?php echo $plasso['space_id']; ?>"><?php echo $plasso['space_type_text']; ?></a>
      </div>
    </div>
  </div>

  <div class="header-image" style="background-image: url(<?php echo $plasso['intro_image']; ?>);">
  </div>
</header>