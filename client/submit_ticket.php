<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Submit Ticket Concern - Customer Support</title>
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
      padding: 30px;
      max-width: 800px;
      margin: auto;
    }

    .breadcrumb {
      margin-bottom: 20px;
      font-size: 14px;
    }

    .breadcrumb a {
      text-decoration: none;
      color: #333;
    }

    .breadcrumb a:hover {
      text-decoration: underline;
    }

    .form-area {
      background-color: #fff;
      padding: 25px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .form-area h2 {
      color: #111;
      border-bottom: 2px solid #ccc;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 15px;
    }

    .form-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #111;
    }

    .form-group input[type="text"],
    .form-group input[type="email"],
    .form-group input[type="tel"],
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
      background-color: #333;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s ease;
    }

    .form-group button:hover {
      background-color: #000;
    }

    footer {
      text-align: center;
      padding: 15px;
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
    <h1>Submit a Ticket Concern</h1>
  </header>

  <div class="container">
    <div class="breadcrumb">
      <a href="../index.php">Back to Submit Concern Options</a> &gt; Ticket Concern
    </div>

    <div class="form-area">
      <h2>Ticket Concern Form</h2>
      <p>Please fill out the form below with details about your ticket concern. We'll get back to you as soon as possible.</p>
      <form action="remote/ticket.php" method="POST">
        <div class="form-group">
          <label for="name">Full Name:</label>
          <input type="text" id="name" name="name" required />
        </div>
        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required />
        </div>
        <div class="form-group">
          <label for="eventName">Event Name (if applicable):</label>
          <input type="text" id="eventName" name="event_name" />
        </div>
        <div class="form-group">
          <label for="issueType">Type of Ticket Issue:</label>
          <select id="issueType" name="issue_type">
            <option value="">-- Select an Issue --</option>
            <option value="not_received">Ticket Not Received</option>
            <option value="incorrect_details">Incorrect Details on Ticket</option>
            <option value="payment_issue">Payment Issue</option>
            <option value="access_problem">Problem Accessing Ticket</option>
            <option value="refund_request">Refund Request</option>
            <option value="other">Other</option>
          </select>
        </div>
        <div class="form-group">
          <label for="description">Describe Your Concern:</label>
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
