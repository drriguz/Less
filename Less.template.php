<?php

class LessTemplate extends BaseTemplate
{
	public function execute()
	{
		$this->html('headelement'); ?>

		<!-- START LESS TEMPLATE -->
		<div class="title-bar grid-x show-for-small-only" data-responsive-toggle="responsive-menu" data-hide-for="medium">
			<div class="cell auto">
				<a href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>">
					<h4><?php echo $this->text('sitename'); ?></h4>
				</a>
			</div>
			<ul class="cell auto dropdown menu" data-dropdown-menu>
				<li>
					<a href="#"><i class="fa fa-cogs"></i></a>
					<ul class="menu vertical nested" data-submenu>
						<?php foreach ($this->getToolbox() as $key => $item) {
							echo $this->makeListItem($key, $item);
						} ?>
					</ul>
				</li>
				<li>
					<a href="#"><i class="fa fa-user"></i></a>
					<ul class="menu vertical nested" data-submenu>
						<?php foreach ($this->getPersonalTools() as $key => $item) {
							echo $this->makeListItem($key, $item);
						} ?>
					</ul>
				</li>
			</ul>
			<button class="menu-icon cell" type="button" data-toggle="offCanvas"></button>
		</div>
		<div class="off-canvas position-right reveal-for-large" id="offCanvas" data-off-canvas>
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

		<div class="off-canvas-content" data-off-canvas-content>
			<p>hello</p>
		</div>

		<!-- <div class="top-bar" id="responsive-menu" data-animate="hinge-in-from-top hinge-out-from-top">
			<div class="top-bar-left">
				<ul class="dropdown menu" data-dropdown-menu>
					<li>
						<a href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>">
							<img alt="<?php echo $this->text('sitename'); ?>" class="top-bar-logo" src="<?php echo $this->text('logopath') ?>">
						</a>
					</li>
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
			</div>
			<div class="top-bar-right">
				<form action="<?php $this->text('wgScript'); ?>" id="searchform" class="mw-search">
					<ul class="menu">
						<li><?php echo $this->makeSearchInput(array('placeholder' => wfMessage('searchsuggest-search')->text(), 'id' => 'searchInput')); ?></li>
						<li><button type="submit" class="button search"><?php echo wfMessage('search')->text() ?></button></li>
					</ul>
				</form>
			</div>
		</div> -->

		<!-- END LESS TEMPLATE   -->
		<?php $this->printTrail(); ?>
		</body>

		</html><?php
			}
		}
