<?php

namespace GHDownloader\Views;

use Joomla\Github\Github;

class TagsView extends AbstractView
{
	protected $layout = 'tags';

	/**
	 * @var \Joomla\Github\Github
	 */
	protected $github;

	public function __construct(Github $github)
	{
		$this->github = $github;

		$this->paths = $this->loadPaths();
	}

	public function render()
	{
		$this->tags = $this->github->repositories->getListTags(
			$this->github->getOption('user'),
			$this->github->getOption('repo')
		);

		return parent::render();
	}
}
