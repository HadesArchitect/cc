# cc

## Initialisation

* **git clone git@github.com:HadesArchitect/cc.git cc**
* **cd cc**
* **docker-compose up**
* **docker ps**
* **docker exec -it CC_PANEL_CONTAINER_ID bash** 
* **/var/www/cc/app/console doctrine:database:create**
* **/var/www/cc/app/console doctrine:schema:update --force**
* **/var/www/cc/app/console fos:user:create admin admin@example.com password --super-admin**
* **exit**
* **ifconfig docker0 | grep 'inet addr'**
* Add 'DOCKER_IP cc.local' to your /etc/hosts
* Visit `http://cc.local/app_dev.php` in browser, use app with login 'admin' and password 'password'

## Regular Launch

**docker-compose up**
