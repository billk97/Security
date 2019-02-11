# nmap comands/tips
- **nmap scanme.nmap.org**
> * a free to scan  website
> * you can also scan for an ip adress
> * default it scans 1000 ports
- **nmap -v scanme.nmap.org**
> * prints the version number
- **nslookup scanme.nmap.org**
> - default program in both windows and Linux
> - gives informations for the address

- **nslookup scanme.nmap.org  >> Result.txt**
> - saves the results in a txt Folder
> -  *usefull for big search inorder not to loss the scann information*
* **nmap -oG - 10.0.2.0-225 -p 22 -A -vv >/root/Documents/nmap_Scans/FirstScan**
 > - scanns all the ip addresses -A to show the aggresive - oG forsorting stile -vv for more information
> - Nmap 7.70 scan initiated Fri Jul 13 03:44:28 2018 as: nmap -oG - -p 22 -A -vv 10.0.2.0-225 # Ports scanned: TCP(1;22) UDP(0;) SCTP(0;) PROTOCOLS(0;)
Host: 10.0.2.0 ()       Status: Down
Host: 10.0.2.1 ()       Status: Down
> - Host: 10.0.2.4 ()       Ports: 22/filtered/tcp//ssh///  OS: Cisco Catalyst WS-C6506 switch (CatOS 7.6(16))|Cisc$
Host: 10.0.2.15 ()      Status: Up
Host: 10.0.2.15 ()      Ports: 22/closed/tcp//ssh/// # Nmap done at Fri Jul 13 03:44:33 2018 -- 226 IP addresses (4 hosts up) scanned in 5.07 seconds

* **nmap -sV scanme.nmap.org -p 22,80,21,42,81,107,137**
 > - shows the serviccs version runing
* **nmap -A scanme.nmap.org -p 22,80,21,42,81,107,137**
> - shows more deteils  

* **nmap -F scanme.nmap.org**
> - scans the most important ports
> scans for 100

* **nmap --open scanme.nmap.org > /scann.txt**
> - it gives you the open ports

###   Port status
> - open
> - closed
> - filtered (unknown)

* tip small scans
* save every scann
* nmap is tracable you will be notessed

### zenmap (grafical interface)
