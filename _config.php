<?php 

$conn = new mysqli("HOSTNAME", "USERNAME", "PASSWORD", "DATABASE");

if ($conn->connect_error) {
    error_log("Database connection failed: " . $conn->connect_error);
    
}

$websiteTitle = "AniPaca";
$websiteUrl = "https://anipaca.pacalabs.top";
$websiteLogo = $websiteUrl . "/public/logo/logo.png";
$contactEmail = "@gmail.com";

$version = "2";

$discord = "https://dcd.gg/anipaca";
$github = "https://github.com/PacaHat";
$telegram = "https://t.me/anipaca";
$instagram = "https://www.instagram.com/pxr15_";

// all the api you need

$api = "https://your-hosted-api.com/api/v2/hianime"; //https://github.com/ghoshRitesh12/aniwatch-api
$zpi = "https://your-hosted-api.com/api"; //https://github.com/PacaHat/zen-api
$proxy = "https://your-hosted-proxy.com/cors?url="; //https://github.com/shashstormer/m3u8_proxy-cors

// Google reCAPTCHA keys
$google_recap_site_key = 'add-site-captcha-keys-here-stoopid-lol';  // https://developers.google.com/recaptcha
$google_recap_secret_key = 'you-know-what-goes-here?-your-secret-key';  // https://developers.google.com/recaptcha

$banner = $websiteUrl . "/public/images/banner.png";

    
