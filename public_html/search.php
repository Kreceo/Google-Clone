<?php $term = $_GET['term']; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title><?php echo $term; ?> - Froogle</title>
</head>
<body>
    
    <div class="wrapper">
        <div class="header">
            <div class="headerContent">
                <div class="searchContainer">
                    <a href="/">
                        <img src="./images/froogle-logo.png" />
                    </a>
                    <form action="" method="GET">
                        <input type="text" class="searchBox" name="term" value="<?php echo $_GET['term']; ?>" id="searchInput">
                        <button type="submit" onClick="return empty()">
                            <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
                        </button>
                    </form>
                </div>
            </div>  
            <div class="navContainer">
                <div class="navContent">
                    <div class="navItem active">
                        <a href=''>
                            <span>
                                <svg focusable="false" viewBox="0 0 24 24"><path fill="#34a853" d="M10 2v2a6 6 0 0 1 6 6h2a8 8 0 0 0-8-8"></path><path fill="#ea4335" d="M10 4V2a8 8 0 0 0-8 8h2c0-3.3 2.7-6 6-6"></path><path fill="#fbbc04" d="M4 10H2a8 8 0 0 0 8 8v-2c-3.3 0-6-2.69-6-6"></path><path fill="#4285f4" d="M22 20.59l-5.69-5.69A7.96 7.96 0 0 0 18 10h-2a6 6 0 0 1-6 6v2c1.85 0 3.52-.64 4.88-1.68l5.69 5.69L22 20.59"></path></svg>
                            </span>
                            All
                            <div class="navBorder"></div>
                        </a>
                    </div>
                    <div class="navItem">
                        <a href=''>
                            <span>
                                <svg focusable="false" viewBox="0 0 24 24"><path d="M14 13l4 5H6l4-4 1.79 1.78L14 13zm-6.01-2.99A2 2 0 0 0 8 6a2 2 0 0 0-.01 4.01zM22 5v14a3 3 0 0 1-3 2.99H5c-1.64 0-3-1.36-3-3V5c0-1.64 1.36-3 3-3h14c1.65 0 3 1.36 3 3zm-2.01 0a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7v-.01h7a1 1 0 0 0 1-1V5"></path></svg>
                            </span>
                            Images
                        <a href=''>
                    </div>
                </div>
            </div>
        </div>
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