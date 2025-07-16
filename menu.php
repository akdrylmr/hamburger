<?php 
$pageTitle = 'the TAM Burger - Menü';
$pageDescription = 'the TAM Burger menüsü. En lezzetli burgerlerimizi ve yan ürünlerimizi keşfedin.';
include 'includes/header.php';
?>
    <main>
        <section class="page-header">
            <div class="container">
                <h1>Lezzetli Menümüz</h1>
                <p>Özel soslarımız ve taze malzemelerimizle hazırlanan lezzetler</p>
            </div>
        </section>

        <section class="menu-section">
            <div class="container">
                <div class="menu-categories">
                    <button class="category-btn active" data-category="beef-burgers">Köfte Burgerler</button>
                    <button class="category-btn" data-category="chicken-burgers">Tavuk Burgerler</button>
                    <button class="category-btn" data-category="kids-menu">Çocuk Menüsü</button>
                    <button class="category-btn" data-category="sides">Yan Ürünler</button>
                    <button class="category-btn" data-category="beverages">İçecekler</button>
                </div>

                <div class="menu-items">
                    <!-- Köfte Burgerler -->
                    <div class="menu-category active" id="beef-burgers">
                        <h2 class="category-title">Köfte Burgerler</h2>
                        <div class="menu-grid">
                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🍔</div>
                                    <span class="item-badge">En Çok Satan</span>
                                </div>
                                <div class="item-details">
                                    <h3>Basic Burger</h3>
                                    <p>%100 dana köftesi, marul, domates, soğan, turşu ve özel sos</p>
                                    <div class="item-price">₺490</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🥗</div>
                                </div>
                                <div class="item-details">
                                    <h3>Garden Burger</h3>
                                    <p>Dana köftesi, taze roka, domates, salatalık, avokado, özel baharatlı sos</p>
                                    <div class="item-price">₺490</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🍄</div>
                                </div>
                                <div class="item-details">
                                    <h3>Umami Burger</h3>
                                    <p>Dana köftesi, karamelize soğan, mantar, eritilmiş kaşar, özel umami sos</p>
                                    <div class="item-price">₺490</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🔥</div>
                                </div>
                                <div class="item-details">
                                    <h3>Smoky Burger</h3>
                                    <p>Dana köftesi, füme pastırma, cheddar peyniri, soğan halkası, barbekü sos</p>
                                    <div class="item-price">₺490</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🧀</div>
                                    <span class="item-badge">Yeni</span>
                                </div>
                                <div class="item-details">
                                    <h3>Cheesy Burger</h3>
                                    <p>%100 dana köftesi, çift kaşar peyniri, cheddar, mozzarella, karamelize soğan, özel peynir sosu</p>
                                    <div class="item-price">₺520</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">✨</div>
                                </div>
                                <div class="item-details">
                                    <h3>DIY (Kendin Yap) Burger</h3>
                                    <p>Kendi burgerinizi oluşturun! Seçtiğiniz malzemelerle kendinize özel burger</p>
                                    <div class="item-price">₺490+</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Tavuk Burgerler -->
                    <div class="menu-category" id="chicken-burgers">
                        <h2 class="category-title">Tavuk Burgerler</h2>
                        <div class="menu-grid">
                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🐔</div>
                                    <span class="item-badge">Özel</span>
                                </div>
                                <div class="item-details">
                                    <h3>Chicken Burger</h3>
                                    <p>Kızarmış tavuk fileto, marul, domates, soğan, turşu ve özel sos</p>
                                    <div class="item-price">₺450</div>
                                </div>
                            </div>

                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🌶️</div>
                                </div>
                                <div class="item-details">
                                    <h3>Spicy Chicken</h3>
                                    <p>Kızarmış tavuk fileto, acı biber, cheddar peyniri, soğan halkası, baharatlı sos</p>
                                    <div class="item-price">₺470</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Çocuk Menüsü -->
                    <div class="menu-category" id="kids-menu">
                        <h2 class="category-title">Çocuk Menüsü</h2>
                        <div class="menu-grid">
                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">👶</div>
                                    <span class="item-badge">Çocuk</span>
                                </div>
                                <div class="item-details">
                                    <h3>Kids Burger</h3>
                                    <p>Küçük boy dana köftesi, marul, domates, özel sos</p>
                                    <div class="item-price">₺250</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🍟</div>
                                </div>
                                <div class="item-details">
                                    <h3>Kids Meal</h3>
                                    <p>Kids Burger + Kızarmış patates + Kola</p>
                                    <div class="item-price">₺350</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Yan Ürünler -->
                    <div class="menu-category" id="sides">
                        <h2 class="category-title">Yan Ürünler</h2>
                        <div class="menu-grid">
                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🍟</div>
                                </div>
                                <div class="item-details">
                                    <h3>Kızarmış Patates</h3>
                                    <p>Adet: 100 gram</p>
                                    <div class="item-price">₺50</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🧅</div>
                                </div>
                                <div class="item-details">
                                    <h3>Soğan Halkası</h3>
                                    <p>Adet: 100 gram</p>
                                    <div class="item-price">₺60</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- İçecekler -->
                    <div class="menu-category" id="beverages">
                        <h2 class="category-title">İçecekler</h2>
                        <div class="menu-grid">
                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🥤</div>
                                </div>
                                <div class="item-details">
                                    <h3>Kola</h3>
                                    <p>330 ml</p>
                                    <div class="item-price">₺30</div>
                                </div>
                            </div>
                            <div class="menu-item">
                                <div class="item-image">
                                    <div class="icon-placeholder">🍋</div>
                                </div>
                                <div class="item-details">
                                    <h3>Limonata</h3>
                                    <p>330 ml</p>
                                    <div class="item-price">₺30</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- footer.html -->
    <script src="assets/js/main.js"></script>
    <script>
        // Menu category switching
        document.addEventListener('DOMContentLoaded', function() {
            const categoryBtns = document.querySelectorAll('.category-btn');
            const menuCategories = document.querySelectorAll('.menu-category');

            categoryBtns.forEach(btn => {
                btn.addEventListener('click', function() {
                    // Remove active class from all buttons and categories
                    categoryBtns.forEach(b => b.classList.remove('active'));
                    menuCategories.forEach(cat => cat.classList.remove('active'));

                    // Add active class to clicked button
                    this.classList.add('active');

                    // Show selected category
                    const categoryId = this.getAttribute('data-category');
                    document.getElementById(categoryId).classList.add('active');
                });
            });
        });
    </script>
</body>
</html>
