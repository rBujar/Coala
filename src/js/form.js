import "./main.js";
const form = document.getElementById('form');
const submitBtn = form.querySelector('button[type="submit"]');
const name = formData.get('name');
const email = document.getElementById('email')
const message = document.getElementById('message')
const errorElement = document.getElementById('error')
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;


form.addEventListener('submit', async (e) => {
    e.preventDefault();
    let messages = [];

    if(name.value === '' || !name.value){
        messages.push('Name is required')
    }

    if(messages.length > 0){
    errorElement.innerText = messages.join(', ')
    return;
    }
    

    const formData = new FormData(form);
    formData.append("access_key", "89f07b6e-8fdd-422b-8a2b-7fe7ddc27c0d");

    const originalText = submitBtn.textContent;

    submitBtn.textContent = "Sending...";
    submitBtn.disabled = true;

    try {
        const response = await fetch("https://api.web3forms.com/submit", {
            method: "POST",
            body: formData
        });

        const data = await response.json();

        if (response.ok) {
            alert("Success! Your message has been sent.");
            form.reset();
        } else {
            alert("Error: " + data.message);
        }

    } catch (error) {
        alert("Something went wrong. Please try again.");
    } finally {
        submitBtn.textContent = originalText;
        submitBtn.disabled = false;
    }
});