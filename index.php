<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evenza - Gestão de Eventos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1a1a1a;
            --primary-dark: #000000;
            --secondary: #333333;
            --accent:rgb(173, 135, 65);
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        
        .navbar {
            padding: 15px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background-image: url('img/black-lines.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: rgba(0, 0, 0, 0.5); 
            background-blend-mode: multiply;
        }
        
        .navbar-brand {
            font-size: 2rem;
            font-weight: 700;
            color: white;
            letter-spacing: 1px;
        }
        
        #background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        /* Overlay */
        .hero-section::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(10, 10, 10, 0.8) 0%, rgba(1, 1, 15, 0.5) 100%);
            z-index: 1;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .hero-section {
                height: 80vh; 
            }

            .hero-section h1 {
                font-size: 2.5rem;
            }
        }
        
        .hero-section h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .hero-section p {
            font-size: 1.25rem;
            max-width: 800px;
            margin: 0 auto 30px;
        }
        
        .section {
            padding: 60px 0;
        }
        
        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 40px;
            color: var(--primary);
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            height: 4px;
            background: var(--accent);
            width: 70px;
            left: 0;
        }
        
        .text-center.section-title:after {
            left: 50%;
            transform: translateX(-50%);
        }
        
        .feature-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .feature-icon {
            font-size: 2.5rem;
            color: var(--accent);
            margin-bottom: 20px;
        }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.4);
        }
        
        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
            padding: 12px 30px;
            font-weight: 600;
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        .btn-outline-primary:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.4);
        }
        
        .audience-item {
            display: flex;
            margin-bottom: 25px;
            align-items: center;
        }
        
        .audience-icon {
            background-color: rgba(201, 169, 110, 0.1);
            color: var(--accent);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            margin-right: 20px;
            flex-shrink: 0;
        }
        
        .cta-section {
            background: linear-gradient(135deg, #1a1a1a 0%, #333333 100%);
            color: white;
            padding: 80px 0;
            text-align: center;
            border-radius: 0; 
            margin: 60px 0;
            background-image: url('img/black-prism-concept-ai-generated.jpg');
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
            width: 100%; 
        }
        
        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .cta-section p {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }
        
        .contact-section {
            background-color: #f8f9fa;
            padding: 60px 0;
            border-radius: 10px;
            background-image: url('img/black-geometric.jpg');
            background-size: cover;
            background-position: center;
            background-blend-mode: soft-light;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .contact-icon {
            color: var(--accent);
            font-size: 1.5rem;
            margin-right: 15px;
        }
        
        footer {
            background-color: var(--dark);
            color: white;
            padding: 30px 0;
            text-align: center;
            background-image: url('img/black-lines.jpg');
            background-size: cover;
            background-position: center;
            background-blend-mode: overlay;
        }
        
        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0;
            }
            
            .hero-section h1 {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
        }

        .text-accent {
            color: var(--accent);
        }

        .bg-dark-elegant {
            background-color: #1a1a1a;
        }

        .card {
            border: none;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        

        .cta-container {
            padding-left: 0;
            padding-right: 0;
            max-width: 100%;
            width: 100%;
        }
        
        .contact-info-item {
            background: white;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            display: flex;
            align-items: center;
        }
        
        .contact-info-icon {
            width: 60px;
            height: 60px;
            background-color: rgba(201, 169, 110, 0.1);
            color: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-right: 20px;
        }
        
        .back-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: var(--accent);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
            z-index: 99;
            transition: all 0.3s ease;
        }
        
        .back-to-top:hover {
            background-color: var(--primary);
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-calendar-check me-2"></i>Evenza
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#why-choose">Por que escolher</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#audience">Para quem é</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>
                </ul>
                <a href="listar-eventos.php" class="btn btn-light ms-3">Entrar</a>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <video autoplay muted loop playsinline id="background-video">
            <source src="video/video2.mp4" type="video/mp4">
            Seu navegador não suporta vídeo HTML5.
        </video>
        <div class="container hero-content">
            <h1>Evenza - Gestão de Eventos</h1>
            <p>A solução completa para facilitar a gestão de eventos corporativos, reuniões estratégicas, webaulas e confraternizações.</p>
            <a href="listar-eventos.php" class="btn btn-light btn-lg">Começar agora</a>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Bem-vindo ao Evenza</h2>
                    <p class="lead">Nossa plataforma foi criada para otimizar a experiência dos organizadores e garantir o controle completo da sua programação.</p>
                    <p>Do convite ao RSVP, passando por confirmações personalizadas e relatórios detalhados, o Evenza oferece tudo que você precisa para gerenciar seus eventos com eficiência.</p>
                </div>
                <div class="col-lg-6">
                    <img src="img/img5.jpg" alt="Gestão de Eventos" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light" id="why-choose">
        <div class="container">
            <h2 class="section-title text-center">Por que escolher o Evenza?</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>Soluções sob medida</h4>
                        <p>Personalize cada evento de acordo com suas necessidades específicas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                        <h4>Convites e RSVP personalizados</h4>
                        <p>Crie convites atraentes e gerencie confirmações com facilidade.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                        <h4>Painel intuitivo</h4>
                        <p>Gestão centralizada com interface amigável e fácil de usar.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-robot"></i>
                        </div>
                        <h4>Automação e notificações</h4>
                        <p>Automatize tarefas repetitivas e mantenha todos informados.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-card text-center">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4>Segurança e confiabilidade</h4>
                        <p>Seus dados e de seus convidados sempre protegidos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section bg-light" id="audience">
        <div class="container">
            <h2 class="section-title text-center">Para quem é o Evenza?</h2>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="audience-item">
                        <div class="audience-icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div>
                            <h4>Empresas</h4>
                            <p>Que organizam eventos corporativos e reuniões estratégicas.</p>
                        </div>
                    </div>
                    <div class="audience-item">
                        <div class="audience-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                        <div>
                            <h4>Departamentos de Marketing</h4>
                            <p>E comunicação que realizam webaulas e treinamentos.</p>
                        </div>
                    </div>
                    <div class="audience-item">
                        <div class="audience-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                        <div>
                            <h4>Equipes de Gestão</h4>
                            <p>Que precisam gerenciar confirmações de presença e preferências de participantes.</p>
                        </div>
                    </div>
                    <div class="audience-item">
                        <div class="audience-icon">
                            <i class="fas fa-glass-cheers"></i>
                        </div>
                        <div>
                            <h4>Organizadores de Eventos</h4>
                            <p>De confraternizações, festas de fim de ano, eventos internos e externos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="img/img2.jpg" alt="Para quem é o Evenza" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid p-0">
        <div class="cta-section">
            <h2>Comece agora!</h2>
            <p>Facilite a gestão dos seus eventos com uma plataforma que oferece eficiência, controle e praticidade.</p>
            <p>Solicite uma demonstração ou entre em contato para saber mais.</p>
            <a href="#contact" class="btn btn-light btn-lg me-3">Fale Conosco</a>
            <a href="#" class="btn btn-outline-light btn-lg">Agende um teste gratuito</a>
        </div>
    </section>

    <section class="section contact-section" id="contact">
        <div class="container">
            <h2 class="section-title text-center mb-5">Fale Conosco</h2>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div>
                                    <h5>Email</h5>
                                    <p>contato@evenza.com.br</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div>
                                    <h5>Telefone</h5>
                                    <p>(67) 3456-7890</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div>
                                    <h5>Endereço</h5>
                                    <p>Av. Brasil Central, 477 - Campo Grande MS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-clock"></i>
                                </div>
                                <div>
                                    <h5>Horário de Atendimento</h5>
                                    <p>Segunda a Sexta: 9h às 18h</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fas fa-headset"></i>
                                </div>
                                <div>
                                    <h5>Suporte</h5>
                                    <p>suporte@evenza.com.br</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <h3>Evenza</h3>
                    <p>Transformando a gestão de eventos</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <div class="mt-3 mt-md-0">
                        <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <p class="mt-3">&copy; <?php echo date('Y'); ?> Evenza. Todos os direitos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top" onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
        <i class="fas fa-arrow-up"></i>
    </a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>