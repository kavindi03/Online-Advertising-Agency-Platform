function toggleOrderDetails() {
    const orderDetails = document.getElementById('order-details');
    if (orderDetails.style.display === 'none' || orderDetails.style.display === '') {
        orderDetails.style.display = 'block';
    } else {
        orderDetails.style.display = 'none';
    }
}
// Auto-fill User ID and Activity Status
document.addEventListener("DOMContentLoaded", function () {
    // Simulated User ID and Activity Status from login page
    const userId = "U12345";  
    const userName = "John Doe"; 
    const activityStatus = "Last Activity: Created Ad Campaign 'Boost Sales 2024'";

    // Display User ID and Activity Status
    document.getElementById("userIdDisplay").textContent = userId;
    document.getElementById("userName").value = userName;
    document.getElementById("activityStatus").textContent = activityStatus;

    // Simulating auto-fill for Order Status (connected with login later)
    document.getElementById("orderStatus").textContent = "Processing";
});

// Function to handle file upload and display the file name
document.getElementById("activityFile").addEventListener("change", function() {
    const file = this.files[0];
    if (file) {
        document.getElementById("file-info").textContent = `Uploaded File: ${file.name}`;
    } else {
        document.getElementById("file-info").textContent = "No file chosen yet.";
});
// Function to handle text area input and display a message
document.getElementById("additionalComments").addEventListener("input", function() {
    const commentsInfo = document.getElementById("comments-info");
    if (this.value.trim() !== "") {
        commentsInfo.textContent = "Comments added.";
    } else {
        commentsInfo.textContent = "No comments added yet.";
    }
});
