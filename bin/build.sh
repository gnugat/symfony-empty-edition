#!/usr/bin/env sh

echo ''
echo '// Building development environment'

rm -rf app/cache/* app/logs/*

composer --quiet --no-interaction install --optimize-autoloader > /dev/null

echo ''
echo ' [OK] Development environment built'
echo ''
