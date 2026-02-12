import "./main.js"
const form = document.getElementById('form');
const submitBtn = form.querySelector('#submit');

form.addEventListener('submit', async (e) => {
    e.preventDefault();

    const name = form.name.value
    const email = form.email.value
    const message = form.message.value
    const nameError = document.querySelector(".nameError")
    const emailError = document.querySelector(".emailError")
    const messageError = document.querySelector(".messageError")
    let hasError = false;

    const emailRegex = /^\S+@\S+\.\S+$/
    const nameRegex = /^[a-zA-Z\s-]{3,}$/

    if(name === ""){
        nameError.innerText = 'Name can`t be blank'
        hasError = true  
    } else if(!nameRegex.test(name)){
        nameError.innerText = 'Invalid name'
        hasError = true
    }

    if(email === ""){
        emailError.innerText = 'Email can`t be blank'
        hasError = true  
    } else if(!emailRegex.test(email)){
        emailError.innerText = 'Invalid email'
        hasError = true
    }

    if(message === "" || message <= 10){
        messageError.innerText = 'Your message is too short!'
        if(!hasError){
            hasError = true
        }
    }

    if(hasError) return;


    
    const formData = new FormData(form);
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