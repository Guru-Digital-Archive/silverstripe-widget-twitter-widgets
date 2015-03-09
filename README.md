Silverstripe-widget-twitter-widgets
===============================

Silver stripe widget for displaying custom twitter widgets

## Install instructions
### Add it to your project with:
`composer require gdmedia/silverstripe-widget-twitter-widgets`  
Run `/dev/build`
## Setup instructions


 1.  Create a "User Widget" on Twitter.  
Head over to the [Create a user widget](https://twitter.com/settings/widgets/new) page on twitter and create your widget.
Copy the HTML  located above the *"Copy and paste the code into the HTML of your site"* (Which appears after saving your widget)
 2. Create a new "Twitter Widgets Widget" in your site admin
 3. Paste the HTML copied from Step 1 in to the *"Twitter HTML"* field
 4. You don't need to worry about the *"Href"* or *"Twitter Widget ID"* field as the widget will automagically pull them out of the *"Twitter HTML"*. However, you could leave *"Twitter HTML"* empty and fill in the *"Href"* and *"Twitter Widget ID"*  manually

* Please note that *"Href"* and *"Twitter Widget ID"* will always be overwritten from values that the widget discovers in *"Twitter HTML"*.
