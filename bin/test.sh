#!/usr/bin/env sh

echo ''
echo '// Building test environment'

rm -rf app/cache/test app/logs/*test.log
composer --quiet --no-interaction install --optimize-autoloader  > /dev/null
php app/console --env=test --quiet cache:clear

echo ''
echo ' [OK] Test environment built'
echo ''
