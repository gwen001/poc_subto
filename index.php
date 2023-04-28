<html>
<body>
Silence is golden.
<!-- subdomain takeover PoC by glc: <?php echo $_SERVER['SERVER_NAME']; ?> -->
<br><br>
<a href="javascript:alert(document.cookie);">click here to view your cookies with JS</a><br><br>
Good read:
<ul>
<li>https://labs.detectify.com/2014/10/21/hostile-subdomain-takeover-using-herokugithubdesk-more/
<li>https://0xpatrik.com/subdomain-takeover/
<li>https://www.hackerone.com/application-security/guide-subdomain-takeovers
</ul>
Below your cookies with PHP:
<pre>
<?php
//phpinfo();
if( isset($_COOKIE) && count($_COOKIE) ) {
  var_dump($_COOKIE);
}
?>
</pre>
</body>
<html>
