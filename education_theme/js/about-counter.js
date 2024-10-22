// Counter function
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

// Start the counter animation when the page loads
window.onload = function () {
  animateCounter("enrollment-number", 0, 8871, 2000);
};
