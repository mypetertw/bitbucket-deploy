<?php
# SETTING
define('BITBUCKET_NAME', '');
define('GIT_PASSWORD', '');
define('REPOSITORY_NAME', '');

function execPrint($command) {
    $result = [];
    exec($command, $result);
    foreach ($result as $line) {
        print($line . "\n");
    }
}

print(execPrint('git pull https://'.BITBUCKET_NAME.':'.GIT_PASSWORD.'@bitbucket.org/'.BITBUCKET_NAME.'/'.REPOSITORY_NAME.'.git master'));
