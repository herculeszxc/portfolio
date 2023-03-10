<html>
  </body>
      <?php
        // Start a session
        session_start();

        // Check if the session variable for visitor count exists
        if (isset($_SESSION['visitor_count'])) {
          // Increment the visitor count
          $_SESSION['visitor_count']++;
        } else {
          // Set the visitor count to 1
          $_SESSION['visitor_count'] = 1;
        }

        // Output the visitor count to HTML
        echo "<p>You are visitor number " . $_SESSION['visitor_count'] . " on this website.</p>";
      ?>
  </body>
</html>