Crawler Trap
===================

Crawler Trap is a simple php script that can prevent spammy website crawlers of indexing your site. Normally you want your site to be indexed by as many search engines as possible. But there are also some "bad" sites that crawl your sites and scan it for emails or any security holes.

How it works
-----------
A crawler comes to your website and start the crawl process. It opens a website and scans the content of the website for links. Then it follows links to your sub pages. The idea is now to put the trap link inside your site. The link can be hidden by CSS but it will still be visible for the crawlers. Now if the bot opens the trap link the IP of the bot will be added to your .htaccess and the bot can't open any page on your website now until you remove the banned IP from .htaccess.


----------


Installation
-------------

create a sub directory on your website named "trap" (or anything you like) then put the index.php from this repository inside. It should be accessible from your browser, for example:
http://www.example.com/trap/index.php (or http://www.example.com/trap/)

put a hidden link to your trap in your website or template. You can put the link right in the bottom before the **body** closing tag:

```
<a style="display:none" href="trap">Do not go here</a>
```

add the robots.txt file to your website root directory to prevent the "good" bots that read the robots.txt going into the trap:

```
User-agent: *
Disallow: /trap/
```

**Hint:** if you don't have a .htaccess file in your root directory, a new one will be created. If you have one already the banned IPs will be appended to your existing .htaccess file.

Open the website.html to view a sample implementation.


by [Michael Milawski / Millsoft](http://www.millsoft.de)