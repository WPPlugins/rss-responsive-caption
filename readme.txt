=== RSS Responsive Caption ===
Contributors: brandonmoeller
Donate link: http://brandonmoeller.com/
Tags: feeds, rss, images, shortcode, content, media, google
Requires at least: 2.6
Tested up to: 3.3
Stable tag: 1.0

Improves WordPress caption elements so captioned images in RSS feeds responsively adjust to fit within Google Reader’s screen on Android devices.

== Description ==

This plugin allows publishers to better control the width of photos that use the WordPress caption shortcode feature, when that content is displayed in RSS feed readers like Google Reader, as displayed on small-screen mobile devices. 

This plugin accomplishes the same thing that adjusting the "function img_caption_shortcode" code in includes/media.php would, but allows the user to automatically update WordPress without worrying about losing these changes. 

It is the author's hope that in future releases of WordPress (post 3.3), this plugin will prove unnecessary if (hard-working, responsive-minded) WordPress core developers decide to include the fix in newer versions of the awesome great open source software we have all come to love. 

The code for this plugin was inspired by code found on this page of the codex: 
[http://codex.wordpress.org/Function_Reference/add_filter](http://codex.wordpress.org/Function_Reference/add_filter)

Read more about RSS Responsive Caption on the author's website here: 
[http://brandonmoeller.com/blog/2011/12/18/rss-responsive-caption/](http://brandonmoeller.com/blog/2011/12/18/rss-responsive-caption/)

== Installation ==

1. Upload this directory to your plugins directory. It will create a 'wp-content/plugins/rss-responsive-caption/' directory.'
1. Activate the plugin through the Plugins menu in WordPress.
1. That's it! The plugin will begin adding inline CSS code to the parsed caption shortcode that will allow RSS readers to better display your images that have captions.

== Frequently Asked Questions ==

= Why would I need this plugin? =

If you read your WordPress site in Google Reader on your mobile device - and if your site uses images with captions - you've probably noticed how some images look too big for the reader. This plugin fixes that problem by making the photos more responsive, in that they will never be wider than the screen that is viewing them.

= What else can I do with this plugin? =

You can re-name it and edit it to further alter the way that the default caption shortcode works. Making these changes in a plug-in is better than altering wp-includes/media.php because your changes will still be there next time you automatically update WordPress. Everyone wants to automatically update WordPress. It makes life better.

Read more about RSS Responsive Caption on the author's website here:
[http://brandonmoeller.com/blog/2011/12/18/rss-responsive-caption/](http://brandonmoeller.com/blog/2011/12/18/rss-responsive-caption/)

== Screenshots ==

1. This
1. Is better than this

== Changelog ==

= 1.0 =
* This is the first version of this plugin.

== Upgrade Notice ==

= 1.0 =
This is the first version of this plugin.