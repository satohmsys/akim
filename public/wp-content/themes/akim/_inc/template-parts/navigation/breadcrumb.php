<?php
/**
 * breadcrumb
 *
 * @package WordPress
 * @subpackage akimcorp
 */
?>
<?php
    global $post;
    
    $isSinglePage = is_singular();
    $isSingle = is_single();
    $isPage = is_page();

    if($isSinglePage){
         $title = get_the_title();
    }

    if( $isPage ){
        $childPosts = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'page') ); 
        $parentId = $post -> post_parent;
        $isChild = $parentId ? true : false; 
        $parent = get_post( $parentId );
        $link = get_the_permalink( $parent->ID );
    } else if( $isSingle ) {
        $postTypeObj = get_post_type_object( get_post_type() );
        $postTypeName = $postTypeObj ? $postTypeObj -> label : null;
        $postTypeLink = get_post_type_archive_link( get_post_type() );
    }

    $isArchive = is_archive();
    if( $isArchive ){
        $archiveTitle = get_the_archive_title(); 
    }
?>
<div class="breadcrumbSection">
	<div class="wrap">
		<ul class="breadcrumb">
			<li><a href="<?php echo AKIM_URI; ?>">TOP</a></li>
            <?php 
                if( $isSinglePage ){
                    if( is_page() && $isChild ){
            ?>
			<li><a href="<?php echo $link ?>"><?php echo $parent->post_title; ?></a></li>
            <?php   } else if( is_single() && $postTypeName ){ ?>
			<li><a href="<?php echo $postTypeLink ?>"><?php echo $postTypeName ?></a></li>
            <?php   }   ?>
			<li><?php echo $title; ?></li>
            <?php } else if( is_archive() ){  ?>
			<li><?php echo $archiveTitle; ?>一覧</li>
            <?php } ?>
		</ul>
	</div>
</div>