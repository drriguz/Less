<?php
class LessTemplate extends BaseTemplate {
	public function execute() {
		$this->html( 'headelement' ); ?>

<?php $this->printTrail(); ?>
</body>
</html><?php
	}
}