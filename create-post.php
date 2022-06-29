<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
</head>
<body>
    <?php include('header.php');


//Dodatni zadatak//

    if(isset($_POST['submit'])){

    $title = $_POST['title'];
    $author = $_POST['author'];
    $body = $_POST['body'];
    $createdAt = date("Y-m-d h:i");

    $sql = "INSERT INTO posts (title, body, author, created_at) VALUES ('$title', '$body',
    '$author', '$createdAt')";

    $statement = $connection->prepare($sql);
    $statement->execute();
    header("Location:/posts.php");
}


?>

<form action="create-post.php" method="post">

    <li style="color:red;"><label for="title">Title</label></li>
    <li><input type="text" name="title" id="title" placeholder="title" required></li>


    <li style="color:red;"><label for="body">Body</label></li>
    <li><textarea name="body" id="body" cols="60" rows="10" required placeholder="body" ></textarea></li>


    <li style="color:red;"><label for="author">Author</label></li>
    <li><input type="text" name="author" id="author" placeholder="author" required></li>
    

    <li><button type="submit" name="submit">Submit</button></li>

</form>


<?php include('sidebar.php');?>
<?php include('footer.php');?>

</body>
</html>


