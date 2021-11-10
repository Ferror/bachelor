ci:
	composer validate
	bin/phpunit
	#vendor/bin/phpstan analyse -c phpstan.neon
unit:
	bin/phpunit --testsuite=unit
coverage:
	XDEBUG_MODE=coverage  bin/phpunit --coverage-html=var/coverage
