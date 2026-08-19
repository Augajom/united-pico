						<!-- About Article -->
						<article id="about">
							<h2 class="major"><?= $this->lang->line('about_title'); ?></h2>
							<span class="image main"><img src="<?= base_url('assets/images/pic01.jpg') . '?v=' . (file_exists(FCPATH . 'assets/images/pic01.jpg') ? filemtime(FCPATH . 'assets/images/pic01.jpg') : time()) ?>" alt="<?= $this->lang->line('site_brand_name'); ?>" /></span>
							
							<h3><?= $this->lang->line('company_intro_title'); ?></h3>
							<p style="font-weight: 600; opacity: 0.9;"><em><?= $this->lang->line('company_intro_tagline'); ?></em></p>
							<p><?= $this->lang->line('company_intro_p1'); ?></p>
							<p><?= $this->lang->line('company_intro_p2'); ?></p>
							
							<h4><?= $this->lang->line('about_belief_head'); ?></h4>
							<blockquote>"<?= $this->lang->line('about_belief_text'); ?>"</blockquote>
							
							<h4><?= $this->lang->line('about_vision_title'); ?></h4>
							<p><?= $this->lang->line('about_vision_text'); ?></p>
							
							<hr />
							
							<h3><?= $this->lang->line('about_mission_title'); ?></h3>
							<ol>
								<li><strong><?= $this->lang->line('about_mission_1_title'); ?>:</strong> <?= $this->lang->line('about_mission_1_desc'); ?></li>
								<li><strong><?= $this->lang->line('about_mission_2_title'); ?>:</strong> <?= $this->lang->line('about_mission_2_desc'); ?></li>
								<li><strong><?= $this->lang->line('about_mission_3_title'); ?>:</strong> <?= $this->lang->line('about_mission_3_desc'); ?></li>
								<li><strong><?= $this->lang->line('about_mission_4_title'); ?>:</strong> <?= $this->lang->line('about_mission_4_desc'); ?></li>
							</ol>
							
							<hr />
							
							<h3><?= $this->lang->line('core_values_head1'); ?> - <?= $this->lang->line('core_values_head2'); ?></h3>
							<ul class="alt">
								<li><strong><?= $this->lang->line('val_easy_apply_title'); ?>:</strong> <?= $this->lang->line('val_easy_apply_desc'); ?></li>
								<li><strong><?= $this->lang->line('val_accessible_title'); ?>:</strong> <?= $this->lang->line('val_accessible_desc'); ?></li>
								<li><strong><?= $this->lang->line('val_transparent_title'); ?>:</strong> <?= $this->lang->line('val_transparent_desc'); ?></li>
								<li><strong><?= $this->lang->line('val_responsible_title'); ?>:</strong> <?= $this->lang->line('val_responsible_desc'); ?></li>
							</ul>
						</article>

						<!-- Services Article -->
						<article id="services">
							<h2 class="major"><?= $this->lang->line('services_title'); ?></h2>
							<span class="image main"><img src="<?= base_url('assets/images/pic02.jpg') . '?v=' . (file_exists(FCPATH . 'assets/images/pic02.jpg') ? filemtime(FCPATH . 'assets/images/pic02.jpg') : time()) ?>" alt="<?= $this->lang->line('services_title'); ?>" /></span>
							
							<h3><?= $this->lang->line('services_prod_name'); ?></h3>
							<p style="font-weight: 700; opacity: 0.95;"><strong><?= $this->lang->line('services_prod_sub'); ?></strong></p>
							<p><?= $this->lang->line('services_prod_desc'); ?></p>
							
							<hr />
							
							<h3><?= $this->lang->line('loan_features_title'); ?></h3>
							<div class="table-wrapper">
								<table class="alt">
									<tbody>
										<tr>
											<td><strong style="color: var(--pico-gold-light);"><?= $this->lang->line('feat_limit_title'); ?></strong></td>
											<td><strong style="color: #fef08a; font-size: 1.05em;"><?= $this->lang->line('feat_limit_val'); ?></strong> — <?= $this->lang->line('feat_limit_desc'); ?></td>
										</tr>
										<tr>
											<td><strong style="color: var(--pico-gold-light);"><?= $this->lang->line('feat_rate_title'); ?></strong></td>
											<td><strong style="color: #fef08a; font-size: 1.05em;"><?= $this->lang->line('feat_rate_val'); ?></strong> — <?= $this->lang->line('feat_rate_desc'); ?></td>
										</tr>
										<tr>
											<td><strong style="color: var(--pico-gold-light);"><?= $this->lang->line('feat_term_title'); ?></strong></td>
											<td><strong style="color: #fef08a; font-size: 1.05em;"><?= $this->lang->line('feat_term_val'); ?></strong> — <?= $this->lang->line('feat_term_desc'); ?></td>
										</tr>
										<tr>
											<td><strong style="color: var(--pico-gold-light);"><?= $this->lang->line('feat_trans_title'); ?></strong></td>
											<td><?= $this->lang->line('feat_trans_desc'); ?></td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<ul class="actions" style="margin-top: 1.5em;">
								<li><a href="#apply" class="button primary icon solid fa-paper-plane"><?= $this->lang->line('btn_apply_loan'); ?></a></li>
							</ul>
						</article>

						<!-- Apply Article -->
						<article id="apply">
							<h2 class="major"><?= $this->lang->line('apply_title'); ?></h2>
							<span class="image main"><img src="<?= base_url('assets/images/pic03.jpg') . '?v=' . (file_exists(FCPATH . 'assets/images/pic03.jpg') ? filemtime(FCPATH . 'assets/images/pic03.jpg') : time()) ?>" alt="<?= $this->lang->line('apply_title'); ?>" /></span>
							
							<h3><?= $this->lang->line('apply_subtitle_1'); ?></h3>
							<p><?= $this->lang->line('apply_subtitle_2'); ?></p>
							
							<ul class="actions" style="margin-bottom: 2em;">
								<li><a href="<?= $this->lang->line('app_download_url'); ?>" class="button primary icon solid fa-download"><?= $this->lang->line('apply_cta_btn'); ?></a></li>
							</ul>
							
							<hr />
							
							<h3><?= $this->lang->line('apply_title'); ?></h3>
							<ol>
								<li><strong><?= $this->lang->line('step_1_title'); ?>:</strong> <?= $this->lang->line('step_1_desc'); ?></li>
								<li><strong><?= $this->lang->line('step_2_title'); ?>:</strong> <?= $this->lang->line('step_2_desc'); ?></li>
								<li><strong><?= $this->lang->line('step_3_title'); ?>:</strong> <?= $this->lang->line('step_3_desc'); ?></li>
								<li><strong><?= $this->lang->line('step_4_title'); ?>:</strong> <?= $this->lang->line('step_4_desc'); ?></li>
								<li><strong><?= $this->lang->line('step_5_title'); ?>:</strong> <?= $this->lang->line('step_5_desc'); ?></li>
								<li><strong><?= $this->lang->line('step_6_title'); ?>:</strong> <?= $this->lang->line('step_6_desc'); ?></li>
								<li><strong><?= $this->lang->line('step_7_title'); ?>:</strong> <?= $this->lang->line('step_7_desc'); ?><br><small><i class="fas fa-check-circle"></i> <?= $this->lang->line('step_7_tip'); ?></small></li>
							</ol>
							
							<hr />
							
							<h3><?= $this->lang->line('eligibility_title'); ?></h3>
							<ul>
								<?php foreach($this->lang->line('eligibility_items') as $item): ?>
									<li><?= ltrim($item, '- '); ?></li>
								<?php endforeach; ?>
							</ul>
							<p><small>* <?= $this->lang->line('eligibility_note'); ?></small></p>
							
							<hr />
							
							<h3><?= $this->lang->line('docs_title'); ?></h3>
							<p><strong><?= $this->lang->line('docs_sub1'); ?> <?= $this->lang->line('docs_sub2'); ?></strong></p>
							
							<h4><?= $this->lang->line('docs_main_head'); ?></h4>
							<ul>
								<li><?= $this->lang->line('docs_main_1'); ?></li>
								<li style="opacity: 0.85;"><?= $this->lang->line('docs_main_2'); ?></li>
							</ul>
							
							<h4><?= $this->lang->line('docs_consider_head'); ?></h4>
							<ul>
								<?php foreach($this->lang->line('docs_consider_items') as $doc_item): ?>
									<li><?= $doc_item; ?></li>
								<?php endforeach; ?>
							</ul>
							<p><small><?= $this->lang->line('docs_note'); ?></small></p>
						</article>

						<!-- Policy Article -->
						<article id="policy">
							<h2 class="major"><?= $this->lang->line('gov_title'); ?></h2>
							
							<h3><?= $this->lang->line('gov_subtitle'); ?></h3>
							<p><?= $this->lang->line('gov_p1'); ?></p>
							<p><?= $this->lang->line('gov_p2'); ?></p>
							
							<hr />
							
							<h3><?= $this->lang->line('license_info_title'); ?></h3>
							<div class="table-wrapper">
								<table class="alt">
									<tbody>
										<tr>
											<td><strong style="color: var(--pico-gold-light);"><?= $this->lang->line('license_type_label'); ?></strong></td>
											<td><?= $this->lang->line('license_type_val'); ?></td>
										</tr>
										<tr>
											<td><strong style="color: var(--pico-gold-light);"><?= $this->lang->line('license_no_label'); ?></strong></td>
											<td><?= $this->lang->line('license_no_val'); ?></td>
										</tr>
										<tr>
											<td><strong style="color: var(--pico-gold-light);"><?= $this->lang->line('license_date_label'); ?></strong></td>
											<td><?= $this->lang->line('license_date_val'); ?></td>
										</tr>
										<tr>
											<td><strong style="color: var(--pico-gold-light);"><?= $this->lang->line('license_auth_label'); ?></strong></td>
											<td><?= $this->lang->line('license_auth_val'); ?></td>
										</tr>
									</tbody>
								</table>
							</div>
							
							<p><?= $this->lang->line('license_check_text'); ?></p>
							
							<ul class="actions" style="margin-bottom: 2em;">
								<li><a href="<?= $this->lang->line('license_check_url'); ?>" target="_blank" class="button primary icon solid fa-certificate"><?= $this->lang->line('btn_check_license'); ?></a></li>
							</ul>
							
							<hr />
							
							<h4><?= $this->lang->line('legal_docs_title'); ?></h4>
							
							<ul class="policy-tab-nav">
								<li><button type="button" class="button small dim-tab-btn primary" onclick="switchDimTab('tab-privacy', this)"><i class="fas fa-user-shield"></i> <span><?= $this->lang->line('tab_privacy_title'); ?></span></button></li>
								<li><button type="button" class="button small dim-tab-btn" onclick="switchDimTab('tab-terms', this)"><i class="fas fa-file-contract"></i> <span><?= $this->lang->line('tab_terms_title'); ?></span></button></li>
								<li><button type="button" class="button small dim-tab-btn" onclick="switchDimTab('tab-agreement', this)"><i class="fas fa-file-signature"></i> <span><?= $this->lang->line('tab_agreement_title'); ?></span></button></li>
							</ul>
							
							<div class="dimension-legal-reader" style="max-height: 480px; overflow-y: auto; background: rgba(0,0,0,0.25); padding: 1.5em; border-radius: 6px; border: 1px solid rgba(255,255,255,0.15); margin-top: 1em;">
								<div id="tab-privacy" class="dim-tab-pane">
									<?php $this->load->view('legal/tab_privacy'); ?>
								</div>
								<div id="tab-terms" class="dim-tab-pane" style="display: none;">
									<?php $this->load->view('legal/tab_terms'); ?>
								</div>
								<div id="tab-agreement" class="dim-tab-pane" style="display: none;">
									<?php $this->load->view('legal/tab_agreement'); ?>
								</div>
							</div>
						</article>

						<!-- Contact Article -->
						<article id="contact">
							<h2 class="major"><?= $this->lang->line('contact_title'); ?></h2>
							
							<h3><?= $this->lang->line('company_fullname'); ?></h3>
							<p style="font-weight: 600; opacity: 0.9;"><em><?= $this->lang->line('company_slogan'); ?></em></p>
							
							<hr />
							
							<h4><?= $this->lang->line('footer_heading_contact'); ?></h4>
							<ul class="alt">
								<li>
									<strong style="color: var(--pico-gold-light);"><i class="fas fa-building"></i> <?= $this->lang->line('company_fullname'); ?>:</strong><br />
									<?= $this->lang->line('company_address'); ?>
								</li>
								<li>
									<strong style="color: var(--pico-gold-light);"><i class="fas fa-envelope"></i> <?= $this->lang->line('label_email'); ?>:</strong> <a href="mailto:<?= $this->lang->line('company_email'); ?>" style="text-decoration: underline; color: #fef08a;"><?= $this->lang->line('company_email'); ?></a>
								</li>
							</ul>
							
							<hr />
							
							<p><?= $this->lang->line('footer_desc'); ?></p>
							<p><?= $this->lang->line('footer_license_note'); ?></p>
							<p><strong style="color: var(--pico-gold-light);"><?= $this->lang->line('btn_check_license_long'); ?>:</strong> <a href="<?= $this->lang->line('license_check_url'); ?>" target="_blank" style="text-decoration: underline; word-break: break-all; color: #fef08a;"><?= $this->lang->line('license_check_url'); ?></a></p>
							
							<hr />
							
							<h4><?= $this->lang->line('footer_heading_policy'); ?></h4>
							<div class="policy-links-list" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 0.85rem; width: 100%; margin-top: 1rem;">
								<a href="#policy" class="button small policy-link-btn" onclick="switchDimTabDirect('tab-privacy')" style="white-space: normal; height: auto; min-height: 3.25rem; line-height: 1.45; padding: 0.85rem 1.15rem; text-align: left; display: flex; align-items: center; justify-content: flex-start; width: 100%; border-radius: 6px;">
									<i class="fas fa-user-shield" style="margin-right: 0.75rem; color: var(--pico-gold-light); font-size: 1.15rem; flex-shrink: 0;"></i>
									<span style="flex-grow: 1; font-weight: 600;"><?= $this->lang->line('footer_link_privacy'); ?></span>
									<i class="fas fa-arrow-right" style="margin-left: 0.5rem; opacity: 0.7; font-size: 0.85rem;"></i>
								</a>
								<a href="#policy" class="button small policy-link-btn" onclick="switchDimTabDirect('tab-terms')" style="white-space: normal; height: auto; min-height: 3.25rem; line-height: 1.45; padding: 0.85rem 1.15rem; text-align: left; display: flex; align-items: center; justify-content: flex-start; width: 100%; border-radius: 6px;">
									<i class="fas fa-file-contract" style="margin-right: 0.75rem; color: var(--pico-gold-light); font-size: 1.15rem; flex-shrink: 0;"></i>
									<span style="flex-grow: 1; font-weight: 600;"><?= $this->lang->line('footer_link_terms'); ?></span>
									<i class="fas fa-arrow-right" style="margin-left: 0.5rem; opacity: 0.7; font-size: 0.85rem;"></i>
								</a>
								<a href="#policy" class="button small policy-link-btn" onclick="switchDimTabDirect('tab-agreement')" style="white-space: normal; height: auto; min-height: 3.25rem; line-height: 1.45; padding: 0.85rem 1.15rem; text-align: left; display: flex; align-items: center; justify-content: flex-start; width: 100%; border-radius: 6px;">
									<i class="fas fa-file-signature" style="margin-right: 0.75rem; color: var(--pico-gold-light); font-size: 1.15rem; flex-shrink: 0;"></i>
									<span style="flex-grow: 1; font-weight: 600;"><?= $this->lang->line('footer_link_agreement'); ?></span>
									<i class="fas fa-arrow-right" style="margin-left: 0.5rem; opacity: 0.7; font-size: 0.85rem;"></i>
								</a>
							</div>
						</article>