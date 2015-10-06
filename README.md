# OWASP Eastern Europe Event #2015 #
# SecOps live cooking content #

This repo contains all materials used during presentation I gave on 2015-10-06 during 
[OWASP EEE 2015](http://owaspeee.appsec.xyz/).

### How to use that? ###

1. Install CentOS7 VMs (minimal installations) corresponding by hostnames to contents of **inventory/all**
1. Run ansible-playbooks for required actions:
  1. Deploy vulnerable app: ```ansible-playbook -i inventory/all plays/deploy_vulnerable_apps.yml```
  1. Deploy Docker host: ```ansible-playbook -i inventory/all plays/deploy_docker.yml --tags docker-engine```
  1. Deploy Docker Registry: ```ansible-playbook -i inventory/all plays/deploy_docker.yml --tags docker-registry```
  1. Deploy Jenkins: ```ansible-playbook -i inventory/all plays/deploy_jenkins.yml --tags deploy_jenkins```
  1. Deploy Jenkins Jobs: ```ansible-playbook -i inventory/all plays/deploy_jenkins.yml --tags deploy_jenkins_jobs```
  
The URL from the presentation Video will be provided shortly.