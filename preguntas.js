const accordionHeaders = document.querySelectorAll('.accordion-header');

accordionHeaders.forEach(header => {
  header.addEventListener('click', () => {
    header.classList.toggle('active');
    const accordionContent = header.nextElementSibling;
    if (header.classList.contains('active')) {
      accordionContent.classList.add('show');
    } else {
      accordionContent.classList.remove('show');
    }
  });
});
