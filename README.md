SimplerHTML
===========

SimplerHTML is a *really* basic "framework" (if you can even call it that)
that lets you write your webpages/notes/documentation in markdown.

This is somewhat to similar how [StackOverflow](https://stackoverflow.com), 
[Github](https://github.com) work.

How this works
--------------

Once you have this setup you basically just do:

+ Write your stuff in markdown.
+ Dump it into ./markdown/
+ Profit!

Prerequisites
-------------

1. Apache HTTP Server a.k.a `httpd` a.k.a `apache2`, usually part of LAMP/WAMP stacks.
2. PHP running on aforementioned server. Again, standard part of LAMP/WAMP stacks.
3. Not much else.


Setting it up
--------------

+   You clone this repository.
+   Enable `.htaccess` for [Apache](http://httpd.apache.org/),
    if it's already enabled, skip this step.
+   If you *don't* have an existing .htaccess,
    copy the included `sample-htaccess` file to `.htaccess` in the current dir.
+   If you *do* have an existing `.htaccess`,
    you want to add the rules from `sample-htaccess` to your own `.htaccess`
+   By this step you should ideally be up and running.

### Optional Stuff ###

+   The default stylesheet is in `./css/` called `markdown.css`,
    you can find you one like or write your own and replace this one with yours
    or you can simply change the relevant `<link>` tag in `main.php`.
+   There's a default `index.mkd`, `error.mkd`, you might want to change these
    to suit your needs.

### Why? ###
+   We use a re-write rule to make things simpler to access.
+   The setup simple enough to whatever server you want anyway.
+   The intent behind this framework/setup is not to make it super extensible,
    but to make it work right out of the box, with minimal effort.

Credits
-------

Quite a bit of the code isn't actually mine, I've used a bunch of stuff and hacked this together.

+   The markdown-to-HTML converter being used is made by [evilstreak](https://github.com/evilstreak/markdown-js).
+   The default css theme included is by [Someone on Github](https://github.com/I_forgot_the_github_repo_I_got_it_from/).

License
-------

##### If/when using this, a mention is not neccessary, but always appreciated! #####

Released under the MIT license.

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
