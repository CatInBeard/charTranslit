all: composer test
composer:
	composer install
test: testRu testDe testGr testTranliterator

testRu:
	vendor/bin/phpunit tests/TestRu.php
testDe:
	vendor/bin/phpunit tests/TestDe.php
testGr:
	vendor/bin/phpunit tests/TestGr.php	
testTranliterator:
	vendor/bin/phpunit tests/TestTransliterator.php
