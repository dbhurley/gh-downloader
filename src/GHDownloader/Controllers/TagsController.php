<?php

namespace GHDownloader\Controllers;

class TagsController extends DefaultController
{
	public function execute()
	{
		/** @var \Joomla\Github\Github $github */
		$github = $this->container->get('github');

		$tags = $github->repositories->getListTags('joomla', 'joomla-cms');

		var_dump($tags);die;
	}
}
