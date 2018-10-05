#!/bin/bash

TEST="/var/www/html/tests/step${1}Test.php"
/usr/sbin/phpunit $TEST
exit $?