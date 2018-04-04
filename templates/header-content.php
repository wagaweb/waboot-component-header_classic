<div class="header-blocks logo-<?php echo $logo_position; ?>">
    <div class="header-logo">
        <a href="<?php echo home_url( '/' ); ?>">
            <?php if ( \Waboot\template_tags\get_desktop_logo() != "" ) : ?>
                <?php \Waboot\template_tags\desktop_logo(); ?>
            <?php else : ?>
                <?php \Waboot\template_tags\site_title(); ?>
            <?php endif; ?>
        </a>
    </div>
    <div class="header-left">
        <?php dynamic_sidebar( 'header-left' ); ?>
    </div>
    <div class="header-right">
        <?php dynamic_sidebar( 'header-right' ); ?>
    </div>
</div>