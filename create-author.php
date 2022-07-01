<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../../../favicon.ico">
        <title>Vivify Blog</title>
        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <!-- Custom styles for this template -->
        <link href="styles/blog.css" rel="stylesheet">
        <link rel="stylesheet" href="./styles/styles.css">
    </head>
    <body>

    <?php include('header.php');

    if(isset($_POST['submit'])) {
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $pol = $_POST['pol'];

        $sql = "INSERT INTO author (ime, prezime, pol) VALUES ($ime, $prezime, $pol)";
        $statement = $connection->prepare($sql);
        $statement->execute();
        header("location:/create-post.php");
    }
    ?>

    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <h2>Create Author</h2>
                <form method="POST" action="create-author.php">
                   
                    <label>Ime</label>
                    <input type="text" name="ime" required>
                    
                    <label>Prezime</label>
                    <input type="text" name="prezime" required>

                    <br>
                    <br>
               
                    <label>M</label>
                    <input id="m" name="pol"  type="radio" value="M">
                    
                    <label>Z</label>
                    <input id="z" name="pol" type="radio" value="Z">

                    <br>
                    <br>
                        
                    <button type="submit" name="submit">Create Author</button>
                </form>
            </div><!-- /.blog-main -->
            <?php include('sidebar.php') ?>
            <!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </main><!-- /.container -->
    <?php include('footer.php') ?>
    </body>
</html>