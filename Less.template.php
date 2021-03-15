<?php

class LessTemplate extends BaseTemplate
{
	public function execute()
	{
		global $wgUser;
		$this->html('headelement'); ?>

		<!-- START LESS TEMPLATE -->
		<?php include_once("partial/Nav.php") ?>
		<?php include_once("partial/NavSmall.php") ?>

		<!-- END LESS TEMPLATE   -->

		<?php $this->printTrail(); ?>
		</body>

		</html><?php
			}
		}
