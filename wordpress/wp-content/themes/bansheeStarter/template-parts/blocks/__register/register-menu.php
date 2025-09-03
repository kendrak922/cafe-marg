<?php
//  Register Block: Column
acf_register_block_type(
    array(
    'name'              => 'menu',
    'title'             => __('Menu'),
    'description'       => __('Block to display menu items'),
    'render_template'   => 'template-parts/blocks/_innerBlock/menu/menu.php',
    'category'          => 'design',
    'icon'              => 'align-wide',
    'keywords'          => array('menu', 'build'),
    'supports'          => array(
        'customClassName' => true,
        'anchor' => true,
        'align' => false,
        'align_text' => false,
        'align_content' => false
    ),
    )
);
