#!/bin/bash
set -e 

########################
# Figure out the paths #
########################

SCRIPT_DIR="$( cd -- "$( dirname -- "${BASH_SOURCE[0]:-$0}"; )" &> /dev/null && pwd 2> /dev/null; )";
PROJECT_DIR="$(dirname "$SCRIPT_DIR")"

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

. "$SCRIPT_DIR/shell/Create_VM.sh"