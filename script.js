document
  .getElementById("firefighterForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Perform form validation and data processing here

    // Send the data to the server using Fetch API
    fetch("process.php", {
      method: "POST",
      body: new FormData(event.target),
    })
      .then((response) => response.text())
      .then((data) => {
        console.log("Form submitted successfully: " + data);
      })
      .catch((error) => {
        console.error("Error submitting form: ", error);
      });
  });
