FROM debian:latest

RUN apt update && apt install -y lsb-release apt-transport-https ca-certificates software-properties-common

RUN apt install -y wget

RUN wget -O /etc/apt/trusted.gpg.d/php.gpg https://packages.sury.org/php/apt.gpg 
RUN sh -c 'echo "deb https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'

RUN apt update && apt install -y apache2 php8.2 libapache2-mod-php8.2

RUN apt install -y php8.2-zip php8.2-xml php8.2-curl php8.2-gd php8.2-mysql php8.2-intl php8.2-mbstring

RUN a2enmod ssl
RUN a2enmod rewrite

EXPOSE 80
EXPOSE 443

CMD apachectl -D FOREGROUND