<div class="title-bar grid-x show-for-small-only" data-responsive-toggle="responsive-menu" data-hide-for="medium">
	<div class="cell auto">
		<a href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>">
			<h4><?php echo $this->text('sitename'); ?></h4>
		</a>
	</div>
	<?php include("PageActions.php") ?>
	<button class="menu-icon cell" type="button" data-toggle="offCanvas"></button>
</div>
<div class="off-canvas position-right" id="offCanvas" data-off-canvas>
	<button class="close-button" aria-label="Close menu" type="button" data-close>
		<span aria-hidden="true">&times;</span>
	</button>

	<ul class="accordion-menu menu vertical" data-accordion-menu data-submenu-toggle="true">
		<li>
			<img alt="<?php echo $this->text('sitename'); ?>" class="top-bar-logo" src="<?php echo $this->text('logopath') ?>">
		</li>

		<li class="show-for-small-only">
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