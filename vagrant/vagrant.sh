#!/usr/bin/env bash

apt-get -y update
apt-get -y install apache2
rm /etc/apache2/sites-enabled/000-default.conf
cp /vagrant/vagrant/000-default.conf /etc/apache2/sites-enabled/000-default.conf
apt-get -y install php5 libapache2-mod-php5 php5-mcrypt php5-curl php5-gd php5-xmlrpc
a2enmod rewrite
service apache2 restart
