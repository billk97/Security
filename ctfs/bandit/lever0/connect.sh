#!/usr/bin/expect
ssh bandit0@bandit.labs.overthewire.org -p 2220
expext 'password:'
send 'bandit0'
