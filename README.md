# mail-notifications 📧

This is a mail notifications tool.

Make sure to have installed:

 - `sendmail`: In linux try with sudo apt-get install sendmail
 - `php: >=7.1 <8.1`: Make sure to have the propper version
 - `composer`: Follow the instructions in https://getcomposer.org/download/

For this I'm using the `nette/mail` package.

# Usage

This, paired with `cronjobs` can be used to automate anything.

I use it to get weekly updates about my nginx usage in my server. This can be seen in the `mail_info.php.example.nginx` file. If you want to do this yourself: 

 - Follow this guide https://www.nginx.com/blog/monitoring-nginx/ 
 - Check that it works with `$ curl http://127.0.0.1/nginx_status`. If it works continue, if it doesn't go back and make sure you follow every step.
 - Copy my `mail_info.php.example.nginx` and make it specific for your needs.
 - Enjoy :octocat: