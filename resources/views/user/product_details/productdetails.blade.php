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
    <link rel="stylesheet" href="css/style1.css"><!--------price range part--------------->
    <link rel="stylesheet" href="./css/all.css"><!--------font awsme part--------------->
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/style3.css"><!--------tab click part--------------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'>
    <link rel='stylesheet' href='https://kenwheeler.github.io/slick/slick/slick-theme.css'>


    <link rel="stylesheet" href="css/style4.css">


    <title>product details </title>
</head>

<body>
    <!-- navbar start here -->
    @include('user.layout.header')
    <!-- navbar end here -->

    <!-- banner start here -->
    @include('user.layout.banner')
    <!-- banner end here -->

    <main>
        <!----product details part start here------>
        @include('user.product_details.productdetailpart')
        <!----product details part end here------>


        <!---------related products slider part start------------->
        @include('user.product_details.relatedproductslider')
        <!---------related products slider part end------------->


        <!-- in_touch start here -->
        <section>
            @include('user.layout.in_touch')
        </section>
        <!-- in_touch end here -->
    </main>

    <!-- footer start here -->
    <footer>
        @include('user.layout.footer')
    </footer>
    <!-- footer start here -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>

    <script src="./js/nav.js"></script>
    <script src="js/all.js"></script><!------font awsm part---------->
    <script src="js/script1.js"></script><!------price ranging part---------->

    <!------tab click part---------->
    <script src="js/script3.js"></script>

    <!--------product details part------->
    <script src="js/script4.js"></script>


    <!------product counting part js------>
    <script src="js/counting_js.js"></script>

    <!-------card slider---------->
    <script>
        $('.carousel .carousel-item').each(function() {
            var minPerSlide = 4;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>





</body>

</html>