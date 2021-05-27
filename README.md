## https://server3-test.herokuapp.com/

## Install Docker
(https://docs.docker.com/get-docker/)

Change permissions to act as root on Docker, otherwise you have to use sudo.
## Building BAT
    - cp .env.example .env
    - (sudo) docker-compose up -d --build
    - (sudo) docker exec -it bat_web bash
    - cd app 
    - composer install
    - exit
    - sudo vi /etc/hosts
    - Add line => 127.0.0.1 bat.loc
    - visit http://bat.loc
###When you finish
    - (sudo) docker-compose down 
