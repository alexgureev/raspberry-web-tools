#!/bin/sh
# Auto commit to git

WEB_DIR=/var/www
DATE=$(date +"%m_%d_%Y")
cd $WEB_DIR
git commit -a -m "update $DATE"
git push origin