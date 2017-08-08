@extends('AboutUs.model')

@section('name', 'Quem Somos')

@section('active-page')
    <li class="active-page active-section open parent-level"> <a href="{{url('/sobrenos')}}" title="Sobre nós" class="destination">Sobre Nós</a>
        <!--<ul class="tier-2">
            <li class=""> <a href="{{url('/sobrenos/missao')}}" title="Missão" class="destination">Missão</a></li>
            <li class=""> <a href="{{url('/sobrenos/visao')}}" title="Visão" class="destination">Visão</a></li>
            <li class=""> <a href="{{url('/sobrenos/estrategia')}}" title="Estratégia" class="destination">Estratégia</a> </li>
        </ul>-->
    </li>
@endsection

@section('main-content')
    <div class="block" data-block-id="8007">
        <h2><strong><span style="line-height: 1.5em; color: #563f80;">Sobre nós</span></strong></h2>
        <p style="line-height: 1.5em">
            A clínica Neuroservices surgiu para oferecer os mais avançados protocolos em neuromodulação,
            cetamina e diagnósticos biológicos em psiquiatria do país.<br>
            Contamos com uma equipe altamente qualificada de médicos, psicólogos e enfermeiros e um parque
            de equipamentos de última geração.<br><br>
            A direção executiva é realizada pelo Dr. Alfonso Massaguer, MD, que coordena uma ampla gama de
            profissionais da saúde, ao passo que a direção clínica é realizada pelo
            Prof. Dr. Livre-docente Acioly Lacerda MD, PhD (UNIFESP), autor de mais de uma centena de papers
            internacionais de alto impacto e líder nas áreas de neuromodulação e cetamina no país.<br><br>
            A clínica tem ainda direção científica do Prof. Dr. Livre-docente Álvaro M Dias, PhD, autor de
            mais de oitenta artigos internacionais de alto impacto e destacada atuação na área das neurociências
            cognitivas e computacionais.
        </p>
        </div>
@endsection