# Learn You A Web Dev
## Day one

Hey people! Thanks for coming to day one of Web Dev.

You've probably guessed that the two other files in this directory are
the files we worked on today. Those are pretty good for reference.

If you want to get your HTML and CSS stuff totally down, here's a few
ideas:  

* pick a few of your favorite websites and try to make them (or
  simpler versions)
* make a website for yourself, and then a matching one for your cat
* make a website for a fictional skateboard company
* make a website for your LARP group

But the main thing is make 10 websites.

### Stuff we covered

First we took a look at some websites made by people before the class.
Each time we'll take a second to show off 

We talked about HTML and CSS, and then we looked at some cool uses of
HTML, CSS, and JS.

* `html`, `head`, and `body` are all [elements][].
* So are...
  * `h1`, `h2`, `h3` (which are headers)
  * `p` (paragraphs)
  * `ul` (unordered list)
  * `ol` (ordered list)
  * `li` (list items)
* `div`s are useful for holding other elements. Think of them as
  boxes.
* `img` is how you make an image.
  `<img src="http://i.imgur.com/p3uGk.png" />`
  This will give you:
    ![](http://i.imgur.com/p3uGk.png)

There's lots more to learn! Note that I didn't teach you about links
(`<a href="http://reddit.com">Reddit</a>`), emphasis
(`<em>emphasized!</em>`), strong emphasis (`<strong>this is
really important</strong>`), and lots of things. Those are up to you
to learn when you need them.

[elements]: https://developer.mozilla.org/en-US/docs/HTML/Introduction#Elements_-_the_basic_building_blocks

## Useful links

* [Mozilla Developer Network][mdn] - Great documentation on HTML, CSS,
  JS, and more. Seriously, go here and look things up. [Their
introduction to HTML][intro] is awesome.
* ["Coding An HTML5 Layout From Scratch"][html5] - Exactly what the
  title says. It's a good guide to coming up with a layout and
  implementing it.
* [Sublime Text 2][subl] - If you don't have a good text editor for
  HTML and CSS, this is a good one to use.
* [Steve Huffman's web dev class notes][huff] - Steve Huffman is the guy who coded Reddit. These are the notes on HTML from his web development course.
* [A List Apart's Resources for Beginners][ala] - "A List Apart" is a magazine for web professionals. Here's their list of articles that are good for beginners.

[mdn]: https://developer.mozilla.org/en-US/
[intro]: https://developer.mozilla.org/en-US/docs/HTML/Introduction
[html5]: http://coding.smashingmagazine.com/2009/08/04/designing-a-html-5-layout-from-scratch/
[subl]: http://www.sublimetext.com/
[huff]: http://www.udacity.com/wiki/CS253%20Unit%201?course=cs253#world-wide-web
[ala]: http://www.alistapart.com/articles/alaprimer2/


## How to host a website on your CCIS account

I'm not going to explain how to SSH -- okay I half-lied: If
you're on a Mac, open up Terminal. If you're on Windows, go get Cygwin
or PuTTY and figure that out. If you're on Linux I shouldn't have to
tell you anything).

1. You need to ssh on to a CCS box. These boxes are machines in the
   lab, but later on you can get access to some special CREW machines.  
   Type `ssh yourccisusername@login.ccs.neu.edu`  
   Today you saw me do this:
    `ssh aliukani@majorhavoc@ccs.neu.edu`
    "majorhavoc" is a lab machine. Some people use "turtles", "bubbles", or "hattrick")

2. You now need to change your home directory (where all your junk is
   stored) so that other people can see your website. This is a good
   opportunity to learn about [chmod][] if you haven't already.  
   Do this:  
    `chmod 711 ~`  
    `chmod -R 711 .www`  

3. Now you should get into your .www directory and make an index.html
   file, and maybe a style.css file if you're feeling snazzy.  
    `cd ~/.www`  
    `vim index.html`  

[chmod]: http://en.wikipedia.org/wiki/Chmod

