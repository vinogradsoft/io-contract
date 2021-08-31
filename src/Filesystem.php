<?php

namespace Vinograd\IO;

/**
 * @version 0.0.1
 */
interface Filesystem
{
    /**
     * @param string $filename
     * @return bool
     */
    public function exists(string $filename): bool;

    /**
     * @param string $directory
     * @param int $permissions
     * @return bool
     */
    public function createDirectory(string $directory, int $permissions = 0777): bool;

    /**
     * @param string $directory
     * @return bool
     */
    public function removeDirectory(string $directory): bool;

    /**
     * @param string $filename
     * @return bool
     */
    public function isDirectory(string $filename): bool;

    /**
     * @param string $filename
     * @return string|false
     */
    public function fileGetContents(string $filename);

    /**
     * @param string $filename
     * @param mixed $data
     * @param int $flags
     * @param $context
     * @return int|false
     */
    public function filePutContents(string $filename, $data, int $flags = 0);

    /**
     * @param string $filename
     * @param mixed $context
     * @return bool
     */
    public function removeFile(string $filename): bool;

    /**
     * @param $filename
     * @param int $pos
     * @param null $ndocs
     * @param array $callbacks
     * @return mixed|false
     */
    public function yamlParseFile($filename, $pos = 0, &$ndocs = null, array $callbacks = []);

    /**
     * @param string $filename
     * @param string|int $user
     * @return bool
     */
    public function chown(string $filename, $user): bool;

    /**
     * @param string $filename
     * @param string|int $group
     * @return bool
     */
    public function chgrp(string $filename, $group): bool;
}