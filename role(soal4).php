<?php
$role = $_GET['role'] ?? 'viewer'; // contoh: ?role=admin

switch ($role) {
    case 'admin':
        echo "Menu: Dashboard | User Management | Settings";
        break;
    case 'editor':
        echo "Menu: Dashboard | Create Post | Edit Post";
        break;
    case 'viewer':
    default:
        echo "Menu: Dashboard | View Posts";
        break;
}
?>
