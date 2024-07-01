<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin record entry</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="container">
    <div class="form-container  login-container">
            <form method="post" action="recorddb.php">
                <div class="header">RECORDS</div>
                <div class="socials-wrapper">
                     <header>
                        <h2>Food Details</h2>     
                    </header>
                </div>
                <div class="button-input-group">
                <div class="group input-group">
                    <input type="file" name="imageToUpload" id="fileToUpload">
                    </div>
                    <div class="group input-group">
                        <input type="text" placeholder="name" name="name" required>
                    </div>
                     <div class="group input-group">
                        <input type="number" placeholder="price" name="price" required>
                    </div>
                    <div class="group input-group">
                    <label for="type">Choose a Food Type:</label>
                    <select name="type">
                         <option value="Breakfast">Breakfast</option>
                         <option value="Lunch">Lunch</option>
                         <option value="Dinner">Dinner</option>
                         <option value="Desserts">Desserts</option>
                         <option value="Cold Drinks">Cold Drinks</option>
                     </select>
                       
                    </div>
                    <div class="group button-group">
                        <input type="submit" class="signup-btn" value="ADD" />

                
                        <!-- <button class="signin-btn">Sign in</button> -->
                    </div>
                </div>
            </form>
        </div>
       
        <div class="overlay-container">
            <div class="overlay">
             <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>I like people who love to eat.</p>

                    <div class="group button-group">
                    <a  href="show.php">  <button  >Show Data</button></a><br><br>
                    <a  href="material-dashboard-2/material-dashboard-2/">  <button  >Dashboard</button></a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="script.js"></script>
</body>
</html>




