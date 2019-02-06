<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage AKIM CORP
 * @since 1.0
 * @version 1.0
 */

$siteTitle = AKIM_TEXT_NAME;
$siteDescription = AKIM_TEXT_DESCRIPTION;
$ogImage = AKIM_IMG_URI . 'common/ogp.png';
$siteUrl = AKIM_URI;
$favicon = AKIM_IMG_URI . 'common/favicon.png';
?>
<meta property="og:title" content="<?php echo $siteTitle; ?>">
<meta property="og:site_name" content="<?php echo $siteTitle; ?>">
<meta property="og:description" content="<?php echo $siteDescription; ?>">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php echo $ogImage; ?>">
<meta property="og:image:width" content="1200" /> 
<meta property="og:image:height" content="630" />
<meta property="og:url" content="<?php echo $siteUrl; ?>">
<meta property="og:locale" content="ja_JP">
<meta name="twitter:card" content="summary">
<meta name="twitter:title" content="<?php echo $siteTitle; ?>">
<meta name="twitter:description" content="<?php echo $siteDescription; ?>">
<link rel="icon" type="image/png" href="<?php echo $favicon; ?>"> 