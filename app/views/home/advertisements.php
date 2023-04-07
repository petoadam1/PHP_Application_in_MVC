<html>
    <head>
        <title>List of advertisements</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div class="listbox">
            <h1>Advertisements</h1>
            <ul>
                <?php
                    foreach($data['advertisements'] as  $advertisement)
                    {
                        echo "<li>$advertisement->title - $advertisement->name</li>";
                    }
                ?>
            </ul>
            <a class="backbutton" href="/home/index">Back</a>
        </div>
    </body>
</html>