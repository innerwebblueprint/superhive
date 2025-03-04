<?php
// Check if vendor folder exist
if(file_exists(__DIR__ . '/../vendor')) {
  (require __DIR__ . '/../app/start.php')->run();
} else {
  if (!version_compare(PHP_VERSION, '7.4.0', '>=')) {
    echo 'You need to update your PHP version (PHP 7.4 required)';
  } else {
?>
<!DOCTYPE html>
<html lang="fr" prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SuperHive Installation</title>
  <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
</head>
<body>
  <main class="container">
    <h1>SuperHive Installer</h1>
    <article>
      <p>Welcome to the SuperHive Installer. Just click the button to start the installation</p>
      <a role="button" href="/install.php">Install</a>

    </article>
  </main>

</body>
</html>
<?php
  }
}
