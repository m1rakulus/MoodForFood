
    <?php
    // Display success message if set
    if (isset($_SESSION['success_message'])) {
        echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>'; // Display success message
        unset($_SESSION['success_message']); // Remove success message from session to prevent it from being displayed again
    }

    // Display error message if set
    if (isset($_SESSION['error_message'])) {
        echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>'; // Display error message
        unset($_SESSION['error_message']); // Remove error message from session to prevent it from being displayed again
    }
?>
