 // Array of testimonials
 const testimonials = [
    {
      text: "We love to pursue a best education platform for all. Ipsam quos omnis nisi repudiandae, deleniti eum cupiditate qui tempore animi quaerat modi in possimus consequatur, commodi Lorem ipsum dolor sit amet.",
      author: "Robert Mugabe",
      role: "Technology Facilitator",
      image: "./image/businessman_6997481.png",
      rating: "★★★★★",
    },
    {
      text: "The team's professionalism and expertise in technology are truly commendable. I highly recommend their services.",
      author: "Emma Watson",
      role: "Product Manager",
      image: "./image/businessman_6997481.png",
      rating: "★★★★☆",
    },
    {
      text: "Working with this organization has been a transformative experience. They exceed all expectations!",
      author: "John Doe",
      role: "Lead Developer",
      image: "./image/businessman_6997481.png",
      rating: "★★★★★",
    },
    {
      text: "Their innovative approach to solving complex problems is impressive. They bring great energy to every project!",
      author: "Sarah Connor",
      role: "Project Coordinator",
      image: "./image/businessman_6997481.png",
      rating: "★★★★☆",
    },
    {
      text: "A wonderful experience from start to finish. Their dedication and attention to detail are unparalleled.",
      author: "Michael Jordan",
      role: "Creative Director",
      image: "./image/businessman_6997481.png",
      rating: "★★★★★",
    },
  ];

  let currentTestimonialIndex = 0;

  // Function to update the left-side quote column content with a smooth sliding effect
  function updateTestimonial() {
    const testimonialQuote = document.querySelector(".testimonial-quote");

    // Slide out the current testimonial smoothly
    testimonialQuote.style.opacity = "0";
    testimonialQuote.style.transform = "translateX(-20px)";
    testimonialQuote.style.transition =
      "transform 0.5s ease, opacity 0.5s ease"; // Smooth transition for both opacity and position

    setTimeout(() => {
      const testimonial = testimonials[currentTestimonialIndex];
      document.getElementById("testimonialText").textContent =
        testimonial.text;
      document.getElementById("testimonialAuthor").textContent =
        testimonial.author;
      document.getElementById("testimonialRole").textContent =
        testimonial.role;
      document.getElementById("testimonialImage").src = testimonial.image;
      document.getElementById("testimonialRating").textContent =
        testimonial.rating;

      // Move to the next testimonial or loop back to the first one
      currentTestimonialIndex =
        (currentTestimonialIndex + 1) % testimonials.length;

      // Slide in the new testimonial smoothly
      testimonialQuote.style.transition = "none"; // Disable transition to reset position immediately
      testimonialQuote.style.transform = "translateX(20px)"; // Move content to the right instantly
      setTimeout(() => {
        testimonialQuote.style.transition =
          "transform 0.5s ease, opacity 0.5s ease"; // Reapply smooth transition
        testimonialQuote.style.transform = "translateX(0)"; // Slide to the original position
        testimonialQuote.style.opacity = "1"; // Fade in
      }, 50); // Small delay to ensure the transition resets correctly
    }, 500); // Time to wait until the slide-out animation is complete before updating
  }

  // Initial call to display the first testimonial
  updateTestimonial();

  // Rotate testimonials every 3 seconds for a smoother experience
  setInterval(updateTestimonial, 4000); // Update interval set to every 3 seconds