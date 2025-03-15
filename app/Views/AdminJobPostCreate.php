<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/275e820b94.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a class="active-list" href="#">Dashboard</a></li> 
                <li><a class="active-list" href=<?=base_url('/admin/jobpostcreate')?>>Job Post</a></li>
                <li><a class="active-list" href="#">Users</a></li>
                <li><a class="active-list" href="#">Settings</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="content-wrapper">
                <div class="title">
                <h1>Job Post</h1>
                </div> 
    <div class="text-editor-main">
        
        <form action="<?=base_url('admin/jobpostsubmit')?>" method="POST">
            <label >Job Title</label>
            <input type="text" name="jobtitle" placeholder="Job Title">
            <label >JobLocation</label>
            <input type="text" name="JobLocation" placeholder="JobLocation">
            <label >CompanyId</label>
            <input type="text" name="CompanyId" placeholder="CompanyId">
            <label >ExpiredDate</label>
            <input type="date" name="ExpiredDate" placeholder="ExpiredDate">
            <div class="options">
            <button class="my-text-btn" data-command="undo"><i class ="fas fa-undo"></i></button>
            <button class="my-text-btn" data-command="redo"><i class ="fas fa-redo"></i></button>
            <button class="my-text-btn" data-command="bold"><i class ="fas fa-bold"></i></button>
            <button class="my-text-btn" data-command="italic"><i class ="fas fa-italic"></i></button>
            <button class="my-text-btn" data-command="underline"><i class ="fas fa-underline"></i></button>
            <button class="my-text-btn" data-command="strikeThrough"><i class ="fas fa-strikethrough"></i></button>
            <button class="my-text-btn" data-command="formatBlock" data-block="H1">H1</button>
            <button class="my-text-btn" data-command="formatBlock" data-block="H2">H2</button>
            <button class="my-text-btn" data-command="formatBlock" data-block="H2">H3</button>
            <button class="my-text-btn" data-command="superscript"><i class ="fas fa-superscript"></i></button>
            <button class="my-text-btn" data-command="subscript"><i class ="fas fa-subscript"></i></button>
            <button class="my-text-btn" data-command="insertUnorderedList"><i class ="fas fa-list-ul"></i></button>
            <button class="my-text-btn" data-command="insertOrderedList"><i class ="fas fa-list-ol"></i></button>
            <button class="my-text-btn" data-command="justifyLeft"><i class ="fas fa-align-left"></i></button>
            <button class="my-text-btn" data-command="justifyCenter"><i class ="fas fa-align-center"></i></button>
            <button class="my-text-btn" data-command="justifyRight"><i class ="fas fa-align-right"></i></button>
            <button class="my-text-btn" data-command="justifyFull"><i class ="fas fa-align-justify"></i></button>
            <button class="my-text-btn" data-command="insertImage"><i class ="fas fa-images"></i></button>
            <button class="my-text-btn" data-command="createLink"><i class ="fas fa-link"></i></button>
            <button class="my-text-btn" data-command="formatBlock" data-block="blockquote"><i class ="fas fa-quote-right"></i></button>
            <button class="my-text-btn" data-command="formatBlock" data-block="pre"><i class ="fas fa-code"></i></button>
        </div>
            <div id="ContentOutput" class="contentOutput" contenteditable="true" ></div>
            <textarea name="content" style="display:none;"></textarea>
            <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
        <script>
            document.querySelector('form').addEventListener('submit', function() {
                var content = document.querySelector('.contentOutput').innerHTML;
                document.querySelector('textarea[name="content"]').value = content;
            });
            </script>

    </div>

    <div class="floating-button"><i class="fas fa-expand-arrows-alt" aria-hidden="true"></i></div>
    <script src="<?=base_url('js/admin.js')?>"></script>



                
            </div>
            
        </div>
    </div>
</body>
</html>
