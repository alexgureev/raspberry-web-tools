#!/bin/sh

PATH="~/bin:/sbin:/bin:/var/sbin:/var/bin:/usr/local/bin:$PATH"

cd "$1"
git add -A .
git commit -q -m 'automated update'
git push -q
#DATE=$(date +"%m_%d_%Y")
#HOME=~/
#echo $HOME
#cd $WEB_DIR
#git config --global user.name "barif"
#git config --global user.email "w3db@yandex.ru"
#git commit -a -m "update $DATE"
#git push origin
