.PHONY: qadev
qadev:
ifneq ("$(wildcard ecs.php)","")
	docker run -it \
	--volume ${PWD}:/var/www/html${CACHED_FLAG} \
	--workdir /var/www/html --rm openapi-codegen-php_php \
	vendor/bin/ecs check src --fix
endif

ifneq ("$(wildcard phpstan.neon)","")
	docker run -it \
	--volume ${PWD}:/var/www/html${CACHED_FLAG} \
	--workdir /var/www/html --rm openapi-codegen-php_php \
	vendor/bin/phpstan analyse src --level 8
endif
