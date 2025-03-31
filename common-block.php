<?php
    acf_register_block_type(array(
        'name'              => 'section',
        'title'             => __('Section'),
        'supports'          => array(
                        'align' => true,
                        'mode' => false,
                        'jsx' => true
                    ),
        'render_template'   => 'template-parts/section/block.php',
        'category'          => 'Web Advisor Block’,
        'keywords'          => array( 'Section,),
        ));
?>
