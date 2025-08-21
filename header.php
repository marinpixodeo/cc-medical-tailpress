<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="header" class="site-header fixed top-0 left-0 w-full z-50">
        <div class="flex items-start justify-between py-3 lg:py-5 pr-[10px] sm:pr-[15px] px-[15px] lg:pl-10 lg:pr-[30px] lg:py-[30px] duration-300 ease-in-out">
            <!-- Logo Section -->
            <div class="logo w-full max-w-[200px] md:max-w-[280px] lg:mt-[3px]">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-start group w-full">
                     <img src="<?= THEME_URL; ?>images/top_hd_logo.webp" alt="">
                </a>
            </div>

            <!-- Contact Info & CTA -->
            <div class="head-cta flex items-start gap-5 md:gap-3 lg:gap-7 duration-300 ease-in-out">
                <!-- Phone Number -->
                <div class="flex items-center mr-0 mt-2 lg:mt-[6px]">
<!--                    Mobile-->
                    <a href="tel:052-602-9955" class="block md:hidden w-[37px]"><img src="<?= THEME_URL ?>/images/icon-phone.webp" alt=""></a>

<!--                    Desktop-->
                    <a class="hidden md:block block !no-underline text-2xl lg:text-[32px] text-[var(--color-green)] font-bold tracking-[1.5px]" href="tel:052-602-9955">
                        <span class="text-lg lg:text-2xl">TEL</span>.052-602-9955
                    </a>
                </div>


                <a href="#" class="block md:hidden"><img src="<?= THEME_URL ?>/images/icon-email.webp" alt=""></a>
                <!-- Inquiry Button -->
                <a href="#inquiry" class="hidden md:flex btn bg-[var(--color-green)] w-auto px-[30px] lg:px-0 lg:w-[266px] h-auto py-3 lg:py-0 lg:h-[56px] text-white font-bold text-[14px] md:text-[16px] gap-[10px] tracking-[1.5px] rounded-full transform transition-all duration-300 ease-in-out flex items-center justify-center !no-underline">
                    <span>問い合わせする</span>
                     <img src="<?= THEME_URL ?>/images/icon-arrow.webp" alt="">
                </a>
            </div>
        </div>
    </header>

