<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header("Location:http://webdev.edinburghcollege.ac.uk/~HNCWEBMR19/llc/index.php");
?>

</body>
</html>