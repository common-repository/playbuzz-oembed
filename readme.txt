=== Playbuzz Embed ===
Contributors: ramiy
Tags: Playbuzz, Playful Content, oEmbed, Embed
Requires at least: 3.5
Tested up to: 4.9
Stable tag: 1.5
Requires PHP: 5.2.4
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed playful content from Playbuzz.com into your WordPress site.

== Description ==

Create playful content on playbuzz platform and embed them in any WordPress site.

= About Playbuzz =

[Playbuzz](https://www.playbuzz.com) is an open network for end users, publishers, bloggers and brands to create and share playful content such as quizzes, lists, polls, galleries and other formats.

In minutes you can upgrade your site to include highly engaging viral content, using playbuzz's playful content.

= Playbuzz WordPress Plugin =

Using this plugin you can embed playful content from playbuzz to your WordPress site using nothing but the URL.

Choose any item from [Playbuzz.com](https://www.playbuzz.com), or [create](https://www.playbuzz.com/create) your own! Copy the item URL and paste it to your post text editor. Then simply click over to the visual editor to confirm that it loads properly.

= More Information =

For any questions or more information, please [contact us](https://www.playbuzz.com/contact).

== Installation ==

= Installation =
1. In your WordPress Dashboard go to "Plugins" -> "Add Plugin".
2. Search for "Playbuzz Embed".
3. Install the plugin by pressing the "Install" button.
4. Activate the plugin by pressing the "Activate" button.

= Minimum Requirements =
* WordPress version 3.5 or greater.
* PHP version 5.2.4 or greater.
* MySQL version 5.0 or greater.

= Recommended  Requirements =
* The latest WordPress version.
* PHP version 7.0 or greater.
* MySQL version 5.6 or greater.

== Screenshots ==
1. Pasting the URL to the text-editor.
2. Pasting the URL to the visual-editor.

== Frequently Asked Questions ==

= How do I embed content from Playbuzz? =

With this plugin you can use the URL to embed content. Just paste the item URL into your post editor:
`https://www.playbuzz.com/larak10/what-country-in-the-world-best-fits-your-personality`

= How do I set custom dimensions to my content? =

Since WordPress 4.2, you can double click the embedded item to set max width and max height. It will add the WordPress `[embed]` shortcode:
`[embed width="600" height="400"]https://www.playbuzz.com/larak10/what-country-in-the-world-best-fits-your-personality[/embed]`

**Note:** Doing it the WordPress way, using the `[embed]` shortcode, is backwards and forward compatible, and it works  with all the themes.

== Changelog ==

= 1.5 (2016-04-04) =
* Move plugin files to 'includes' directory.

= 1.4 (2015-11-30) =
* Remove po/mo files from the plugin.
* Use [translate.wordpress.org](https://translate.wordpress.org/) to translate the plugin.

= 1.3 (2015-04-21) =
* Prevent direct access to php files.
* Prevent direct access to directories.

= 1.2 (2015-03-02) =
* Add screenshots.
* Add i18n support.
* Add Hebrew (he_IL) translation.

= 1.1 (2015-03-01) =
* readme.txt updates.

= 1.0 (2015-02-19) =
* Initial release.
* Register oEmbed provider.
