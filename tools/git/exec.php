<?php

$output = shell_exec('sh /var/www/tools/git/git.sh');
echo "<pre>$output</pre>";