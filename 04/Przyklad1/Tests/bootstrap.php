<?php

spl_autoload_register(function ($class) {

    if ($class === 'Gajdaw\File\Txt\Reader') {
        require_once
            __DIR__ .
            DIRECTORY_SEPARATOR .
            '..' .
            DIRECTORY_SEPARATOR .
            'Reader.php';
    }

});
