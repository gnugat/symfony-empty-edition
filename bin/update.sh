#!/usr/bin/env sh

git stash
git pull --rebase
git stash pop

rm -rf app/cache/*
composer --no-dev install --optimize-autoloader

php app/console --env=prod cache:clear
