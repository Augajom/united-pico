<!-- Contact Hero -->
<section class="hero-section" style="padding-top: 140px; padding-bottom: 60px;">
    <div class="container-xxl">
        <div class="text-center max-w-800 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-headset text-info"></i> <?= $this->lang->line('contact_hero_badge'); ?>
            </span>
            <h1 class="display-4 text-white fw-bold mb-3"><?= $this->lang->line('contact_hero_title'); ?></h1>
            <p class="lead text-slate fs-5"><?= $this->lang->line('contact_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Contact Info Grid (Polished 2-Card Layout) -->
<section class="py-5 position-relative" style="z-index: 2;">
    <div class="container-xxl">
        <div class="row g-4 justify-content-center">
            
            <!-- Office Address Card -->
            <div class="col-lg-6">
                <div class="card-3d h-100 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="card-icon-wrapper mb-0" style="width: 56px; height: 56px; font-size: 1.4rem;">
                            <i class="fas fa-building-user"></i>
                        </div>
                        <div>
                            <h4 class="text-white fw-bold mb-0"><?= $this->lang->line('company_fullname'); ?></h4>
                            <span class="small text-info fw-bold"><?= $this->lang->line('contact_pico_badge'); ?></span>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="p-4 rounded-4 mb-4" style="background: rgba(20, 21, 199, 0.04); border: 1px solid var(--border-glass);">
                        <span class="text-muted small d-block mb-1">
                            <i class="fas fa-location-dot text-info me-2"></i><?= $this->lang->line('contact_address_label'); ?>
                        </span>
                        <p class="text-white mb-0 font-weight-bold" style="line-height: 1.7; font-size: 1.1rem !important;">
                            <?= $this->lang->line('contact_address_val'); ?>
                        </p>
                    </div>

                    <!-- Google Maps Button -->
                    <a href="https://maps.google.com/?q=115+Moo+2+Bang+Bua+Thong+Nonthaburi" target="_blank" class="btn-primary-3d w-100 justify-content-center py-3 fs-5">
                        <i class="fas fa-map-location-dot me-2"></i> <?= $this->lang->line('contact_map_btn'); ?>
                    </a>
                </div>
            </div>

            <!-- Online Customer Support Card -->
            <div class="col-lg-6">
                <div class="card-3d h-100 p-4 p-md-5">
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div class="card-icon-wrapper mb-0" style="width: 56px; height: 56px; font-size: 1.4rem;">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div>
                            <h4 class="text-white fw-bold mb-0"><?= $this->lang->line('contact_info_title'); ?></h4>
                            <span class="small text-muted"><?= $this->lang->line('contact_online_subtitle'); ?></span>
                        </div>
                    </div>

                    <!-- Email Support -->
                    <div class="p-4 rounded-4 mb-3 d-flex align-items-center gap-3" style="background: rgba(20, 21, 199, 0.04); border: 1px solid var(--border-glass);">
                        <div class="badge rounded-circle bg-info bg-opacity-25 text-info p-3 fs-4" style="width: 48px; height: 48px; display: flex; align-items: center; justify-content: center; min-width: 48px;">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div>
                            <span class="text-muted small"><?= $this->lang->line('contact_email_label'); ?></span>
                            <h6 class="text-white mb-0 fw-bold fs-6" style="white-space: pre-line;"><?= nl2br($this->lang->line('contact_email_val')); ?></h6>
                        </div>
                    </div>

                    <!-- Service Area Limitation Badge -->
                    <div class="p-3 rounded-4 d-flex align-items-center gap-3" style="background: rgba(245, 158, 11, 0.12); border: 1px solid rgba(245, 158, 11, 0.35);">
                        <div class="fs-4 text-warning"><i class="fas fa-circle-info"></i></div>
                        <div>
                            <span class="text-warning fw-bold small d-block"><?= $this->lang->line('area_limit_title'); ?></span>
                            <span class="text-slate small"><?= $this->lang->line('area_limit_desc'); ?></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>