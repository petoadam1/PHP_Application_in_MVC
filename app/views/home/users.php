<html>
    <head>
        <title>List of users</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <div class="listbox">
            <h1>Users</h1>
            <ul> 
                <?php
                    foreach($data['users'] as  $user)
                    {
                        echo "<li>$user->name</li>";
                    }
                ?>
            </ul>
            <a class="backbutton" href="/home/index">Back</a>
        </div>
    </body>
</html>