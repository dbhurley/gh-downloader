<?php

namespace GHDownloader\Providers;

use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Github\Github;

/**
 * Class ConfigServiceProvider
 *
 * @package Stats\Providers
 */
class GithubServiceProvider implements ServiceProviderInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function register(Container $container)
	{
		$container->share(
			"github",
			function () use ($container)
			{
				$githubConfig = $container->get('config')->get('github');

				$github = new Github;

				$github->setOption('user', $githubConfig->user);
				$github->setOption('repo', $githubConfig->repo);

				return $github;
			}
		);
	}
}
