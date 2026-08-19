<!-- Services Hero -->
<section class="hero-section" style="padding-top: 140px; padding-bottom: 60px;">
    <div class="container-xxl">
        <div class="text-center max-w-800 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-hand-holding-dollar text-info"></i> PICO Finance Services
            </span>
            <h1 class="display-4 text-white fw-bold mb-3"><?= $this->lang->line('srv_hero_title'); ?></h1>
            <p class="lead text-slate fs-5"><?= $this->lang->line('srv_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Main Services & Conditions Content -->
<section class="py-5 position-relative" style="z-index: 2;">
    <div class="container-xxl">

        <!-- Loan Overview & Specs Block (วงเงินการขอสินเชื่อ) -->
        <div class="card-3d p-4 p-md-5 mb-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-7">
                    <span class="badge bg-info bg-opacity-25 text-info mb-2 px-3 py-2 rounded-pill fw-bold">PICO Finance</span>
                    <h2 class="display-6 text-white fw-bold mb-3"><?= $this->lang->line('pico_title'); ?></h2>
                    <p class="text-slate fs-5 mb-4" style="line-height: 1.8; white-space: pre-line;"><?= nl2br($this->lang->line('srv_main_desc')); ?></p>
                    
                    <div class="d-flex flex-wrap gap-3">
                        <a href="<?= site_root_url('apply') ?>" class="btn-primary-3d">
                            <i class="fas fa-paper-plane"></i> <?= $this->lang->line('btn_apply_loan'); ?>
                        </a>
                        <a href="<?= $this->lang->line('home_license_check_url'); ?>" target="_blank" class="btn-outline-3d">
                            <i class="fas fa-external-link-alt"></i> <?= $this->lang->line('home_license_check_btn'); ?>
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="p-4 rounded-4" style="background: linear-gradient(135deg, rgba(20, 21, 199, 0.08), rgba(101, 238, 255, 0.08)); border: 1px solid rgba(20, 21, 199, 0.2);">
                        <h4 class="text-white fw-bold mb-3 border-bottom pb-2" style="border-color: rgba(20, 21, 199, 0.15) !important;">
                            <i class="fas fa-circle-info text-info me-2"></i><?= $this->lang->line('srv_specs_title'); ?>
                        </h4>
                        
                        <?php $specs = $this->lang->line('srv_specs'); ?>
                        <ul class="list-unstyled d-flex flex-column gap-3 mb-3">
                            <li class="d-flex align-items-center text-white font-weight-bold fs-5">
                                <i class="fas fa-coins text-warning me-3 fs-4"></i> <?= $specs['max_amount']; ?>
                            </li>
                            <li class="d-flex align-items-center text-white font-weight-bold fs-5">
                                <i class="fas fa-calendar-days text-info me-3 fs-4"></i> <?= $specs['term']; ?>
                            </li>
                            <li class="d-flex align-items-center text-white font-weight-bold fs-5">
                                <i class="fas fa-percent text-success me-3 fs-4"></i> <?= $specs['rate']; ?>
                            </li>
                        </ul>

                        <div class="small text-muted border-top pt-3" style="border-color: rgba(20, 21, 199, 0.15) !important;">
                            <?= $specs['rate_note']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why Choose Us Grid (ทำไมต้องเลือกสินเชื่อของเรา?) -->
        <div class="mb-5">
            <div class="text-center mb-4">
                <h2 class="display-6 text-white fw-bold mb-2"><?= $this->lang->line('why_loan_title'); ?></h2>
                <div class="mx-auto" style="width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary-blue), var(--primary-glow)); border-radius: 2px;"></div>
            </div>

            <div class="row g-4 justify-content-center">
                <?php $why_features = $this->lang->line('why_loan_features'); ?>
                <?php $why_icons = ['fa-scale-balanced', 'fa-bolt', 'fa-clock-rotate-left', 'fa-hand-holding-dollar', 'fa-sliders']; ?>
                <?php if (!empty($why_features)): foreach ($why_features as $w_idx => $w_feat): ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="card-3d p-4 h-100">
                            <div class="card-icon-wrapper mb-3" style="width: 50px; height: 50px; font-size: 1.2rem;">
                                <i class="fas <?= isset($why_icons[$w_idx]) ? $why_icons[$w_idx] : 'fa-check'; ?>"></i>
                            </div>
                            <h5 class="text-white fw-bold fs-5 mb-2"><?= $w_feat['title']; ?></h5>
                            <p class="text-slate small mb-0" style="line-height: 1.7;"><?= $w_feat['desc']; ?></p>
                        </div>
                    </div>
                <?php endforeach; endif; ?>
            </div>
        </div>

        <!-- Qualifications & Documents Accordion (กดแล้วเปิด-ปิด แทน Card) -->
        <div class="card-3d p-4 p-md-5 mb-5">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-4">
                <h3 class="text-white fw-bold mb-0 border-start border-4 border-info ps-3">
                    <?= $this->lang->line('qual_title'); ?> & <?= $this->lang->line('doc_title'); ?>
                </h3>
            </div>

            <div class="accordion custom-accordion d-flex flex-column gap-3 mb-0" id="accordionQualDoc">
                <!-- 1. Qualifications -->
                <div class="accordion-item rounded-4 overflow-hidden border-0" style="border: 2px solid rgba(56, 189, 248, 0.2) !important;">
                    <h2 class="accordion-header" id="headingQual">
                        <button class="accordion-button bg-transparent text-white fw-bold fs-5 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseQual" aria-expanded="true" aria-controls="collapseQual">
                            <i class="fas fa-user-check text-info me-3 fs-4"></i>
                            <?= $this->lang->line('qual_title'); ?>
                        </button>
                    </h2>
                    <div id="collapseQual" class="accordion-collapse collapse show" aria-labelledby="headingQual" data-bs-parent="#accordionQualDoc">
                        <div class="accordion-body text-slate fs-5 pt-0">
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0 pt-2">
                                <?php $quals = $this->lang->line('qual_items'); ?>
                                <?php if (!empty($quals)): foreach ($quals as $item): ?>
                                    <li class="d-flex align-items-start gap-3">
                                        <i class="fas fa-check-circle text-info mt-1 fs-5"></i>
                                        <span><?= $item; ?></span>
                                    </li>
                                <?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 2. Required Documents -->
                <div class="accordion-item rounded-4 overflow-hidden border-0" style="border: 2px solid rgba(56, 189, 248, 0.2) !important;">
                    <h2 class="accordion-header" id="headingDoc">
                        <button class="accordion-button collapsed bg-transparent text-white fw-bold fs-5 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDoc" aria-expanded="false" aria-controls="collapseDoc">
                            <i class="fas fa-folder-open text-warning me-3 fs-4"></i>
                            <?= $this->lang->line('doc_title'); ?>
                        </button>
                    </h2>
                    <div id="collapseDoc" class="accordion-collapse collapse show" aria-labelledby="headingDoc" data-bs-parent="#accordionQualDoc">
                        <div class="accordion-body text-slate fs-5 pt-0">
                            <ul class="list-unstyled d-flex flex-column gap-3 mb-0 pt-2">
                                <?php $docs = $this->lang->line('doc_items'); ?>
                                <?php if (!empty($docs)): foreach ($docs as $item): ?>
                                    <li class="d-flex align-items-start gap-3">
                                        <i class="fas fa-check-circle text-info mt-1 fs-5"></i>
                                        <span><?= $item; ?></span>
                                    </li>
                                <?php endforeach; endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fast Approval Features (อนุมัติรวดเร็ว 5 ข้อ) -->
        <div class="text-center mb-4">
            <h2 class="display-6 text-white fw-bold mb-2"><?= $this->lang->line('fast_approval_title'); ?></h2>
            <p class="text-slate fs-6 max-w-800 mx-auto mb-3"><?= $this->lang->line('fast_approval_subtitle'); ?></p>
            <div class="mx-auto" style="width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary-blue), var(--primary-glow)); border-radius: 2px;"></div>
        </div>

        <div class="row g-4 mb-5">
            <?php $features = $this->lang->line('fast_approval_items'); ?>
            <?php $f_icons = ['fa-coins', 'fa-sliders', 'fa-shield-halved', 'fa-wallet', 'fa-circle-check']; ?>
            <?php if (!empty($features)): foreach ($features as $f_idx => $feat): ?>
                <div class="<?= ($f_idx < 3) ? 'col-lg-4 col-md-6' : 'col-lg-6 col-md-6'; ?>">
                    <div class="card-3d p-4 h-100">
                        <div class="card-icon-wrapper mb-3" style="width: 50px; height: 50px; font-size: 1.2rem;">
                            <i class="fas <?= isset($f_icons[$f_idx]) ? $f_icons[$f_idx] : 'fa-check'; ?>"></i>
                        </div>
                        <h5 class="text-white fw-bold fs-5 mb-2"><?= $feat['title']; ?></h5>
                        <p class="text-slate small mb-0" style="line-height: 1.7;"><?= $feat['desc']; ?></p>
                    </div>
                </div>
            <?php endforeach; endif; ?>
        </div>

        <!-- Calculation Example Image Viewer Section (Unchanged) -->
        <div class="card-3d p-4 p-md-5">
            <div class="text-center mb-4">
                <h3 class="text-white fw-bold mb-1"><?= $this->lang->line('calc_example_title'); ?></h3>
                <p class="text-muted small"><?= $this->lang->line('calc_example_subtitle'); ?></p>
                <div class="p-3 rounded-3 d-inline-block text-white fw-bold" style="background: rgba(2, 132, 199, 0.06); border: 1px solid rgba(2, 132, 199, 0.22);">
                    <?= $this->lang->line('calc_example_detail'); ?>
                </div>
            </div>

            <!-- Image Viewer Container -->
            <?php $current_lang = $this->session->userdata('site_lang'); ?>
            <div class="text-center my-4">
                <div class="d-inline-block p-2 rounded-4" style="background: #FFFFFF; border: 1px solid rgba(124, 58, 237, 0.2); box-shadow: 0 10px 30px rgba(2, 132, 199, 0.1);">
                    <img id="calcExampleImg" src="<?= base_url('assets/images/' . (($current_lang == 'english') ? 'image2.png' : 'image1.png')) ?>" alt="Repayment Calculation Example" class="img-fluid rounded-3" style="max-height: 500px; object-fit: contain;">
                </div>
            </div>

            <div class="alert border-0 rounded-4 text-muted text-center mb-0" style="background: rgba(2, 132, 199, 0.06); border: 1px solid rgba(2, 132, 199, 0.2) !important; font-size: 0.75rem !important;">
                <i class="fas fa-circle-exclamation text-warning me-1"></i>
                <?= $this->lang->line('calc_example_note'); ?>
            </div>
        </div>

    </div>
</section>