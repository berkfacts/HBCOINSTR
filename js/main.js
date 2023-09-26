// main.js
const panels = document.querySelectorAll('.panel');

panels.forEach(panel => {
    panel.addEventListener('change', () => {
        if (panel.checked) {
            panel.nextElementSibling.classList.add('active');
        } else {
            panel.nextElementSibling.classList.remove('active');
        }
    });
});



// Optional: If you want the WhatsApp icon to move with the page scroll
window.addEventListener('scroll', () => {
  const whatsappIcon = document.querySelector('.whatsapp-icon');
  const content = document.querySelector('.content');

  if (whatsappIcon && content) {
    const contentRect = content.getBoundingClientRect();
    const bottomOffset = window.innerHeight - contentRect.bottom;

    if (bottomOffset > 50) {  // Adjust this threshold as needed
      whatsappIcon.style.transform = 'translateY(0)';
    } else {
      whatsappIcon.style.transform = `translateY(${50 - bottomOffset}px)`;
    }
  }
});


 
  


  
