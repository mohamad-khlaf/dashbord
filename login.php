<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/zero.css">
</head>
<body>

<div class="container">
    <form class="mt-3 mb-4 pb-4" action="chk.php" method="post"> 
        <h2 class=" mt-4 mb-4 text-center"> تسجيل الدخول  </h2><div class="mb-4">
        <div class="mb-3">
            <label class="form-label" for="InputName">user name</label>
            <input name="user" class="form-control" type="text" id="InputName" aria-describedby="emailHelp">
            <div class="form-text visible">Enter you user name</div>
        </div>
        <div class="mb-3">
            <label class="form-label" for="InputName">password</label>
            <input name="pass" class="form-control" type="password" id="InputName" aria-describedby="emailHelp">
            <div class="form-text visible">you must be Enter your password</div>
        </div>
        <button class="btn btn-primary m-auto d-block w-50" type=""submit>login</button>
    </form>
</div>
</body>
</html>