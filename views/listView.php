<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exam 2 | List Dogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
 
    <div class="container mt-3">
        <div class="col">
            <table class="table table-bordered table-striped">
                <thead></th><th>Dog ID</th><th>Owner Name</th><th>Dog Name</th><th>Dog Breed</th><th>Color</th><th>Age</th></tr></thead>
                <tbody>
                    <?php
                        for($index=0;$index<count($dogs);$index++){
                            echo "<tr><td>".$dogs[$index]->dogID."</td><td>"
                                    .$dogs[$index]->ownerName."</td><td>"
                                    .$dogs[$index]->dogName."</td><td>"
                                    .$dogs[$index]->dogBreed."</td><td>"
                                    .$dogs[$index]->dogColor."</td><td>"
                                    .$dogs[$index]->dogAge."</td></tr>";
                        }
                    ?>
                </tbody>        
            </table>       
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>