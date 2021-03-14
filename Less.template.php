<?php

class LessTemplate extends BaseTemplate
{
	public function execute()
	{
		global $wgUser;
		$this->html('headelement'); ?>

		<!-- START LESS TEMPLATE -->
		<?php include_once("partial/NavSmall.php") ?>
		<?php include_once("partial/NavMedium.php") ?>
		<?php include_once("partial/Content.php") ?>

		<!-- END LESS TEMPLATE   -->

		<?php $this->printTrail(); ?>
		</body>

		</html><?php
			}
		}
