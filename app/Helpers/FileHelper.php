<?php

if (!function_exists('formatFileSize')) {
    function formatFileSize($sizeInBytes)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        $unitIndex = 0;
        while ($sizeInBytes >= 1024 && $unitIndex < count($units) - 1) {
            $sizeInBytes /= 1024;
            $unitIndex++;
        }

        return round($sizeInBytes, 2) . ' ' . $units[$unitIndex];
    }
}
