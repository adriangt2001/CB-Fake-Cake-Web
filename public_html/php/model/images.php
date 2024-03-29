<?php
    function uploadImage($targetDir, $id, $image) {
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($image['name'], PATHINFO_EXTENSION));
        $targetFile = $targetDir.'pic_'.$id.'.'.$imageFileType;

        if(isset($_POST['submit'])) {
            $check = getimagesize($image['tmp_name']);
            if($check !== false) {
                // FILE IS AN IMAGE
                $uploadOk = 1;
            }
            else {
                // FILE IS NOT AN IMAGE
                $uploadOk = 0;
            }
        }

        // Check file size
        if ($image['size'] > 500000) {
            // IMAGE IS TOO LARGE
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
        && $imageFileType != 'gif' ) {
            // ONLY JPG, JPEG, PNG & GIF FILES ARE ALLOWED
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {
            if (move_uploaded_file($image['tmp_name'], $targetFile)) {
                // FILE UPLOADED
                return basename($targetFile);
            }
            else {
                // ERROR UPLOADING FILE
                return 2;
            }
        }
        else {
            // UPLOAD DENIED
            return 1;
        }
    }
?>