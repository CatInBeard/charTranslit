all: composer test
composer:
	composer install
test: testRu

testRu:
	vendor/bin/phpunit tests/TestRu.php
