all: composer test
composer:
	composer install
test: testRu testTranliterator

testRu:
	vendor/bin/phpunit tests/TestRu.php

testTranliterator:
	vendor/bin/phpunit tests/TestTransliterator.php
