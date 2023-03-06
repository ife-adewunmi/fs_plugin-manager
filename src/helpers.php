<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jarvis Tang
 * Released under the Apache-2.0 License.
 */

if (! function_exists('plugin_path')) {
    function plugin_path(string $unikey)
    {
        return rtrim(config('plugins.paths.plugins'), '/').DIRECTORY_SEPARATOR.$unikey;
    }
}
