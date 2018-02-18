# yii2-gae-web
Create simple website for deploy on Google App Engine <b>(Standard Environment)</b> with Yii2

### Installalion
```bash
$ git clone https://github.com/prawee/yii2-gae-web
$ cd yii2-gae-web
$ composer install
```

### Configuration
Update environment variable for your local
```bash
$ cp .env.dist .env
```

Update environment variable for your GAE
```bash
$ cp app.yaml.dist app.yaml
$ cp uat.yaml.dist uat.yaml
# update configure on your local
$ cp cron.yaml.dist cron.yaml
```
Update configure on your local
```bash
$ cp config/main-local.php.dist config/main-local.php
```

### Running
localhost
```bash
$ php -S localhost:8080 -t web
```

localhost with google app engine
```bash
$ dev_appserver.py app.yaml
```

### How to deploy
```bash
# prod
$ gcloud app deploy
# uat
$ gcloud app deploy uat.yaml
```

### Look
```bash
# local
GET localhost:8080
GET localhost:8080/site/login
GET localhost:8080/site/logout
```

```bash
# gae
GET https://<project-id>.appspot.com/site
GET https://<project-id>.appspot.com/site/login
GET https://<project-id>.appspot.com/site/logout
```