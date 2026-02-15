up:
	docker compose up -d

down:
	docker compose down

restart:
	docker compose restart

install:
	composer install

brain-games:
	./bin/brain-games
	
validate:
	composer validate