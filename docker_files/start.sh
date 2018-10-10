#!/bin/bash
rm -f /var/run/apache2/apache2.pid
find /var/lib/mysql -type f -exec touch {} \; && service mysql start

cd /usr/local/src/mirror-tool-master/
node index.js

source /etc/apache2/envvars
exec apache2 -D FOREGROUND
