<?php
$current_lang = $this->session->userdata('site_lang');
if (empty($current_lang)) {
    $current_lang = 'thai';
}
$is_th = ($current_lang == 'thai' || $current_lang == 'th');
?>
<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="<?= $is_th ? 'th' : 'en'; ?>">
<head>
    <title><?= $this->lang->line('site_meta_title'); ?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="description" content="<?= $this->lang->line('site_meta_desc'); ?>" />
    
    <!-- Dimension CSS -->
    <link rel="stylesheet" href="<?= site_assets_url('css/main.css') ?>" />
    <noscript><link rel="stylesheet" href="<?= site_assets_url('css/noscript.css') ?>" /></noscript>
    <!-- Favicon & Apple Touch Icon -->
    <?php 
        $fav_file = file_exists(FCPATH . 'assets/images/favicon.png') ? 'assets/images/favicon.png' : 'assets/images/logo.png';
        $fav_url = base_url($fav_file) . '?v=' . (file_exists(FCPATH . $fav_file) ? filemtime(FCPATH . $fav_file) : time());
    ?>
    <link rel="icon" type="image/png" href="<?= $fav_url ?>" />
    <link rel="shortcut icon" type="image/png" href="<?= $fav_url ?>" />
    <link rel="apple-touch-icon" href="<?= $fav_url ?>" />

    <style>
        /* Local Thai Font LINE Seed Sans TH */
        @font-face {
            font-family: 'LINESeedSansTH';
            src: url('<?= site_assets_url('fonts/LINESeedSansTH_W_Rg.woff2') ?>') format('woff2');
            font-weight: 400;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'LINESeedSansTH';
            src: url('<?= site_assets_url('fonts/LINESeedSansTH_W_Bd.woff2') ?>') format('woff2');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'LINESeedSansTH';
            src: url('<?= site_assets_url('fonts/LINESeedSansTH_W_XBd.woff2') ?>') format('woff2');
            font-weight: 800;
            font-style: normal;
            font-display: swap;
        }

        body, input, select, textarea, button, h1, h2, h3, h4, h5, h6, .major {
            font-family: 'LINESeedSansTH', 'Source Sans Pro', sans-serif !important;
        }

        /* ===== THEME: YELLOW & BLACK (UNITED PICO GOLD) ===== */
        :root {
            --pico-gold: #f59e0b;
            --pico-gold-light: #fbbf24;
            --pico-gold-bright: #fcd34d;
            --pico-gold-dark: #d97706;
            --pico-amber: #f7941d;
            --pico-bg-black: #0a0c0f;
            --pico-card-black: rgba(14, 16, 20, 0.95);
            --pico-border-gold: rgba(245, 158, 11, 0.5);
            --pico-glow: 0 0 25px rgba(245, 158, 11, 0.25);
        }

        body {
            background-color: var(--pico-bg-black) !important;
            color: #f1f5f9;
        }

        /* Background & Overlay: Soft Subtle Blur */
        #bg:after,
        body.is-article-visible #bg:after {
            background-image: url("<?= base_url('assets/images/bg.jpg') . '?v=' . (file_exists(FCPATH . 'assets/images/bg.jpg') ? filemtime(FCPATH . 'assets/images/bg.jpg') : time()); ?>") !important;
            filter: blur(4px) !important;
            -webkit-filter: blur(4px) !important;
            -moz-filter: blur(4px) !important;
            -ms-filter: blur(4px) !important;
            transform: scale(1.05) !important;
            -webkit-transform: scale(1.05) !important;
        }

        #bg:before {
            /* Smooth subtle dark gradient without the dot-mesh overlay.png */
            background: linear-gradient(to top, rgba(10, 12, 16, 0.45), rgba(10, 12, 16, 0.20)) !important;
            background-image: linear-gradient(to top, rgba(10, 12, 16, 0.45), rgba(10, 12, 16, 0.20)) !important;
        }

        body.is-preload #bg:before {
            background-color: #050608 !important;
        }

        /* Floating Language Switcher */
        .dimension-top-bar {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 10000;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .dimension-lang-switch {
            display: inline-flex;
            align-items: center;
            background: rgba(10, 12, 16, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            padding: 4px 6px;
            border-radius: 999px;
            border: 1px solid var(--pico-border-gold);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5), 0 0 15px rgba(245, 158, 11, 0.2);
        }

        .dimension-lang-btn {
            color: #e2e8f0 !important;
            font-size: 0.8rem;
            font-weight: 700;
            padding: 5px 14px;
            border-radius: 999px;
            text-decoration: none;
            transition: all 0.25s ease;
            border-bottom: none !important;
        }

        .dimension-lang-btn:hover {
            color: var(--pico-gold-light) !important;
        }

        .dimension-lang-btn.active {
            background: linear-gradient(135deg, var(--pico-gold-light), var(--pico-gold), var(--pico-gold-dark));
            color: #000000 !important;
            font-weight: 800;
            box-shadow: 0 2px 10px rgba(245, 158, 11, 0.5);
        }

        /* Header Logo & Elements */
        #header .logo {
            width: 8.5rem !important;      /* ปรับขนาดความกว้างวงกลมตรงนี้ (เช่น 6rem, 8.5rem, 10rem, 120px) */
            height: 8.5rem !important;     /* ปรับขนาดความสูงวงกลมตรงนี้ (ให้เท่ากับ width) */
            border-radius: 50% !important;
            border: 3.5px solid var(--pico-gold) !important;
            background: #ffffff !important;
            box-shadow: 0 0 40px rgba(245, 158, 11, 0.7), 0 8px 25px rgba(0, 0, 0, 0.5);
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            line-height: normal !important;
            padding: 12px;
            margin: 0 auto;
            transition: all 0.3s ease;
            box-sizing: border-box;
        }

        #header .logo:hover {
            box-shadow: 0 0 50px rgba(245, 158, 11, 0.9), 0 10px 30px rgba(0, 0, 0, 0.6);
            transform: scale(1.03);
        }

        #header .logo img {
            width: 100%;
            height: 100%;
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            margin-top: 0;
            display: block;
        }

        @media screen and (max-width: 736px) {
            #header .logo {
                width: 7rem !important;
                height: 7rem !important;
                padding: 10px;
            }
        }

        #header > *:before {
            background: var(--pico-gold) !important;
            box-shadow: 0 0 8px rgba(245, 158, 11, 0.6);
        }

        #header h1 {
            color: var(--pico-gold-light) !important;
            text-shadow: 0 2px 15px rgba(245, 158, 11, 0.4);
            font-weight: 800;
            letter-spacing: 0.35rem;
        }

        #header .content {
            border-color: var(--pico-border-gold) !important;
            box-shadow: 0 0 30px rgba(245, 158, 11, 0.1);
            background: rgba(10, 12, 16, 0.4);
            border-radius: 4px;
        }

        #header .content .inner p {
            line-height: 1.75;
            margin-bottom: 1.25em;
        }

        /* Navigation Bar */
        #header nav ul {
            border: 1px solid var(--pico-border-gold) !important;
            background: rgba(12, 14, 18, 0.9);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.6), 0 0 15px rgba(245, 158, 11, 0.15);
        }

        #header nav ul li {
            border-left: 1px solid rgba(245, 158, 11, 0.35) !important;
        }

        #header nav ul li a {
            color: #ffffff !important;
            font-weight: 700;
            transition: all 0.25s ease;
        }

        #header nav ul li a:hover {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.25), rgba(217, 119, 6, 0.25)) !important;
            color: var(--pico-gold-light) !important;
            text-shadow: 0 0 10px rgba(245, 158, 11, 0.5);
        }

        #header nav.use-middle:after {
            background: var(--pico-gold) !important;
        }

        /* Typography & Headings */
        h1, h2, h3, h4, h5, h6 {
            color: var(--pico-gold-light);
        }

        h1.major, h2.major, h3.major, h4.major, h5.major, h6.major {
            border-bottom: 2px solid var(--pico-gold) !important;
            color: var(--pico-gold-light) !important;
            text-shadow: 0 2px 10px rgba(245, 158, 11, 0.3);
        }

        a {
            color: var(--pico-gold-light);
            border-bottom-color: rgba(245, 158, 11, 0.5);
            transition: all 0.2s ease;
        }

        a:hover {
            color: var(--pico-gold-bright) !important;
            border-bottom-color: transparent;
        }

        strong, b {
            color: #ffffff;
        }

        blockquote {
            border-left: 4px solid var(--pico-gold) !important;
            background: rgba(245, 158, 11, 0.08);
            padding: 0.85rem 1.25rem;
            border-radius: 0 6px 6px 0;
            color: #fef08a;
        }

        hr {
            border-bottom: 1px solid rgba(245, 158, 11, 0.3) !important;
        }

        /* Buttons: Yellow & Black Theme */
        input[type="submit"],
        input[type="reset"],
        input[type="button"],
        button,
        .button {
            border: 1px solid var(--pico-border-gold) !important;
            background: rgba(245, 158, 11, 0.12) !important;
            color: var(--pico-gold-light) !important;
            font-weight: 700;
            transition: all 0.25s ease;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover,
        input[type="button"]:hover,
        button:hover,
        .button:hover {
            background: rgba(245, 158, 11, 0.25) !important;
            border-color: var(--pico-gold-light) !important;
            color: #ffffff !important;
            box-shadow: 0 0 15px rgba(245, 158, 11, 0.4);
            transform: translateY(-1px);
        }

        /* Primary Button: Golden Yellow Gradient with Deep Black Text */
        input[type="submit"].primary,
        input[type="reset"].primary,
        input[type="button"].primary,
        button.primary,
        .button.primary {
            background: linear-gradient(135deg, var(--pico-gold-light) 0%, var(--pico-gold) 50%, var(--pico-gold-dark) 100%) !important;
            color: #000000 !important;
            font-weight: 800 !important;
            border: none !important;
            box-shadow: 0 4px 18px rgba(245, 158, 11, 0.45);
        }

        input[type="submit"].primary:hover,
        input[type="reset"].primary:hover,
        input[type="button"].primary:hover,
        button.primary:hover,
        .button.primary:hover {
            background: linear-gradient(135deg, var(--pico-gold-bright) 0%, var(--pico-gold-light) 50%, var(--pico-gold) 100%) !important;
            color: #000000 !important;
            box-shadow: 0 6px 22px rgba(245, 158, 11, 0.65);
            transform: translateY(-2px);
        }

        /* Modal Articles: Widened for Maximum Readability */
        #main article {
            width: 72rem !important;
            max-width: 92vw !important;
            background-color: var(--pico-card-black) !important;
            border: 1px solid var(--pico-border-gold);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.9), 0 0 35px rgba(245, 158, 11, 0.15);
            border-radius: 8px;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            padding: 4.5rem 3.5rem 2.5rem 3.5rem !important;
        }

        #main article .close:before {
            border: 1px solid rgba(245, 158, 11, 0.4);
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='20px' height='20px' viewBox='0 0 20 20'%3E%3Cline x1='2' y1='2' x2='18' y2='18' stroke='%23f59e0b' stroke-width='2'/%3E%3Cline x1='18' y1='2' x2='2' y2='18' stroke='%23f59e0b' stroke-width='2'/%3E%3C/svg%3E");
            transition: all 0.25s ease;
        }

        #main article .close:hover:before {
            background-color: rgba(245, 158, 11, 0.2) !important;
            border-color: var(--pico-gold-light);
            box-shadow: 0 0 12px rgba(245, 158, 11, 0.5);
            transform: rotate(90deg);
        }

        /* Tables */
        table.alt tbody tr {
            border-bottom: 1px solid rgba(245, 158, 11, 0.2);
        }

        table.alt tbody tr:nth-child(2n + 1) {
            background-color: rgba(245, 158, 11, 0.05);
        }

        /* List markers & icons */
        article ol li, article ul li {
            margin-bottom: 0.5em;
        }

        i.fas, i.fab, i.fa {
            color: var(--pico-gold-light);
            margin-right: 0.35em;
        }

        .button i.fas, .button i.fab, .button i.fa {
            margin-right: 0.5em;
        }

        .button.primary i.fas, .button.primary i.fab, .button.primary i.fa {
            color: #000000 !important;
        }

        /* Legal Reader Box */
        .dimension-legal-reader {
            background: rgba(6, 8, 10, 0.9) !important;
            border: 1px solid rgba(245, 158, 11, 0.35) !important;
            box-shadow: inset 0 2px 12px rgba(0, 0, 0, 0.7);
        }

        /* Dimension Legal Tab Buttons */
        /* Policy Tab Nav: Compact, Sleek, Unified Segmented Control */
        .policy-tab-nav {
            display: flex !important;
            flex-direction: row !important;
            flex-wrap: nowrap !important;
            gap: 8px !important;
            width: 100% !important;
            margin: 0 0 1.25rem 0 !important;
            padding: 0 !important;
            list-style: none !important;
        }

        .policy-tab-nav li {
            flex: 1 1 0 !important;
            min-width: 0 !important;
            padding: 0 !important;
            margin: 0 !important;
            width: auto !important;
        }

        .policy-tab-nav li button,
        .policy-tab-nav li .dim-tab-btn {
            width: 100% !important;
            height: 2.75rem !important;
            line-height: 1.2 !important;
            padding: 0.4rem 0.6rem !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;
            gap: 6px !important;
            font-size: 0.85rem !important;
            white-space: nowrap !important;
            border-radius: 6px !important;
            text-align: center !important;
        }

        .dim-tab-btn {
            background: rgba(245, 158, 11, 0.1) !important;
            border: 1px solid rgba(245, 158, 11, 0.4) !important;
            color: var(--pico-gold-light) !important;
            font-weight: 600;
        }

        .dim-tab-btn:hover {
            background: rgba(245, 158, 11, 0.25) !important;
            border-color: var(--pico-gold-light) !important;
            color: #ffffff !important;
        }

        .dim-tab-btn.primary {
            background: linear-gradient(135deg, var(--pico-gold-light), var(--pico-gold)) !important;
            color: #000000 !important;
            font-weight: 800 !important;
            border: none !important;
            box-shadow: 0 2px 10px rgba(245, 158, 11, 0.45);
        }

        .dim-tab-btn.primary i {
            color: #000000 !important;
        }

        /* Policy Links in Contact Article */
        .policy-link-btn {
            background: rgba(245, 158, 11, 0.08) !important;
            border: 1px solid rgba(245, 158, 11, 0.35) !important;
            color: #ffffff !important;
            transition: all 0.25s ease;
        }

        .policy-link-btn:hover {
            background: rgba(245, 158, 11, 0.2) !important;
            border-color: var(--pico-gold-light) !important;
            color: var(--pico-gold-light) !important;
            box-shadow: 0 4px 15px rgba(245, 158, 11, 0.25);
            transform: translateX(4px);
        }

        .policy-link-btn:hover .fa-arrow-right {
            color: var(--pico-gold-bright) !important;
            opacity: 1 !important;
            transform: translateX(3px);
        }

        /* Footer */
        #footer {
            color: #94a3b8;
        }

        #footer .copyright {
            color: #cbd5e1;
        }

        /* ===================================================
           RESPONSIVE DESIGN RULES (Mobile, Tablet, Desktop)
           =================================================== */

        /* Tablet & Smaller Devices (max-width: 980px) */
        @media screen and (max-width: 980px) {
            #header .content .inner {
                padding: 2.25rem 1.5rem;
            }
            #main article {
                max-width: 92vw;
            }
        }

        /* Mobile Landscape & Large Phones (max-width: 736px) */
        @media screen and (max-width: 736px) {
            #wrapper {
                padding: 3.5rem 1rem 2rem 1rem;
            }

            #header .logo {
                width: 7.5rem !important;
                height: 7.5rem !important;
                padding: 10px;
            }

            #header h1 {
                font-size: 1.65rem !important;
                letter-spacing: 0.2rem !important;
                line-height: 1.35;
            }

            #header .content .inner {
                padding: 1.75rem 1.15rem;
            }

            #header .content .inner p {
                font-size: 0.85rem;
                line-height: 1.65;
                margin-bottom: 0.85em;
            }

            #header .content .actions {
                display: flex;
                flex-direction: column;
                align-items: stretch;
                gap: 10px;
                margin-top: 1.25em;
            }

            #header .content .actions li {
                padding: 0;
                width: 100%;
            }

            #header .content .actions li .button {
                width: 100%;
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            /* Responsive Articles */
            #main article {
                padding: 3.5rem 1.25rem 1.5rem 1.25rem !important;
                width: 100% !important;
                max-width: 100% !important;
                margin: 0 auto;
            }

            #main article h2.major {
                font-size: 1.3rem !important;
                letter-spacing: 0.15rem !important;
                margin-bottom: 1.25rem;
            }

            /* Table wrapper responsive scroll */
            .table-wrapper {
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
                width: 100%;
                margin-bottom: 1.5rem;
            }

            .table-wrapper table {
                min-width: 380px;
            }

            /* Legal tab buttons on mobile: 1 Column x 3 Rows (Tight & Clean) */
            .policy-tab-nav {
                display: flex !important;
                flex-direction: column !important;
                gap: 8px !important;
                margin-bottom: 1.25rem !important;
                width: 100% !important;
            }

            .policy-tab-nav li {
                width: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
                flex: none !important;
            }

            .policy-tab-nav li button,
            .policy-tab-nav li .dim-tab-btn {
                width: 100% !important;
                height: 2.85rem !important;
                line-height: 2.85rem !important;
                padding: 0 1rem !important;
                font-size: 0.85rem !important;
                white-space: nowrap !important;
                display: flex !important;
                flex-direction: row !important;
                align-items: center !important;
                justify-content: center !important;
                gap: 8px !important;
                border-radius: 6px !important;
            }

            .policy-tab-nav li button i,
            .policy-tab-nav li .dim-tab-btn i {
                font-size: 0.9rem !important;
                margin: 0 !important;
            }

            .dimension-legal-reader {
                max-height: 380px !important;
                padding: 1rem !important;
                font-size: 0.9rem;
            }

            /* Contact buttons responsive */
            #contact .actions {
                display: flex;
                flex-direction: column;
                gap: 8px;
            }

            #contact .actions li {
                padding: 0;
                width: 100%;
            }

            #contact .actions li .button {
                width: 100%;
                text-align: center;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }

        /* Mobile Portrait (max-width: 480px) */
        @media screen and (max-width: 480px) {
            #wrapper {
                padding: 3rem 0.75rem 1.5rem 0.75rem;
            }

            .dimension-top-bar {
                top: 12px;
                right: 12px;
            }

            .dimension-lang-switch {
                padding: 3px 4px;
            }

            .dimension-lang-btn {
                padding: 3px 10px;
                font-size: 0.75rem;
            }

            #header .logo {
                width: 6.5rem !important;
                height: 6.5rem !important;
                padding: 8px;
            }

            #header h1 {
                font-size: 1.35rem !important;
                letter-spacing: 0.15rem !important;
            }

            #header nav {
                width: 100%;
                max-width: 20rem;
            }

            #header nav ul {
                flex-direction: column;
                width: 100%;
                border-radius: 6px;
            }

            #header nav ul li {
                border-left: 0 !important;
                border-top: 1px solid rgba(245, 158, 11, 0.35) !important;
                width: 100%;
            }

            #header nav ul li:first-child {
                border-top: 0 !important;
            }

            #header nav ul li a {
                height: 3rem;
                line-height: 3rem;
                width: 100%;
                font-size: 0.85rem;
                padding: 0 1rem;
            }

            #main article {
                padding: 3rem 0.85rem 1.25rem 0.85rem !important;
                border-radius: 6px;
            }

            #main article .close {
                width: 3.25rem;
                height: 3.25rem;
            }

            #main article .close:before {
                top: 0.5rem;
                left: 0.5rem;
                width: 2.25rem;
                height: 2.25rem;
            }

            .table-wrapper table {
                min-width: 300px;
                font-size: 0.85rem;
            }
        }
    </style>
</head>
<body class="is-preload">

    <!-- Language Switcher Bar -->
    <div class="dimension-top-bar">
        <div class="dimension-lang-switch">
            <a href="<?= site_root_url('lang/switch/th'); ?>" class="dimension-lang-btn <?= $is_th ? 'active' : ''; ?>">TH</a>
            <a href="<?= site_root_url('lang/switch/en'); ?>" class="dimension-lang-btn <?= !$is_th ? 'active' : ''; ?>">EN</a>
        </div>
    </div>

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header">
            <div class="logo">
                <img src="<?= base_url('assets/images/logo.png') ?>" alt="<?= $this->lang->line('site_brand_name'); ?>" />
            </div>
            <div class="content">
                <div class="inner">
                    <h1><?= $this->lang->line('site_brand_name'); ?></h1>
                    <p style="font-weight: 700; font-size: 1.15em; color: #ffffff; margin-bottom: 0.5em;">
                        <?= $this->lang->line('home_hero_title'); ?>
                    </p>
                    <p style="font-weight: 600; opacity: 0.95; margin-bottom: 0.75em;">
                        <?= $this->lang->line('home_hero_subtitle'); ?>
                    </p>
                    <p><?= $this->lang->line('home_hero_desc1'); ?></p>
                    <p><?= $this->lang->line('home_hero_desc2'); ?></p>
                    <p style="font-size: 0.9em; opacity: 0.9;"><strong><?= $this->lang->line('home_license_note'); ?></strong></p>
                    
                    <ul class="actions" style="justify-content: center; margin-top: 1.5em;">
                        <li><a href="<?= $this->lang->line('license_check_url'); ?>" target="_blank" class="button primary small"><i class="fas fa-certificate"></i> <?= $this->lang->line('btn_check_license_long'); ?></a></li>
                        <li><a href="<?= $this->lang->line('app_download_url'); ?>" class="button small"><i class="fab fa-google-play"></i> <?= $this->lang->line('btn_google_play'); ?></a></li>
                    </ul>
                </div>
            </div>
            <nav>
                <ul>
                    <li><a href="#about"><?= $this->lang->line('nav_about'); ?></a></li>
                    <li><a href="#services"><?= $this->lang->line('nav_services'); ?></a></li>
                    <li><a href="#apply"><?= $this->lang->line('nav_apply'); ?></a></li>
                    <li><a href="#policy"><?= $this->lang->line('nav_policy'); ?></a></li>
                    <li><a href="#contact"><?= $this->lang->line('nav_contact'); ?></a></li>
                </ul>
            </nav>
        </header>

        <!-- Main Content Area -->
        <div id="main">