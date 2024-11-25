<?php
// Setting a Cookie
setcookie("username", "bhaskar", time() + (86400 * 30), "/"); // 86400 = 1 day

// Accessing the Cookie
if (isset($_COOKIE["username"])) {
    echo "Hello, " . $_COOKIE["username"] . "! Welcome back.";
} else {
    echo "Hello, guest! Set a username to continue.";
}

// Deleting a Cookie
if (isset($_COOKIE["username"])) {
    setcookie("username", "", time() - 3600, "/"); // Expire the cookie
    echo "Cookie has been deleted.";
}
?>
