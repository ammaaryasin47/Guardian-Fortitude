document.addEventListener("DOMContentLoaded", function () {
  // Function to hide all sections and headings
  const hideAll = () => {
    document.querySelectorAll(".cont").forEach(section => section.classList.add("hidden"));
    document.querySelectorAll(".heading-container").forEach(heading => heading.classList.add("hidden"));
  };

  hideAll(); // Initially hide all sections and headings

  // Loop through each card and add an event listener
  document.querySelectorAll(".col-md-6").forEach(card => {
    card.addEventListener("click", function (event) {
      event.preventDefault();

      // Log the card clicked for debugging purposes
      console.log("Card clicked:", this);

      // Get the targetId from the data-target attribute of the parent .col-md-6 div
      const targetId = this.getAttribute("data-target");

      if (!targetId) {
        console.warn("No data-target attribute found on card");
        return;
      }

      // Build the section and heading IDs using the targetId
      const targetSection = document.getElementById(`${targetId}-products`);
      const targetHeading = document.getElementById(`${targetId}-heading`);
      const headingContainer = targetHeading ? targetHeading.querySelector('.heading-container') : null;

      if (!targetSection) {
        console.warn(`No section found with ID: ${targetId}-products`);
        return;
      }

      if (!targetHeading) {
        console.warn(`No heading found with ID: ${targetId}-heading`);
        return;
      }

      // Hide all sections and headings
      hideAll();

      console.log("Showing section and heading:", targetSection, targetHeading);

      // Show the clicked section and its heading
      targetSection.classList.remove("hidden");
      targetHeading.classList.remove("hidden");

      // Ensure the heading container is also shown
      if (headingContainer) {
        headingContainer.classList.remove("hidden");
      }

      // Scroll to the heading
      targetHeading.scrollIntoView({
        behavior: "smooth",  // Smooth scroll
        block: "start"       // Align to the top of the viewport
      });
    });
  });
});
