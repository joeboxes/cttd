# cttd
cttd

https://aws.amazon.com/

BILLING
https://us-east-1.console.aws.amazon.com/billing/home?region=us-east-1#/

EC2
https://us-east-1.console.aws.amazon.com/ec2/home?region=us-east-1#Home:


# key
chmod 400 ./CTTDKeyPair.pem 

# SSH
ssh -i ./CTTDKeyPair.pem  ec2-user@34.228.19.123


# SCP
scp -i ./CTTDKeyPair.pem  -r  /usr/local/var/www/repos/cttd/server/html  ec2-user@34.228.19.123:/home/ec2-user/website/


# COPY CONTENTS
sudo su

rm -rf /var/www/html/*
cp -r /home/ec2-user/website/html/* /var/www/html/


# PERMISSIONS

find /var/www/html/ -type d -exec chmod 755 {} +
find /var/www/html/ -type f -exec chmod 644 {} +






