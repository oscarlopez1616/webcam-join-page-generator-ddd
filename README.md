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
./gradlew
```

# To Run Projections:
Running this projection is only allowed Afterwards we have deleted all content of the readModel
```bash
symfony event-store:projection:run cam_landing_generator_affiliate_projection -o
```
```bash
symfony event-store:projection:run cam_landing_generator_cam_unit_projection -o
```
