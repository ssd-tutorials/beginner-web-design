<?php

header("HTTP/1.0 404 Not Found");

$title = 'Page not found!';

require "partials/header.php";

?>

<section class="wrapper white">

    <div class="row">

        <div class="column">

            <h1>PAGE NOT FOUND!</h1>

            <p>The page you are trying to access does not exist or has been moved.</p>

        </div>

    </div>

</section>

<?php require "partials/footer.php"; ?>