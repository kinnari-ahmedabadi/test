server
=======
 1) server login
 2) create repo another then live folder ie channel_partner_repo
 	mkdir channel_partner_repo
 3) In that channel_partner_repo create the folder as per requirement ie live and develop
  cd channel_partner_repo
  mkdir live
  mkdir development
  4)Go  in to the new created folder ie live or develop
  cd development
  5)initillize the folder as bare repo
  git init --bare
  6)cd hooks
  7)vi post-receive
  set the work tree path according to the live server path
   and pest it in the post-receive
#!/bin/sh
GIT_WORK_TREE=/home/nowpay/domains/maxipay.nowpay.co.in/public_html git checkout -f

 8)chmod +x post-receive

local machine
=============
1)login in to your dir
cd /var/www/html/channelpartner
2)in your repo add remote for the server ie developement or production
git remote add development  ssh://root@205.147.109.54/home/nowpay/domains/channelpartner.nowpay.co.in/channel_partner_repo/development
3)git push development master



git remote add production root@205.147.109.54:/home/schoolpaya/git_test/production

git remote add production_test  ssh://schoolpaya@205.147.109.54:/home/schoolpaya/git_test/production
#!/bin/sh
GIT_WORK_TREE=/home/schoolpaya/domains/schoolpay.in/public_html/test1_develop git checkout -f