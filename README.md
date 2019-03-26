# Maerschalk Knowledgebase
School project for Maerschalk. Building a knowledgebase for code snippets and more.


## Setup local instance
Add the following to your `xampp-directory/apache/conf/extra/httpd-vhosts.conf`
```
<VirtualHost *:80>
    ServerAdmin caspar@cspr.io
    DocumentRoot "D:/Users/Caspar/Documents/Projects/Websites/ms-knowledgebase"
    ServerName kennisbank.maerschalk.test
    ErrorLog "logs/kennisbank.maerschalk.test.log"
    CustomLog "logs/kennisbank.maerschalk.test.log" common
</VirtualHost>
```

Add the following to your hosts file:
```
127.0.0.1	kennisbank.maerschalk.test
```
