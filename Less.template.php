<?php

class LessTemplate extends BaseTemplate
{
	public function execute()
	{
		$this->html('headelement'); ?>

		<!-- START LESS TEMPLATE -->
		<?php include_once("partial/NavSmall.php") ?>
		<?php include_once("partial/NavMedium.php") ?>



		<div class="off-canvas-content" data-off-canvas-content>
			<p>hello</p>
		</div>


		<!-- END LESS TEMPLATE   -->

		<?php $this->printTrail(); ?>
		</body>

		</html><?php
			}
		}
