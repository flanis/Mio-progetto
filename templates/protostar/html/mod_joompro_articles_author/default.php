<?php JLoader::register('JHtmlString', JPATH_LIBRARIES . '/joomla/html/html/string.php'); ?>
<ul class="latestnews<?php echo $moduleclass_sfx; ?>">
<?php foreach ($list as $item) : ?>
<li><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></li>
<p><?php echo JHtmlString::truncate(strip_tags($item->introtext), 5); ?></p>
<?php endforeach; ?>
</ul>
