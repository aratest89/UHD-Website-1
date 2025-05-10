<?php
      if (isset($_GET['status'])) {
          if ($_GET['status'] == 'success') {
              echo "<p style='color: green;'>Your message has been sent successfully!</p>";
          } else {
              echo "<p style='color: red;'>There was an error sending your message. Please try again.</p>";
          }
      }
      ?>