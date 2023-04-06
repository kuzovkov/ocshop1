### I. Install

```bash
git clone https://github.com/kuzovkov/oc-tpl mysite

cd mysite

./install-docker.sh #if docker is not installed

#build container
sudo docker-compose build

#run
sudo docker-compose up -d
#checking:
sudo docker-compose ps
http://localhost:8008/info.php

#download and unpack opencart
./get-oc.sh
```


# install
Go to 
```
http://localhost:8008/

```
and follow for installigg script instructions. 
Please use `dbname`, `dbuser`, `dbpass` from `docker-compose.yml`.

Set `db` as `dbhost`

!!! Remove opencart directiory after installing 

```

### II. Developing

```bash
#dump database
./dbdump.sh
```

```bash
#recovery database
./dbrec.sh
```    

### III. Trobleshuting
    
Fixing "Unknown collation: ‘utf8mb4_unicode_520_ci"

```bash
sed -i 's/utf8mb4_unicode_520_ci/utf8mb4_unicode_ci/g' dump.sql
```
