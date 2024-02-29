<?php 
    require_once '../includes/config_session.inc.php';
    include_once("../includes/dbh.inc.php");
    require_once '../includes/signup/signup_view.inc.php';
    require_once '../includes/login/login_view.inc.php';
    require_once '../includes/post/post_view.inc.php';
    require_once ("../includes/functions/functions.php");
?>

<!DOCTYPE html>
<html id="html-head" class="h-100 setcqjsqn idc0_343" data-bs-theme="dark" lang="en">
<head><script src="/docs/5.3/assets/js/color-modes.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>MJdoesCode</title>
</head>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    // Retrieve the theme value from localStorage
    const storedTheme = localStorage.getItem('theme');

    // Set the theme based on the stored value
    if (storedTheme) {
        document.documentElement.setAttribute('data-bs-theme', storedTheme);
        changeNavTextColor(storedTheme);
    }
});

function changeThemeColor() {
    const headHtml =document.getElementById('html-head');
    const currentTheme = headHtml.getAttribute('data-bs-theme');
    const newTheme = currentTheme === 'light' ? 'dark' : 'light';
    document.documentElement.setAttribute('data-bs-theme', newTheme);
    console.log(newTheme);
    localStorage.setItem('theme', newTheme);
    changeNavTextColor(newTheme);
}

function changeNavTextColor(newTheme) {
        const home = document.getElementById('home-b');
        const about = document.getElementById('about-b');
        const blog = document.getElementById('blog-b');

    if(newTheme =='light'){
        home.classList.add('text-dark');
        about.classList.add('text-dark');
        blog.classList.add('text-dark');
    } else {
        
        home.classList.remove('text-dark');
        about.classList.remove('text-dark');
        blog.classList.remove('text-dark');
    }
}

</script>



