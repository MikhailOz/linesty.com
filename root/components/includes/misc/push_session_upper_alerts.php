<?php // SESSION IS SUPPOSED TO BE STARTED AND UPPER ALERTS IMPORTED
if (isset($_SESSION['unsuccess_upper_message']) && $_SESSION['unsuccess_upper_message'] !== '') {
    $message = addslashes($_SESSION['unsuccess_upper_message']);
    echo "<script>document.addEventListener('DOMContentLoaded', function() { upperAlertManager.pushAnUpperAlert('error', '$message'); const self = document.getElementById('self_upper_error'); if (self) self.remove(); });</script>";
} elseif (isset($_SESSION['success_upper_message']) && $_SESSION['success_upper_message'] !== '') {
    $message = addslashes($_SESSION['success_upper_message']);
    echo "<script>document.addEventListener('DOMContentLoaded', function() { upperAlertManager.pushAnUpperAlert('success', '$message'); const self = document.getElementById('self_upper_error'); if (self) self.remove(); });</script>";
}

unset($_SESSION['unsuccess_upper_message']);
unset($_SESSION['success_upper_message']);