<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/images/google-favicon-512.png" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Froogle</title>
</head>
<body>
    
    <div class="wrapper indexPage">
        <section class="mainSection">
            <div class="logoContainer">
                <img src="./assets/images/froogle-logo.png" />
            </div>
            <div class="searchContainer">
                <form action="search.php" method="GET">
                    <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                    </svg>
                    <input type="text" class="searchBox" name="term" id="searchInput">
                    <div class="buttonContainer">
                        <input type="submit" class="searchButton" value="Google Search" onClick="return empty()">
                        <input type="submit" class="searchButton" value="I'm Feeling Lucky" data-ved="0ahUKEwiNm6S0jYLrAhXslnIEHYv2B30QnRsIDg">
                    </div>
                </form>
            </div>
        </section>
    </div>

    <script>
        function empty() {
        var x;
        x = document.getElementById("searchInput").value;
            if (x == "") {
                return false;
            };
        }
    </script>
</body>
</html>