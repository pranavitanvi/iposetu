<?php
$dir = __DIR__;

function processDir($dir, $baseDir) {
    $files = scandir($dir);
    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        
        $path = $dir . DIRECTORY_SEPARATOR . $file;
        
        if (is_dir($path)) {
            processDir($path, $baseDir);
        } else {
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            if ($ext === 'php' || $ext === 'html') {
                if (strpos($path, 'config.php') !== false || strpos($path, 'prepend_config.php') !== false || strpos($path, 'fix_paths.php') !== false || strpos($path, 'replace_baseurl.php') !== false) {
                    continue;
                }
                
                $content = file_get_contents($path);
                
                // The exact line we want to prepend
                $requireLine = "require_once \$_SERVER['DOCUMENT_ROOT'] . (isset(\$_SERVER['SERVER_NAME']) && (\$_SERVER['SERVER_NAME'] === 'localhost' || \$_SERVER['SERVER_NAME'] === '127.0.0.1') ? '/iposetu/' : '/') . 'includes/config.php';";
                $prependCode = "<?php " . $requireLine . " ?>\n";
                
                if (strpos($content, $requireLine) !== false) {
                    continue; // Already has it
                }
                
                if (strpos(ltrim($content), '<?php') === 0) {
                    // Starts with <?php, inject after it
                    $content = preg_replace('/<\?php\s*/', "<?php\n" . $requireLine . "\n", ltrim($content), 1);
                } else {
                    // HTML file or starts with HTML
                    $content = $prependCode . ltrim($content);
                }
                
                file_put_contents($path, $content);
                echo "Prepended to: $path\n";
            }
        }
    }
}

processDir($dir, $dir);
echo "Done.\n";
?>
