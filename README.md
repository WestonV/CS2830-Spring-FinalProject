# Movie Website
Created for CS2830 spring18 final project

Website url: http://ec2-18-216-84-35.us-east-2.compute.amazonaws.com/Movie-website/index.php


Requirements and How I Meet Them:

1. _html5, css, no tables, 5 required tags:_ html5 is used all throughout index.php and movie.php; css is used in css/main.css; no tables were used; the 5 required tags can be found in index.php: 
    "<!DOCTYPE html>" : line 1
    "<html>" : line 2
    "<head>" : line 3
    "<title>" : line 5
    "<body>" : line 25
2. _consistent design/interface:_ I use a simple black and white color scheme throughout the whole site. I also use the same navbar, footer, and carousel design throughout my pages
3. _well structured and organized:_ I used external css files, as well as php templates, then I simply use "include" to load those php pages. An example of this can be found in index.php on line 27
4. _public content and private content_ The index.php page can be accessed by anyone, but the movie.php page can only be accessed if one logs in. When a user logs in, they will be taken to the movie.php page (visual cue #1), as well as on the movie.php in the navbar will be a button that says logout (visual cue #2)
When on the movie.php a user can log out. Once they are logged out they cannot view movie.php again without logging in.
5. _user ID: test, password: pass_These credentials will work for my site.
6. _php_ This website utitlizes php in the movieInfo.php file
7. _GET and POST_ I use GET in movieInfo.php on line 2. This get request is used to display a movie description
I use POST inside the login folder on the loginValidate.php page in lines 8-10. The post request is used to validate the user when they login.
8. _web app must use form elements beyong login form_ In the index.php page, I let the user type movies into a form, and then print out a list of movies they've typed. This form can be found in index.php on lines 38-46, and then the js funtion can be found inside the js folder, on the reviewList.js page
9. _incorrect info entered_ If the user enters an incorrect password or username, they will be redirected to a page telling them they used the wrong username or pass. The implementation for this can be found in the login folder, in the loginValidate.php page
10. _multiple photos_ The page has multiple photos on both the index.php page and movie.php page
11. _youtube video_ The movie.php page displays a youtube video after a user clicks on a movie image.
12. _javascript_ I use JavaScript in the updateTrailer.js script inside the js folder.
13. _jQuery_ I use jQuery in the initCarousel.js script inside the js folder.
14. _jQuery UI/Bootstrap_ I used Materialize throughout all of my website, however, specifically the page login-form.php inside the login folder uses materialize.*Professor Wergeles said Materialize is a valid substitute for Bootstrap or jQuery UI
15. _AJAX_ I use an ajax call on lines 41-53 in the updateTrailer.js script inside the js folder. This ajax call displays the movie description beneath the youtube video trailer on the movie.php page.
16. _Trvial WebApp and Meet the requirements of this page_ I would be proud to show this webpage to an employer, and I plan on furthering the development of this page. Future development includes searching a movie database through an API, and adding those movies to specific lists, like a "watch later" list, or a "have watched" list.
17. _Documentation_ This README.md page is my documentation. I hope that everything is easy to find as I have listed out the specific lines of code as to where things are found.
