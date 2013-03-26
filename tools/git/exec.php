<?php

$output = shell_exec('/var/www/tools/git/git.sh');
echo "<pre>$output</pre>";