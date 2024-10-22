function showContent(contentId, event) {
    if (event) {
        event.preventDefault(); // Prevent default behavior
    }

    // Hide all content sections
    const sections = document.querySelectorAll(".content-section");
    sections.forEach(function (section) {
        section.classList.remove("show");
        section.classList.remove("active");
    });

    // Remove the 'active' class from all tabs
    const tabs = document.querySelectorAll(".tab-core-link");
    tabs.forEach(function (tab) {
        tab.classList.remove("active");
    });

    // Show the selected content and add 'show' and 'active' classes
    const contentElement = document.getElementById(`content-${contentId}`);
    contentElement.classList.add("active");
    setTimeout(() => contentElement.classList.add("show"), 10);

    // Add the 'active' class to the selected tab
    document.getElementById(`${contentId}-tab`).classList.add("active");

    // Change the images based on the selected tab
    changeImages(contentId);

    // Store the active tab in localStorage
    localStorage.setItem("activeTab", contentId);
}

function changeImages(contentId) {
    const mainImage = document.getElementById("main-image");
    const smallImage = document.getElementById("small-image");

    if (contentId === "instructor") {
        mainImage.src = "./image/blog2.jpg";
        smallImage.src = "./image/about-xs.png";
    } else if (contentId === "cost") {
        mainImage.src = "./image/about-md.png"; 
        smallImage.src = "./image/about-xs.png";
    } else if (contentId === "flexible") {
        mainImage.src = "./image/blog1.png";
        smallImage.src = "./image/about-xs.png";
    } else if (contentId === "support") {
        mainImage.src = "./image/blog1.png";
        smallImage.src = "./image/about-xs.png";
    }
}

function animateCounter(id, start, end, duration) {
    const obj = document.getElementById(id);
    let current = start;
    const range = end - start;
    const increment = end > start ? 1 : -1;
    const stepTime = Math.abs(Math.floor(duration / range));
    const timer = setInterval(() => {
        current += increment;
        obj.textContent = current + "+";
        if (current === end) {
            clearInterval(timer);
        }
    }, stepTime);
}

// Ensure the correct tab and content are active when the page reloads
document.addEventListener("DOMContentLoaded", function () {
    const activeTab = localStorage.getItem("activeTab") || "instructor";
    showContent(activeTab);  // Activate the tab and content on page load
});

// Start the counter animation when the page loads
document.addEventListener("DOMContentLoaded", function () {
    animateCounter("enrollment-number", 0, 8871, 2000);
});

// Store the active tab in localStorage and show content on click
document.querySelectorAll(".tab-core-link").forEach((tab) => {
    tab.addEventListener("click", function (event) {
        const tabId = this.id.replace("-tab", "");
        showContent(tabId, event); // Trigger the tab content display and prevent default action
    });
});