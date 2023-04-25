<?php include 'functions.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Blog</title>

    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
</head>

<body>

    <?php include 'header.inc.php'; ?>

    <!-- Page Content -->
    <main class="container">
        <div class="row">
            <?php include 'left.inc.php'; ?>
            <div class="col-md-10">

                <div class="jumbotron" id="postJumbo">
                    <h1>Posts</h1>
                    <p>Read other travellers' posts ... or create your own.</p>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning btn-lg" data-toggle="modal"
                        data-target="#exampleModal">
                        Learn more &raquo;
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">More Travel Blog</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Woohoo, you're reading this text in a modal!<br>
                                    Legal Nomads travel blog: https://www.legalnomads.com/travel/
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- start post summaries -->
                <div class="postlist">

                    <!-- replace each of these rows with a function call -->
                    <?php
                    outputPostRow(1);
                    outputPostRow(2);
                    outputPostRow(3);
                    ?>

                </div> <!-- end post list -->
            </div> <!-- end col-mid-10 -->
        </div> <!-- end row -->
        <form action="process_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send</button>
        </form>
    </main>


    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>
</body>

</html>