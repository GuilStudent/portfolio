<?php
$name = "Guillian";
$lastname = "Anyanwu";
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="Cinematic dark portfolio" />
  <title><?php echo $name ?> <?php echo $lastname ?> — Portfolio</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&family=Montserrat:wght@700&display=swap" rel="stylesheet">

  <style>
    :root{
      --bg-900:#060608;
      --bg-800:#0b0b0f;
      --card:#0f1720;
      --muted:#9aa4bf;
      --accent-1:#6a11cb;
      --accent-2:#2575fc;
      --accent-3:#00c6ff;
      --glass: rgba(255,255,255,0.03);
      --radius:16px;
      --container:1200px;
      --fw-sans:'Inter',system-ui;
      --fw-head:'Montserrat',system-ui;
      --transition:0.4s cubic-bezier(.2,.9,.2,1);
    }

    *{box-sizing:border-box;margin:0;padding:0}
    body{
      font-family:var(--fw-sans);
      background:
        radial-gradient(1000px 600px at 15% 10%, rgba(124,92,255,0.05), transparent),
        radial-gradient(1000px 500px at 85% 80%, rgba(0,209,255,0.04), transparent),
        var(--bg-900);
      color:#e6eef8;
      overflow-x:hidden;
      -webkit-font-smoothing:antialiased;
      position:relative;
    }

    /* --- BUBBLES BACKGROUND --- */
    .bubbles {
      position: fixed;
      inset: 0;
      overflow: hidden;
      z-index: 0;
      pointer-events: none;
    }

    .bubbles span {
      position: absolute;
      bottom: -120px;
      border-radius: 50%;
      background: radial-gradient(circle at 30% 30%, rgba(37,117,252,0.8), rgba(0,198,255,0.1));
      box-shadow: 0 0 12px rgba(0,198,255,0.4);
      animation: bubble 14s linear infinite, bubbleGlow 6s ease-in-out infinite;
      opacity: 0.5;
    }

    @keyframes bubble {
      0% { transform: translateY(0) scale(1); opacity: 0.3; }
      25% { opacity: 0.6; }
      50% { transform: translateY(-50vh) scale(1.2); opacity: 0.8; }
      75% { opacity: 0.4; }
      100% { transform: translateY(-110vh) scale(1); opacity: 0; }
    }

    @keyframes bubbleGlow {
      0%,100% { filter: blur(0px) brightness(1); }
      50% { filter: blur(2px) brightness(1.4); }
    }

    /* Random bubble sizes and timing */
    .bubbles span:nth-child(1){ left:10%; width:40px; height:40px; animation-delay:0s; animation-duration:12s;}
    .bubbles span:nth-child(2){ left:20%; width:25px; height:25px; animation-delay:2s; animation-duration:13s;}
    .bubbles span:nth-child(3){ left:35%; width:50px; height:50px; animation-delay:4s; animation-duration:15s;}
    .bubbles span:nth-child(4){ left:50%; width:30px; height:30px; animation-delay:1s; animation-duration:12s;}
    .bubbles span:nth-child(5){ left:65%; width:60px; height:60px; animation-delay:3s; animation-duration:16s;}
    .bubbles span:nth-child(6){ left:75%; width:20px; height:20px; animation-delay:5s; animation-duration:11s;}
    .bubbles span:nth-child(7){ left:85%; width:45px; height:45px; animation-delay:7s; animation-duration:14s;}
    .bubbles span:nth-child(8){ left:95%; width:35px; height:35px; animation-delay:9s; animation-duration:17s;}
    .bubbles span:nth-child(9){ left:5%; width:15px; height:15px; animation-delay:6s; animation-duration:13s;}
    .bubbles span:nth-child(10){ left:55%; width:70px; height:70px; animation-delay:8s; animation-duration:18s;}

    main{
      max-width:var(--container);
      margin:0 auto;
      padding:100px 24px 60px;
      position:relative;
      z-index:2;
    }

    /* Header */
    header{
      position:fixed;top:16px;left:0;right:0;z-index:100;
      display:flex;justify-content:center;
      padding:0 24px;pointer-events:none;
    }
    .nav-wrap{
      max-width:var(--container);width:100%;
      display:flex;align-items:center;justify-content:space-between;
      padding:10px 16px;border-radius:var(--radius);
      backdrop-filter:blur(8px);
      background:linear-gradient(180deg,rgba(255,255,255,0.04),rgba(255,255,255,0.02));
      border:1px solid rgba(255,255,255,0.06);
      pointer-events:auto;
      box-shadow:0 8px 24px rgba(0,0,0,0.4);
      transition:var(--transition);
    }
    .brand{display:flex;align-items:center;gap:12px;text-decoration:none;color:inherit}
    .logo{width:44px;height:44px;border-radius:12px;background:linear-gradient(135deg,var(--accent-1),var(--accent-2));display:flex;align-items:center;justify-content:center;font-weight:800;color:#0a0a0a}
    .brand h1{font-family:var(--fw-head);font-size:16px}
    nav.primary{display:flex;gap:14px;align-items:center}
    nav.primary a{
      color:var(--muted);text-decoration:none;font-weight:600;
      padding:8px 12px;border-radius:10px;transition:var(--transition);
    }
    nav.primary a:hover{color:#fff;background:rgba(255,255,255,0.04)}
    .cta{
      padding:9px 16px;border-radius:12px;
      background:linear-gradient(90deg,var(--accent-2),var(--accent-1));
      color:#0a0a0a;font-weight:800;border:none;cursor:pointer;
      box-shadow:0 0 12px rgba(124,92,255,0.4);
      transition:transform .25s;
    }
    .cta:hover{transform:translateY(-2px)}

    /* Hero Section */
    .hero{
      display:grid;grid-template-columns:1fr 520px;gap:28px;align-items:center;
      margin-top:60px;padding-top:80px;
    }
    @media(max-width:980px){.hero{grid-template-columns:1fr}}
    .hero-left{padding:12px}
    .kicker{display:inline-block;padding:8px 12px;border-radius:9999px;background:rgba(255,255,255,0.04);color:var(--muted);font-weight:700;margin-bottom:18px}
    .headline{font-family:var(--fw-head);font-size:clamp(40px,6vw,96px);font-weight:800;line-height:0.95;color:#fff;margin-bottom:14px;text-shadow:0 2px 30px rgba(124,92,255,0.15);}
    .sub{color:var(--muted);max-width:52ch;font-size:18px}
    .hero-ctas{display:flex;gap:12px;margin-top:22px}
    .btn-ghost{background:transparent;border:1px solid rgba(255,255,255,0.06);padding:10px 14px;border-radius:10px;color:var(--muted);cursor:pointer;transition:var(--transition)}
    .btn-ghost:hover{color:#fff;border-color:rgba(255,255,255,0.15)}

    /* Cube visual */
    .visual-wrap{display:flex;justify-content:center;align-items:center;height:300px;}
    .stage{width:420px;height:300px;perspective:1200px;position:relative;}
    .cube{width:200px;height:200px;position:absolute;left:50%;top:50%;transform-style:preserve-3d;transform:translate(-50%,-50%) rotateX(18deg) rotateY(-26deg);animation:float 6s ease-in-out infinite,spin 20s linear infinite;}
    .cube .face{position:absolute;width:200px;height:200px;border-radius:12px;box-shadow:0 18px 60px rgba(2,6,23,0.6);border:1px solid rgba(255,255,255,0.06);backdrop-filter:blur(6px);}
    .f1{transform:translateZ(100px);background:linear-gradient(135deg,var(--accent-1),var(--accent-2));}
    .f2{transform:rotateY(90deg) translateZ(100px);background:linear-gradient(135deg,var(--accent-2),var(--accent-3));}
    .f3{transform:rotateY(180deg) translateZ(100px);background:linear-gradient(135deg,var(--accent-3),var(--accent-1));}
    .f4{transform:rotateY(-90deg) translateZ(100px);background:linear-gradient(135deg,var(--accent-1),var(--accent-3));}
    .f5{transform:rotateX(90deg) translateZ(100px);background:linear-gradient(135deg,var(--accent-2),var(--accent-1));}
    .f6{transform:rotateX(-90deg) translateZ(100px);background:linear-gradient(135deg,var(--accent-3),var(--accent-2));}

    @keyframes float{0%,100%{transform:translate(-50%,-50%) rotateX(12deg) rotateY(-24deg);}50%{transform:translate(-50%,-46%) rotateX(16deg) rotateY(-30deg);}}
    @keyframes spin{0%{transform:translate(-50%,-50%) rotateX(0deg) rotateY(0deg);}100%{transform:translate(-50%,-50%) rotateX(360deg) rotateY(360deg);}}

    /* --- ABOUT SECTION (SIDE-BY-SIDE, SMALL IMAGE) --- */
    .about {
      margin-top: 60px;
      padding: 4rem 0;
      text-align: center;
      background: linear-gradient(180deg, rgba(255,255,255,0.03), transparent);
      border-radius: var(--radius);
      border: 1px solid rgba(255,255,255,0.05);
      box-shadow: 0 12px 40px rgba(0,0,0,0.45);
    }

    .about__grid {
      display: grid;
      gap: 2rem;
      align-items: center;
    }

    .about__text h3 {
      font-size: 2rem;
      margin-bottom: .5rem;
      color: #fff;
      font-family: var(--fw-head);
    }

    .about__text .muted {
      font-size: 1rem;
      color: #aaa;
    }

    .about__img {
      width: 100%;
      max-width: 300px;   /* ← SMALLER IMAGE */
      height: auto;
      border-radius: .75rem;
      box-shadow: 0 8px 20px rgba(0,0,0,.6);
      display: block;
      margin: 0 auto;
      transition: transform .6s ease, box-shadow .6s ease;
    }

    .about__img:hover {
      transform: scale(1.03);
      box-shadow: 0 16px 60px rgba(0,209,255,0.35);
    }

    @media (min-width: 768px) {
      .about__grid {
        grid-template-columns: 1fr 1fr;
        text-align: left;
      }
      .about__img { margin: 0; }
    }

    section.cards-grid { margin-top: 60px; }
    .cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 20px; margin-top: 20px; }
    .card {
      background: linear-gradient(180deg, rgba(255,255,255,0.03), rgba(255,255,255,0.01));
      border-radius: 12px;
      padding: 20px;
      border: 1px solid rgba(255,255,255,0.04);
      transition: transform .35s, box-shadow .35s;
      box-shadow: 0 6px 20px rgba(0,0,0,0.4);
    }
    .card:hover { transform: translateY(-4px); box-shadow: 0 12px 40px rgba(124,92,255,0.2); }
    .card h3 { margin-bottom: 10px; font-family: var(--fw-head); }
    .muted { color: var(--muted); }

    footer { text-align: center; color: var(--muted); margin-top: 60px; padding: 30px 0; border-top: 1px solid rgba(255,255,255,0.05); }

    /* --- SPLASH SCREEN --- */
    #splash {
      position: fixed;
      inset: 0;
      background: #000;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
      z-index: 9999;
      overflow: hidden;
      transition: opacity 1s ease, transform 1.2s ease, visibility 1s ease;
    }

    #splash.hide {
      opacity: 0;
      transform: translateY(-100%);
      visibility: hidden;
    }

    .splash-inner { text-align: center; }

    .splash-logo {
      font-size: 60px;
      font-weight: 900;
      color: #fff;
      opacity: 0;
      animation: fadeInLogo 1s forwards;
    }

    @keyframes fadeInLogo {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .splash-name {
      font-family: var(--fw-head);
      font-weight: 600;
      font-size: 24px;
      color: #fff;
      margin-top: 12px;
      overflow: hidden;
      white-space: nowrap;
      border-right: 3px solid #fff;
      width: 0;
      opacity: 1;
      animation: typingName 2.5s steps(35, end) forwards 1s, blinkCaret 0.8s step-end infinite 1s;
    }

    @keyframes typingName {
      from { width: 0; }
      to { width: 100%; }
    }

    @keyframes blinkCaret {
      0%, 100% { border-color: transparent; }
      50% { border-color: #fff; }
    }

    /* Center the entire about section */
.about .container {
  max-width: 1000px;
  margin: 0 auto;
  padding: 0 1rem;
}

/* Grid layout: side-by-side on desktop, stacked & centered on mobile */
.about__grid {
  display: grid;
  gap: 2rem;
  align-items: center;
  text-align: left;
}

@media (min-width: 768px) {
  .about__grid {
    grid-template-columns: 1fr auto; /* text takes space, image stays small */
    justify-items: start;
  }
}

/* Small, centered image */
.about__img-wrapper {
  display: flex;
  justify-content: center;   /* Centers image on mobile */
  align-items: center;
}

.about__img {
  width: 100%;
  max-width: 280px;          /* ← YOUR SMALL SIZE */
  height: auto;
  border-radius: 12px;
  box-shadow: 0 8px 20px rgba(0,0,0,.6);
  transition: transform .6s ease, box-shadow .6s ease;
  display: block;
}

.about__img:hover {
  transform: scale(1.05);
  box-shadow: 0 16px 60px rgba(0,209,255,0.35);
}

/* Optional: center text on mobile too */
@media (max-width: 767px) {
  .about__text {
    text-align: center;
  }
}
  </style>
</head>
<body>

  <!-- Floating Blue Bubbles -->
  <div class="bubbles">
    <span></span><span></span><span></span><span></span><span></span>
    <span></span><span></span><span></span><span></span><span></span>
  </div>

  <header>
    <div class="nav-wrap">
      <a class="brand" href="#hero" onclick="document.getElementById('hero').scrollIntoView({behavior:'smooth'}); return false;">
        <div class="logo">GA</div>
        <h1><?php echo $name ?> <?php echo $lastname ?></h1>
      </a>
      <nav class="primary">
        <a href="#projects" onclick="document.getElementById('projects').scrollIntoView({behavior:'smooth'}); return false;">Projects</a>
        <a href="#knowledge" onclick="document.getElementById('knowledge').scrollIntoView({behavior:'smooth'}); return false;">Knowledge</a>
        <a href="#about" onclick="document.getElementById('about').scrollIntoView({behavior:'smooth'}); return false;">About</a>
        <a href="#contact" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'}); return false;">Contact</a>
      </nav>
      <button class="cta" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'}); return false;">Contact</button>
    </div>
  </header>

  <main>
    <section id="hero" class="hero">
      <div class="hero-left">
        <div class="kicker">PORTFOLIO</div>
        <h2 class="headline">Back-end developer </h2>
        <p class="sub">Design and developments, back-end and front-end projects. 1 and a half year experience of Software development.</p>
        <div class="hero-ctas">
          <button class="cta" onclick="document.getElementById('projects').scrollIntoView({behavior:'smooth'})">View portfolio</button>
          <button class="cta" onclick="document.getElementById('contact').scrollIntoView({behavior:'smooth'})">Get in touch</button>
        </div>
      </div>
      <div class="visual-wrap" aria-hidden="true">
        <div class="stage">
          <div class="cube">
            <div class="face f1"></div><div class="face f2"></div><div class="face f3"></div>
            <div class="face f4"></div><div class="face f5"></div><div class="face f6"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT SECTION (SMALL IMAGE, SIDE-BY-SIDE) -->
    <section class="about" id="about">
      <div class="about__grid">

        <!-- TEXT -->
        <div class="about__text">
          <h3>About me</h3>
          <p class="muted">
            I’m a 19-year-old web developer from Almere am focused on improving my skills in building modern websites for my clients. 
            Coding is not just my profession it’s one of my hobbies. I also enjoy sports and going to the gym whenever I have time. 
            I strive to improve myself every day to become a successful web developer in the future. 
            I enjoy working from home, with headphones on, in a quiet environment where I can fully concentrate on my tasks.
          </p>
        </div>

        <!-- IMAGE (SMALL) -->
        <div class="about__img-wrapper">
          <img src="img/Guillian1.jpg" alt="Guillian – web developer" class="about__img">
        </div>

      </div>
    </section>

    <!-- Rest of your sections (unchanged) -->
    <section id="projects" class="cards-grid">
      <h3>My projects</h3>
      <div class="muted">Projects I made recently.</div>
      <div class="cards">
        <article class="card"><h3>Fullstack design</h3><p class="muted">A full-stack project is a software project that includes both the front-end and the back-end parts of an application.</p><br><img src="img/fullstack.png" width="350" height="300"><img src="img/fullstack1.png" width="350" height="300"></article>
        <article class="card"><h3>PHP project</h3><p class="muted">A PHP project I used it to make functions in the back-end for my website and to create requests to my websites database.</p><br><img src="img/phpPJ.png" width="350" height="300"><img src="img/login.png" width="350" height="300"></article>
        <article class="card"><h3>HTML and CSS</h3><p class="muted">A Project made with pure HTML and CSS including keyframes CSS, I build this website in my 1st year of software development.</p><br><img src="img/php.png" width="350" height="300"><img src="img/php1.png" width="350" height="300"></article>
      </div>
    </section>

    <section id="knowledge" class="cards-grid">
      <h3>Knowledge</h3>
      <div class="cards">
        <article class="card"><h3>PHP Systems</h3><p class="muted">PHP experience.</p><br><img src="https://pngimg.com/uploads/php/php_PNG35.png" width="350" height="300"></article>
        <article class="card"><h3>JS Systems</h3><p class="muted">JS experience</p><br><img src="https://freepngdesign.com/content/uploads/images/javascript-logo-7539.png" width="350" height="300"></article>
        <article class="card"><h3>HTML & CSS Systems</h3><p class="muted">HTML/CSS experience modern building.</p><br><img src="https://miro.medium.com/v2/1*lJ32Bl-lHWmNMUSiSq17gQ.png" width="350" height="300"></article>
      </div>
    </section>

    <section id="Extra" class="cards-grid">
      <h3>Extra</h3>
      <br>
      <p class="muted">I’m pretty experienced with PHP and i enjoy coding the back-end stuff for websites. I enjoy building and customizing sites, making them look and work exactly how I want. Right now, I’m busy working on websites for a brand and a few businesses.</p>
    </section>

    <section id="contact" class="cards-grid">
      <h3>Contact</h3>
      <br>
      <p class="muted">Prefer email? <a href="mailto:Guilliananyanwu@gmail.com">Guilliananyanwu@gmail.com</a>.</p>
      <form onsubmit="handleContact(event)" style="margin-top:12px;display:grid;grid-template-columns:1fr 1fr;gap:10px;max-width:720px">
        <input name="name" placeholder="Your name" required style="padding:12px;border-radius:10px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit">
        <input name="email" type="email" placeholder="Your Email" required style="padding:12px;border-radius:10px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit">
        <textarea name="message" placeholder="How can I help?" rows="5" style="grid-column:1 / -1;padding:12px;border-radius:10px;border:1px solid rgba(255,255,255,0.04);background:transparent;color:inherit" required></textarea>
        <div style="grid-column:1 / -1;display:flex;gap:12px;align-items:center">
          <button class="cta" type="submit">Send message</button>
          <div id="contact-feedback" class="muted"></div>
        </div>
      </form>
    </section>

    <!-- Splash Screen -->
    <div id="splash">
      <div class="splash-inner">
        <div class="splash-logo">GA</div>
        <h1 class="splash-name">Welcome to my portfolio</h1>
      </div>
    </div>

    <footer>
      © <span id="year"></span> Made by <?php echo $name ?> <?php echo $lastname ?> — Built with HTML & CSS.
    </footer>
  </main>

  <script>
    function handleContact(e){
      e.preventDefault();
      const f = e.target, fb = document.getElementById('contact-feedback');
      fb.textContent = 'Sending…';
      setTimeout(() => {
        fb.textContent = 'Thanks — message sent!';
        f.reset();
      }, 900);
    }

    document.getElementById('year').textContent = new Date().getFullYear();

    window.addEventListener('load', () => {
      const splash = document.getElementById('splash');
      const typingDuration = 2500;
      const delayAfter = 1000;

      setTimeout(() => {
        splash.classList.add('hide');
      }, typingDuration + delayAfter + 1000);
    });
  </script>
</body>
</html>