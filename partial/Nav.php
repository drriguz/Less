<div class="title-bar hide-for-large">
    <div class="title-bar-title">
        <button class="menu-icon" type="button" data-open="offCanvas"></button>
        <?php echo $this->text('sitename'); ?>
    </div>
    <div class="title-bar-left">

    </div>
    <div class="title-bar-right">
        <ul class="dropdown menu" data-dropdown-menu>
            <?php include("PageActions.php") ?>
        </ul>

    </div>
</div>

<div class="top-bar show-for-large">
    <div class="top-bar-title">
        <a href="<?php echo $this->data['nav_urls']['mainpage']['href']; ?>">
            <img alt="<?php echo $this->text('sitename'); ?>" class="top-bar-logo" src="<?php echo $this->text('logopath') ?>">
        </a>
    </div>
    <div class="top-bar-left">
        <h4 class="site-title">
            <?php echo $this->text('sitename'); ?>
        </h4>
        <small class="site-subtitle"><?php echo $this->msg('tagline'); ?></small>
    </div>
    <div class="top-bar-right">
        <form action="<?php $this->text('wgScript'); ?>" id="searchform" class="mw-search">
            <ul class="menu">
                <li><?php echo $this->makeSearchInput(array('placeholder' => wfMessage('searchsuggest-search')->text(), 'id' => 'searchInput')); ?></li>
                <li><button type="submit" class="button search"><?php echo wfMessage('search')->text() ?></button></li>
            </ul>
        </form>
        <ul class="dropdown menu" data-dropdown-menu>
            <li class="divider"></li>
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
            <?php include("PageActions.php") ?>
        </ul>

    </div>
</div>