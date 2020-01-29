<?php

function UploadFile($file, $path, $fileOld) {
    if($file == null){
        $fileName = $fileOld;
    }
    else {
        if ($file != null) {
            Storage::delete($path.'/'.$fileOld);
        }
        $fileName = Str::random(10). '.' . $file->getClientOriginalExtension();
        $file->storeAs($path, $fileName);
    }

    return $fileName;
}