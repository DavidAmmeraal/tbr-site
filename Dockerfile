FROM wordpress:latest

RUN apt-get update && \
	apt-get install -y libjpeg-progs gifsicle optipng 

CMD ["apache2-foreground"]