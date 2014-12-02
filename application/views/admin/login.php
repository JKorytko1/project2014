<!DOCTYPE html>
<html>
    <head>
        <base href="{$base_url}">
        <title>Admin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/admin.css" rel="stylesheet" media="screen">
    </head>
    <body>
        <div class="container">
            <form class="form-signin col-md-4 col-md-offset-4" method="post" role="form" action="<?=base_url();?>index.php/auth/login">
                <h1 class="logo"><a href="#">Logo</a></h1>
                <input type="text" class="form-control" placeholder="Login" autofocus name="identity">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
            </form>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html> 
