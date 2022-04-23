VERSION := 2.0
SLUG := maintenance-mode-coming-soon
PATH := $(shell pwd)

install:
	composer install
	composer dump-autoload -o

clover.xml: install test

update_version:
	sed -i "s/@##VERSION##@/${VERSION}/" $(SLUG).php
	sed -i "s/@##VERSION##@/${VERSION}/" includes/Config.php
	sed -i "s/@##VERSION##@/${VERSION}/" i18n/$(SLUG).pot

remove_version:
	sed -i "s/${VERSION}/@##VERSION##@/" $(SLUG).php
	sed -i "s/${VERSION}/@##VERSION##@/" includes/Config.php
	sed -i "s/${VERSION}/@##VERSION##@/" i18n/$(SLUG).pot

test:
	bin/phpunit --coverage-html=./reports

build: install update_version
	mkdir -p build
	rm -rf vendor
	composer install --no-dev
	composer dump-autoload -o
	make copy
	zip -r $(SLUG).zip $(SLUG)
	rm -rf $(SLUG)
	mv $(SLUG).zip build/
	make remove_version

copy:
	mkdir $(SLUG)
	cp -ar assets includes i18n vendor $(SLUG)/
	cp $(SLUG).php uninstall.php readme.txt license.txt $(SLUG)/

dist: install update_version
	mkdir -p dist
	rm -rf vendor
	composer install --no-dev
	composer dump-autoload -o
	cp -r $(PATH)/. dist/
	make remove_version

release:
	git stash
	git fetch -p
	git checkout master
	git pull -r
	git tag v$(VERSION)
	git push origin v$(VERSION)
	git pull -r

lint:
	bin/phpcs .

fmt:
	bin/phpcbf .

psr:
	composer dump-autoload -o

pot:
	wp i18n make-pot . i18n/$(SLUG).pot --slug=$(SLUG) --skip-js --exclude=vendor

cover:
	bin/coverage-check clover.xml 100

clean:
	rm -rf vendor/
