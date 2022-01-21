<html>
    
<head>
<title>
    File Upload
</title>
</head>
<body>
<!-- <form action="copy_files_remote_server.php" method="POST" enctype="multipart/form-data">
        <label for="file">Plik: <input type="file" name="file" id="file"/> </label>
        <input type="submit" value="Upload" />
</form>
 -->

<form action="copy_files_remote_server.php" method="POST" enctype="multipart/form-data"> 
        <input type="file" name="userfile[]" class="files" multiple />
        <input type="submit" class="btn btn-info" name="submit" value="Upload files" ></button>
        
</form>
</body>
</html>


