<li>
    <a href="#"><i class="fa fa-cogs"></i></a>
    <ul class="menu vertical nested" data-submenu>
        <?php foreach ($this->getToolbox() as $key => $item) {
            echo $this->makeListItem($key, $item);
        } ?>
    </ul>
</li>
<li>
    <a href="#"><i class="fa fa-user"></i></a>
    <ul class="menu vertical nested" data-submenu>
        <?php foreach ($this->getPersonalTools() as $key => $item) {
            echo $this->makeListItem($key, $item);
        } ?>
    </ul>
</li>