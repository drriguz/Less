<div class="off-canvas-content" data-off-canvas-content>
    <div class="row">
        <div class="large-12 columns">
            <!-- Output page indicators -->
            <?php echo $this->getIndicators(); ?>
            <!-- If user is logged in output echo location -->
            <?php if ($wgUser->isLoggedIn()) : ?>
                <div id="echo-notifications">
                    <div id="echo-notifications-alerts"></div>
                    <div id="echo-notifications-messages"></div>
                    <div id="echo-notifications-notice"></div>
                </div>
            <?php endif; ?>
            <!--[if lt IE 9]>
				<div id="siteNotice" class="sitenotice panel radius"><?php echo $this->text('sitename') . ' ' . wfMessage('foreground-browsermsg')->text(); ?></div>
				<![endif]-->

            <?php if ($this->data['sitenotice']) { ?><div id="siteNotice" class="sitenotice"><?php $this->html('sitenotice'); ?></div><?php } ?>
            <?php if ($this->data['newtalk']) { ?><div id="usermessage" class="newtalk panel radius"><?php $this->html('newtalk'); ?></div><?php } ?>
        </div>
    </div>

    <div class="row">
        <div id="p-cactions" class="large-12 columns">
            <?php if ($wgUser->isLoggedIn()) : ?>
                <a id="actions-button" href="#" data-dropdown="actions" data-options="align:left; is_hover: true; hover_timeout:700" class="button small secondary radius"><i class="fa fa-cog"><span class="show-for-medium-up">&nbsp;<?php echo wfMessage('actions')->text() ?></span></i></a>
                <!--RTL -->
                <ul id="actions" class="f-dropdown" data-dropdown-content>
                    <?php foreach ($this->data['content_actions'] as $key => $item) {
                        echo preg_replace(array('/\sprimary="1"/', '/\scontext="[a-z]+"/', '/\srel="archives"/'), '', $this->makeListItem($key, $item));
                    } ?>
                    <?php Hooks::run('SkinTemplateToolboxEnd', array(&$this, true));  ?>
                </ul>
                <!--RTL -->
            <?php endif;
            $namespace = str_replace('_', ' ', $this->getSkin()->getTitle()->getNsText());
            $displaytitle = $this->data['title'];
            if (!empty($namespace)) {
                $pagetitle = $this->getSkin()->getTitle();
                $newtitle = str_replace($namespace . ':', '', $pagetitle);
                $displaytitle = str_replace($pagetitle, $newtitle, $displaytitle);
            ?><h4 class="namespace label"><?php print $namespace; ?></h4><?php } ?>
            <div id="content">
                <h1 id="firstHeading" class="title"><?php print $displaytitle; ?></h1>
                <?php if ($this->data['isarticle']) { ?><h3 id="tagline"><?php $this->msg('tagline') ?></h3><?php } ?>
                <h5 id="siteSub" class="subtitle"><?php $this->html('subtitle') ?></h5>
                <div id="contentSub" class="clear_both"></div>
                <div id="bodyContent" class="mw-bodytext">
                    <?php $this->html('bodytext'); ?>}
                    <div class="clear_both"></div>
                </div>
                <div class="group"><?php $this->html('catlinks'); ?></div>
                <?php $this->html('dataAfterContent'); ?>
            </div>
        </div>
    </div>
</div>