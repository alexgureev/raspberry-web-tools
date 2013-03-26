#!/bin/sh
# Auto commit to git
#WEB_DIR=/var/www
DATE=$(date +"%m_%d_%Y")
$ echo '$HOME'
$HOME
#cd $WEB_DIR
git config --global user.name "barif"
git config --global user.email "w3db@yandex.ru"
git commit -a -m "update $DATE"
git push origin
