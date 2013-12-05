<?php

foreach ($this->tags as $tag)
{
	echo '<a href="' . $tag->zipball_url . '">' . $tag->name . '</a><br />' . PHP_EOL;
}