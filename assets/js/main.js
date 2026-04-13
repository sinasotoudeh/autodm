'use strict';

document.addEventListener('DOMContentLoaded', () => {
    
    // === قفل جلوگیری از اجرای مجدد ===
    // اگر این کد قبلاً اجرا شده باشد، همین‌جا متوقف می‌شود
    if (window.__navbarInitialized) return;
    window.__navbarInitialized = true;
    // ================================
    /* ===================== NAVBAR & MOBILE MENU ===================== */
    const navbar = document.getElementById('navbar');
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');

    // اسکرول نوبار
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }, { passive: true });

    // باز و بسته کردن منو با کلیک روی دکمه همبرگری
    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', (e) => {
            e.stopPropagation(); // جلوگیری از بسته شدن فوری در برخی ساختارها
            hamburger.classList.toggle('active');
            mobileMenu.classList.toggle('open');
        });
    }

    // بستن منو با کلیک روی لینک‌های داخل آن
    if (mobileMenu) {
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                hamburger?.classList.remove('active');
                mobileMenu.classList.remove('open');
            });
        });
    }

    // بستن منو اگر کاربر بیرون از منو کلیک کرد (اختیاری ولی توصیه شده)
    document.addEventListener('click', (e) => {
        if (mobileMenu && mobileMenu.classList.contains('open')) {
            if (!mobileMenu.contains(e.target) && !hamburger.contains(e.target)) {
                hamburger.classList.remove('active');
                mobileMenu.classList.remove('open');
            }
        }
    });
});


/* ===================== CUSTOM AOS (Animate On Scroll) ===================== */
(function initAOS() {
    const elements = document.querySelectorAll('[data-aos]');

    const observerOptions = {
        threshold: 0.12,
        rootMargin: '0px 0px -60px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const delay = parseInt(el.dataset.aosDelay || '0');
                setTimeout(() => {
                    el.classList.add('aos-animate');
                }, delay);
                observer.unobserve(el);
            }
        });
    }, observerOptions);

    elements.forEach(el => observer.observe(el));
})();

/* ===================== TABS ===================== */
(function initTabs() {
    const tabBtns = document.querySelectorAll('.tab-btn');
    const tabContents = document.querySelectorAll('.tab-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const target = btn.dataset.tab;

            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));

            btn.classList.add('active');
            const targetContent = document.getElementById(`tab-${target}`);
            if (targetContent) {
                targetContent.classList.add('active');
                // Re-trigger AOS for newly visible items
                targetContent.querySelectorAll('[data-aos]').forEach(el => {
                    if (!el.classList.contains('aos-animate')) {
                        setTimeout(() => el.classList.add('aos-animate'), 50);
                    }
                });
            }
        });
    });
})();

/* ===================== PRICING TOGGLE ===================== */
(function initPricingToggle() {
    const toggle = document.getElementById('billingToggle');
    const priceNums = document.querySelectorAll('.price-num[data-monthly]');

    if (!toggle) return;

    function updatePrices(isAnnual) {
        priceNums.forEach(el => {
            const monthly = parseInt(el.dataset.monthly);
            const annual = parseInt(el.dataset.annual);
            const target = isAnnual ? annual : monthly;

            // Animate number change
            animatePriceChange(el, target);
        });
    }

    function animatePriceChange(el, target) {
        const current = parseInt(el.textContent) || 0;
        const duration = 400;
        const startTime = performance.now();

        function step(now) {
            const progress = Math.min((now - startTime) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
            const value = Math.round(current + (target - current) * eased);
            el.textContent = value;
            if (progress < 1) requestAnimationFrame(step);
        }

        requestAnimationFrame(step);
    }

    toggle.addEventListener('change', () => {
        updatePrices(toggle.checked);
    });
})();

/* ===================== ANIMATED COUNTERS ===================== */
(function initCounters() {
    const counters = document.querySelectorAll('[data-counter]');
    let countersTriggered = new Set();

    function animateCounter(el) {
        if (countersTriggered.has(el)) return;
        countersTriggered.add(el);

        const target = parseFloat(el.dataset.counter);
        const suffix = el.dataset.suffix || '';
        const prefix = el.dataset.prefix || '';
        const decimals = parseInt(el.dataset.decimal || '0');
        const duration = 1800;
        const startTime = performance.now();

        function step(now) {
            const progress = Math.min((now - startTime) / duration, 1);
            // Ease out expo
            const eased = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
            const value = target * eased;
            el.textContent = prefix + value.toFixed(decimals) + suffix;
            if (progress < 1) requestAnimationFrame(step);
        }

        requestAnimationFrame(step);
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(el => observer.observe(el));
})();

/* ===================== CHAT SIMULATION ===================== */
(function initChatSimulation() {
    // 🛑 قفل جلوگیری از اجرای چندباره در وردپرس (حل مشکل پیام‌های تکراری)
    if (window.__autoDmChatInitialized) return;
    window.__autoDmChatInitialized = true;

    const chatMessages = document.getElementById('chatMessages');
    const chatTyping = document.getElementById('chatTyping');
    if (!chatMessages || !chatTyping) return;

    const MAX_VISIBLE = 7; // تعداد پیام‌های قابل مشاهده تنظیم شد

    const conversation = [
        { type: 'bot', text: 'تخفیفتون تا کی اعتبار داره؟' },
        { type: 'user', text: 'فقط تا ۱۲ امشب فرصت هست 🕛 ظرفیت هم به شدت محدوده!' },
        { type: 'bot', text: 'برای پیج‌های فروشگاهی و بلاگری هم جوابه؟' },
        { type: 'user', text: 'صد در صد! فرقی نمی‌کنه آنلاین‌شاپ باشید یا تولیدکننده محتوا، روی هر پیجی با هر سایزی کار می‌کنه 🙌' },
        { type: 'bot', text: 'سرعت ریپلای کامنت‌ها چطوره؟' },
        { type: 'user', text: 'در کسری از ثانیه! نهایتاً ۱ تا ۳ ثانیه بعد از ثبت کامنت، دایرکت ارسال میشه ⚡' },
        { type: 'bot', text: 'متن پیام‌ها رو می‌تونم خودم بنویسم؟' },
        { type: 'user', text: 'قطعا! صفر تا صد متن دست خودتونه. حتی می‌تونید از متغیرهای هوشمند مثل {first_name} (نام کاربر) و {product} استفاده کنید ✏️' },
        { type: 'bot', text: 'عالیه! چطور باید استارت بزنم؟' },
        { type: 'user', text: 'به جمع ما خوش اومدی! روی لینک زیر کلیک کن تا ۴۰٪ تخفیفت رو رزرو کنی و اولین فلو (Flow) فروش رو تو چند دقیقه فعال کنی 🎉' },
        { type: 'user', text: '🔗 فعال‌سازی تخفیف و شروع رشد →', isLink: true },
    ];

    let msgIndex = 0;
    let isRunning = false;
    let schedTimer = null; 

    function showTyping() { chatTyping.style.opacity = '1'; }
    function hideTyping() { chatTyping.style.opacity = '0'; }

    function addMessage(msg) {
        const div = document.createElement('div');
        div.classList.add('msg');

        if (msg.isLink) {
            div.classList.add('user', 'link-msg');
            div.innerHTML = msg.text + ' <span>→</span>';
        } else if (msg.type === 'bot') {
            div.classList.add('bot');
            div.textContent = msg.text;
        } else {
            div.classList.add('user');
            div.textContent = msg.text;
        }

        div.style.cssText = 'opacity:0;transform:translateY(8px);';
        chatMessages.appendChild(div);
        
        // اسکرول نرم به پایین
        chatMessages.scrollTo({ top: chatMessages.scrollHeight, behavior: 'smooth' });

        requestAnimationFrame(() => {
            div.style.cssText = 'transition:opacity .3s ease,transform .3s ease;opacity:1;transform:translateY(0);';
        });

        // 🛑 منطق جدید و امن‌تر برای حذف پیام‌های قدیمی و جلوگیری از دراز شدن چت
        // انتخاب تمامی پیام‌هایی که در حال حذف شدن نیستند
        const allMsgs = Array.from(chatMessages.querySelectorAll('.msg:not(.removing)'));
        if (allMsgs.length > MAX_VISIBLE) {
            // محاسبه اینکه چند پیام اضافی باید حذف شود
            const diff = allMsgs.length - MAX_VISIBLE;
            for (let i = 0; i < diff; i++) {
                const oldMsg = allMsgs[i];
                oldMsg.classList.add('removing'); // اضافه کردن کلاس برای عدم تداخل
                oldMsg.style.cssText = 'transition:all .3s ease; opacity:0; transform:translateY(-10px); margin:0; padding:0; height:0; border:none;';
                setTimeout(() => {
                    if (oldMsg.parentNode) {
                        oldMsg.remove();
                    }
                }, 300);
            }
        }
    }

    function scheduleNext(delay) {
        clearTimeout(schedTimer);
        schedTimer = setTimeout(tick, delay);
    }

    function tick() {
        if (!isRunning) return;

        if (msgIndex >= conversation.length) {
            msgIndex = 0;
            scheduleNext(4000);
            return;
        }

        const msg = conversation[msgIndex];

        if (msg.type === 'bot') {
            showTyping();
            schedTimer = setTimeout(() => {
                if (!isRunning) return;
                hideTyping();
                addMessage(msg);
                msgIndex++;
                scheduleNext(2200); 
            }, 900);
        } else {
            addMessage(msg);
            msgIndex++;
            scheduleNext(1200);
        }
    }

    const heroMockup = chatMessages.closest('.hero-mockup');
    if (!heroMockup) return;

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !isRunning) {
                isRunning = true;
                scheduleNext(2000); 
            } else if (!entry.isIntersecting && isRunning) {
                isRunning = false;
                clearTimeout(schedTimer);
                hideTyping();
            }
        });
    }, { threshold: 0.2 });

    observer.observe(heroMockup);
})();


/* ===================== FAQ ACCORDION ===================== */
document.addEventListener('DOMContentLoaded', function() {
    // 🛑 استفاده از یک نام اختصاصی جدید برای جلوگیری از تداخل با اسکریپت‌های دیگر
    if (window.__autoDmFaqInitialized) return;
    window.__autoDmFaqInitialized = true;
    
    const faqItems = document.querySelectorAll('.faq-item');

    if (faqItems.length === 0) return; // اگر المنتی پیدا نشد، خطا ندهد

    faqItems.forEach(item => {
        const btn = item.querySelector('.faq-q');
        
        btn?.addEventListener('click', (e) => {
            e.preventDefault(); // جلوگیری از رفتار پیش‌فرض دکمه
            const isActive = item.classList.contains('active');

            // 1. بستن تمام تب‌های دیگر
            faqItems.forEach(i => i.classList.remove('active'));

            // 2. باز کردن تبی که روی آن کلیک شده (اگر از قبل باز نبوده)
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
});


/* ===================== CARD HOVER TILT 3D ===================== */
(function initTilt() {
    const cards = document.querySelectorAll('.feat-card, .what-card, .price-card, .testi-card');

    cards.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const cx = rect.width / 2;
            const cy = rect.height / 2;
            const dx = (x - cx) / cx;
            const dy = (y - cy) / cy;

            const rotateX = dy * -5;
            const rotateY = dx * 5;

            card.style.transform = `perspective(600px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transition = 'transform 0.4s cubic-bezier(0.4,0,0.2,1)';
            card.style.transform = '';
            setTimeout(() => card.style.transition = '', 400);
        });

        card.addEventListener('mouseenter', () => {
            card.style.transition = 'none';
        });
    });
})();

/* ===================== SMOOTH SCROLL ===================== */
(function initSmoothScroll() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                e.preventDefault();
                const offset = 80;
                const top = target.getBoundingClientRect().top + window.scrollY - offset;
                window.scrollTo({ top, behavior: 'smooth' });
            }
        });
    });
})();

/* ===================== VIDEO PLACEHOLDER ===================== */
(function initVideo() {
    const placeholder = document.getElementById('videoPlaceholder');
    if (!placeholder) return;

    placeholder.addEventListener('click', () => {
        placeholder.innerHTML = `
      <div style="color:var(--accent-green);font-family:var(--font-display);font-size:1rem;font-weight:700;opacity:.7;text-align:center;padding:2rem">
        🎬 Video player would load here<br>
        <span style="font-size:.8rem;color:var(--text-muted);font-family:var(--font-body);font-weight:400">Connect a real YouTube/Vimeo embed in production</span>
      </div>`;
    });
})();

/* ===================== MOCKUP TABS ===================== */
/* ===================== MOCKUP TABS ===================== */
(function initMockupTabs() {
    const mTabs = document.querySelectorAll('.m-tab');
    const panels = document.querySelectorAll('.mtab-panel');

    mTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            const target = tab.dataset.mtab;

            mTabs.forEach(t => t.classList.remove('active'));
            panels.forEach(p => p.classList.remove('active'));

            tab.classList.add('active');
            const panel = document.getElementById('mtab-' + target);
            if (panel) panel.classList.add('active');
        });
    });
})();

/* ===================== PARTICLE GLOW CURSOR (subtle) ===================== */
(function initCursorGlow() {
    // Only on non-touch devices
    if (window.matchMedia('(hover: none)').matches) return;

    const glow = document.createElement('div');
    glow.style.cssText = `
    position: fixed;
    width: 300px;
    height: 300px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(0,245,160,0.04) 0%, transparent 70%);
    pointer-events: none;
    z-index: 9999;
    transform: translate(-50%, -50%);
    transition: opacity 0.3s;
    will-change: transform;
  `;
    document.body.appendChild(glow);

    let mouseX = 0, mouseY = 0;
    let glowX = 0, glowY = 0;

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        glow.style.opacity = '1';
    });

    document.addEventListener('mouseleave', () => {
        glow.style.opacity = '0';
    });

    function animateGlow() {
        glowX += (mouseX - glowX) * 0.08;
        glowY += (mouseY - glowY) * 0.08;
        glow.style.left = `${glowX}px`;
        glow.style.top = `${glowY}px`;
        requestAnimationFrame(animateGlow);
    }

    animateGlow();
})();

/* ===================== HERO BADGE PULSE ===================== */
(function initHeroBadge() {
    const badge = document.querySelector('.hero-badge');
    if (!badge) return;

    badge.addEventListener('click', () => {
        badge.style.transform = 'scale(0.96)';
        setTimeout(() => badge.style.transform = '', 150);
    });
})();

/* ===================== STAGGERED FEATURE CARDS ENTRY ===================== */
(function initStaggerCards() {
    const grids = document.querySelectorAll('.features-grid, .what-is-grid, .metrics-row');

    grids.forEach(grid => {
        const cards = grid.querySelectorAll('.feat-card, .what-card, .metric-card');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    cards.forEach((card, i) => {
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, i * 80);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        // Initial state
        cards.forEach(card => {
            if (!card.hasAttribute('data-aos')) {
                card.style.opacity = '0';
                card.style.transform = 'translateY(24px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            }
        });

        observer.observe(grid);
    });
})();
// ==========================================
// SEMICIRCLE COMMAND CENTER LOGIC
// ==========================================

document.addEventListener("DOMContentLoaded", () => {
    // Data Array: Includes description (for top area), bullets, and image
    const featuresData = [
        {
            title: "کامنت خودکار",
            description: "به طور خودکار به کامنت‌های کاربران پاسخ دهید. امکان پاسخ در کامنت یا ارسال به دایرکت با شرایط دلخواه.",
            image: "http://autodm.ir/wp-content/themes/nonato/assets/images/feature-auto-comment.png",
            bullets: [
                "تشخیص هوشمند کلمات کلیدی در کامنت",
                "ارسال ریپلای رندوم و شخصی‌سازی شده",
                "هدایت خودکار کاربر به دایرکت جهت خرید"
            ]
        },
        {
            title: "پاسخگوی دایرکت",
            description: "سیستم پیشرفته پاسخگویی به پیام‌های دایرکت با قابلیت تشخیص موضوع و مدیریت هوشمند مکالمات.",
            image: "http://autodm.ir/wp-content/themes/nonato/assets/images/feature-auto-dm.png",
            bullets: [
                "ارسال منوی تعاملی و دکمه‌ها",
                "پاسخگویی اختصاصی بر اساس ریپلای استوری",
                "ارجاع چت به اپراتور انسانی در صورت نیاز"
            ]
        },
        {
            title: "شرط فالو",
            description: "قبل از ارائه خدمات یا هدایا، از فالو بودن کاربر اطمینان حاصل کنید و به افراد غیرفالور پیام مجزا دهید.",
            image: "http://autodm.ir/wp-content/themes/nonato/assets/images/feature-follow-check.png",
            bullets: [
                "تشخیص لحظه‌ای وضعیت فالو بودن کاربر",
                "ارسال پیام قفل محتوا برای افراد غیر فالور",
                "افزایش ارگانیک دنبال‌کنندگان پیج"
            ]
        },
        {
            title: "فالوآپ هوشمند",
            description: "ارسال پیام‌های یادآوری زنجیره‌ای به کاربران در بازه‌های زمانی مشخص برای افزایش چشمگیر نرخ تبدیل.",
            image: "http://autodm.ir/wp-content/themes/nonato/assets/images/feature-followup.png",
            bullets: [
                "تنظیم تاخیر زمانی (دقیقه، ساعت، روز)",
                "ساخت قیف فروش چند مرحله‌ای و هوشمند",
                "توقف خودکار ارسال در صورت پاسخگویی کاربر"
            ]
        },
        {
            title: "ویترین محصولات",
            description: "کاتالوگ کامل محصولات خود را مستقیماً در دایرکت اینستاگرام نمایش دهید و سفارش‌ها را خودکار دریافت کنید.",
            image: "http://autodm.ir/wp-content/themes/nonato/assets/images/feature-product-catalog.png",
            bullets: [
                "نمایش گالری اسلایدی از محصولات در دایرکت",
                "افزودن مستقیم محصول به سبد خرید",
                "اتصال به درگاه‌های پرداخت امن و رایج"
            ]
        },
        {
            title: "فرم‌ساز پیشرفته",
            description: "فرم‌های اطلاعاتی سفارشی بسازید و داده‌های کاربران (شماره، ایمیل و...) را به صورت ساختاریافته جمع‌آوری کنید.",
            image: "http://autodm.ir/wp-content/themes/nonato/assets/images/feature-form-builder.png",
            bullets: [
                "دریافت شماره تماس، ایمیل و متن از طریق چت",
                "اعتبارسنجی خودکار فرمت اطلاعات وارد شده",
                "خروجی مستقیم اطلاعات به فایل اکسل یا CRM"
            ]
        },
        {
            title: "منوی سریع",
            description: "منوی تعاملی دائمی با دکمه‌های شخصی‌سازی شده برای دسترسی سریع کاربران به بخش‌های مختلف پیج شما.",
            image: "http://autodm.ir/wp-content/themes/nonato/assets/images/feature-quick-menu.png",
            bullets: [
                "ساخت دکمه‌های همیشگی در پایین صفحه چت",
                "دسترسی فوری به سوالات متداول و پشتیبانی",
                "طراحی زیرمنوهای تو در تو بدون محدودیت"
            ]
        }
    ];

    const nodes = document.querySelectorAll('.node-container');
    const masterDesc = document.getElementById('master-desc');
    const rectDisplay = document.getElementById('rect-display');

    let activeIndex = 0; // Tracks the currently clicked/active node

    // Function to update the top description area text
    function updateDescription(index) {
        masterDesc.style.opacity = 0; // Fade out slightly
        setTimeout(() => {
            const data = featuresData[index];
            // Highlight the title within the description for better UI
            masterDesc.innerHTML = `${data.description}`;
            masterDesc.style.opacity = 1; // Fade in
        }, 150);
    }

    // Function to update the bottom rectangular display (Image + Bullets)
    function updateRectDisplay(index) {
        const data = featuresData[index];

        // Fade out animation
        rectDisplay.classList.remove('fade-in');
        rectDisplay.classList.add('fade-out');

        // Wait for CSS transition
        setTimeout(() => {
            // Generate Bullets HTML
            const bulletsHTML = data.bullets.map(bullet => `
                <li>
                    <span class="pf-check">✓</span><span>${bullet}</span>
                </li>
            `).join('');

            // Inject Content
            rectDisplay.innerHTML = `
                <div class="rect-content">
                    <ul class="rect-bullets">
                        ${bulletsHTML}
                    </ul>
                </div>
                <div class="rect-image">
                    <img src="${data.image}" alt="${data.title}" onerror="this.style.display='none'">
                </div>
            `;

            // Trigger fade-in
            rectDisplay.classList.remove('fade-out');
            rectDisplay.classList.add('fade-in');
        }, 400);
    }

    // Initialize UI
    if (masterDesc && rectDisplay && nodes.length > 0) {
        updateDescription(activeIndex);
        updateRectDisplay(activeIndex);

        nodes.forEach(node => {
            const nodeIndex = parseInt(node.getAttribute('data-index'));

            // HOVER Logic: Temporarily show description
            node.addEventListener('mouseenter', () => {
                if (nodeIndex !== activeIndex) {
                    updateDescription(nodeIndex);
                }
            });

            // LEAVE Logic: Revert to active description
            node.addEventListener('mouseleave', () => {
                if (nodeIndex !== activeIndex) {
                    updateDescription(activeIndex);
                }
            });

            // CLICK Logic: Lock description, update active state, and update rectangular display
            node.addEventListener('click', () => {
                if (nodeIndex === activeIndex) return; // Already active

                activeIndex = nodeIndex; // Update state

                // Update active classes on pills
                nodes.forEach(n => n.classList.remove('active'));
                node.classList.add('active');

                // Update UI parts
                updateDescription(activeIndex);
                updateRectDisplay(activeIndex);
            });
        });
    }
});
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('.brands-scroll-container');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        // موقعیت اولیه موس نسبت به اسلایدر
        startX = e.pageX - slider.offsetLeft;
        // میزان اسکرول فعلی
        scrollLeft = slider.scrollLeft;
    });

    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });

    slider.addEventListener('mousemove', (e) => {
        if (!isDown) return; // اگر کلیک نگه داشته نشده، کاری نکن
        e.preventDefault(); // جلوگیری از انتخاب متن و رفتارهای پیش‌فرض
        
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 2; // سرعت اسکرول (عدد ۲ را برای سریع‌تر شدن تغییر دهید)
        slider.scrollLeft = scrollLeft - walk;
    });
});

/* ===================== INIT LOG ===================== */
console.log('%c⚡ AutoDM Script Loaded', 'color:#00F5A0;font-family:Syne,sans-serif;font-weight:800;font-size:14px');
