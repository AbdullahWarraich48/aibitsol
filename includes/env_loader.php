<?php

if (!function_exists('str_starts_with')) {
    function str_starts_with($haystack, $needle): bool
    {
        if ($needle === '') {
            return true;
        }

        return substr($haystack, 0, strlen($needle)) === $needle;
    }
}

if (!function_exists('loadEnvFile')) {
    /**
     * Load key=value pairs from a .env style file into $_ENV/$_SERVER.
     */
    function loadEnvFile(string $path): void
    {
        static $loaded = [];
        $realPath = realpath($path) ?: $path;

        if (isset($loaded[$realPath]) || !is_file($realPath)) {
            return;
        }

        $lines = file($realPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if ($lines === false) {
            return;
        }

        foreach ($lines as $line) {
            $trimmed = trim($line);
            if ($trimmed === '' || str_starts_with($trimmed, '#')) {
                continue;
            }

            $separatorPos = strpos($trimmed, '=');
            if ($separatorPos === false) {
                continue;
            }

            $key = trim(substr($trimmed, 0, $separatorPos));
            $value = trim(substr($trimmed, $separatorPos + 1));

            $value = trim($value, "\'\"");

            if ($key === '') {
                continue;
            }

            if (!array_key_exists($key, $_ENV)) {
                $_ENV[$key] = $value;
            }
            if (!array_key_exists($key, $_SERVER)) {
                $_SERVER[$key] = $value;
            }

            putenv(sprintf('%s=%s', $key, $value));
        }

        $loaded[$realPath] = true;
    }
}

if (!function_exists('env_value')) {
    /**
     * Retrieve an environment value with an optional default.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function env_value(string $key, $default = null)
    {
        $value = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);

        if ($value === false || $value === null || $value === '') {
            return $default;
        }

        return $value;
    }
}

