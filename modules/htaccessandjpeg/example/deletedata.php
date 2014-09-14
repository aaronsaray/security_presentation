<?php
foreach (glob('useruploads/*') as $file) {
    unlink($file);
}
unlink('useruploads/.htaccess');