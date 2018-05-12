FROM ubuntu:16.04

RUN apt update
RUN apt -y install build-essential libprotobuf-dev libboost-dev openssl protobuf-compiler software-properties-common vim mc
RUN apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 4F4EA0AAE5267A6C
RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php -y
RUN apt update
RUN apt -y install php7.1-cli php7.1-dev php7.1-mysql php7.1-pdo php7.1-xml composer
RUN pecl install mysql_xdevapi
RUN echo "extension=mysql_xdevapi.so" > /etc/php/7.1/cli/conf.d/30-mysqlxdevapi.ini
