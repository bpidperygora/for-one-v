# Hi. This is Test Task for One Vision

## To Use:
- Take DB from root folder upload to your MySQL ...
- _ change in wp_options: siteurl & home to your domain name
_ or if you use a local server just name it `http://for-one-v/`
- upload files from git to your site root folder.
- set wp-config to your DB credential
- **/wp-admin/** to login. user: **admin**, password: **admin**

## Files:
- wp-content/themes/theme/page-templates/page-with-shortcode.php - page template (from task 4)
- wp-content/themes/theme/functions/custom-post-type.php - (Art Custom post type from task 1)
- wp-content/themes/theme/functions/custom-shortcodes.php - (Shortcode to display Art post type from task 3)

## Short code:

- shortcode: [art]
- param: [art post-to-show = "20"] - how to match post to display;
- param: [art order-by = "ASC"] - sort post by (ASC / DESC);
- param: [art post-type = "music"] - filter post by category;

---
By default ** [art] ** use parameters:

- 10 posts to display
- order by DESC
- show both music and photography category.

---

## Note:

I know about `extract (...)` function in shortcode but I prefer to use `isset();`
-
I add custom JS (without JQuery) to make menu work. And make height of pictures randomly change
-
Small custom functions to make the UX a little better
-
** I spend around 3 hours doing all the back-end and more 3 hours to clean the front end **
-

P.S maybe it is overload but even for me it was interesting to finish <br>
P.P.S I spend 30 minutes to write this ) XD