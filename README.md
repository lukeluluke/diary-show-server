# Server Restful API
## Local Development using Docker
#### Checkout docker project
```
git clone git@github.com:lukeluluke/diary-docker.git
```
Make sure the docker project is in the same level of diary-show-server project

#### Start service
Go to laradock folder, and run command 
```
docker-compose up -d nginx mariadb
``` 

Then you should able to open the website via url below
```
http://app.diaryshow:8888/
```
