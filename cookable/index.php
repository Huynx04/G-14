<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKABLE</title>
    <link rel="stylesheet"  href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<div id="wrapper">
<?php
    include("pages/header.php");
    include("pages/banner.php");
    include("pages/menu.php");
    include("pages/main.php");
    include("pages/footer.php");
?>


</div>

<div id="chatbot-circle" onclick="toggleChat()">
    <p> 
        <i class="fa-solid fa-robot"></i>
    </p>
</div>

<div id="chatbot-interface" style="display: none;">
    <div id="chatbot-messages"></div>
    <input id="chatbot-input" type="text" placeholder="Type your message here..." />
</div>

<script>
    function toggleChat() {
        var chatInterface = document.getElementById('chatbot-interface');
        if (chatInterface.style.display === "none") {
            chatInterface.style.display = "block";
        } else {
            chatInterface.style.display = "none";
        }
    }
</script>

<script>
    document.getElementById('learn-more-button').addEventListener('click', function() {
      window.location.href = 'banner.html';
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var productLink = document.querySelector('.item a[href="#products"]');
        var productsSection = document.getElementById('wp-products');
        productLink.addEventListener('click', function (event) {
            event.preventDefault(); 
            productsSection.scrollIntoView({ behavior: 'smooth' });
        });
    });
</script>
</body>

</html>