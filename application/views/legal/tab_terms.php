<h3 style="margin-bottom: 0.5em;"><?= $this->lang->line('tab_terms_title'); ?></h3>

<p><?= $this->lang->line('terms_p1'); ?></p>
<p><?= $this->lang->line('terms_p2'); ?></p>

<h4><?= $this->lang->line('terms_eligible_title'); ?></h4>
<ul>
    <?php $terms_elig = $this->lang->line('terms_eligible_items'); ?>
    <?php if (!empty($terms_elig)): foreach ($terms_elig as $item): ?>
        <li><?= $item; ?></li>
    <?php endforeach; endif; ?>
</ul>

<h4><?= $this->lang->line('terms_sec1_title'); ?></h4>
<ol>
    <?php $sec1_defs = $this->lang->line('terms_sec1_items'); ?>
    <?php if (!empty($sec1_defs)): foreach ($sec1_defs as $def): ?>
        <li><?= $def; ?></li>
    <?php endforeach; endif; ?>
</ol>

<h4><?= $this->lang->line('terms_sec2_title'); ?></h4>
<p><?= $this->lang->line('terms_sec2_p1'); ?></p>
<p><?= $this->lang->line('terms_sec2_p2'); ?></p>

<h4><?= $this->lang->line('terms_sec3_title'); ?></h4>
<p><?= $this->lang->line('terms_sec3_p1'); ?></p>

<h4><?= $this->lang->line('terms_sec4_title'); ?></h4>
<p><?= $this->lang->line('terms_sec4_p1'); ?></p>

<h4><?= $this->lang->line('terms_sec5_title'); ?></h4>
<p><?= $this->lang->line('terms_sec5_p1'); ?></p>

<h4><?= $this->lang->line('terms_sec6_title'); ?></h4>
<ul>
    <?php $sec6_methods = $this->lang->line('terms_sec6_items'); ?>
    <?php if (!empty($sec6_methods)): foreach ($sec6_methods as $method): ?>
        <li><?= $method; ?></li>
    <?php endforeach; endif; ?>
</ul>

<h4><?= $this->lang->line('terms_sec7_title'); ?></h4>
<p><?= $this->lang->line('terms_sec7_p1'); ?></p>

<h4><?= $this->lang->line('terms_sec8_title'); ?></h4>
<p><?= $this->lang->line('terms_sec8_p1'); ?></p>

<h4><?= $this->lang->line('terms_sec9_title'); ?></h4>
<p><?= $this->lang->line('terms_sec9_p1'); ?></p>

<h4><?= $this->lang->line('terms_sec10_title'); ?></h4>
<p><?= $this->lang->line('terms_sec10_p1'); ?></p>

<h4><?= $this->lang->line('terms_sec11_title'); ?></h4>
<p><?= $this->lang->line('terms_sec11_p1'); ?></p>

<h4><?= $this->lang->line('terms_sec12_title'); ?></h4>
<p><?= $this->lang->line('terms_sec12_p1'); ?></p>

<h4><?= $this->lang->line('terms_sec13_title'); ?></h4>
<p><?= $this->lang->line('terms_sec13_p1'); ?></p>

<h4><?= $this->lang->line('terms_sec14_title'); ?></h4>
<p><?= $this->lang->line('terms_sec14_p1'); ?></p>

<h4><?= $this->lang->line('terms_sec15_title'); ?></h4>
<p><?= $this->lang->line('terms_sec15_email'); ?><br>
<?= $this->lang->line('terms_sec15_line'); ?><br>
<?= $this->lang->line('terms_sec15_addr'); ?></p>

