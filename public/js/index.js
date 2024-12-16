// Function to show the image popup
function showImagePopup(imgElement) {
    const popup = document.getElementById('image-popup');
    const popupImage = document.getElementById('popup-image');
    
    // Set the source of the popup image to the clicked image
    popupImage.src = imgElement.src;
    
    // Display the popup
    popup.style.display = 'flex';
}

function closeImagePopup() {
    const popup = document.getElementById('image-popup');
    
    // Hide the popup
    popup.style.display = 'none';
}

function goToPage() {
    window.open('https://www.horiba.com/int/process-and-environmental/products/detail/action/show/Product/enda-5000-series-448/','_blank');
}

document.getElementById('contact-button').addEventListener('click' , function(){
    const contactSection = document.getElementById('contact-us');
    if (contactSection) {
        contactSection.scrollIntoView({behaviour : 'smooth', block: 'start'});
    } else {
        console.error("Element with ID 'contact-us' not found.");
    }
});

document.getElementById('contact-icon').addEventListener('click' , function(){
    const contactSection = document.getElementById('contact-us');
    if (contactSection) {
        contactSection.scrollIntoView({behaviour : 'smooth', block: 'start'});
    } else {
        console.error("Element with ID 'contact-us' not found.");
    }
});

document.getElementById('contact').addEventListener('click' , function(){
    const contactSection = document.getElementById('contact-us');
    if (contactSection) {
        contactSection.scrollIntoView({behaviour : 'smooth', block: 'start',});s
    } else {
        console.error("Element with ID 'contact-us' not found.");
    }
});

document.getElementById('explore').addEventListener('click', goToPage);