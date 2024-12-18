<?php
if (isset($_GET['url'])) {
    $url = $_GET['url']; // Nh?n URL t? tham s? GET

    // Th?c hi?n yêu c?u cURL mà không có xác th?c
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Hi?n th? ph?n h?i
    echo "<h2>Ph?n h?i t? URL: $url</h2>";
    echo "<p>Mã tr?ng thái HTTP: $http_code</p>";
    echo "<pre>$response</pre>";
} else {
    echo "Không có URL nào du?c nh?p.";
}
?>
