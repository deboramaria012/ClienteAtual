@extends('layout.layout')

@section('title', 'Nossos Serviços')

@section('conteudo')
<main id="main">

    <section id="services" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Nossos <span>Serviços</span></h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-paint-brush fa-3x animate__animated animate__bounce"></i>
                        <h3>Personalização de Produtos</h3>
                        <p>Oferecemos uma ampla variedade de produtos personalizados para atender às suas necessidades exclusivas.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-tshirt fa-3x animate__animated animate__bounce"></i>
                        <h3>Variedade de Produtos</h3>
                        <p>Explore nossa seleção diversificada de produtos de alta qualidade, incluindo canecas, camisetas e agendas.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-check-circle fa-3x animate__animated animate__bounce"></i>
                        <h3>Qualidade e Durabilidade</h3>
                        <p>Garantimos a qualidade excepcional de todos os nossos produtos, com materiais duráveis e técnicas de impressão de alta resolução.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-shipping-fast fa-3x animate__animated animate__bounce"></i>
                        <h3>Entrega Rápida e Confiável</h3>
                        <p>Nosso serviço de entrega é rápido e confiável, garantindo que seus produtos personalizados cheguem até você rapidamente.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-hands-helping fa-3x animate__animated animate__bounce"></i>
                        <h3>Atendimento Personalizado</h3>
                        <p>Nossa equipe está aqui para garantir que sua experiência de compra seja perfeita, com suporte dedicado em cada etapa.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item">
                        <i class="fas fa-credit-card fa-3x animate__animated animate__bounce"></i>
                        <h3>Pagamento Seguro</h3>
                        <p>Oferecemos opções de pagamento seguras e convenientes para tornar suas compras online simples e seguras.</p>
                    </div>
                </div>
                <!-- Adicione mais colunas conforme necessário -->
            </div>
        </div>
    </section>

</main>
@endsection
