// When button is clicked
document.getElementById("submitBtn").addEventListener("click", function () {
    const username = document.getElementById("username").value.trim();
    const result = document.getElementById("result");

    // Validate input
    if (username === "") {
        result.textContent = "Please enter a username.";
        result.style.color = "red";
        return;
    }

    // Send AJAX request to PHP
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "info.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function () {
        if (xhr.status === 200) {
            result.textContent = xhr.responseText;
            result.style.color = xhr.responseText === "Verified" ? "green" : "red";
        }
    };

    xhr.send("username=" + encodeURIComponent(username));
});
