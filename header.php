<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <!-- Adobeフォント -->
  <script>
    (function(d) {
      var config = {
        kitId: 'jek6ulg',
        scriptTimeout: 3000,
        async: true
      },
      h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
    })(document);
  </script>

  <!-- リセットCSS -->
  <link rel="stylesheet" href="https://unpkg.com/ress@4.0.0/dist/ress.min.css">

  <!-- 自作style.css（functions.phpで読み込む） -->

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/905f598671.js" crossorigin="anonymous"></script>

  <!-- favicon -->
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/icon-192x192.png">
  <link rel="apple-touch-icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-180x180.png">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">

  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header-inner">
      <h1 class="header-logo">
        <a href="<?php echo home_url(); ?>">KUMIKO SHIMIZU</a>
      </h1>
      <div class="hamburger-button"><i class="fas fa-bars" aria-label="menu"></i></div>

      <!-- SPナビゲーション -->
      <nav class="sp-nav">
        <ul class="sp-nav-list">
          <li><a href="#works">Works</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
      
      <!-- PCナビゲーション -->
      <nav class="pc-nav">
        <ul class="pc-nav-list">
          <li><a href="#works">Works</a></li>
          <li><a href="#news">News</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
