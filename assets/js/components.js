// Header ve Footer yükleme işlemleri
console.log('components.js yüklendi');

// Header ve Footer içerikleri
const headerHTML = `
<header>
    <nav>
        <div class="logo">the TAM Burger</div>
        <ul class="nav-links">
            <li><a href="index.html">Ana Sayfa</a></li>
            <li><a href="about.html">Hakkımızda</a></li>
            <li><a href="menu.html">Menü</a></li>
            <li><a href="franchise.html">Franchise</a></li>
            <li><a href="contact.html">İletişim</a></li>
        </ul>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
</header>
`;

const footerHTML = `
<footer>
    <div class="footer-content">
        <div class="footer-section">
            <h3>the TAM Burger</h3>
            <p>Lezzetin adresi, damak tadınızın yeni adresi</p>
        </div>
        <div class="footer-section">
            <h3>Hızlı Bağlantılar</h3>
            <ul>
                <li><a href="index.html">Ana Sayfa</a></li>
                <li><a href="about.html">Hakkımızda</a></li>
                <li><a href="menu.html">Menü</a></li>
                <li><a href="franchise.html">Franchise</a></li>
                <li><a href="contact.html">İletişim</a></li>
            </ul>
        </div>
        <div class="footer-section">
            <h3>İletişim</h3>
            <p>Email: info@tamburger.com</p>
            <p>Telefon: 0 (212) 123 45 67</p>
            <div class="social-links">
                <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2025 the TAM Burger. Tüm hakları saklıdır.</p>
    </div>
</footer>
`;

// Bileşenleri yükle
function loadComponents() {
    console.log('Bileşenler yükleniyor...');
    
    // Header'ı yükle
    const headerElement = document.querySelector('header');
    if (headerElement) {
        headerElement.outerHTML = headerHTML;
        console.log('Header yüklendi');
    } else {
        console.error('Header elementi bulunamadı');
    }
    
    // Footer'ı yükle
    const footerElement = document.querySelector('footer');
    if (footerElement) {
        footerElement.outerHTML = footerHTML;
        console.log('Footer yüklendi');
    } else {
        console.error('Footer elementi bulunamadı');
    }
    
    // Mobil menüyü ayarla
    setupMobileMenu();
    
    // Aktif menü öğesini ayarla
    setActiveNavItem();
}

// Mobil menüyü ayarla
function setupMobileMenu() {
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    
    if (hamburger && navLinks) {
        hamburger.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            hamburger.classList.toggle('active');
        });
    }
}

// Aktif menü öğesini ayarla
function setActiveNavItem() {
    const currentPage = window.location.pathname.split('/').pop() || 'index.html';
    const navLinks = document.querySelectorAll('.nav-links a');
    
    navLinks.forEach(link => {
        const linkHref = link.getAttribute('href');
        if (linkHref === currentPage || 
            (currentPage === '' && linkHref === 'index.html') ||
            (currentPage.endsWith('.html') && linkHref === currentPage)) {
            link.classList.add('active');
        }
    });
}

// Sayfa yüklendiğinde bileşenleri yükle
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM yüklendi, bileşenler yükleniyor...');
    loadComponents();
});
