<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>COMP-1006 - Introduction to Web Programming</title>
    </head>

    <body>
        <div class="row">
            <div class="col text-center my-2">
                <h1>COMP-1006 - PHP Course</h1>
                <hr>
                <h2>Table of Contents</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="list-group">
                    <li class="list-group-item">
                        <h2>Lessons</h2>

                        <ol class="list-group list-group-numbered">
                            <?php for ($i = 1; $i <= 12; $i++): ?>
                            <li class="list-group-item">
                                <a href="./lessons/lesson-<?= str_pad($i, 2, "0", STR_PAD_LEFT) ?>">Lesson <?= $i ?></a>
                            </li>
                            <?php endfor ?>
                        </ol>
                    </li>

                    <li class="list-group-item">
                        <h2>Markables</h2>

                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="./assignments">Assignments</a>
                            </li>

                            <li class="list-group-item">
                                <a href="./projects">Projects</a>
                            </li>

                            <li class="list-group-item">
                                <a href="./tests">Tests</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>
