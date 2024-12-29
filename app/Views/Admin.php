<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li ><a class="active-list" href="#">Dashboard</a></li> 
                <li><a class="active-list" href=<?=base_url('/admin/jobpostcreate')?>>Job Post</a></li>
                <li><a class="active-list" href="#">Users</a></li>
                <li><a class="active-list" href="#">Settings</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="content-wrapper">
                <div class="title">
                <h1>Admin Dashboard</h1>
                </div> 



                
            </div>
            
        </div>
    </div>
</body>
</html>
