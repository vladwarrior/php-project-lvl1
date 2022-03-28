# Makefile

install:
	composer install
validate: 
	composer validate
brain-games:
	./bin/brain-games
lint: 
	composer exec --verbose phpcs -- --standard=PSR12 src tests
	composer exec --verbose phpstan -- --level=8 analyse src tests
