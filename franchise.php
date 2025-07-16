<?php 
$page_title = "Franchise";
$page_description = "the TAM Burger ailesine katılın, kendi işinizin patronu olun. Franchise başvurunuzu hemen yapın.";
include 'includes/header.php'; 
?>
    <main>
        <section class="page-header">
            <div class="container">
                <h1>Franchise Başvurusu</h1>
                <p>Kendi işinizin patronu olmak için hemen başvurun</p>
            </div>
        </section>

        <section class="franchise-intro">
            <div class="container">
                <h2>Neden the TAM Burger Franchise?</h2>
                <div class="franchise-features">
                    <div class="franchise-feature">
                        <div class="feature-emoji">💰</div>
                        <h3>Yüksek Karlılık</h3>
                        <p>Düşük maliyetlerle yüksek kâr marjı elde etme imkanı</p>
                    </div>
                    <div class="franchise-feature">
                        <div class="feature-emoji">🤝</div>
                        <h3>Kapsamlı Destek</h3>
                        <p>Eğitim, pazarlama ve işletme desteği</p>
                    </div>
                    <div class="franchise-feature">
                        <div class="feature-emoji">🏆</div>
                        <h3>Güçlü Marka</h3>
                        <p>Türkiye'nin en sevilen burger markalarından biri olmanın avantajı</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="franchise-requirements">
            <div class="container">
                <div class="section-header">
                    <h2>Franchise Şartlarımız</h2>
                    <p>Başarılı bir işletme için gerekli olan tüm kriterler</p>
                </div>
                
                <div class="requirements-grid">
                    <div class="requirement-card">
                        <div class="requirement-icon">
                            <i class="fas fa-ruler-combined"></i>
                        </div>
                        <h3>Fiziksel Alan</h3>
                        <p>En az 60m² dükkan alanı ile başlayabilirsiniz.</p>
                    </div>
                    
                    <div class="requirement-card">
                        <div class="requirement-icon">
                            <i class="fas fa-file-signature"></i>
                        </div>
                        <h3>Resmi Belgeler</h3>
                        <p>İş yeri açma ve çalıştırma belgelerinizin tam olması gerekmektedir.</p>
                    </div>
                    
                    <div class="requirement-card">
                        <div class="requirement-icon">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h3>Girişimcilik Ruhu</h3>
                        <p>Müşteri odaklı hizmet anlayışına sahip olmalısınız.</p>
                    </div>
                    
                    <div class="requirement-card">
                        <div class="requirement-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h3>İş Ortaklığı</h3>
                        <p>the TAM Burger ailesine katılma ve uzun vadeli iş ortaklığı</p>
                    </div>
                    
                    <div class="requirement-card">
                        <div class="requirement-icon">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <h3>Sözleşme</h3>
                        <p>En az 1 yıllık işletme sözleşmesi imzalamanız gerekmektedir.</p>
                    </div>
                    
                    <div class="requirement-card">
                        <div class="requirement-icon">
                            <i class="fas fa-coins"></i>
                        </div>
                        <h3>Yatırım Tutarı</h3>
                        <p>500.000 TL - 1.000.000 TL</p>
                        <small>(Lokasyona göre değişiklik gösterebilir)</small>
                    </div>
                </div>
            </div>
        </section>

        <section class="franchise-steps">
            <div class="container">
                <h2>Franchise Başvuru Süreci</h2>
                <div class="steps-container">
                    <div class="step">
                        <div class="step-number">1</div>
                        <h3>Başvuru</h3>
                        <p>Online başvuru formunu doldurun</p>
                    </div>
                    <div class="step">
                        <div class="step-number">2</div>
                        <h3>İnceleme</h3>
                        <p>Başvurunuz incelemeye alınır</p>
                    </div>
                    <div class="step">
                        <div class="step-number">3</div>
                        <h3>İnterview</h3>
                        <p>Yüz yüze veya video görüşme</p>
                    </div>
                    <div class="step">
                        <div class="step-number">4</div>
                        <h3>Kontrat</h3>
                        <p>Sözleşme imzalama</p>
                    </div>
                    <div class="step">
                        <div class="step-number">5</div>
                        <h3>İşletme</h3>
                        <p>İşletmenizi açın</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="franchise-form-section">
            <div class="container">
                <div class="form-container">
                    <h2>Franchise Başvuru Formu</h2>
                    <p>Başvurunuzu yapmak için aşağıdaki formu doldurun. Sizinle en kısa sürede iletişime geçeceğiz.</p>
                    <form id="franchise-form">
                        <div class="form-group">
                            <label for="name">Adınız Soyadınız</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Adresi</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Telefon Numarası</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="city">Şehir</label>
                            <input type="text" id="city" name="city" required>
                        </div>
                        <div class="form-group">
                            <label for="experience">İş Deneyimi</label>
                            <textarea id="experience" name="experience" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="budget">Mevcut Bütçeniz</label>
                            <select id="budget" name="budget">
                                <option value="">Seçiniz</option>
                                <option value="100-200">100-200 TL</option>
                                <option value="200-300">200-300 TL</option>
                                <option value="300+">300+ TL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Ek Mesaj</label>
                            <textarea id="message" name="message" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit-btn">Başvuru Yap</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="franchise-faq">
            <div class="container">
                <h2>Sıkça Sorulan Sorular</h2>
                <div class="faq-container">
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Franchise yatırım maliyeti nedir?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Franchise yatırım maliyeti, işletmenizin boyutuna ve konumuna bağlı olarak değişmektedir. Tipik bir yatırım maliyeti 500.000-750.000 TL arasındadır.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Franchise ücreti nedir?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Franchise ücreti, işletmenizin aylık gelirinin %5'i olarak belirlenir.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-question">
                            <h3>Kaç ayda kâr edilir?</h3>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="faq-answer">
                            <p>Ortalama 12-18 ay içinde kâr edilmeye başlanır. Bu süre işletmenizin konumu, işletme boyutu ve işletme stratejilerine bağlı olarak değişebilir.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/franchise.js"></script>
    <script>
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
