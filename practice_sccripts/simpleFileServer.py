# for script from terminal
# python3 -m http.server --127.0.0.1
import SimpleHTTPServer
import SocketServer
import socket
host_name= socket.gethostname()
myIp =socket.gethostbyname(host_name)
PORT = 8080
Handler = SimpleHTTPServer.SimpleHTTPRequestHandler
httpd= SocketServer.TCPServer(("",PORT),Handler)
print('ip: ',myIp)
print ("service at port: " ,PORT)
httpd.serve_forever()
# grt the ip address and typr in the browser ip:8080