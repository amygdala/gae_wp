# WordPress on PHP App Engine: Task Queue/Twilio Demo #

This code demonstrates the use of Task Queues with WordPress on Google App Engine.  It shows how to use task queues to publish scheduled posts, and to do scalable background processing.  It demos notifying a list of people via tasks when a post is published.  

This is done by making a few additions to an out-of-the-box WordPress installation-- it adds some definitions to the theme's function.php file, and adds two task handlers.

The demo uses Twilio's (twilio.com) SMS capabilities to implement the notifications.
