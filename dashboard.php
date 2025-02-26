<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 970px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            color: #333;
        }

        h1, h3 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f5f5f5;
            font-weight: bold;
        }

        tr:hover {
            background-color: #f0f0f0;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .action-buttons input[type="submit"] {
            padding: 8px 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            font-size: 14px;
        }

        .action-buttons input[name="approve"] {
            background-color: #4CAF50; /* Green for Approve button */
            color: white;
        }

        .action-buttons input[name="approve"]:hover {
            background-color: #45a049;
        }

        .action-buttons input[name="reject"] {
            background-color: #f44336; /* Red for Reject button */
            color: white;
        }

        .action-buttons input[name="reject"]:hover {
            background-color: #c82333;
        }

        .success-message {
            background-color: #dff0d8;
            border: 1px solid #d6e9c6;
            color: #3c763d;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
        }

        .error-message {
            background-color: #f2dede;
            border: 1px solid #ebccd1;
            color: #a94442;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Admin Dashboard</h1>
        <h3>Check out Appointments here</h3>

        <?php
        // Check if data is passed and display it
        if (isset($_GET['success']) && $_GET['success'] === 'true') {
            // Database connection parameters
            $conn = mysqli_connect("localhost", "root", "", "hospital");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // SQL query to fetch data from the appointment table
            $sql = "SELECT * FROM appointment";

            // Execute the query
            $result = $conn->query($sql);

            // Check if there are any results
            if ($result->num_rows > 0) {
                // Output data of each row within a table
                echo "<table border='1'>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Department</th>
                            <th>Doctor</th>
                            <th>Date</th>
                            <th>Action</th> <!-- New column for approve/reject buttons -->
                        </tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>".$row["name"]."</td>
                            <td>".$row["email"]."</td>
                            <td>".$row["p_number"]."</td>
                            <td>".$row["department"]."</td>
                            <td>".$row["doctor"]."</td>
                            <td>".$row["date"]."</td>
                            <td>
                                <form action='process_appointment.php' method='POST'>
                                    <input type='hidden' name='email' value='".$row["email"]."'> <!-- Update this line -->
                                    <input type='hidden' name='phone_number' value='".$row["p_number"]."'>
                                    <div class='action-buttons'>
                                        <input type='submit' name='approve' value='Approve'>
                                        <input type='submit' name='reject' value='Reject'>
                                    </div>
                                </form>
                            </td>
                        </tr>";
                }
                echo "</table>";
            } else {
                echo "No appointments found.";
            }

            // Close the database connection
            $conn->close();
        }

        ?>
    </div>
</body>
</html>
