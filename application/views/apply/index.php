<!-- Apply Steps Hero -->
<section class="hero-section" style="padding-top: 140px; padding-bottom: 60px;">
    <div class="container-xxl">
        <div class="text-center max-w-800 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-mobile-screen text-info"></i> Mobile App Loan Process
            </span>
            <h1 class="display-4 text-white fw-bold mb-3"><?= $this->lang->line('app_hero_title'); ?></h1>
            <p class="lead text-slate fs-5"><?= $this->lang->line('app_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Application Guide & Advantages -->
<section class="py-5 position-relative" style="z-index: 2;">
    <div class="container-xxl">
        
        <div class="card-3d p-4 p-md-5 mb-5">
            <h3 class="text-white fw-bold mb-3 border-start border-4 border-info ps-3"><?= $this->lang->line('app_steps_title'); ?></h3>
            <p class="text-slate fs-5 mb-4" style="line-height: 1.8;">
                <?= $this->lang->line('app_intro_desc'); ?>
            </p>

            <!-- 3 Highlights Cards (สมัครได้ทุกที่ ทุกเวลา, ขั้นตอนการสมัครเข้าใจง่าย, ตรวจสอบข้อมูลก่อนยืนยันคำขอ) -->
            <div class="row g-4">
                <?php $app_adv = $this->lang->line('app_features'); ?>
                <?php $adv_icons = ['fa-mobile-screen-button', 'fa-list-check', 'fa-user-shield']; ?>
                <?php if (!empty($app_adv)): foreach ($app_adv as $index => $adv): ?>
                    <div class="col-lg-4">
                        <div class="card-3d p-4 h-100">
                            <div class="card-icon-wrapper mb-3" style="width: 54px; height: 54px; font-size: 1.3rem;">
                                <i class="fas <?= isset($adv_icons[$index]) ? $adv_icons[$index] : 'fa-mobile-screen-button'; ?>"></i>
                            </div>
                            <h5 class="text-white fw-bold fs-5 mb-2"><?= $adv['title']; ?></h5>
                            <p class="text-slate small mb-0" style="line-height: 1.7; opacity: 0.95; font-size: 0.95rem;"><?= $adv['desc']; ?></p>
                        </div>
                    </div>
                <?php endforeach; endif; ?>
            </div>
        </div>

        <!-- Preparation Checklist (5 Items) -->
        <div class="row g-4 mb-5">
            <div class="col-lg-12">
                <div class="card-3d p-4 p-md-5">
                    <h3 class="text-white fw-bold mb-2">
                        <i class="fas fa-clipboard-list text-info me-2"></i><?= $this->lang->line('prep_title'); ?>
                    </h3>
                    <p class="text-slate mb-4 fs-6"><?= $this->lang->line('prep_desc'); ?></p>

                    <div class="row g-3 justify-content-center">
                        <?php 
                        $prep_items = $this->lang->line('prep_items'); 
                        $total_items = !empty($prep_items) ? count($prep_items) : 0;
                        ?>
                        <?php if (!empty($prep_items)): foreach ($prep_items as $index => $item): ?>
                            <?php 
                            $is_last_odd = ($total_items % 2 !== 0 && $index === $total_items - 1);
                            $col_class = $is_last_odd ? 'col-lg-12' : 'col-lg-6';
                            $center_class = $is_last_odd ? 'justify-content-center text-center' : '';
                            ?>
                            <div class="<?= $col_class; ?>">
                                <div class="p-3 rounded-3 d-flex align-items-center gap-3 <?= $center_class; ?>" style="background: rgba(20, 21, 199, 0.05); border: 1px solid rgba(20, 21, 199, 0.2);">
                                    <div class="badge rounded-circle bg-info text-white p-2" style="width: 34px; height: 34px; display: flex; align-items: center; justify-content: center; min-width: 34px; font-weight: 700; font-size: 0.95rem; color: #FFFFFF !important;">
                                        <?= $index + 1; ?>
                                    </div>
                                    <span class="text-white font-weight-medium fs-6"><?= $item; ?></span>
                                </div>
                            </div>
                        <?php endforeach; endif; ?>
                    </div>

                    <div class="alert border-0 rounded-4 text-slate small mt-4 mb-0" style="background: rgba(20, 21, 199, 0.06); border: 1px solid rgba(20, 21, 199, 0.2) !important;">
                        <i class="fas fa-circle-info text-warning me-1"></i>
                        <?= $this->lang->line('prep_notice'); ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- 7-Step Workflow Timeline -->
        <div class="card-3d p-4 p-md-5">
            <div class="text-center mb-5">
                <h2 class="display-6 text-white fw-bold mb-2"><?= $this->lang->line('process_title'); ?></h2>
                <div class="mx-auto" style="width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary-blue), var(--primary-glow)); border-radius: 2px;"></div>
            </div>

            <div class="max-w-800 mx-auto">
                <?php $steps = $this->lang->line('process_steps'); ?>
                <?php if (!empty($steps)): foreach ($steps as $index => $step): ?>
                    <div class="d-flex align-items-center gap-3 mb-3">
                        <div class="step-number-pill"><?= $index + 1; ?></div>
                        <div class="p-3 p-md-4 rounded-4 flex-grow-1" style="background: #FFFFFF; border: 1px solid rgba(20, 21, 199, 0.18); box-shadow: 0 4px 15px rgba(20, 21, 199, 0.06);">
                            <h5 class="text-white fw-bold mb-0 fs-5"><?= $step; ?></h5>
                        </div>
                    </div>
                <?php endforeach; endif; ?>
            </div>

            <!-- Download CTA -->
            <div class="text-center mt-5 p-4 p-md-5 rounded-4" style="background: linear-gradient(135deg, rgba(20, 21, 199, 0.08), rgba(101, 238, 255, 0.08)); border: 1px solid rgba(20, 21, 199, 0.22);">
                <h4 class="text-white fw-bold mb-2 fs-3"><?= $this->lang->line('app_download_title'); ?></h4>
                <p class="text-slate mb-4 fs-5"><?= $this->lang->line('app_download_sub'); ?></p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="<?= $this->lang->line('app_download_url'); ?>" target="_blank" class="btn-primary-3d fs-5 py-3 px-4">
                        <i class="fab fa-google-play fs-4 me-2"></i> Google Play Store
                    </a>
                    <a href="<?= site_root_url('contact') ?>" class="btn-outline-3d fs-5 py-3 px-4">
                        <i class="fas fa-headset me-2"></i> <?= $this->lang->line('btn_contact_support'); ?>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
