# Laser-Bug-Fix
Connecting an Arduino to Slack API using Involt. 

Step-by-Step
First, download INVOLT from this URL:
http://involt.github.io/

Import the INVOLT files onto your computer, and follow the instructions on the site for setting up the involt web app on chrome. 

Next, set up Slack API by visiting the following URL (must have a Slack account/channel set up): https://api.slack.com 
1. Navigate to Custom Integrations.
2. Click on ‘New Webhook’ to add a new webhook.
3. Follow the instructions on the page to set up the parameters of the integration, i.e. which channel to post to, what the name/icon of the bot will be. 
4. Make a note of the Webhook URL.
5. Save Settings.

After setting up your Slack API, replace the $url variable in the slackcURL.php file above with your own Webhook URL. 

Back to INVOLT.
In your downloaded INVOLT folder, replace the following files:
In www\ folder, replace index.html with the index.html file above.
In www\ folder, add script.js and slackcURL.php files above.
In arduino\involt-basic folder, replace involt-basic.ino with involt-basic.ino file above.

Connect Arduino with laser detector as depicted in the attached image, and upload involt-basic.ino to board. 

Launch INVOLT chrome extension and open SLACK, and shoot your laser pointer at the arduino laser detector.
=SUCCESS!

*FOR A MORE DETAILED TUTORIAL, READ THE TUTORIAL.DOCX ATTACHED ABOVE.
