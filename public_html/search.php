<?php 
    if(isset($_GET['term'])) {
        $term = $_GET['term'];
    }

    $type = isset($_GET['type']) ? $_GET['type'] : 'all';
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./assets/images/google-favicon-512.png" />
    <link rel="stylesheet" href="./assets/css/style.css">
    <title><?php echo $term; ?> - Froogle</title>
</head>
<body>
    
    <div class="wrapper">
        <div class="header">
            <div class="headerContent">
                <div class="searchContainer">
                    <a href="/">
                        <img src="./assets/images/froogle-logo.png" />
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
                    <div class="navItem <?php echo $type == 'all' ? 'active' : '' ?>">
                        <a href='<?php echo "search.php?term=$term&type=all"; ?>'>
                            <?php if($type == 'all') { ?>
                                <svg focusable="false" viewBox="0 0 24 24"><path fill="#34a853" d="M10 2v2a6 6 0 0 1 6 6h2a8 8 0 0 0-8-8"></path><path fill="#ea4335" d="M10 4V2a8 8 0 0 0-8 8h2c0-3.3 2.7-6 6-6"></path><path fill="#fbbc04" d="M4 10H2a8 8 0 0 0 8 8v-2c-3.3 0-6-2.69-6-6"></path><path fill="#4285f4" d="M22 20.59l-5.69-5.69A7.96 7.96 0 0 0 18 10h-2a6 6 0 0 1-6 6v2c1.85 0 3.52-.64 4.88-1.68l5.69 5.69L22 20.59"></path></svg>
                            <?php } else { ?>
                                <svg focusable="false" viewBox="0 0 24 24"><path d="M16.32 14.88a8.04 8.04 0 1 0-1.44 1.44l5.76 5.76 1.44-1.44-5.76-5.76zm-6.36 1.08c-3.36 0-6-2.64-6-6s2.64-6 6-6 6 2.64 6 6-2.64 6-6 6"></path></svg>
                            <?php } ?>
                            All
                            <?php echo $type == 'all' ? '<div class="navBorder"></div>' : '' ?>
                        </a>
                    </div>
                    <div class="navItem <?php echo $type == 'images' ? 'active' : '' ?>">
                        <a href='<?php echo "search.php?term=$term&type=images"; ?>'>
                            <?php if($type == 'images') { ?>
                                <svg class="DCxYpf" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" fill="none" d="M0 0h24v24H0z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#4285F4" d="M19 22h-7v-2h7c.55 0 1-.46 1-1V5a1 1 0 0 0-1-.99L12 4V2h7c1.66 0 3 1.36 3 3v14c0 1.65-1.35 3-3 3"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#EA4335" d="M12 22H5c-1.64 0-3-1.36-3-3V5c0-1.64 1.36-3 3-3h7v2H5c-.55 0-.99.45-.99 1L4 19c0 .55.45 1 1 1h7v2z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#34A853" d="M14 13l-2.25 2.75L10 14l-4 4h12z"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#FBBC04" d="M10 8c0 1.1-.9 2-2 2s-2-.9-2-2c0-1.09.9-2 2-2s2 .9 2 2"></path></svg>
                            <?php } else { ?>
                                <svg focusable="false" viewBox="0 0 24 24"><path d="M14 13l4 5H6l4-4 1.79 1.78L14 13zm-6.01-2.99A2 2 0 0 0 8 6a2 2 0 0 0-.01 4.01zM22 5v14a3 3 0 0 1-3 2.99H5c-1.64 0-3-1.36-3-3V5c0-1.64 1.36-3 3-3h14c1.65 0 3 1.36 3 3zm-2.01 0a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7v-.01h7a1 1 0 0 0 1-1V5"></path></svg>
                            <?php } ?>
                            Images
                            <?php echo $type == 'images' ? '<div class="navBorder"></div>' : '' ?>
                        </a>
                    </div>
                    <div class="navItem <?php echo $type == 'news' ? 'active' : '' ?>">
                        <a href='<?php echo "search.php?term=$term&type=news"; ?>'>
                            <?php if($type == 'news') { ?>
                                <svg focusable="false" viewBox="0 0 24 24"><path fill="#34a853" d="M22 12h-2v6.22c-.07.48-.51.82-1 .78h-7v2h7c1.59.05 2.92-1.17 3-2.76V12"></path><path fill="#4285f4" d="M19 3h-7v2h7c.49-.04.92.3 1 .78V12h2V5.76A2.93 2.93 0 0 0 19 3"></path><path fill="#ea4335" d="M12 3H5a2.93 2.93 0 0 0-3 2.76V12h2V5.78A.94.94 0 0 1 5 5h7V3"></path><path fill="#fbbc04" d="M4 12H2v6.24A2.916 2.916 0 0 0 5 21h7v-2H5c-.49.04-.92-.3-1-.78L4.01 12"></path><path fill="#4285f4" d="M10 7H6v6h4V7m8 4h-6v2h6v-2m0 4H6v2h12v-2m0-8h-6v2h6V7"></path></svg>
                            <?php } else { ?>
                                <svg class="DCxYpf" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0z" fill="none"></path><path d="M12 11h6v2h-6v-2zm-6 6h12v-2H6v2zm0-4h4V7H6v6zm16-7.22v12.44c0 1.54-1.34 2.78-3 2.78H5c-1.64 0-3-1.25-3-2.78V5.78C2 4.26 3.36 3 5 3h14c1.64 0 3 1.25 3 2.78zM19.99 12V5.78c0-.42-.46-.78-1-.78H5c-.54 0-1 .36-1 .78v12.44c0 .42.46.78 1 .78h14c.54 0 1-.36 1-.78V12zM12 9h6V7h-6v2z"></path></svg>
                            <?php } ?>
                            News
                            <?php echo $type == 'news' ? '<div class="navBorder"></div>' : '' ?>
                        </a>
                    </div>
                    <div class="navItem <?php echo $type == 'shopping' ? 'active' : '' ?>">
                        <a href='<?php echo "search.php?term=$term&type=shopping"; ?>'>
                            <?php if($type == 'shopping') { ?>
                                <svg focusable="false" viewBox="0 0 24 24"><path fill="#ea4335" d="M8.65 8.04l-1.4-1.41 3.74-3.74c.58-.58 1.35-.89 2.16-.89h5.8c.82 0 1.58.31 2.16.89L19.69 4.3c-.2-.2-.47-.31-.74-.31l-5.8.01c-.28 0-.54.1-.74.3L8.65 8.04"></path><path fill="#fbbc05" d="M5.8 18.2l-2.9-2.9c-1.19-1.19-1.19-3.12 0-4.32l4.36-4.36 1.4 1.41-4.35 4.37c-.41.41-.41 1.08 0 1.49l2.9 2.9L5.8 18.2"></path><path fill="#4285f4" d="M21.11 2.89L19.69 4.3c.21.21.31.48.31.75v5.8c0 .28-.12.54-.32.74l-3.73 3.74-4.36 4.36c-.41.41-1.08.41-1.49 0l-2.89-2.9L5.8 18.2l2.89 2.9c.6.6 1.38.9 2.16.9.78 0 1.56-.29 2.16-.89l4.36-4.36 3.73-3.74c.58-.58.9-1.34.9-2.16v-5.8c0-.81-.32-1.59-.89-2.16"></path><circle fill="#34a853" cx="16" cy="8" r="2"></circle></svg>
                            <?php } else { ?>
                                <svg class="DCxYpf" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h24v24H0V0z" fill="none"></path><path d="M21.11 2.89A3.02 3.02 0 0 0 18.95 2h-5.8c-.81 0-1.58.31-2.16.89L7.25 6.63 2.9 10.98a3.06 3.06 0 0 0 0 4.32l5.79 5.8a3.05 3.05 0 0 0 4.32.01l8.09-8.1c.58-.58.9-1.34.9-2.16v-5.8c0-.81-.32-1.59-.89-2.16zM20 10.85c0 .28-.12.54-.32.74l-3.73 3.74-4.36 4.36c-.41.41-1.08.41-1.49 0l-2.89-2.9-2.9-2.9a1.06 1.06 0 0 1 0-1.49l8.1-8.1c.2-.2.46-.3.74-.3l5.8-.01A1.05 1.05 0 0 1 20 5.05v5.8zM16 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2z"></path></svg>
                            <?php } ?>
                            Shopping
                            <?php echo $type == 'shopping' ? '<div class="navBorder"></div>' : '' ?>
                        </a>
                    </div>
                    <div class="navItem <?php echo $type == 'videos' ? 'active' : '' ?>">
                        <a href='<?php echo "search.php?term=$term&type=videos"; ?>'>
                            <?php if($type == 'videos') { ?>
                                <svg focusable="false" viewBox="0 0 24 24"><path fill="#4285f4" d="M10 16.5l6-4.5-6-4.5"></path><path fill="#ea4335" d="M20 12h2v7.5a2.5 2.5 0 0 1-2.5 2.5H12v-2h7a1 1 0 0 0 1-1v-7"></path><path fill="#fbbc04" d="M20 12V5a1 1 0 0 0-1-1h-7V2h7.6A2.4 2.4 0 0 1 22 4.4V12h-2"></path><path fill="#34a853" d="M12 20v2H5a3 3 0 0 1-3-3V4.4A2.4 2.4 0 0 1 4.4 2H12v2H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7"></path></svg>
                            <?php } else { ?>
                                <svg class="DCxYpf" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M0 0h24v24H0z" fill="none"></path><path clip-rule="evenodd" d="M10 16.5l6-4.5-6-4.5v9zM5 20h14a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1zm14.5 2H5a3 3 0 0 1-3-3V4.4A2.4 2.4 0 0 1 4.4 2h15.2A2.4 2.4 0 0 1 22 4.4v15.1a2.5 2.5 0 0 1-2.5 2.5z" fill-rule="evenodd"></path></svg>                                
                            <?php } ?>
                            Videos
                            <?php echo $type == 'videos' ? '<div class="navBorder"></div>' : '' ?>
                        </a>
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