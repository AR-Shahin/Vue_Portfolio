<?php

namespace App\Actions\File;

use Illuminate\Support\Facades\Storage;

class File
{

    public static function upload($file, $path)
    {
        $fileName = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
        Storage::putFileAs("public/$path", $file, $fileName);

        return "storage/$path/" . $fileName;
    }

    public static function deleteFile($file)
    {
        if (file_exists($file)) {
            unlink($file);
        }
    }

    public static function uploadInPublic($file, $path)
    {
        $image = $file;
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $uploads = "images/{$path}/";
        $last_img = $uploads . $name_gen;
        $image->move(public_path("images/{$path}/"), $last_img);

        return $last_img;
    }
}
