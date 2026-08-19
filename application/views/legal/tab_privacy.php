<h3 style="margin-bottom: 0.4em;"><?= $this->lang->line('tab_privacy_title'); ?></h3>
<h4 style="margin-bottom: 1.25em;"><?= $this->lang->line('tab_privacy_subtitle'); ?></h4>

<p><?= $this->lang->line('privacy_p1'); ?></p>
<p><?= $this->lang->line('privacy_p2'); ?></p>
<p><?= $this->lang->line('privacy_p3'); ?></p>

<h4><?= $this->lang->line('privacy_sec1_title'); ?></h4>
<p><?= $this->lang->line('privacy_sec1_desc'); ?></p>
<ul>
    <?php $sec1_items = $this->lang->line('privacy_sec1_items'); ?>
    <?php if (!empty($sec1_items)): foreach ($sec1_items as $item): ?>
        <li><?= $item; ?></li>
    <?php endforeach; endif; ?>
</ul>

<h4><?= $this->lang->line('privacy_sec2_title'); ?></h4>
<p><?= $this->lang->line('privacy_sec2_desc'); ?></p>
<ul>
    <?php $sec2_items = $this->lang->line('privacy_sec2_items'); ?>
    <?php if (!empty($sec2_items)): foreach ($sec2_items as $item): ?>
        <li><?= $item; ?></li>
    <?php endforeach; endif; ?>
</ul>

<h4><?= $this->lang->line('privacy_sec3_title'); ?></h4>
<ul>
    <?php $sec3_items = $this->lang->line('privacy_sec3_items'); ?>
    <?php if (!empty($sec3_items)): foreach ($sec3_items as $item): ?>
        <li><?= $item; ?></li>
    <?php endforeach; endif; ?>
</ul>

<p><?= $this->lang->line('privacy_p4'); ?></p>
<p><?= $this->lang->line('privacy_p5'); ?></p>
<p><?= $this->lang->line('privacy_p6'); ?></p>
<p><?= $this->lang->line('privacy_p7'); ?></p>

<h4><?= $this->lang->line('privacy_scope_title'); ?></h4>
<h5><?= $this->lang->line('privacy_consent_title'); ?></h5>
<p><?= $this->lang->line('privacy_consent_p1'); ?></p>
<p><?= $this->lang->line('privacy_consent_p2'); ?></p>
<p><?= $this->lang->line('privacy_consent_p3'); ?></p>

<h4><?= $this->lang->line('privacy_rights_title'); ?></h4>
<p><?= $this->lang->line('privacy_rights_desc'); ?></p>
<ul>
    <?php $rights_items = $this->lang->line('privacy_rights_items'); ?>
    <?php if (!empty($rights_items)): foreach ($rights_items as $item): ?>
        <li><?= $item; ?></li>
    <?php endforeach; endif; ?>
</ul>

<h4><?= $this->lang->line('privacy_collect_title'); ?></h4>
<p><?= $this->lang->line('privacy_collect_desc'); ?></p>

<h5><?= $this->lang->line('privacy_collect_sub1'); ?></h5>
<ul>
    <?php $sub1_items = $this->lang->line('privacy_collect_sub1_items'); ?>
    <?php if (!empty($sub1_items)): foreach ($sub1_items as $item): ?>
        <li><?= $item; ?></li>
    <?php endforeach; endif; ?>
</ul>

<h5><?= $this->lang->line('privacy_collect_sub2'); ?></h5>
<ul>
    <?php $sub2_items = $this->lang->line('privacy_collect_sub2_items'); ?>
    <?php if (!empty($sub2_items)): foreach ($sub2_items as $item): ?>
        <li><?= $item; ?></li>
    <?php endforeach; endif; ?>
</ul>

<h4><?= $this->lang->line('privacy_storage_title'); ?></h4>
<p><?= $this->lang->line('privacy_storage_desc'); ?></p>

<h4><?= $this->lang->line('privacy_cookies_title'); ?></h4>
<p><?= $this->lang->line('privacy_cookies_desc'); ?></p>

