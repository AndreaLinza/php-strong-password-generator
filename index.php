<?php

include "./functions.php";

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="https://boolean.careers/favicon/favicon.ico">

    <title>Password Generetor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>


    <div class="container">
        <h1 class="text-center display-2 fw-bold py-4">Password Generator</h1>


        <div>
            <form method="GET">

                <div class="row flex-column justify-content-center">
                    <div class="col">

                        <select name="passwordLength" class="form-select m-auto w-50 mt-4" aria-label="Default select example">
                            <option hidden selected value="0">Quanto vuoi sia lunga la password?</option>
                            <option value="8">8 lettere</option>
                            <option value="9">9 lettere</option>
                            <option value="10">10 lettere</option>
                            <option value="11">11 lettere</option>
                            <option value="12">12 lettere</option>
                            <option value="13">13 lettere</option>
                            <option value="14">14 lettere</option>
                            <option value="15">15 lettere</option>
                            <option value="16">16 lettere</option>
                        </select>

                    </div>
                    <button type="submit" class="btn btn-primary mt-4 w-auto" style="margin: auto;">Genera password</button>


                </div>

            </form>
            <?php
            if ($passwordLength != 0) {
            ?>
                <div class="text-center pt-5">Password: <?php echo $randomPassword ?></div>
            <?php
            }
            ?>
        </div>
    </div>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</html>