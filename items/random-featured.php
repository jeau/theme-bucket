<?php if ($items): ?>
    <?php foreach ($items as $item): ?>
        <?php
        $title = metadata($item, array('Dublin Core', 'Title'));
        $description = metadata($item, array('Dublin Core', 'Description'), array('snippet' => 150));
        
        $style = '';
        if (metadata($item, 'has thumbnail')) {
            $style  = "style='background-image: url(";
            $style .= file_display_url(get_db()->getTable('File')->findWithImages($item->id, 0));
            $style .= ");'";
        }
        ?>
    <div id="featured-item" <?php echo $style; ?>>
        <div class="shadow">
        <h2><?php echo __('Featured Item'); ?></h2>
            <h3><?php echo link_to($item, 'show', strip_formatting($title)); ?></h3>
            <?php if ($description): ?>
                <p class="item-description"><?php echo $description; ?></p>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; ?>
<?php else: ?>
    <div id="featured-item">
        <p><?php echo __('No featured items are available.'); ?></p>
    </div>
<?php endif; ?>
