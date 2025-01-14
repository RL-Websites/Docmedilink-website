<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Clinic Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            max-width: 600px;
            width: 100%;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h4 {
            text-align: center;
            color: #4CAF50;
            font-size: 22px;
        }
        .content p {
            margin: 10px 0;
            font-size: 16px;
        }
        .content strong {
            color: #333;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #888;
            margin-top: 20px;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>New Clinic Form Submission</h3>
        <div class="content">
            <p><strong>First Name:</strong> {{ $first_name }}</p>
            <p><strong>Email:</strong> {{ $email }}</p>
            <p><strong>Phone:</strong> {{ $phone }}</p>
            <p><strong>Details:</strong> {{ $details }}</p>
        </div>
        <div class="footer">
            <p>Thank you for your submission. We will get back to you soon.</p>
            <p style="font-weight: bold;">Regards, <br> DocMedLink</p>
        </div>
    </div>
</body>
</html>
