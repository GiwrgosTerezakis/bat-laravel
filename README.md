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
## When you are done
    - (sudo) docker-compose down 
    
<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-nd/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/">Creative Commons Attribution-NonCommercial-NoDerivatives 4.0 International License</a>.
