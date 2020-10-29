<?php
require 'function.php';

session_start();

/*
 * Just for testing: set the id of the logged-in admin. It should be set in the admin login page.
 * @todo Remove the line.
 */
$_SESSION['id'] = 1;

// If no admin id is set, redirect to the admin login page.
if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    redirect('../login.php');
}

// Operations performed upon form submission.
if (isset($_POST['submit'])) {
    $clientId = $_POST['submit'];

    // Set the client id, in order to be used in the client's profile overview page.
    $_SESSION['id'] = $id;

    // Redirect to the client's profile overview page.
    redirect('drinkreview.php');
}

require 'config.php';

$sql = 'SELECT id,title, message FROM content' ;


$result = $connection->query($sql);
$clients = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />
        <meta charset="UTF-8" />
        <!-- The above 3 meta tags must come first in the head -->

        <title>Demo - Clients list</title>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>

        <style type="text/css">
            body {
                padding: 50px;
            }

            .logo {
                /* ... */
            }

            .page-links {
                margin-bottom: 30px;
            }

            .logout {
                float: right;
            }

            .records-number {
                margin-bottom: 30px;
            }

            .table-container {
                /* ... */
            }

            .clients-list th,
            .clients-list td {
                /*text-align: center;*/
            }

            .id-col {
                /* If not really needed to be displayed, then hide the *id* columns in tables. */
                /* If not needed at all, then don't create any *id* columns. */
                /* display: none; */
            }
        </style>
    </head>
    <body>

        <img src="..images/skcac_logo.png" class="logo" alt="SKCAC Logo" width="300px">

        <p class="page-links">
            <a href="" class="logout">
                Logout
            </a>
        </p>

        <div class="page-content">
            <?php
            if ($id) {
                ?>
                <p class="records-number">
                    There are currently <?php echo count($id); ?> registered participants.
                </p>

                <div class="col col-2"></div>
                <div class="col col-8 table-container">
                    <form action="" method="post">
                        <table class="table clients-list">
                            <thead>
                                <tr>
                                    <th class="id-col">ID</th>
                                    <th>Title</th>
                                    <th>Message</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($contents as $client) {
                                    // Create variables for better usage/readability in the further cells creation codes.
                                    $id = $client['id'];
                                    $name = $client['title'];
                                    $email = $client['message'];
                                    ?>
                                    <tr>
                                        <td class="id-col">
                                            <?php echo $id; ?>
                                        </td>
                                        <td>
                                            <?php echo $title; ?>
                                        </td>
                                        <td>
                                            <?php echo $message; ?>
                                        </td>
                                        <td>
                                            <!-- Notice the button value. It holds the client id to be passed to the profile overview page. -->
                                            <button type="submit" id="viewProfileButton" name="submit" value="<?php echo $id; ?>" class="btn btn-default btn-sm btn-view-profile">
                                                <i class="fa fa-user" aria-hidden="true"></i> View profile
                                            </button>
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </form>
                </div>
                <?php
            } else {
                ?>
                <p class="error">
                    There are currently no registered clients.
                </p>
                <?php
            }
            ?>
        </div>

    </body>
</html>