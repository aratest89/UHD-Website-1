document.getElementById("contactForm").addEventListener("submit", function(event) {
  event.preventDefault();

  // Get form data
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const message = document.getElementById("message").value;

  // Display a response message
  const responseMessage = document.getElementById("responseMessage");
  if (name && email && message) {
   alert(`Thank you, ${name}! Your message has been sent.`);
  } 

  // Clear the form after submission
  document.getElementById("contactForm").reset();
});
