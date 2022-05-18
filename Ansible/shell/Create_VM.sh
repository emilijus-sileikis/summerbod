#!/bin/sh

#####################
## one VM creation ##
#####################

CENDPOINT=https://grid5.mif.vu.lt/cloud3/RPC2
TID=1698
CPU=0.5
VCPU=3
RAM='3072m'

echo "Please provide your MIF username: "
read CUSER

echo "Please provide your MIF password: "
stty -echo
read CPASS
stty echo

CVMREZ=$(onetemplate instantiate $TID --name SummerBod --cpu $CPU  --vcpu $VCPU --memory $RAM --user $CUSER --password $CPASS --endpoint $CENDPOINT)
CVMID=$(echo $CVMREZ |cut -d ' ' -f 3)
echo $CVMID

echo "Waiting for VMs to RUN: 40 sec."
sleep 40

onevm show $CVMID --user $CUSER --password $CPASS --endpoint $CENDPOINT >$CVMID.txt
CSSH_CON=$(cat $CVMID.txt | grep 'CONNECT_INFO1' | cut -d '=' -f 2 | tr -d '"')
CSSH_PRIP=$(cat $CVMID.txt | grep 'PUBLIC_IP' | cut -d '=' -f 2 | tr -d '"')
CSSH_PORT=$(cat $CVMID.txt | grep 'TCP_PORT_FORWARDING' | cut -d '=' -f 2 | tr -d '"' | cut -d ':' -f1)
PORT=$(cat $CVMID.txt | grep 'TCP_PORT_FORWARDING' | cut -d '=' -f 2 | tr -d '"' | cut -d ':' -f 2 | cut -d ' ' -f 2 )

echo "Connection string: $CSSH_CON"
echo "IP: $CSSH_PRIP"
echo "Port: $CSSH_PORT"

echo "[webserver]" > hosts
echo "$CUSER@$CSSH_PRIP ansible_port=$CSSH_PORT" >> hosts
echo -e "\nurl: $CSSH_PRIP:$PORT" | sudo tee -a wiket/Ansible/vars/default.yml
sleep 1

sudo cp hosts /etc/ansible/hosts

###################################
## Copy Dir to the remote server ##
###################################
cd
ssh -f -p $CSSH_PORT $CUSER@193.219.91.103 "mkdir -p ~/wiket"

scp -rp -P $CSSH_PORT wiket/* $CUSER@193.219.91.103:~/wiket/

#######################
## Launch Conn Check ##
#######################
cd
ansible-playbook wiket/Ansible/Ansible_main -K