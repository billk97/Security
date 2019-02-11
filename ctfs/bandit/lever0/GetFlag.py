#!usr/bin/env python3
from pexpect import pxssh
#make a ssh conection
hostName='bandit.labs.overthewire.org -p 2220'
UserName='bandit0'
Password='bandit0'
# this is a nice try but i think i dont have permisions
s=pxssh.pxssh()
if not s.login(hostName,UserName,Password):
	print('shh login faild')
	print(str(s))
else:
	print('shh session login succesful')
	ls=s.sendline('ls')
	print(': ',s.sendline('cat readme'))
	s.prompr()
	print s.before
	s.logout()
	print('flag--> ',flag)
