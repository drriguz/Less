<?php

class LessTemplate extends BaseTemplate
{
	public function execute()
	{
		global $wgUser;
		$skinOptions = $this->getSkin()->getOptions();
		$bodyOnly = $skinOptions['bodyOnly'] ?? false;
		if ( !$bodyOnly ) {
			$this->html('headelement');
		} ?>

		<!-- START LESS TEMPLATE -->
		<?php include_once("partial/Nav.php") ?>
		<?php include_once("partial/OffCanvas.php") ?>
		<?php include_once("partial/Content.php") ?>
		<?php include_once("partial/Footer.php") ?>

		<!-- END LESS TEMPLATE   -->
		<?php
		if ( $bodyOnly ) {
			return;
		}

		$this->printTrail(); ?>
		</body>

		</html><?php
			}
		}
