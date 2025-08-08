<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
        }
        table td, table th {
            border: 1px solid #aaa;
            padding: 10px 20px;
        }
        h1 {
            color: #2c3e50;
        }
    </style>
</head>
<body>
    <h1>Order Information</h1>
    <table>
        <!-- Email ID row -->
        <tr>
            <td><b>Email ID:</b></td>
            <td><?php echo htmlspecialchars($_GET['email']); ?></td> <!-- Display entered email -->
        </tr>

        <!-- Ice cream type row -->
        <tr>
            <td><b>Ice Cream:</b></td>
            <td><?php echo htmlspecialchars($_GET['ice_cream']); ?></td> <!-- Display selected ice cream -->
        </tr>

        <!-- Quantity row -->
        <tr>
            <td><b>Quantity:</b></td>
            <td><?php echo (int)$_GET['quantity']; ?></td> <!-- Display quantity -->
        </tr>

        <!-- Total price calculation -->
        <tr>
            <td><b>Total Price:</b></td>
            <td><?php echo "₹" . (int)$_GET['total_price']; ?></td> <!-- Display total price -->
        </tr>
    </table>
</body>
</html>
