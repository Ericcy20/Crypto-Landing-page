// Select the sidebar and toggle button elements
const sidebar = document.getElementById("sidebar");
const toggleBtn = document.getElementById("toggle-btn");

// Add click event listener to the toggle button
toggleBtn.addEventListener("click", () => {
  // Toggle the 'active' class on the sidebar
  sidebar.classList.toggle("active");
});
