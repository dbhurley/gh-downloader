# GitHub Downloader

This is a basic app that utilizes the Joomla! GitHub package to get tagged versions for a given repo,
and provides download links and statistics for the number of downloads through the application.

## Installation

Clone this repo, then run `composer install`. Open `etc/config.php` and change `github.user` and `github.repo` to the
user and repo you want to hook up to the application.

## TODO

Long term, I want to hook this up so that it will store the discovered tags and their links in the database, and
have an admin panel that would allow to check off which tags you would like to show in the application. This step
is required for the tracking of the downloads count.
