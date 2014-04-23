# Phoenix Suite
A course registration panel

# Installation
## Download
The best way to to get Phoenix is to clone this git repository:

	git clone git@github.com:yectep/phoenix2.git

## Configuration File
The main configuration file for Phoenix is located in `./private/config.php`. **By default this is not created** and you should initialize the project by tuning the default configuration file and saving that as your config.php.

	cd ./private/ && cp ./config.default ./config.php
	vi ./config.php

The app will not load without the configuration file.

## Webroot
You should set your webroot to `./public/` and ensure that `index.php` is defined in your **index** directive in whatever server you are using.

Specifically, for nginx:

	root /your/path/to/phoenix2/public;
	# .... other items
	location / {
		# params for your preferred php engine
		fastcgi_index	index.php
	}
