 // JavaScript Counter Functionality
 const counters = document.querySelectorAll(".counter-value");
 const speed = 200; // Speed of the counter animation

 counters.forEach((counter) => {
   const updateCount = () => {
     const target = +counter.getAttribute("data-target");
     const count = +counter.innerText.replace("+", ""); // Remove + for calculations

     const increment = target / speed;

     if (count < target) {
       counter.innerText = `${Math.ceil(count + increment)}+`;
       setTimeout(updateCount, 20);
     } else {
       counter.innerText = `${target}+`;
     }
   };

   updateCount();
 });