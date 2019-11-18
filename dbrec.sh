#!/bin/sh

###############################
# Recovery database from dump #
###############################

DB_USER=user1
DB_PASS=userp@ssw0rd
DB_NAME=ocshop
DUMP_NAME=dump.sql.gz

sudo docker-compose exec db mysql -u$DB_USER -p$DB_PASS -e "DROP DATABASE IF EXISTS $DB_NAME"
sudo docker-compose exec db mysql -u$DB_USER -p$DB_PASS -e "CREATE DATABASE IF NOT EXISTS $DB_NAME"
sudo docker-compose exec db sh -c "gunzip < /dump/$DUMP_NAME | mysql -u$DB_USER -p$DB_PASS $DB_NAME"

case "$1" in
  fixdb)
        echo "Fix 'Unknown collation: ‘utf8mb4_unicode_520_ci'"
        sudo docker-compose exec db mysql -u$DB_USER -p$DB_PASS -e "DROP DATABASE IF EXISTS $DB_NAME"
        sudo docker-compose exec db mysql -u$DB_USER -p$DB_PASS -e "CREATE DATABASE IF NOT EXISTS $DB_NAME"
        sudo docker-compose exec db cd /dump
        sudo docker-compose exec db gunzip $DUMP_NAME
        sudo docker-compose exec db sed -i 's/utf8mb4_unicode_520_ci/utf8mb4_unicode_ci/g' dump.sql
        sudo docker-compose exec db cat dump.sql | mysql -u$DB_USER -p$DB_PASS $DB_NAME
    esac
