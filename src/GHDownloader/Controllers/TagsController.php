<?php

namespace GHDownloader\Controllers;

use GHDownloader\Views\TagsView;

class TagsController extends DefaultController
{
	public function execute()
	{
		/** @var \Joomla\Github\Github $github */
		$github = $this->container->get('github');

		return (new TagsView($github))->render();
	}
}
