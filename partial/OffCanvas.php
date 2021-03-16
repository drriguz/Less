<div class="off-canvas position-left" id="offCanvas" data-off-canvas>
	<button class="close-button" aria-label="Close menu" type="button" data-close>
		<i class="fa fa-close"></i>
	</button>

	<ul class="accordion-menu menu vertical" data-accordion-menu data-submenu-toggle="true">
		<li>
			<a href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>">
				<img alt="<?php echo $this->text('sitename'); ?>" class="top-bar-logo" src="<?php echo $this->text('logopath') ?>">
			</a>
		</li>
		<li class="search-wrapper">
			<form action="<?php $this->text('wgScript'); ?>" id="searchform" class="mw-search">
				<?php echo $this->makeSearchInput(array('placeholder' => wfMessage('searchsuggest-search')->text(), 'id' => 'searchInput')); ?>
			</form>
		</li>
		<?php foreach ($this->getSidebar() as $boxName => $box) {
			if (($box['header'] != wfMessage('toolbox')->text())) { ?>
				<li id='<?php echo Sanitizer::escapeIdForAttribute($box['id']) ?>' <?php echo Linker::tooltip($box['id']) ?>>
					<a href="#"><?php echo htmlspecialchars($box['header']); ?></a>
					<?php if (is_array($box['content'])) { ?>
						<ul class="menu vertical nested" data-submenu>
							<?php foreach ($box['content'] as $key => $item) {
								echo $this->makeListItem($key, $item);
							} ?>
						</ul>
					<?php } ?>
				</li>
		<?php }
		} ?>
	</ul>

</div>