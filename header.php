<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- تایتل توسط وردپرس به صورت خودکار اضافه می‌شود -->
    
    <meta name="description"
        content="پلتفرم شماره یک اتوماسیون دایرکت و کامنت اینستاگرام، فیسبوک و واتس‌اپ بر پایه هوش مصنوعی. کامنت‌ها، استوری‌ها و منشن‌ها را روی اتوپایلوت به فروش تبدیل کنید." />
    
    <!-- لینک‌های CSS حذف شدند چون از طریق functions.php لود می‌شوند -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- ===================== NAVBAR ===================== -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <!-- لینک لوگو به صفحه اصلی سایت تغییر کرد -->
            <a href="<?php echo home_url(); ?>" class="nav-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="AutoDM Logo" class="logo-image">
                <span class="logo-text">AutoDM</span>
            </a>
            <div class="nav-links">
                <div class="dropdown">
                    <a href="#">محصولات <span class="chevron">▾</span></a>
                    <div class="dropdown-menu">
                        <a href="#features">اتوماسیون اینستاگرام</a>
                        <a href="#features">مسنجر فیسبوک</a>
                        <a href="#features">فلو بیلدر (مسیر تعامل)</a>
                        <a href="#features">واتس‌اپ بیزینس (بزودی)</a>
                        <a href="#features">موتور پاسخگوی هوشمند (بزودی)</a>
                    </div>
                </div>
                <div class="dropdown">
                    <a href="#">راهکارها <span class="chevron">▾</span></a>
                    <div class="dropdown-menu">
                        <a href="#">آنلاین‌شاپ‌ها و فروشگاه‌ها</a>
                        <a href="#">مدرسین</a>
                        <a href="#">آژانس‌های مارکتینگ</a>
                        <a href="#">سازمان‌های بزرگ</a>
                    </div>
                </div>
                <a class="nav-item" href="#pricing">تعرفه‌ها</a>
                <a class="nav-item" href="#partners">مشتریان ما</a>
                <a class="nav-item" href="#faq">منابع و آموزش</a>
            </div>
            <div class="nav-actions">
                <a href="https://atajoy.com/fa/auth/login" target="_blank" rel="noopener noreferrer" class="btn-ghost">ورود به پنل</a>
                <a href="https://atajoy.com/fa/auth/login" target="_blank" rel="noopener noreferrer" class="btn-primary nav-cta">شروع رایگان ←</a>
            </div>
            <button class="hamburger" id="hamburger" aria-label="Menu">
                <span></span><span></span><span></span>
            </button>
        </div>
        <div class="mobile-menu" id="mobileMenu">
            <a href="#features">محصولات</a>
            <a href="#what-is">AutoDM چطور کار می‌کند؟</a>
            <a href="#pricing">تعرفه‌ها</a>
            <a href="#partners">مشتریان ما</a>
            <a href="#faq">سوالات متداول</a>
            <a href="https://atajoy.com/fa/auth/login" target="_blank" rel="noopener noreferrer" class="btn-primary">شروع رایگان ←</a>
            <a href="https://atajoy.com/fa/auth/login" target="_blank" rel="noopener noreferrer" class="btn-primary">ورود به پنل</a>
        </div>
    </nav>
