<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MAC Benefícios | Convênios e Benefícios</title>
    <style>
        :root {
            --primary: #0f5ea8;
            --primary-dark: #0b4378;
            --secondary: rgb(6, 101, 174);
            --text: #16324f;
            --muted: #5d7287;
            --white: #ffffff;
            --card: #ffffff;
            --line: #d8e7f3;
            --shadow: 0 16px 40px rgba(15, 94, 168, .12);
            --radius: 22px;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0
        }

        html {
            scroll-behavior: smooth
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            color: var(--text);
            line-height: 1.6;
            background: #f5fbff;
        }

        .container {
            width: min(1160px, 92%);
            margin: auto
        }

        section {
            padding: 90px 0
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            background: rgba(245, 251, 255, .88);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(216, 231, 243, .85);
        }

        .header-wrap {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            padding: 16px 0;
        }

        .logo {
            font-weight: 800;
            font-size: 1.15rem;
            letter-spacing: .3px;
            color: var(--primary-dark);
        }

        .logo span {
            color: var(--secondary)
        }

        nav ul {
            list-style: none;
            display: flex;
            gap: 22px;
            flex-wrap: wrap;
        }

        nav a {
            text-decoration: none;
            color: var(--text);
            font-size: .96rem;
            transition: .2s;
        }

        nav a:hover {
            color: var(--secondary)
        }

        .hero {
            min-height: 100vh;
            padding-top: 120px;
            display: flex;
            align-items: center;
            position: relative;
            background:
                linear-gradient(rgba(8, 25, 44, .68), rgba(8, 25, 44, .68)),
                url('images/hero-bg.jpg') center/cover no-repeat;
            color: #fff;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 32px;
            align-items: center;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(27, 181, 107, .15);
            color: #dff8ea;
            border: 1px solid rgba(27, 181, 107, .22);
            margin-bottom: 18px;
            font-size: .92rem;
            font-weight: 700;
        }

        h1 {
            font-size: clamp(2.3rem, 5vw, 4.4rem);
            line-height: 1.02;
            margin-bottom: 18px;
        }

        h1 span {
            color: #7ef0b0
        }

        .hero p {
            max-width: 620px;
            font-size: 1.05rem;
            margin-bottom: 28px;
            color: rgba(255, 255, 255, .88);
        }

        .btns {
            display: flex;
            gap: 14px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 14px 22px;
            border-radius: 14px;
            text-decoration: none;
            font-weight: 700;
            transition: .2s ease;
        }

        .btn-primary {
            background: var(--secondary);
            color: var(--white);
            box-shadow: 0 10px 22px rgba(27, 181, 107, .18);
            border: 1px solid transparent;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            filter: brightness(1.03)
        }

        .btn-outline {
            border: 1px solid rgba(255, 255, 255, .25);
            color: var(--white);
            background: rgba(255, 255, 255, .08);
        }

        .btn-outline:hover {
            border-color: var(--secondary);
            color: #dff8ea;
        }

        .panel {
            background: var(--card);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
        }

        .hero-card {
            padding: 28px;
            color: var(--text);
            backdrop-filter: blur(8px);
        }

        .hero-card h3 {
            color: var(--primary-dark);
            margin-bottom: 14px;
            font-size: 1.2rem;
        }

        .hero-card ul {
            list-style: none;
            display: grid;
            gap: 12px;
            color: var(--muted);
        }

        .hero-card li {
            display: flex;
            gap: 10px;
            align-items: flex-start;
        }

        .check {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            background: rgba(27, 181, 107, .12);
            color: var(--secondary);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: .85rem;
            flex: 0 0 auto;
            margin-top: 1px;
        }

        .section-title {
            font-size: 2rem;
            margin-bottom: 10px;
            color: var(--primary-dark);
        }

        .section-subtitle {
            color: var(--muted);
            max-width: 760px;
            margin-bottom: 28px;
        }

        .services-grid,
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .card {
            padding: 24px;
            transition: .22s ease;
        }

        .card:hover {
            transform: translateY(-4px);
            border-color: rgba(27, 181, 107, .22);
        }

        .card h3 {
            margin-bottom: 10px;
            color: var(--primary-dark);
            font-size: 1.1rem;
        }

        .card p {
            color: var(--muted)
        }

        .benefit {
            display: flex;
            gap: 12px;
            align-items: flex-start;
        }

        .icon {
            width: 42px;
            height: 42px;
            border-radius: 14px;
            background: linear-gradient(135deg, rgba(15, 94, 168, .12), rgba(27, 181, 107, .12));
            color: var(--primary-dark);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            flex: 0 0 auto;
        }

        .cta {
            background: linear-gradient(135deg, var(--primary-dark), var(--primary));
            color: var(--white);
            border-radius: 28px;
            padding: 34px;
            box-shadow: var(--shadow);
        }

        .cta h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .cta p {
            color: rgba(255, 255, 255, .85);
            margin-bottom: 22px;
            max-width: 720px;
        }

        .contact {
            display: grid;
            grid-template-columns: .9fr 1.1fr;
            gap: 28px;
            align-items: start;
        }

        .contact-box {
            padding: 26px
        }

        .contact-box h3 {
            color: var(--primary-dark);
            margin-bottom: 10px
        }

        .contact-box p {
            color: var(--muted);
            margin-bottom: 16px
        }

        .contact-list {
            list-style: none;
            display: grid;
            gap: 12px;
            color: var(--muted);
        }

        .contact-list strong {
            color: var(--text)
        }

        form {
            padding: 26px
        }

        .field {
            margin-bottom: 16px
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: var(--primary-dark);
            font-size: .95rem;
            font-weight: 700;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 14px 16px;
            border-radius: 14px;
            border: 1px solid var(--line);
            background: #fff;
            color: var(--text);
            outline: none;
            transition: .2s;
            font: inherit;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: var(--secondary);
            box-shadow: 0 0 0 4px rgba(27, 181, 107, .10);
        }

        textarea {
            min-height: 150px;
            resize: vertical
        }

        footer {
            padding: 26px 0;
            border-top: 1px solid rgba(216, 231, 243, .9);
            text-align: center;
            color: var(--muted);
            font-size: .95rem;
        }

        @media (max-width: 920px) {

            .hero-grid,
            .services-grid,
            .benefits-grid,
            .contact {
                grid-template-columns: 1fr
            }

            .hero {
                padding-top: 145px
            }
        }

        @media (max-width: 600px) {
            .header-wrap {
                flex-direction: column;
                align-items: flex-start
            }

            nav ul {
                gap: 14px
            }

            .btns {
                flex-direction: column
            }

            .btn {
                width: 100%;
                text-align: center
            }

            section {
                padding: 72px 0
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="container header-wrap">
            <div class="logo">MAC <span>Benefícios</span></div>
            <nav>
                <ul>
                    <li><a href="#inicio">Início</a></li>
                    <li><a href="#beneficios">Benefícios</a></li>
                    <li><a href="#planos">Planos</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero" id="inicio">
            <div class="container hero-grid">
                <div>
                    <div class="badge">Convênios e benefícios para sua saúde</div>
                    <h1>Mais cuidado, <span>mais facilidade</span> e atendimento de confiança</h1>
                    <p>
                        Encontre soluções em convênios com foco em praticidade, suporte próximo e opções pensadas
                        para pessoas e empresas.
                    </p>
                    <div class="btns">
                        <a class="btn btn-primary" href="#contato">Solicitar proposta</a>
                        <a class="btn btn-outline" href="#planos">Conhecer opções</a>
                    </div>
                </div>

                <div class="hero-card panel">
                    <h3>Por que escolher a MAC Benefícios?</h3>
                    <ul>
                        <li><span class="check">✓</span><span>Atendimento humano e consultivo</span></li>
                        <li><span class="check">✓</span><span>Planos e convênios sob medida</span></li>
                        <li><span class="check">✓</span><span>Orientação clara na contratação</span></li>
                        <li><span class="check">✓</span><span>Suporte para pessoa física e empresa</span></li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="beneficios">
            <div class="container">
                <h2 class="section-title">Benefícios</h2>
                <p class="section-subtitle">
                    Destaque os principais diferenciais do seu atendimento e dos convênios oferecidos.
                </p>

                <div class="benefits-grid">
                    <div class="card panel benefit">
                        <div class="icon">🏥</div>
                        <div>
                            <h3>Rede de atendimento</h3>
                            <p>Opções com foco em praticidade, cobertura e acesso facilitado.</p>
                        </div>
                    </div>

                    <div class="card panel benefit">
                        <div class="icon">💙</div>
                        <div>
                            <h3>Atendimento próximo</h3>
                            <p>Suporte dedicado para esclarecer dúvidas e orientar cada etapa.</p>
                        </div>
                    </div>

                    <div class="card panel benefit">
                        <div class="icon">📋</div>
                        <div>
                            <h3>Propostas personalizadas</h3>
                            <p>Soluções ajustadas ao perfil, necessidade e orçamento do cliente.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="planos">
            <div class="container">
                <h2 class="section-title">Planos e soluções</h2>
                <p class="section-subtitle">
                    Use esta área para apresentar categorias de convênio, perfis de contratação ou faixas de atendimento.
                </p>

                <div class="services-grid">
                    <div class="card panel">
                        <h3>Plano Individual</h3>
                        <p>Ideal para quem busca cuidado, segurança e atendimento acessível.</p>
                    </div>
                    <div class="card panel">
                        <h3>Plano Familiar</h3>
                        <p>Uma opção prática para proteger quem você mais ama com mais tranquilidade.</p>
                    </div>
                    <div class="card panel">
                        <h3>Plano Empresarial</h3>
                        <p>Benefício para equipes, com foco em valorização e retenção de talentos.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container cta">
                <h2>Quer um site com cara de convênio de verdade?</h2>
                <p>
                    Posso refinar ainda mais esse layout com sua logo, telefone, WhatsApp, cores exatas e textos reais da MAC Benefícios.
                </p>
                <a class="btn btn-primary" href="#contato">Falar com a equipe</a>
            </div>
        </section>

        <section id="contato">
            <div class="container contact">
                <div class="contact-box panel">
                    <h3>Contato</h3>
                    <p>Deixe sua mensagem para receber atendimento e uma proposta personalizada.</p>
                    <ul class="contact-list">
                        <li><strong>WhatsApp:</strong> (00) 00000-0000</li>
                        <li><strong>E-mail:</strong> contato@macbeneficios.com.br</li>
                        <li><strong>Atendimento:</strong> Seg–Sex, 8h às 18h</li>
                    </ul>
                </div>

                <form class="panel" action="https://formspree.io/f/SEU_ID" method="POST">
                    <div class="field">
                        <label for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" required />
                    </div>

                    <div class="field">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required />
                    </div>

                    <div class="field">
                        <label for="telefone">Telefone</label>
                        <input type="tel" id="telefone" name="telefone" />
                    </div>

                    <div class="field">
                        <label for="plano">Tipo de interesse</label>
                        <select id="plano" name="plano">
                            <option value="">Selecione</option>
                            <option value="individual">Plano Individual</option>
                            <option value="familiar">Plano Familiar</option>
                            <option value="empresarial">Plano Empresarial</option>
                        </select>
                    </div>

                    <div class="field">
                        <label for="mensagem">Mensagem</label>
                        <textarea id="mensagem" name="mensagem" required></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit">Enviar mensagem</button>
                </form>
            </div>
        </section>
    </main>

    <footer>
        © 2026 MAC Benefícios. Todos os direitos reservados.
    </footer>
</body>

</html>