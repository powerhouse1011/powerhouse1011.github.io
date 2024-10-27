document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    const username = document.getElementById('signupUsername').value;
    const password = document.getElementById('signupPassword').value;

    // Check if user already exists
    if (localStorage.getItem(username)) {
        document.getElementById('message').innerText = 'Username already exists!';
        return;
    }

    // Save user credentials in local storage
    localStorage.setItem(username, password);
    document.getElementById('message').innerText = 'Sign up successful!';
    this.reset(); // Clear the form
});

document.getElementById('signinForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission

    const username = document.getElementById('signinUsername').value;
    const password = document.getElementById('signinPassword').value;

    // Check if credentials are correct
    if (localStorage.getItem(username) === password) {
        document.getElementById('message').innerText = 'Sign in successful!';

        // Redirect to a different link after successful sign-in
        window.location.href = 'welcome.html'; // Replace with your desired URL
    } else {
        document.getElementById('message').innerText = 'Invalid username or password!';
    }
});
