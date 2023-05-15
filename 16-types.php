<?php include 'includes/header.php';

function userAuth(bool $auth) : ?string { // ?string means that the function will return a string or null
    if($auth) {
        return "User is authenticated";
    } else {
        return "User is not authenticated";
    }
}
// Also, unions can be used in functions like this: function userAuth(bool $auth) : string|bool { ... }
// This means that the function will return a string or a boolean

$userAuth = userAuth(true);
echo $userAuth;

include 'includes/footer.php';