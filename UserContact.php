<?php include 'layouts\headersAdmin.php'?>
<head>
    <style>
        /* Custom table styling */
        #datatable {
            width: 100%;
            border-collapse: collapse;
        }
        
        #datatable th,
        #datatable td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        #datatable th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        
        #datatable tbody tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <?php include 'layouts/navbar.php'?>
    <h1>Contact-Us Responses</h1>
    <table id="datatable">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Contact Number</th>
                <th>Message</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "ajax": "api/UserContactAPI.php",
                "columns": [
                    { "data": "id" },
                    { "data": "first_name" },
                    { "data": "last_name" },
                    { "data": "email" },
                    { "data": "contact_number" },
                    { "data": "message" }
                ]
            });
        });
    </script>
</body>
</html>

