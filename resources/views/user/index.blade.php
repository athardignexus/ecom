<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500;600;700;800&family=Montserrat:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/style3.css"><!--------tab click part--------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css'>

    <title>Home</title>
</head>

<body>
    <!-- navbar start here -->
    @include('user.layout.header')
    <!-- navbar end here -->

    <!-- banner start here -->
    @include('user.layout.banner')
    <!-- banner end here -->
    <main>
        <!-- haldi_photo sec start here -->
        @include('user.layout.haldisection')
        <!-- haldi_photo sec end here -->

        <!-- same_part 2nd start here from inner page -->

        <!-- same_part 2nd end here from inner page -->

        <!-- mid_apart 3 pic sec start here -->
        @include('user.layout.advertisement')
        <!-- mid_apart 3 pic sec end here -->

        <!-- same_part 2nd start here from inner page -->

        <!-- same_part 2nd end here from inner page -->

        <!-- late_blog section start here -->
        @include('user.layout.blog')
        <!-- late_blog section end here -->

        <!-- follow us start here -->
        @include('user.layout.followus')
        <!-- follow us start here -->

        <!-- in_touch start here -->
        @include('user.layout.in_touch')
        <!-- in_touch end here -->
    </main>

    <!-- footer start here -->
    @include('user.layout.footer')
    <!-- footer start here -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox-plus-jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="./js/nav.js"></script>
    <script src="js/script3.js"></script><!------tab click part---------->

</body>

</html>