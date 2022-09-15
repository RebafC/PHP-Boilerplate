## PHP Boilerplate

This is meant as a shell for a new PHP project. It includes some directories and files.

The composer.json includes some basic tools, but may require additional tools for medium to large projects.
Some possible tools include (in no particular order):
- https://github.com/Behat/Behat
- https://github.com/guzzle/guzzle
- https://github.com/PHPSocialNetwork/phpfastcache (sometimes refered to as phpfastcache/phpfastcache)
- https://github.com/lavary/crunz
- https://github.com/PHPMailer/PHPMailer
- https://github.com/cakephp/phinx (aka robmorgan/phinx)
- https://github.com/dragonmantank/cron-expression (or mtdowling/cron-expression)
- squizlabs/php_codesniffer
- slevomat/coding-standard
- phpstan/phpstan

The default style is provided by https://andybrewer.github.io/mvp/ but there are others including:
- https://github.com/kevquirk/simple.css
- https://bulma.io/

Yes this boilerplate is opinionated, but it works for me. Some of the ideas are in general use so ideas here
may be similar to those you find in other starter PHP repositories.


# Installation
Clone the repository to a development envirnment
- cd [local root directory] e.g. c:\neard\www
- git clone https://github.com/RebafC/PHP-Boilerplate.git
- rename directory PHP-Boilerplate to your project name e.g MyProject
- change git config to point to your own project (there may be a git command but I manually changed the .git/config file)
- possibly create a local "bare" repository or a repository at github or other cloud based git service
- remove / add projects to composer.json as you require
- run "composer install"
- set basepath correctly in index.php
- get developing

