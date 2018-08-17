<?

$ignore = array('sitemap', 'error');
// send the right header
header('Content-type: text/xml; charset="utf-8"');
// echo the doctype
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <? foreach($pages->index()->visible() as $p): ?>
  <? if(in_array($p->uri(), $ignore) || in_array($p->parent(), $ignore)) continue ?>
  <url>
    <loc><? echo html($p->url()) ?></loc>
    <lastmod><? echo $p->modified('Y-m-d') ?></lastmod>
    <priority><? echo ($p->isHomePage()) ? 1 : number_format(0.5/$p->depth(), 1) ?></priority>
  </url>
  <? endforeach ?>
</urlset>
