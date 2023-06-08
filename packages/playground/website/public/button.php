<!DOCTYPE html>
<html>
<head>
<?php
// Render <a href> that looks like button linking to the current URL except for the start_button parameter
$url = $_SERVER['REQUEST_URI'];
$url = preg_replace('/&?start_button=[^&]/', '', $url);
?>
<style>
html, body {
    width: 100%;
    height: 100%;
    overflow: hidden;
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial, Helvetica, sans-serif;
}
.btn {
    display: inline-block;
    background-color: #4CAF50; /* Change this color to your desired green */
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    font-size: 34px;
    border-radius: 4px;
    transition: all 0.3s ease 0s;
    box-shadow: 0px 5px 15px rgba(0,0,0,0.2); /* This creates the shadow effect */
}

.btn:hover {
    background-color: #45a049; /* A darker shade of green for hover */
    box-shadow: 0px 2px 10px rgba(0,0,0,0.4); /* Increased shadow on hover */
}

.btn:active {
    background-color: #387c3b; /* An even darker shade of green for active click */
    box-shadow: 0px 1px 5px rgba(0,0,0,0.4); /* Less shadow during active click */
    transform: translateY(2px); /* Button is pressed down a bit */
}

</style>
</head>
<body>
<a href="<?php echo htmlspecialchars($url); ?>" class='btn btn-primary'>Run Playground</a>
