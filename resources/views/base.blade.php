<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <title>StoneCold Real Estate</title>
</head>
<style>

</style>
<body style="background-color: #0F0F0F;">
<!--background image -->
    <div style="background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 0.5) 0%,rgba(0, 0, 0, 0.5) 100%), url(https://images.pexels.com/photos/313691/pexels-photo-313691.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);background-attachment:fixed; background-repeat: no-repeat; background-position:center;">
    <!-- Navbar -->
    @include('nav')

    <!--search bar -->
    @include('search')
        <br><br><br><br>
        <div class="container">

        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
    <!--cards-->
    <p  style="margin-top:20px; margin-left:20px; color:#E5E8E8;font-family: Tw Cen MT;font-size:30px;">Top Listings</p>
    @include('cards')
</body>

<footer class="text-white"><br>
    <p style="text-align:center;font-family:Tw Cen MT;font-size:20px">Copyright &#169; 2021 StoneCold Inc., Ltd. All Rights Reserved 2021.</p>
</footer>
</html>