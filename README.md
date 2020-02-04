# Let's learn larvel for web application.
-----------------------------------------

In this state we will discuss about three major questions these are -

1. What we will learn?
Answer: We will learn laravel which is a php framework for making web application.

2. Why we learn laravel?
Answer: We learn laravel because in bangladesh most of the company want laravel as their first choice for making web appliccations. So, from my prospective it is the best option to get a job in bangladesh and also it is built on top of php which is a beautiful language though I personally hate this language but after choosing a lot of frameworks and language I found it the best for web world.

3. How we will learn laravel?
Answer: We will learn laravel by using laracast, blog posts and also by the help of google and youtube.


# Let's come to the point of making stuff using laravel....
-----------------------------------------------------------


## How to install and make application using laravel?
Answer: In order to make application using laraver we need to install several packages in Ubuntu( I will use Ubuntu 19.10 for installing laravel). 


### Necessary packages for installing and making laraver - 
----------------------------------------------------------
1. Update nad upgrade packages: <br/>
    `sudo apt update && sudo apt upgrade`

2. Install php:<br/>
    `sudo apt install php7.2-common php7.2-cli php7.2-gd php7.2-mysql php7.2-curl php7.2-intl php7.2-mbstring php7.2-bcmath php7.2-imap php7.2-xml php7.2-zip`

3. Install composer(dependency manager for php):<br/>
   `sudo apt-get install composer`

4. Give full access to composer: <br/>
   `sudo chmod 777 -R /home/$USER/.composer`

5. Command for generating laravel app:<br/>
   `composer create-project --prefer-dist laravel/laravel {name_project}`

6. Serving the application:<br/>
  `cd {name_project} && php artisan serve`
