#IP checker

## Installation

### Debian

Put checker to raspbery web-dirrectory, change  permissions on local.log to 0666

`$ git clone git@github.com:barif/raspberry-web-tools.git /var/www/`

Rename `config.sample.php` to `config.php`, change credentials in config.

Put checker to shared hosting web directory. Change  permissions on remote.log and lastip to 0666

Add cron job on raspberry to file `/etc/cron.d/checker` don`t forget new line after job.

`*/10 * * * * root /usr/bin/wget -O checker.html "http://127.0.0.1/tools/checker/checker.php" > /dev/null 2>&1`

Now when raspberry ip changed, domain record will update.
