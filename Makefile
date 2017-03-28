all: run

run:
	docker-compose up -d

stop:
	docker-compose down

deploy:
	ssh -A ubuntu@54.214.223.164 'cd ~/CustomWordpressTheme; git pull origin master'
