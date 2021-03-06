<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Boostrap 4.0 -->
    <link rel="stylesheet" href="/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="/js/bootstrap.min.js"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Font Awesome -->
    <script src="https://use.fontawesome.com/2c5a94bf03.js"></script>

    <!-- TinyMCE -->
    <script src="/tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        tinymce.init({ 
            selector: '#postContent',
            plugins: 'lists link preview emoticons',
            branding: false,
            menubar: false,
            toolbar: 'undo redo | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify alignnone | outdent indent | blockquote bullist numlist link emoticons preview',
        });
    </script>

    <title>One-Way ticket to Alaska</title>
</head>

<body>

<!-- Show Flash message -->
<?php if (isset($_SESSION['message'])) { ?>

    <div class="alert alert-dark alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        Message: <strong class="text-justify"><?= $_SESSION['message'] ?></strong>
    </div>

<?php unset( $_SESSION['message'] ); } ?>

