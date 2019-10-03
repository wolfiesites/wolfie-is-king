<div class="sk_icon_list">
    <?php foreach( $atts['options'] as $key => $item ){ 
        $text = $item->text_icon;
        $textColor = $item->text_color;
        $icon = $item->icon;
        $iconColor = $item->icon_color;
        $link = $item->text_link;
        ?>
        <div class="sk_row">
            <div class="icon-wrapper">
                <i class="<?php echo $icon ?>" style="color:<?php echo $iconColor ?>;"></i>
            </div><!-- /icon-wrapper -->
            <div class="text-wrapper">
                <?php if($link){ ?>
                    <a style="color:<?php echo $textColor ?>;text-decoration: none;" href="<?php echo $link ?>">
                    <p style="margin:0; color:<?php echo $textColor ?>;"><?php echo $text ?></p>                    
                    </a>
                <?php } else { ?>

                    <p style="margin:0; color:<?php echo $textColor ?>;"><?php echo $text ?></p>

                <?php } ?>
            </div><!-- /text-wrapper -->
        </div><!-- /sk_row -->
    <?php } ?>
</div><!-- /sk_icon_list -->