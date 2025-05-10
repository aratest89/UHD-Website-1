<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact</title>
  <link rel="stylesheet" href="../css/contact.css" />
</head>
<body>

      <?php include '../php/navbar.php'; ?>

  <h2>Contact Us</h2>
  <form id="contactForm" method="POST" action="contact.php">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Your Email</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Send Message</button>
  </form>


<div id="responseMessage">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'], $_POST['email'], $_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $conn = new mysqli("localhost", "root", "", "web project");
        if ($conn->connect_error) {
            echo "Connection failed: " . $conn->connect_error;
        } else {
            $sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";
            if ($conn->query($sql) === TRUE) {
                echo "Message sent successfully!";
            } else {
                echo "Error: " . $conn->error;
            }
            $conn->close();
        }
    }
    ?>
</div>

   <script src="../js/contatc.js"></script>

</body>
</html>
