<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="<?= site_url('admin/dashboard') ?>">Dashboard</a></li>
                <li><a href="<?= site_url('admin/users') ?>">Users</a></li>
                <li><a href="<?= site_url('admin/posts') ?>">Posts</a></li>
                <li><a href="<?= site_url('admin/logout') ?>">Logout</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <?= $this->renderSection('content') ?>
    </main>
</body>
</html>
