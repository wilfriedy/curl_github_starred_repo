<!-- sending request to git hub apis to check starred repository -->
<!-- git remote add origin https://github.com/wilfriedy/curl_github_starred_repo.git -->
<?php

$ch = curl_init();
$headers = [
    "Authorization: token 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",
    // "User-Agent : wilfriedy"
];
curl_setopt_array($ch , [
    CURLOPT_URL => 'https://api.github.com/user/starred/curl_github_starred_repo/curl_github_starred_repo',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => $headers,
    CURLOPT_USERAGENT => "wilfriedy"
]);

$response = curl_exec($ch);
$status =  curl_getinfo($ch , CURLINFO_HTTP_CODE);

curl_close($ch);
echo $response, "\n";
echo $status, "\n";