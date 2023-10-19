<?php
session_start();
$google_client_id = "132686350965-o3qg2f3oedc2v0ajhf1oq0p8dnh4b0t2.apps.googleusercontent.com";
$google_client_secret = "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";
$redirect_url = "https://muaadh99.github.io/CS3400-CyberSecurity_Project/redirrect.php";

if(isset($_GET['code'])) {
    $code = $_GET['code'];
    $url = "https://oauth2.googleapis.com/token";
    
    $data = [
        'client_id' => $google_client_id,
        'client_secret' => $google_client_secret,
        'redirect_uri' => $redirect_url,
        'code' => $code,
        'grant_type' => 'authorization_code'
    ];
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $response = curl_exec($ch);
    curl_close($ch);
    
    $decoded_response = json_decode($response, true);

    if(isset($decoded_response['access_token'])) {
        $access_token = $decoded_response['access_token'];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.googleapis.com/oauth2/v1/userinfo?access_token={$access_token}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $user_data = curl_exec($ch);
        curl_close($ch);
        
        $user_data_decoded = json_decode($user_data, true);
        $_SESSION['user_data'] = $user_data_decoded;
        
        header("Location: dashboard.php");
    } else {
        echo "Error retrieving access token.";
    }
} else {
    echo "No code provided.";
}
