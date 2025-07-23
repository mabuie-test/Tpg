<?php
require __DIR__ . '/includes/header.php';
?>
<!-- conteúdo de reserva.html aqui -->

   <!-- Hero Section with Video Background -->
    <section class="hero" id="home">
        <video autoplay muted loop playsinline class="hero-video" id="background-video">
            <source src="phi.MOV" type="video/mp4">
            Seu navegador não suporta vídeos HTML5.
        </video>
        <div class="container">
            <h2>Serviços Premium de Abastecimento Naval em Moçambique</h2>
            <p>Seu parceiro confiável em logística marítima e provisões para embarcações ao longo de toda a costa moçambicana</p>
            <a href="#order" class="btn">Solicitar Serviço</a>
            <a href="#contact" class="btn btn-outline">Contate-nos</a>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" id="services">
        <div class="container">
            <div class="section-title">
                <h2>Nossos Serviços em Moçambique</h2>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img">
                        <img src="tubo.jpeg" alt="Fuel Supply">
                    </div>
                    <div class="service-content">
                        <h3>Tubos hidráulicos</h3>
                        <p>Fornecemos tubos hidráulicos de alta resistência, ideais para aplicações marítimas e industriais, além de serviços especializados em reparação e manutenção.</p>
                        <a href="#order" class="btn">Solicitar</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <img src="agua.jpeg" alt="Potable Water">
                    </div>
                    <div class="service-content">
                        <h3>Fornecimento de Água Potável</h3>
                        <p>Água limpa para consumo entregue em sua embarcação em conformidade com os regulamentos de saúde moçambicanos e padrões internacionais.</p>
                        <a href="#order" class="btn">Solicitar</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <img src="llixo.jpeg" alt="Port Logistics">
                    </div>
                    <div class="service-content">
                        <h3>Garbage Collector</h3>
                        <p>Realizamos a coleta e o manejo adequado de resíduos sólidos e líquidos gerados a bordo de navios, seguindo rigorosamente as normas ambientais nacionais e internacionais.</p>
                        <a href="#order" class="btn">Solicitar</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <img src="alimento.jpeg" alt="Provisions & Supplies">
                    </div>
                    <div class="service-content">
                        <h3>Provisões e Mantimentos</h3>
                        <p>Provisões frescas, mantimentos secos e itens vinculados entregues em sua embarcação em conformidade com as alfândegas moçambicanas.</p>
                        
                        <div class="fruit-gallery">
                            <div class="fruit-item">
                                <img src="1.jpeg" alt="Frutas Frescas 1">
                            </div>
                            <div class="fruit-item">
                                <img src="2.jpeg" alt="Frutas Frescas 2">
                            </div>
                            <div class="fruit-item">
                                <img src="3.jpeg" alt="Frutas Frescas 3">
                            </div>
                            <div class="fruit-item">
                                <img src="4.jpeg" alt="Frutas Frescas 4">
                            </div>
                        </div>
                        
                        <a href="#order" class="btn">Solicitar</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <img src="ole.jpeg" alt="Lubricants">
                    </div>
                    <div class="service-content">
                        <h3>Lubrificantes Marítimos</h3>
                        <p>Fornecemos lubrificantes marítimos de alta qualidade, desenvolvidos para atender às demandas específicas de embarcações e motores marinhos.</p>
                        <a href="#order" class="btn">Solicitar</a>
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-img">
                        <img src="PH1.jpg">
                    </div>
                    <div class="service-content">
                        <h3>Transporte em Offshore</h3>
                        <p>Nós oferecemos serviços completos de transporte em operações offshore, garantindo segurança, agilidade e eficiência em todas as etapas.</p>
                        <a href="#order" class="btn">Solicitar</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about" id="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2>Sobre Nossas Operações em Moçambique</h2>
                    <p>PHIL ASEAN PROVIDER & LOGISTICS é o principal provedor de serviços marítimos especializado na costa moçambicana, com ampla experiência em operações portuárias locais e regulamentações marítimas.</p>
                    <p>Desde 2010, atendemos embarcações em todos os portos moçambicanos, incluindo Maputo, Beira, Nacala, Pemba e Quelimane com disponibilidade 24/7 e tempos de resposta rápidos.</p>
                    <p>Nosso profundo conhecimento dos procedimentos alfandegários moçambicanos e requisitos das autoridades portuárias garante operações suaves para todos os nossos clientes. Mantemos excelentes relacionamentos com todas as autoridades relevantes e fornecedores locais.</p>
                    <p>Nossa equipe consiste em profissionais marítimos com amplo conhecimento local, garantindo conformidade com todas as regulamentações moçambicanas enquanto prestamos um serviço eficiente.</p>
                </div>
                <div class="about-img">
                    <img src="IMG_8120.JPG" alt="Costa Moçambicana">
                </div>
            </div>
        </div>
    </section>

    <!-- Order Section -->
    <section class="section order" id="order">
        <div class="container">
            <div class="section-title">
                <h2>Solicitar Serviços em Moçambique</h2>
            </div>
            <form id="service-order-form" class="order-form">
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Nome Completo</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Empresa</label>
                        <input type="text" id="company" class="form-control" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Telefone</label>
                        <input type="tel" id="phone" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="vessel">Nome da Embarcação</label>
                    <input type="text" id="vessel" class="form-control" required>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="port">Porto Moçambicano</label>
                        <select id="port" class="form-control" required>
                            <option value="">Selecione um porto moçambicano</option>
                            <option value="maputo">Maputo</option>
                            <option value="beira">Beira</option>
                            <option value="nacala">Nacala</option>
                            <option value="pemba">Pemba</option>
                            <option value="quelimane">Quelimane</option>
                            <option value="other">Outro Porto Moçambicano</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Data Estimada</label>
                        <input type="date" id="date" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="service">Serviço Solicitado</label>
                    <select id="service" class="form-control" required>
                        <option value="">Selecione um serviço</option>
                        <option value="fuel">Serviços de Bunkering</option>
                        <option value="water">Fornecimento de Água Potável</option>
                        <option value="lubricants">Lubrificantes Marítimos</option>
                        <option value="provisions">Provisões e Mantimentos</option>
                        <option value="logistics">Logística Portuária</option>
                        <option value="emergency">Serviços de Emergência</option>
                        <option value="other">Outro Serviço</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantidade/Volume (especificar unidade)</label>
                    <input type="text" id="quantity" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="notes">Observações Adicionais</label>
                    <textarea id="notes" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn submit-btn">Enviar Solicitação</button>
            </form>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="section" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Nossos Contatos em Moçambique</h2>
            </div>
            <div class="contact-info">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Sede</h3>
                    <p>Porto de Maputo<br>Moçambique</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h3>Telefones</h3>
                    <p>+258 878979532 (Principal)</p>
                    <p>+258 874883021 (Emergência)</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p>philasean@philaseanprovider.co.mz</p>
                    <p>shipsupply@philaseanprovider.co.mz</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Horário de Funcionamento</h3>
                    <p>24 horas por dia, 7 dias por semana</p>
                    <p>Serviços de emergência disponíveis 24/7</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-col">
                    <h3>PHIL ASEAN MOÇAMBIQUE</h3>
                    <p>Seu parceiro confiável em serviços marítimos ao longo da costa moçambicana desde 2010.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Nossos Serviços</h3>
                    <ul class="footer-links">
                        <li><a href="#">Serviços de Bunkering</a></li>
                        <li><a href="#">Agenciamento Portuário</a></li>
                        <li><a href="#">Provisões para Embarcações</a></li>
                        <li><a href="#">Serviços Técnicos</a></li>
                        <li><a href="#">Desembaraço Aduaneiro</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Links Rápidos</h3>
                    <ul class="footer-links">
                        <li><a href="#">Tarifas Portuárias</a></li>
                        <li><a href="#">Regulamentos Aduaneiros</a></li>
                        <li><a href="#">Informações Portuárias</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Carreiras</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Newsletter</h3>
                    <p>Assine para atualizações sobre condições portuárias e nossos serviços em Moçambique.</p>
                    <form id="newsletter-form">
                        <div class="form-group">
                            <input type="email" placeholder="Seu email" class="form-control" required>
                        </div>
                        <button type="submit" class="btn">Assinar</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 PHIL ASEAN PROVIDER & LOGISTICS - Operações em Moçambique. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <!-- Order Confirmation Modal -->
    <div class="modal" id="order-modal">
        <div class="modal-content">
            <button class="close-modal" id="close-modal">&times;</button>
            <div class="modal-icon">
                <i class="fas fa-check-circle"></i>
            </div>
            <h2>Solicitação Enviada com Sucesso!</h2>
            <p>Obrigado por escolher a PHIL ASEAN PROVIDER & LOGISTICS. Sua solicitação foi recebida e nossa equipe moçambicana entrará em contato em breve para confirmar os detalhes.</p>
            <p id="order-reference"></p>
            <button class="btn" id="modal-close-btn">Fechar</button>
        </div>
    </div>

    <!-- Invoice Modal -->
    <div class="modal" id="invoice-modal">
        <div class="modal-content" style="max-width: 800px;">
            <button class="close-modal" id="close-invoice-modal">&times;</button>
            <div class="invoice-header">
                <div class="invoice-logo">
                    <img src="phil.jpeg" alt="PHIL ASEN" style="height: 60px;">
                </div>
                <div class="invoice-title">
                    <h2>FATURA FISCAL</h2>
                    <p>PHIL ASEAN PROVIDER & LOGISTICS</p>
                    <p>Porto de Maputo, Moçambique</p>
                    <p>NIF: MZ123456789</p>
                </div>
            </div>
            
            <div class="invoice-details">
                <div class="invoice-from">
                    <h3>De:</h3>
                    <p>PHIL ASEAN PROVIDER & LOGISTICS</p>
                    <p>Porto de Maputo</p>
                    <p>Moçambique</p>
                    <p>Tel: +258 878979532</p>
                    <p>Email: shipsupply@philaseanprovider.co.mz</p>
                </div>
                
                <div class="invoice-to">
                    <h3>Para:</h3>
                    <div id="invoice-client-details">
                        <!-- Detalhes do cliente serão inseridos aqui via JavaScript -->
                    </div>
                </div>
                
                <div class="invoice-meta">
                    <p><strong>Fatura #:</strong> <span id="invoice-number"></span></p>
                    <p><strong>Data:</strong> <span id="invoice-date"></span></p>
                    <p><strong>Vencimento:</strong> <span id="invoice-due-date"></span></p>
                </div>
            </div>
            
            <table class="invoice-items">
                <thead>
                    <tr>
                        <th>Serviço</th>
                        <th>Descrição</th>
                        <th>Quantidade</th>
                        <th>Preço Unitário (USD)</th>
                        <th>Valor (USD)</th>
                    </tr>
                </thead>
                <tbody id="invoice-items-body">
                    <!-- Itens da fatura serão inseridos aqui via JavaScript -->
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" style="text-align: right;"><strong>Subtotal:</strong></td>
                        <td id="invoice-subtotal">$0.00</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: right;"><strong>IVA (16%):</strong></td>
                        <td id="invoice-vat">$0.00</td>
                    </tr>
                    <tr>
                        <td colspan="4" style="text-align: right;"><strong>Total:</strong></td>
                        <td id="invoice-total">$0.00</td>
                    </tr>
                </tfoot>
            </table>
            
            <div class="invoice-footer">
                <div class="invoice-payment">
                    <h3>Informações de Pagamento</h3>
                    <p><strong>Banco:</strong> Banco Comercial de Moçambique</p>
                    <p><strong>Nome da Conta:</strong> PHIL ASEAN PROVIDER & LOGISTICS</p>
                    <p><strong>Número da Conta:</strong> 1234567890</p>
                    <p><strong>Código SWIFT:</strong> BCMOMZMA</p>
                    <p><strong>Vencimento:</strong> 14 dias a partir da data da fatura</p>
                </div>
                <div class="invoice-notes">                    <h3>Notas</h3>
                    <p>Obrigado pelo seu negócio!</p>
                    <p>Todos os pagamentos devem ser feitos em USD.</p>
                    <p>Por favor, cite o número da fatura ao efetuar o pagamento.</p>
                    <p>Para quaisquer dúvidas, contate nosso departamento financeiro em accounts@philasen.co.mz</p>
                </div>
            </div>
            
            <div class="invoice-actions">
                <button class="btn" id="print-invoice"><i class="fas fa-print"></i> Imprimir Fatura</button>
                <button class="btn" id="download-invoice"><i class="fas fa-download"></i> Baixar PDF</button>
                <button class="btn btn-outline" id="close-invoice-btn">Fechar</button>
            </div>
        </div>
    </div>

    <script>
        // Controle do Menu Mobile
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {            document.getElementById('main-menu').classList.toggle('active');
        });
       // Alternar abas no modal de autenticação
        document.getElementById('login-tab').addEventListener('click', function() {
            document.getElementById('login-form').style.display = 'block';
            document.getElementById('register-form').style.display = 'none';
            this.classList.add('active');
            document.getElementById('register-tab').classList.remove('active');
        });

        document.getElementById('register-tab').addEventListener('click', function() {
            document.getElementById('login-form').style.display = 'none';
            document.getElementById('register-form').style.display = 'block';
            this.classList.add('active');
            document.getElementById('login-tab').classList.remove('active');
        });

        // Controle do vídeo de fundo
        document.addEventListener('DOMContentLoaded', function() {
            const video = document.getElementById('background-video');
            
            // Função para tentar reproduzir o vídeo
            function attemptPlay() {
                video.play()
                    .then(() => {
                        // Vídeo iniciado com sucesso
                    })
                    .catch(error => {
                        // Se autoplay for bloqueado, tentamos com mute
                        video.muted = true;
                        video.play();
                    });
            }

            // Tentar reproduzir imediatamente
            attemptPlay();

            // Tentar novamente se o usuário interagir com a página
            document.addEventListener('click', function() {
                if (video.paused) {
                    attemptPlay();
                }
            }, { once: true });

            // Pausar vídeo quando a página não estiver visível
            document.addEventListener('visibilitychange', function() {
                if (document.hidden) {
                    video.pause();
                } else {
                    attemptPlay();
                }
            });
        });
    </script>
<?php
require __DIR__ . '/includes/footer.php';
