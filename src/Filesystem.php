<?php
declare(strict_types=1);

namespace Vinograd\IO;

use Vinograd\IO\Exception\IOException;

interface Filesystem
{
    /**
     * @param string $path
     * @return string
     * @throws IOException
     */
    public function getAbsolutePath(string $path): string;

    /**
     * @param string $path
     * @return array
     * @throws IOException
     */
    public function scanDirectory(string $path): array;

    /**
     * @param string $filename
     * @return bool
     */
    public function exists(string $filename): bool;

    /**
     * @param string $directory
     * @param int $permissions
     * @throws IOException
     */
    public function createDirectory(string $directory, int $permissions = 0777): void;

    /**
     * @param string $directory
     * @throws IOException
     */
    public function removeDirectory(string $directory): void;

    /**
     * @param string $filename
     * @return bool
     */
    public function isDirectory(string $filename): bool;

    /**
     * @param string $filename
     * @return bool
     */
    public function isFile(string $filename): bool;

    /**
     * @param string $filename
     * @return string
     * @throws IOException
     */
    public function fileGetContents(string $filename): string;

    /**
     * @param string $filename
     * @param mixed $data
     * @param int $flags
     * @throws IOException
     */
    public function filePutContents(string $filename, $data, int $flags = 0): void;

    /**
     * @param string $filename
     * @throws IOException
     */
    public function removeFile(string $filename): void;

    /**
     * @param $filename
     * @param int $pos
     * @param null|mixed $ndocs
     * @param array $callbacks
     * @return mixed
     * @throws IOException
     */
    public function yamlParseFile($filename, $pos = 0, &$ndocs = null, array $callbacks = []);

}