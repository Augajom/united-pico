				</div> <!-- End #main -->

				<!-- Footer -->
				<footer id="footer">
					<p class="copyright">&copy; <?= date('Y'); ?> <?= $this->lang->line('company_fullname'); ?>. <?= $this->lang->line('footer_rights'); ?></p>
				</footer>

			</div> <!-- End #wrapper -->

		<!-- Background Layer -->
		<div id="bg"></div>

		<!-- Scripts -->
		<script src="<?= site_assets_url('js/jquery.min.js') ?>"></script>
		<script src="<?= site_assets_url('js/browser.min.js') ?>"></script>
		<script src="<?= site_assets_url('js/breakpoints.min.js') ?>"></script>
		<script src="<?= site_assets_url('js/util.js') ?>"></script>
		<script src="<?= site_assets_url('js/main.js') ?>"></script>

		<script>
		// Dimension Legal Tab Switcher
		function switchDimTab(tabId, btn) {
			var panes = document.querySelectorAll('.dim-tab-pane');
			panes.forEach(function(p) {
				p.style.display = 'none';
			});

			var buttons = document.querySelectorAll('.dim-tab-btn');
			buttons.forEach(function(b) {
				b.classList.remove('primary');
			});

			var target = document.getElementById(tabId);
			if (target) {
				target.style.display = 'block';
			}

			if (btn) {
				btn.classList.add('primary');
			}
		}

		function switchDimTabDirect(tabId) {
			var buttons = document.querySelectorAll('.dim-tab-btn');
			if (tabId === 'tab-privacy' && buttons[0]) switchDimTab('tab-privacy', buttons[0]);
			if (tabId === 'tab-terms' && buttons[1]) switchDimTab('tab-terms', buttons[1]);
			if (tabId === 'tab-agreement' && buttons[2]) switchDimTab('tab-agreement', buttons[2]);
		}
		</script>

	</body>
</html>