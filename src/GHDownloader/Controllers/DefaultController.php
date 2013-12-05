<?php

namespace GHDownloader\Controllers;

use Joomla\DI\Container;
use Joomla\DI\ContainerAwareInterface;
use Joomla\Controller\AbstractController;

class DefaultController extends AbstractController implements ContainerAwareInterface
{
	/**
	 * @var \GHDownloader\Application
	 */
	protected $app;

	/**
	 * @var Container
	 */
	protected $container;

	public function execute()
	{
		return get_class($this);
	}

	public function getContainer()
	{
		return $this->container;
	}

	public function setContainer(Container $container)
	{
		$this->container = $container;

		return $this;
	}
}
