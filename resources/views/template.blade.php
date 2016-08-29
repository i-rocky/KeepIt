<!DOCTYPE html>
<html>
<head>
    <title>KeepIt</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="KeepIt; Save your documents and codes online; Share with anyone;">
    <meta name="author" content="MD. Rocky PK.">

    <!-- ./styles -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body ng-app="KeepIt" ng-cloak>
<!-- ./container -->
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#/">KeepIt</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#/">Home</a></li>
                <li><a href="#home">Home 2</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#/">Page 3</a></li>
            </ul>
        </div>
    </nav>
    <div ng-view></div>
</div>

<!-- ./scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/js/bootstrap-select.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-route.js"></script>

<!-- ./scripts -->
<script src="js/ngApp.js"></script>
<script src="js/service.js"></script>
<script src="js/controller.js"></script>
</body>
</html>


