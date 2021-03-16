<div class="off-canvas-content" data-off-canvas-content>
    <div class="grid-container mw-body"  id="content">
        <div class="grid-x">
            <div class="cell auto">
                <h1><?php $this->html('title'); ?></h1>
            </div>
            <div class="cell shrink"><?php echo $this->getIndicators(); ?></div>
        </div>
        <div class="grid-x grid-margin-x">

            <div class="cell">
                <ul class="dropdown menu page-actions" data-dropdown-menu>
                    <?php
                    $groupLink = '<li><a href="#">%s</a>';
                    foreach ($this->data['content_navigation'] as $group => $tabs) {
                        if (!empty($tabs)) {
                            echo sprintf($groupLink, $group);
                            echo '<ul class="menu">';
                            foreach ($tabs as $key => $tab) {
                                echo $this->makeListItem($key, $tab);
                            }
                            echo '</ul></li>';
                        }
                    }
                    ?>
                </ul>
            </div>
            <div class="cell" id="bodyContent">
                <?php $this->html('bodytext'); ?>
            </div>
            <div class="cell">
                <?php $this->html('catlinks'); ?>
            </div>
        </div>
    </div>
</div>