// Mobile Navigation Toggle
const hamburger = document.querySelector('.hamburger');
const navLinks = document.querySelector('.nav-links');
const navLinksItems = document.querySelectorAll('.nav-links li');

hamburger.addEventListener('click', () => {
    // Toggle mobile menu
    navLinks.classList.toggle('active');
    hamburger.classList.toggle('active');
    
    // Toggle body scroll
    document.body.style.overflow = navLinks.classList.contains('active') ? 'hidden' : '';
});

// Close mobile menu when clicking on a nav link
navLinksItems.forEach(link => {
    link.addEventListener('click', () => {
        if (navLinks.classList.contains('active')) {
            navLinks.classList.remove('active');
            hamburger.classList.remove('active');
            document.body.style.overflow = '';
        }
    });
});

// Add active class to current page in navigation
const currentPage = window.location.pathname.split('/').pop() || 'index.html';
const navLinksAll = document.querySelectorAll('.nav-links a');

navLinksAll.forEach(link => {
    const linkHref = link.getAttribute('href');
    
    if (currentPage === linkHref) {
        link.classList.add('active');
    } else {
        link.classList.remove('active');
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
            window.scrollTo({
                top: targetElement.offsetTop - 100, // Adjust for fixed header
                behavior: 'smooth'
            });
            
            // Close mobile menu if open
            if (navLinks.classList.contains('active')) {
                navLinks.classList.remove('active');
                hamburger.classList.remove('active');
                document.body.style.overflow = '';
            }
        }
    });
});

// Add animation on scroll
const animateOnScroll = () => {
    const elements = document.querySelectorAll('.feature, .cta-section, .footer-section');
    
    elements.forEach(element => {
        const elementPosition = element.getBoundingClientRect().top;
        const screenPosition = window.innerHeight / 1.3;
        
        if (elementPosition < screenPosition) {
            element.classList.add('animate-fadeInUp');
        }
    });
};

// Initial check on page load
window.addEventListener('load', animateOnScroll);
// Check on scroll
window.addEventListener('scroll', animateOnScroll);

// Form submission handling
const contactForm = document.getElementById('contact-form');
if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        const formObject = {};
        
        formData.forEach((value, key) => {
            formObject[key] = value;
        });
        
        // Here you would typically send the form data to a server
        console.log('Form submitted:', formObject);
        
        // Show success message
        alert('Mesajınız başarıyla gönderildi! En kısa sürede sizinle iletişime geçeceğiz.');
        this.reset();
    });
}

// Franchise form handling
const franchiseForm = document.getElementById('franchise-form');
if (franchiseForm) {
    franchiseForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Get form data
        const formData = new FormData(this);
        const formObject = {};
        
        formData.forEach((value, key) => {
            formObject[key] = value;
        });
        
        // Here you would typically send the form data to a server
        console.log('Franchise form submitted:', formObject);
        
        // Show success message
        alert('Franchise başvurunuz başarıyla alındı! En kısa sürede sizinle iletişime geçeceğiz.');
        this.reset();
    });
}

// Menü sayfası: Kategori butonları ile filtreleme
const categoryBtns = document.querySelectorAll('.category-btn');
const menuCategories = document.querySelectorAll('.menu-category');

if (categoryBtns.length && menuCategories.length) {
  categoryBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      // Aktif butonu güncelle
      categoryBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      // Kategorileri göster/gizle
      const target = this.getAttribute('data-category');
      menuCategories.forEach(cat => {
        if (cat.id === target) {
          cat.classList.add('active');
        } else {
          cat.classList.remove('active');
        }
      });
    });
  });

  // İlk kategoriyi varsayılan olarak göster
  if (categoryBtns.length > 0) {
    categoryBtns[0].click();
  }
}

// SSS AKORDİYON (DETAILS/SUMMARY İLE - GARANTİLİ YÖNTEM)
document.addEventListener('DOMContentLoaded', () => {
  const allDetails = document.querySelectorAll('.faq-item');

  allDetails.forEach(details => {
    details.addEventListener('toggle', event => {
      if (details.open) {
        allDetails.forEach(otherDetails => {
          if (otherDetails !== details) {
            otherDetails.removeAttribute('open');
          }
        });
      }
    });
  });
});
