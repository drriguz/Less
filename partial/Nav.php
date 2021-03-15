<div class="title-bar grid-x">
    <div class="cell auto">
        <a href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>">
            <img alt="<?php echo $this->text('sitename'); ?>" class="top-bar-logo" src="<?php echo $this->text('logopath') ?>">
        </a>
    </div>
    <ul class="cell auto dropdown menu hide-for-small-only" data-dropdown-menu>
			<?php foreach ($this->getSidebar() as $boxName => $box) {
				if (($box['header'] != wfMessage('toolbox')->text())) { ?>
					<li id='<?php echo Sanitizer::escapeIdForAttribute($box['id']) ?>' <?php echo Linker::tooltip($box['id']) ?>>
						<a href="#"><?php echo htmlspecialchars($box['header']); ?></a>
						<?php if (is_array($box['content'])) { ?>
							<ul class="submenu menu vertical" data-submenu>
								<?php foreach ($box['content'] as $key => $item) {
									echo $this->makeListItem($key, $item);
								} ?>
							</ul>
						<?php } ?>
					</li>
			<?php }
			} ?>
		</ul>
    <button class="menu-icon cell show-for-small-only" type="button" data-toggle="offCanvas"></button>
</div>