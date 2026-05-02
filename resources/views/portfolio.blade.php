<x-layout title="Eljames Benitez | Portfolio">
    <style>
        /* ── Nav ── */
        .nav {
            position: sticky;
            top: 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 16px 40px;
            background: rgba(15, 23, 42, 0.97);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }
        .nav-logo {
            font-size: 1.4rem;
            font-weight: 700;
            color: #a5b4fc;
            text-decoration: none;
        }
        .nav-links {
            display: flex;
            gap: 32px;
            list-style: none;
        }
        .nav-links a {
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            transition: color 0.2s;
        }
        .nav-links a:hover { color: #f8fafc; }

        /* ── Hero ── */
        .hero {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 80px 40px 100px;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #f8fafc;
            position: relative;
            overflow: hidden;
        }
        .hero::before {
            content: '';
            position: absolute;
            top: -30%;
            right: -15%;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(99,102,241,0.18) 0%, transparent 70%);
            pointer-events: none;
        }
        .hero-greeting {
            font-size: 1rem;
            color: #a5b4fc;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            margin-bottom: 14px;
        }
        .hero-name {
            font-size: clamp(2.8rem, 5vw, 4.2rem);
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 14px;
            background: linear-gradient(135deg, #f8fafc 30%, #a5b4fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hero-role {
            font-size: 1.35rem;
            color: #94a3b8;
            margin-bottom: 22px;
        }
        .hero-bio {
            font-size: 1.05rem;
            color: #cbd5e1;
            max-width: 540px;
            line-height: 1.75;
            margin-bottom: 40px;
        }
        .hero-actions { display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 56px; }
        .hero-stack {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 14px;
            margin-top: 50px;
        }
        .hero-stack-label {
            font-size: 0.75rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            color: #475569;
        }
        .stacks{
            display: flex;
            gap: 24px;
        }
        .hero-stack-icons {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            gap: 10px;
        }
        .hero-stack-item {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.09);
            border-radius: 999px;
            transition: background 0.2s, border-color 0.2s, transform 0.2s;
            cursor: default;
        }
        .hero-stack-item:hover {
            background: rgba(255,255,255,0.1);
            border-color: rgba(165,180,252,0.4);
            transform: translateY(-3px);
        }
        .hero-stack-item i {
            font-size: 1.4rem;
            line-height: 1;
        }
        .hero-stack-item span {
            font-size: 0.85rem;
            font-weight: 600;
            color: #cbd5e1;
        }
        .btn-primary {
            padding: 12px 30px;
            border-radius: 8px;
            background: #6366f1;
            color: #fff;
            font-size: 1rem;
            font-weight: 600;
            font-family: inherit;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: background 0.2s, transform 0.15s;
        }
        .btn-primary:hover { background: #4f46e5; transform: translateY(-2px); }
        .btn-outline {
            padding: 12px 30px;
            border-radius: 8px;
            border: 2px solid rgba(165,180,252,0.35);
            color: #a5b4fc;
            font-size: 1rem;
            font-weight: 600;
            font-family: inherit;
            text-decoration: none;
            background: transparent;
            cursor: pointer;
            transition: border-color 0.2s, color 0.2s, transform 0.15s;
        }
        .btn-outline:hover { border-color: #a5b4fc; color: #f8fafc; transform: translateY(-2px); }
        .scroll-hint {
            position: absolute;
            bottom: 36px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
            color: #475569;
            font-size: 0.78rem;
            letter-spacing: 0.08em;
            animation: bounceY 2s ease-in-out infinite;
        }
        @keyframes bounceY {
            0%, 100% { transform: translateX(-50%) translateY(0); }
            50% { transform: translateX(-50%) translateY(8px); }
        }

        /* ── Shared section ── */
        .section { padding: 80px 40px; }
        .section-label {
            font-size: 0.8rem;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: #6366f1;
            margin-bottom: 8px;
        }
        .section-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 42px;
        }

        /* ── About ── */
        .about-section {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .about-section .section-title { color: #f8fafc; }
        .about-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 56px;
            align-items: center;
            max-width: 760px;
        }
        .about-text { font-size: 1rem; color: #cbd5e1; line-height: 1.85; }

        /* ── Experience ── */
        .experience-section { background: #f8fafc; }
        .experience-timeline {
            position: relative;
            display: grid;
            gap: 18px;
        }
        .experience-timeline::before {
            content: '';
            position: absolute;
            left: 14px;
            top: 8px;
            bottom: 8px;
            width: 2px;
            background: linear-gradient(180deg, #6366f1, #c7d2fe);
        }
        .experience-item {
            position: relative;
            margin-left: 36px;
            background: #fff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 18px 18px 16px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.06);
        }
        .experience-item::before {
            content: '';
            position: absolute;
            left: -28px;
            top: 20px;
            width: 12px;
            height: 12px;
            border-radius: 999px;
            background: #6366f1;
            box-shadow: 0 0 0 4px #e0e7ff;
        }
        .experience-role {
            font-size: 1.02rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 6px;
            line-height: 1.4;
        }
        .experience-date {
            display: inline-block;
            font-size: 0.78rem;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: #4f46e5;
            background: #eef2ff;
            border-radius: 999px;
            padding: 6px 10px;
        }

        /* ── Projects ── */
        .projects-section { background: #fff; }
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 24px;
        }
        .project-card {
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
            background: #fff;
        }
        .project-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 44px rgba(0,0,0,0.1);
        }
        .project-thumb {
            height: 170px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
         
        }
        .thumb-indigo  { background: linear-gradient(135deg, #312e81, #4f46e5); }
        .thumb-teal    { background: linear-gradient(135deg, #134e4a, #0d9488); }
        .thumb-rose    { background: linear-gradient(135deg, #881337, #e11d48); }
        .project-icon-stack {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .project-icon-chip {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255,255,255,0.14);
            border: 1px solid rgba(255,255,255,0.22);
            backdrop-filter: blur(4px);
            box-shadow: 0 8px 18px rgba(0,0,0,0.22);
        }
        .project-icon-chip i {
            font-size: 1.8rem;
            line-height: 1;
        }
        .project-body { padding: 20px; }
        .project-title { font-size: 1.05rem; font-weight: 700; color: #1e293b; margin-bottom: 8px; }
        .project-desc { font-size: 0.88rem; color: #64748b; line-height: 1.65; margin-bottom: 16px; }
        .project-tags { display: flex; flex-wrap: wrap; gap: 8px; }
        .project-actions {
            margin-top: 18px;
        }
        .project-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 16px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 0.82rem;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            background: #111827;
            color: #f8fafc;
            border: 1px solid transparent;
            transition: transform 0.2s, background 0.2s, border-color 0.2s, box-shadow 0.2s;
        }
        .project-link::after {
            content: '↗';
            font-size: 0.9rem;
        }
        .project-link:hover {
            background: #0b1220;
            border-color: rgba(99,102,241,0.5);
            box-shadow: 0 10px 20px rgba(15, 23, 42, 0.25);
            transform: translateY(-2px);
        }
        .project-link.disabled {
            background: #334155;
            color: #cbd5e1;
            pointer-events: none;
            opacity: 0.8;
        }
        .tag {
            padding: 4px 10px;
            background: #ede9fe;
            color: #6d28d9;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 600;
        }

        /* ── Contact ── */
        .contact-section {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        }
        .contact-section .section-title { color: #f8fafc; }
        .contact-section .section-label { color: #818cf8; }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            gap: 48px;
            align-items: start;
        }
        .contact-intro { font-size: 1rem; color: #94a3b8; line-height: 1.75; margin-bottom: 32px; }
        .contact-items { display: flex; flex-direction: column; gap: 14px; }
        .contact-item {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 14px 16px;
            border-radius: 14px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.09);
            transition: background 0.2s, border-color 0.2s;
        }
        .contact-item:hover {
            background: rgba(255,255,255,0.09);
            border-color: rgba(165,180,252,0.3);
        }
        .contact-icon {
            width: 42px;
            height: 42px;
            border-radius: 11px;
            background: rgba(99,102,241,0.18);
            border: 1px solid rgba(99,102,241,0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }
        .contact-icon svg {
            width: 20px;
            height: 20px;
            stroke: #a5b4fc;
            fill: none;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }
        .contact-info { display: flex; flex-direction: column; gap: 2px; }
        .contact-label { font-size: 0.72rem; letter-spacing: 0.08em; text-transform: uppercase; color: #475569; font-weight: 700; }
        .contact-text { font-size: 0.92rem; color: #e2e8f0; font-weight: 500; }
        .contact-form {
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.09);
            border-radius: 18px;
            padding: 28px;
        }
        .contact-form { display: flex; flex-direction: column; gap: 16px; }
        .form-group { display: flex; flex-direction: column; gap: 6px; }
        .form-label { font-size: 0.82rem; font-weight: 600; color: #94a3b8; letter-spacing: 0.04em; }
        .form-input {
            padding: 10px 14px;
            border: 1.5px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            font-family: inherit;
            font-size: 0.95rem;
            color: #f1f5f9;
            background: rgba(255,255,255,0.06);
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
        }
        .form-input::placeholder { color: #475569; }
        .form-input:focus { border-color: #6366f1; box-shadow: 0 0 0 3px rgba(99,102,241,0.18); }
        textarea.form-input { resize: vertical; min-height: 120px; }

        /* ── Footer ── */
        .footer {
            background: #0f172a;
            color: #475569;
            text-align: center;
            padding: 28px 40px;
            font-size: 0.88rem;
        }
        .footer span { color: #a5b4fc; }

        /* ── Responsive ── */
        @media (max-width: 720px) {
            .nav { padding: 14px 20px; }
            .nav-links { gap: 18px; }
            .hero { padding: 80px 24px 100px; }
            .hero-stack-icons { gap: 8px; }
            .hero-stack-item span { display: none; }
            .hero-stack-item { padding: 10px; }
            .section { padding: 60px 24px; }
            .about-grid, .contact-grid { grid-template-columns: 1fr; gap: 36px; }
            .about-stats { grid-template-columns: 1fr 1fr; }
            .experience-item { margin-left: 28px; }
        }
    </style>

    {{-- Nav --}}
    <nav class="nav">
        <a href="#home" class="nav-logo">EB.</a>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    {{-- Hero --}}
    <section class="hero" id="home">
        <p class="hero-greeting">Hello, World 👋</p>
        <h1 class="hero-name">Eljames Benitez</h1>
        <p class="hero-role">Full Stack Developer</p>
        <p class="hero-bio">
            I craft clean, performant web applications using modern tools and frameworks.
            Passionate about building experiences that are fast, accessible, and beautiful.
        </p>
        <div class="hero-actions">
            <a href="#projects" class="btn-primary">View My Work</a>
            <a href="#contact" class="btn-outline">Get In Touch</a>
        </div>
        <div class="hero-stack">
            <span class="hero-stack-label">Tech Stack</span>
            <div class="hero-stack-icons">
                <div class="stack-left stacks">
                    <div class="hero-stack-item"><i class="devicon-html5-plain colored"></i><span>HTML5</span></div>
                    <div class="hero-stack-item"><i class="devicon-css3-plain colored"></i><span>CSS3</span></div>
                    <div class="hero-stack-item"><i class="devicon-javascript-plain colored"></i><span>JavaScript</span></div>
                    <div class="hero-stack-item"><i class="devicon-php-plain colored"></i><span>PHP</span></div>
                </div>
                <div class="stack-right stacks">
                    <div class="hero-stack-item"><i class="devicon-laravel-plain colored"></i><span>Laravel</span></div>
                    <div class="hero-stack-item"><i class="devicon-vuejs-plain colored"></i><span>Vue.js</span></div>
                    <div class="hero-stack-item"><i class="devicon-mysql-plain colored"></i><span>MySQL</span></div>
                    <div class="hero-stack-item"><i class="devicon-git-plain colored"></i><span>Git</span></div>
                </div>

            </div>
        </div>
        <div class="scroll-hint">
            <span>Scroll</span>
            <span>↓</span>
        </div>
    </section>

    {{-- About --}}
    <section class="section about-section" id="about">
        <p class="section-label">About Me</p>
        <h2 class="section-title">Who I Am</h2>
        <div class="about-grid">
            <p class="about-text">
                I'm a full stack developer based in the Philippines with a passion for building
                web applications that solve real problems. I enjoy working across the entire stack —
                from designing intuitive UIs to architecting robust back-end systems.
                <br><br>
                When I'm not coding, I'm exploring new technologies, contributing to open-source
                projects, or leveling up my craft.
            </p>
        </div>
    </section>

    {{-- Experience --}}
    <section class="section experience-section" id="experience">
        <p class="section-label">Where I've Worked</p>
        <h2 class="section-title">Experience</h2>
        <div class="experience-timeline">
            <article class="experience-item">
                <h3 class="experience-role">6 months College Capstone Project - Learning Management System</h3>
                <span class="experience-date">October 2024 - April 2025</span>
            </article>
            <article class="experience-item">
                <h3 class="experience-role">Full Stack Web Developer at Provincial Government Of Aurora, Provincial Capitol of Aurora</h3>
                <span class="experience-date">January 2026 - Current Date</span>
            </article>
        </div>
    </section>

    {{-- Projects --}}
    <section class="section projects-section" id="projects">
        <p class="section-label">What I've Built</p>
        <h2 class="section-title">Projects</h2>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-thumb thumb-indigo" >
                    <div class="project-icon-stack">
                            <div class="project-icon-chip"><i class="devicon-laravel-plain colored"></i></div>
                            <div class="project-icon-chip"><i class="devicon-html5-plain colored"></i></div>
                            <div class="project-icon-chip"><i class="devicon-css3-plain colored"></i></div>
                            <div class="project-icon-chip"><i class="devicon-javascript-plain colored"></i></div>
                            <div class="project-icon-chip"><i class="devicon-mysql-plain colored"></i></div>
                    </div>
                </div>
                <div class="project-body">
                    <h3 class="project-title">Travel Monitoring System</h3>
                    <p class="project-desc">A system to monitor and manage travel activities efficiently.</p>
                    <div class="project-tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">HTML5</span>
                        <span class="tag">CSS3</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">MySQL</span>
                        
                    </div>
                    <div class="project-actions">
                        <a class="project-link" href="https://github.com/elj9mes-max/oilMonitoring" target="_blank" rel="noopener noreferrer">View Project</a>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-thumb thumb-teal">
                    <div class="project-icon-stack">
                        <div class="project-icon-chip"><i class="devicon-laravel-plain colored"></i></div>
                        <div class="project-icon-chip"><i class="devicon-html5-plain colored"></i></div>
                        <div class="project-icon-chip"><i class="devicon-css3-plain colored"></i></div>
                        <div class="project-icon-chip"><i class="devicon-javascript-plain colored"></i></div>
                        <div class="project-icon-chip"><i class="devicon-mysql-plain colored"></i></div>
                    </div>
                </div>
                <div class="project-body">
                    <h3 class="project-title">Medicine Inventory System</h3>
                    <p class="project-desc">A system to manage and track medicine inventory efficiently.</p>
                    <div class="project-tags">
                        <span class="tag">Laravel</span>
                        <span class="tag">HTML5</span>
                        <span class="tag">CSS3</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">MySQL</span>
                        
                    </div>
                    <div class="project-actions">
                        <a class="project-link" href="https://github.com/elj9mes-max/pho" target="_blank" rel="noopener noreferrer">View Project</a>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-thumb thumb-rose">
                    <div class="project-icon-stack">
                        <div class="project-icon-chip"><i class="devicon-html5-plain colored"></i></div>
                        <div class="project-icon-chip"><i class="devicon-css3-plain colored"></i></div>
                        <div class="project-icon-chip"><i class="devicon-javascript-plain colored"></i></div>
                        <div class="project-icon-chip"><i class="devicon-php-plain colored"></i></div>
                    </div>
                </div>
                <div class="project-body">
                    <h3 class="project-title">Learning Management System WUP-Aurora Campus</h3>
                    <p class="project-desc">Learning platform for Computer Science student of Wesleyan University-Philippines Aurora Campus.</p>
                    <div class="project-tags">
                        <span class="tag">HTML5</span>
                        <span class="tag">CSS3</span>
                        <span class="tag">JavaScript</span>
                        <span class="tag">PHP</span>
                    </div>
                    <div class="project-actions">
                        <a class="project-link disabled" href="#" target="_blank" rel="noopener noreferrer">View Project</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Contact --}}
    <section class="section contact-section" id="contact">
        <p class="section-label">Let's Talk</p>
        <h2 class="section-title">Get In Touch</h2>
        <div class="contact-grid">
            <div>
                <p class="contact-intro">
                    Have a project in mind or want to collaborate? I'd love to hear from you.
                    Drop a message and I'll get back to you as soon as possible.
                </p>
                <div class="contact-items">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="M2 7l10 7 10-7"/></svg>
                        </div>
                        <div class="contact-info">
                            <span class="contact-label">Email</span>
                            <span class="contact-text">elj9mes@gmail.com</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
                        </div>
                        <div class="contact-info">
                            <span class="contact-label">Location</span>
                            <span class="contact-text">Philippines</span>
                        </div>
                    </div>
                    <div class="contact-item">
                        <div class="contact-icon">
                            <svg viewBox="0 0 24 24"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>
                        </div>
                        <div class="contact-info">
                            <span class="contact-label">GitHub</span>
                            <span class="contact-text">github.com/elj9mes-max</span>
                        </div>
                    </div>
                </div>
            </div>
            <form class="contact-form">
                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-input" placeholder="Your name">
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-input" placeholder="your@email.com">
                </div>
                <div class="form-group">
                    <label class="form-label">Message</label>
                    <textarea class="form-input" placeholder="Tell me about your concern..."></textarea>
                </div>
                <button type="submit" class="btn-primary" style="align-self:flex-start;">Send Message</button>
            </form>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="footer">
        <p>Designed &amp; built by <span>Eljames Benitez</span> &mdash; {{ date('Y') }}</p>
    </footer>
</x-layout>