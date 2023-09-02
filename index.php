<!DOCTYPE html>
<html>
<head>
    <!-- <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans&display=swap" rel="stylesheet"> -->
</head>
<body>
 

<!-- form  -->
<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">login page</h3>
    </div>
    <div class="w-50 m-auto">
        <form action="userinfo.php" method="post">
            <div class="form-group">
                <label> Full Name</label>
                <input type="text" name="fullname" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>mobile Number</label>
                <input type="text" name="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Email id</label>
                <input type="text" name="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>subject</label>
                <input type="text" name="subject" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message"></textarea>
            </div>
            <button type="submit"class="btn btn-success">Submit</button>
        </form>
    </div>
</section>
</html>