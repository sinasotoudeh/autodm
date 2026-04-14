# AutoDM — SaaS Landing Page

[![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=flat&logo=html5&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/HTML)
[![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=flat&logo=css3&logoColor=white)](https://developer.mozilla.org/en-US/docs/Web/CSS)
[![JavaScript](https://img.shields.io/badge/JavaScript-ES6+-F7DF1E?style=flat&logo=javascript&logoColor=black)](https://developer.mozilla.org/en-US/docs/Web/JavaScript)
[![WordPress](https://img.shields.io/badge/WordPress-Theme-21759B?style=flat&logo=wordpress&logoColor=white)](https://developer.wordpress.org/themes/)
[![Vanilla JS](https://img.shields.io/badge/No_Dependencies-Vanilla_JS-brightgreen?style=flat)](#)
[![License](https://img.shields.io/badge/License-MIT-blue?style=flat)](LICENSE)

A fully custom, pixel-perfect SaaS landing page — designed and built entirely from scratch.  
No UI frameworks. No animation libraries. No jQuery. Every line written by hand.

**[Live](#)**

---

## 📌 Overview

This project is a production-ready landing page for an AI-powered Instagram DM automation service. Every aspect — from the visual identity and layout to the interaction logic and animation system — was designed and implemented without any external UI libraries or animation frameworks.

The codebase is intentionally **dependency-free**. All interactions, animations, and UI behaviors are built with **Vanilla JS (ES6+)** and **modern CSS**, demonstrating full ownership of the front-end stack.

The project is structured as a **WordPress theme** for deployment on a single-page WordPress site — without modifying any of the core front-end logic.

> This repository is intended for **technical reviewers** evaluating front-end engineering quality across three areas: **UI/UX design**, **modern CSS architecture**, and **advanced Vanilla JavaScript**.

---

## 🗂 Table of Contents

- [Features](#-features)
- [Project Structure](#-project-structure)
- [WordPress Theme Setup](#-wordpress-theme-setup)
- [JavaScript Architecture](#️-javascript-architecture)
- [CSS Architecture](#-css-architecture)
- [Author](#-author)

---

## ✨ Features

- Dark futuristic UI with neon accent colors and glassmorphism effects
- Fully responsive layout across all screen sizes and breakpoints
- Light/Dark mode via CSS token-based theming (no style duplication)
- Animated statistics counters with Ease-Out Exponential easing
- Interactive pricing toggle (monthly / annual) — pure CSS state management
- Drag-to-scroll brand logo carousel with inertia multiplier
- 3D card tilt effect using normalized Cartesian coordinate math
- Chat simulation engine with async message queue and DOM virtualization
- Semicircle Command Center UI component (pure CSS geometry, no SVG)
- Scroll-triggered animations via a custom `IntersectionObserver` engine
- FAQ accordion with GPU-accelerated transitions
- RTL-aware layout using `flex-direction: row-reverse`
- Platform UI mockups (WhatsApp, Instagram, AI Terminal) built entirely in CSS
- Custom Peyda web font integration (9 weights, `.woff2`)
- WordPress shortcode support for flexible content injection

---

## 🗂 Project Structure

```text
autodm/
├── style.css               # WordPress theme declaration header
├── functions.php           # Asset enqueuing & shortcode registration
├── index.php               # WordPress template fallback
├── front-page.php          # Main single-page template
├── header.php              # Site <head> and navbar partial
├── footer.php              # Footer partial
├── favicon.ico
└── assets/
    ├── css/
    │   ├── main.css        # ~4000-line modular component stylesheet
    │   ├── aos.css         # Scroll-animation initial states & transitions
    │   └── fonts.css       # @font-face declarations for Peyda web font
    ├── js/
    │   ├── main.js         # ~700-line Vanilla JS interaction engine
    │   └── aos.js          # Custom IntersectionObserver-based AOS engine
    ├── fonts/
    │
    └── images/
```

---

## 🔌 WordPress Theme Setup

### Installation

1. Clone or download this repository
2. Copy the project folder into your WordPress installation:

```text
/wp-content/themes/autodm/
```

3. Go to **Appearance → Themes** in the WordPress admin panel
4. Activate the **AutoDM** theme
5. Set the front page to a static page via **Settings → Reading**

### Asset Enqueuing

Theme assets are registered and enqueued in `functions.php`:

```php
function autodm_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'autodm_features');

function autodm_load_assets() {
    wp_enqueue_style('autodm-fonts', get_template_directory_uri() . '/assets/css/fonts.css', array(), '1.0');
    wp_enqueue_style('aos-css', get_template_directory_uri() . '/assets/css/aos.css', array(), '1.0');
    wp_enqueue_style('autodm-main-css', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0');
    wp_enqueue_style('autodm-style', get_stylesheet_uri(), array('autodm-fonts', 'autodm-main-css'), '1.0');
    wp_enqueue_script('aos-js', get_template_directory_uri() . '/assets/js/aos.js', array(), '1.0', true);
    wp_enqueue_script('autodm-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', true);
    wp_enqueue_script('autodm-script-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'autodm_load_assets');

function add_custom_favicon_ico() {
    echo '<link rel="shortcut icon" href="' . get_stylesheet_directory_uri() . '/favicon.ico" />';
    echo '<link rel="icon" href="' . get_stylesheet_directory_uri() . '/favicon.ico" type="image/x-icon" />';
}
add_action('wp_head', 'add_custom_favicon_ico');

```

---

### Available Shortcodes

The theme registers shortcodes for embedding individual sections into WordPress pages or a page builder.

#### Hero Section

```text
[autodm_hero headline="Automate Your DMs" subtext="Grow on autopilot."]
```

| Parameter  | Default         | Description                           |
| ---------- | --------------- | ------------------------------------- |
| `headline` | `"AutoDM"`      | Main H1 heading text                  |
| `subtext`  | `""`            | Supporting subtitle below the heading |
| `cta_text` | `"Get Started"` | Primary call-to-action button label   |
| `cta_url`  | `"#"`           | URL for the CTA button                |

#### Pricing Section

```text
[autodm_pricing show_toggle="true" currency="$"]
```

| Parameter        | Default | Description                                           |
| ---------------- | ------- | ----------------------------------------------------- |
| `show_toggle`    | `true`  | Show/hide the monthly–annual billing toggle           |
| `currency`       | `"$"`   | Currency symbol displayed on plan cards               |
| `highlight_plan` | `"pro"` | Which plan card receives the featured highlight style |

#### FAQ Section

```text
[autodm_faq title="Frequently Asked Questions"]
```

| Parameter    | Default | Description                                   |
| ------------ | ------- | --------------------------------------------- |
| `title`      | `"FAQ"` | Section heading                               |
| `open_first` | `false` | Whether the first item is expanded by default |

> All shortcode output is sanitized using `esc_attr()` and `esc_html()` to comply with WordPress security standards.

---

## ⚙️ JavaScript Architecture

`assets/js/main.js` (~700 lines) is written entirely in **Vanilla JS with ES6+** — no jQuery, no animation libraries, no external dependencies. The file opens with `'use strict'` and is organized as a collection of isolated, self-initializing modules.

---

### 1 · 🔒 Execution Isolation & Initialization Locks

All module logic is wrapped in **IIFEs** (Immediately Invoked Function Expressions) to prevent global scope pollution. For WordPress environments — where `DOMContentLoaded` can fire multiple times — **global initialization locks** on the `window` object prevent duplicate event listener registration and memory leaks.

```javascript
// Prevents re-initialization on repeated DOMContentLoaded calls (WordPress-safe)
if (window.**autoDmChatInitialized) return;
window.**autoDmChatInitialized = true;

// Each module is scoped in its own IIFE — internal variables never leak globally
(function initTabs() {
const tabBtns = document.querySelectorAll('.tab-btn');
// ...
})();
```

The lock is stored on the `window` object so it persists across script re-evaluations. The IIFE pattern ensures that internal variables like `tabBtns` never leak into the global scope.

---

### 2 · ⚡ Performance-First Event Handling

**Scroll events** are registered with `{ passive: true }`, signaling to the browser that `preventDefault()` will never be called. This allows the browser's rendering engine to process scroll independently of the JS thread, keeping frame rate stable.

For all scroll-triggered animations, the native **`IntersectionObserver` API** is used instead of polling the scroll position — eliminating the performance cost of continuous scroll calculations entirely. After an animation fires, `unobserve()` removes the element from the observation queue:

```javascript
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        observer.unobserve(entry.target); // removes from queue after first trigger
      }
    });
  },
  { threshold: 0.5 },
);
```

The `rootMargin: '0px 0px -60px 0px'` option on the scroll animation observer ensures animations trigger only when an element is 60px inside the viewport — not at the very edge — producing a more intentional visual result.

---

### 3 · 🎞️ Hardware-Accelerated Animations with `requestAnimationFrame`

Counter animations and pricing transitions use **time-based animation** driven by `requestAnimationFrame`, which synchronizes execution with the display's refresh rate (60Hz or 120Hz).

`performance.now()` is used instead of `Date.now()` for microsecond-precision timestamps that are unaffected by system clock changes.

The easing function applied is **Ease-Out Exponential**, defined as:

$$f(t) = 1 - 2^{-10t}$$

This produces fast initial movement that decelerates smoothly toward the end — matching the feel of native OS animations.

```javascript
const duration = 1800;
const startTime = performance.now();

function step(now) {
const progress = Math.min((now - startTime) / duration, 1);
const eased = progress === 1 ? 1 : 1 - Math.pow(2, -10 _ progress);
el.textContent = Math.round(target _ eased);
if (progress < 1) requestAnimationFrame(step);
}
requestAnimationFrame(step);
```

For `duration = 1800`ms, the total animation window is $1000 \times 1.8 = 1800$ milliseconds, with the easing curve ensuring the value reaches its target without an abrupt stop.

---

### 4 · 🧮 ES6+ Data Structures & Defensive Patterns

**`Set` for $O(1)$ deduplication** — counters that have already animated are tracked in a `Set` rather than an array. Membership checks in a `Set` run in $O(1)$ time, compared to $O(n)$ for `Array.includes()`:

```javascript
let countersTriggered = new Set();
if (countersTriggered.has(el)) return;
countersTriggered.add(el);
```

**Optional Chaining** (`?.`) prevents `TypeError` crashes when elements are conditionally absent from the DOM (e.g., the hamburger menu not existing on certain page templates):

```javascript
hamburger?.classList.remove("active");
```

**Template Literals** with `.map().join('')` handle all dynamic HTML rendering — keeping logic and markup cleanly separated:

```javascript
const bulletsHTML = data.bullets
  .map(
    (bullet) =>
      `<li><span class="pf-check">✓</span><span>${bullet}</span></li>`,
  )
  .join("");
```

---

### 5 · 💬 Chat Simulation Engine with DOM Virtualization

The `initChatSimulation` module implements a full **asynchronous message queue** managed with `setTimeout`. It renders typing indicators, staggers message delivery, and enforces a `MAX_VISIBLE` cap to prevent unbounded DOM growth.

When the message count exceeds `MAX_VISIBLE`, old messages are removed with a CSS exit animation, then detached from the DOM entirely. This is a manual implementation of the **DOM virtualization** pattern used by frameworks like React — only a bounded number of nodes exist in the DOM at any time:

```javascript
const MAX_VISIBLE = 7;
const allMsgs = Array.from(
  chatMessages.querySelectorAll(".msg:not(.removing)"),
);

if (allMsgs.length > MAX_VISIBLE) {
  const diff = allMsgs.length - MAX_VISIBLE;
  for (let i = 0; i < diff; i++) {
    const oldMsg = allMsgs[i];
    oldMsg.classList.add("removing");
    // Detach from DOM only after CSS exit animation completes (300ms)
    setTimeout(() => {
      if (oldMsg.parentNode) oldMsg.remove();
    }, 300);
  }
}
```

The `if (oldMsg.parentNode)` guard prevents errors if the node was already removed by a concurrent operation.

---

### 6 · 🎯 3D Tilt Effect via Vector Math

The `initTilt` module implements a **3D card tilt effect** from scratch using Cartesian coordinate math — no `VanillaTilt.js` or similar library.

The mouse position is normalized relative to the card center. Given cursor coordinates $(x, y)$ and card center $(c_x, c_y)$:

$$dx = \frac{x - c_x}{c_x}, \quad dy = \frac{y - c_y}{c_y}$$

The CSS rotation angles are then derived as:

$$rotateX = dy \times -5, \quad rotateY = dx \times 5$$

```javascript
const cx = rect.width / 2;
const cy = rect.height / 2;
const dx = (x - cx) / cx; // normalized: -1 to +1
const dy = (y - cy) / cy;

const rotateX = dy _ -5;
const rotateY = dx _ 5;

card.style.transform =
`perspective(600px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-5px)`;
```

The result is a tilt range of $\pm 5°$ on both axes, applied via a single `transform` string to avoid triggering layout recalculation.

---

### 7 · 🖱️ Drag-to-Scroll with Inertia Multiplier

The brand logo carousel supports mouse-drag scrolling using `mousedown`, `mousemove`, and `mouseup` events. A **velocity multiplier of `× 2`** is applied to the drag delta, making the scroll feel lighter and more responsive than 1:1 tracking — simulating the inertia feel of touch-swipe interactions on desktop:

```javascript
const x = e.pageX - slider.offsetLeft;
const walk = (x - startX) \* 2;
slider.scrollLeft = scrollLeft - walk;
```

---

### 8 · 📦 Data-Driven UI (Separation of Concerns)

The Semicircle Command Center section stores all feature content in a structured JavaScript array (`featuresData`) rather than hardcoding it in HTML. The UI is rendered entirely from this data using Template Literals — the same **data-driven rendering pattern** that underpins React and Vue.

Adding or removing a feature requires changing only the data array, with no HTML edits:

```javascript
const featuresData = [
  { id: "feature-1", title: "...", bullets: ["...", "..."] },
  // ...
];

// View is derived entirely from data
const bulletsHTML = data.bullets
  .map(
    (bullet) =>
      `<li><span class="pf-check">✓</span><span>${bullet}</span></li>`,
  )
  .join("");
```

---

## 🎨 CSS Architecture

`assets/css/main.css` (~4000 lines) is structured as a modular, component-based stylesheet built on a **Design Token system** using CSS Custom Properties. All visual decisions — colors, spacing, shadows, easing curves — are defined at the `:root` level and consumed throughout the file.

---

### 1 · 🎨 Design Token System (CSS Custom Properties)

All design values are declared as tokens in `:root`, making the entire visual system configurable from a single location and enabling full theme switching without duplicating rules:

```css
:root {
  --bg-base: #080c14;
  --accent-green: #00f5a0;
  --shadow-card: 0 4px 40px rgba(0, 0, 0, 0.4);
  --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}
```

The `cubic-bezier(0.4, 0, 0.2, 1)` value on `--transition` is the **Material Design standard easing curve** — chosen deliberately for its natural deceleration feel. All interactive elements share this curve, giving the UI a consistent, polished motion language.

---

### 2 · 📐 Fluid Typography with `clamp()`

Font sizes scale continuously between breakpoints using the `clamp()` function, eliminating the need for multiple `@media` queries just for typography:

```css
h1 {
  font-size: clamp(3rem, 7vw, 6.5rem);
}
```

This sets a minimum of `3rem`, a maximum of `6.5rem`, and a fluid middle value of `7vw` that scales with the viewport — smooth and continuous with zero breakpoint jumps.

---

### 3 · ✨ Glassmorphism & Text Gradient Techniques

**Gradient text clipping** — renders text as a transparent mask over a gradient background:

```css
.highlight-text {
  background: linear-gradient(135deg, var(--accent-green), var(--accent-cyan));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
```

**Glassmorphism navbar** — uses `backdrop-filter` with vendor prefix for broad browser support:

```css
.navbar.scrolled {
  backdrop-filter: blur(20px);
  -webkit-backdrop-filter: blur(20px);
}
```

---

### 4 · 🔲 CSS-Only Background Grid with `mask-image`

The hero section's grid pattern is generated entirely with CSS `linear-gradient` — no SVG, no image files. The edges are faded using `mask-image` with a `radial-gradient`, which is cleaner than stacking overlay elements:

```css
.hero-grid {
  background-image:
    linear-gradient(rgba(255, 255, 255, 0.025) 1px, transparent 1px),
    linear-gradient(90deg, rgba(255, 255, 255, 0.025) 1px, transparent 1px);
  background-size: 60px 60px;
  mask-image: radial-gradient(ellipse at center, black 30%, transparent 80%);
}
```

The same `mask-image` technique is used on the logo carousel to fade logos at the left and right edges without overlaying additional DOM elements:

```css
.partners-wrapper {
/_ Transparent at 0%–5%, opaque in the center, transparent again at 95%–100% _/
mask-image: linear-gradient(90deg, transparent, #000 5%, #000 95%, transparent);
}
```

---

### 5 · 🎭 GPU-Accelerated Animations

All animations use `transform` and `opacity` exclusively — properties composited by the GPU that do not trigger layout recalculation (Reflow) or paint operations (Repaint):

```css
@keyframes orbFloat {
  0%,
  100% {
    transform: translateY(0) scale(1);
  }
  50% {
    transform: translateY(-28px) scale(1.04);
  }
}
```

Hover effects on cards use `::after` pseudo-elements with `opacity` transitions rather than changing `background` directly — keeping the animation on the Composite layer:

```css
.feat-card::after {
  content: "";
  position: absolute;
  inset: 0;
  background: radial-gradient(
    circle at top left,
    rgba(0, 245, 160, 0.04),
    transparent 60%
  );
  opacity: 0;
  transition: var(--transition);
}
.feat-card:hover::after {
  opacity: 1;
}
```

The bottom-border reveal on metric cards uses `transform: scaleX()` for the same reason — scaling from $0$ to $1$ on the Composite layer with no Layout cost:

```css
.metric-card::before {
  transform: scaleX(0);
  transition: var(--transition);
}
.metric-card:hover::before {
  transform: scaleX(1);
}
```

---

### 6 · 🔵 Advanced CSS Geometry (Semicircle Component)

The Semicircle Command Center is built using `aspect-ratio` and a compound `border-radius` value — no SVG, no canvas. Node positions along the arc are injected as CSS custom properties by JavaScript:

```css
.semicircle-wrapper {
aspect-ratio: 2 / 1; /_ Forces a 2:1 rectangle — the upper half of a circle _/
}
.arc-line {
border-radius: 50% 50% 0 0 / 100% 100% 0 0; /_ Precise semicircle shaping _/
}
.node-container {
left: var(--left); /_ Position injected by JS for arc placement _/
top: var(--top);
transform: translate(-50%, -50%);
}
```

---

### 7 · 🔁 Pure CSS State Management (Pricing Toggle)

The monthly/annual pricing toggle is styled entirely with CSS using the **adjacent sibling combinator** (`+`) on a hidden `<input type="checkbox">`. No JavaScript is involved in the visual state change:

```css
.toggle-switch input { opacity: 0; width: 0; height: 0; }

input:checked + .toggle-slider {
background: rgba(0, 245, 160, .14);
}
input:checked + .toggle-slider::before {
transform: translate(21px, -50%); /_ Slides the knob 21px to the right _/
}
```

---

### 8 · 📱 Custom AOS Engine (Attribute Selector Pattern)

Instead of importing an AOS library, scroll-triggered entrance animations are handled by a lightweight CSS + JS pattern split across `aos.css` and `aos.js`. CSS defines the initial hidden state and transition for any element with a `[data-aos]` attribute. JavaScript's only role is adding the `.aos-animate` class at the right scroll position:

```css
[data-aos] {
  opacity: 0;
  transform: translateY(28px);
  transition:
    opacity 0.7s ease,
    transform 0.7s ease;
}
[data-aos="fade-right"] {
  transform: translateX(-28px);
}

[data-aos].aos-animate {
  opacity: 1;
  transform: none;
}
```

---

### 9 · 🌗 Token-Based Light/Dark Theming

Light mode is implemented by overriding CSS Custom Properties on a `.light-mode` class applied to `<body>`. No styles are duplicated — only the token values change:

```css
.light-mode {
  --bg-base: #f5f7fa;
  --bg-surface: #ffffff;
  --text-primary: #0d1220;
  --shadow-card: 0 4px 40px rgba(0, 0, 0, 0.1);
}
```

Glassmorphism components are also adjusted per theme to maintain readability:

```css
.light-mode .mockup-window {
  background: #ffffff;
  box-shadow:
    0 8px 60px rgba(0, 0, 0, 0.12),
    0 0 60px rgba(0, 184, 122, 0.04);
}
```

---

### 10 · 📐 Full-Bleed Layout with `calc()`

The footer breaks out of its parent container's `max-width` constraint to span the full viewport width — a common layout requirement solved with pure CSS math:

```css
.footer {
width: 100vw;
margin-left: calc(50% - 50vw);
margin-right: calc(50% - 50vw);
margin-top: auto; /_ Sticky footer behavior when content is short _/
box-sizing: border-box;
}
```

---

### 11 · 📲 Responsive DOM Reordering

On mobile, Flexbox `order` is used to reposition visual elements independently of their DOM order — ensuring images always appear above text on small screens regardless of their desktop layout position. This preserves correct document order for accessibility and SEO:

```css
@media (max-width: 640px) {
  .benefit-item,
  .benefit-item.reverse {
    display: flex;
    flex-direction: column;
  }
  /_ Icon/visual always appears above text on mobile,
  regardless of desktop order _/ .benefit-item .benefit-visual,
  .benefit-item.reverse .benefit-visual {
    order: -1;
  }
}
```

---

### 12 · 🎬 Platform UI Mockups with Micro-animations

Platform UI mockups (WhatsApp, Instagram, AI Terminal) are built entirely in CSS — no screenshots or image assets. Brand-accurate colors are used throughout. Message bubble shapes use precise `border-radius` combinations:

```css
.wa-msg { background: #1F2C33; border-radius: 8px 8px 8px 2px; } /_ Incoming _/
.wa-reply { background: #005C4B; border-radius: 8px 8px 2px 8px; /_ Outgoing _/
align-self: flex-end; }
```

Typing indicators use staggered `animation-delay` values to produce a natural wave motion:

```css
.chat-typing span {
  animation: dotType 1.4s infinite;
}
.chat-typing span:nth-child(2) {
  animation-delay: 0.22s;
}
.chat-typing span:nth-child(3) {
  animation-delay: 0.44s;
}
```

The AI terminal cursor uses a `cursorBlink` keyframe animation to simulate a real terminal prompt.

---

## 👤 Author

**Sina Sotoudeh** — Front-End Developer & UI/UX Designer

|             |                                                                      |
| ----------- | -------------------------------------------------------------------- |
| 🌐 Website  | [sinasotoudeh.ir](https://sinasotoudeh.ir)                           |
| 💼 LinkedIn | [linkedin.com/in/sinasotoudeh](https://linkedin.com/in/sinasotoudeh) |
| 🐙 GitHub   | [github.com/sinasotoudeh](https://github.com/sinasotoudeh)           |
| 📧 Email    | [s.sotoudeh1@gmail.com](mailto:s.sotoudeh1@gmail.com)                |

---

_Built with no frameworks. Every line written by hand._
