<?php
class SkinLess extends SkinTemplate {
	var $skinname = 'Less', $stylename = 'Less',
		$template = 'LessTemplate';
	
	public function initPage( OutputPage $out ) {
		parent::initPage( $out );

        $viewport_meta = 'width=device-width, user-scalable=yes, initial-scale=1.0';
		$out->addMeta('viewport', $viewport_meta);
		$out->addModules( 'skins.less.js' );
	}

	function setupSkinUserCss( OutputPage $out ) {
		parent::setupSkinUserCss( $out );
		$out->addModuleStyles( array(
			'mediawiki.skinning.interface', 'skins.less'
		) );
	}
}

?>