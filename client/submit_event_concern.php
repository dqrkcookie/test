<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Submit Event Concern - Customer Support</title>
  <style>
    body {
      font-family: sans-serif;
      margin: 0;
      background-color: #f0f0f0;
      color: #111;
      padding-bottom: 60px;
    }

    header {
      background-color: #111;
      color: #fff;
      padding: 1em 0;
      text-align: center;
    }

    .container {
      padding: 20px;
      max-width: 800px;
      margin: auto;
    }

    .breadcrumb {
      margin-bottom: 20px;
      font-size: 14px;
    }

    .breadcrumb a {
      text-decoration: none;
      color: #555;
    }

    .breadcrumb a:hover {
      text-decoration: underline;
    }

    .form-area {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .form-area h2 {
      color: #111;
      border-bottom: 2px solid #ddd;
      padding-bottom: 10px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 5px;
      font-weight: bold;
      color: #222;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group textarea,
    .form-group select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #fafafa;
      color: #111;
    }

    .form-group textarea {
      resize: vertical;
      min-height: 100px;
    }

    .form-group button {
      background-color: #222;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }

    .form-group button:hover {
      background-color: #444;
    }

    footer {
      text-align: center;
      padding: 20px;
      background-color: #111;
      color: #fff;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

  <header>
    <h1>Submit an Event Concern</h1>
  </header>

  <div class="container">
    <div class="breadcrumb">
      <a href="../index.php">Back to Submit Concern Options</a> &gt; Event Concern
    </div>

    <div class="form-area">
      <h2>General Event Concern Form</h2>
      <p>For any general concerns or questions about an event (e.g., schedule, venue, amenities, policies), please use this form.</p>
      <form action="remote/event.php" method="POST">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="eventName">Event Name:</label>
          <input type="text" id="eventName" name="event_name" required>
        </div>
        <div class="form-group">
          <label for="concernCategory">Category of Concern:</label>
          <select id="concernCategory" name="concern_category">
            <option value="">-- Select a Category --</option>
            <option value="schedule_timing">Schedule/Timing</option>
            <option value="venue_information">Venue Information (Directions, Parking)</option>
            <option value="amenities_services">Amenities/Services</option>
            <option value="event_policies">Event Policies (e.g., bag policy, age restrictions)</option>
            <option value="speaker_performer_info">Speaker/Performer Information</option>
            <option value="accessibility">Accessibility Information</option>
            <option value="feedback_suggestion">Feedback/Suggestion</option>
            <option value="other">Other General Concern</option>
          </select>
        </div>
        <div class="form-group">
          <label for="description">Describe Your Concern or Question:</label>
          <textarea id="description" name="description" required></textarea>
        </div>
        <div class="form-group">
          <button type="submit" name="submit">Submit Concern</button>
        </div>
      </form>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Your Company Name. All rights reserved. Current Date: May 10, 2025</p>
  </footer>

</body>
</html>
