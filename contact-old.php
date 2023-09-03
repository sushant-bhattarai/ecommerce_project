<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Form</title>
<style>
  body {
    font-family:cursive;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f0e8e8; /* Pastel background color */
  }

  .contact-container {
    background-color: white;
    border-radius: 30px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    padding: 40px;
    
    width: 450px;
  }

  .contact-icon {
    font-size: 24px;
    margin-right: 10px;
  }

  .contact-input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .contact-textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    resize: vertical;
  }

  .contact-button {
    background-color: #53b8c4; /* Pastel button color */
    color: white;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
  }

  .contact-button:hover {
    background-color: #39909e; /* Darker color on hover */
  }
</style>
</head>
<body>
    <!-- <script>
        document.getElementById("contact-form").addEventListener("submit", function(event) {
          event.preventDefault(); // Prevent the form from actually submitting
          
          var name = document.getElementById("name").value;
          var email = document.getElementById("email").value;
          var tel = document.getElementById("tel").value;
          var msg = document.getElementById("msg");
          
          // You can perform additional actions here, such as sending the data to a server
          
          msg.textContent = "Thank you, " + name + "! We have received your submission.";
          
          // Optionally, you can reset the form fields after submission
          document.getElementById("name").value = "";
          document.getElementById("email").value = "";
          
          document.getElementById("tel").value ="";
         document.getElementById("msg").value="";
        });
      </script> -->
    
<div class="contact-container">
  <h2>Contact Us</h2>
  <form id="contact-form" action="submit.php">
    <div>
      <span class="contact-icon">&#x1F464;</span>
      <input class="contact-input" id="name" type="text" placeholder="Your Name" required>
    </div>
    <div>
      <span class="contact-icon">&#x2709;</span>
      <input class="contact-input" id="email" type="email" placeholder="Your Email" required>
    </div>
    <div>
      <span class="contact-icon">&#x260E;</span>
      <input class="contact-input" id="tel" type="tel" placeholder="Your Phone">
    </div>
    <div>
      <span class="contact-icon">&#x270D;</span>
      <textarea class="contact-textarea" id="msg" placeholder="Your Message" required></textarea>
    </div>
    <button class="contact-button" type="submit">Submit</button>
  </form>
</div>
</body>
</html>
