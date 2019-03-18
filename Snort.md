## SNORT

https://paginas.fe.up.pt/~mgi98020/pgr/writing_snort_rules.htm 

### To run snort 
> c:\snort\bin> snort -A console -i2 -c c:\snort\etc\snort.conf -l c:\snort\log   
  -i for the interface card  to find the interface   
*   snort -W  
* -V version  
* -A sets alrt mode fast/full/console/test/none  
* -b Log packets in tcpdump (fast)
* -c use rull file 
* -d dumps application layer
* -h sets home networ
* -l log to directory
* -q quiet
* -s log alert message to syslog
* -v verbose
* -K ascii

### To run the rulls
> c:\snort\rules>local.rules    

### Alert/Rule Actions:
>alert, log, pass, activate, and dynamic
will generate an alert when ths set conditions is met
* alert - generate an alert using the selected alert method, and then log the packet
* log - log the packet
* pass - ignore the packet
* activate - alert and then turn on another dynamic rule
*dynamic - remain idle until activated by an activate rule, then act as a log rule

### Protocols:
* tcp
* udp
* icmp
* 
### any 
> SourceIp  will look at all sources  
> Source port will look at all ports
> -> – Direction. From source to destination.
>rev:1 

### The Direction Operator

The direction operator "->" indicates the orientation, or "direction", of the traffic that the rule applies to.  The IP address and port numbers on the left side of the direction operator is considered to be the traffic coming from the source host, and the address and port information on the right side of the operator is the destination host.  There is also a bidirectional operator, which is indicated with a "<>" symbol.  This tells Snort to consider the address/port pairs in either the source or destination orientation.  This is handy for recording/analyzing both sides of a conversation, such as telnet or POP3 sessions.  An example of the bidirectional operator being used to record both sides of a telnet session is shown in Figure 7. 
* log !192.168.1.0/24 any <> 192.168.1.0/24 23

### Rull example 
* var MY_NET [192.168.1.0/24,10.1.1.0/24]
* alert icmp any any -> any any (msg:"icmp"; sid:001;)
* alert icmp any any -> $HOME_NET any (msg:"icmp test"; sid:002;) prosoxi to HOME_NET sto snort.conf
* alert tcp 172.16.2.24 any -> $HOME_NET 21 (msg:"FTP connection attempt"; sid:002; rev:1;)
* alert tcp $HOME_NET 21 -> any any (msg:"FTP FAILD login"; content:"Login or password incorrect": sid:003; rev:1;) looking for the outgoing FTP server responses
* alert tcp any any -> $MY_NET any (flags: S; msg: "SYN packet";) 
* alert tcp !192.168.1.0/24 any -> 192.168.1.0/24 111 (content: "|00 01 86 a5|"; msg: "external mountd access";) des ! exeption in this ip 
* activate tcp !$HOME_NET any -> $HOME_NET 143 (flags: PA; content:  "|E8C0FFFFFF|\bin|; activates: 1; msg: "IMAP buffer overflow!";) 
* dynamic tcp !$HOME_NET any -> $HOME_NET 143 (activated_by: 1; count:  50;) 
* alert tcp any any -> 192.168.1.0/24 21 (content: "user root"; msg: "FTP root login";)
* alert tcp any any -> 192.168.1.0/24 21 (content: "USER root"; msg: "FTP root login";)


### Activate/Dynamic Rules

Activate/dynamic rule pairs give Snort a powerful capability.  You can now have one rule activate another when it's action is performed for a set number of packets.  This is very useful if you want to set Snort up to perform follow on recording when a specific rule "goes off".  Activate rules act  just like alert rules, except they have a *required* option field:  "activates". Dynamic rules act just like log rules, but they have a  different option field: "activated_by". Dynamic rules have a second  required field as well, "count".  When the "activate" rule goes off, it turns on the dynamic rule it is  linked to (indicated by the activates/activated_by option numbers) for  "count" number of packets (50 in this case).

## Rule Options
* msg - prints a message in alerts and packet logs
* logto - log the packet to a user specified filename instead of the standard output file ex(logto: "filename";)
* ttl - test the IP header's TTL field value  ex(ttl: "number";)
* tos - test the IP header's TOS field value  "number";
* id - test the IP header's fragment ID field for a specific value
* ipoption - watch the IP option fields for specific codes
* fragbits - test the fragmentation bits of the IP header
* dsize - test the packet's payload size against a value
* flags - test the TCP flags for certain values
* seq - test the TCP sequence number field for a specific value
* ack - test the TCP acknowledgement field for a specific value
* itype - test the ICMP type field against a specific value
* icode - test the ICMP code field against a specific value
* icmp_id - test the ICMP ECHO ID field against a specific value
* icmp_seq - test the ICMP ECHO sequence number against a specific value
* content - search for a pattern in the  packet's payload
* content-list - search for a set of patterns in the packet's payload
* offset - modifier for the content option, sets the offset to begin attempting a pattern match
* depth - modifier for the content option, sets the maximum search depth for a pattern match attempt
* nocase - match the preceeding content string with case insensitivity
* session - dumps the application layer information for a given session
* rpc - watch RPC services for specific application/proceedure calls
* resp - active response (knock down connections, etc)
* react - active response (block web sites)
