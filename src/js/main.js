import AOS from "aos";
import "aos/dist/aos.css";
const hamburger = document.querySelector(".header__hamburger");
const headerMenu = document.querySelector(".header__nav");
const menuItem = document.querySelectorAll(".header__item");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  headerMenu.classList.toggle("active");
  document.body.classList.toggle("no-scroll");
});

menuItem.forEach((item) => {
  item.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    headerMenu.classList.toggle("active");
    if (window.innerWidth < 1200) {
      document.body.classList.toggle("no-scroll");
    }
  });
});

AOS.init({
  duration: 700,
  offset: 50,
  once: true,
});

const scrollButton = document.getElementById('navButton')

window.onscroll = function() {scrollFunction()}

function scrollFunction(){
    if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
        scrollButton.style.display = 'flex';
    }else{
        scrollButton.style.display = 'none';
    }
}

scrollButton.addEventListener('click', () => {
    document.documentElement.scrollTo({ top: 0, behavior: 'smooth'})
})

//form
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
