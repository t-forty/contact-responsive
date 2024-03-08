<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php ini_set('display_errors', 1);
$phone = $_POST['phone'];
$msg_subject = $_POST['msg-subject'];
$text_area = $_POST['text-area'];

print "<p>$phone $msg_subject $text_area</p>"

?>
</body>
</html>