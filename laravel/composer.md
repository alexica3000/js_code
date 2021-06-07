#### Run Composer versions 1 and 2 simultaneously

- Install Composer globally, following the instructions from https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos. This will install the latest Composer 2 version in /usr/local/bin. (on Mac you can simply run brew install composer)

- cd to home folder (or any another)

- Download the latest V1 version from https://getcomposer.org/download/1.10.17/composer.phar : wget https://getcomposer.org/download/1.10.17/composer.phar

- Make the downloaded phar file executable: chmod 755 composer.phar

- Rename composer to composer1: mv /your/folder/composer.phar /your/folder/composer1

- Move composer1: mv /your/folder/composer1 /usr/local/bin/composer1

- To use composer: run composer --version

- To use composer version 1: run composer1 --version
