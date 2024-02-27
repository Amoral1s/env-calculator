<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/header.min.css" />
  <?php if (is_home()) { ?>
    <link rel="preload" as="image" href="<?php the_field('offer_img', 'options'); ?>" />
  <?php } ?>
  <meta charset="UTF-8">
  <meta name="viewport" id="myViewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="format-detection" content="telephone=no">

  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon.ico" sizes="any"><!-- 32×32 -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/icon.jpg" type="image/svg+xml">
  <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png"><!-- 180×180 -->
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/manifest.webmanifest">
  <style>
    @media (min-width: 4200px) {
      html{zoom: 1.4;}
    }

    @media (min-width: 2800px) and (max-width: 4199px) {
      html{zoom: 1.3;}
    }

    @media (min-width: 2400px) and (max-width: 2799px) {
      html{zoom: 1.2;}
    }
    @media (min-width: 1930px) and (max-width: 2299px) {
      html{zoom: 1;}
    }
  </style>
  <?php wp_head(); ?>
	
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LYD94K4M4H"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LYD94K4M4H');
</script>
	
</head>

<body id="top">

<header itemscope itemtype="http://schema.org/WPHeader" class="header"> 
  <div class="container"> 
    <div class="header-wrap"> 
      <div class="mob-callback" style="display: none"> 
        <a href="<?php the_permalink(79); ?>" class="button button-accent">
          Quote
        </a> 
      </div> 
      <?php if (is_home()) : ?>
      <div  class="header-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="elatemoving.com">
      </div>
      <?php else : ?>
      <a href="/" class="header-logo">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="elatemoving.com">
      </a>
      <?php endif; ?> 
      <nav class="header-menu" itemscope itemtype="http://schema.org/SiteNavigationElement" style="display: none"> 
        <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
        <?php  
          wp_nav_menu( array(
            'menu_class' => '',
            'theme_location' => 'menu-1',
            'container' => null,
            'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
          )); 
        ?>
        </ul>
      </nav> 
      <div class="header-right" style="display: none"> 
        <div class="header-contacts"> 
          <a class="phone" href="tel:<?php the_field('phone', 'options'); ?>">
            <?php the_field('phone', 'options'); ?>          
          </a> 
          <a class="email" href="mailto:<?php the_field('email_sec', 'options'); ?>">
            <?php the_field('email_sec', 'options'); ?>         
          </a> 
        </div> 
        <div class="social"> 
          <a target="blank" href="<?php the_field('facebook_link', 'options'); ?>"> 
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/fb.svg" alt="social-icon"> 
          </a> 
          <a target="blank" href="<?php the_field('instagram_link', 'options'); ?>"> 
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/inst.svg" alt="social-icon"> 
          </a> 
          <div class="search-toggle"> 
            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/search.svg" alt="search-icon"> 
          </div> 
        </div> 
        <div class="callback"> 
          <a href="<?php the_permalink(79); ?>" class="button button-accent">
            Quote
          </a> 
        </div> 
      </div> 
      <div class="burg-wrap" style="display: none">
        <div class="phone-toggle" style="display: none">
          <div class="toggle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9365 1.25L16.1855 1.25C15.8732 1.25 15.5935 1.44361 15.4835 1.73599L14.0281 5.60588C13.9799 5.73398 13.9677 5.87281 13.9928 6.00735L14.7221 9.91931C13.8257 12.0273 12.3451 13.4439 9.88944 14.7146L6.02449 13.9657C5.88728 13.9391 5.74536 13.9514 5.61475 14.0012L1.73299 15.4804C1.44221 15.5912 1.25006 15.87 1.25006 16.1812L1.25005 19.7655C1.25005 21.391 2.68225 22.7101 4.35751 22.3456C7.41112 21.6811 13.0684 19.9923 17.0304 16.0303C20.8255 12.2352 22.0971 6.99252 22.5251 4.15869C22.7693 2.54172 21.4725 1.25 19.9365 1.25ZM16.7048 2.75L19.9365 2.75C20.6555 2.75 21.1345 3.32183 21.0419 3.93467C20.6291 6.66748 19.4215 11.5179 15.9697 14.9697C12.3213 18.6181 7.01752 20.2317 4.03858 20.8799C3.38429 21.0222 2.75005 20.524 2.75005 19.7655L2.75006 16.698L5.94907 15.479L9.85737 16.2363C10.02 16.2678 10.1884 16.2446 10.3365 16.1703C13.2307 14.7176 15.1097 12.9954 16.1964 10.2785C16.2492 10.1466 16.2634 10.0023 16.2373 9.86255L15.5057 5.9381L16.7048 2.75Z" fill="white"/>
            </svg>
          </div>
          <div class="phone-mini" style="display: none">
            <div class="close-mini">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22704 6.22703C6.51993 5.93414 6.99481 5.93414 7.2877 6.22703L12 10.9393L16.7123 6.22703C17.0052 5.93414 17.4801 5.93414 17.773 6.22703C18.0659 6.51992 18.0659 6.9948 17.773 7.28769L13.0607 12L17.773 16.7123C18.0659 17.0052 18.0659 17.4801 17.773 17.773C17.4801 18.0659 17.0052 18.0659 16.7123 17.773L12 13.0607L7.2877 17.773C6.99481 18.0659 6.51993 18.0659 6.22704 17.773C5.93415 17.4801 5.93415 17.0052 6.22704 16.7123L10.9394 12L6.22704 7.28769C5.93415 6.9948 5.93415 6.51992 6.22704 6.22703Z" fill="white"/>
              </svg>
            </div>
            <a class="phone" href="tel:<?php the_field('phone', 'options'); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.38631 1.54169L6.51208 1.54169C6.77239 1.54169 7.00544 1.70303 7.09707 1.94668L8.30994 5.17159C8.35008 5.27833 8.36026 5.39403 8.33936 5.50614L7.73162 8.76611C8.47859 10.5228 9.71241 11.7033 11.7588 12.7622L14.9796 12.1381C15.094 12.1159 15.2122 12.1262 15.3211 12.1677L18.5559 13.4003C18.7982 13.4927 18.9583 13.7251 18.9583 13.9844L18.9583 16.9712C18.9583 18.3258 17.7648 19.4251 16.3688 19.1213C13.8241 18.5676 9.1097 17.1603 5.80804 13.8586C2.64542 10.696 1.5858 6.32712 1.22911 3.9656C1.02558 2.61812 2.10625 1.54169 3.38631 1.54169ZM6.07939 2.79169L3.38631 2.79169C2.78713 2.79169 2.38795 3.26821 2.46509 3.77891C2.80907 6.05625 3.81542 10.0982 6.69192 12.9747C9.73226 16.0151 14.1521 17.3598 16.6345 17.8999C17.1798 18.0186 17.7083 17.6034 17.7083 16.9712L17.7083 14.4151L15.0425 13.3992L11.7855 14.0303C11.65 14.0565 11.5096 14.0372 11.3863 13.9753C8.97441 12.7647 7.40862 11.3295 6.50302 9.06547C6.45902 8.95549 6.44719 8.83526 6.4689 8.71881L7.07858 5.44844L6.07939 2.79169Z" fill="white"/>
              </svg>
              <?php the_field('phone', 'options'); ?>          
            </a> 
            <a class="email" href="mailto:<?php the_field('email_sec', 'options'); ?>">
              <?php the_field('email_sec', 'options'); ?>         
            </a> 
            <div class="social"> 
              <a target="blank" href="<?php the_field('facebook_link', 'options'); ?>"> 
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M16.171 13.0625L16.6685 9.78641H13.5562V7.66136C13.5562 6.76486 13.9901 5.89049 15.3841 5.89049H16.8V3.10136C16.8 3.10136 15.5156 2.88 14.2882 2.88C11.7238 2.88 10.0493 4.44944 10.0493 7.28948V9.78641H7.20001V13.0625H10.0493V20.9828C10.6214 21.0735 11.2066 21.12 11.8028 21.12C12.3989 21.12 12.9841 21.0735 13.5562 20.9828V13.0625H16.171Z" fill="white"/>
                  </svg>
                </div>
                <p>facebook.com/elatemoving</p>
              </a> 
              <a target="blank" href="<?php the_field('instagram_link', 'options'); ?>"> 
                <div class="icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M21.5465 8.04166C21.5004 7.0194 21.3352 6.31996 21.1009 5.70891C20.8551 5.07865 20.5286 4.54062 19.9948 4.01027C19.4609 3.47993 18.927 3.14558 18.2972 2.90347C17.6865 2.6652 16.9875 2.50379 15.9658 2.45767C14.9403 2.41155 14.6139 2.40002 12.0098 2.40002C9.40194 2.40002 9.07548 2.41155 8.05383 2.45767C7.03219 2.50379 6.33317 2.66904 5.72249 2.90347C5.08876 3.14942 4.55105 3.47609 4.02103 4.01027C3.491 4.54446 3.15685 5.07865 2.91488 5.70891C2.6806 6.31996 2.51544 7.0194 2.46935 8.04166C2.42327 9.06776 2.41174 9.39442 2.41174 12C2.41174 14.6095 2.42327 14.9361 2.46935 15.9584C2.51544 16.9806 2.6806 17.6801 2.91488 18.2911C3.16069 18.9214 3.48716 19.4594 4.02103 19.9898C4.55105 20.524 5.08876 20.8545 5.71864 21.0966C6.32933 21.3349 7.02835 21.4963 8.04999 21.5424C9.07548 21.5885 9.40194 21.6 12.006 21.6C14.6139 21.6 14.9403 21.5885 15.962 21.5424C16.9836 21.4963 17.6826 21.331 18.2933 21.0966C18.9232 20.8506 19.4609 20.524 19.9909 19.9898C20.521 19.4556 20.8551 18.9214 21.0971 18.2911C21.3352 17.6801 21.4965 16.9806 21.5426 15.9584C21.5887 14.9323 21.6002 14.6056 21.6002 12C21.6002 9.39442 21.5925 9.06392 21.5465 8.04166ZM19.8219 15.8815C19.7797 16.8192 19.6222 17.3304 19.4916 17.6647C19.3188 18.1105 19.1076 18.4333 18.7696 18.7715C18.4316 19.1097 18.1128 19.3134 17.6634 19.494C17.3254 19.6247 16.8146 19.7823 15.8813 19.8245C14.8712 19.8706 14.5678 19.8822 12.0021 19.8822C9.43651 19.8822 9.13309 19.8706 8.12297 19.8245C7.18582 19.7823 6.675 19.6247 6.34085 19.494C5.89532 19.3211 5.5727 19.1097 5.23471 18.7715C4.89672 18.4333 4.69316 18.1144 4.51264 17.6647C4.38206 17.3265 4.22459 16.8154 4.18234 15.8815C4.13625 14.8708 4.12473 14.5672 4.12473 12C4.12473 9.43285 4.13625 9.12925 4.18234 8.11852C4.22459 7.18081 4.38206 6.66968 4.51264 6.33533C4.68548 5.88954 4.89672 5.56672 5.23471 5.22853C5.5727 4.89034 5.89148 4.68665 6.34085 4.50603C6.67884 4.37536 7.18966 4.2178 8.12297 4.17552C9.13309 4.12941 9.43651 4.11788 12.0021 4.11788C14.5678 4.11788 14.8712 4.12941 15.8813 4.17552C16.8185 4.2178 17.3293 4.37536 17.6634 4.50603C18.109 4.67897 18.4316 4.89034 18.7696 5.22853C19.1076 5.56672 19.3111 5.88569 19.4916 6.33533C19.6222 6.67352 19.7797 7.18465 19.8219 8.11852C19.868 9.12925 19.8796 9.43285 19.8796 12C19.8796 14.5672 19.8642 14.8708 19.8219 15.8815Z" fill="white"/>
                    <path d="M12.0022 7.06549C9.27522 7.06549 7.07062 9.27526 7.07062 12C7.07062 14.7286 9.27906 16.9345 12.0022 16.9345C14.7253 16.9345 16.9337 14.7209 16.9337 12C16.9337 9.27142 14.7291 7.06549 12.0022 7.06549ZM12.0022 15.2013C10.2354 15.2013 8.8028 13.7678 8.8028 12C8.8028 10.2322 10.2354 8.79872 12.0022 8.79872C13.7689 8.79872 15.2015 10.2322 15.2015 12C15.2015 13.7678 13.7689 15.2013 12.0022 15.2013Z" fill="white"/>
                    <path d="M17.126 8.0263C17.7623 8.0263 18.2782 7.51012 18.2782 6.87338C18.2782 6.23664 17.7623 5.72046 17.126 5.72046C16.4896 5.72046 15.9738 6.23664 15.9738 6.87338C15.9738 7.51012 16.4896 8.0263 17.126 8.0263Z" fill="white"/>
                    <path d="M2.40002 12C2.40002 14.6095 2.41155 14.9361 2.45764 15.9584C2.50373 16.9806 2.66888 17.6801 2.90317 18.2911C3.14897 18.9214 3.47544 19.4594 4.00931 19.9898C4.53933 20.5201 5.07704 20.8545 5.70693 21.0966C6.31761 21.3349 7.01663 21.4963 8.03827 21.5424C9.06376 21.5885 9.39022 21.6 11.9943 21.6C14.6021 21.6 14.9286 21.5885 15.9503 21.5424C16.9719 21.4963 17.6709 21.331 18.2816 21.0966C18.9115 20.8506 19.4492 20.524 19.9792 19.9898C20.5092 19.4594 20.8434 18.9214 21.0854 18.2911C21.3235 17.6801 21.4848 16.9806 21.5309 15.9584C21.577 14.9323 21.5885 14.6056 21.5885 12C21.5885 9.39058 21.577 9.06392 21.5309 8.04166C21.4848 7.0194 21.3196 6.31996 21.0854 5.70891C20.8396 5.07865 20.5131 4.54062 19.9792 4.01027C19.453 3.47609 18.9153 3.14558 18.2854 2.90347C17.6748 2.6652 16.9757 2.50379 15.9541 2.45767C14.9286 2.41155 14.6021 2.40002 11.9981 2.40002C9.39022 2.40002 9.06376 2.41155 8.04211 2.45767C7.02047 2.50379 6.32145 2.66904 5.71077 2.90347C5.08088 3.14942 4.54317 3.47609 4.01315 4.01027C3.48312 4.54446 3.14897 5.07865 2.90701 5.70891C2.66888 6.31996 2.50373 7.0194 2.45764 8.04166C2.41155 9.06392 2.40002 9.39058 2.40002 12ZM4.13221 12C4.13221 9.43669 4.14373 9.12925 4.18982 8.11852C4.23207 7.18081 4.38954 6.66968 4.52013 6.33533C4.69296 5.88954 4.90421 5.56672 5.24219 5.22853C5.58018 4.89034 5.89896 4.68665 6.34833 4.50603C6.68632 4.37536 7.19714 4.2178 8.13045 4.17552C9.14057 4.12941 9.44399 4.11788 12.0096 4.11788C14.5753 4.11788 14.8787 4.12941 15.8888 4.17552C16.826 4.2178 17.3368 4.37536 17.6709 4.50603C18.1164 4.67897 18.4391 4.89034 18.7771 5.22853C19.115 5.56672 19.3186 5.88569 19.4991 6.33533C19.6297 6.67352 19.7872 7.18465 19.8294 8.11852C19.8755 9.12925 19.887 9.43285 19.887 12C19.887 14.5672 19.8755 14.8708 19.8294 15.8815C19.7872 16.8192 19.6297 17.3304 19.4991 17.6647C19.3263 18.1105 19.115 18.4333 18.7771 18.7715C18.4391 19.1097 18.1203 19.3134 17.6709 19.494C17.3329 19.6247 16.8221 19.7823 15.8888 19.8245C14.8787 19.8706 14.5753 19.8822 12.0096 19.8822C9.44399 19.8822 9.14057 19.8706 8.13045 19.8245C7.1933 19.7823 6.68248 19.6247 6.34833 19.494C5.90281 19.3211 5.58018 19.1097 5.24219 18.7715C4.90421 18.4333 4.70064 18.1144 4.52013 17.6647C4.38954 17.3265 4.23207 16.8154 4.18982 15.8815C4.13989 14.8708 4.13221 14.5634 4.13221 12Z" fill="white"/>
                  </svg>
                </div>
                <p>instagram.com/elate_moving</p>
              </a> 
            </div> 
          </div>
        </div>
        <div class="burger">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 5C2.25 4.58579 2.58579 4.25 3 4.25H21C21.4142 4.25 21.75 4.58579 21.75 5C21.75 5.41421 21.4142 5.75 21 5.75H3C2.58579 5.75 2.25 5.41421 2.25 5Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 12C2.25 11.5858 2.58579 11.25 3 11.25H21C21.4142 11.25 21.75 11.5858 21.75 12C21.75 12.4142 21.4142 12.75 21 12.75H3C2.58579 12.75 2.25 12.4142 2.25 12Z" fill="white"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.25 19C2.25 18.5858 2.58579 18.25 3 18.25H21C21.4142 18.25 21.75 18.5858 21.75 19C21.75 19.4142 21.4142 19.75 21 19.75H3C2.58579 19.75 2.25 19.4142 2.25 19Z" fill="white"/>
          </svg>
        </div>
      </div>
    </div> 
    <div class="mobile-menu" style="display: none">
      <div class="top">
        <div class="mob-callback" style="display: none"> 
          <a href="<?php the_permalink(79); ?>" class="button button-accent">
            Quote
          </a> 
        </div> 
        <?php if (is_home()) : ?>
        <div  class="header-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="elatemoving.com">
        </div>
        <?php else : ?>
        <a href="/" class="header-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="elatemoving.com">
        </a>
        <?php endif; ?>
        <div class="burg-wrap">
          <div class="phone-toggle" style="display: none">
            <div class="toggle">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.9365 1.25L16.1855 1.25C15.8732 1.25 15.5935 1.44361 15.4835 1.73599L14.0281 5.60588C13.9799 5.73398 13.9677 5.87281 13.9928 6.00735L14.7221 9.91931C13.8257 12.0273 12.3451 13.4439 9.88944 14.7146L6.02449 13.9657C5.88728 13.9391 5.74536 13.9514 5.61475 14.0012L1.73299 15.4804C1.44221 15.5912 1.25006 15.87 1.25006 16.1812L1.25005 19.7655C1.25005 21.391 2.68225 22.7101 4.35751 22.3456C7.41112 21.6811 13.0684 19.9923 17.0304 16.0303C20.8255 12.2352 22.0971 6.99252 22.5251 4.15869C22.7693 2.54172 21.4725 1.25 19.9365 1.25ZM16.7048 2.75L19.9365 2.75C20.6555 2.75 21.1345 3.32183 21.0419 3.93467C20.6291 6.66748 19.4215 11.5179 15.9697 14.9697C12.3213 18.6181 7.01752 20.2317 4.03858 20.8799C3.38429 21.0222 2.75005 20.524 2.75005 19.7655L2.75006 16.698L5.94907 15.479L9.85737 16.2363C10.02 16.2678 10.1884 16.2446 10.3365 16.1703C13.2307 14.7176 15.1097 12.9954 16.1964 10.2785C16.2492 10.1466 16.2634 10.0023 16.2373 9.86255L15.5057 5.9381L16.7048 2.75Z" fill="white"/>
              </svg>
            </div>
            <div class="phone-mini" style="display: none">
              <div class="close-mini">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22704 6.22703C6.51993 5.93414 6.99481 5.93414 7.2877 6.22703L12 10.9393L16.7123 6.22703C17.0052 5.93414 17.4801 5.93414 17.773 6.22703C18.0659 6.51992 18.0659 6.9948 17.773 7.28769L13.0607 12L17.773 16.7123C18.0659 17.0052 18.0659 17.4801 17.773 17.773C17.4801 18.0659 17.0052 18.0659 16.7123 17.773L12 13.0607L7.2877 17.773C6.99481 18.0659 6.51993 18.0659 6.22704 17.773C5.93415 17.4801 5.93415 17.0052 6.22704 16.7123L10.9394 12L6.22704 7.28769C5.93415 6.9948 5.93415 6.51992 6.22704 6.22703Z" fill="white"/>
                </svg>
              </div>
              <a class="phone" href="tel:<?php the_field('phone', 'options'); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M3.38631 1.54169L6.51208 1.54169C6.77239 1.54169 7.00544 1.70303 7.09707 1.94668L8.30994 5.17159C8.35008 5.27833 8.36026 5.39403 8.33936 5.50614L7.73162 8.76611C8.47859 10.5228 9.71241 11.7033 11.7588 12.7622L14.9796 12.1381C15.094 12.1159 15.2122 12.1262 15.3211 12.1677L18.5559 13.4003C18.7982 13.4927 18.9583 13.7251 18.9583 13.9844L18.9583 16.9712C18.9583 18.3258 17.7648 19.4251 16.3688 19.1213C13.8241 18.5676 9.1097 17.1603 5.80804 13.8586C2.64542 10.696 1.5858 6.32712 1.22911 3.9656C1.02558 2.61812 2.10625 1.54169 3.38631 1.54169ZM6.07939 2.79169L3.38631 2.79169C2.78713 2.79169 2.38795 3.26821 2.46509 3.77891C2.80907 6.05625 3.81542 10.0982 6.69192 12.9747C9.73226 16.0151 14.1521 17.3598 16.6345 17.8999C17.1798 18.0186 17.7083 17.6034 17.7083 16.9712L17.7083 14.4151L15.0425 13.3992L11.7855 14.0303C11.65 14.0565 11.5096 14.0372 11.3863 13.9753C8.97441 12.7647 7.40862 11.3295 6.50302 9.06547C6.45902 8.95549 6.44719 8.83526 6.4689 8.71881L7.07858 5.44844L6.07939 2.79169Z" fill="white"/>
                </svg>
                <?php the_field('phone', 'options'); ?>          
              </a> 
              <a class="email" href="mailto:<?php the_field('email_sec', 'options'); ?>">
                <?php the_field('email_sec', 'options'); ?>         
              </a> 
              <div class="social"> 
                <a target="blank" href="<?php the_field('facebook_link', 'options'); ?>"> 
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M16.171 13.0625L16.6685 9.78641H13.5562V7.66136C13.5562 6.76486 13.9901 5.89049 15.3841 5.89049H16.8V3.10136C16.8 3.10136 15.5156 2.88 14.2882 2.88C11.7238 2.88 10.0493 4.44944 10.0493 7.28948V9.78641H7.20001V13.0625H10.0493V20.9828C10.6214 21.0735 11.2066 21.12 11.8028 21.12C12.3989 21.12 12.9841 21.0735 13.5562 20.9828V13.0625H16.171Z" fill="white"/>
                    </svg>
                  </div>
                  <p>facebook.com/elatemoving</p>
                </a> 
                <a target="blank" href="<?php the_field('instagram_link', 'options'); ?>"> 
                  <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M21.5465 8.04166C21.5004 7.0194 21.3352 6.31996 21.1009 5.70891C20.8551 5.07865 20.5286 4.54062 19.9948 4.01027C19.4609 3.47993 18.927 3.14558 18.2972 2.90347C17.6865 2.6652 16.9875 2.50379 15.9658 2.45767C14.9403 2.41155 14.6139 2.40002 12.0098 2.40002C9.40194 2.40002 9.07548 2.41155 8.05383 2.45767C7.03219 2.50379 6.33317 2.66904 5.72249 2.90347C5.08876 3.14942 4.55105 3.47609 4.02103 4.01027C3.491 4.54446 3.15685 5.07865 2.91488 5.70891C2.6806 6.31996 2.51544 7.0194 2.46935 8.04166C2.42327 9.06776 2.41174 9.39442 2.41174 12C2.41174 14.6095 2.42327 14.9361 2.46935 15.9584C2.51544 16.9806 2.6806 17.6801 2.91488 18.2911C3.16069 18.9214 3.48716 19.4594 4.02103 19.9898C4.55105 20.524 5.08876 20.8545 5.71864 21.0966C6.32933 21.3349 7.02835 21.4963 8.04999 21.5424C9.07548 21.5885 9.40194 21.6 12.006 21.6C14.6139 21.6 14.9403 21.5885 15.962 21.5424C16.9836 21.4963 17.6826 21.331 18.2933 21.0966C18.9232 20.8506 19.4609 20.524 19.9909 19.9898C20.521 19.4556 20.8551 18.9214 21.0971 18.2911C21.3352 17.6801 21.4965 16.9806 21.5426 15.9584C21.5887 14.9323 21.6002 14.6056 21.6002 12C21.6002 9.39442 21.5925 9.06392 21.5465 8.04166ZM19.8219 15.8815C19.7797 16.8192 19.6222 17.3304 19.4916 17.6647C19.3188 18.1105 19.1076 18.4333 18.7696 18.7715C18.4316 19.1097 18.1128 19.3134 17.6634 19.494C17.3254 19.6247 16.8146 19.7823 15.8813 19.8245C14.8712 19.8706 14.5678 19.8822 12.0021 19.8822C9.43651 19.8822 9.13309 19.8706 8.12297 19.8245C7.18582 19.7823 6.675 19.6247 6.34085 19.494C5.89532 19.3211 5.5727 19.1097 5.23471 18.7715C4.89672 18.4333 4.69316 18.1144 4.51264 17.6647C4.38206 17.3265 4.22459 16.8154 4.18234 15.8815C4.13625 14.8708 4.12473 14.5672 4.12473 12C4.12473 9.43285 4.13625 9.12925 4.18234 8.11852C4.22459 7.18081 4.38206 6.66968 4.51264 6.33533C4.68548 5.88954 4.89672 5.56672 5.23471 5.22853C5.5727 4.89034 5.89148 4.68665 6.34085 4.50603C6.67884 4.37536 7.18966 4.2178 8.12297 4.17552C9.13309 4.12941 9.43651 4.11788 12.0021 4.11788C14.5678 4.11788 14.8712 4.12941 15.8813 4.17552C16.8185 4.2178 17.3293 4.37536 17.6634 4.50603C18.109 4.67897 18.4316 4.89034 18.7696 5.22853C19.1076 5.56672 19.3111 5.88569 19.4916 6.33533C19.6222 6.67352 19.7797 7.18465 19.8219 8.11852C19.868 9.12925 19.8796 9.43285 19.8796 12C19.8796 14.5672 19.8642 14.8708 19.8219 15.8815Z" fill="white"/>
                      <path d="M12.0022 7.06549C9.27522 7.06549 7.07062 9.27526 7.07062 12C7.07062 14.7286 9.27906 16.9345 12.0022 16.9345C14.7253 16.9345 16.9337 14.7209 16.9337 12C16.9337 9.27142 14.7291 7.06549 12.0022 7.06549ZM12.0022 15.2013C10.2354 15.2013 8.8028 13.7678 8.8028 12C8.8028 10.2322 10.2354 8.79872 12.0022 8.79872C13.7689 8.79872 15.2015 10.2322 15.2015 12C15.2015 13.7678 13.7689 15.2013 12.0022 15.2013Z" fill="white"/>
                      <path d="M17.126 8.0263C17.7623 8.0263 18.2782 7.51012 18.2782 6.87338C18.2782 6.23664 17.7623 5.72046 17.126 5.72046C16.4896 5.72046 15.9738 6.23664 15.9738 6.87338C15.9738 7.51012 16.4896 8.0263 17.126 8.0263Z" fill="white"/>
                      <path d="M2.40002 12C2.40002 14.6095 2.41155 14.9361 2.45764 15.9584C2.50373 16.9806 2.66888 17.6801 2.90317 18.2911C3.14897 18.9214 3.47544 19.4594 4.00931 19.9898C4.53933 20.5201 5.07704 20.8545 5.70693 21.0966C6.31761 21.3349 7.01663 21.4963 8.03827 21.5424C9.06376 21.5885 9.39022 21.6 11.9943 21.6C14.6021 21.6 14.9286 21.5885 15.9503 21.5424C16.9719 21.4963 17.6709 21.331 18.2816 21.0966C18.9115 20.8506 19.4492 20.524 19.9792 19.9898C20.5092 19.4594 20.8434 18.9214 21.0854 18.2911C21.3235 17.6801 21.4848 16.9806 21.5309 15.9584C21.577 14.9323 21.5885 14.6056 21.5885 12C21.5885 9.39058 21.577 9.06392 21.5309 8.04166C21.4848 7.0194 21.3196 6.31996 21.0854 5.70891C20.8396 5.07865 20.5131 4.54062 19.9792 4.01027C19.453 3.47609 18.9153 3.14558 18.2854 2.90347C17.6748 2.6652 16.9757 2.50379 15.9541 2.45767C14.9286 2.41155 14.6021 2.40002 11.9981 2.40002C9.39022 2.40002 9.06376 2.41155 8.04211 2.45767C7.02047 2.50379 6.32145 2.66904 5.71077 2.90347C5.08088 3.14942 4.54317 3.47609 4.01315 4.01027C3.48312 4.54446 3.14897 5.07865 2.90701 5.70891C2.66888 6.31996 2.50373 7.0194 2.45764 8.04166C2.41155 9.06392 2.40002 9.39058 2.40002 12ZM4.13221 12C4.13221 9.43669 4.14373 9.12925 4.18982 8.11852C4.23207 7.18081 4.38954 6.66968 4.52013 6.33533C4.69296 5.88954 4.90421 5.56672 5.24219 5.22853C5.58018 4.89034 5.89896 4.68665 6.34833 4.50603C6.68632 4.37536 7.19714 4.2178 8.13045 4.17552C9.14057 4.12941 9.44399 4.11788 12.0096 4.11788C14.5753 4.11788 14.8787 4.12941 15.8888 4.17552C16.826 4.2178 17.3368 4.37536 17.6709 4.50603C18.1164 4.67897 18.4391 4.89034 18.7771 5.22853C19.115 5.56672 19.3186 5.88569 19.4991 6.33533C19.6297 6.67352 19.7872 7.18465 19.8294 8.11852C19.8755 9.12925 19.887 9.43285 19.887 12C19.887 14.5672 19.8755 14.8708 19.8294 15.8815C19.7872 16.8192 19.6297 17.3304 19.4991 17.6647C19.3263 18.1105 19.115 18.4333 18.7771 18.7715C18.4391 19.1097 18.1203 19.3134 17.6709 19.494C17.3329 19.6247 16.8221 19.7823 15.8888 19.8245C14.8787 19.8706 14.5753 19.8822 12.0096 19.8822C9.44399 19.8822 9.14057 19.8706 8.13045 19.8245C7.1933 19.7823 6.68248 19.6247 6.34833 19.494C5.90281 19.3211 5.58018 19.1097 5.24219 18.7715C4.90421 18.4333 4.70064 18.1144 4.52013 17.6647C4.38954 17.3265 4.23207 16.8154 4.18982 15.8815C4.13989 14.8708 4.13221 14.5634 4.13221 12Z" fill="white"/>
                    </svg>
                  </div>
                  <p>instagram.com/elate_moving</p>
                </a> 
              </div> 
            </div>
          </div>
          <div class="close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.22704 6.22703C6.51993 5.93414 6.99481 5.93414 7.2877 6.22703L12 10.9393L16.7123 6.22703C17.0052 5.93414 17.4801 5.93414 17.773 6.22703C18.0659 6.51992 18.0659 6.9948 17.773 7.28769L13.0607 12L17.773 16.7123C18.0659 17.0052 18.0659 17.4801 17.773 17.773C17.4801 18.0659 17.0052 18.0659 16.7123 17.773L12 13.0607L7.2877 17.773C6.99481 18.0659 6.51993 18.0659 6.22704 17.773C5.93415 17.4801 5.93415 17.0052 6.22704 16.7123L10.9394 12L6.22704 7.28769C5.93415 6.9948 5.93415 6.51992 6.22704 6.22703Z" fill="white"/>
            </svg>
          </div>
        </div>
      </div> 
      <div class="search">
        <?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
      </div>
      <nav itemscope itemtype="http://schema.org/SiteNavigationElement">
        <ul itemprop="about" itemscope itemtype="http://schema.org/ItemList">
          <?php  
            wp_nav_menu( array(
              'menu_class' => '',
              'theme_location' => 'menu-1',
              'container' => null,
              'walker'=> new True_Walker_Nav_Menu() // этот параметр нужно добавить
            )); 
          ?>
        </ul>
      </nav>
      <a class="phone" href="tel:<?php the_field('phone', 'options'); ?>">
        <?php the_field('phone', 'options'); ?>          
      </a> 
      <a class="email" href="mailto:<?php the_field('email_sec', 'options'); ?>">
        <?php the_field('email_sec', 'options'); ?>         
      </a> 
      <div class="social">
        <a target="blank" href="<?php the_field('facebook_link', 'options'); ?>"> 
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/fb.svg" alt="social-icon"> Facebook
        </a>
        <a target="blank" href="<?php the_field('instagram_link', 'options'); ?>"> 
          <img src="<?php echo get_template_directory_uri(); ?>/img/icons/inst.svg" alt="social-icon"> Instagram
        </a>
      </div>
    </div>
  </div> 
</header>






	