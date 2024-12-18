<?php
if (isset($_GET['url'])) {
    $url = $_GET['url']; // Nh?n URL t? tham s? GET

    // Th?c hi?n y�u c?u cURL m� kh�ng c� x�c th?c
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // Hi?n th? ph?n h?i
    echo "<h2>Ph?n h?i t? URL: $url</h2>";
    echo "<p>M� tr?ng th�i HTTP: $http_code</p>";
    echo "<pre>$response</pre>";
} else {
    echo "Kh�ng c� URL n�o du?c nh?p.";
}
?>
