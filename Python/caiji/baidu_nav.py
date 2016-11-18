#!E:\Python\python.exe
# -*- coding: UTF-8 -*-

print "Content-type:text/html"
print 

import urllib
import urllib2
import re
import MySQLdb

class News:

    #init
    def __init__(self):
        self.url = "http://news.baidu.com/"

    #convert div to ''
    def tranTags(self, x):
        pattern = re.compile('<div.*?</div>')
        res = re.sub(pattern, '', x)
        return res

    #getPage
    def getPage(self):
        url = self.url
        request = urllib2.Request(url)
        response = urllib2.urlopen(request)
        return response.read()

    #get navCode
    def getNavCode(self):
        page = self.getPage()
        pattern = re.compile('(<div id="menu".*?)<i class="slogan"></i>', re.S)
        navCode = re.search(pattern, page)
        return navCode.group(1)

    #get nav
    def getNav(self):
        navCode = self.getNavCode()
        pattern = re.compile('<a href=("http://.*?/).*?>(.*?)</a>', re.S)
        itmes = re.findall(pattern, navCode)
        str = ''
        ss = ''
        for item in itmes:
            str += item[0]
            ss += (self.tranTags(item[1])+',')
        return str,ss

news = News()
Nav = news.getNav()
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

# 打开数据库连接
db = MySQLdb.connect("localhost","root","root","ceshi",charset="gbk" )

# 使用cursor()方法获取操作游标 
cursor = db.cursor()

# SQL 插入语句
for i in range(lens):
    sql = "INSERT INTO `caiji` (`content`, `url`) VALUES ('"+content[i]+"', '"+url[i]+"')"
    print sql
    cursor.execute(sql)
    # 提交到数据库执行
    db.commit()
db.close()



