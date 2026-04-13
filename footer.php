    <!-- ===================== FOOTER ===================== -->
    <footer class="footer">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="<?php echo home_url(); ?>" class="nav-logo" style="display:inline-flex">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="AutoDM Logo" class="logo-image">
                    <span class="logo-text">AutoDM</span>
                </a>
                <p>قدرتمندترین پلتفرم اتوماسیون دایرکت و فروش سوشال در ایران. هر کامنت، استوری و منشن را در حالت
                    خلبان
                    خودکار (Autopilot) به درآمد تبدیل کنید.</p>
                <div class="footer-socials">
                    <a class="social-link" href="#" aria-label="اینستاگرام">📸</a>
                    <a class="social-link" href="#" aria-label="توییتر">𝕏</a>
                    <a class="social-link" href="#" aria-label="لینکدین">in</a>
                    <a class="social-link" href="#" aria-label="یوتیوب">▶</a>
                    <a class="social-link" href="#" aria-label="تیک‌تاک">🎵</a>
                </div>
            </div>
            <div class="footer-nav">
                <div class="footer-col">
                    <h5>محصول</h5>
                    <a href="#">اتوماسیون اینستاگرام</a>
                    <a href="#">اتوماسیون فیسبوک</a>
                    <a href="#">API رسمی واتس‌اپ</a>
                    <a href="#">موتور ریپلای هوش مصنوعی</a>
                    <a href="#">فلو بیلدر (Flow Builder)</a>
                    <a href="#">داشبورد آماری (Analytics)</a>
                </div>
                <div class="footer-col">
                    <h5>راهکارها</h5>
                    <a href="#">برای آنلاین‌شاپ‌ها</a>
                    <a href="#">برای مدرسین دوره‌ها</a>
                    <a href="#">برای آژانس‌های مارکتینگ</a>
                    <a href="#">سازمانی و اینترپرایز</a>
                    <a href="#">موسسات خیریه</a>
                    <a href="#">شرکت‌های SaaS</a>
                </div>
                <div class="footer-col">
                    <h5>منابع آموزشی</h5>
                    <a href="#">مستندات توسعه‌دهندگان (API)</a>
                    <a href="#">آموزش‌های ویدیویی</a>
                    <a href="#">وبلاگ اتودی‌ام</a>
                    <a href="#">کیس‌استادی‌ها</a>
                    <a href="#">تمپلیت‌های آماده فلو</a>
                    <a href="#">لیست آپدیت‌ها (Changelog)</a>
                </div>
                <div class="footer-col">
                    <h5>شرکت</h5>
                    <a href="#">درباره ما</a>
                    <a href="#">فرصت‌های شغلی</a>
                    <a href="#">کیت رسانه‌ای (Press Kit)</a>
                    <a href="#">شبکه پارتنرها</a>
                    <a href="#">همکاری در فروش (Affiliate)</a>
                    <a href="#">تماس با پشتیبانی</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-legal">
                <span>© ۱۴۰۴ اتودی‌ام. تمامی حقوق محفوظ است.</span>
                <a href="#">حریم خصوصی</a>
                <a href="#">قوانین و مقررات</a>
                <a href="#">سیاست کوکی‌ها</a>
                <a href="#">امنیت پلتفرم</a>
            </div>
            <div class="footer-badges">
                <span class="badge-item">🏆 استاندارد امنیت SOC 2</span>
                <span class="badge-item">✓ پارتنر رسمی متا</span>
                <span class="badge-item">🔒 حفاظت از داده‌ها (GDPR)</span>
                <span class="badge-item">📱 API رسمی واتس‌اپ</span>
            </div>
        </div>
    </footer>
    
    <button class="theme-toggle" id="themeToggle" title="تغییر پوسته">
        <span class="theme-icon">☀️</span>
    </button>
    
    <script>
        const toggle = document.getElementById('themeToggle');
        const icon = toggle.querySelector('.theme-icon');
        const STORAGE_KEY = 'autodm-theme';

        // اعمال تم ذخیره‌شده هنگام لود
        const saved = localStorage.getItem(STORAGE_KEY);
        if (saved === 'light') {
            document.body.classList.add('light-mode');
            icon.textContent = '🌙';
        }

        toggle.addEventListener('click', () => {
            const isLight = document.body.classList.toggle('light-mode');
            icon.textContent = isLight ? '🌙' : '☀️';
            localStorage.setItem(STORAGE_KEY, isLight ? 'light' : 'dark');
        });
    </script>

    <!-- فایل‌های JS اصلی (script.js و aos) باید از طریق functions.php لود شوند -->
    
    <?php wp_footer(); ?>
</body>

</html>
