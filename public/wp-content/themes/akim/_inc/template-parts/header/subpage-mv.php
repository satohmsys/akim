<?php
    $subpagetitle = $subpagetitle ? $subpagetitle :  get_the_title();
    if( is_404() ){
      $subpagetitle = 'ページが見つかりません';
    }
?>
<!-- ***** mv -->
<section class="subpageMv js-effect">
	<div class="wrap">
		<h1 class="subpageMv__copy">
			<span class="mask"><span class="mask__element"><?php echo $subpagetitle ?></span></span>
		</h1>
	</div>
</section>
<!-- ///// -->