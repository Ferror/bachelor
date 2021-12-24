run:
	composer install --no-interaction --prefer-dist
	exec /usr/bin/supervisord -c /etc/supervisor/supervisord.conf

ci:
	composer validate
	bin/phpunit --testsuite=all
	vendor/bin/phpstan analyse -c phpstan.neon
unit:
	bin/phpunit --testsuite=unit
coverage:
	XDEBUG_MODE=coverage bin/phpunit --testsuite=all --coverage-html=var/coverage
