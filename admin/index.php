<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Support & Event Planner</title>
    <style>
        body { 
            font-family: 'Segoe UI', Arial, sans-serif; 
            margin: 0; 
            background-color: #f1f1f1; 
            color: #333; 
            padding-bottom: 70px; /* For fixed footer */
        }
        header { 
            background-color: #222; 
            color: #fff; 
            padding: 1.5em 0; 
            text-align: center; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
        }
        h1 {
            margin: 0;
            font-weight: 400;
        }
        nav ul { 
            list-style-type: none; 
            padding: 0; 
            margin: 0;
            text-align: center; 
            background-color: #333; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        nav ul li { 
            display: inline-block; 
        }
        nav ul li a { 
            text-decoration: none; 
            color: #fff; 
            padding: 15px 25px; 
            display: inline-block; 
            transition: background-color 0.3s;
        }
        nav ul li a:hover { 
            background-color: #444; 
        }
        .container { 
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px; 
        }
        .section { 
            background-color: #fff; 
            margin-bottom: 20px; 
            padding: 25px; 
            border-radius: 6px; 
            box-shadow: 0 2px 10px rgba(0,0,0,0.1); 
        }
        .section h2 { 
            color: #222; 
            border-bottom: 2px solid #eee; 
            padding-bottom: 10px; 
            margin-top: 0;
        }
        .clickable-list { 
            list-style-type: none; 
            padding: 0; 
        }
        .clickable-list li { 
            margin-bottom: 10px; 
        }
        .clickable-list li a { 
            text-decoration: none; 
            color: #333; 
            padding: 12px 15px; 
            display: block; 
            border: 1px solid #ddd; 
            border-radius: 4px; 
            background-color: #f8f8f8; 
            transition: all 0.2s ease;
        }
        .clickable-list li a:hover { 
            background-color: #eee; 
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transform: translateY(-2px);
        }
        footer { 
            text-align: center; 
            padding: 20px; 
            background-color: #222; 
            color: #ccc; 
            position: fixed; 
            bottom: 0; 
            width: 100%; 
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            .section {
                padding: 15px;
            }
            nav ul li {
                display: block;
                margin: 0;
                border-bottom: 1px solid #444;
            }
            nav ul li:last-child {
                border-bottom: none;
            }
            nav ul li a {
                display: block;
                padding: 12px 0;
            }
        }
    </style>
</head>
<body>

    <header>
        <h1>Admin Dashboard</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#customer-support">Customer Support Database</a></li>
        </ul>
    </nav>

    <div class="container">
        <div id="customer-support" class="section">
            <h2>Customer Support Database</h2>
            <p>Select a concern category to view details or manage entries:</p>
            <ul class="clickable-list">
                <li><a href="ticket_concern.php">Ticket Concern</a></li>
                <li><a href="table_plan_concern.php">Table Plan Concern</a></li>
                <li><a href="event_planner_main.php">Event Plan Concern</a></li>
                <li><a href="seat_plan_concern.php">Seat Plan Concern</a></li>
            </ul>
        </div>

        <div id="event-planner-link" class="section">
            <h2>Event Planner</h2>
            <p>Access the main event planning tools and features.</p>
            <ul class="clickable-list">
                <li><a href="event_plan_concern.php">Go to Event Planner</a></li>
            </ul>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Your Company Name. All rights reserved.</p>
    </footer>

</body>
</html>