<?php

class LessTemplate extends BaseTemplate
{
	public function execute()
	{
		$this->html('headelement'); ?>

		<!-- START LESS TEMPLATE -->


		<div class="title-bar" data-responsive-toggle="responsive-menu" data-hide-for="medium">
			<button class="menu-icon" type="button" data-toggle="responsive-menu"></button>
			<div class="title-bar-title"><?php echo $this->text('sitename'); ?></div>
		</div>


		<div class="top-bar" id="responsive-menu" data-animate="hinge-in-from-top spin-out">
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
		</div>

		<!-- END LESS TEMPLATE   -->
		<?php $this->printTrail(); ?>
		</body>

		</html><?php
			}
		}
