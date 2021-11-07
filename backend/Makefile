ci:
	composer validate
	bin/phpunit
unit:
	bin/phpunit --testsuite=unit
coverage:
	XDEBUG_MODE=coverage  bin/phpunit --coverage-html=var/coverage
