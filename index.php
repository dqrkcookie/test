<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Support & Event Planner</title>
    <style>
        body { font-family: sans-serif; margin: 0; background-color: #f4f4f4; color: #333; padding-bottom: 60px; /* For footer */ }
        header { background-color: #333; color: #fff; padding: 1em 0; text-align: center; }
        nav ul { list-style-type: none; padding: 0; text-align: center; background-color: #444; margin:0; }
        nav ul li { display: inline; margin-right: 20px; }
        nav ul li a { text-decoration: none; color: #fff; padding: 15px 20px; display: inline-block; }
        nav ul li a:hover { background-color: #555; }
        .container { padding: 20px; }
        .section { background-color: #fff; margin-bottom: 20px; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .section h2 { color: #333; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        .clickable-list { list-style-type: none; padding: 0; }
        .clickable-list li { margin-bottom: 10px; }
        .clickable-list li a { text-decoration: none; color: #007bff; padding: 10px; display: block; border: 1px solid #ddd; border-radius: 4px; background-color: #f9f9f9; }
        .clickable-list li a:hover { background-color: #e9e9e9; }
        footer { text-align: center; padding: 20px; background-color: #333; color: #fff; position: fixed; bottom: 0; width: 100%; }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to the Dashboard</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#customer-support-db">Customer Support Database (Admin View)</a></li>
            <li><a href="#submit-concern">Submit Your Concern</a></li>
            <li><a href="event_planner_main.html">Event Planner</a></li>
        </ul>
    </nav>

    <div class="container">
        <div id="customer-support-db" class="section">
            <h2>Customer Support Database (Admin View)</h2>
            <p>Select a concern category to view details or manage entries:</p>
            <ul class="clickable-list">
                <li><a href="ticket_concern.html">Ticket Concern Management</a></li>
                <li><a href="table_plan_concern.html">Table Plan Concern Management</a></li>
                <li><a href="event_plan_concern.html">Event Plan Concern Management</a></li>
                <li><a href="seat_plan_concern.html">Seat Plan Concern Management</a></li>
                <li><a href="event_planner_main.html">Event Planner (as a concern type/module)</a></li>
            </ul>
        </div>

        <div id="submit-concern" class="section">
            <h2>Submit Your Concern</h2>
            <p>If you have an issue or a question, please select the relevant category below to submit your concern:</p>
            <ul class="clickable-list">
                <li><a href="submit_ticket_concern.html">Submit a Ticket Concern</a></li>
                <li><a href="submit_seat_plan_concern.html">Submit a Seat Plan Concern</a></li>
                <li><a href="submit_table_plan_concern.html">Submit a Table Plan Concern</a></li>
                <li><a href="submit_event_concern.html">Submit an Event Concern</a></li>
            </ul>
        </div>

        <div id="event-planner-link" class="section">
            <h2>Event Planner</h2>
            <p>Access the main event planning tools and features.</p>
            <ul class="clickable-list">
                <li><a href="event_planner_main.html">Go to Event Planner</a></li>
            </ul>
        </div>
    </div>

    <footer>
        <p>&copy; 2025 Your Company Name. All rights reserved. Current Date: May 10, 2025</p>
    </footer>

</body>
</html>