



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 5px auto;
            padding: 5px auto;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 60%;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.6);
        }

        .form-group {
            margin-bottom: 15px;
            display:contents;
           
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            
        }

        
        .form-group input[type="date"],
        .form-group input[type="time"] {
            
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .btn {
            display: inline-block;
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Booking </h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="visit_date">Visit Date:</label>
                <input type="date" id="visit_date" name="visit_date" value="<?= $bookingData->visit_date ?>" required>
            </div>
            <div class="form-group">
                <label for="start_time">Start Time:</label>
                <input type="time" id="start_time" name="start_time" value="<?= $bookingData->start_time ?>" required>
            </div>
            <div class="form-group">
                <label for="end_time">End Time:</label>
                <input type="time" id="end_time" name="end_time" value="<?= $bookingData->end_time ?>" required>
            </div>
            <div class="form-group">
                <label for="visit_purpose">Visit Purpose:</label>
                <input type="text" id="visit_purpose" name="visit_purpose" value="<?= $bookingData->visit_purpose ?>" required>
            </div>
            <div class="form-group">
                <label for="note">Note:</label>
                <textarea id="note" name="note"><?= $bookingData->note ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn">Edit</button>

    </form>
    </body>
</html>
