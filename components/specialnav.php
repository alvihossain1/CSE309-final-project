<?php 
echo "session_start();"
?>

<?php

echo '<div class="profile-nav d-flex">';
echo '<?php if (!isset($_SESSION["loggedInUser"])) { ?>';
echo '<a class="nav-effect nav-p-link-color nav-link" href="./login.php">Profile / Login</a>';
echo '<?php } else { ?>';
echo '<div class="dropdown d-flex align-items-center">';
echo '<a class="nav-effect nav-p-link-color m-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
echo '<?php echo $_SESSION["loggedInUser"] ?>';
echo '</a>';
echo '<ul class="dropdown-menu">';
echo '<li><a class="dropdown-item" href="#">View Information</a></li>';
echo '<li><form class="text-align-center" method="POST" action="">';
echo '<button class="dropdown-item" name="logout-submit">Logout</button>';
echo '</form></li>';
echo '</ul>';
echo '</div>';
echo '<?php } ?>';
echo '</div>';
?>