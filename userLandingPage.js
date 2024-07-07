

// Show pop-up
function showPopup() {
    document.getElementById("popBackground").style.display = "flex";
}

// Hide pop-up
function hidePopup() {
    document.getElementById("popBackground").style.display = "none";
}
// Change password
function showPop() {
    document.getElementById("Background").style.display = "flex";
}

// Hide pop-up
function hidePop() {
    document.getElementById("Background").style.display = "none";
}

// Add event listeners
document.getElementById("mySvg").addEventListener("click", showPopup);
document.getElementById("closeButton").addEventListener("click", hidePopup);
document.getElementById("popBackground").addEventListener("click", (event) => {
    if (event.target.id === "popBackground") {
        hidePopup();
    }
});

// dropdown

    // Function to toggle the visibility of the calendar dropdown
function toggleCalendar() {
    console.log(alert('We are Sorry!😯😯😯 There are no upcoming events'))
}

// Define variables
const photos = ["./Assets/cover.png", "./Assets/9V1A7817.jpg", "./Assets/P1370380.JPG"];
const dictionary = ["VOTE FOR THE GUILD REPRESENTATIVES", "Student government are known as enrolled scholars", "They represent the point of view of their peers"];
const dotColors = ["#fff", "#EDA246", "#00FF00"]; // Define colors for the dots

let index = 0;

// Function to update the slide
function updateSlide() {
    // Get the hero section, heading, and image elements
    const heroSection = document.querySelector('.heroSection');
    const heading = heroSection.querySelector('h1');
    const image = document.getElementById('images');
    const dots = document.querySelectorAll('.dotBox .dots');
    
    // Update the background image of the hero section
    heroSection.style.backgroundImage = `url(${photos[index]})`;
    
    // Update the heading text
    heading.textContent = dictionary[index];
    
    // Update the image source
    image.src = photos[index];
    
    // Update the color of the dots
    dots.forEach((dot, dotIndex) => {
        dot.style.backgroundColor = (dotIndex === index) ? dotColors[index] : '#fff';
    });
}

// Function to handle next slide
function changeSlideNext() {
    index = (index + 1) % photos.length;
    updateSlide();
}

// Function to handle previous slide
function changeSlidePrev() {
    index = (index - 1 + photos.length) % photos.length;
    updateSlide();
}

// Add event listeners
// document.querySelector('.icon2').addEventListener('click', changeSlideNext);
document.querySelector('.icon1').addEventListener('click', changeSlidePrev);

// typing text 
function changeArlet(){
    console.log(alert('Congulatulations!😯😯😯 Your password has been changed'))
}

