// Function to get query parameter by name
function getQueryParam(param) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(param);
}

// Get the 'error' parameter and display an alert if it exists
const errorMessage = getQueryParam('error');
if (errorMessage) {
    alert(errorMessage);
}
