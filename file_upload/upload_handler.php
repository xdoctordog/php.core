<?php

echo '<pre>';

var_dump(is_uploaded_file($_FILES['uploadingFile']['tmp_name']));
var_dump($_FILES);
if (is_uploaded_file($_FILES['uploadingFile']['tmp_name'])) {
  move_uploaded_file($_FILES['uploadingFile']['tmp_name'],
    $destination =
      'C:/Projects/php.core/file_upload/files/' . time() . $_FILES['uploadingFile']['name']);
}
