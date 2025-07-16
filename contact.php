<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>the TAM Burger - İletişim</title>
    <meta name="description" content="the TAM Burger ile iletişime geçin. Soru, öneri ve şikayetleriniz için bize ulaşın.">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <main>
        <section class="page-header">
            <div class="container">
                <h1>Bize Ulaşın</h1>
                <p>Sorularınız, önerileriniz ve geri bildirimleriniz için buradayız</p>
            </div>
        </section>

        <section class="contact-section">
            <div class="container">
                <div class="contact-info-container">
                    <h2>İletişim Bilgilerimiz</h2>
                    <p class="contact-intro">Bize aşağıdaki iletişim bilgilerinden ulaşabilir veya aşağıdaki iletişim formunu doldurabilirsiniz.</p>
                    
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Adres</h3>
                            <p>Levent Mahallesi, Büyükdere Caddesi No:123<br>34330 Beşiktaş/İstanbul</p>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Telefon</h3>
                            <p><a href="tel:+902121234567">0 (212) 123 45 67</a></p>
                            <p><a href="tel:+905551234567">0 (555) 123 45 67</a> (Mobil)</p>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-details">
                            <h3>E-posta</h3>
                            <p><a href="mailto:info@tamburger.com">info@tamburger.com</a></p>
                            <p><a href="mailto:destek@tamburger.com">destek@tamburger.com</a></p>
                        </div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="contact-details">
                            <h3>Çalışma Saatleri</h3>
                            <p>Pazartesi - Cuma: 09:00 - 22:00</p>
                            <p>Cumartesi - Pazar: 10:00 - 23:00</p>
                        </div>
                    </div>

                    <div class="social-media">
                        <h3>Sosyal Medya</h3>
                        <div class="social-links">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>

                <div class="contact-form-container">
                    <h2>İletişim Formu</h2>
                    <form id="contact-form">
                        <div class="form-group">
                            <label for="name">Adınız *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-posta *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefon</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                        <div class="form-group">
                            <label for="subject">Konu *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Seçiniz</option>
                                <option value="soru">Soru</option>
                                <option value="onermeler">Öneriler</option>
                                <option value="sikayet">Şikayet</option>
                                <option value="diğer">Diğer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Mesaj *</label>
                            <textarea id="message" name="message" rows="6" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit-btn">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="map-section">
            <div class="container">
                <h2>Konumumuz</h2>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.274344803516!2d29.00101551518622!3d41.07216127901145!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab93f270c9049%3A0x90c90c90c90c90c9!2sthe%20TAM%20Burger!5e0!3m2!1str!2str!4v1626345600000!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>

        <section class="faq-section">
            <div class="container">
                <h2>Sıkça Sorulan Sorular</h2>
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Hangi bölgelere teslimat yapıyorsunuz?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Şu an için İstanbul Avrupa Yakası'nda hizmet vermekteyiz. Detaylı bilgi için lütfen iletişime geçiniz.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Online sipariş için minimum tutar var mı?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Evet, online siparişler için minimum sipariş tutarımız 50 TL'dir.</p>
                        </div>
                    </div>
                    
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Restoranınızda özel organizasyon yapılabilir mi?</h3>
                            <span class="faq-toggle">+</span>
                        </div>
                        <div class="faq-answer">
                            <p>Evet, doğum günü, nişan, sünnet gibi özel günleriniz için restoranımızı kiralayabilirsiniz. Detaylı bilgi için lütfen bizimle iletişime geçiniz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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

    <script src="assets/js/main.js"></script>
    <script>
        // FAQ Toggle
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const faqItem = question.parentElement;
                const answer = question.nextElementSibling;
                const toggle = question.querySelector('.faq-toggle');
                
                // Toggle active class
                faqItem.classList.toggle('active');
                
                // Toggle answer visibility
                if (faqItem.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                    toggle.textContent = '-';
                } else {
                    answer.style.maxHeight = '0';
                    toggle.textContent = '+';
                }
                
                // Close other open FAQs
                document.querySelectorAll('.faq-item').forEach(item => {
                    if (item !== faqItem) {
                        item.classList.remove('active');
                        const otherAnswer = item.querySelector('.faq-answer');
                        const otherToggle = item.querySelector('.faq-toggle');
                        otherAnswer.style.maxHeight = '0';
                        otherToggle.textContent = '+';
                    }
                });
            });
        });
    </script>
</body>
</html>
