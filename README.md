## natas traning 

* **1->2**
>* http://natas1.natas.labs.overthewire.org
>* press key F12 to open the inspect
>* ZluruAthQk7Q2MqmDeTiUij2ZvWy2mBi

* **2->3**
>* http://natas2.natas.labs.overthewire.org/
>* /files/pixel.png loking for this page
>* /files the code
>* natas3:sJIJNW6ucpu6HPZ1ZAchaDtwd7oGrD14

* **3->4**
>* http://natas3.natas.labs.overthewire.org/ 
> *  http://natas3.natas.labs.overthewire.org/Robots.txt
> robots.txt is a txt file with all the files that are not accesible from search engins
> it usualy contains file that the ownwer dose not want to show it culled include password scripts etr
> * /s3cr3t/
>* natas4:Z9tkRkWmpt9Qr7XrR5jWRkgOU901swEZ

* **4->5**
> * look  CommonPhpFiles.txt
>* HTTP referer  is an HTTP header field that identifies the address of the webpage (i.e. the URI or IRI) that linked to the resource being requested. By checking the referrer, the new webpage can see where the request originated.
>* Referer logging is used to allow websites and web servers to identify where people are visiting them from, for promotional or statistical purposes
>* The default behaviour of referer leaking puts websites at risk of privacy and security breaches
>* Most web servers maintain logs of all traffic, and record the HTTP referrer sent by the web browser for each request. This raises a number of privacy concerns, and as a result, a number of systems to prevent web servers being sent the real referring URL have been developed. These systems work either by blanking the referrer field or by replacing it with inaccurate data. Generally, Internet-security suites blank the referrer data, while web-based servers replace it with a false URL, usually their own. This raises the problem of referrer spam. The technical details of both methods are fairly consistent  – software applications act as a proxy server and manipulate the HTTP request, while web-based methods load websites within frames, causing the web browser to send a referrer URL of their website address. Some web browsers give their users the option to turn off referrer fields in the request header
> * If a website is accessed from a HTTP Secure (HTTPS) connection and a link points to anywhere except another secure location, then the referrer field is not sent
>* crome extention tamper
>* change http://natas4.natas.labs.overthewire.org/index.php to http://natas5.natas.labs.overthewire.org
>* iX6IOfmpN7AYOQGPwtn3fXpbaJVJcHfq 

* **5->6**
> * Well, let’s trick the server into believing we’re logged in. Let’s see what Fiddler reveals in the server response body.
> * HTTP/1.1 200 OK
Date: Thu, 27 Oct 2016 21:18:31 GMT
Server: Apache/2.4.7 (Ubuntu)
X-Powered-By: PHP/5.5.9-1ubuntu4.20
Set-Cookie: **loggedin=0**
Vary: Accept-Encoding
Content-Length: 855
Keep-Alive: timeout=5, max=100
Connection: Keep-Alive
Content-Type: text/html
> *  changing cookes to logedin
> * aGoY4q2Dc6MgDq4oL4YtoKtyAg9PeHa1

* **6->7**
> * klicked inspect element 
> * found index-source.html
> * gone http://natas6.natas.labs.overthewire.org/index-source.html
> * found includes/secret.inc
> * gone 
> * found FOEIUWGHFEEUHOFUOIU
> * natas7: 7z3hEENjQtflzgnT29q7wAvMNfZdh0i9

* **7->8**
>*  hint: password for webuser natas8 is in /etc/natas_webpass/natas8 
>* nothing http://natas7.natas.labs.overthewire.org/etc/natas_webpass/natas8
>* http://natas7.natas.labs.overthewire.org/index.php?page=home/etc/natas_webpass/natas8 ---> two errors 
>* Warning: include(home/etc/natas_webpass/natas8): failed to open stream: No such file or directory in /var/www/natas/natas7/index.php on line 21

>* Warning: include(): Failed opening 'home/etc/natas_webpass/natas8' for inclusion (include_path='.:/usr/share/php:/usr/share/pear') in /var/www/natas/natas7/index.php on line 21