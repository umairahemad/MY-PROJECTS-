<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careerbridge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h4>Careerbridge Data</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="text" name="firstName" value="<?php echo isset($_GET['firstName']) ? htmlspecialchars($_GET['firstName']) : ''; ?>" class="form-control" placeholder="Search by Name">
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </form>

                        <div class="row mt-3">
                            <div class="col-md-12">
                                <hr>
                                <?php 
                                    // Connect to the database
                                    $con = mysqli_connect("localhost", "root", "", "test3");

                                    if (!$con) {
                                        die("Connection failed: " . mysqli_connect_error());
                                    }

                                    // Default sorting order
                                    $sortOrder = isset($_GET['sortOrder']) ? $_GET['sortOrder'] : 'ASC';

                                    // Toggle sorting order
                                    $newSortOrder = $sortOrder == 'ASC' ? 'DESC' : 'ASC';

                                    // Get the search term if it exists
                                    $firstName = isset($_GET['firstName']) ? mysqli_real_escape_string($con, $_GET['firstName']) : '';

                                    // Prepare the SQL query
                                    $query = "SELECT * FROM registration WHERE firstName LIKE '%$firstName%' ORDER BY firstName $sortOrder";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        echo '<a href="?firstName=' . htmlspecialchars($firstName) . '&sortOrder=' . $newSortOrder . '" class="btn btn-secondary mb-3">Sort by Name (' . ($sortOrder == 'ASC' ? 'Descending' : 'Ascending') . ')</a>';
                                        while ($row = mysqli_fetch_assoc($query_run)) {
                                            ?>
                                            <div class="form-group mb-3">
                                                <label for="">Name</label>
                                                <input type="text" value="<?= htmlspecialchars($row['firstName']); ?>" class="form-control" readonly>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Email</label>
                                                <input type="text" value="<?= htmlspecialchars($row['email']); ?>" class="form-control" readonly>
                                            </div>
                                            <div class="form-group mb-3">
                                                <label for="">Company Name</label>
                                                <input type="text" value="<?= htmlspecialchars($row['companyname']); ?>" class="form-control" readonly>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo "No Record Found";
                                    }

                                    // Close the connection
                                    mysqli_close($con);
                                ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
