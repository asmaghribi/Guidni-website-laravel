<?php

namespace App\Traits;
use Illuminate\Support\Facades\Storage;

trait StorageTrait
{
    public function storePublicFile($folder, $file)
    {
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($folder), $filename);
        $path = $folder . $filename;
        return $path ?? null;
    }
    public function storeOrUpdatePublicFile($folder, $oldFilename, $file)
    {
        // Delete the old file
        $this->deletePublicFile($oldFilename);
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path($folder), $filename);
        $path = $folder . $filename;
        return $path ?? null;
    }
    public function deletePublicFile($filepath)
    {
        if (file_exists($filepath)) {
            unlink($filepath);
          return true;
        } else {
            return false;
        }
    }


}
