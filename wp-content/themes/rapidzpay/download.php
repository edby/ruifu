<?php
/*
Template Name:download
*/
?>
<?php get_header();?>
<link rel="stylesheet" href="<?php bloginfo("template_url")?>/css/common.css">
    <div id="download">
        <?php query_posts("showposts=1&category_name=download-head");?>
                                 <?php while(have_posts()):the_post();?>
                                     <?php echo $post->post_content;?>
                                 <?php endwhile;?>
                                 <?php wp_reset_query();?>
           <?php query_posts("showposts=1&category_name=download-content");?>
                                     <?php while(have_posts()):the_post();?>
                                         <?php echo $post->post_content;?>
                                     <?php endwhile;?>
                                     <?php wp_reset_query();?>
    </div>
    <script src="<?php bloginfo("template_url")?>/lib/jquery-3.2.1.min.js"></script>
    <script src="<?php bloginfo("template_url")?>/js/common.js"></script>
<?php get_footer();?>