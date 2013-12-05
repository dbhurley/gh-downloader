<?php

namespace GHDownloader\Views;

use League\Plates\Engine;
use League\Plates\Template;

abstract class AbstractHtmlView extends Template
{
	/**
	 * The view layout.
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $layout = 'default';

	/**
	 * The paths queue.
	 *
	 * @var    \SplPriorityQueue
	 * @since  1.0
	 */
	protected $paths;

	/**
	 * Method to instantiate the view.
	 *
	 * @param   ModelInterface     $model  The model object.
	 * @param   \SplPriorityQueue  $paths  The paths queue.
	 *
	 * @since   1.0
	 */
    public function __construct()
	{
		$engine = new Engine(APPROOT.'/src/templates');
		$engine->addFolder('partials', APPROOT.'/src/templates/partials');

		parent::__construct($engine);	
	}

	/**
	 * Magic toString method that is a proxy for the render method.
	 *
	 * @return  string
	 *
	 * @since   1.0
	 */
	public function __toString()
	{
		return $this->render();
	}

	public function render($layout = null, Array $data = null)
	{
		if (is_null($layout))
		{
			$layout = $this->getLayout();
		}

		return parent::render($layout, $data);
	}

	/**
	 * Method to escape output.
	 *
	 * @param   string  $output  The output to escape.
	 *
	 * @return  string  The escaped output.
	 *
	 * @see     ViewInterface::escape()
	 * @since   1.0
	 */
	public function escape($output)
	{
		// Escape the output.
		return htmlspecialchars($output, ENT_COMPAT, 'UTF-8');
	}

	/**
	 * Method to get the view layout.
	 *
	 * @return  string  The layout name.
	 *
	 * @since   1.0
	 */
	public function getLayout()
	{
		return $this->layout;
	}

	/**
	 * Method to set the view layout.
	 *
	 * @param   string  $layout  The layout name.
	 *
	 * @return  AbstractHtmlView  Method supports chaining.
	 *
	 * @since   1.0
	 */
	public function setLayout($layout)
	{
		$this->layout = $layout;

		return $this;
	}
}
