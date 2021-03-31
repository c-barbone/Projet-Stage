			<footer id="footer">
				<div class="container-fluid containerfoot1"></div>
				<div class="container-fluid containerfoot2">
					<div class="row h-100 align-items-end">
							<?php
							wp_nav_menu( array(
							'theme_location' => 'menufooter',
							'menu_id' => '',
							'echo' => true,
							'before' => '',
							'after' => '',
							'link_before' => '',
							'link_after' => '',
							'depth' => 0,
							'items_wrap' => '%3$s',
							'walker' => '')
							);
							?>
					</div>
				</div>
			</footer>
		</div>
		<script src="<?= site_url()."/wp-content/themes/".get_template()."/script.js"; ?>">
		<script type="text/javascript" src="/wp-content/themes/base/script.js"></script>
	</body>
</html>