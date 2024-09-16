<?php
function listDirectories($dir) {
    $directories = array();
    if (is_dir($dir)) {
        if ($handle = opendir($dir)) {
            while (false !== ($entry = readdir($handle))) {
                if ($entry != "." && $entry != ".." && is_dir($dir . '/' . $entry)) {
                    $directories[] = $entry;
                }
            }
            closedir($handle);
        }
    }
    return $directories;
}

$baseDir = '.'; // Change this to your desired directory path
$directories = listDirectories($baseDir);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory List</title>
</head>
<body>
    <h1>Directory List</h1>
    <ul>
        <?php foreach ($directories as $directory): ?>
            <li><a href="<?= htmlspecialchars($directory) ?>"><?= htmlspecialchars($directory) ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
