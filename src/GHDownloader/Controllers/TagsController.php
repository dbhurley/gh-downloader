<?php

namespace GHDownloader\Controllers;

class TagsController extends DefaultController
{
	public function execute()
	{
		/** @var \Joomla\Github\Github $github */
		$github = $this->container->get('github');
		$config = $this->container->get('config');

		$tags = $github->repositories->getListTags($config->get('github.user'), $config->get('github.repo'));

		var_dump($tags);die;
	}
}
