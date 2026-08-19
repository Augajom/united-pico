<?php $lang = $this->session->userdata('site_lang') == 'english' ? 'en' : 'th'; ?>

<section class="ds-hero-section z-1 pb-0">
    <div class="container-fluid px-4 px-lg-5 mt-5 pt-4">
        <div class="row">
            <div class="col-xl-10">
                <span class="text-primary fw-bold text-uppercase mb-4 d-block font-inter" style="letter-spacing: 0.15em; font-size: 0.85rem;">
                    <?= $this->lang->line('about_badge'); ?>
                </span>
                <h1 class="heading-display mb-0" style="font-size: clamp(3rem, 5.5vw, 5.5rem); line-height: 1.05; text-wrap: balance;">
                    <?= $this->lang->line('about_title'); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- Full Bleed Image with Overlapping Solid Block -->
<section class="position-relative mt-5 pt-5 mb-5 pb-5">
    <div class="container-fluid px-0">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=1800&q=80" alt="About Nextdigit" class="w-100" style="height: 65vh; object-fit: cover; filter: contrast(1.05) brightness(0.95);">
    </div>
    
    <div class="container-fluid px-4 px-lg-5 position-relative" style="margin-top: -12vh;">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-xl-7">
                <div class="p-4 p-md-5 p-xl-5 bg-white border shadow-sm" style="border-radius: 0;">
                    <p class="fs-3 text-ink mb-4 font-inter" style="line-height: 1.6; text-wrap: balance;">
                        <?= $this->lang->line('about_desc1'); ?>
                    </p>
                    <p class="fs-5 text-muted mb-0 font-inter" style="line-height: 1.8; text-wrap: balance;">
                        <?= $this->lang->line('about_desc2'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 mb-5 ds-section-light">
    <div class="container-fluid px-4 px-lg-5 py-4">
        <div class="row g-5 justify-content-between">
            
            <!-- Highly Structured Typographic List -->
            <div class="col-lg-6 col-xl-5 pe-lg-5">
                <h3 class="heading-headline mb-5" style="font-size: clamp(2.5rem, 3.5vw, 3.5rem);">
                    <?= $this->lang->line('about_why'); ?>
                </h3>
                <div class="border-top border-ink border-2">
                    <?php 
                        $reasons = $this->lang->line('reasons_list');
                        if(!empty($reasons)): foreach($reasons as $i => $reason):
                    ?>
                    <div class="py-4 border-bottom d-flex align-items-start">
                        <span class="text-primary font-outfit fw-bold me-4 mt-1" style="font-size: 1rem; width: 24px;">0<?= $i + 1 ?></span>
                        <h5 class="mb-0 font-inter text-ink fw-normal lh-base fs-4" style="text-wrap: pretty;"><?= $reason ?></h5>
                    </div>
                    <?php endforeach; endif; ?>
                </div>
            </div>
            
            <!-- Staggered Editorial Blocks -->
            <div class="col-lg-5 col-xl-5 offset-xl-1 mt-5 pt-5">
                <div class="sticky-top" style="top: 140px;">
                    <div class="mb-5 pb-5 border-bottom">
                        <span class="d-inline-block bg-primary text-white font-inter px-3 py-1 mb-4 text-uppercase" style="letter-spacing: 0.1em; font-size: 0.75rem;">Methodology</span>
                        <h3 class="heading-title fs-1 mb-4 text-balance"><?= $this->lang->line('about_approach'); ?></h3>
                        <p class="text-muted fs-5 lh-lg mb-0 font-inter text-balance">
                            <?= $this->lang->line('about_approach_desc'); ?>
                        </p>
                    </div>
                    
                    <div class="mt-5">
                        <span class="d-inline-block bg-primary text-white font-inter px-3 py-1 mb-4 text-uppercase" style="letter-spacing: 0.1em; font-size: 0.75rem;">Vision</span>
                        <h3 class="heading-title fs-1 mb-4 text-balance"><?= $this->lang->line('about_innovation'); ?></h3>
                        <p class="text-muted fs-5 lh-lg mb-0 font-inter text-balance">
                            <?= $this->lang->line('about_innovation_desc'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>