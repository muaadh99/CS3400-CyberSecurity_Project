<?php
$google_client_id = "132686350965-o3qg2f3oedc2v0ajhf1oq0p8dnh4b0t2.apps.googleusercontent.com";
$redirect_url = "http://muaadh99.github.io/redirect.php";
$google_auth_url = "https://accounts.google.com/o/oauth2/auth?client_id={$google_client_id}&redirect_uri={$redirect_url}&scope=email&response_type=code";
?>

<html>
<head>
    <title>Login with Google</title>
</head>
<body>
    <a href="<?php echo $google_auth_url; ?>">Login with Google</a>
</body>
</html>
