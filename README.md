# citrusApp
An App for Citruses

I used PDO for DB connection (MySQL) and vanilla php. Database should be imported ('citruses.sql'). Connection on 'connection.inc'.
All fruits are shown on index page, also comments under them (all from db).
All logic is separated in respective .inc files and layout is largely in .php files. Also a single fruit can be accesed for its
details (product.inc and product_single.php).

Comments can be added by any user and will need to wait for admin approval. Only approved ones are visible. Adding through
'insert_comment.inc'. There is a login page which is visible to non-logged user (and vice versa for logged ones).
Use this credentials:
username:giomlly
pass:12345

Sessions are taking place. Admin can access admin panel where there are only unapproved comments (admin_panel.php). When he approves
them (comments_admin.inc), a flag is changed in a db table so comment becomes visible.
