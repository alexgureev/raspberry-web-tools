#!/bin/sh
# Auto commit to git

#WEB_DIR=/var/www
DATE=$(date +"%m_%d_%Y")
#cd $WEB_DIR
sudo git commit -a -m "update $DATE"
sudo git config --global user.name "barif"
sudo git config --global user.email "w3db@yandex.ru"
sudo git push origin master
