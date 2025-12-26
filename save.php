<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $file = fopen("responses.csv", "a");

    if (filesize("responses.csv") == 0) {
        fputcsv($file, ["Name", "Email", "Message"]);
    }

    fputcsv($file, [$name, $email, $message]);
    fclose($file);

    echo "<script>
        alert('Thank you! Your response has been saved.');
        window.location.href='index.html';
    </script>";
}
?>
    