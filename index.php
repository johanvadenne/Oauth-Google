<?php 
require('config.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google</title>
</head>
<body>
    <h1>Google</h1>
    <a href="https://accounts.google.com/o/oauth2/v2/auth?scope=email&access_type=online&redirect_uri=<?= urlencode('http://172.16.197.253/Oauth-Google/index.php') ?>&response_type=code&client_id=<?= GOOGLE_ID ?>">Connexion</a>
</body>
</html>