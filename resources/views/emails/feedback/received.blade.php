<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Feedback Received</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            padding: 30px;
            color: #333;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            max-width: 600px;
            margin: auto;
            padding: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #0b7285;
        }
        .field {
            margin-bottom: 20px;
        }
        .field label {
            font-weight: bold;
        }
        .message-box {
            background-color: #f1f1f1;
            padding: 15px;
            border-radius: 8px;
            font-style: italic;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>📩 New Feedback Received</h2>

        <div class="field">
            <label>Name:</label> {{ $feedback['name'] }}
        </div>
        <div class="field">
            <label>Email:</label> {{ $feedback['email'] }}
        </div>
        <div class="field">
            <label>Phone:</label> {{ $feedback['phone'] }}
        </div>
        <div class="field">
            <label>Subject:</label> {{ $feedback['subject'] }}
        </div>
        <div class="field">
            <label>Message:</label>
            <div class="message-box">
                {{ $feedback['message'] }}
            </div>
        </div>

        <div class="footer">
            &copy; {{ date('Y') }} Your Company Name. All rights reserved.
        </div>
    </div>
</body>
</html>
