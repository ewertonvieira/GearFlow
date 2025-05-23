@extends('layouts.app')

@section('content')
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mb-4">
        <!-- Cartão de Equipamentos Totais -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 rounded-4 h-100 animated-card card-hover">
                <!-- Link que cobre todo o cartão -->
                <a href="{{ route('equipamentos.index') }}" class="text-decoration-none text-dark">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <!-- Ícone de equipamentos com cor azul e tamanho ajustado -->
                            <i class="fas fa-cogs fa-2x text-primary"></i>
                        </div>
                        <h5 class="card-title text-uppercase text-muted fw-semibold">Equipamentos Totais</h5>
                        <p class="card-text fs-1 fw-bold">{{ $totalEquipamentos }}</p>
                    </div>
                </a>
            </div>
        </div>



        <!-- Cartão de Usuários Cadastrados -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 rounded-4 h-100 animated-card card-hover">
                <!-- Link que cobre todo o cartão -->
                <a href="{{ route('usuarios.index') }}" class="text-decoration-none text-dark">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="fas fa-users fa-2x text-primary"></i> <!-- Ícone de usuários, com cor azul -->
                        </div>
                        <h5 class="card-title text-uppercase text-muted fw-semibold">Usuários Cadastrados</h5>
                        <p class="card-text fs-1 fw-bold">{{ $totalUsuarios }}</p>
                    </div>
                </a>
            </div>
        </div>



        <!-- Cartão de Empréstimos Totais -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 rounded-4 h-100 animated-card card-hover">
                <!-- Link que cobre todo o cartão -->
                <a href="{{ route('emprestimos.index') }}" class="text-decoration-none text-dark">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="fas fa-clipboard-list fa-2x text-primary"></i> <!-- Ícone de lista, mais adequado para empréstimos -->
                        </div>
                        <h5 class="card-title text-uppercase text-muted fw-semibold">Empréstimos Totais</h5>
                        <p class="card-text fs-1 fw-bold">{{ $totalEmprestimos }}</p>
                    </div>
                </a>
            </div>
        </div>


        <!-- Cartão de Equipamentos em Manutenção -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 rounded-4 h-100 animated-card card-hover">
                <a href="{{ route('manutencao.index') }}" class="text-decoration-none text-dark">
                    <div class="card-body text-center">
                        <div class="mb-2">
                            <i class="fas fa-tools fa-2x text-primary"></i> <!-- Ícone azul -->
                        </div>
                        <h5 class="card-title text-uppercase text-muted fw-semibold">Equipamentos em Manutenção</h5>
                        <p class="card-text fs-1 fw-bold">{{ $totalManutencoesAtivas }}</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

<style>
    /* Estilo geral para os cartões */
    .card-hover {
        border: none;
        border-radius: 12px;
        overflow: hidden; /* Garante que os cantos arredondados fiquem limpos */
        transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        background-color: #ffffff; /* Cor de fundo padrão do cartão */
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .card-hover:hover {
        transform: translateY(-10px) scale(1.05);  /* Eleva o cartão e aumenta o tamanho */
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);  /* Sombra maior no hover */
        background-color: #f0f8ff;  /* Cor de fundo mais clara para o hover */
    }

    /* Efeito para o ícone dentro do cartão */
    .card-hover i {
        font-size: 40px;
        color: #007bff;
        transition: transform 0.3s ease, color 0.3s ease;
    }

    .card-hover:hover i {
        transform: scale(1.2);  /* Aumenta o ícone */
        color: #0056b3;  /* Muda a cor do ícone */
    }

    /* Estilos do texto do título */
    .card-title {
        font-size: 1.1rem;
        color: #6c757d;
        transition: color 0.3s ease;
    }

    .card-hover:hover .card-title {
        color: #007bff;  /* Muda a cor do título para azul */
    }

    /* Estilos do texto do corpo do cartão */
    .card-text {
        font-size: 2rem;
        font-weight: bold;
        color: #333;
        transition: color 0.3s ease;
    }

    .card-hover:hover .card-text {
        color: #0056b3;  /* Muda a cor do texto para um tom de azul */
    }

    /* Remover o estilo padrão do link */
    .no-style-link {
        display: block; /* Garante que o link ocupa o espaço necessário para ser clicável */
        height: 100%;  /* Garante que o link ocupa todo o tamanho do cartão */
        width: 100%;   /* Ocupa 100% da largura */
        text-decoration: none; /* Remove o sublinhado */
        color: inherit; /* Mantém a cor do texto do cartão */
    }

    /* Efeito de hover para o link */
    .no-style-link:hover {
        background-color: rgba(0, 123, 255, 0.1);  /* Muda o fundo levemente para indicar que o link foi clicado */
    }
</style>
