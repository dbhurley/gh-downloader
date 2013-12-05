<?php

namespace GHDownloader\Views;

use Joomla\View\AbstractHtmlView;

abstract class AbstractView extends AbstractHtmlView
{
	public function render()
	{
		$this->paths->insert(APPROOT . '/src/layouts', 1);

		return parent::render();
	}
}
