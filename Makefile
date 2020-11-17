docker-setup:
	docker-compose build # let's build our services
	docker-compose up -d # get services running

backend-install:
	@docker exec jsp-app composer install

backend-setup:
	make backend-install
	@docker exec jsp-app php artisan migrate

frontend-install:
	@docker exec npt-app npm install

frontend-setup:
	@docker exec npt-app npm run dev

dev:
	make docker-setup
	sleep 30
	make backend-setup
	make frontend-install
	make frontend-setup
