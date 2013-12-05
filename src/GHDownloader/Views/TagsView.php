<?php

namespace GHDownloader\Views;

use Joomla\Github\Github;

class TagsView extends AbstractHtmlView
{
	protected $layout = 'tags/tags';

	/**
	 * @var \Joomla\Github\Github
	 */
	protected $github;

	public function __construct(Github $github)
	{
		$this->github = $github;
		parent::__construct();
	}

	public function render($layout = null, Array $data = null)
	{
		$this->title = 'Download Packages from GitHub Tags';
		$this->tags = $this->github->repositories->getListTags(
			$this->github->getOption('user'),
			$this->github->getOption('repo')
		);

		return parent::render($layout, $data = null);
	}
}
