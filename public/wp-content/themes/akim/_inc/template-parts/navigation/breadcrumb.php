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
    
    $childPosts = get_children( array( 'post_parent' => $post->ID, 'post_type' => 'page') ); 
    $parentId = $post -> post_parent;
    $isParent = $parentId ? true : false; 
    $parent = get_post( $parentId );
    $isSingle = is_singular();
    if($isSingle){
         $title = get_the_title();
         $link = get_the_permalink( $parent->ID );
    }
    var_dump( $post->post_parent );
?>
<div class="breadcrumbSection">
	<div class="wrap">
		<ul class="breadcrumb">
			<li><a href="<?php echo AKIM_URI; ?>">TOP</a></li>
            <?php if( $isSingle ){ ?>
            <?php if( $isParent ){ ?>
			<li><a href="<?php echo $link ?>"><?php echo $parent->post_title; ?></a></li>
            <?php } ?>
			<li><a href=""><?php echo $title; ?></a></li>
            <?php } ?>
		</ul>
	</div>
</div>