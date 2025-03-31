<?php 
$block_id = !empty($block['anchor']) ? $block['anchor'] : $block['id'];
$html_element = get_field('html_element') ?: 'section';
$className = $html_element . (!empty($block['className']) ? ' ' . $block['className'] : '');
$image_url = get_field('image');



<<?php echo esc_html($html_element); ?>
    class="<?php echo esc_attr($className); ?>"
    id="<?php echo esc_attr($block_id); ?>"
    <?php if ($image_url): ?> 
        data-bg="<?php echo esc_url($image_url); ?>"
    <?php endif; ?>>

    <InnerBlocks/>

</<?php echo esc_html($html_element); ?>>

<style>
    #<?php echo esc_attr($block_id); ?>{
        position: relative;
        width: 100vw;
        left: 50%;
        right: 50%;
        margin-left: -50vw;
        margin-right: -50vw;
      background-image:url('<?php echo $image_url;?>');
    }
</style>
