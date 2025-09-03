 <?php
 /**
  * Block: Content Stack    
  * - Slug: menu
  */

 // Block Variables
 $blockID = (!empty($block['anchor']) ? $block['anchor'] : $block['id']);
 

 use Lean\Load;

 if (!defined('ABSPATH')) {
     exit; // Exit if accessed directly.
 }

 if (!have_rows('menu_section')) {
     return; // return early if there is no title, text, and actions to display
 }

    ?>
<div class="menu">
<?php if (have_rows('menu_section')) : ?>
        <?php while(have_rows('menu_section')) :
            the_row(); ?>
            <div class="menu__section">
                <?php $section_title = get_sub_field('section_title');
                if ($section_title) : ?>
                    <?php         // heading
                            Load::atom(
                                'text/heading',
                                [
                                    'heading'         =>  $section_title,
                                    'heading_level'   => 'h3',
                                    'heading_style'   => 'h3 u-textTertiary'
                                ]
                            );
                    ?>
                <?php endif;
                if (have_rows('menu_item')) : 
                    ?>
                    <?php while(have_rows('menu_item')) :
                        the_row();
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                        $price = get_sub_field('price');
                        $dietary_restrictions = get_sub_field('dietary_restrictions') ?? '';
                        ?>
                        <div class="menu__item">
                            <div class="menu__item-title">
                                <div>
                                    <?php if ($title) : ?>
                                                <?php         // heading
                                                        Load::atom(
                                                            'text/heading',
                                                            [
                                                                'heading'         =>  $title,
                                                                'heading_level'   => 'h4',
                                                                'heading_style'   => 'h5 u-textWeightBold u-textCapitalize u-textPrimary'
                                                            ]
                                                        );
                                                ?>
                                    <?php endif;?>
                                    <?php if ($dietary_restrictions) : 
                                        foreach ($dietary_restrictions as $icon) :
                                            Load::atom(
                                                'icon/icon',
                                                    [
                                                        'icon'     => [
                                                            'type'  => 'inline',
                                                            'svg_icon' => $icon, // type: svg
                                                        ]
                                                    ]
                                                );
                                        endforeach;
                                    endif;?>
                                </div>
                                <?php if ($price) : ?>
                                    <strong><?php echo $price; ?></strong>
                                <?php endif;?>
                            </div>
                            <?php if($text) : ?>
                                <?php echo $text; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
<?php endif; ?>
</div>
