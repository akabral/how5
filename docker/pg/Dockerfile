FROM postgres:15-bullseye
#https://github.com/postgis/docker-postgis/blob/master/12-3.2/Dockerfile

#https://wiki.postgresql.org/wiki/Apt
RUN apt-get update -y 
RUN apt-get install -y curl ca-certificates gnupg
RUN apt-get update -y 
RUN apt-get install -y software-properties-common 
RUN apt-get update -y 
RUN apt install -y wget gnupg2 apt-transport-https


RUN apt-get update -y 
RUN curl https://www.postgresql.org/media/keys/ACCC4CF8.asc | gpg --dearmor | tee /etc/apt/trusted.gpg.d/apt.postgresql.org.gpg >/dev/null
RUN sh -c 'echo "deb http://apt.postgresql.org/pub/repos/apt $(/usr/bin/lsb_release -cs)-pgdg main" > /etc/apt/sources.list.d/pgdg.list'
RUN apt-get update -y 

#RUN add-apt-repository ppa:ubuntugis/ppa
#RUN apt-get install postgresql-12-postgis-2.5 -y
#RUN apt-get install postgresql-12-postgis-3 -y

#pg_dump --file "/tempdb/netuno_pg_bkp.sql" --host "localhost" --port "5432" --username "root" --no-password --verbose --format=p --blobs "test_db"
#pg_dump --file "/tempdb/netuno_pg_bkp.sql" --host "localhost" --port "5432" --username "root" --no-password --verbose --format=p --blobs "test_db"
