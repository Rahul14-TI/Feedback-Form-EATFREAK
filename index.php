<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body style="padding:50px;">

 <h2>Leave a Feedback</h2>
 <div class="container">
    <form method="post" action="connect.php">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" name="firstname" id="firstname" class="form-control" name="firstname" required>  
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" name="lastname" required>  
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="number" name="phone" id="phone" class="form-control" name="phone" required>  
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" name="email" required>  
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <input type="text" name="message" id="message" class="form-control" name="message" style="height: 80px;" required>  
        </div>
         <button type="submit" class="btn btn-primary" style="margin-top: 15px;">Submit</button>  
      


    </form>
 </div>
     
</body>
</html>

