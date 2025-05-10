<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Planner</title>
    <style>
        body { font-family: sans-serif; margin: 0; background-color: #f4f4f4; color: #333; }
        header { background-color: #6f42c1; color: #fff; padding: 1em 0; text-align: center; }
        nav ul { list-style-type: none; padding: 0; text-align: center; background-color: #5a379e; }
        nav ul li { display: inline; margin-right: 20px; }
        nav ul li a { text-decoration: none; color: #fff; padding: 15px 20px; display: inline-block; }
        nav ul li a:hover { background-color: #4a2d82; }
        .container { padding: 20px; }
        .breadcrumb { margin-bottom: 20px; }
        .breadcrumb a { text-decoration: none; color: #007bff; }
        .tool-section { background-color: #fff; margin-bottom: 20px; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .tool-section h2 { color: #6f42c1; border-bottom: 2px solid #eee; padding-bottom: 10px; }
        footer { text-align: center; padding: 20px; background-color: #333; color: #fff; margin-top: 30px; }
    </style>
</head>
<body>

    <header>
        <h1>Event Planner</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Dashboard Home</a></li>
            <li><a href="#create-event">Create Event</a></li>
            <li><a href="#manage-events">Manage Events</a></li>
            <li><a href="#guest-list">Guest List</a></li>
            <li><a href="#venue-layout">Venue Layout</a></li>
            <li><a href="#budget-tracker">Budget Tracker</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="breadcrumb">
            <a href="index.php">Dashboard</a> &gt; Event Planner
        </div>

        <div id="create-event" class="tool-section">
            <h2>Create New Event</h2>
            <p>Form to input details for a new event (name, date, venue, etc.).</p>
            <form>
                <div>
                    <label for="eventName">Event Name:</label>
                    <input type="text" id="eventName" name="eventName">
                </div>
                <div>
                    <label for="eventDate">Event Date:</label>
                    <input type="date" id="eventDate" name="eventDate">
                </div>
                <button type="submit">Create Event</button>
            </form>
        </div>

        <div id="manage-events" class="tool-section">
            <h2>Manage Existing Events</h2>
            <p>Table or list of current and past events with options to edit or view details.</p>
            </div>

        <div id="guest-list" class="tool-section">
            <h2>Guest List Management</h2>
            <p>Tools for adding, importing, and managing guest lists, RSVPs, etc.</p>
            </div>

        <div id="venue-layout" class="tool-section">
            <h2>Venue Layout & Seating</h2>
            <p>Interface for designing venue layouts, table arrangements, and seat assignments.</p>
            </div>

        <div id="budget-tracker" class="tool-section">
            <h2>Budget Tracker</h2>
            <p>Tools for managing event budgets, expenses, and payments.</p>
            </div>
    </div>

    <footer>
        <p>&copy; 2025 Your Company Name. All rights reserved.</p>
    </footer>

</body>
</html>