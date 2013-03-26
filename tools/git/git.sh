#!/bin/sh
# Auto commit to git
su
#WEB_DIR=/var/www
DATE=$(date +"%m_%d_%Y")
HOME=/root
#cd $WEB_DIR
git commit -a -m "update $DATE"
git config --global user.name "barif"
git config --global user.email "w3db@yandex.ru"
git push origin
