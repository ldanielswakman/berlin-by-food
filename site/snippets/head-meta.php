<?php $image_url = url('assets/images/meta-image.jpg');
$title = r($page->isHomePage(), $site->title()->html(), $page->title()->html());
$site_title = $site->title()->html();
$descr = $site->description()->html();
if($page->text()->isNotEmpty()) { $descr = $page->text()->excerpt(30, 'words'); }
if($page->intro()->isNotEmpty()) { $descr = $page->intro()->excerpt(30, 'words'); }
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<meta name="author" content="<?php e($page->template() == 'article', $site_title, 'L Daniel Swakman, ldaniel.eu') ?>" />
<meta http-equiv="Cache-control" content="public">

<meta name="description" content="<?= $descr ?>">
<meta name="keywords" content="<?= $site->keywords()->html() ?>">

<!-- Social share parameters -->
<meta property="og:image" content="<?= $image_url ?>" />
<meta property="og:title" content="<?= $title ?>" />
<meta property="og:site_name" content="<?= $site_title ?>" />
<meta property="og:description" content="<?= $descr ?>" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?= $site_title ?>">
<meta name="twitter:description" content="<?= $descr ?>">
<meta name="twitter:image" content="<?= $image_url ?>">

<meta name="google-site-verification" content="" />

<meta name="description" content="<?= $site->description()->html() ?>">

<link rel="shortcut icon" href="<?= url('assets/images/favicon.png') ?>" />

<?php if($page->canonical_url()->isNotEmpty()) : ?>
<link rel="canonical" href="<?= $page->canonical_url() ?>" />
<?php endif ?>