<div class="footer text-center">
    <div class="grid-x">
        <?php foreach ($this->getFooterLinks('flat') as $key) { ?>
            <div class="cell">
            <small><?php $this->html($key) ?></small>
        </div>

        <?php } ?>
        <?php foreach ($this->getFooterIcons('icononly') as $blockName => $footerIcons) { ?>
            <div class="cell">
                <?php
                foreach ($footerIcons as $icon) {
                    echo $this->getSkin()->makeFooterIcon($icon);
                }
                ?>
            </div>
        <?php } ?>
    </div>

</div>