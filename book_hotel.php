<?php
require('db.php');
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Book Now</title>
        <link rel="stylesheet" href="style_book.css">
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="room.html">Rooms</a></li>
                    <li><a href="contact_us.html">Contact</a></li>
                </ul>
            </nav>
        </header>
        
        <main>
            <h1>Book Your Stay</h1>
            
            <form>
                <label for="check-in">Check-in Date:</label>
                <input type="date" id="check-in" name="check-in" required>
                
                <label for="check-out">Check-out Date:</label>
                <input type="date" id="check-out" name="check-out" required>
                
                <label for="guests">Number of Rooms:</label>
                <select id="guests" name="guests" required>
                    <option value="" selected disabled hidden>Select number of rooms</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                
                <label for="room-type">Room Type:</label>
                <select id="room-type" name="room-type" required>
                    <option value="" selected disabled hidden>Select room type</option>
                    <option value="standard">Standard</option>
                    <option value="deluxe">Deluxe</option>
                    <option value="suite">Suite</option>
                </select>
                
                <button type="submit" class="button"><a href="payment.html">Submit</a></button>
                <script>
                    const checkInInput = document.getElementById('check-in');
                    const checkOutInput = document.getElementById('check-out');
                    const form = document.querySelector('form');
                    
                    form.addEventListener('submit', function(event) {
                      const checkInDate = new Date(checkInInput.value);
                      const checkOutDate = new Date(checkOutInput.value);
                      
                      if (checkInDate >= checkOutDate) {
                        alert('Check-out date must be after check-in date!');
                        event.preventDefault();
                      }
                    });
                  </script>
            </form>
        </main>
        
        <footer>
            <p>&copy; 2023 Hotel Name. All rights reserved.</p>
        </footer>
    </body>
</html>
