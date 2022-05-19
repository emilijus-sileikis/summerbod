#!/bin/sh

#####################
## Starting plugin ##
#####################

sudo mkdir -p /etc/ansible
echo '[sudo_become_plugin]' | sudo tee -a /etc/ansible/ansible.conf > /dev/null
echo 'flags = -H -S' | sudo tee -a /etc/ansible/ansible.conf > /dev/null

#############################
## Download Necessary Role ##
#############################

ansible-galaxy install robertdebock.phpmyadmin

######################
## Launch Create VM ##
######################

cd
./wiket/Ansible/shell/Create_VM.sh