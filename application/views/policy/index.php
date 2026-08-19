<!-- Policy Hero -->
<section class="hero-section" style="padding-top: 140px; padding-bottom: 60px;">
    <div class="container-xxl">
        <div class="text-center max-w-800 mx-auto">
            <span class="badge-pico mb-3">
                <i class="fas fa-shield-halved text-info"></i> Governance & Compliance
            </span>
            <h1 class="display-4 text-white fw-bold mb-3"><?= $this->lang->line('policy_hero_title'); ?></h1>
            <p class="lead text-slate fs-5"><?= $this->lang->line('policy_hero_subtitle'); ?></p>
        </div>
    </div>
</section>

<!-- Tab Navigation & Content Section -->
<section class="py-5 position-relative" style="z-index: 2;">
    <div class="container-xxl">

        <!-- Pills Header -->
        <div class="text-center mb-5">
            <div class="d-inline-flex flex-wrap justify-content-center nav-pills-custom" id="policyPills" role="tablist">
                <button class="nav-link <?= (!isset($active_tab) || $active_tab == 'gov') ? 'active' : '' ?>" id="pills-gov-tab" data-bs-toggle="pill" data-bs-target="#pills-gov" type="button" role="tab">
                    <i class="fas fa-certificate me-2"></i><?= $this->lang->line('tab_gov'); ?>
                </button>
                <button class="nav-link <?= (isset($active_tab) && $active_tab == 'privacy') ? 'active' : '' ?>" id="pills-privacy-tab" data-bs-toggle="pill" data-bs-target="#pills-privacy" type="button" role="tab">
                    <i class="fas fa-lock me-2"></i><?= $this->lang->line('tab_privacy'); ?>
                </button>
                <button class="nav-link <?= (isset($active_tab) && $active_tab == 'terms') ? 'active' : '' ?>" id="pills-terms-tab" data-bs-toggle="pill" data-bs-target="#pills-terms" type="button" role="tab">
                    <i class="fas fa-file-contract me-2"></i><?= $this->lang->line('tab_terms'); ?>
                </button>
                <button class="nav-link <?= (isset($active_tab) && $active_tab == 'agreement') ? 'active' : '' ?>" id="pills-agreement-tab" data-bs-toggle="pill" data-bs-target="#pills-agreement" type="button" role="tab">
                    <i class="fas fa-file-signature me-2"></i><?= $this->lang->line('tab_agreement'); ?>
                </button>
            </div>
        </div>

        <!-- Tab Content -->
        <div class="tab-content" id="policyPillsContent">
            
            <!-- 1. Governance & Licenses -->
            <div class="tab-pane fade <?= (!isset($active_tab) || $active_tab == 'gov') ? 'show active' : '' ?>" id="pills-gov" role="tabpanel">
                <div class="card-3d p-4 p-md-5">
                    <h3 class="text-white fw-bold mb-4 border-start border-4 border-info ps-3">
                        <?= $this->lang->line('gov_lic_heading'); ?>
                    </h3>
                    <div class="p-3 rounded-3 mb-4" style="background: rgba(56, 189, 248, 0.12); border: 1px solid rgba(56, 189, 248, 0.3);">
                        <h5 class="text-info fw-bold mb-0"><?= $this->lang->line('gov_lic_no_label'); ?></h5>
                    </div>
                    <p class="text-slate fs-5 whitespace-pre-line mb-4" style="line-height: 1.85;">
                        <?= $this->lang->line('gov_lic_desc'); ?>
                    </p>
                    <a href="<?= $this->lang->line('home_license_check_url'); ?>" target="_blank" class="btn btn-outline-success rounded-pill px-4 py-2 mb-5">
                        <i class="fas fa-external-link-alt me-2"></i> <?= $this->lang->line('home_license_check_btn'); ?>
                    </a>

                    <hr class="my-5" style="border-color: rgba(255, 255, 255, 0.1);">

                    <h3 class="text-white fw-bold mb-4 border-start border-4 border-warning ps-3">
                        <?= $this->lang->line('gov_dbd_heading'); ?>
                    </h3>
                    <p class="text-slate fs-5 whitespace-pre-line mb-0" style="line-height: 1.85;">
                        <?= $this->lang->line('gov_dbd_desc'); ?>
                    </p>
                </div>
            </div>

            <!-- 2. Privacy Policy PDPA -->
            <div class="tab-pane fade <?= (isset($active_tab) && $active_tab == 'privacy') ? 'show active' : '' ?>" id="pills-privacy" role="tabpanel">
                <div class="card-3d p-4 p-md-5">
                    <h3 class="text-white fw-bold mb-4 border-start border-4 border-info ps-3">
                        <?= $this->lang->line('privacy_heading'); ?>
                    </h3>
                    <p class="text-slate fs-6 mb-4" style="line-height: 1.85;">
                        <?= nl2br($this->lang->line('privacy_intro')); ?>
                    </p>

                    <div class="p-4 rounded-4" style="background: rgba(20, 21, 199, 0.04); border: 1px solid var(--border-glass);">
                        <!-- Privacy Accordion Header & Controls -->
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <h5 class="text-white fw-bold mb-0">
                                <i class="fas fa-shield-halved text-info me-2"></i><?= $this->lang->line('privacy_heading'); ?>
                            </h5>
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-sm btn-outline-info rounded-pill px-3 py-1 fs-7" id="btnExpandAllPrivacy">
                                    <i class="fas fa-angles-down me-1"></i> <?= $this->lang->line('agreement_expand_all'); ?>
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-1 fs-7" id="btnCollapseAllPrivacy">
                                    <i class="fas fa-angles-up me-1"></i> <?= $this->lang->line('agreement_collapse_all'); ?>
                                </button>
                            </div>
                        </div>

                        <!-- Privacy Accordion Container -->
                        <div class="accordion custom-accordion d-flex flex-column gap-3 mb-0" id="accordionPrivacyPolicy">
                            <?php 
                            $privacy_items = $this->lang->line('privacy_accordion_items');
                            if (!empty($privacy_items)):
                                foreach ($privacy_items as $p_index => $p_item):
                            ?>
                                <div class="accordion-item rounded-4 overflow-hidden border-0" style="border: 1px solid rgba(56, 189, 248, 0.2) !important;">
                                    <h2 class="accordion-header" id="headingPrivacy<?= $p_index + 1; ?>">
                                        <button class="accordion-button collapsed bg-transparent text-white fw-bold fs-6 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrivacy<?= $p_index + 1; ?>" aria-expanded="false" aria-controls="collapsePrivacy<?= $p_index + 1; ?>">
                                            <span class="badge bg-info bg-opacity-25 text-info me-2"><?= $p_item['badge']; ?></span>
                                            <?= $p_item['title']; ?>
                                        </button>
                                    </h2>
                                    <div id="collapsePrivacy<?= $p_index + 1; ?>" class="accordion-collapse collapse" aria-labelledby="headingPrivacy<?= $p_index + 1; ?>" data-bs-parent="#accordionPrivacyPolicy">
                                        <div class="accordion-body text-slate fs-6 pt-0" style="line-height: 1.8;">
                                            <?= $p_item['body']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                                endforeach;
                            endif; 
                            ?>
                        </div>

                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var btnExpandP = document.getElementById('btnExpandAllPrivacy');
                            var btnCollapseP = document.getElementById('btnCollapseAllPrivacy');
                            if (btnExpandP && btnCollapseP) {
                                btnExpandP.addEventListener('click', function() {
                                    document.querySelectorAll('#accordionPrivacyPolicy .accordion-collapse').forEach(function(el) {
                                        var bsCollapse = bootstrap.Collapse.getInstance(el) || new bootstrap.Collapse(el, {toggle: false});
                                        bsCollapse.show();
                                    });
                                });
                                btnCollapseP.addEventListener('click', function() {
                                    document.querySelectorAll('#accordionPrivacyPolicy .accordion-collapse').forEach(function(el) {
                                        var bsCollapse = bootstrap.Collapse.getInstance(el) || new bootstrap.Collapse(el, {toggle: false});
                                        bsCollapse.hide();
                                    });
                                });
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>

            <!-- 3. Terms of Service -->
            <div class="tab-pane fade <?= (isset($active_tab) && $active_tab == 'terms') ? 'show active' : '' ?>" id="pills-terms" role="tabpanel">
                <div class="card-3d p-4 p-md-5">
                    <h3 class="text-white fw-bold mb-4 border-start border-4 border-info ps-3">
                        <?= $this->lang->line('terms_heading'); ?>
                    </h3>
                    <p class="text-slate fs-6 mb-4" style="line-height: 1.85;">
                        <?= nl2br($this->lang->line('terms_intro')); ?>
                    </p>

                    <div class="p-4 rounded-4" style="background: rgba(20, 21, 199, 0.04); border: 1px solid var(--border-glass);">
                        <h5 class="text-white fw-bold mb-3"><?= $this->lang->line('terms_eligible_title'); ?>:</h5>
                        <ul class="text-slate mb-4 fs-6">
                            <?php $eligible_items = $this->lang->line('terms_eligible_items'); ?>
                            <?php if (!empty($eligible_items)): foreach ($eligible_items as $item): ?>
                                <li><?= $item; ?></li>
                            <?php endforeach; endif; ?>
                        </ul>

                        <!-- Terms Accordion Header & Controls -->
                        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                            <h5 class="text-white fw-bold mb-0">
                                <i class="fas fa-list-check text-info me-2"></i><?= $this->lang->line('terms_summary_title'); ?>
                            </h5>
                            <div class="d-flex gap-2">
                                <button type="button" class="btn btn-sm btn-outline-info rounded-pill px-3 py-1 fs-7" id="btnExpandAllTerms">
                                    <i class="fas fa-angles-down me-1"></i> <?= $this->lang->line('agreement_expand_all'); ?>
                                </button>
                                <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-1 fs-7" id="btnCollapseAllTerms">
                                    <i class="fas fa-angles-up me-1"></i> <?= $this->lang->line('agreement_collapse_all'); ?>
                                </button>
                            </div>
                        </div>

                        <!-- Terms Accordion Container -->
                        <div class="accordion custom-accordion d-flex flex-column gap-3 mb-0" id="accordionTermsService">
                            <?php 
                            $terms_items = $this->lang->line('terms_summary_items');
                            if (!empty($terms_items)):
                                foreach ($terms_items as $t_index => $t_item):
                            ?>
                                <div class="accordion-item rounded-4 overflow-hidden border-0" style="border: 1px solid rgba(56, 189, 248, 0.2) !important;">
                                    <h2 class="accordion-header" id="headingTerms<?= $t_index + 1; ?>">
                                        <button class="accordion-button collapsed bg-transparent text-white fw-bold fs-6 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTerms<?= $t_index + 1; ?>" aria-expanded="false" aria-controls="collapseTerms<?= $t_index + 1; ?>">
                                            <span class="badge bg-info bg-opacity-25 text-info me-2"><?= $t_item['badge']; ?></span>
                                            <?= $t_item['title']; ?>
                                        </button>
                                    </h2>
                                    <div id="collapseTerms<?= $t_index + 1; ?>" class="accordion-collapse collapse" aria-labelledby="headingTerms<?= $t_index + 1; ?>" data-bs-parent="#accordionTermsService">
                                        <div class="accordion-body text-slate fs-6 pt-0" style="line-height: 1.8;">
                                            <?= $t_item['desc']; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php 
                                endforeach;
                            endif; 
                            ?>
                        </div>

                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            var btnExpandT = document.getElementById('btnExpandAllTerms');
                            var btnCollapseT = document.getElementById('btnCollapseAllTerms');
                            if (btnExpandT && btnCollapseT) {
                                btnExpandT.addEventListener('click', function() {
                                    document.querySelectorAll('#accordionTermsService .accordion-collapse').forEach(function(el) {
                                        var bsCollapse = bootstrap.Collapse.getInstance(el) || new bootstrap.Collapse(el, {toggle: false});
                                        bsCollapse.show();
                                    });
                                });
                                btnCollapseT.addEventListener('click', function() {
                                    document.querySelectorAll('#accordionTermsService .accordion-collapse').forEach(function(el) {
                                        var bsCollapse = bootstrap.Collapse.getInstance(el) || new bootstrap.Collapse(el, {toggle: false});
                                        bsCollapse.hide();
                                    });
                                });
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>

            <!-- 4. Loan Agreement Sample -->
            <div class="tab-pane fade <?= (isset($active_tab) && $active_tab == 'agreement') ? 'show active' : '' ?>" id="pills-agreement" role="tabpanel">
                <div class="card-3d p-4 p-md-5">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4 pb-3 border-bottom" style="border-color: rgba(255, 255, 255, 0.1) !important;">
                        <div>
                            <span class="badge bg-info bg-opacity-25 text-info px-3 py-2 rounded-pill fw-bold mb-2">
                                <i class="fas fa-file-contract me-1"></i> <?= $this->lang->line('agreement_badge'); ?>
                            </span>
                            <h3 class="text-white fw-bold mb-0"><?= $this->lang->line('agreement_heading'); ?></h3>
                        </div>
                        <div class="text-slate small bg-opacity-50 px-3 py-2 rounded-3 border border-secondary border-opacity-25">
                            <i class="far fa-calendar-alt text-info me-1"></i> <?= $this->lang->line('agreement_date_label'); ?>
                        </div>
                    </div>

                    <!-- Parties Box -->
                    <div class="row g-4 mb-4">
                        <div class="col-md-6">
                            <div class="p-4 rounded-4 h-100" style="background: rgba(56, 189, 248, 0.05); border: 1px solid rgba(56, 189, 248, 0.2);">
                                <h5 class="text-info fw-bold mb-3 d-flex align-items-center gap-2">
                                    <i class="fas fa-building-columns fs-4"></i> <?= $this->lang->line('agreement_lender_title'); ?>
                                </h5>
                                <ul class="list-unstyled text-slate mb-3 fs-6 d-flex flex-column gap-2">
                                    <li><strong><?= $this->lang->line('agreement_lender_comp_label'); ?></strong> <?= $this->lang->line('agreement_lender_comp'); ?></li>
                                    <li><strong><?= $this->lang->line('agreement_lender_addr_label'); ?></strong> <?= $this->lang->line('agreement_lender_addr'); ?></li>
                                    <li><strong><?= $this->lang->line('agreement_lender_contact_label'); ?></strong> <?= $this->lang->line('agreement_lender_contact'); ?></li>
                                </ul>
                                <div class="small text-muted border-top pt-2" style="border-color: rgba(56, 189, 248, 0.15) !important;">
                                    <?= $this->lang->line('agreement_lender_suffix'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-4 rounded-4 h-100" style="background: rgba(245, 158, 11, 0.05); border: 1px solid rgba(245, 158, 11, 0.2);">
                                <h5 class="text-warning fw-bold mb-3 d-flex align-items-center gap-2">
                                    <i class="fas fa-user-check fs-4"></i> <?= $this->lang->line('agreement_borrower_title'); ?>
                                </h5>
                                <ul class="list-unstyled text-slate mb-3 fs-6 d-flex flex-column gap-2">
                                    <li><strong><?= $this->lang->line('agreement_borrower_name_label'); ?></strong> ________________________</li>
                                    <li><strong><?= $this->lang->line('agreement_borrower_addr_label'); ?></strong> ________________________</li>
                                    <li><strong><?= $this->lang->line('agreement_borrower_id_label'); ?></strong> ________________________</li>
                                    <li><strong><?= $this->lang->line('agreement_borrower_email_label'); ?></strong> ________________________</li>
                                    <li><strong><?= $this->lang->line('agreement_borrower_phone_label'); ?></strong> ________________________</li>
                                </ul>
                                <div class="small text-muted border-top pt-2" style="border-color: rgba(245, 158, 11, 0.15) !important;">
                                    <?= $this->lang->line('agreement_borrower_suffix'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Accordion Action Bar -->
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                        <h5 class="text-white fw-bold mb-0">
                            <i class="fas fa-list-check text-info me-2"></i><?= $this->lang->line('agreement_details_title'); ?>
                        </h5>
                        <div class="d-flex gap-2">
                            <button type="button" class="btn btn-sm btn-outline-info rounded-pill px-3 py-1 fs-7" id="btnExpandAll">
                                <i class="fas fa-angles-down me-1"></i> <?= $this->lang->line('agreement_expand_all'); ?>
                            </button>
                            <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3 py-1 fs-7" id="btnCollapseAll">
                                <i class="fas fa-angles-up me-1"></i> <?= $this->lang->line('agreement_collapse_all'); ?>
                            </button>
                        </div>
                    </div>

                    <!-- Accordion container -->
                    <div class="accordion custom-accordion d-flex flex-column gap-3 mb-4" id="accordionLoanAgreement">
                        <?php 
                        $accordion_items = $this->lang->line('agreement_accordion_items');
                        if (!empty($accordion_items)):
                            foreach ($accordion_items as $index => $item):
                        ?>
                            <div class="accordion-item rounded-4 overflow-hidden border-0" style="border: 1px solid <?= !empty($item['border_color']) ? $item['border_color'] : 'rgba(56, 189, 248, 0.2)' ?> !important;">
                                <h2 class="accordion-header" id="heading<?= $item['id']; ?>">
                                    <button class="accordion-button <?= $index === 0 ? '' : 'collapsed' ?> bg-transparent <?= !empty($item['title_class']) ? $item['title_class'] : 'text-white' ?> fw-bold fs-6 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $item['id']; ?>" aria-expanded="<?= $index === 0 ? 'true' : 'false' ?>" aria-controls="collapse<?= $item['id']; ?>">
                                        <?php if (!empty($item['badge'])): ?>
                                            <span class="badge <?= !empty($item['badge_class']) ? $item['badge_class'] : 'bg-info bg-opacity-25 text-info' ?> me-2"><?= $item['badge']; ?></span>
                                        <?php endif; ?>
                                        <?php if (!empty($item['icon'])): ?>
                                            <i class="<?= $item['icon']; ?> me-2"></i>
                                        <?php endif; ?>
                                        <?= $item['title']; ?>
                                    </button>
                                </h2>
                                <div id="collapse<?= $item['id']; ?>" class="accordion-collapse collapse <?= $index === 0 ? 'show' : '' ?>" aria-labelledby="heading<?= $item['id']; ?>">
                                    <div class="accordion-body text-slate fs-6 pt-0" style="line-height: 1.8;">
                                        <?= $item['body']; ?>
                                    </div>
                                </div>
                            </div>
                        <?php 
                            endforeach;
                        endif;
                        ?>
                    </div>

                    <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var btnExpand = document.getElementById('btnExpandAll');
                        var btnCollapse = document.getElementById('btnCollapseAll');
                        if (btnExpand && btnCollapse) {
                            btnExpand.addEventListener('click', function() {
                                document.querySelectorAll('#accordionLoanAgreement .accordion-collapse').forEach(function(el) {
                                    var bsCollapse = bootstrap.Collapse.getInstance(el) || new bootstrap.Collapse(el, {toggle: false});
                                    bsCollapse.show();
                                });
                            });
                            btnCollapse.addEventListener('click', function() {
                                document.querySelectorAll('#accordionLoanAgreement .accordion-collapse').forEach(function(el) {
                                    var bsCollapse = bootstrap.Collapse.getInstance(el) || new bootstrap.Collapse(el, {toggle: false});
                                    bsCollapse.hide();
                                });
                            });
                        }
                    });
                    </script>

                    <!-- Footer Effective Date & Seal -->
                    <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3 mt-4 pt-4 border-top" style="border-color: rgba(255, 255, 255, 0.1) !important;">
                        <div class="text-slate fs-6">
                            <strong><?= $this->lang->line('agreement_effective_date_label'); ?>:</strong> ____/_____/_____
                        </div>
                        <div class="text-white fw-bold fs-6">
                            <strong><?= $this->lang->line('agreement_company_label'); ?>:</strong> <?= $this->lang->line('agreement_lender_comp'); ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>
</section>
