<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Gayatri Dewi</title>
<meta name="description" content="Portofolio Gayatri Dewi — Master of Ceremony, Presenter &amp; Content Creator.">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,300;0,9..144,500;0,9..144,600;1,9..144,400;1,9..144,500&family=Work+Sans:wght@400;500;600&display=swap" rel="stylesheet">

<style>
  /* ============================================================
     TALENT PORTFOLIO — cinematic dark treatment, rose-gold palette.
     ============================================================ */

  :root{
    --stage:        #17100f;   /* near-black, warm rose undertone — floor of the stage */
    --stage-raised: #211715;   /* raised panel / card ground */
    --stage-line:   #33221f;   /* hairline / border on dark */
    --curtain:      #4a2430;   /* deep wine — secondary glow, used sparingly */
    --curtain-soft: #6e3547;
    --film:         #f5ece6;   /* warm ivory — primary text, like a film print */
    --film-dim:     #c2ada6;   /* muted ivory-rose — secondary text */
    --film-faint:   #8a726c;   /* tertiary / disabled text */
    --brass:        #dba17c;   /* rose-gold spotlight — primary accent */
    --brass-soft:   #a8735a;   /* dimmed rose-gold, borders */
    --brass-glow:   rgba(219,161,124,0.20);
    --accent-1:     #8a4a34;   /* deep copper — gradient stop 1 */
    --accent-2:     #dba17c;   /* rose gold — gradient stop 2 */
    --accent-3:     #f6ddc4;   /* champagne — gradient stop 3 */
    --accent-gradient:      linear-gradient(135deg, var(--accent-1) 0%, var(--accent-2) 55%, var(--accent-3) 100%);
    --accent-gradient-soft: linear-gradient(135deg, rgba(138,74,52,.4), rgba(219,161,124,.28) 55%, rgba(246,221,196,.22));
    --line:         rgba(245,236,230,0.12);
    --line-soft:    rgba(245,236,230,0.07);

    --font-display: 'Fraunces', 'Iowan Old Style', 'Palatino Linotype', serif;
    --font-body:    'Work Sans', -apple-system, 'Segoe UI', sans-serif;
    --font-mono:    'Work Sans', -apple-system, 'Segoe UI', sans-serif;

    --wrap: 1180px;
  }

  *{ box-sizing:border-box; }
  html{ scroll-behavior:smooth; }
  @media (prefers-reduced-motion: reduce){ html{ scroll-behavior:auto; } }

  body{
    margin:0;
    background:var(--stage);
    color:var(--film);
    font-family:var(--font-body);
    font-size:16px;
    line-height:1.6;
    -webkit-font-smoothing:antialiased;
    overflow-x:hidden;
  }

  img,svg{ display:block; max-width:100%; }
  a{ color:inherit; }
  h1,h2,h3,h4{ font-family:var(--font-display); font-weight:600; margin:0; text-wrap:balance; }
  p{ margin:0; }
  ul{ margin:0; padding:0; list-style:none; }
  button{ font-family:inherit; cursor:pointer; }

  .wrap{ max-width:var(--wrap); margin:0 auto; padding:0 clamp(20px,5vw,64px); }

  /* ---------- film-grain overlay ---------- */
  .grain{
    position:fixed; inset:0; z-index:500; pointer-events:none;
    opacity:.05; mix-blend-mode:overlay;
    background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='2' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
  }

  /* ---------- sprocket strip ---------- */
  .sprockets{
    height:14px;
    background-image:
      repeating-radial-gradient(circle at 10px 7px, var(--stage) 0 3.2px, transparent 3.3px 20px);
    background-color:var(--stage-line);
    background-size:20px 14px;
    opacity:.6;
  }

  /* ---------- nav ---------- */
  header.nav{
    position:sticky; top:0; z-index:400;
    background:rgba(23,16,15,.86);
    backdrop-filter:blur(10px) saturate(1.1);
    border-bottom:1px solid var(--line-soft);
    transition:border-color .3s ease, background .3s ease;
  }
  header.nav.scrolled{ background:rgba(23,16,15,.97); border-color:var(--line); }
  .nav-inner{
    display:flex; align-items:center; justify-content:space-between;
    padding:16px clamp(20px,5vw,64px);
    max-width:var(--wrap); margin:0 auto;
  }
  .mark{
    font-family:var(--font-display); font-style:italic; font-weight:500;
    font-size:19px; letter-spacing:.01em; color:var(--film);
    display:flex; align-items:baseline; gap:8px;
  }
  .mark small{ font-family:var(--font-mono); font-style:normal; font-size:10px; color:var(--brass); letter-spacing:.12em; }

  .nav-links{ display:flex; align-items:center; gap:30px; }
  .nav-links a{
    font-family:var(--font-mono); font-size:11px; letter-spacing:.09em; text-transform:uppercase;
    color:var(--film-dim); text-decoration:none; position:relative; padding:4px 0;
  }
  .nav-links a:hover{ color:var(--brass); }
  .nav-links a:focus-visible, .lang-btn:focus-visible, .menu-btn:focus-visible, .play-btn:focus-visible{
    outline:1px solid var(--brass); outline-offset:3px;
  }

  .lang-btn{
    font-family:var(--font-mono); font-size:11px; letter-spacing:.08em;
    background:transparent; border:1px solid var(--brass-soft); color:var(--brass);
    border-radius:999px; padding:7px 14px; display:flex; align-items:center; gap:7px;
  }
  .lang-btn:hover{ background:var(--brass-glow); }
  .lang-btn .dot{ width:5px; height:5px; border-radius:50%; background:var(--brass); }

  .menu-btn{ display:none; background:none; border:none; color:var(--film); padding:6px; }
  .menu-btn svg{ width:22px; height:22px; }

  @media (max-width:860px){
    .nav-links{
      position:fixed; inset:60px 0 auto 0; flex-direction:column; align-items:flex-start; gap:0;
      background:var(--stage-raised); border-bottom:1px solid var(--line);
      padding:8px clamp(20px,5vw,64px) 20px; transform:translateY(-8px); opacity:0; pointer-events:none;
      transition:opacity .22s ease, transform .22s ease;
    }
    .nav-links.open{ opacity:1; transform:translateY(0); pointer-events:auto; }
    .nav-links a{ padding:12px 0; width:100%; border-bottom:1px solid var(--line-soft); }
    .menu-btn{ display:block; }
  }

  /* ---------- section scaffolding ---------- */
  section{ position:relative; padding:clamp(72px,10vw,128px) 0; }
  .act-label{
    font-family:var(--font-mono); font-size:11px; letter-spacing:.16em; text-transform:uppercase;
    color:var(--brass); margin-bottom:14px; display:flex; align-items:center; gap:10px;
  }
  .act-label::before{ content:''; width:22px; height:1px; background:var(--brass-soft); }
  .sec-title{ font-size:clamp(30px,4vw,46px); font-weight:600; margin-bottom:20px; }
  .sec-title em{ font-style:italic; font-weight:400; color:var(--brass); }
  .sec-intro{ max-width:62ch; color:var(--film-dim); font-size:16px; }

  .reveal{ opacity:0; transform:translateY(22px); transition:opacity .7s ease, transform .7s ease; }
  .reveal.in{ opacity:1; transform:none; }
  @media (prefers-reduced-motion: reduce){ .reveal{ opacity:1; transform:none; transition:none; } }

  /* ================= HERO ================= */
  .hero{
    min-height:92vh; display:flex; align-items:center; position:relative;
    padding:120px 0 80px;
    background:
      radial-gradient(ellipse 60% 55% at 50% 28%, var(--brass-glow), transparent 70%),
      radial-gradient(ellipse 90% 70% at 50% 100%, rgba(74,36,48,.35), transparent 60%),
      var(--stage);
    overflow:hidden;
  }
  .hero::after{
    content:''; position:absolute; inset:0;
    background:linear-gradient(180deg, transparent 60%, var(--stage) 100%);
    pointer-events:none;
  }
  .hero-grid{ position:relative; z-index:2; display:grid; grid-template-columns:1.08fr .92fr; gap:clamp(30px,5vw,64px); align-items:center; }
  @media (max-width:900px){ .hero-grid{ grid-template-columns:1fr; text-align:center; } }
  .hero-inner{ text-align:left; }
  @media (max-width:900px){ .hero-inner{ text-align:center; } }

  @keyframes hero-in{ from{ opacity:0; transform:translateY(18px); } to{ opacity:1; transform:none; } }
  .hero-eyebrow, .hero h1, .hero-sub, .hero-slot, .hero-photo{
    animation:hero-in .8s cubic-bezier(.2,.7,.2,1) both;
  }
  .hero-eyebrow{ animation-delay:2.25s; }
  .hero-sub{ animation-delay:2.55s; }
  .hero-slot{ animation-delay:2.7s; }
  .hero-photo{ animation-delay:2.1s; }
  @media (prefers-reduced-motion: reduce){
    .hero-eyebrow, .hero h1, .hero-sub, .hero-slot, .hero-photo{ animation:none; }
  }

  .hero-eyebrow{
    font-family:var(--font-mono); font-size:12px; letter-spacing:.2em; text-transform:uppercase;
    color:var(--brass); margin-bottom:26px;
  }
  .hero h1{
    font-size:clamp(40px,6.4vw,84px); line-height:1.02; letter-spacing:-.01em;
    font-weight:600;
    background:var(--accent-gradient);
    background-size:130% 130%;
    -webkit-background-clip:text; background-clip:text; color:transparent;
    animation:hero-in .8s cubic-bezier(.2,.7,.2,1) 2.4s both, hero-shift 9s ease-in-out 3.3s infinite;
  }
  @keyframes hero-shift{ 0%,100%{ background-position:0% 40%; } 50%{ background-position:100% 60%; } }
  @media (prefers-reduced-motion: reduce){ .hero h1{ animation:none; } }
  .hero-sub{
    font-family:var(--font-display); font-style:italic; font-weight:400;
    font-size:clamp(17px,2.4vw,23px); color:var(--film-dim); margin-top:26px;
  }
  .hero-slot{
    display:inline-flex; align-items:center; gap:9px; margin-top:30px;
    font-family:var(--font-mono); font-size:11px; letter-spacing:.08em; color:var(--film-faint);
    border:1px dashed var(--stage-line); border-radius:999px; padding:8px 16px;
  }
  .hero-slot svg{ width:13px; height:13px; opacity:.8; }
  .hero-photo{ aspect-ratio:4/5; max-width:440px; width:100%; margin:0 auto; }

  /* touch devices: no hover, so give tap feedback + a self-animating glow instead */
  @media (hover:none){
    .frame, .play-btn, .platform, .lang-btn{ transition:transform .15s ease; }
    .frame:active, .play-btn:active, .platform:active, .lang-btn:active{ transform:scale(.96); }
    .hero-spot{
      opacity:1; animation:roam 7s ease-in-out infinite;
    }
    @keyframes roam{
      0%,100%{ left:30%; top:35%; }
      50%{ left:70%; top:55%; }
    }
  }
  @media (hover:none) and (prefers-reduced-motion: reduce){
    .hero-spot{ animation:none; opacity:.6; }
  }
  @media (max-width:900px){ .hero-photo{ max-width:300px; order:-1; } }
  .hero-scroll{
    position:absolute; bottom:26px; left:50%; transform:translateX(-50%);
    display:flex; flex-direction:column; align-items:center; gap:8px;
    font-family:var(--font-mono); font-size:10px; letter-spacing:.14em; color:var(--film-faint);
  }
  .hero-scroll .stem{ width:1px; height:34px; background:linear-gradient(var(--brass-soft), transparent); animation:stem 2.2s ease-in-out infinite; }
  @keyframes stem{ 0%,100%{ opacity:.3 } 50%{ opacity:1 } }
  @media (prefers-reduced-motion: reduce){ .hero-scroll .stem{ animation:none; opacity:.6; } }

  /* ================= PHOTO FRAMES ================= */
  .frame{
    position:relative; border-radius:2px; overflow:hidden;
    background:
      linear-gradient(155deg, var(--stage-raised) 0%, #251a17 55%, var(--stage-raised) 100%);
    border:1px solid var(--stage-line);
  }
  .frame::before{
    content:''; position:absolute; inset:0;
    background:
      repeating-linear-gradient(115deg, rgba(245,236,230,.035) 0 2px, transparent 2px 5px);
  }
  .frame-tag{
    position:absolute; left:10px; bottom:10px; z-index:2;
    font-family:var(--font-mono); font-size:10px; letter-spacing:.08em; text-transform:uppercase;
    color:var(--film-faint); background:rgba(23,16,15,.65); padding:4px 8px; border-radius:2px;
    border:1px solid var(--line-soft);
  }

  /* photo placeholder: rose-gold monogram standing in for a real photo */
  .photo-placeholder{ display:flex; align-items:center; justify-content:center; }
  .photo-mono{
    position:relative; z-index:1;
    font-family:var(--font-display); font-style:italic; font-weight:500;
    font-size:clamp(2.25rem, 11vw, 4.5rem);
    background:var(--accent-gradient);
    -webkit-background-clip:text; background-clip:text; color:transparent;
    opacity:.85;
  }
  .gallery .photo-mono{ font-size:clamp(1.5rem, 6vw, 2.5rem); }

  /* ================= PROFILE / ABOUT ================= */
  .profile{ display:grid; grid-template-columns:.85fr 1.15fr; gap:clamp(32px,6vw,80px); align-items:start; }
  @media (max-width:820px){ .profile{ grid-template-columns:1fr; } }
  .portrait{ aspect-ratio:3/4; }
  .bio p{ color:var(--film-dim); font-size:16.5px; max-width:58ch; }
  .bio p + p{ margin-top:16px; }

  .stat-sheet{
    margin-top:34px; border-top:1px solid var(--line); padding-top:22px;
    display:grid; grid-template-columns:1fr 1fr; gap:18px 28px;
  }
  @media (max-width:520px){ .stat-sheet{ grid-template-columns:1fr; } }
  .stat dt{
    font-family:var(--font-mono); font-size:10.5px; letter-spacing:.1em; text-transform:uppercase;
    color:var(--brass-soft); margin-bottom:5px;
  }
  .stat dd{ margin:0; font-size:15px; color:var(--film); }

  /* ================= FILMOGRAFI ================= */
  .credits{ border-top:1px solid var(--line); }
  .credit-row{
    display:grid; grid-template-columns:1.1fr 1.6fr .55fr 1.1fr .9fr;
    gap:18px; align-items:center; padding:20px 0; border-bottom:1px solid var(--line-soft);
    font-family:var(--font-mono); font-size:13.5px;
  }
  .credit-row.head{ color:var(--brass-soft); font-size:10.5px; letter-spacing:.1em; text-transform:uppercase; padding-bottom:14px; }
  @media (max-width:760px){
    .credit-row{ grid-template-columns:1fr 1fr; grid-template-areas:"role role" "title tag" "year prod"; row-gap:6px; }
    .credit-row.head{ display:none; }
    .c-role{ grid-area:role; } .c-title{ grid-area:title; } .c-tag{ grid-area:tag; text-align:right; }
    .c-year{ grid-area:year; } .c-prod{ grid-area:prod; text-align:right; }
  }
  .c-role{ color:var(--film-dim); }
  .c-title{ color:var(--film); font-family:var(--font-display); font-style:italic; font-size:16px; }
  .c-year{ color:var(--film-dim); font-variant-numeric:tabular-nums; }
  .c-prod{ color:var(--film-faint); }
  .c-tag{
    justify-self:start; font-size:10px; letter-spacing:.06em; text-transform:uppercase;
    color:var(--brass); border-radius:999px; padding:4px 10px; white-space:nowrap;
    border:1px solid transparent;
    background:
      linear-gradient(var(--stage-raised), var(--stage-raised)) padding-box,
      var(--accent-gradient-soft) border-box;
  }

  /* ================= MARQUEE / PRESS ================= */
  .marquee-wrap{
    border-top:1px solid var(--line); border-bottom:1px solid var(--line);
    background:var(--stage-raised); padding:22px 0; overflow:hidden;
  }
  .marquee-cap{
    font-family:var(--font-mono); font-size:10px; letter-spacing:.12em; text-transform:uppercase;
    color:var(--film-faint); text-align:center; margin-bottom:14px;
  }
  .marquee{ display:flex; width:max-content; animation:scroll 32s linear infinite; }
  @media (prefers-reduced-motion: reduce){ .marquee{ animation:none; } }
  @keyframes scroll{ from{ transform:translateX(0); } to{ transform:translateX(-50%); } }
  .marquee span{
    font-family:var(--font-display); font-style:italic; font-size:19px; color:var(--film-dim);
    padding:0 34px; white-space:nowrap; border-right:1px solid var(--line);
  }
  .marquee span b{ color:var(--brass); font-weight:500; font-style:normal; }

  /* ================= REPRESENTATION ================= */
  .rep-line{ display:grid; grid-template-columns:.55fr 1.9fr; gap:20px; padding:26px 0; border-bottom:1px solid var(--line-soft); }
  .rep-line:first-of-type{ border-top:1px solid var(--line); }
  @media (max-width:640px){ .rep-line{ grid-template-columns:1fr; gap:8px; } }
  .rep-years{ font-family:var(--font-mono); font-size:13px; color:var(--brass); letter-spacing:.04em; }
  .rep-agency{ font-family:var(--font-display); font-size:22px; font-style:italic; color:var(--film); margin-bottom:6px; }
  .rep-scope{ color:var(--film-dim); font-size:14.5px; }
  .rep-scope b{ color:var(--film-faint); font-weight:600; }

  /* ================= CHAPTER BREAK ================= */
  .chapter-break{ position:relative; min-height:56vh; display:flex; align-items:center; justify-content:center; overflow:hidden; padding:110px 0; }
  .chapter-break-bg{
    position:absolute; inset:0; transform:scale(1.06);
    background:
      radial-gradient(ellipse 80% 70% at 30% 20%, rgba(219,161,124,.22), transparent 60%),
      radial-gradient(ellipse 70% 60% at 80% 80%, rgba(74,36,48,.5), transparent 65%),
      var(--stage);
  }
  .chapter-break-scrim{
    position:absolute; inset:0;
    background:
      linear-gradient(180deg, var(--stage) 0%, rgba(23,16,15,.5) 20%, rgba(23,16,15,.74) 82%, var(--stage) 100%);
  }
  .chapter-break-inner{ position:relative; z-index:2; text-align:center; max-width:760px; margin:0 auto; }
  .chapter-quote{
    font-family:var(--font-display); font-style:italic; font-weight:400;
    font-size:clamp(24px,3.6vw,42px); line-height:1.3; color:var(--film);
  }
  .chapter-cite{
    margin-top:26px; display:inline-flex; align-items:center; gap:10px;
    font-family:var(--font-mono); font-size:11px; letter-spacing:.16em; text-transform:uppercase; color:var(--brass);
  }
  .chapter-cite::before{ content:''; width:22px; height:1px; background:var(--brass-soft); }

  /* ================= DIGITAL / SMS ================= */
  .digital-grid{ display:grid; grid-template-columns:1fr 1fr; gap:clamp(28px,5vw,64px); }
  @media (max-width:820px){ .digital-grid{ grid-template-columns:1fr; } }
  .role-card{
    background:var(--stage-raised); border:1px solid var(--stage-line); border-radius:4px; padding:clamp(24px,4vw,36px);
  }
  .role-card h3{ font-size:24px; margin-bottom:4px; }
  .role-card .role-sub{ font-family:var(--font-mono); font-size:12px; color:var(--film-faint); letter-spacing:.03em; }
  .chip-row{ display:flex; flex-wrap:wrap; gap:9px; margin-top:22px; }
  .chip{
    font-family:var(--font-mono); font-size:11px; letter-spacing:.03em; color:var(--film-dim);
    border:1px solid var(--line); border-radius:999px; padding:7px 13px;
  }
  .platform-row{ display:flex; gap:12px; margin-top:24px; }
  .platform{
    width:40px; height:40px; border-radius:50%; border:1px solid var(--brass-soft);
    display:flex; align-items:center; justify-content:center;
    color:var(--brass); text-decoration:none;
    transition:background .2s ease, border-color .2s ease, transform .2s ease;
  }
  .platform svg{ width:18px; height:18px; }
  .platform:hover{ background:var(--brass-glow); border-color:var(--brass); transform:translateY(-2px); }
  .metric-list{ display:flex; flex-direction:column; gap:0; }
  .metric{ display:flex; align-items:baseline; justify-content:space-between; padding:18px 0; border-bottom:1px solid var(--line-soft); }
  .metric:first-child{ border-top:1px solid var(--line-soft); }
  .metric-label{ font-family:var(--font-mono); font-size:12px; letter-spacing:.05em; color:var(--film-dim); text-transform:uppercase; }
  .metric-value{
    font-family:var(--font-display); font-size:26px; font-style:italic;
    background:var(--accent-gradient); -webkit-background-clip:text; background-clip:text; color:transparent;
  }
  .metric-note{ font-family:var(--font-mono); font-size:10.5px; color:var(--film-faint); margin-top:14px; }

  /* ================= REEL ================= */
  .reel-frame{
    aspect-ratio:16/9; max-width:900px; margin:0 auto;
    display:flex; align-items:center; justify-content:center;
    background:
      radial-gradient(ellipse 70% 70% at 50% 40%, rgba(219,161,124,.28), transparent 65%),
      linear-gradient(155deg, var(--stage-raised) 0%, #251a17 55%, var(--stage-raised) 100%);
  }
  .play-btn{
    width:78px; height:78px; border-radius:50%; position:relative;
    background:
      linear-gradient(rgba(23,16,15,.72), rgba(23,16,15,.72)) padding-box,
      var(--accent-gradient) border-box;
    border:2px solid transparent;
    display:flex; align-items:center; justify-content:center;
    box-shadow:0 0 0 0 var(--brass-glow);
    transition:transform .18s ease, box-shadow .35s ease;
  }
  .play-btn:hover{ box-shadow:0 0 26px 4px var(--brass-glow); }
  @media (hover:none){ .play-btn:hover{ transform:scale(1.07); } }
  .play-btn svg{ width:22px; height:22px; margin-left:3px; }
  .reel-cap{ text-align:center; margin-top:18px; font-family:var(--font-mono); font-size:12px; color:var(--film-faint); letter-spacing:.04em; }

  /* ================= GALLERY ================= */
  .gallery{ display:grid; grid-template-columns:repeat(4,1fr); grid-auto-rows:130px; grid-auto-flow:dense; gap:14px; }
  @media (max-width:760px){ .gallery{ grid-template-columns:repeat(2,1fr); grid-auto-rows:140px; } }
  .gallery .g-big{ grid-column:span 2; grid-row:span 2; }
  .gallery .g-tall{ grid-row:span 2; }
  .gallery .g-wide{ grid-column:span 2; }

  /* ================= CONTACT ================= */
  .contact{
    background:
      radial-gradient(ellipse 70% 60% at 50% 0%, var(--curtain), transparent 65%),
      var(--stage);
    text-align:center;
  }
  .contact .sec-title{ margin:0 auto 18px; max-width:16ch; }
  .contact .sec-intro{ margin:0 auto 40px; text-align:center; }
  .contact-grid{
    display:grid; grid-template-columns:repeat(4,1fr); gap:1px; background:var(--line);
    border:1px solid var(--line); max-width:900px; margin:0 auto;
  }
  @media (max-width:760px){ .contact-grid{ grid-template-columns:repeat(2,1fr); } }
  @media (max-width:480px){ .contact-grid{ grid-template-columns:1fr; } }
  .contact-cell{ background:var(--stage); padding:28px 20px; }
  .contact-cell dt{ font-family:var(--font-mono); font-size:10px; letter-spacing:.1em; text-transform:uppercase; color:var(--brass-soft); margin-bottom:8px; }
  .contact-cell dd{ margin:0; font-family:var(--font-display); font-style:italic; font-size:16px; color:var(--film-dim); }
  .social-row{ display:flex; justify-content:center; gap:14px; margin-top:44px; }

  footer{ border-top:1px solid var(--line); padding:26px 0; }
  .footer-inner{ display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:10px;
    font-family:var(--font-mono); font-size:10.5px; letter-spacing:.04em; color:var(--film-faint); }

  /* ================= PRELOADER — iris wipe ================= */
  .preloader{
    position:fixed; inset:0; z-index:900; background:var(--stage);
    display:flex; align-items:center; justify-content:center;
    clip-path:circle(150% at 50% 50%);
    transition:clip-path 1.05s cubic-bezier(.76,0,.24,1);
  }
  .preloader.closing{ clip-path:circle(0% at 50% 50%); }
  .preloader-mark{ font-family:var(--font-display); font-style:italic; font-size:22px; color:var(--film); margin-bottom:16px; letter-spacing:.02em; text-align:center; }
  .preloader-bar{ width:160px; height:1px; background:var(--stage-line); margin:0 auto; overflow:hidden; }
  .preloader-bar span{ display:block; height:100%; width:0%; background:var(--accent-gradient); animation:preload-fill 1.1s cubic-bezier(.6,0,.2,1) forwards; }
  @keyframes preload-fill{ to{ width:100%; } }
  .preloader-cap{ margin-top:14px; font-family:var(--font-mono); font-size:10px; letter-spacing:.2em; text-transform:uppercase; color:var(--film-faint); text-align:center; }
  body.preloading{ overflow:hidden; height:100vh; }
  @media (prefers-reduced-motion: reduce){
    .preloader{ transition:none; }
    .preloader-bar span{ animation:none; width:100%; }
  }

  /* ================= SCROLL PROGRESS ================= */
  .scroll-progress{
    position:fixed; top:0; left:0; height:3px; width:100%; z-index:600;
    background:var(--accent-gradient); transform:scaleX(0); transform-origin:0 50%;
    will-change:transform;
  }

  /* ================= CUSTOM CURSOR ================= */
  .cursor-ring, .cursor-dot{
    position:fixed; top:0; left:0; pointer-events:none; z-index:800;
    border-radius:50%; transform:translate(-50%,-50%);
  }
  .cursor-ring{
    width:34px; height:34px; border:1px solid var(--brass);
    transition:width .25s ease, height .25s ease, background .25s ease, border-color .25s ease;
  }
  .cursor-dot{ width:5px; height:5px; background:var(--brass); }
  .cursor-ring.hover{ width:60px; height:60px; background:var(--brass-glow); border-color:transparent; }
  html.custom-cursor, html.custom-cursor a, html.custom-cursor button{ cursor:none; }
  @media (hover:none), (pointer:coarse){ .cursor-ring, .cursor-dot{ display:none !important; } }

  /* ================= HERO AMBIENT MOTION ================= */
  .hero-blobs{ position:absolute; inset:0; z-index:0; overflow:hidden; pointer-events:none; }
  .hero-blob{ position:absolute; border-radius:50%; filter:blur(70px); background:var(--accent-gradient); }
  .hero-blob.b1{ width:420px; height:420px; top:-140px; left:6%; opacity:.32; animation:drift1 22s ease-in-out infinite; }
  .hero-blob.b2{ width:340px; height:340px; bottom:-130px; right:6%; opacity:.2; animation:drift2 27s ease-in-out infinite; }
  @keyframes drift1{ 0%,100%{ transform:translate(0,0) scale(1); } 50%{ transform:translate(40px,30px) scale(1.12); } }
  @keyframes drift2{ 0%,100%{ transform:translate(0,0) scale(1); } 50%{ transform:translate(-30px,-24px) scale(1.08); } }
  .hero-spot{
    position:absolute; width:520px; height:520px; border-radius:50%;
    background:radial-gradient(circle, var(--brass-glow), transparent 70%);
    transform:translate(-50%,-50%); left:50%; top:40%; z-index:0; pointer-events:none;
    opacity:0; transition:opacity .4s ease;
  }
  .hero:hover .hero-spot{ opacity:1; }
  @media (prefers-reduced-motion: reduce){ .hero-blob{ animation:none; } .hero-spot{ display:none; } }
  @media (hover:none){ .hero-spot{ display:none; } }

  /* diagonal wave lines, drifting behind the hero content */
  .hero-wave{ position:absolute; inset:0; z-index:0; pointer-events:none; }
  .hero-wave-layer{ position:absolute; top:0; left:0; width:100%; height:100%; }
  .hero-wave-path{ fill:none; stroke:var(--brass); stroke-linecap:round; }
  .hero-wave-layer.l1{ animation:hero-wave-drift 12s ease-in-out infinite; }
  .hero-wave-layer.l2{ animation:hero-wave-drift-alt 16s ease-in-out infinite; }
  .hero-wave-layer.l3{ animation:hero-wave-drift 22s ease-in-out infinite; }
  @keyframes hero-wave-drift{
    0%,100%{ transform:translate(0,0); }
    50%{ transform:translate(-14px,10px); }
  }
  @keyframes hero-wave-drift-alt{
    0%,100%{ transform:translate(0,0); }
    50%{ transform:translate(10px,-8px); }
  }
  @media (max-width:640px){ .hero-wave-layer.l3{ display:none; } }
  @media (prefers-reduced-motion: reduce){ .hero-wave{ display:none; } }

  /* ================= TITLE UNDERLINE WIPE ================= */
  .sec-title{ position:relative; display:inline-block; }
  .sec-title::after{
    content:''; position:absolute; left:0; bottom:-10px; height:2px; width:100%;
    background:var(--accent-gradient); transform:scaleX(0); transform-origin:0 50%;
    transition:transform .8s cubic-bezier(.6,0,.2,1) .15s;
  }
  .sec-title.in::after{ transform:scaleX(1); }

  /* ================= FRAME REVEAL WIPE ================= */
  .frame::after{
    content:''; position:absolute; inset:0; z-index:2;
    background:var(--stage-raised);
    transform-origin:left center; transform:scaleX(1);
    transition:transform .9s cubic-bezier(.7,0,.15,1);
    transition-delay:calc(var(--i,0) * 90ms);
  }
  .frame.in::after{ transform:scaleX(0); }
  .frame.reveal{ opacity:1; transform:none; }
  @media (prefers-reduced-motion: reduce){ .frame::after{ display:none; } }

  /* ================= NAV SCROLLSPY ================= */
  .nav-links a.active{ color:var(--brass); }
  .nav-links a.active::after{
    content:''; position:absolute; left:0; right:0; bottom:-5px; height:1px;
    background:var(--accent-gradient);
  }
</style>

<div class="grain" aria-hidden="true"></div>
<div class="scroll-progress" id="scrollProgress" aria-hidden="true"></div>
<div class="cursor-ring" id="cursorRing" aria-hidden="true"></div>
<div class="cursor-dot" id="cursorDot" aria-hidden="true"></div>

<div class="preloader" id="preloader" role="status" aria-label="Loading">
  <div>
    <div class="preloader-mark">Gayatri Dewi</div>
    <div class="preloader-bar"><span></span></div>
    <div class="preloader-cap" data-id="MEMBUKA TIRAI" data-en="OPENING CURTAIN">MEMBUKA TIRAI</div>
  </div>
</div>

<header class="nav" id="siteNav">
  <div class="nav-inner">
    <div class="mark">Gayatri Dewi <small>TALENT / SMS</small></div>
    <nav class="nav-links" id="navLinks">
      <a href="#profil" data-id="Profil" data-en="Profile">Profil</a>
      <a href="#filmografi" data-id="Filmografi" data-en="Filmography">Filmografi</a>
      <a href="#representasi" data-id="Representasi" data-en="Representation">Representasi</a>
      <a href="#digital" data-id="Digital" data-en="Digital">Digital</a>
      <a href="#reel" data-id="Reel" data-en="Reel">Reel</a>
      <a href="#galeri" data-id="Galeri" data-en="Gallery">Galeri</a>
      <a href="#kontak" data-id="Kontak" data-en="Contact">Kontak</a>
    </nav>
    <div style="display:flex; align-items:center; gap:10px;">
      <button class="lang-btn" id="langBtn" type="button" aria-label="Switch language">
        <span class="dot"></span><span id="langLabel">EN</span>
      </button>
      <button class="menu-btn" id="menuBtn" type="button" aria-label="Menu" aria-expanded="false">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M3 6h18M3 12h18M3 18h18"/></svg>
      </button>
    </div>
  </div>
</header>

<main>

  <!-- ================= HERO ================= -->
  <section class="hero">
    <div class="hero-blobs" aria-hidden="true">
      <div class="hero-blob b1"></div>
      <div class="hero-blob b2"></div>
    </div>
    <div class="hero-spot" aria-hidden="true"></div>
    <div class="hero-wave" aria-hidden="true">
      <svg class="hero-wave-layer l1" viewBox="0 0 1000 460" preserveAspectRatio="none">
        <path class="hero-wave-path" stroke-width="1.5" opacity="0.65"
          d="M980,20 C860,70 900,150 760,190 C610,232 660,300 500,330 C350,358 380,410 220,430 C140,440 90,448 20,452">
          <animate attributeName="d" dur="8s" repeatCount="indefinite" values="
            M980,20 C860,70 900,150 760,190 C610,232 660,300 500,330 C350,358 380,410 220,430 C140,440 90,448 20,452;
            M980,20 C890,50 870,170 730,205 C580,242 690,280 470,345 C320,372 410,395 190,437 C125,444 85,448 20,452;
            M980,20 C860,70 900,150 760,190 C610,232 660,300 500,330 C350,358 380,410 220,430 C140,440 90,448 20,452
          "/>
        </path>
      </svg>
      <svg class="hero-wave-layer l2" viewBox="0 0 1000 460" preserveAspectRatio="none">
        <path class="hero-wave-path" stroke-width="1.1" opacity="0.4"
          d="M1000,70 C880,110 930,190 780,225 C630,260 670,320 510,350 C360,378 390,420 230,438 C150,446 100,450 30,454">
          <animate attributeName="d" dur="11s" repeatCount="indefinite" values="
            M1000,70 C880,110 930,190 780,225 C630,260 670,320 510,350 C360,378 390,420 230,438 C150,446 100,450 30,454;
            M1000,70 C910,90 900,215 750,240 C600,268 700,300 480,365 C330,392 420,405 200,441 C135,447 100,450 30,454;
            M1000,70 C880,110 930,190 780,225 C630,260 670,320 510,350 C360,378 390,420 230,438 C150,446 100,450 30,454
          "/>
        </path>
      </svg>
      <svg class="hero-wave-layer l3" viewBox="0 0 1000 460" preserveAspectRatio="none">
        <path class="hero-wave-path" stroke-width="0.9" opacity="0.25"
          d="M960,-10 C840,40 880,120 730,160 C580,200 630,270 470,300 C320,328 350,382 190,404 C110,414 60,420 0,424">
          <animate attributeName="d" dur="15s" repeatCount="indefinite" values="
            M960,-10 C840,40 880,120 730,160 C580,200 630,270 470,300 C320,328 350,382 190,404 C110,414 60,420 0,424;
            M960,-10 C870,20 850,140 700,175 C550,212 660,250 440,325 C290,352 380,375 160,411 C105,416 60,420 0,424;
            M960,-10 C840,40 880,120 730,160 C580,200 630,270 470,300 C320,328 350,382 190,404 C110,414 60,420 0,424
          "/>
        </path>
      </svg>
    </div>
    <div class="wrap hero-grid">
      <div class="hero-inner">
        <div class="hero-eyebrow" data-id="Portofolio Talent &amp; Social Media Specialist" data-en="Talent &amp; Social Media Specialist Portfolio">Portofolio Talent &amp; Social Media Specialist</div>
        <h1>Gayatri Dewi</h1>
        <p class="hero-sub" data-id="Layar lebar. Broadcasting. Strategi digital." data-en="Feature film. Broadcasting. Digital strategy.">Layar lebar. Broadcasting. Strategi digital.</p>
        <div class="hero-slot">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M9 12l2 2 4-4M12 3l2.5 2.5L18 4l1 3.5L22 9l-2.5 2 1 3.5-3.5-1-2 3-2-3-3.5 1 1-3.5L8 9l3.5-1.5L12 3z"/></svg>
          <span data-id="Talent layar lebar, &quot;Komang&quot; (Starvision Plus, 2025)" data-en="Feature film talent, &quot;Komang&quot; (Starvision Plus, 2025)">Talent layar lebar, "Komang" (Starvision Plus, 2025)</span>
        </div>
      </div>
      <div class="hero-photo frame reveal photo-placeholder" style="--i:0">
        <span class="photo-mono">GD</span>
        <span class="frame-tag" data-id="Editorial &middot; Studio B&amp;W" data-en="Editorial &middot; Studio B&amp;W">Editorial &middot; Studio B&amp;W</span>
      </div>
    </div>
    <a href="#profil" aria-label="Scroll ke bawah" class="hero-scroll">
      <span data-id="GULIR" data-en="SCROLL">GULIR</span>
      <div class="stem"></div>
    </a>
  </section>

  <div class="sprockets" aria-hidden="true"></div>

  <!-- ================= PROFIL ================= -->
  <section id="profil">
    <div class="wrap">
      <div class="act-label" data-id="Babak Satu" data-en="Act One">Babak Satu</div>
      <h2 class="sec-title reveal" data-id="Profil &amp; <em>Latar Belakang</em>" data-en="Profile &amp; <em>Background</em>">Profil &amp; <em>Latar Belakang</em></h2>

      <div class="profile" style="margin-top:44px;">
        <div class="frame portrait reveal photo-placeholder" style="--i:1">
          <span class="photo-mono">GD</span>
        </div>

        <div class="reveal">
          <div class="bio">
            <p data-id="Lulusan Ilmu Komunikasi (peminatan Broadcasting) dari Universitas Bina Sarana Informatika dengan IPK 3.75/4.00. Jam terbangnya di depan kamera dan panggung terbentuk lintas peran, mulai dari talent, master of ceremony, dan presenter berita, hingga reporter, sebelum debut layar lebarnya lewat &ldquo;Komang&rdquo; produksi Starvision Plus."
               data-en="A Communication Science graduate (Broadcasting) from Universitas Bina Sarana Informatika with a 3.75/4.00 GPA. Her time in front of the camera and on stage spans multiple roles, from talent, master of ceremony, and news presenter to reporter, ahead of her feature-film debut in Starvision Plus&rsquo;s &ldquo;Komang.&rdquo;">
              Lulusan Ilmu Komunikasi (peminatan Broadcasting) dari Universitas Bina Sarana Informatika dengan IPK 3.75/4.00. Jam terbangnya di depan kamera dan panggung terbentuk lintas peran, mulai dari talent, master of ceremony, dan presenter berita, hingga reporter, sebelum debut layar lebarnya lewat &ldquo;Komang&rdquo; produksi Starvision Plus.
            </p>
            <p data-id="Di luar syuting dan panggung, ia menekuni sisi digital sebagai Social Media Specialist, mengelola strategi konten, campaign, dan kolaborasi brand sejak masa magangnya di Mendadak Space hingga kini menangani proyek lepas untuk berbagai klien."
               data-en="Beyond film and stage work, she also builds the digital side of her career as a Social Media Specialist, running content strategy, campaigns, and brand collaborations since her internship at Mendadak Space through to freelance client work today.">
              Di luar syuting dan panggung, ia menekuni sisi digital sebagai Social Media Specialist, mengelola strategi konten, campaign, dan kolaborasi brand sejak masa magangnya di Mendadak Space hingga kini menangani proyek lepas untuk berbagai klien.
            </p>
          </div>

          <dl class="stat-sheet">
            <div class="stat">
              <dt data-id="Berbasis di" data-en="Based in">Berbasis di</dt>
              <dd>Bekasi, Indonesia</dd>
            </div>
            <div class="stat">
              <dt data-id="Bahasa" data-en="Languages">Bahasa</dt>
              <dd data-id="Indonesia, Inggris (dasar)" data-en="Indonesian, English (basic)">Indonesia, Inggris (dasar)</dd>
            </div>
            <div class="stat">
              <dt data-id="Pendidikan" data-en="Education">Pendidikan</dt>
              <dd data-id="S1 Ilmu Komunikasi, Universitas BSI, IPK 3.75" data-en="B.A. Communication Science, Universitas BSI, GPA 3.75">S1 Ilmu Komunikasi, Universitas BSI, IPK 3.75</dd>
            </div>
            <div class="stat">
              <dt data-id="Sertifikasi" data-en="Certifications">Sertifikasi</dt>
              <dd data-id="Penulis Naskah &amp; Asisten Produser TV (BNSP)" data-en="TV Scriptwriter &amp; Assistant Producer (BNSP)">Penulis Naskah &amp; Asisten Produser TV (BNSP)</dd>
            </div>
            <div class="stat">
              <dt>Instagram</dt>
              <dd>@Gayswara_</dd>
            </div>
            <div class="stat">
              <dt>TikTok</dt>
              <dd>@Gayatriz0</dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= FILMOGRAFI ================= -->
  <section id="filmografi" style="background:var(--stage-raised);">
    <div class="wrap">
      <div class="act-label" data-id="Babak Dua" data-en="Act Two">Babak Dua</div>
      <h2 class="sec-title reveal" data-id="Filmografi &middot; <em>Kredit Layar</em>" data-en="Filmography &middot; <em>Screen Credits</em>">Filmografi &middot; <em>Kredit Layar</em></h2>
      <p class="sec-intro reveal" data-id="Enam kredit terpilih, dari layar lebar hingga naskah dokumenter kampus." data-en="Six selected credits, spanning feature film to campus documentary writing.">Enam kredit terpilih, dari layar lebar hingga naskah dokumenter kampus.</p>

      <div class="credits reveal" style="margin-top:40px;">
        <div class="credit-row head">
          <span data-id="Peran" data-en="Role">Peran</span>
          <span data-id="Judul" data-en="Title">Judul</span>
          <span data-id="Tahun" data-en="Year">Tahun</span>
          <span data-id="Produksi" data-en="Production">Produksi</span>
          <span data-id="Kategori" data-en="Category">Kategori</span>
        </div>

        <div class="credit-row">
          <span class="c-role" data-id="Talent (Saudari Komang 1)" data-en="Talent (Saudari Komang 1)">Talent (Saudari Komang 1)</span>
          <span class="c-title">Komang</span>
          <span class="c-year">2025</span>
          <span class="c-prod">Starvision Plus</span>
          <span class="c-tag" data-id="Layar Lebar" data-en="Feature Film">Layar Lebar</span>
        </div>
        <div class="credit-row">
          <span class="c-role" data-id="Talent (Vadia)" data-en="Talent (Vadia)">Talent (Vadia)</span>
          <span class="c-title">The Deadly Sins: Pride</span>
          <span class="c-year">2025</span>
          <span class="c-prod">Luminera &middot; Universitas BSI</span>
          <span class="c-tag" data-id="Film Pendek" data-en="Short Film">Film Pendek</span>
        </div>
        <div class="credit-row">
          <span class="c-role" data-id="Talent (Arrabela)" data-en="Talent (Arrabela)">Talent (Arrabela)</span>
          <span class="c-title">Imagi</span>
          <span class="c-year">2024</span>
          <span class="c-prod">Prod. Reza Rahmanto &middot; Universitas BSI</span>
          <span class="c-tag" data-id="Film Pendek" data-en="Short Film">Film Pendek</span>
        </div>
        <div class="credit-row">
          <span class="c-role" data-id="Penulis Naskah, Voice Over &amp; Talent" data-en="Scriptwriter, Voice Over &amp; Talent">Penulis Naskah, Voice Over &amp; Talent</span>
          <span class="c-title">Bali di Tengah Beton</span>
          <span class="c-year">2023</span>
          <span class="c-prod">Tugas Dokumenter &middot; Universitas BSI</span>
          <span class="c-tag" data-id="Dokumenter" data-en="Documentary">Dokumenter</span>
        </div>
        <div class="credit-row">
          <span class="c-role" data-id="Asisten Sutradara" data-en="Assistant Director">Asisten Sutradara</span>
          <span class="c-title">Duniawi</span>
          <span class="c-year">2023</span>
          <span class="c-prod" data-id="Broadcasting Award &middot; Unity for Creativity" data-en="Broadcasting Award &middot; Unity for Creativity">Broadcasting Award &middot; Unity for Creativity</span>
          <span class="c-tag" data-id="Film Pendek" data-en="Short Film">Film Pendek</span>
        </div>
        <div class="credit-row" style="border-bottom:none;">
          <span class="c-role" data-id="Penulis Naskah &amp; Sutradara" data-en="Writer &amp; Director">Penulis Naskah &amp; Sutradara</span>
          <span class="c-title">Kehilangan</span>
          <span class="c-year">2022</span>
          <span class="c-prod">Universitas BSI</span>
          <span class="c-tag" data-id="Film Pendek" data-en="Short Film">Film Pendek</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= PRESS MARQUEE ================= -->
  <div class="marquee-wrap">
    <div class="marquee-cap" data-id="Sertifikasi &amp; Penghargaan" data-en="Certifications &amp; Recognition">Sertifikasi &amp; Penghargaan</div>
    <div class="marquee" aria-hidden="true">
      <span>BNSP &middot; <b>Penulis Naskah Program TV</b> (2024)</span>
      <span>BNSP &middot; <b>Asisten Produser TV</b> (2025)</span>
      <span>Broadcasting Award &middot; <b>Unity for Creativity</b> (2023)</span>
      <span>InsCinema &middot; <b>Pelatihan Penulis Naskah TV</b>, Predikat Baik (2024)</span>
      <span>BNSP &middot; <b>Penulis Naskah Program TV</b> (2024)</span>
      <span>BNSP &middot; <b>Asisten Produser TV</b> (2025)</span>
      <span>Broadcasting Award &middot; <b>Unity for Creativity</b> (2023)</span>
      <span>InsCinema &middot; <b>Pelatihan Penulis Naskah TV</b>, Predikat Baik (2024)</span>
    </div>
  </div>

  <!-- ================= REPRESENTASI ================= -->
  <section id="representasi">
    <div class="wrap">
      <div class="act-label" data-id="Babak Tiga" data-en="Act Three">Babak Tiga</div>
      <h2 class="sec-title reveal" data-id="Representasi &amp; <em>Kolaborasi</em>" data-en="Representation &amp; <em>Collaborations</em>">Representasi &amp; <em>Kolaborasi</em></h2>
      <p class="sec-intro reveal" data-id="Kemitraan kerja sebagai talent dan kru lepas bersama agensi &amp; komunitas." data-en="Working partnerships as freelance talent and crew with agencies &amp; communities.">Kemitraan kerja sebagai talent dan kru lepas bersama agensi &amp; komunitas.</p>

      <div class="reveal" style="margin-top:36px;">
        <div class="rep-line">
          <div class="rep-years">2023&ndash;2025</div>
          <div>
            <div class="rep-agency">Mendadak Space</div>
            <div class="rep-scope"><b data-id="Lingkup" data-en="Scope">Lingkup</b>: <span data-id="Talent, Content Creator, Social Media Specialist" data-en="Talent, Content Creator, Social Media Specialist">Talent, Content Creator, Social Media Specialist</span></div>
          </div>
        </div>
        <div class="rep-line">
          <div class="rep-years" data-id="2024&ndash;Sekarang" data-en="2024&ndash;Present">2024&ndash;Sekarang</div>
          <div>
            <div class="rep-agency">Sanggar Tari Dwipayana Nusantara</div>
            <div class="rep-scope"><b data-id="Lingkup" data-en="Scope">Lingkup</b>: <span data-id="Master of Ceremony untuk acara budaya &amp; keagamaan" data-en="Master of Ceremony for cultural &amp; religious events">Master of Ceremony untuk acara budaya &amp; keagamaan</span></div>
          </div>
        </div>
        <div class="rep-line">
          <div class="rep-years" data-id="2023&ndash;Sekarang" data-en="2023&ndash;Present">2023&ndash;Sekarang</div>
          <div>
            <div class="rep-agency">Banjar Hitakarma Pondok Gede</div>
            <div class="rep-scope"><b data-id="Lingkup" data-en="Scope">Lingkup</b>: <span data-id="Master of Ceremony &amp; dokumentasi acara adat di Pura Penataran Agung Kerta Bhumi, TMII" data-en="Master of Ceremony &amp; event documentation at Pura Penataran Agung Kerta Bhumi, TMII">Master of Ceremony &amp; dokumentasi acara adat di Pura Penataran Agung Kerta Bhumi, TMII</span></div>
          </div>
        </div>
        <div class="rep-line">
          <div class="rep-years" data-id="2024&ndash;Sekarang" data-en="2024&ndash;Present">2024&ndash;Sekarang</div>
          <div>
            <div class="rep-agency">PT Digioh</div>
            <div class="rep-scope"><b data-id="Lingkup" data-en="Scope">Lingkup</b>: <span data-id="User &amp; Register lepas untuk acara hybrid dan virtual" data-en="Freelance user &amp; registration support for hybrid and virtual events">User &amp; Register lepas untuk acara hybrid dan virtual</span></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= CHAPTER BREAK ================= -->
  <section class="chapter-break" aria-label="Chapter break">
    <div class="chapter-break-bg" aria-hidden="true"></div>
    <div class="chapter-break-scrim"></div>
    <div class="wrap chapter-break-inner">
      <p class="chapter-quote reveal" style="--i:0" data-id="Setiap panggung punya bahasanya sendiri. Saya belajar bicara di semuanya." data-en="Every stage speaks its own language. I learned to speak them all.">Setiap panggung punya bahasanya sendiri. Saya belajar bicara di semuanya.</p>
      <div class="chapter-cite reveal" style="--i:1">Gayatri Dewi</div>
    </div>
  </section>

  <!-- ================= DIGITAL / SMS ================= -->
  <section id="digital" style="background:var(--stage-raised);">
    <div class="wrap">
      <div class="act-label" data-id="Babak Empat" data-en="Act Four">Babak Empat</div>
      <h2 class="sec-title reveal" data-id="Peran Digital &middot; <em>Social Media Specialist</em>" data-en="Digital Role &middot; <em>Social Media Specialist</em>">Peran Digital &middot; <em>Social Media Specialist</em></h2>

      <div class="digital-grid reveal" style="margin-top:40px;">
        <div class="role-card">
          <h3 data-id="Social Media Specialist" data-en="Social Media Specialist">Social Media Specialist</h3>
          <div class="role-sub">Mendadak Space &middot; 2024&ndash;2025</div>

          <div class="chip-row">
            <span class="chip" data-id="Strategi Konten" data-en="Content Strategy">Strategi Konten</span>
            <span class="chip" data-id="Pemasaran Digital" data-en="Digital Marketing">Pemasaran Digital</span>
            <span class="chip" data-id="Copywriting &amp; Naskah" data-en="Copywriting &amp; Scriptwriting">Copywriting &amp; Naskah</span>
            <span class="chip" data-id="Manajemen Proyek" data-en="Project Management">Manajemen Proyek</span>
            <span class="chip" data-id="Kolaborasi Brand" data-en="Brand Collaboration">Kolaborasi Brand</span>
          </div>

          <div class="platform-row">
            <a class="platform" href="https://www.instagram.com/gayswara_/" target="_blank" rel="noopener" aria-label="Instagram">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.3" cy="6.7" r="0.6" fill="currentColor" stroke="none"/></svg>
            </a>
            <a class="platform" href="https://www.tiktok.com/@gayatriz0" target="_blank" rel="noopener" aria-label="TikTok">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4c.6 2.5 2.3 4 5 4.3V11c-1.8 0-3.4-.6-5-1.7V15a5.3 5.3 0 1 1-4.6-5.3v2.6a2.7 2.7 0 1 0 2.1 2.7V4h2.5Z"/></svg>
            </a>
            <div class="platform" aria-label="YouTube">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="6" width="19" height="12" rx="4"/><path d="M10.5 9.5l5 2.5-5 2.5v-5Z" fill="currentColor" stroke="none"/></svg>
            </div>
          </div>
        </div>

        <div>
          <div class="metric-list">
            <div class="metric">
              <span class="metric-label" data-id="Brand Kolaborasi" data-en="Brands Collaborated">Brand Kolaborasi</span>
              <span class="metric-value">7+</span>
            </div>
            <div class="metric">
              <span class="metric-label" data-id="Magang Social Media Specialist" data-en="Social Media Specialist Internship">Magang Social Media Specialist</span>
              <span class="metric-value" data-id="122 hari" data-en="122 days">122 hari</span>
            </div>
            <div class="metric">
              <span class="metric-label" data-id="Sertifikasi Profesi BNSP" data-en="BNSP Professional Certifications">Sertifikasi Profesi BNSP</span>
              <span class="metric-value">2</span>
            </div>
          </div>
          <p class="metric-note" data-id="Kolaborasi konten UGC untuk berbagai brand, dari perencanaan hingga eksekusi." data-en="UGC content collaborations for various brands, from planning through execution.">Kolaborasi konten UGC untuk berbagai brand, dari perencanaan hingga eksekusi.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= REEL ================= -->
  <section id="reel">
    <div class="wrap">
      <div class="act-label" data-id="Babak Lima" data-en="Act Five">Babak Lima</div>
      <h2 class="sec-title reveal" data-id="Showreel" data-en="Showreel">Showreel</h2>

      <div class="frame reel-frame reveal" style="margin-top:40px;">
        <button class="play-btn" type="button" aria-label="Play showreel">
          <svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg>
        </button>
      </div>
      <p class="reel-cap" data-id="Cuplikan dari Komang, Imagi &amp; The Deadly Sins: Pride akan tayang di sini." data-en="Highlights from Komang, Imagi &amp; The Deadly Sins: Pride will play here.">Cuplikan dari Komang, Imagi &amp; The Deadly Sins: Pride akan tayang di sini.</p>
    </div>
  </section>

  <!-- ================= GALERI ================= -->
  <section id="galeri" style="background:var(--stage-raised);">
    <div class="wrap">
      <div class="act-label" data-id="Babak Enam" data-en="Act Six">Babak Enam</div>
      <h2 class="sec-title reveal" data-id="Galeri &middot; <em>Contact Sheet</em>" data-en="Gallery &middot; <em>Contact Sheet</em>">Galeri &middot; <em>Contact Sheet</em></h2>

      <div class="gallery" style="margin-top:36px;">
        <div class="frame g-tall reveal photo-placeholder" style="--i:0"><span class="photo-mono">GD</span><span class="frame-tag" data-id="Editorial" data-en="Editorial">Editorial</span></div>
        <div class="frame g-big reveal photo-placeholder" style="--i:1"><span class="photo-mono">GD</span><span class="frame-tag" data-id="MC &middot; Sanggar Dwipayana" data-en="MC &middot; Sanggar Dwipayana">MC &middot; Sanggar Dwipayana</span></div>
        <div class="frame reveal photo-placeholder" style="--i:2"><span class="photo-mono">GD</span><span class="frame-tag" data-id="MC &middot; Evaluasi Sanggar" data-en="MC &middot; Sanggar Evaluation">MC &middot; Evaluasi Sanggar</span></div>
        <div class="frame reveal photo-placeholder" style="--i:3"><span class="photo-mono">GD</span><span class="frame-tag" data-id="MC &middot; Panggung Budaya" data-en="MC &middot; Cultural Stage">MC &middot; Panggung Budaya</span></div>
        <div class="frame g-wide reveal photo-placeholder" style="--i:4"><span class="photo-mono">GD</span><span class="frame-tag" data-id="BSI TV &middot; News Anchor" data-en="BSI TV &middot; News Anchor">BSI TV &middot; News Anchor</span></div>
        <div class="frame g-wide reveal photo-placeholder" style="--i:5"><span class="photo-mono">GD</span><span class="frame-tag" data-id="MC &middot; Duo Anchor" data-en="MC &middot; Duo Anchor">MC &middot; Duo Anchor</span></div>
      </div>
    </div>
  </section>

  <!-- ================= KONTAK ================= -->
  <section id="kontak" class="contact">
    <div class="wrap">
      <div class="act-label" style="justify-content:center;" data-id="Penutup" data-en="Closing">Penutup</div>
      <h2 class="sec-title reveal" data-id="Mari <em>Berkolaborasi</em>" data-en="Let's <em>Collaborate</em>">Mari <em>Berkolaborasi</em></h2>
      <p class="sec-intro reveal" data-id="Untuk booking, kolaborasi brand, atau permintaan showreel, hubungi kontak di bawah." data-en="For bookings, brand collaborations, or showreel requests, use the contact details below.">Untuk booking, kolaborasi brand, atau permintaan showreel, hubungi kontak di bawah.</p>

      <dl class="contact-grid reveal">
        <div class="contact-cell">
          <dt data-id="Email" data-en="Email">Email</dt>
          <dd>gayadewitri04@gmail.com</dd>
        </div>
        <div class="contact-cell">
          <dt data-id="WhatsApp" data-en="WhatsApp">WhatsApp</dt>
          <dd>+62 896-9981-8981</dd>
        </div>
        <div class="contact-cell">
          <dt data-id="Instagram" data-en="Instagram">Instagram</dt>
          <dd>@Gayswara_</dd>
        </div>
        <div class="contact-cell">
          <dt>LinkedIn</dt>
          <dd data-id="Gayatri Dewi" data-en="Gayatri Dewi">Gayatri Dewi</dd>
        </div>
      </dl>

      <div class="social-row">
        <a class="platform" href="https://www.instagram.com/gayswara_/" target="_blank" rel="noopener" aria-label="Instagram">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.3" cy="6.7" r="0.6" fill="currentColor" stroke="none"/></svg>
        </a>
        <a class="platform" href="https://www.tiktok.com/@gayatriz0" target="_blank" rel="noopener" aria-label="TikTok">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4c.6 2.5 2.3 4 5 4.3V11c-1.8 0-3.4-.6-5-1.7V15a5.3 5.3 0 1 1-4.6-5.3v2.6a2.7 2.7 0 1 0 2.1 2.7V4h2.5Z"/></svg>
        </a>
        <div class="platform" aria-label="YouTube">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="6" width="19" height="12" rx="4"/><path d="M10.5 9.5l5 2.5-5 2.5v-5Z" fill="currentColor" stroke="none"/></svg>
        </div>
      </div>
    </div>
  </section>

</main>

<footer>
  <div class="wrap footer-inner">
    <span>&copy; {{ date('Y') }} Gayatri Dewi</span>
    <span data-id="Talent, MC &amp; Social Media Specialist" data-en="Talent, MC &amp; Social Media Specialist">Talent, MC &amp; Social Media Specialist</span>
  </div>
</footer>

<script>
(function(){
  "use strict";

  var reduceMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var hoverCapable = window.matchMedia && window.matchMedia('(hover: hover) and (pointer: fine)').matches;

  /* ---------- preloader (iris wipe) ---------- */
  (function(){
    var pre = document.getElementById('preloader');
    if (!pre) return;
    if (reduceMotion){ pre.remove(); return; }
    document.body.classList.add('preloading');
    setTimeout(function(){
      pre.classList.add('closing');
      document.body.classList.remove('preloading');
      pre.addEventListener('transitionend', function(){
        if (pre.parentNode) pre.parentNode.removeChild(pre);
      }, { once:true });
    }, 1050);
  })();

  /* ---------- scroll progress bar ---------- */
  (function(){
    var bar = document.getElementById('scrollProgress');
    if (!bar) return;
    function update(){
      var d = document.documentElement;
      var top = d.scrollTop || document.body.scrollTop;
      var height = (d.scrollHeight || document.body.scrollHeight) - d.clientHeight;
      bar.style.transform = 'scaleX(' + (height > 0 ? top / height : 0) + ')';
    }
    window.addEventListener('scroll', update, { passive:true });
    window.addEventListener('resize', update);
    update();
  })();

  /* ---------- custom magnetic cursor ---------- */
  if (hoverCapable && !reduceMotion){
    document.documentElement.classList.add('custom-cursor');
    var ring = document.getElementById('cursorRing');
    var dot = document.getElementById('cursorDot');
    var tx = -100, ty = -100, rx = -100, ry = -100;
    window.addEventListener('mousemove', function(e){
      tx = e.clientX; ty = e.clientY;
      if (dot) dot.style.transform = 'translate(' + tx + 'px,' + ty + 'px) translate(-50%,-50%)';
    });
    (function loop(){
      rx += (tx - rx) * 0.18;
      ry += (ty - ry) * 0.18;
      if (ring) ring.style.transform = 'translate(' + rx + 'px,' + ry + 'px) translate(-50%,-50%)';
      requestAnimationFrame(loop);
    })();
    document.querySelectorAll('a, button, .frame').forEach(function(el){
      el.addEventListener('mouseenter', function(){ if (ring) ring.classList.add('hover'); });
      el.addEventListener('mouseleave', function(){ if (ring) ring.classList.remove('hover'); });
    });
  }

  /* ---------- hero: mouse-reactive spotlight ---------- */
  if (hoverCapable && !reduceMotion){
    var heroEl = document.querySelector('.hero');
    var heroSpot = document.querySelector('.hero-spot');
    if (heroEl && heroSpot){
      heroEl.addEventListener('mousemove', function(e){
        var r = heroEl.getBoundingClientRect();
        heroSpot.style.left = (e.clientX - r.left) + 'px';
        heroSpot.style.top = (e.clientY - r.top) + 'px';
      });
    }
  }

  /* ---------- magnetic buttons ---------- */
  if (hoverCapable && !reduceMotion){
    var magnetize = function(el, strength){
      if (!el) return;
      el.addEventListener('mousemove', function(e){
        var r = el.getBoundingClientRect();
        var x = (e.clientX - r.left - r.width / 2) / r.width;
        var y = (e.clientY - r.top - r.height / 2) / r.height;
        el.style.transform = 'translate(' + (x * strength) + 'px,' + (y * strength) + 'px) scale(1.05)';
      });
      el.addEventListener('mouseleave', function(){ el.style.transform = ''; });
    };
    magnetize(document.querySelector('.play-btn'), 16);
    magnetize(document.getElementById('langBtn'), 8);
  }

  /* ---------- gallery / portrait tilt ---------- */
  if (hoverCapable && !reduceMotion){
    document.querySelectorAll('.gallery .frame, .portrait').forEach(function(el){
      el.style.transition = 'transform .2s ease';
      el.addEventListener('mousemove', function(e){
        var r = el.getBoundingClientRect();
        var px = (e.clientX - r.left) / r.width - 0.5;
        var py = (e.clientY - r.top) / r.height - 0.5;
        el.style.transform = 'perspective(700px) rotateX(' + (py * -7) + 'deg) rotateY(' + (px * 7) + 'deg) scale(1.015)';
      });
      el.addEventListener('mouseleave', function(){ el.style.transform = ''; });
    });
  }

  /* ---------- language toggle ---------- */
  var STORAGE_KEY = 'talent-portfolio-lang';
  var current = 'id';
  try {
    var saved = localStorage.getItem(STORAGE_KEY);
    if (saved === 'id' || saved === 'en') current = saved;
  } catch (e) { /* storage unavailable — default stands */ }

  var langBtn = document.getElementById('langBtn');
  var langLabel = document.getElementById('langLabel');

  function applyLang(lang){
    current = lang;
    document.documentElement.setAttribute('lang', lang === 'id' ? 'id' : 'en');
    var nodes = document.querySelectorAll('[data-id][data-en]');
    for (var i = 0; i < nodes.length; i++){
      var el = nodes[i];
      var val = lang === 'id' ? el.getAttribute('data-id') : el.getAttribute('data-en');
      if (val.indexOf('<em>') !== -1) { el.innerHTML = val; } else { el.textContent = val; }
    }
    if (langLabel) langLabel.textContent = lang === 'id' ? 'EN' : 'ID';
    try { localStorage.setItem(STORAGE_KEY, lang); } catch (e) { /* ignore */ }
  }

  if (langBtn){
    langBtn.addEventListener('click', function(){
      applyLang(current === 'id' ? 'en' : 'id');
    });
  }
  applyLang(current);

  /* ---------- mobile menu ---------- */
  var menuBtn = document.getElementById('menuBtn');
  var navLinks = document.getElementById('navLinks');
  if (menuBtn && navLinks){
    menuBtn.addEventListener('click', function(){
      var open = navLinks.classList.toggle('open');
      menuBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    navLinks.querySelectorAll('a').forEach(function(a){
      a.addEventListener('click', function(){ navLinks.classList.remove('open'); menuBtn.setAttribute('aria-expanded','false'); });
    });
  }

  /* ---------- sticky nav shadow ---------- */
  var nav = document.getElementById('siteNav');
  window.addEventListener('scroll', function(){
    if (nav) nav.classList.toggle('scrolled', window.scrollY > 12);
  }, { passive:true });

  /* ---------- scroll reveal ---------- */
  var reveals = document.querySelectorAll('.reveal');
  if (reduceMotion || !('IntersectionObserver' in window)){
    reveals.forEach(function(el){ el.classList.add('in'); });
  } else {
    var io = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        if (entry.isIntersecting){ entry.target.classList.add('in'); io.unobserve(entry.target); }
      });
    }, { threshold:0.12, rootMargin:'0px 0px -60px 0px' });
    reveals.forEach(function(el){ io.observe(el); });
  }

  /* ---------- nav scrollspy ---------- */
  (function(){
    var sections = document.querySelectorAll('main section[id]');
    var links = document.querySelectorAll('.nav-links a');
    if (!sections.length || !links.length || !('IntersectionObserver' in window)) return;
    var byId = {};
    links.forEach(function(a){ byId[a.getAttribute('href').slice(1)] = a; });
    var spy = new IntersectionObserver(function(entries){
      entries.forEach(function(entry){
        var link = byId[entry.target.id];
        if (!link || !entry.isIntersecting) return;
        links.forEach(function(a){ a.classList.remove('active'); });
        link.classList.add('active');
      });
    }, { rootMargin:'-45% 0px -50% 0px', threshold:0 });
    sections.forEach(function(s){ spy.observe(s); });
  })();
})();
</script>