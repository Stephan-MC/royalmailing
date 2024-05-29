
<?php
require 'db.php';

   $name = $_POST['name'] ?? '';
   $email = $_POST['email'] ?? '';
   $organization = $_POST['organization'] ?? '';
   $phone = $_POST['phone'] ?? '';
   $country = $_POST['country'] ?? '';
   $subject = $_POST['subject'] ?? '';
   $message = $_POST['message'] ?? '';
if($_POST['send_message'])

    $stmt = $conn->prepare('INSERT INTO contact_messages (name, email, organization, phone, country, subject, message) VALUES (?, ?, ?, ?, ?, ?, ?)');
    

    $stmt->bind_param('sssssss', $name, $email, $organization, $phone, $country, $subject, $message);

 
    if ($stmt->execute()) {
      echo
      '
      <html>
      <script>
      alert("message successfully!sents");
      window.location.href="index.php";
      </script>
      </html>
      ';
      
    } else {
        echo " <html>
        <script>
        alert('message not sent');
        window.location.href='contact.php';
        </script>

        </html>";
    }

    // Close the statement
    $stmt->close();
?>