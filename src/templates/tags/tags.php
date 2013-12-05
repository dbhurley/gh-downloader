<?php $this->layout('partials::head') ?>

<ul>
<?php
foreach ($this->tags as $tag)
{
	echo '<li><a href="' . $tag->zipball_url . '">' . $tag->name . '</a></li>' . PHP_EOL;
} ?>
</ul>