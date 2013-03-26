#!/bin/sh
# Auto commit to git
su
#WEB_DIR=/var/www
DATE=$(date +"%m_%d_%Y")
$ export HOME=
$ unset HOME
% setenv HOME
#cd $WEB_DIR
git config --global user.name "barif"
git config --global user.email "w3db@yandex.ru"
git commit -a -m "update $DATE"
git push origin
