<?php
?><!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Dr. Kabir &amp; Associates | Distinguished Legal Advocacy</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&amp;family=Playfair+Display:wght@700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-surface": "#2e3132",
                        "primary-container": "#002147",
                        "surface-container-highest": "#e1e3e4",
                        "secondary-fixed": "#ffdea5",
                        "background": "#f8f9fa",
                        "surface-bright": "#f8f9fa",
                        "inverse-primary": "#aec7f6",
                        "on-secondary": "#ffffff",
                        "secondary": "#775a19",
                        "on-secondary-fixed-variant": "#5d4201",
                        "on-primary-fixed-variant": "#2d476f",
                        "tertiary-container": "#212121",
                        "secondary-container": "#fed488",
                        "tertiary": "#0a0a0a",
                        "on-tertiary-fixed": "#1b1c1c",
                        "primary": "#000a1e",
                        "primary-fixed-dim": "#aec7f6",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-container": "#785a1a",
                        "on-tertiary-container": "#898888",
                        "primary-fixed": "#d6e3ff",
                        "inverse-on-surface": "#f0f1f2",
                        "on-surface-variant": "#44474e",
                        "surface-dim": "#d9dadb",
                        "on-secondary-fixed": "#261900",
                        "surface-container-high": "#e7e8e9",
                        "on-primary-fixed": "#001b3d",
                        "secondary-fixed-dim": "#e9c176",
                        "surface-container-low": "#f3f4f5",
                        "on-error": "#ffffff",
                        "outline": "#74777f",
                        "error-container": "#ffdad6",
                        "on-primary-container": "#708ab5",
                        "error": "#ba1a1a",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#c8c6c6",
                        "surface-container": "#edeeef",
                        "surface-tint": "#465f88",
                        "on-surface": "#191c1d",
                        "on-tertiary-fixed-variant": "#474747",
                        "surface-variant": "#e1e3e4",
                        "tertiary-fixed": "#e4e2e1",
                        "on-background": "#191c1d",
                        "on-primary": "#ffffff",
                        "on-error-container": "#93000a",
                        "outline-variant": "#c4c6cf",
                        "surface": "#f8f9fa"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "section-gap-desktop": "120px",
                        "base": "8px",
                        "margin-mobile": "20px",
                        "margin-desktop": "80px",
                        "container-max": "1280px",
                        "section-gap-mobile": "64px",
                        "gutter": "24px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Playfair Display"],
                        "body-md": ["Montserrat"],
                        "display-lg": ["Playfair Display"],
                        "label-sm": ["Montserrat"],
                        "body-lg": ["Montserrat"],
                        "headline-lg": ["Playfair Display"],
                        "headline-md": ["Playfair Display"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["28px", {"lineHeight": "36px", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "display-lg": ["48px", {"lineHeight": "60px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "label-sm": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "headline-lg": ["36px", {"lineHeight": "44px", "fontWeight": "700"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
                    }
                },
            },
        }
    </script>
    <style>
        .tonal-shadow { box-shadow: 0 10px 40px rgba(0, 33, 71, 0.05); }
        .hero-gradient { background: linear-gradient(90deg, rgba(248, 249, 250, 1) 40%, rgba(248, 249, 250, 0.7) 60%, rgba(248, 249, 250, 0) 100%); }
        .service-card-crown { border-top: 3px solid #C5A059; }
        .btn-hover-gold:hover { border-bottom: 2px solid #C5A059; padding-bottom: calc(0.5rem - 2px); }
        .custom-marker::before { content: ""; display: inline-block; width: 6px; height: 6px; background-color: #775a19; margin-right: 12px; vertical-align: middle; }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md selection:bg-secondary-container selection:text-on-secondary-container">
<!-- Top Navigation Bar -->
<header class="fixed top-0 left-0 right-0 z-50 bg-surface border-b border-surface-container-highest">
    <nav class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop py-base max-w-container-max mx-auto h-20">
        <a class="font-headline-md text-headline-md font-bold text-primary" href="#">Dr. Kabir &amp; Associates</a>
        <div class="hidden md:flex gap-8 items-center">
            <a class="font-body-md text-body-md text-secondary border-b-2 border-secondary font-semibold pb-1" href="#">Home</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Services</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Lawyers</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">About Us</a>
            <a class="font-body-md text-body-md text-on-surface-variant hover:text-primary transition-colors" href="#">Contact</a>
            <button class="bg-primary text-on-primary px-6 py-3 rounded text-label-sm font-label-sm tracking-widest hover:bg-primary-container transition-all scale-95 active:scale-90">REQUEST CONSULTATION</button>
        </div>
        <button class="md:hidden text-primary">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </nav>
</header>
<main class="pt-20">
    <!-- Hero Section -->
    <section class="relative h-[85vh] flex items-center overflow-hidden bg-surface-container-low">
        <div class="absolute inset-0 z-0">
            <img alt="Dr. AKM Akhtarul Kabir" class="w-full h-full object-cover object-center scale-110" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIXdFsbQW5JhgIfsN45OcpTHoPsTN6gAQpqIX4ba_1253ySI95hwekUdrt0nngtmLafwAxZSKeEMx_932l0pzD3WF6W0Qy_vTAoMrPgUfQfUuwOepwHy8TrAzoK1qfzYRNtViGBKTIC0woG9ElBCAf8amMX-NuqA3Q6CpWlhBQiXST4M8cTfAUml2X5rzXV0m0xzVsZcMudfGWkpT4XilXlSCfhQlRN8i38KL91xiUkmGSzdCWg81Bl-enoK8ukx11AA_9XzPioBI"/>
            <div class="absolute inset-0 hero-gradient"></div>
        </div>
        <div class="relative z-10 max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop w-full grid grid-cols-12 gap-gutter">
            <div class="col-span-12 md:col-span-7">
                <span class="font-label-sm text-label-sm text-secondary uppercase tracking-[0.2em] block mb-4">Established Excellence</span>
                <h1 class="font-display-lg text-display-lg md:text-headline-lg text-primary mb-6 leading-[1.1]">
                    Distinguished Legal <br/>Advocacy &amp; Consultancy
                </h1>
                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mb-10 leading-relaxed">
                    Advocate, Supreme Court of Bangladesh with over three decades of steadfast practice in constitutional, corporate, and civil litigation.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-primary text-on-primary px-8 py-4 rounded font-label-sm text-label-sm tracking-widest btn-hover-gold transition-all">
                        SECURE CONSULTATION
                    </button>
                    <button class="border border-primary text-primary px-8 py-4 rounded font-label-sm text-label-sm tracking-widest hover:bg-primary hover:text-on-primary transition-all">
                        OUR CHAMBERS
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- Stats Section -->
    <section class="bg-primary-container py-16">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left">
                <div class="border-l-0 md:border-l border-on-primary-container/20 md:pl-8">
                    <h2 class="font-display-lg text-headline-lg text-secondary-fixed mb-1">34+</h2>
                    <p class="font-label-sm text-label-sm text-on-primary-container tracking-wider uppercase">Years of Practice</p>
                </div>
                <div class="border-l-0 md:border-l border-on-primary-container/20 md:pl-8">
                    <h2 class="font-display-lg text-headline-lg text-secondary-fixed mb-1">Ph.D.</h2>
                    <p class="font-label-sm text-label-sm text-on-primary-container tracking-wider uppercase">Doctorate in Law</p>
                </div>
                <div class="border-l-0 md:border-l border-on-primary-container/20 md:pl-8">
                    <h2 class="font-display-lg text-headline-lg text-secondary-fixed mb-1">Appellate</h2>
                    <p class="font-label-sm text-label-sm text-on-primary-container tracking-wider uppercase">Division Enlisted Advocate</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Intro Section: A Life Devoted to the Law -->
    <section class="py-section-gap-mobile md:py-section-gap-desktop bg-surface-container-lowest">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop grid grid-cols-1 md:grid-cols-12 gap-gutter items-center">
            <div class="md:col-span-5 mb-12 md:mb-0">
                <div class="relative">
                    <div class="absolute -top-6 -left-6 w-32 h-32 bg-secondary-fixed/30 -z-10"></div>
                    <div class="aspect-[4/5] bg-cover bg-center rounded tonal-shadow" data-alt="Close-up artistic architectural shot of the Supreme Court of Bangladesh at dusk, emphasizing the majestic columns and solemn atmosphere with high-end photography style." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDDIz00fXQkz2H-IHMAjLTXP8yeWWMHdNwITjftJJ3fEnsRNDAZw42g0BazAfYI2zD2c724mxQC-BBteaSKj4zzm1OqhE-sAxpIs_4RTriRFl3p2_JY5tN3MgUyUsiQarCm_NElF9oCRDNWI0H03zapLPWljpxNSFbA-CRrK-WUdLoW8lrRgD9fbPFdzY38EbFsUdbod3jdYY9EIS_-ABz2TdJBOpnwPhXePU53GZdWOWDgA2N-BSa6Gh6f98VbPeVoonGuHNIY8x8')"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 border-2 border-secondary/20 -z-10"></div>
                </div>
            </div>
            <div class="md:col-span-6 md:col-start-7">
                <h2 class="font-headline-lg text-headline-lg text-primary mb-8">A Life Devoted to the Law</h2>
                <div class="space-y-6 text-on-surface-variant">
                    <p class="font-body-lg text-body-lg leading-relaxed">
                        Dr. AKM Akhtarul Kabir is a distinguished name in the legal landscape of Bangladesh. With a career spanning over three decades, his expertise traverses the complexities of the Appellate Division and the High Court Division of the Supreme Court.
                    </p>
                    <p class="font-body-lg text-body-lg leading-relaxed">
                        His academic rigor, culminating in a Ph.D. in Law, informs a practice rooted in deep intellectual heritage and structural precision. Dr. Kabir and his associates provide comprehensive legal consultancy that serves corporate entities, institutional clients, and individuals with uncompromising integrity.
                    </p>
                </div>
                <ul class="mt-10 space-y-4">
                    <li class="custom-marker font-body-md text-primary font-semibold">Senior Advocate at the Supreme Court Bar</li>
                    <li class="custom-marker font-body-md text-primary font-semibold">Specialist in Corporate Governance &amp; Writ Petitions</li>
                    <li class="custom-marker font-body-md text-primary font-semibold">Renowned Academician and Legal Consultant</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Services Grid (Bento Style) -->
    <section class="py-section-gap-mobile md:py-section-gap-desktop bg-surface">
        <div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-2xl">
                    <span class="font-label-sm text-label-sm text-secondary uppercase tracking-[0.2em] block mb-4">Core Competencies</span>
                    <h2 class="font-headline-lg text-headline-lg text-primary">Comprehensive Legal Solutions</h2>
                </div>
                <a class="group flex items-center gap-2 font-label-sm text-label-sm text-primary tracking-widest" href="#">
                    EXPLORE ALL SERVICES
                    <span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
                <!-- Service Card 1 -->
                <div class="bg-surface-container-lowest p-10 service-card-crown tonal-shadow group hover:-translate-y-2 transition-all duration-300">
                    <span class="material-symbols-outlined text-secondary text-4xl mb-6">gavel</span>
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">Constitutional Law</h3>
                    <p class="font-body-md text-on-surface-variant mb-8 leading-relaxed">Expert advocacy in Writ petitions and fundamental rights protection within the High Court Division.</p>
                    <div class="h-1 w-0 bg-secondary group-hover:w-16 transition-all duration-300"></div>
                </div>
                <!-- Service Card 2 -->
                <div class="bg-surface-container-lowest p-10 service-card-crown tonal-shadow group hover:-translate-y-2 transition-all duration-300">
                    <span class="material-symbols-outlined text-secondary text-4xl mb-6">corporate_fare</span>
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">Corporate Consultancy</h3>
                    <p class="font-body-md text-on-surface-variant mb-8 leading-relaxed">Structural legal guidance for corporate mergers, acquisitions, and regulatory compliance.</p>
                    <div class="h-1 w-0 bg-secondary group-hover:w-16 transition-all duration-300"></div>
                </div>
                <!-- Service Card 3 -->
                <div class="bg-surface-container-lowest p-10 service-card-crown tonal-shadow group hover:-translate-y-2 transition-all duration-300">
                    <span class="material-symbols-outlined text-secondary text-4xl mb-6">balance</span>
                    <h3 class="font-headline-md text-headline-md text-primary mb-4">Civil &amp; Criminal Appeals</h3>
                    <p class="font-body-md text-on-surface-variant mb-8 leading-relaxed">Authoritative representation in the Appellate Division for complex legal determinations.</p>
                    <div class="h-1 w-0 bg-secondary group-hover:w-16 transition-all duration-300"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Section -->
    <section class="relative py-section-gap-mobile md:py-section-gap-desktop overflow-hidden">
        <div class="absolute inset-0 -z-10">
            <div class="w-full h-full bg-cover bg-center" data-alt="A dark, moody close-up of aged leather-bound law books and a wooden gavel resting on a mahogany desk, bathed in warm, cinematic lighting with heavy shadows. High-end architectural photography." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAyvXMglCdZ6Su9ydPkOR9YEArm92zdgEIxw97R85ShJew2lUJggG1sD2pdxM4jfs5moejgwE2vQUztbpsCTfw7xeOunPyoONr9Iff4uYJjhkfOD0JdUFJaXVpOx25p2O3yHh6BMh6YIPmFLvWUH2NYwfQ0pv0iu8ICq_QvSaGERdvqHz7VnIDbd51BP2_fW4iqRDc6TrVfbRUHGgnxGBWwE5-oOKrFBrlBN5nE2R7ZUCSl65P9iDacpb5dGpsm3PkPeO_rZ9bmMXY')"></div>
            <div class="absolute inset-0 bg-primary/90"></div>
        </div>
        <div class="max-w-3xl mx-auto px-margin-mobile text-center">
            <h2 class="font-headline-lg text-headline-lg text-on-primary mb-8">Ready to Discuss Your Legal Matters?</h2>
            <p class="font-body-lg text-body-lg text-on-primary/80 mb-12">
                Dr. Kabir &amp; Associates provides discrete and authoritative counsel for high-stakes legal challenges. Schedule a formal consultation at our High Court or Evening chambers.
            </p>
            <button class="bg-secondary-fixed text-on-secondary-fixed px-10 py-5 rounded font-label-sm text-label-sm tracking-[0.2em] hover:bg-secondary-container transition-all">
                INITIATE CONSULTATION
            </button>
        </div>
    </section>
</main>
<!-- Footer -->
<footer class="bg-primary-container border-t border-primary text-on-primary-container">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-gutter px-margin-mobile md:px-margin-desktop py-section-gap-mobile max-w-container-max mx-auto">
        <div class="col-span-1 md:col-span-1">
            <h2 class="font-headline-md text-headline-md text-on-primary-container mb-6">Dr. Kabir &amp; Associates</h2>
            <p class="font-body-md text-body-md opacity-80 leading-relaxed">
                Providing elite legal consultancy with a focus on constitutional, civil, and corporate excellence for over 34 years.
            </p>
        </div>
        <div>
            <h3 class="font-label-sm text-label-sm text-secondary-fixed uppercase tracking-widest mb-6">Chambers</h3>
            <ul class="space-y-4 font-body-md text-body-md">
                <li class="opacity-80 hover:opacity-100 transition-all cursor-pointer">High Court Chambers</li>
                <li class="opacity-80 hover:opacity-100 transition-all cursor-pointer">Evening Chambers</li>
                <li class="opacity-80">Dhaka, Bangladesh</li>
            </ul>
        </div>
        <div>
            <h3 class="font-label-sm text-label-sm text-secondary-fixed uppercase tracking-widest mb-6">Navigation</h3>
            <ul class="space-y-4 font-body-md text-body-md">
                <li class="opacity-80 hover:opacity-100 transition-all cursor-pointer">Home</li>
                <li class="opacity-80 hover:opacity-100 transition-all cursor-pointer">Legal Disclaimer</li>
                <li class="opacity-80 hover:opacity-100 transition-all cursor-pointer">Privacy Policy</li>
                <li class="opacity-80 hover:opacity-100 transition-all cursor-pointer">Careers</li>
            </ul>
        </div>
        <div>
            <h3 class="font-label-sm text-label-sm text-secondary-fixed uppercase tracking-widest mb-6">Connect</h3>
            <div class="flex gap-4 mb-6">
                <a class="w-10 h-10 border border-on-primary-container/20 flex items-center justify-center rounded-full hover:bg-on-primary-container hover:text-primary-container transition-all" href="#">
                    <span class="material-symbols-outlined text-sm">mail</span>
                </a>
                <a class="w-10 h-10 border border-on-primary-container/20 flex items-center justify-center rounded-full hover:bg-on-primary-container hover:text-primary-container transition-all" href="#">
                    <span class="material-symbols-outlined text-sm">call</span>
                </a>
            </div>
            <p class="font-label-sm text-label-sm opacity-60">
                Member, Supreme Court Bar Association.
            </p>
        </div>
    </div>
    <div class="border-t border-on-primary-container/10 py-8 px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto text-center">
        <p class="font-label-sm text-label-sm opacity-60">© 2024 Dr. Kabir &amp; Associates. All rights reserved. Professional Legal Consultancy.</p>
    </div>
</footer>
<script>
    // Simple scroll behavior for header
    window.addEventListener('scroll', () => {
        const header = document.querySelector('header');
        if (window.scrollY > 20) {
            header.classList.add('tonal-shadow');
            header.classList.remove('border-transparent');
        } else {
            header.classList.remove('tonal-shadow');
        }
    });

    // Hover micro-interaction for cards
    const cards = document.querySelectorAll('.service-card-crown');
    cards.forEach(card => {
        card.addEventListener('mouseenter', () => {
            card.style.transform = 'translateY(-8px)';
        });
        card.addEventListener('mouseleave', () => {
            card.style.transform = 'translateY(0)';
        });
    });
</script>
</body></html>