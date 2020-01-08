# To initilize server Application execute this following commands:

```bash
cd etc/devTools/docker
```
```bash
cp .env.dist .env
```
```bash
docker-compose build
```
```bash
docker-compose up -d
```
```bash
docker-compose exec php bash
```

```bash
./gradlew launchTaskRunners
```
# Execute CreateAffiliate endpoint in order to create Affiliate 
the endpoint is: http://localhost:80/api/cam_landing_creator/affiliate/

is needed to authenticate using Oauth2 using superadmin@auditor-framework.com account, 
use postman collections in directory etc/devTools/postman to execute endpoints easy with postman

#Run Projections:
Running this projection is only allowed Afterwards we have deleted all content of the readModel
```bash
symfony event-store:projection:run cam_landing_generator_affiliate_projection -o
```
```bash
symfony event-store:projection:run cam_landing_generator_cam_unit_projection -o
```

# Execute GetJoinPage endpoint in order to create Affiliate 
the endpoint is: http://localhost:80/api/cam_landing_creator/join_page/www.buscando-novia.com/0/
