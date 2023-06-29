<?php 
/**
 * Registers an editor stylesheet for the theme.
 */
add_action( 'admin_init', 'register_editor_stylesheet' );
function register_editor_stylesheet() {
    add_editor_style( 'assets/main/main.css' );
}


/*
 * Create blocks for site
 */
add_action('acf/init', '_acf_init_block_types');
function _acf_init_block_types()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name'              => 'Spacing',
            'title'             => __('Spacing'),
            'description'       => __('A custom Spacing block.'),
            'render_template'   => 'site-structure/blocks/spacing/index.php',
            'category'          => 'thenatives-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'spacing'),
            'mode'              => 'edit', // auto, preview, edit
        ));
    }
}
