# deploy_symfony_without_db

Try this application with docker
```
docker build . -t mysymfonyapp
docker run --name mysymfonyapp_container -p 8081:80 mysymfonyapp
```