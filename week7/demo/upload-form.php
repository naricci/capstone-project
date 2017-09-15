<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include './upload-function.php';
            if ( count($_FILES) ) {
                try {
                    $fileName = uploadImage('newimage');
                } catch (RuntimeException $e) {
                    // $fileName = filter_input(INPUT_POST, 'oldimage');
                    $fileName = '';
                }
                
                echo '<p>Image ' . $fileName . ' Uploaded</p>';
            }
            
        ?>
        
        <!-- The data encoding type, enctype, MUST be specified as below -->
        <form enctype="multipart/form-data" action="#" method="POST">
            <!-- MAX_FILE_SIZE must precede the file input field -->
            <!-- <input type="hidden" name="MAX_FILE_SIZE" value="30000" /> -->
            <!-- Name of input element determines name in $_FILES array -->
            Send this file: <input name="newimage" type="file" />
            
            <input type="hidden" name="oldimage" value="<?php echo $image; ?>" />
            
            <input type="submit" value="Send File" />
        </form>

        <!-- display image
        <img src="uploads/30420d1a9afb2bcb60335812569af4435a59ce17.jpg" /> -->
    </body>
</html>