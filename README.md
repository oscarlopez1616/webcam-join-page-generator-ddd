Up all of them and keep running every 30 seconds
```bash
ansible-playbook etc/ansible/playbook-setup-web-container.yml
```

Up all of them and keep running every 30 seconds
```bash
./gradlew launchTaskRunners
```

# Run Projections:
Running this projection is only allowed Afterwards we have deleted all content of the readModel
```bash
symfony event-store:projection:run cam_landing_generator_affiliate_projection -o
```
```bash
symfony event-store:projection:run cam_landing_generator_cam_unit_projection -o
```
