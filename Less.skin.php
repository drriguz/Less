<?php
class SkinLess extends SkinTemplate {
	var $skinname = 'less', $stylename = 'Less',
		$template = 'LessTemplate';

	/**
	 * @inheritDoc
	 */
	public function __construct( $options ) {
		$skinOptions = $this->getOptions();
		if ( isset( $skinOptions['bodyOnly' ] ) ) {
			$options['bodyOnly'] = true;
		}
		parent::__construct( $options );
	}

	public function initPage( OutputPage $out ) {
		parent::initPage( $out );

        $viewport_meta = 'width=device-width, user-scalable=yes, initial-scale=1.0';
		$out->addMeta('viewport', $viewport_meta);
		$out->addModules( 'skins.less.js' );

		$out->addHtmlClasses('no-js');
		$skinOptions = $this->getOptions();
		if ( !isset( $skinOptions['bodyOnly'] ) ) {
			$out->addModuleStyles( array(
				'mediawiki.skinning.interface',
			) );
		}
		$out->addModuleStyles( array(
			'skins.less.styles'
		) );
	}
}
?>