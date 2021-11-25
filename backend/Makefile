ci:
	composer validate
	bin/phpunit --testsuite=all
	#vendor/bin/phpstan analyse -c phpstan.neon
unit:
	bin/phpunit --testsuite=unit
coverage:
	XDEBUG_MODE=coverage bin/phpunit --testsuite=all --coverage-html=var/coverage
