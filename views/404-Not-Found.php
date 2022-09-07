<h1>no se encontro
    <?php  $path = trim($_SERVER['REQUEST_URI'], '/');
echo parse_url($path, PHP_URL_PATH); ?>
</h1>


