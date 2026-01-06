document.addEventListener('DOMContentLoaded', function() {
    const carouselElement = document.getElementById('carouselExampleIndicators');
    const descriptionsContainer = document.getElementById('sorts-info-container');
    
    if (!carouselElement || !descriptionsContainer) {
        console.error("Carousel item or description container not found.");
        return;
    }

    const allDescriptions = descriptionsContainer.querySelectorAll('.sort-description');
    
    carouselElement.addEventListener('slid.bs.carousel', function (event) {
        const activeSlideIndex = event.to;

        allDescriptions.forEach(description => {
            description.classList.remove('active-description');
        });

        if (allDescriptions[activeSlideIndex]) {
            allDescriptions[activeSlideIndex].classList.add('active-description');
        }
    });

});