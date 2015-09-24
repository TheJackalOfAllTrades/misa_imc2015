# MISA IMC 2015 Website
This README.md file contains details on how to develop the MISA IMC 2015 website.

*PLEASE DON'T FORGET TO REPLACE THE ADMIN EMAIL WITH THE IMC EMAIL*

## Prerequisites
* code editor - e.g. Sublime Text 3, but I highly recommend [Atom](atom.io)
because it has built-in `.scss` highlighting
* [XAMPP](https://www.apachefriends.org/) - required for running `.php` files
* [Koala](http://koala-app.com/) - required for compiling `.scss` to `.css`
* [git](http://www.git-scm.com/) (optional) - if you can use git,  you can clone
this repo to your computer

If you can use git, Atom also has a built-in diff checker.

## Set-up
1. Download a copy of this entire repo and put it in a new folder named `imc`.
2. Move the `imc` folder to the XAMPP `htdocs` folder.
3. Open Koala then drag-and-drop `imc` to Koala. In Koala, right click the detected
`scss` folder then select `compile`.
4. Leave Koala running on the background. Open the XAMPP Control Panel and run the
Apache Server.
5. Visit `localhost/imc` and check that the website is working properly.
6. Edit the code. While Koala is running, it should automatically compile the
`.scss` files but it may fail occasionally. Try manually compiling `.scss` files.

## Instructions
To the developers: the design blueprint can be found in `./documentation/design/`.
Please pick a section and make it look as similar as possible.

Also, since this website was initially based on
[this template](http://www.templategarden.com/template/ascend-free-one-page-bootstrap-template/),
you can get an idea on how to code your section. You can download it to see how their
code looks like.

If you are going to attach images, here are my file conversion rules:
* large transparent `.png` - resize it to saner dimensions
* photos in `.png` (regardless of size) - convert it to `.jpeg`
* large photos in `.jpeg` - resize it to saner dimensions

This rules are to be followed to save space and to speed-up website loading time.

If you have any questions, please don't hesitate to ask.

--Emmanuel Natividad
