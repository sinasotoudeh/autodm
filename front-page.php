<?php
/**
 * Template Name: Front Page
 * Author/Designer: Sina Sotoudeh
 * Website: sinasotoudeh.ir
 * github: github.com/sinasotoudeh
 */

// فراخوانی بخش هدر (فایل header.php)
get_header(); 
?>

    <!-- ===================== MAIN CONTENT ===================== -->
    <main id="primary" class="site-main">
        
    <!-- ===================== HERO ===================== -->
    <section class="hero" id="hero">
        <div class="hero-bg">
            <div class="hero-orb orb-1"></div>
            <div class="hero-orb orb-2"></div>
            <div class="hero-orb orb-3"></div>
            <div class="hero-grid"></div>
        </div>
        <div class="hero-container">
            <div class="hero-content-wrapper">


                <h1 class="hero-title">
                    <span class="title-line">پاسخ به هر کامنت.</span>
                    <span class="title-line title-highlight">مدیریت هر دایرکت.</span>
                    <span class="title-line title-ghost">خلق یک فروش بی‌نقص.</span>
                </h1>
                <p class="hero-subtitle">
                    <span class="highlight-text">
                    AutoDM
</span>
                    ، با<strong> پاسخگویی خودکار به کامنت ها، ریپلای استوری‌ها و دایرکت‌ها</strong>
                        ، اکانت 
                    <span class="highlight-text">

                        اینستاگرام و فیسبوک
</span>

                         شما را به یک ماشین فروشِ
                    کاملا خودکار تبدیل می‌کند؛
                    <br>
                    <strong>
                    رباتی هوشمند که ۲۴ ساعته، ادمین پیج شماست.
</strong>
                </p>
                <div class="hero-cta-group">
                    <a href="#pricing" class="btn-primary btn-xl">تست رایگان پلتفرم ←</a>
                </div>
                <div class="hero-trust">
                    <div class="trust-avatars">
                        <img src="https://i.pravatar.cc/36?img=1" alt="user" />
                        <img src="https://i.pravatar.cc/32?img=10" alt="user" />
                        <img src="https://i.pravatar.cc/36?img=3" alt="user" />
                        <img src="https://i.pravatar.cc/36?img=5" alt="user" />
                        <img src="https://i.pravatar.cc/36?img=7" alt="user" />
                    </div>
                    <div class="trust-text">
                        <span class="trust-stars">★★★★★</span>
                        <span> <strong>صدها</strong> ادمین، بلاگر و مارکتر، فروششان را با AutoDM خودکار
                            کرده‌اند.</span>
                    </div>
                </div>
            </div>
            <div class="hero-right-panel">
                <div class="right-panel-content">
                    <div class="hero-badge">
                        <span class="badge-dot"></span>
                        اتصال رسمی و مستقیم با Meta Business API
                    </div>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/meta.webp" alt="meta partner" class="floating-hero-img"
                        style="object-fit: contain;">

                </div>
            </div>

        </div>
    </section>
    <!-- HERO MOCKUP -->
    <section class="mockup-section">
        <div class="hero-mockup" data-aos="zoom-in" data-aos-delay="200">
            <div class="mockup-window">
                <div class="mockup-bar">
                    <div class="dot red"></div>
                    <div class="dot yellow"></div>
                    <div class="dot green"></div>
                    <div class="mockup-url">app.autodm.ir/flows/instagram</div>
                </div>
                <div class="mockup-tabs">
                    <div class="m-tab active" data-mtab="flow">پیام خودکار</div>
                    <div class="m-tab" data-mtab="form">فرم‌ساز اختصاصی</div>
                    <div class="m-tab" data-mtab="showcase">ویترین محصولات</div>
                    <!-- <div class="m-tab" data-mtab="campaign">کمپین بیلدر</div> -->
                </div>
                <div class="mockup-content">
                    <!-- ===== TAB: Flow Builder ===== -->
                    <div class="mtab-panel active" id="mtab-flow">
                        <div class="flow-canvas">
                            <div class="flow-canvas-header">
                                <span>🗺 فروش خودکار اینستاگرامی</span>
                                <div class="flow-toolbar">
                                    <div class="ft-btn">⊕</div>
                                    <div class="ft-btn">▶</div>
                                    <div class="ft-btn">⚙</div>
                                </div>
                            </div>
                            <div class="flow-node node-trigger">
                                <div class="node-header"><span class="node-icon">💬</span><span class="node-label">نقطه
                                        شروع (TRIGGER)</span></div>
                                <div class="node-desc">کاربر زیر پست کامنت می‌گذارد: "لینک"</div>
                            </div>
                            <div class="flow-arrow">↓</div>
                            <div class="flow-node node-message">
                                <div class="node-header"><span class="node-icon">📩</span><span class="node-label">ارسال
                                        دایرکت</span></div>
                                <div class="node-desc">سلام {first_name}! اینم لینک اختصاصی شما 👇</div>
                            </div>
                            <div class="flow-arrow">↓</div>
                            <div class="flow-node node-condition">
                                <div class="node-header"><span class="node-icon">🔀</span><span class="node-label">شرط
                                        (CONDITION)</span></div>
                                <div class="node-desc">آیا روی لینک کلیک کرد؟</div>
                                <div class="condition-branches">
                                    <span class="branch yes">✓ بله ← پیشنهاد ویژه (Upsell)</span>
                                    <span class="branch no">✗ خیر ← پیام فالوآپ</span>
                                </div>
                            </div>
                            <div class="flow-arrow">↓</div>
                            <div class="flow-node node-action">
                                <div class="node-header"><span class="node-icon">⭐</span><span class="node-label">اقدام
                                        (ACTION)</span></div>
                                <div class="node-desc">برچسب مشتری داغ (Hot Lead) + اطلاع به ادمین</div>
                            </div>
                            <div class="flow-arrow">↓</div>
                            <div class="flow-node node-delay">
                                <div class="node-header"><span class="node-icon">⏱</span><span class="node-label">تأخیر
                                        زمانی</span></div>
                                <div class="node-desc">۲۴ ساعت توقف ← ارسال یادآوری</div>
                            </div>
                        </div>
                        <!-- Chat side -->
                        <div class="mockup-chat">
                            <div class="chat-header">
                                <div class="chat-avatar">
                                    <div class="chat-av-img">⚡</div>
                                    <div class="online-dot"></div>
                                </div>
                                <div class="chat-info">
                                    <strong>ربات AutoDM ✓</strong>
                                    <span>● آنلاین</span>
                                </div>
                            </div>
                            <div class="chat-messages" id="chatMessages">
                                <div class="msg user">سلام سارا! 👋 لینک رو خواسته بودی، بفرما:</div>
                                <div class="msg user link-msg">🔗 دریافت ۴۰٪ تخفیف (فقط امروز) <span>←</span></div>
                                <div class="msg bot">وای چقدر عالی مرسی!! 😍</div>
                                <div class="msg user">خواهش می‌کنم! دوست داری ببینی بقیه چطور ازش استفاده می‌کنن؟ 🎯
                                </div>
                            </div>
                            <div class="chat-qr">
                                <button class="qr-btn">آره! نشونم بده 🔥</button>
                                <button class="qr-btn">دقیقاً چطوری کار می‌کنه؟</button>
                            </div>
                            <div class="chat-typing" id="chatTyping">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                    </div>

                    <!-- ===== TAB: Form Builder ===== -->
                    <div class="mtab-panel" id="mtab-form">
                        <div class="flow-canvas">
                            <div class="flow-canvas-header">
                                <span>📋 فرم جذب لید (Lead Capture)</span>
                                <div class="flow-toolbar">
                                    <div class="ft-btn">⊕</div>
                                    <div class="ft-btn">👁</div>
                                    <div class="ft-btn">⚙</div>
                                </div>
                            </div>
                            <div class="form-preview">
                                <div class="form-field-block">
                                    <div class="form-field-label">نام و نام خانوادگی <span
                                            class="form-required">*</span>
                                    </div>
                                    <div class="form-field-input">مثال: علی حسینی</div>
                                </div>
                                <div class="form-field-block">
                                    <div class="form-field-label">شماره موبایل / ایمیل <span
                                            class="form-required">*</span>
                                    </div>
                                    <div class="form-field-input">مثال: 09120000000</div>
                                </div>
                                <div class="form-field-block">
                                    <div class="form-field-label">آیدی اینستاگرام</div>
                                    <div class="form-field-input">@username</div>
                                </div>
                                <div class="form-field-block">
                                    <div class="form-field-label">هدف اصلی شما چیه؟</div>
                                    <div class="form-field-select">
                                        <span>رشد مخاطبان پیج ▾</span>
                                    </div>
                                </div>
                                <div class="form-field-block">
                                    <div class="form-field-label">پیام شما (اختیاری)</div>
                                    <div class="form-field-textarea">کمی درباره کسب‌وکارتان به ما بگویید...</div>
                                </div>
                                <div class="form-submit-btn">ثبت اطلاعات و دریافت دسترسی ←</div>
                            </div>
                        </div>
                        <div class="mockup-chat form-stats-panel">
                            <div class="chat-header">
                                <span
                                    style="font-size:.75rem;font-weight:700;font-family:var(--font-display);color:var(--accent-cyan)">📊
                                    آنالیز عملکرد فرم</span>
                            </div>
                            <div class="fstat-list">
                                <div class="fstat-row">
                                    <span class="fstat-label">بازدید فرم</span>
                                    <span class="fstat-val accent-cyan">۴,۸۲۱</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:92%;background:var(--accent-cyan)"></div>
                                </div>
                                <div class="fstat-row">
                                    <span class="fstat-label">فرم‌های تکمیل‌شده</span>
                                    <span class="fstat-val accent-green">۱,۹۳۴</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:40%;background:var(--accent-green)"></div>
                                </div>
                                <div class="fstat-row">
                                    <span class="fstat-label">نرخ تبدیل (CVR)</span>
                                    <span class="fstat-val accent-pink">۴۰.۱٪</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:40%;background:var(--accent-pink)"></div>
                                </div>
                                <div class="fstat-row">
                                    <span class="fstat-label">میانگین زمان توقف</span>
                                    <span class="fstat-val" style="color:var(--text-secondary)">۱دقیقه و
                                        ۱۲ثانیه</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:55%;background:#FBBF24"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ===== TAB: Showcase Builder ===== -->
                    <div class="mtab-panel" id="mtab-showcase">
                        <div class="flow-canvas">
                            <div class="flow-canvas-header">
                                <span>🛍 ویترین محصولات شما</span>
                                <div class="flow-toolbar">
                                    <div class="ft-btn">⊕</div>
                                    <div class="ft-btn">🎨</div>
                                    <div class="ft-btn">⚙</div>
                                </div>
                            </div>
                            <div class="showcase-grid">
                                <div class="showcase-card active-card">
                                    <div class="sc-thumb">🧴</div>
                                    <div class="sc-info">
                                        <div class="sc-name">سرم جوانساز پرو</div>
                                        <div class="sc-price"><span class="sc-old">۱,۲۰۰ت</span> ۸۹۰ت</div>
                                        <div class="sc-badge">🔥 پرفروش‌ترین</div>
                                    </div>
                                </div>
                                <div class="showcase-card">
                                    <div class="sc-thumb">💊</div>
                                    <div class="sc-info">
                                        <div class="sc-name">پکیج ویتامینه</div>
                                        <div class="sc-price">۳۹۰ت</div>
                                        <div class="sc-badge"
                                            style="background:rgba(0,217,245,.1);color:var(--accent-cyan)">✨ جدید
                                        </div>
                                    </div>
                                </div>
                                <div class="showcase-card">
                                    <div class="sc-thumb">🧪</div>
                                    <div class="sc-info">
                                        <div class="sc-name">کرم ترمیم‌شب</div>
                                        <div class="sc-price">۷۴۰ت</div>
                                        <div class="sc-badge"
                                            style="background:rgba(124,58,237,.1);color:var(--accent-purple)">💜
                                            موجودی محدود</div>
                                    </div>
                                </div>
                                <div class="showcase-card">
                                    <div class="sc-thumb">🌿</div>
                                    <div class="sc-info">
                                        <div class="sc-name">پک گیاهی ارگانیک</div>
                                        <div class="sc-price"><span class="sc-old">۱,۱۰۰ت</span> ۷۹۰ت</div>
                                        <div class="sc-badge">🔥 حراج ویژه</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mockup-chat form-stats-panel">
                            <div class="chat-header">
                                <span
                                    style="font-size:.75rem;font-weight:700;font-family:var(--font-display);color:var(--accent-pink)">🛒
                                    آمار فروش ویترین</span>
                            </div>
                            <div class="fstat-list">
                                <div class="fstat-row">
                                    <span class="fstat-label">بازدید محصولات</span>
                                    <span class="fstat-val accent-pink">۱۲,۴۴۰</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:88%;background:var(--accent-pink)"></div>
                                </div>
                                <div class="fstat-row">
                                    <span class="fstat-label">کلیک روی لینک‌ها</span>
                                    <span class="fstat-val accent-green">۳,۲۱۰</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:55%;background:var(--accent-green)"></div>
                                </div>
                                <div class="fstat-row">
                                    <span class="fstat-label">افزودن به سبد خرید</span>
                                    <span class="fstat-val accent-cyan">۱,۰۸۷</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:35%;background:var(--accent-cyan)"></div>
                                </div>
                                <div class="fstat-row">
                                    <span class="fstat-label">درآمد ایجاد شده</span>
                                    <span class="fstat-val" style="color:#FBBF24">۴۸۳ میلیون تومان</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:75%;background:#FBBF24"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ===== TAB: Campaign Builder ===== 
                    <div class="mtab-panel" id="mtab-campaign">
                        <div class="flow-canvas">
                            <div class="flow-canvas-header">
                                <span>🚀 کمپین فروش بلک فرایدی</span>
                                <div class="flow-toolbar">
                                    <div class="ft-btn">⊕</div>
                                    <div class="ft-btn">▶</div>
                                    <div class="ft-btn">⚙</div>
                                </div>
                            </div>
                            <div class="campaign-timeline">
                                <div class="ct-step done">
                                    <div class="ct-dot"></div>
                                    <div class="ct-body">
                                        <div class="ct-title">📣 ارسال انبوه دایرکت (تیزر) <span
                                                class="ct-status done-badge">ارسال شد</span></div>
                                        <div class="ct-sub">۳۰ آبان · ۸,۴۰۰ مخاطب · ۹۴٪ تحویل موفق</div>
                                    </div>
                                </div>
                                <div class="ct-line"></div>
                                <div class="ct-step done">
                                    <div class="ct-dot"></div>
                                    <div class="ct-body">
                                        <div class="ct-title">🎯 سگمنتیشن (دسته‌بندی) <span
                                                class="ct-status done-badge">انجام شد</span></div>
                                        <div class="ct-sub">لید داغ: ۲,۱۰۴ · گرم: ۴,۸۷۱ · سرد: ۱,۴۲۵</div>
                                    </div>
                                </div>
                                <div class="ct-line"></div>
                                <div class="ct-step active-step">
                                    <div class="ct-dot active-dot"></div>
                                    <div class="ct-body">
                                        <div class="ct-title">🔥 دایرکت پیشنهاد اصلی <span
                                                class="ct-status live-badge">در
                                                حال اجرا</span></div>
                                        <div class="ct-sub">۴ آذر · در حال ارسال... ۵,۸۱۲ از ۸,۴۰۰</div>
                                    </div>
                                </div>
                                <div class="ct-line muted-line"></div>
                                <div class="ct-step muted-step">
                                    <div class="ct-dot muted-dot"></div>
                                    <div class="ct-body">
                                        <div class="ct-title">⏳ پیام فالوآپ (فوریت) <span
                                                class="ct-status pending-badge">زمان‌بندی شده</span></div>
                                        <div class="ct-sub">۵ آذر · یادآوری نیمه‌شب برای کسانی که پیام را باز نکردند
                                        </div>
                                    </div>
                                </div>
                                <div class="ct-line muted-line"></div>
                                <div class="ct-step muted-step">
                                    <div class="ct-dot muted-dot"></div>
                                    <div class="ct-body">
                                        <div class="ct-title">📊 گزارش نتایج کمپین <span
                                                class="ct-status pending-badge">در
                                                انتظار</span></div>
                                        <div class="ct-sub">۶ آذر · تولید خودکار فایل PDF آنالیتیکس</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mockup-chat form-stats-panel">
                            <div class="chat-header">
                                <span
                                    style="font-size:.75rem;font-weight:700;font-family:var(--font-display);color:var(--accent-purple)">📈
                                    آمار لحظه‌ای کمپین</span>
                            </div>
                            <div class="fstat-list">
                                <div class="fstat-row">
                                    <span class="fstat-label">دایرکت‌های ارسالی</span>
                                    <span class="fstat-val" style="color:var(--accent-purple)">۵,۸۱۲</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:69%;background:var(--accent-purple)"></div>
                                </div>
                                <div class="fstat-row">
                                    <span class="fstat-label">نرخ باز شدن پیام</span>
                                    <span class="fstat-val accent-green">۸۷.۴٪</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:87%;background:var(--accent-green)"></div>
                                </div>
                                <div class="fstat-row">
                                    <span class="fstat-label">نرخ کلیک (CTR)</span>
                                    <span class="fstat-val accent-cyan">۳۴.۲٪</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:34%;background:var(--accent-cyan)"></div>
                                </div>
                                <div class="fstat-row">
                                    <span class="fstat-label">درآمد (تا این لحظه)</span>
                                    <span class="fstat-val" style="color:#FBBF24">۲۲۱ میلیون تومان</span>
                                </div>
                                <div class="fstat-bar-wrap">
                                    <div class="fstat-bar" style="width:60%;background:#FBBF24"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>

    </section>

    <!-- ===================== TICKER ===================== -->
    <div class="ticker-bar" aria-hidden="true">
        <div class="ticker-track">
            <span>⚡ ۹۴٪ نرخ باز شدن پیام‌ها</span><span class="sep">✦</span>
            <span>📈 ۳.۲ برابر افزایش نرخ تبدیل</span><span class="sep">✦</span>
            <span>🤖 پاسخ‌دهی هوشمند با GPT-4o</span><span class="sep">✦</span>
            <span>📲 اینستاگرام · فیسبوک · واتس‌اپ</span><span class="sep">✦</span>
            <span>🏆 ابزار شماره ۱ اتوماسیون دایرکت</span><span class="sep">✦</span>
            <span>🌍 بیش از ۴۸,۰۰۰ کاربر فعال</span><span class="sep">✦</span>
            <span>💰 خلق میلیاردها تومان فروش موفق</span><span class="sep">✦</span>
            <span>⚡ ۹۴٪ نرخ باز شدن پیام‌ها</span><span class="sep">✦</span>
            <span>📈 ۳.۲ برابر افزایش نرخ تبدیل</span><span class="sep">✦</span>
            <span>🤖 پاسخ‌دهی هوشمند با GPT-4o</span><span class="sep">✦</span>
            <span>📲 اینستاگرام · فیسبوک · واتس‌اپ</span><span class="sep">✦</span>
            <span>🏆 ابزار شماره ۱ اتوماسیون دایرکت</span><span class="sep">✦</span>
            <span>🌍 بیش از ۴۸,۰۰۰ کاربر فعال</span><span class="sep">✦</span>
            <span>💰 خلق میلیاردها تومان فروش موفق</span><span class="sep">✦</span>
            <span>⚡ ۹۴٪ نرخ باز شدن پیام‌ها</span><span class="sep">✦</span>
            <span>📈 ۳.۲ برابر افزایش نرخ تبدیل</span><span class="sep">✦</span>
            <span>🤖 پاسخ‌دهی هوشمند با GPT-4o</span><span class="sep">✦</span>
            <span>📲 اینستاگرام · فیسبوک · واتس‌اپ</span><span class="sep">✦</span>
            <span>🏆 ابزار شماره ۱ اتوماسیون دایرکت</span><span class="sep">✦</span>
            <span>🌍 بیش از ۴۸,۰۰۰ کاربر فعال</span><span class="sep">✦</span>
            <span>💰 خلق میلیاردها تومان فروش موفق</span><span class="sep">✦</span>
            <span>⚡ ۹۴٪ نرخ باز شدن پیام‌ها</span><span class="sep">✦</span>
            <span>📈 ۳.۲ برابر افزایش نرخ تبدیل</span><span class="sep">✦</span>
            <span>🤖 پاسخ‌دهی هوشمند با GPT-4o</span><span class="sep">✦</span>
            <span>📲 اینستاگرام · فیسبوک · واتس‌اپ</span><span class="sep">✦</span>
            <span>🏆 ابزار شماره ۱ اتوماسیون دایرکت</span><span class="sep">✦</span>
            <span>🌍 بیش از ۴۸,۰۰۰ کاربر فعال</span><span class="sep">✦</span>
            <span>💰 خلق میلیاردها تومان فروش موفق</span><span class="sep">✦</span>
        </div>
    </div>

    <!-- ===================== WHAT IS AUTODM ===================== -->
    <section class="what-is" id="what-is">
        <div class="section-container">
            <div class="what-is-header">
                <div class="eyebrow">مسیر فروش خودکار شما</div>
                <h2>دایرکت، <span class="highlight-text">پول‌سازترین</span> کانال فروش شماست<br>که در حال خاک
                    خوردن است!
                </h2>
                <p>
                    <span class="highlight-text">
                        AutoDM
                    </span>
                    یک پلتفرم قدرتمند برای پاسخگوئی خودکار و مدیریت حرفه‌ای اکانت‌های اینستاگرام و فیسبوک است که با استفاده از
                    <span class="highlight-text">
                        Meta Business API رسمی
                    </span>
                    حتی وقتی خوابیده اید، هر تعامل ساده
                    را به یک
                    مشتری دست‌به‌نقد تبدیل می‌کند.
                </p>
            </div>
            <div class="what-is-grid">
                <div class="what-card" data-aos="fade-right" data-aos-delay="0">
                    <div class="what-card-num">01</div>
                    <h3>اتصال آسان به اکانت</h3>
                    <p>بدون نیاز به یک خط کدنویسی! پیج اینستاگرام و فیسبوک خود را تنها با یک کلیک و در امن‌ترین
                        حالت
                        ممکن متصل کنید.</p>
                    <div class="what-card-visual">
                        <div class="channels-visual">
                            <span class="channel-pill ig">📸 اینستاگرام</span>
                            <span class="channel-pill fb">📘 فیسبوک</span>
                            <!-- <span class="channel-pill wa">💬 واتس‌اپ</span>
                            <span class="channel-pill tk">🎵 تیک‌تاک</span>
                            <span class="channel-pill yt">📺 یوتیوب</span> -->
                        </div>
                    </div>
                </div>
                <div class="what-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="what-card-num">02</div>
                    <!-- <h3>طراحی فلوی فروش (مسیرساز)</h3> -->
                    <!-- <p>با کشیدن و رها کردن (Drag & Drop) مسیر فروش بسازید. از بین +۲۰۰ تمپلیت آماده انتخاب کنید
                        یا
                        سناریوی اختصاصی برندتان را بچینید.</p> -->
                    <h3> ویترین محصولات </h3>

                    <p>نمایش محصولات و دریافت سفارش مستقیم از طریق دایرکت اینستاگرام با منوی تعاملی و فرم ساز پیشرفته</p>
                    <div class="what-card-visual"
                        style="margin-top:.75rem;display:flex;flex-direction:column;gap:.5rem">
                        <div class="mini-flow">
                            <div class="mf-node accent">💬 دریافت کامنت</div>
                            <div class="mf-line"></div>
                            <div class="mf-node">📩 ارسال دایرکت</div>
                            <div class="mf-line"></div>
                            <!-- <div class="mf-node purple">🔀 تحلیل با هوش مصنوعی</div>
                            <div class="mf-line"></div> -->
                            <div class="mf-node purple">✅ تبدیل به خریدار</div>
                        </div>
                    </div>
                </div>
                <div class="what-card" data-aos="fade-left" data-aos-delay="200">
                    <div class="what-card-num">03</div>
                    <h3>گزارش آماری</h3>
                    <p>با داشبورد تحلیلی هوشمند، نرخ باز شدن پیام‌ها، کلیک‌ها و تعداد کامنت های پاسخ داده شده را 
                        رصد کنید.</p>
                    <div class="what-card-visual" style="margin-top:.75rem">
                        <div class="stats-visual">
                            <div class="mini-stat">
                                <span class="stat-num-sm" data-counter="94" data-suffix="٪">0%</span>
                                <span>نرخ باز شدن</span>
                            </div>
                            <div class="mini-stat">
                                <span class="stat-num-sm green" data-counter="3.2" data-suffix="برابر"
                                    data-decimal="1">0برابر</span>
                                <span>رشد فروش</span>
                            </div>
                            <div class="mini-stat">
                                <span class="stat-num-sm" data-counter="1" data-suffix="ثانیه">0ثانیه</span>
                                <span>میانگین پاسخ</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="what-is-video" data-aos="fade-up" data-aos-delay="100"> 
                <div class="video-wrapper">
                    <div class="video-placeholder" id="videoPlaceholder">
                        <div class="video-label">✦ دموی پلتفرم</div>
                        <div class="play-btn">▶</div>
                        <span>تماشای تور ۲ دقیقه‌ای محصول</span>
                    </div>
                </div>
            </div>-->
        </div>
    </section>

    <!-- ===================== FEATURES ===================== -->
    <section class="features" id="features">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <div class="eyebrow">امکانات پلتفرم AutoDM</div>
                <h2>طراحی شده برای   
                <span class="highlight-text">حداکثر فروش</span>،
                <br>مسلط بر 
                <span class="highlight-text"> 
                الگوریتم شبکه‌های اجتماعی
                </span>
                </h2>
                <p>ما از APIهای رسمی استفاده می‌کنیم. AutoDM زبان الگوریتم‌های شبکه‌های اجتماعی را مثل زبان
                    مادری
                    می‌فهمد.</p>
            </div>

            <div class="tab-buttons">
                <button class="tab-btn active" data-tab="ig">📸 اینستاگرام</button>
                <button class="tab-btn" data-tab="fb">📘 فیسبوک</button>
                <button class="tab-btn" data-tab="wa">💬 واتس‌اپ</button>
                <button class="tab-btn" data-tab="ai">🤖 هوش مصنوعی</button>
            </div>

            <!-- Tab: Instagram -->
            <div class="tab-content active" id="tab-ig">
                <div class="feature-split">
                <div class="feature-screen" data-aos="fade-left">
                        <div class="ig-mockup">
                            <div class="ig-post">
                                <div class="ig-post-header">
                                    <div class="av-sm">@</div>
                                    <span>@yourbrand</span>
                                    <span style="margin-left:auto;font-size:.68rem;color:var(--text-muted)">۲
                                        ساعت
                                        پیش</span>
                                </div>
                                <div class="ig-post-image">
                                    <div class="post-overlay">کلمه "لینک" رو کامنت کن تا<br>کد تخفیف اختصاصی
                                        برات دایرکت
                                        بشه 🔥</div>
                                </div>
                                <div class="ig-comments">
                                    <div class="ig-comment">
                                        <div class="av-xs"><img src="https://i.pravatar.cc/20?img=31" alt="u" />
                                        </div>
                                        <div><strong>sara_style</strong> لینک 🙌</div>
                                    </div>
                                    <div class="ig-comment bot-reply">
                                        <div class="av-xs">✓</div>
                                        <div><strong>yourbrand</strong> ✨ سارا جان دایرکتت رو چک کن، یه هدیه
                                            ویژه برات
                                            فرستادیم 💌</div>
                                    </div>
                                    <div class="ig-comment">
                                        <div class="av-xs"><img src="https://i.pravatar.cc/20?img=25" alt="u" />
                                        </div>
                                        <div><strong>ali_rezazadeh</strong> لینک لطفا!</div>
                                    </div>

                                    <div class="ig-comment bot-reply">
                                        <div class="av-xs">✓</div>
                                        <div><strong>yourbrand</strong> ✨ همین الان برات ارسال شد علی عزیز! لذت
                                            ببری 🎁
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-info" data-aos="fade-right">
                        <h3>اتوماسیون اینستاگرامی <span class="highlight-text">که واقعا می‌فروشد</span></h3>
                        <p>ارسال دایرکت خودکار با کامنت، منشن استوری، تعامل در ریلز و لایو.
                            اتودی‌ام در
                            کسری از ثانیه پس از دریافت کامنت، مشتری را وارد مسیر ثبت سفارش می می‌کند؛ 
                        </p>
                        <ul class="feature-list">
                            <li><span class="check">✓</span> تبدیل کامنت به دایرکت: استارت گفتگو از هر پست یا ریلز
                            </li>
                            <li><span class="check">✓</span> ریپلای خودکار به منشن‌های استوری
                            </li>
                            <li><span class="check">✓</span> پاسخگویی هوشمند کامنت‌های ریلز و لایو اینستاگرام
                            </li>
                            <li><span class="check">✓</span> تشخیص کلمات کلیدی (Keyword Triggers)</li>
                            <li><span class="check">✓</span> ترکیب جادویی: لایک کامنت + ریپلای عمومی + دایرکت
                                خصوصی</li>
                        </ul>
                        <a href="#" class="btn-primary">شروع رایگان اتوماسیون اینستاگرام ←</a>
                    </div>
                    
                </div>
            </div>

            <!-- Tab: Facebook -->
            <div class="tab-content" id="tab-fb">
                <div class="feature-split">
                <div class="feature-screen" data-aos="fade-left">
                        <div class="messenger-ui">
                            <div class="msg-header">
                                <div class="msg-av"></div>
                                <span style="font-weight:700;font-family:var(--font-display)">برند شما</span>
                                <span style="margin-left:auto;font-size:.68rem">Messenger</span>
                            </div>
                            <div class="msg-body">
                                <div class="msg bot">سلام! به پشتیبانی برند ما خوش اومدی 👋</div>
                                <div class="msg bot">چطور می‌تونم امروز راهنماییت کنم؟</div>
                                <div class="quick-replies">
                                    <button>🛍 مشاهده محصولات</button>
                                    <button>📦 پیگیری سفارش</button>
                                    <button>💬 ارتباط با پشتیبان</button>
                                </div>
                                <div class="msg user"
                                    style="align-self:flex-end;background:linear-gradient(135deg,#1877F2,#0866FF);color:white;font-weight:600;border-radius:14px 14px 4px 14px;padding:.5rem .85rem;font-size:.76rem;max-width:86%">
                                    مشاهده محصولات</div>
                                <div class="msg bot">عالیه! اینم لیست پرفروش‌ترین‌های این ماه مخصوص شما 🔥</div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-info" data-aos="fade-right">
                        <h3>قیف فروش (Funnel) <span class="highlight-text">فیسبوک مسنجر</span></h3>
                        <p>تعاملات پیج فیسبوک را به مکالمات پول‌ساز در مسنجر تبدیل کنید. دکمه‌های پاسخ سریع،
                            کاروسل‌های
                            محصول و منوی ثابت، همه به صورت کاملاً خودکار در خدمت رشد پیج شما.</p>
                        <ul class="feature-list">
                            <li><span class="check">✓</span> تبدیل کامنت پست‌های فیسبوک به لید در مسنجر</li>
                            <li><span class="check">✓</span> ساخت دکمه‌های پاسخ سریع (Quick Replies) و کاروسل
                            </li>
                            <li><span class="check">✓</span> طراحی منوی ثابت (Persistent Menu) برای دسترسی سریع
                            </li>
                            <li><span class="check">✓</span> فرم‌های جذب لید (Lead Generation) مستقیم داخل چت
                            </li>
                            <li><span class="check">✓</span> اتصال مستقیم تبلیغات فیسبوک به فلوهای مسنجر</li>
                            <li><span class="check">✓</span> پاسخگویی خودکار به منشن‌های پیج فیسبوک</li>
                        </ul>
                        <a href="#" class="btn-primary">تست رایگان ابزار فیسبوک ←</a>
                    </div>
                    
                </div>
            </div>

            <!-- Tab: WhatsApp -->
            <div class="tab-content" id="tab-wa">
                <div class="feature-split">
                <div class="feature-screen" data-aos="fade-left">
                        <div class="wa-ui">
                            <div class="wa-header">
                                <div class="wa-av">WA</div>
                                <div>
                                    <strong>YourBrand Official</strong>
                                    <small>✓ واتس‌اپ بیزینس</small>
                                </div>
                            </div>
                            <div class="wa-msgs">
                                <div class="wa-msg">
                                    سلام علی جان! سفارش #۴۸۲۱ شما با موفقیت ثبت شد 🎉
                                    <div class="wa-template-tag">✓ پیام تأییدشده</div>
                                </div>
                                <div class="wa-reply">ممنون! کِی به دستم میرسه؟</div>
                                <div class="wa-msg">
                                    سفارش شما تا ۲۴ ساعت آینده پست میشه و ۳ تا ۵ روز کاری زمان میبره. کد رهگیری:
                                    track.yourbrand.ir/4821
                                </div>
                                <div class="wa-msg">چیز دیگه‌ای هست که بتونم کمکتون کنم؟ 😊</div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-info" data-aos="fade-right">
                        <h3>اتوماسیون پیام‌رسانی <span class="highlight-text">واتس‌اپ بیزینس</span></h3>
                        <p>با API رسمی واتس‌اپ، پیام‌های تأییدشده بفرستید، کمپین‌های قطره‌ای (Drip Campaigns)
                            اجرا کنید
                            و بدون ترس از اسپم شدن، نرخ باز شدن ۹۸ درصدی را تجربه کنید.</p>
                        <ul class="feature-list">
                            <li><span class="check">✓</span> دسترسی پایدار به API رسمی واتس‌اپ بیزینس</li>
                            <li><span class="check">✓</span> ارسال قالب‌های پیام (Templates) تأییدشده توسط متا
                            </li>
                            <li><span class="check">✓</span> فلوهای اختصاصی برای تبلیغاتِ کلیک‌به‌واتس‌اپ</li>
                            <li><span class="check">✓</span> ارسال کمپین‌های انبوه (Broadcast) به لیست مشتریان
                            </li>
                            <li><span class="check">✓</span> ارسال خودکار فاکتور تأییدیه سفارش و کد رهگیری پستی
                            </li>
                            <li><span class="check">✓</span> انتقال هوشمند و بدون تأخیر چت به ادمین انسانی (Live
                                Handoff)</li>
                        </ul>
                        <a href="#" class="btn-primary"> بزودی</a>
                    </div>
                    
                </div>
            </div>

            <!-- Tab: AI Engine -->
            <div class="tab-content" id="tab-ai">
                <div class="feature-split">
                <div class="feature-screen" data-aos="fade-left">
                        <div class="ai-terminal">
                            <div class="terminal-bar">
                                <span
                                    style="color:var(--text-muted);font-family:var(--font-display);font-size:.7rem;font-weight:700">آنالیز
                                    لحظه‌ای هوش مصنوعی</span>
                                <span class="ai-badge">GPT-4o</span>
                            </div>
                            <div class="terminal-body">
                                <div class="t-line"><span class="t-comment">// تحلیل پیام دریافتی از
                                        مشتری</span></div>
                                <div class="t-line"><span class="t-key">ورودی (input):</span> <span
                                        class="t-val white">"قیمت پکیج پرو چنده؟"</span></div>
                                <div class="t-line" style="margin-top:.3rem"><span class="t-key">قصد
                                        (intent):</span>
                                    <span class="t-val green">"inquiry_pricing" (استعلام قیمت)</span>
                                </div>
                                <div class="t-line"><span class="t-key">احساس (sentiment):</span> <span
                                        class="t-val cyan">"curious_positive" (کنجکاو/مثبت)</span></div>
                                <div class="t-line"><span class="t-key">سیگنال‌خرید:</span> <span
                                        class="t-val yellow">بالا - HIGH (0.87)</span></div>
                                <div class="t-line"><span class="t-key">اقدام (action):</span> <span
                                        class="t-val purple">"trigger_upsell_flow" (اجرای فلوی فروش)</span>
                                </div>
                                <div class="t-line" style="margin-top:.3rem"><span class="t-comment">// تولید
                                        پاسخ
                                        هوشمند</span></div>
                                <div class="t-line"><span class="t-key">پاسخ (reply):</span> <span
                                        class="t-val white">"سلام! پکیج پرو ماهیانه ۸۹۰ تومنه که شامل..."</span>
                                </div>
                                <div class="t-line"><span class="t-key">اطمینان‌از‌پاسخ:</span> <span
                                        class="t-val green">98.3% <span class="t-cursor">▋</span></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-info" data-aos="fade-right">
                        <h3>موتور هوش مصنوعی <span class="highlight-text">مبتنی بر GPT-4o</span></h3>
                        <p>هوش مصنوعی ما لحن و قصد مشتری را می‌فهمد. مثل یک انسان واقعی جواب می‌دهد، سیگنال‌های
                            خرید را
                            شناسایی می‌کند و لیدهای داغ را پیش از سرد شدن به طور خودکار به تیم فروش پاس می‌دهد.
                        </p>
                        <ul class="feature-list">
                            <li><span class="check">✓</span> تشخیص هوشمند قصد کاربر (Intent Detection)</li>
                            <li><span class="check">✓</span> تحلیل احساسات مشتری و تطبیق لحن پاسخگویی</li>
                            <li><span class="check">✓</span> پشتیبانی بی‌نقص از زبان فارسی (و ۵۱ زبان دیگر)</li>
                            <li><span class="check">✓</span> آموزش هوش مصنوعی با کاتالوگ و لحن برند اختصاصی شما
                            </li>
                            <li><span class="check">✓</span> تشخیص لید داغ و انتقال فوری به ادمین انسانی</li>
                            <li><span class="check">✓</span> یادگیری مستمر از مکالمات قبلی برای افزایش نرخ تبدیل
                            </li>
                        </ul>
                        <a href="#" class="btn-primary"> بزودی</a>
                    </div>
                    
                </div>
            </div>
    </section>
    <!-- ============================================ -->
    <!-- SECTION: SEMICIRCLE COMMAND CENTER           -->
    <!-- ============================================ -->
    <section class="arch-features section" id="features">
        <div class="section-container">

            <!-- Section Header -->
            <div class="section-header" data-aos="fade-up">
                <span class="eyebrow">امکانات پیشرفته </span>
                <h2>
                    همه امکانات در یک
                    <span class="highlight-text">نگاه</span>
                </h2>
                <p>برای مشاهده جزئیات بیشتر روی هر قابلیت کلیک کنید.</p>
            </div>

            <!-- Semicircle Master Wrapper -->
            <div class="semicircle-wrapper" data-aos="zoom-in" data-aos-delay="100">

                <!-- Outer Arc Line -->
                <div class="arc-line"></div>

                <!-- Nodes (Pills) positioned exactly on the arc (180 degrees) -->
                <!-- Angles calculated from Right (0deg) to Left (180deg) -->
                <div class="node-container active" style="--left: 100%; --top: 100%;" data-index="0">
                    <button class="node-pill">کامنت خودکار</button>
                </div>

                <div class="node-container" style="--left: 93.3%; --top: 50%;" data-index="1">
                    <button class="node-pill">پاسخگوی دایرکت</button>
                </div>

                <div class="node-container" style="--left: 75%; --top: 13.4%;" data-index="2">
                    <button class="node-pill">شرط فالو</button>
                </div>

                <!-- Top Center Node -->
                <div class="node-container" style="--left: 50%; --top: 0%;" data-index="3">
                    <button class="node-pill">فالوآپ هوشمند</button>
                </div>

                <div class="node-container" style="--left: 25%; --top: 13.4%;" data-index="4">
                    <button class="node-pill">ویترین محصولات</button>
                </div>

                <div class="node-container" style="--left: 6.7%; --top: 50%;" data-index="5">
                    <button class="node-pill">فرم‌ساز پیشرفته</button>
                </div>

                <div class="node-container" style="--left: 0%; --top: 100%;" data-index="6">
                    <button class="node-pill hide-on-mob">منوی سریع</button>
                </div>

                <!-- Inner Semicircle Display -->
                <div class="inner-semicircle">

                    <!-- Fixed Description Area (Changes on Hover) -->
                    <div class="master-description" id="master-desc">
                        <!-- Text injected via JS -->
                    </div>

                    <!-- Rectangular Display Area (Changes on Click) -->
                    <div class="rect-display" id="rect-display">
                        <!-- Content injected via JS -->
                    </div>

                </div>

            </div>
        </div>
    </section>


    <!-- ===================== BENEFITS ===================== -->
    <section class="benefits" id="benefits">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <div class="eyebrow">چرا اتودی‌ام؟</div>
                <h2>اعداد دروغ نمی‌گویند؛ نتایجی که <span class="highlight-text">خیره‌کننده‌اند</span></h2>
                <p>نتیجه اعتماد صدها کسب‌وکار و آنلاین‌شاپ ایرانی به فروش خودکار با اتودی‌ام.</p>
            </div>

            <div class="metrics-row">
                <div class="metric-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="metric-num" data-counter="94" data-suffix="٪">0%</div>
                    <div class="metric-label"> نرخ باز شدن</div>
                    <div class="metric-sub">در مقایسه با ۲۰٪ پیامک مارکتینگ</div>
                </div>
                <div class="metric-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="metric-num" data-counter="320" data-suffix="٪" >0</div>
                    <div class="metric-label">رشد نرخ تبدیل</div>
                    <div class="metric-sub">نسبت به دایرکت جواب دادن دستی</div>
                </div>
                <div class="metric-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="metric-num" data-counter="1" data-suffix="ثانیه">0ثانیه</div>
                    <div class="metric-label"> زمان پاسخگویی</div>
                    <div class="metric-sub">در برابر ساعت‌ها معطلی مشتری</div>
                </div>
                <div class="metric-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="metric-num" data-counter="95" data-suffix="٪" >0%
                    </div>
                    <div class="metric-label"> رضایت مشتریان</div>
                    <div class="metric-sub"> از عملکرد اتو دی ام </div>
                </div>
            </div>

            <div class="benefits-list">
                <div class="benefit-item" data-aos="fade-right">
                    <div class="benefit-visual">
                        <div class="ben-icon">🎯</div>
                    </div>
                    <div class="benefit-text">
                        <h3>مشتریان را قبل از اینکه پشیمان شوند، شکار کنید!</h3>
                        <p>هر کامنت، یک مشتری دست‌به‌نقد است. اتودی‌ام در کمتر از 10 ثانیه — دقیقاً در اوج هیجان
                            خرید —
                            پاسخ می‌دهد. دیگر هیچ فروشی به خاطر خواب بودن ادمین، تأخیر در پاسخگویی یا حجم بالای
                            پیام‌ها
                            از دست نمی‌رود.</p>
                    </div>
                </div>
                <div class="benefit-item reverse" data-aos="fade-left">
                    <div class="benefit-text">
                        <h3>پشتیبانی سریع و نامحدود در مقیاس بی‌نهایت</h3>
                        <p>یک ادمین نمی‌تواند همزمان به ۱۰,۰۰۰ دایرکت جواب بدهد؛ اما AutoDM می‌تواند. آن هم با
                            لحنی
                            چنان طبیعی و هوشمندانه که مشتری احساس می‌کند با حرفه‌ای‌ترین فروشنده شما در حال چت
                            است، نه
                            یک ربات خسته‌کننده.</p>
                    </div>
                    <div class="benefit-visual">
                        <div class="ben-icon">🚀</div>
                    </div>
                </div>
                <div class="benefit-item" data-aos="fade-right">
                    <div class="benefit-visual">
                        <div class="ben-icon">📈</div>
                    </div>
                    <div class="benefit-text">
                        <h3>فالوئرهایتان را به ماشین چاپ پول تبدیل کنید</h3>
                        <p>تعداد فالوئرهای اینستاگرام صرفاً یک عدد نمایشی برای پز دادن نیست؛ یک معدن طلای
                            دست‌نخورده
                            است. اتودی‌ام با اجرای کمپین‌های قطره‌ای (Drip) و مبتنی بر رفتار کاربر، هر لایک و
                            ریپلای
                            ساده را به یک فرصت فروش قطعی تبدیل می‌کند.</p>
                    </div>
                </div>
                <div class="benefit-item reverse" data-aos="fade-left">
                    <div class="benefit-text">
                        <h3>بدون استرس شادوبن، با تاییدیه رسمی متا</h3>
                        <p>پلتفرم ما پارتنر رسمی متا است. تمامی اتوماسیون‌های شما دقیقاً بر اساس قوانین
                            سخت‌گیرانه
                            اینستاگرام اجرا می‌شوند. بدون استفاده از ربات‌های مخرب، پیج شما در امن‌ترین حالت
                            ممکن رشد
                            می‌کند و دیتاهای شما با استانداردهای سازمانی (SOC 2) محافظت می‌شوند.</p>
                    </div>
                    <div class="benefit-visual">
                        <div class="ben-icon">🛡️</div>
                    </div>
                </div>
            </div>

            <!-- Testimonials -->
            <div class="testimonials-header" data-aos="fade-up">
                <div class="eyebrow">دیوار عشق</div>
                <h3>محبوب دل صدها برند و بلاگر ایرانی</h3>
            </div>
            <div class="testimonials-grid">
                <div class="testi-card featured" data-aos="fade-up" data-aos-delay="0">
                    <div class="testi-stars">★★★★★</div>
                    <p>"اتودی‌ام کلاً بازی رو برای ما عوض کرد. قبلاً ادمین‌ها با بدبختی روزی ۲۰۰ تا دایرکت رو
                        جواب
                        می‌دادن. الان با فلوهای اتوماتیک، درآمدمون تو ۳ ماه دقیقاً دو برابر شده. واقعا دمتون
                        گرم."</p>
                    <div class="testi-author">
                        <div class="testi-av"><img src="https://i.pravatar.cc/44?img=47" alt="user" /></div>
                        <div>
                            <strong>سارا کریمی</strong>
                            <span>@sara.lifestyle · ۴۲۰ هزار فالوور</span>
                        </div>
                    </div>
                </div>
                <div class="testi-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="testi-stars">★★★★★</div>
                    <p>"ما کمپین‌های فروش ۱۲ تا آنلاین‌شاپ بزرگ رو هندل می‌کنیم و اتودی‌ام قلب تپنده کار ماست.
                        از تبدیل
                        کامنت به دایرکت گرفته تا یادآوری سبد خرید رها شده. نرخ تبدیلش دیوانه‌کننده‌ست!"</p>
                    <div class="testi-author">
                        <div class="testi-av"><img src="https://i.pravatar.cc/44?img=52" alt="user" /></div>
                        <div>
                            <strong>امیرحسین رضایی</strong>
                            <span>موسس آژانس مارکتینگ BrandStack</span>
                        </div>
                    </div>
                </div>
                <div class="testi-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="testi-stars">★★★★★</div>
                    <p>"راه‌اندازیش سرجمع ۲۰ دقیقه وقت گرفت. روز سوم از یه دونه ریلز، ۸۴۷ تا لید (شماره تماس)
                        جمع کردیم!
                        حساب و کتاب ROI این ابزار اصلاً با عقل جور درنمیاد؛ بس که سودآوره."</p>
                    <div class="testi-author">
                        <div class="testi-av"><img src="https://i.pravatar.cc/44?img=60" alt="user" /></div>
                        <div>
                            <strong>تینا سلطانی</strong>
                            <span>مدرس و طراح دوره · @tina_learns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ===================== PRICING ===================== -->
    <section class="pricing" id="pricing">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <div class="eyebrow">تعرفه‌ها</div>
                <h2>رایگان شروع کنید، با رشد پیجتان <span class="highlight-text">ارتقا دهید</span></h2>
                <p>بدون هزینه راه‌اندازی. بدون قراردادهای پیچیده. ۱۴ روز تست کاملاً رایگان برای تمام پلن‌های
                    حرفه‌ای.
                </p>
            </div>

            <div class="pricing-toggle">
                <span class="toggle-label">پرداخت سالیانه<span class="save-badge">20٪ تخفیف</span></span>
                <label class="toggle-switch">
                    <input type="checkbox" id="billingToggle" />
                    <span class="toggle-slider"></span>
                </label>
                <span class="toggle-label">ماهانه </span>
            </div>

            <div class="pricing-grid">
                <!-- Free -->
                <div class="price-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="price-plan-name">شروع (رایگان)</div>
                    <div class="price-amount">
                        <span class="price-num" data-monthly="0" data-annual="0">0</span>
                        <span class="price-currency">تومان</span>
                        <span class="price-period">/ماه</span>
                    </div>
                    <p class="price-desc">بهترین انتخاب برای تست سیستم. تا 1000 لید و ۱ فلوی اتوماسیون فعال.</p>
                    <a href="https://atajoy.com/fa/auth/login" target="_blank" rel="noopener noreferrer" class="btn-outline btn-price">شروع رایگان</a>
                    <ul class="price-features">
                        <li><span class="pf-check">✓</span> مدیریت 1000 دایرکت/کامنت</li>
                        <li><span class="pf-check">✓</span> 1 اکانت فعال</li>
                        <li><span class="pf-check">✓</span> اتوماسیون فیسبوک/اینستاگرام</li>
                        <li><span class="pf-check">✓</span> فرم ساز پیشرفته</li>
                        <li><span class="pf-check">✓</span> داشبورد آماری پایه</li>
                    </ul>
                </div>

                <!-- Pro (Popular) -->
                <div class="price-card popular" data-aos="fade-up" data-aos-delay="100">
                    <div class="popular-badge">⭐ پرطرفدارترین</div>
                    <div class="price-plan-name">حرفه‌ای (Pro)</div>
                    <div class="price-amount">
                        <span class="price-num" data-monthly="499" data-annual="4790">499</span>
                        <span class="price-currency">هزار تومان</span>
                        <span class="price-period">/ماه</span>
                    </div>
                    <p class="price-desc">مخصوص بلاگرها و آنلاین‌شاپ‌هایی که آماده انفجار فروش در دایرکت هستند.
                    </p>
                    <a href="https://atajoy.com/fa/auth/login" target="_blank" rel="noopener noreferrer" class="btn-primary btn-price">ثبت نام←</a>
                    <ul class="price-features">
                        <li><span class="pf-check">✓</span> مدیریت 25,000 مخاطب فعال</li>
                        <li><span class="pf-check">✓</span> پاسخگویی دایرکت/کامنت نامحدود</li>
                        <li><span class="pf-check">✓</span> اتوماسیون فیسبوک/اینستاگرام</li>
                        <li><span class="pf-check">✓</span> 3 اکانت فعال</li>
                        <li><span class="pf-check">✓</span> فرم ساز پیشرفته</li>
                        <li><span class="pf-check">✓</span> ویترین محصولات </li>
                        <li><span class="pf-check">✓</span> حذف برندینگ AutoDM </li>
                    </ul>
                </div>

                <!-- Business 
                        <div class="price-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="price-plan-name">تجاری (Business)</div>
                            <div class="price-amount">
                                <span class="price-num" data-monthly="1490" data-annual="990">1490</span>
                                <span class="price-currency">هزار تومان</span>
                                <span class="price-period">/ماه</span>
                            </div>
                            <p class="price-desc">برای برندهای در حال رشد که نیاز به تیم‌سازی، مقیاس‌پذیری و پشتیبانی
                                ویژه
                                دارند.</p>
                            <a href="#" class="btn-outline btn-price">شروع ۱۴ روز تست رایگان</a>
                            <ul class="price-features">
                                <li><span class="pf-check">✓</span> مدیریت ۱۰۰,۰۰۰ لید فعال</li>
                                <li><span class="pf-check">✓</span> امکانات کاملاً نامحدود</li>
                                <li><span class="pf-check">✓</span> اینباکس تیمی (تا ۵ ادمین)</li>
                                <li><span class="pf-check">✓</span> آموزش اختصاصی هوش مصنوعی با دیتای شما</li>
                                <li><span class="pf-check">✓</span> رهگیری دقیق بازگشت سرمایه (ROI)</li>
                                <li><span class="pf-check">✓</span> پشتیبانی VIP تلفنی</li>
                                <li><span class="pf-check">✓</span> مدیر اکانت اختصاصی (CSM)</li>
                            </ul>
                        </div>-->
            </div>

            <div class="pricing-guarantee" data-aos="fade-up">
                <span>🔒</span>
                <p><strong>ضمانت ۳۰ روزه بازگشت وجه.</strong> بدون هیچ سوالی. اتودی‌ام را بدون ریسک تست کنید؛
                    اگر فروش و
                    راندمان شما رشد نکرد، کل مبلغ پرداختی را پس بگیرید.</p>
            </div>
        </div>
    </section>

    <!-- ===================== PARTNERS ===================== -->
    <section class="partners" id="partners">
        <div class="section-container">
            <div class="section-header" data-aos="fade-up">
                <div class="eyebrow">مورد اعتماد بهترین‌ها</div>
                <h2>برترین برندهای ایرانی <span class="highlight-text">اتودی‌ام را انتخاب کرده‌اند</span></h2>
                <p>از آنلاین‌شاپ‌های تازه‌نفس تا هلدینگ‌های نام‌آشنای بازار — اتودی‌ام موتور محرک فروش سوشال در
                    هر
                    مقیاسی است.</p>
            </div>

<!-- Brand Logos Scrollable -->
<div class="partners-wrapper">
    <div class="brands-scroll-container">
        <!-- همه لوگوها در یک ردیف -->
        <div class="brand-logo">خانومی</div>
        <div class="brand-logo">دیجی‌استایل</div>
        <div class="brand-logo">بانی‌مد</div>
        <div class="brand-logo">چرم مشهد</div>
        <div class="brand-logo">تکنولایف</div>
        <div class="brand-logo">روژا شاپ</div>
        <div class="brand-logo">شاواز</div>
        <div class="brand-logo">اسنپ‌شاپ</div>
        <div class="brand-logo">موتن‌رو</div>
        <div class="brand-logo">کالندز</div>
        <div class="brand-logo">باسلام</div>
        <div class="brand-logo">مقداد آی‌تی</div>
        <div class="brand-logo">تیمچه</div>
        <div class="brand-logo">گاج‌مارکت</div>
        <div class="brand-logo">سی‌گل</div>
        <div class="brand-logo">کامان</div>
    </div>
</div>


            <!-- Creators Section -->
            <div class="creators-section" data-aos="fade-up">
                <h3>بلاگرها و مدرسینی که با اتودی‌ام همکاری می کنند</h3>
                <div class="creators-grid">
                    <div class="creator-card featured">
                        <div class="creator-badge">⭐ ویژه</div>
                        <div class="creator-av"><img src="https://i.pravatar.cc/80?img=44" alt="creator" />
                        </div>
                        <div class="creator-handle">@business.coach</div>
                        <div class="creator-niche">رشد کسب‌وکار و فروش</div>
                        <div class="creator-followers">۲.۱ میلیون فالوور</div>
                        <div class="creator-result">+۲.۵ میلیارد فروش از دایرکت</div>
                    </div>
                    <div class="creator-card">
                        <div class="creator-av"><img src="https://i.pravatar.cc/80?img=32" alt="creator" />
                        </div>
                        <div class="creator-handle">@marketing_master</div>
                        <div class="creator-niche">آژانس دیجیتال مارکتینگ</div>
                        <div class="creator-followers">۸۵۰ هزار فالوور</div>
                        <div class="creator-result">۴.۸ برابر رشد لید (Lead)</div>
                    </div>
                    <div class="creator-card">
                        <div class="creator-av"><img src="https://i.pravatar.cc/80?img=23" alt="creator" />
                        </div>
                        <div class="creator-handle">@beauty.style.ir</div>
                        <div class="creator-niche">بیوتی بلاگر</div>
                        <div class="creator-followers">۳.۲ میلیون فالوور</div>
                        <div class="creator-result">+۳۴۰٪ افزایش فروش محصول</div>
                    </div>
                    <div class="creator-card">
                        <div class="creator-av"><img src="https://i.pravatar.cc/80?img=10" alt="creator" />
                        </div>
                        <div class="creator-handle">@fit_coach_ali</div>
                        <div class="creator-niche">مربی فیتنس و لایف‌استایل</div>
                        <div class="creator-followers">۱.۵ میلیون فالوور</div>
                        <div class="creator-result">فروش ۵۰۰ میلیونی دوره‌ها</div>
                    </div>
                    <div class="creator-card hide-on-mob">
                        <div class="creator-av"><img src="https://i.pravatar.cc/80?img=55" alt="creator" />
                        </div>
                        <div class="creator-handle">@iran_traveler</div>
                        <div class="creator-niche">تورلیدر و ایرانگرد</div>
                        <div class="creator-followers">۹۰۰ هزار فالوور</div>
                        <div class="creator-result">جذب ۵۰ هزار شماره تماس</div>
                    </div>
                </div>
            </div>

            <!-- Integrations -->
            <div class="integrations-showcase" data-aos="fade-up">
                <h3>اتصال بی‌نقص به ابزارهای فعلی شما</h3>
                <div class="integrations-grid">
                    <div class="int-item"><span class="int-icon">🛍</span><span>ووکامرس</span></div>
                    <div class="int-item"><span class="int-icon">📦</span><span>پادرو (Podro)</span></div>
                    <div class="int-item"><span class="int-icon">⚡</span><span>زاپیر (Zapier)</span></div>
                    <div class="int-item"><span class="int-icon">📧</span><span>نجوا</span></div>
                    <div class="int-item"><span class="int-icon">💳</span><span>زرین‌پال</span></div>
                    <div class="int-item"><span class="int-icon">🟣</span><span>پاکت</span></div>
                    <div class="int-item"><span class="int-icon">🛒</span><span>دیجی‌فای</span></div>
                    <div class="int-item"><span class="int-icon">🌐</span><span>وردپرس</span></div>
                </div>
                <p style="font-size:.82rem;color:var(--text-muted)">+ ۸۰ اتصال دیگر از طریق وب‌هوک اختصاصی و
                    زاپیر</p>
            </div>
        </div>
    </section>

    <!-- ===================== FAQ + TUTORIALS ===================== -->
    <section class="faq-section" id="faq">
        <div class="section-container">
            <div class="faq-layout">
                <!-- Left: Tutorials -->
                <div class="faq-left" data-aos="fade-right">
                    <div class="eyebrow">منابع آموزشی</div>
                    <h2>مسیر میان‌برِ حرفه‌ای‌ها</h2>
                    <p>آموزش‌های قدم‌به‌قدم، کیس‌استادی‌های واقعی و استراتژی‌های تست‌شده بازار ایران.</p>
                    <div class="tutorial-cards">
                        <div class="tutorial-card">
                            <div class="tutorial-thumb"><span class="play-sm">▶</span></div>
                            <div class="tutorial-info">
                                <strong>جذب ۱۰۰۰ لید (شماره تماس) فقط از یک ریلز</strong>
                                <span>آموزش ویدیویی · ۸ دقیقه</span>
                            </div>
                        </div>
                        <div class="tutorial-card">
                            <div class="tutorial-thumb"><span class="play-sm">▶</span></div>
                            <div class="tutorial-info">
                                <strong>ساخت اولین فلوی «تبدیل کامنت به دایرکت»</strong>
                                <span>آموزش ویدیویی · ۵ دقیقه</span>
                            </div>
                        </div>
                        <div class="tutorial-card">
                            <div class="tutorial-thumb"><span class="play-sm">▶</span></div>
                            <div class="tutorial-info">
                                <strong>راه‌اندازی کمپین قطره‌ای (Drip) در واتس‌اپ</strong>
                                <span>آموزش ویدیویی · ۱۲ دقیقه</span>
                            </div>
                        </div>
                        <div class="tutorial-card">
                            <div class="tutorial-thumb"><span class="play-sm">▶</span></div>
                            <div class="tutorial-info">
                                <strong>آموزش هوش مصنوعی با لحن اختصاصی برند شما</strong>
                                <span>آموزش ویدیویی · ۱۰ دقیقه</span>
                            </div>
                        </div>
                        <div class="tutorial-card">
                            <div class="tutorial-thumb"><span class="play-sm">▶</span></div>
                            <div class="tutorial-info">
                                <strong>اتصال به ووکامرس و رهگیری دقیق نرخ تبدیل</strong>
                                <span>آموزش ویدیویی · ۶ دقیقه</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: FAQ -->
                <div class="faq-right" data-aos="fade-left">
                    <div class="eyebrow">سوالات متداول</div>
                    <div class="faq-list">
                        <div class="faq-item">
                            <button class="faq-q">آیا استفاده از اتودی‌ام باعث شادوبن یا مسدودی پیج من می‌شود؟
                                <span class="faq-arrow">+</span></button>
                            <div class="faq-a">
                                <p>به هیچ وجه! اتودی‌ام پارتنر رسمی متا (فیسبوک و اینستاگرام) است. تمام
                                    اتوماسیون‌های ما
                                    دقیقاً طبق قوانین و محدودیت‌های (Rate Limits) رسمی اینستاگرام کار می‌کنند.
                                    تا امروز
                                    بیش از ۴۸,۰۰۰ پیج ایرانی بدون حتی یک مورد مسدودی یا اکشن‌بلاک از سیستم ما
                                    استفاده
                                    کرده‌اند.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q">راه‌اندازی سیستم چقدر زمان می‌برد؟ <span
                                    class="faq-arrow">+</span></button>
                            <div class="faq-a">
                                <p>اکثر کاربران ما در کمتر از ۲۰ دقیقه اولین کمپین خود را لانچ می‌کنند. کافیست
                                    پیج را
                                    متصل کنید (با ۲ کلیک)، یک تمپلیت آماده انتخاب کنید، متن فارسی خود را
                                    جایگذاری کرده و
                                    استارت بزنید. بدون نیاز به حتی یک خط کدنویسی!</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q">برای اتصال واتس‌اپ به API رسمی نیاز دارم؟ <span
                                    class="faq-arrow">+</span></button>
                            <div class="faq-a">
                                <p>بله، اتوماسیون واتس‌اپ نیازمند API رسمی کسب‌وکار است که ما صفر تا صد دریافت
                                    تیک سبز و
                                    تاییدیه را برایتان انجام می‌دهیم. اما برای اینستاگرام و فیسبوک هیچ نیازی به
                                    تاییدیه
                                    نیست و در لحظه متصل می‌شوید.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q">اگر مشتری فینگلیش یا با اصطلاحات عامیانه پیام داد چطور؟ <span
                                    class="faq-arrow">+</span></button>
                            <div class="faq-a">
                                <p>موتور هوش مصنوعی ما به طور ویژه برای زبان محاوره فارسی، فینگلیش و حتی غلط‌های
                                    املایی
                                    رایج بهینه‌سازی شده است. ربات منظور دقیق کاربر (Intent) را درک می‌کند و با
                                    لحنی
                                    کاملاً طبیعی و انسانی به او پاسخ می‌دهد.</p>
                            </div>
                        </div>
                        <div class="faq-item">
                            <button class="faq-q">آیا امکان تست رایگان وجود دارد؟ <span
                                    class="faq-arrow">+</span></button>
                            <div class="faq-a">
                                <p>بله. پلن «شروع» ما برای همیشه رایگان است (تا ۵۰۰ مخاطب). پلن‌های حرفه‌ای هم
                                    دارای ۱۴
                                    روز تست کاملاً رایگان با دسترسی به تمام امکانات هستند (بدون نیاز به وارد
                                    کردن
                                    اطلاعات کارت بانکی). همچنین پس از خرید، ۳۰ روز ضمانت بی‌قیدوشرط بازگشت وجه
                                    دارید.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===================== FINAL CTA ===================== -->
    <section class="final-cta" id="cta">
        <div class="cta-bg">
            <div class="cta-orb"></div>
            <div class="cta-orb-2"></div>
        </div>
        <div class="section-container" style="position:relative;z-index:2">
            <div class="section-header aos-animate" data-aos="fade-up">
                <div class="eyebrow" style="margin-bottom:1.5rem">آماده‌ی اتوماسیون فروش هستید؟</div>
                <h2>۱۰۰۰ مشتریِ دست‌به‌نقد بعدی شما،<br><span class="title-highlight">پشت یک کامنت
                        منتظرند!</span></h2>
                <p>به جمع صدها آنلاین‌شاپ و بلاگری بپیوندید که با اتودی‌ام، پیج خود را به یک ماشین چاپ پولِ
                    ۲۴ ساعته
                    تبدیل کرده‌اند. بدون کدنویسی. بدون خطای ادمین. فقط فروش خالص.</p>
                <div class="cta-buttons">
                    <a href="#" class="btn-primary btn-xl">شروع رایگان — بدون نیاز به پرداخت ←</a>
                    <a href="#" class="btn-outline btn-xl">رزرو جلسه دمو (مشاوره)</a>
                </div>
                <div class="cta-trust">
                    <span>✓ پلن رایگان دائمی</span>
                    <span>✓ راه‌اندازی در ۲۰ دقیقه</span>
                    <span>✓ بدون نیاز به اطلاعات بانکی</span>
                    <span>✓ ۳۰ روز ضمانت بازگشت وجه</span>
                </div>
            </div>
        </div>
    </section>        
    </main>

<?php 
// فراخوانی بخش فوتر (فایل footer.php)
get_footer(); 
?>
