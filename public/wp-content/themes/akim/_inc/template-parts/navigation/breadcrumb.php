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
    $isArchive = is_archive();
    $isTax = is_tax();
    $is404 = is_404();

    // シングルページかどうか
    if($isSinglePage){
         $title = get_the_title();
    }

    //固定ページか投稿か
    if( $isPage ){
        $childPosts = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'page') ); 
        $parentId = $post -> post_parent;
        $isChild = $parentId ? true : false; 
        $parent = get_post( $parentId );
        $link = get_the_permalink( $parent->ID );
    } else if( $isSingle || $isTax ) {
        $postTypeObj = get_post_type_object( get_post_type() );
        $postTypeName = $postTypeObj ? $postTypeObj -> label : null;
        $postTypeLink = get_post_type_archive_link( get_post_type() );
    }

    // アーカイブページかどうか
    if( $isTax ){
        $archiveTitle = single_term_title( false, false );
    } else if( $isArchive ){
        $archiveTitle = get_the_archive_title(); 
    }
?>
<div class="breadcrumbSection">
	<div class="wrap">
		<ul class="breadcrumb">
			<li><a href="<?php echo AKIM_URI; ?>">TOP</a></li>
            <?php 
                if( $isSinglePage ){
                    if( $isPage && $isChild ){
            ?>
			<li><a href="<?php echo $link ?>"><?php echo $parent->post_title; ?></a></li>
            <?php   } else if( $isSingle && $postTypeName ){ ?>
			<li><a href="<?php echo $postTypeLink ?>"><?php echo $postTypeName ?></a></li>
            <?php   } ?>
			<li><?php echo $title; ?></li>
            <?php } else if( $isTax ){  ?>
			<li><a href="<?php echo $postTypeLink ?>"><?php echo $postTypeName ?></a></li>
			<li><?php echo $archiveTitle; ?></li>
            <?php } else if( $isArchive ){  ?>
			<li><?php echo $archiveTitle; ?></li>
            <?php } else if( $is404 ){  ?>
			<li>ページが見つかりません</li>
            <?php } ?>
		</ul>
	</div>
</div>