### September 20, 2015

# Project 2: xkcd style password generator

* Live URL: <http://p2.eliluvish.com/>

--
## Project Description:
This site generates an xkcd style password. It takes 3 inputs from the user:  
1. Number of words (max: 9)  
2. Whether the user wants a number added to the password (checkbox).  
3. Whether the user wants a symbol added to the password (checkbox).  

The theory behind the xkcd style password is that it is both easier to remember
and more secure than traditional passwords we currently use. The site uses PHP, HTML, and CSS.
Most of the PHP is written in logic.php and called in index.php through the `require()` function. The remainder
of the PHP in index.php is a `foreach` loop which prints out the password.

## Screencast Demonstration:
* URL:

## Details for Teaching Team:
* The file words.txt was used to generate the word list.  
* In order to avoid notice errors all of the PHP in both index.php and logic.php is encased in an `if (!empty($_GET))`

## Plugins, Libraries, Packages or Outside Code:
* Bootstrap for styling
* The .password css was taken from the demo site: <http://p2.dwa15.com> because I thought it had nice styling. I made some alterations but that's where I got it.
* The HTML for the form was also taken from the demo site and uses the same keywords.
* The word list is taken from <http://www.mieliestronk.com/corncob_lowercase.txt> which was posted to Piazza by Matthew Bullen.
* The code for opening a file adapted from <http://stackoverflow.com/questions/5904045/pull-random-line-from-txt-file-as-string> but the only line used ended up being `$f_contents = file("random.txt");`
because I did not find the `array_rand()` function very helpful. It has strange behavior so I chose to use `rand()` instead.
* I ran in to an issue where PHP added a space between array elements when echo'ing them using the `foreach` function. I found the array_map function from <http://stackoverflow.com/questions/5762439/how-to-trim-white-spaces-of-array-values-in-php>
