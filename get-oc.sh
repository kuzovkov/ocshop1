#!/bin/sh

################################
# Install Open cart #
################################

mkdir tmp && cd tmp
curl -o oc.zip -fSL "https://github.com/opencart/opencart/releases/download/3.0.3.2/opencart-3.0.3.2.zip"
unzip oc.zip
rm oc.zip;
mv upload/* ../opencart/
cd ..
mv opencart/config-dist.php opencart/config.php
mv opencart/admin/config-dist.php opencart/admin/config.php
rm -rf tmp
chmod -R 777 opencart



