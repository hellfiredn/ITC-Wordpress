<?php
add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts() {
    $version = date("Hhis"); // FOR DEV ONLY 

    // Load CSS
    wp_enqueue_style('main-style-css', THEME_URL . '/assets/main/main.css', array(), $version, 'all');
    
    // Load JS
    wp_enqueue_script('main-scripts-js', THEME_URL . '/assets/main/main.js', array('jquery'), $version, true);  
}


/*
 * Create blocks for site
 */
add_filter('block_categories_all', 'custom_block_category', 10, 2);
function custom_block_category($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'custom-blocks',
                'title' => __('The custom Blocks', 'custom-blocks'),
            ),
        )
    );
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
            'name'              => 'About-us-header',
            'title'             => __('About us header'),
            'description'       => __('A custom About us header block.'),
            'render_template'   => 'site-structure/blocks/about-us-header/index.php',
            'category'          => 'custom-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'about us', 'header'),
            'mode'              => 'edit', // auto, preview, edit
        ));

        acf_register_block_type(array(
            'name'              => 'About-us-intro',
            'title'             => __('About us intro'),
            'description'       => __('A custom About us intro block.'),
            'render_template'   => 'site-structure/blocks/about-us-intro/index.php',
            'category'          => 'custom-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'about us', 'intro'),
            'mode'              => 'edit', // auto, preview, edit
        ));

        acf_register_block_type(array(
            'name'              => 'About-us-pillars',
            'title'             => __('About us pillars'),
            'description'       => __('A custom About us pillars block.'),
            'render_template'   => 'site-structure/blocks/about-us-pillars/index.php',
            'category'          => 'custom-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'about us', 'pillars'),
            'mode'              => 'edit', // auto, preview, edit
        ));

        acf_register_block_type(array(
            'name'              => 'About-us-achievement',
            'title'             => __('About us achievement'),
            'description'       => __('A custom About us achievement block.'),
            'render_template'   => 'site-structure/blocks/about-us-achievement/index.php',
            'category'          => 'custom-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'about us', 'achievement'),
            'mode'              => 'edit', // auto, preview, edit
        ));

        acf_register_block_type(array(
            'name'              => 'About-us-core',
            'title'             => __('About us core'),
            'description'       => __('A custom About us core block.'),
            'render_template'   => 'site-structure/blocks/about-us-core/index.php',
            'category'          => 'custom-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'about us', 'core'),
            'mode'              => 'edit', // auto, preview, edit
        ));

        acf_register_block_type(array(
            'name'              => 'About-us-leadership',
            'title'             => __('About us leadership'),
            'description'       => __('A custom About us leadership block.'),
            'render_template'   => 'site-structure/blocks/about-us-leadership/index.php',
            'category'          => 'custom-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'about us', 'leadership'),
            'mode'              => 'edit', // auto, preview, edit
        ));
    }
}