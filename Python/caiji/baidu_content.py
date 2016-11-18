#!E:\Python\python.exe
# -*- coding: UTF-8 -*-

print "Content-type:text/html"
print 

import urllib
import urllib2
import re
import MySQLdb

class NewsContent:
    
    #init
    def __init__(self):
        self.url = "http://news.baidu.com/"
        
    #convert div to ''
    def tranTags(self, x):
        pattern = re.compile('<img r_src=.*/>')
        res = re.sub(pattern, '', x)
        return res
        
    def getPage(self):
        url = self.url
        request = urllib2.Request(url)
        response = urllib2.urlopen(request)
        return response.read()

    #content
    
    def hotNewsCode(self):
        page = self.getPage()
        pattern = re.compile('<div id="body" alog-alias="b">.*?<div class="column clearfix" id="tupianxinwen">', re.S)
        navCode = re.search(pattern, page)
        return navCode.group()

    #get-title
    def hotNews(self):
        hotNewsCode = self.hotNewsCode()
        #page = self.getPage()
        pattern = re.compile('<a href="(http://.*?/).*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern, hotNewsCode)
        #print items[1][1]
        str = ''
        ss = ''
        for item in itmes:
            str += item[0]
            ss += (self.tranTags(item[1])+',')
        return str,ss

News = NewsContent()
page = News.hotNews()
cc = Nav[0]
bb = Nav[1]
cc = cc.replace('"',',')
cc = cc[1:]
url = cc.split(',')
#cc = Nav[1:]
content = bb.split(',')
#print url[2]
#print content[1]
lens = len(url)
#print lens

db = MySQLdb.connect("localhost","root","root","ceshi",charset="gbk" )
cursor = db.cursor()
for i in range(lens):
    sql = "INSERT INTO `caiji` (`content`, `url`) VALUES ('"+content[i]+"', '"+url[i]+"')"
    print sql
    cursor.execute(sql)
    db.commit()
db.close()