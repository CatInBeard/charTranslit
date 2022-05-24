all: composer test
composer:
	composer install
test: testRu testDe testTranliterator

testRu:
	vendor/bin/phpunit tests/TestRu.php
testDe:
	vendor/bin/phpunit tests/TestDe.php
testTranliterator:
	vendor/bin/phpunit tests/TestTransliterator.php
