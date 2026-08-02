document.addEventListener('DOMContentLoaded', () => {
  // 1. Curriculum Accordion Toggle
  const accordions = document.querySelectorAll('.accordion-header');
  accordions.forEach(header => {
    header.addEventListener('click', () => {
      const item = header.parentElement;
      const isActive = item.classList.contains('active');
      
      // Close other open accordions in the same list if desired
      document.querySelectorAll('.accordion-item').forEach(el => {
        el.classList.remove('active');
      });

      if (!isActive) {
        item.classList.add('active');
      }
    });
  });

  // Open first accordion module by default if present
  const firstAccordion = document.querySelector('.accordion-item');
  if (firstAccordion) {
    firstAccordion.classList.add('active');
  }

  // 2. Client-Side Course Directory Category Filter
  const filterPills = document.querySelectorAll('.filter-pill');
  const courseCards = document.querySelectorAll('.course-card-item');

  if (filterPills.length > 0 && courseCards.length > 0) {
    filterPills.forEach(pill => {
      pill.addEventListener('click', () => {
        filterPills.forEach(p => p.classList.remove('active'));
        pill.classList.add('active');

        const selectedCat = pill.getAttribute('data-cat');
        courseCards.forEach(card => {
          const cardCat = card.getAttribute('data-category');
          if (selectedCat === 'all' || cardCat === selectedCat) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  // 3. Client-Side Course Directory Search Filter
  const searchInput = document.getElementById('courseSearchInput');
  if (searchInput && courseCards.length > 0) {
    searchInput.addEventListener('input', (e) => {
      const query = e.target.value.toLowerCase().trim();
      courseCards.forEach(card => {
        const title = card.querySelector('h3').textContent.toLowerCase();
        const desc = card.querySelector('.desc').textContent.toLowerCase();
        if (title.includes(query) || desc.includes(query)) {
          card.style.display = 'flex';
        } else {
          card.style.display = 'none';
        }
      });
    });
  }
});
