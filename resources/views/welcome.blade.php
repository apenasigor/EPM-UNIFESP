@extends('app')

@section('content')

    <a class="skip-to-main" href="#main-content">Pular para o conteúdo</a>
    <!--googleoff: all-->
    <div class="main-nav nav section force" id="bbMainNav">
        <div class="center force">
            <p id="aria-description-menu" class="hide">Pressione esc para fechar a caixa de diálogo.</p>
            <div role="navigation">
                <a href="#menu" title="Abrir o Menu" class="hamburger" role="button">
                    <i class="fa fa-fw fa-bars" aria-label="Abrir o Menu"></i><span class="icon-fallback">Menu</span> </a>


                <!-- <div class="french-fries"> -->
                <ul class="tablist french-fries" role="tablist" aria-describedby="aria-description-tablist">
                    <p id="aria-description-tablist" class="hide">Pressione esc para fechar a caixa de diálogo, quando aberta.</p>

                    <li class="tab" role="presentation">
                        <a href="#menu" id="tab-menu" aria-controls="tabpanel-menu" role="tab">
                            <i class="fa fa-fw fa-bars" aria-hidden="true"></i>
                            Menu
                        </a>
                    </li>


<<<<<<< HEAD

                </ul>
                <div class="tabpanel-set force">

=======
                    <li class="tab" role="presentation">
                        <a href="#search" id="tab-search" aria-controls="tabpanel-search" role="tab">
                            <i class="fa fa-fw fa-search" aria-hidden="true"></i>
                            Search
                        </a>
                    </li>
                </ul>
                <div class="tabpanel-set force">
                    <div id="tabpanel-search" class="panel-search tabpanel column" aria-labelledby="tab-search" aria-hidden="true" role="tabpanel">
                        <button class="close-box-x close" aria-label="Close tab panel widget dialog"><i class="fa fa-fw fa-times" aria-hidden="true"></i><span class="icon-fallback">Fechar</span></button>
                        <div class="search-box force">
                            <form action="{{url('#')}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="c" value="gsa">
                                <label for="search-gsa-826">Search</label>
                                <input id="search-gsa-826" class="column" type="text" name="q" value="" autocomplete="off">
                                <button type="submit" class="button column"><i class="fa fa-fw fa-search"></i><span class="text">Search</span></button>
                            </form>
                        </div>
                        <div class="ga-search-suggestions">
                            <h4>Common Searches</h4>
                            <ul class="ga-suggestion-set">
                                <li class=""> <a href="{{url('/about-us')}}" title="About Us" class="destination">About Us </a> </li>
                                <li class=""> <a href="{{url('/programs')}}" title="Programs" class="destination">Programs</a> </li>
                                <li class=""> <a href="{{url('/mission')}}" title="Mission" class="destination">Mission</a> </li>
                            </ul>
                        </div>
                    </div>
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                    <div id="tabpanel-menu" class="panel-menu tabpanel column" aria-labelledby="tab-menu" aria-hidden="true" role="tabpanel">
                        <button class="close-box-x close" aria-label="Close tab panel widget dialog"><i class="fa fa-fw fa-times" aria-hidden="true"></i><span class="icon-fallback">Fechar</span></button>
                        <ul class="site-tree tier-1">

                            <li class="parent-level">
                                <span class="visuallyhidden">Fechar o menu Sobre Nós</span></a>
<<<<<<< HEAD
                                <a href="{{url('/sobrenos')}}" title="Sobre Nós" class="destination">Sobre Nós</a>
                            </li>
                            <li class="parent-level open"> <a href="#" class="toggle-section" title="Abrir e Fechar o Menu">
                                    <i class="fa fa-minus-square-o" aria-hidden="true"></i>
                                    <span class="icon-fallback">+</span>
                                    <span class="visuallyhidden">Expandir o menu Linhas de pesquisa</span></a>
                                <a href="{{url('/Neuromodulacao')}}" title="Neuromodulação" class="destination">Neuromodulação</a>

                                <ul class="tier-2">
                                    <li class="">
                                        <a href="{{url('/Neuromodulacao/WhitePaper')}}" title="White papers" class="destination">White papers</a> </li>
                                </ul>
                            </li>
                            <li class="parent-level">
                                <span class="visuallyhidden">Fechar o menu Sobre Nós</span></a>
                                <a href="{{url('/Cetamina')}}" title="Cetamina" class="destination">Cetamina</a>
                            </li>

                            <li class="parent-level">
                                <a href="#" class="toggle-section" title="Abrir e Fechar o Menu">
                                    <i class="fa fa-plus-square-o" aria-hidden="true"></i><span class="icon-fallback">+</span>
                                    <span class="visuallyhidden">Expand Schools &amp; Divisions section</span>
                                </a>

                                <a href="{{url('/Diagnostico')}}" title="Diagnóstico" class="destination">Diagnóstico</a>
                                <ul class="tier-2">
                                    <li class="">
                                        <a href="{{url('/Diagnostico/Biologico')}}" title="Diagnóstico Biológicos" class="destination">Diagnósticos biológicos</a>
                                    </li>
                                    <li class="">
                                        <a href="{{url('/Diagnostico/Clinico')}}" title="Diagnósticos Clínicos" class="destination">Diagnósticos clínicos</a>
                                    </li>
                                </ul>
                            </li>

=======
                                <a href="{{url('/about-us')}}" title="About Us" class="destination">About Us</a>
                            </li>
                            <li class="parent-level">
                                <span class="visuallyhidden">Fechar o menu Sobre Nós</span></a>
                                <a href="{{url('/mission')}}" title="Mission" class="destination">Mission</a>
                            </li>

                            <li class="parent-level">
                                <a href="#" class="toggle-section" title="Abrir e Fechar o Menu">
                                    <i class="fa fa-plus-square-o" aria-hidden="true"></i>
                                    <span class="icon-fallback">+</span><span class="visuallyhidden">Expand Admissions &amp; Aid section</span></a>
                                <a href="{{url('/programs')}}" title="Produções" class="destination">Programs</a>
                                <ul class="tier-2">
                                    <li class=""> <a href="{{url('/programs/Linc')}}" title="LiNC " class="destination">LiNC </a></li>
                                    <li class=""> <a href="{{url('/programs/Proesq')}}" title="PROESQ " class="destination">PROESQ </a> </li>
                                    <li class=""> <a href="{{url('/programs/Prisma')}}" title="PRISMA " class="destination">PRISMA </a> </li>
                                    <li class=""> <a href="{{url('/programs/Papia')}}" title="PAPIA " class="destination">PAPIA  </a> </li>
                                    <li class=""> <a href="{{url('/programs/Inserir')}}" title="INSERIR " class="destination">INSERIR </a> </li>
                                    <li class=""> <a href="{{url('/programs/Teamm')}}" title="TEAMM " class="destination">TEAMM </a> </li>
                                    <li class=""> <a href="{{url('/programs/CucaLegal')}}" title="CUCA LEGAL" class="destination">CUCA LEGAL</a> </li>



                                </ul>
                            </li>




                            <li class="parent-level">
                                <span class="visuallyhidden">Fechar o menu Sobre Nós</span></a>
                                <a href="{{url('/team')}}" title="Team" class="destination">Team</a>
                            </li>



>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                        </ul>
                    </div>
                    <div id="tabpanel-news-events" class="panel-newsevents tabpanel column" aria-labelledby="tab-news-events" aria-hidden="true" role="tabpanel">
                        <button class="close-box-x close" aria-label="Close tab panel widget dialog"><i class="fa fa-fw fa-times" aria-hidden="true"></i><span class="icon-fallback">Close</span></button>
                        <div class="newsevents">
                            @for($i = count($papers) -1, $limit = count($papers)-5; $i>= $limit && $i >= 0; $i--)
                                <div class="collection">
                                    <h4><a href="{{$papers[$i]->pdf}}">{{$papers[$i]->name}}</a></h4>

                                    <div class="load-into"></div>
                                    <div class="more"><a href="{{$papers[$i]->pdf}}">{{$papers[$i]->authors}}</a></div>
                                    <div class="more"><a href="{{$papers[$i]->pdf}}">{{$papers[$i]->summary}}</a></div>
                                </div>
                            @endfor
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--googleon: all-->
    <v class="page-container">
        <!--[if lt IE 9]> <p class="browse-happy">Você está usando um navegador <strong>antigo</strong>
            . Por Favor<a href="http://browsehappy.com/">atualize</a> para melhorar a sua experiência.</p>
        <![endif]-->

        <div id="bbHeroSection" class="hero default section" role="banner" data-mp4="#" data-webm="#">
            <div class="sticky">
                <div class="fullwidth">

<<<<<<< HEAD
                    <div class="content">
                        <div class="identity-stripe" role="banner" style="margin-bottom: 10px;">
                            <div class="center force">
                                <a class="logo-tab column" href="{{url('/')}}" title="Home" style="padding: 0 0 10px 0; ">
                                    <img src="{{asset('/images/neuroservices/logoNeuroServices.png')}}" alt="we mind - neuroservices" ></a>
                            </div>
                        </div>

                        <div class="">
                                    <span class="textHeader">
                                        <!-- Para conhecer os nossos serviços e marcar uma consulta entre em contato que ligaremos em breve -->
                                        Agende agora suas consultas e exames
                                    </span>
                        </div>
                        <div class="animação" style="margin-left: 0px; margin-top: -60.8371px; width: 100%; height: 600px; background-color: rgb(220, 220, 220);">
                            <div class="content">
                                <!-- FORMULARIO DE CONTATO -->


                                <div class="form-style-5">
                                    <form>
                                        <fieldset>
                                            <!--<legend> Agende suas consultas e exames agora  </legend>-->
                                            <input type="text" name="field1" placeholder="Nome *">
                                            <input type="email" name="field2" placeholder="Telefone*">
                                            <textarea name="field3" placeholder="Mensagem"></textarea>


                                        </fieldset>

                                        <input type="submit" value="Enviar" />
                                    </form>
                                </div>



                                <!-- ANIMAÇÃO FUNDO -->
                                <canvas id=c></canvas>
                            </div>
=======









                <div class="content">
                    <div class="identity-stripe" role="banner" style="margin-bottom: 10px;">
                        <div class="center force">
                            <a class="logo-tab column" href="{{url('/')}}" title="Home" style="padding: 0 0 10px 0; ">
                                <img src="{{asset('/images/neuroservices/y-mind-logo.png')}}" alt="we mind - neuro services" ></a>
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                        </div>


                    </div>

                       <div class="fundoimagem">


                                <div style="width: 100%; height: 600px;">
                                <img src="{{asset('/images/neuroservices/bgymind.png')}}" alt="we mind - neuro services" >
                                </div>

                        </div>

                </div>


                </div>
                </div>
            </div>
        </div>


        <div id="main-content" role="main">

            <div id="bbTopFactsSection" class="top-facts big-section section" role="region" aria-label="Sobre nós">
                <br><br>
                <div class="sticky">

                    <div class="center">

<<<<<<< HEAD
                        <div class="content force" style="padding-top: 5%;padding-bottom: 5%;">
=======
                        <div class="content force" style="padding-top: 5%;padding-bottom: 1%;">
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb


                            <div class="section-intro block" data-block-id="19563">

<<<<<<< HEAD
                                <p class="nossoEspecialista" style="font-family: 'Merriweather', serif;">Conheça nossos<br>
                                    Especialistas </p>
                                <p class="pServicos">A clínica Neuroservices surgiu para oferecer os mais avançados protocolos em neuromodulação, cetamina e diagnósticos biológicos em psiquiatria do país.</p>
                            </div>
                            <style type="text/css">
                                /* MEDIA FULL */
                                #controladorMembros{ display: flex; justify-content: center; text-align: center; }
                                .membro1{ width: 12em; padding: 10px;}
                                .membro1 img{ width: 100%;}
                                .membro1 span { color:#563f80; font-family: 'Lato', sans-serif; font-weight: 100; }
                                .membro1 span p { font-weight: bold; color:#563f80; font-family: 'Merriweather', serif;}
                                /* MEDIA SMART */
                                @media only screen and (max-width : 500px){
                                    #controladorMembros{
                                        display: grid;
                                    }
                                }
                            </style>
                            <div id="controladorMembros">
                                <!--  IMAGEM MEMBRO1  -->
                                <div class="membro1">
                                    <img src="{{asset('/images/neuroservices/Acioly.png')}}" title="Prof. Dr. Acioly T. Lacerda">
                                    <span class="nomeMembro1">
                                        <p>Diretor Clínico</p>Prof. Dr. Acioly T. Lacerda
                                    </span>
                                </div>
                                <!--  IMAGEM MEMBRO2  -->
                                <div class="membro1">
                                    <img src="{{asset('/images/neuroservices/Alfonso.png')}}" title="Dr. Alfonso A. Massaguer">
                                    <span class="nomeMembro1">
                                        <p>Diretor Executivo</p>Dr. Alfonso A. Massaguer
                                    </span>
                                </div>
                                <!--  IMAGEM MEMBRO3  -->
                                <div class="membro1">
                                    <img src="{{asset('/images/neuroservices/alvaro.png')}}" title="Prof. Dr. Álvaro M. Dias">
                                    <span class="nomeMembro1">
                                        <p>Diretor Científico</p>Prof. Dr. Álvaro M. Dias
                                    </span>
                                </div>

                            </div>

                        </div>
                        <hr width="70%" color="#ccc" style="margin-bottom: 40px;">
=======
                                <p class="nossoEspecialista">Young Minds</p>
                                <p class="nossoEspecialistaP">Young minds of today will shape tomorrow’s society. We care for young minds by promoting mental health and preventing mental disorders.<br>
                                    Our aim is to encourage young minds to develop their full potential and empower them to deal with mental health problems.

                            </div>


                        </div>
                        <hr style="color:#fff;"></p>
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                    </div>
                </div>
            </div>

<<<<<<< HEAD
=======

>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
            <div id="bbDivisionsSection" class="divisions big-section section" role="region" aria-label="Areas de atuação">
                <div class="sticky">
                    <div class="center">
                        <div class="content force" style="padding-top: 6%; padding-bottom: 6%;">
                            <div class="section-intro block" data-block-id="19403">

<<<<<<< HEAD
                                <h3 class="servicosh3" style="font-family: 'Merriweather', serif;"> Serviços </h3>

                                <p class="pServicos">Nossos cientistas e pesquisadores clínicos são especialistas em<br>
                                    neuromodulação e diagnóstico. Conheça as diferentes técnicas com as quais<br>
                                    trabalhamos.</p>
=======
                                <h3 class="servicosh3"> Programs </h3>

                                <p class="pServicos">Our programs are focused in promoting mental health, developing treatments and cutting edge neuroscience research to
                                    prevent mental disorders, disseminating anti-stigma campaigns, and influencing policies.</p>
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb


                            </div>
                            <div class="divisions-container column force">

<<<<<<< HEAD

                                <div class="division-set force">
                                    <svg role="img" aria-labelledby="title">
                                        <title id="title">Linhas de pesquisa</title>
                                        <!-- GENOMICA -->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#e08c2d" y2="80%" x2="56%" y1="50%" x1="50%"></line>
                                        <!-- CETAMINA -->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#00afd3" y2="13%" x2="30%" y1="50%" x1="50%"></line>
                                        <!-- ENDOFENOTIPOS -->
                                        <line
                                                style="stroke-dasharray: none;
                                                stroke-dashoffset: 0px;"
                                                stroke-width="2" stroke="#563f80"
                                                y2="33%"
                                                x2="13%"
                                                y1="50%"
                                                x1="50%">

                                        </line>
                                        <!-- DIAGNOSTICO PSIQUIATRICO -->
                                        <line
                                                style="stroke-dasharray: none;
                                                stroke-dashoffset: 0px;"
                                                stroke-width="2"
                                                stroke="#cc2431"
                                                y2="33%"
                                                x2="85%"
                                                y1="50%"
                                                x1="50%">

                                        </line>
                                        <!-- NEUROMODULAÇAO -->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#ffad3a" y2="11%" x2="70%" y1="50%" x1="50%"></line>
                                        <!-- MAPEAMENTO CEREBRAL -->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#ff353b" y2="66%" x2="30%" y1="50%" x1="50%"></line>
                                        <!-- NEUROPSICOLOGIA -->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#8468aa" y2="78%" x2="76%" y1="50%" x1="50%"></line>

                                    </svg>
                                    <div style="top: 50%; left: 50%;" class="jhu division bubble column shrink">
                                        <span class="text styleText" style="left: 10%;"> NeuroServices</span>
                                    </div>
                                    <a href="{{url("/Diagnostico/Biologico")}}" >
                                        <button
                                                style="top: 80%;
                                                left: 56%;
                                                cursor: pointer;"
                                                class="division bubble button column bubble-1 applied-physics-laboratory ">
                                            <span class="text">Genômica</span>
                                        </button>
                                    </a>

                                    <a href="{{url("/Cetamina")}}" >
                                        <button style="top: 13%; left: 30%; cursor: pointer;" class="division bubble button column bubble-2 school-of-public-health ">
                                            <span class="text">Cetamina</span>
                                        </button>
                                    </a>
                                    <a href="{{url("/Diagnostico/Biologico")}}" >
                                        <button
                                                style="
                                                top: 34%;
                                                left: 17%;"
                                                class="division bubble button column bubble-3 carey-business-school ">
                                            <span class="text">Endofenótipos</span>
                                        </button>
                                    </a>
                                    <a href="{{url("/Diagnostico/Clinico")}}" >
                                        <button style="
                                        top: 35%;
                                        left: 80%;
                                        cursor: pointer;" class="division bubble button column bubble-7 school-of-education ">
                                            <span class="text">Diagnóstico psiquiátrico</span>
                                        </button>
                                    </a>
                                    <a href="{{url("/Neuromodulacao")}}" > <button style="top: 11%; left: 70%; cursor: pointer;" class="division bubble button column bubble-8 school-of-medicine ">
                                            <span class="text"> Neuromodulação </span>
                                        </button>
                                    </a>
                                    <a href="{{url("/Diagnostico/Biologico")}}" >
                                        <button style="top: 66%; left: 30%; cursor: pointer;" class="division bubble button column bubble-9 school-of-nursing ">
                                            <span class="text">Mapeamento cerebral</span>
                                        </button>
                                    </a>
                                    <a href="{{url("/Diagnostico/Clinico")}}" >
                                        <button style="top: 78%; left: 76%;" class="division bubble button column bubble-10 school-of-engineering ">
                                            <span class="text"> Neuropsicologia</span>
                                        </button>
                                    </a>

=======
                                <div class="division-set force">
                                    <svg role="img" aria-labelledby="title">
                                        <title id="title">Linhas de pesquisa</title>
                                        <!--PRISMA-->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#e08c2d" y2="80%" x2="56%" y1="50%" x1="50%"></line>
                                        <!--LINC-->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#00afd3" y2="13%" x2="30%" y1="50%" x1="50%"></line>
                                        <!--CUCALEGAL-->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#563f80" y2="17%" x2="6%" y1="50%" x1="50%"></line>
                                        <!--TEAMM-->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#cc2431" y2="30%" x2="80%" y1="50%" x1="50%"></line>
                                        <!--INSERIR-->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#ffad3a" y2="11%" x2="70%" y1="50%" x1="50%"></line>
                                        <!---->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#ff353b" y2="66%" x2="30%" y1="50%" x1="50%"></line>
                                        <!---->
                                        <line style="stroke-dasharray: none; stroke-dashoffset: 0px;" stroke-width="2" stroke="#7d5fa6" y2="78%" x2="76%" y1="50%" x1="50%"></line>
                                    </svg>
                                    <div style="top: 50%; left: 50%;" class="jhu division bubble column shrink"> <span class="text" style="left: 25%;">Y-MIND <br> Programs</span> </div>
                                    <a href="{{url("/programs/Prisma")}}" >
                                        <button style="top: 80%; left: 56%; cursor: pointer;" class="division bubble button column bubble-1 applied-physics-laboratory ">
                                            <span class="text">Psychoses and Bipolar <br> <span style="font-weight: lighter">PRISMA </span></span>
                                        </button>
                                    </a>


                                    <a href="{{url("/programs/Linc")}}" >
                                        <button style="top: 13%; left: 30%; cursor: pointer;" class="division bubble button column bubble-2 school-of-public-health ">
                                            <span class="text">NeuroScience<br> <span style="font-weight: lighter">LiNC </span></span>
                                        </button>
                                    </a>

                                    <a href="{{url("/programs/CucaLegal")}}" >
                                        <button style="top: 17%; left: 6%;" class="division bubble button column bubble-3 carey-business-school ">
                                            <span class="text">School Mental Health <br> <span style="font-weight: lighter">CUCA LEGAL</span></span>
                                        </button>
                                    </a>

                                    <!--
                                    <a href="{{url("/linhasdepesquisa/RemediacaoCognitiva")}}" >
                                        <button style="top: 22%; left: 50%; cursor: pointer;" class="division bubble button column bubble-4 school-of-arts-and-sciences ">
                                            <span class="text">TEXT</span> </button></a>


                                    <a href="{{url("/linhasdepesquisa/FMRI")}}" ><button style="top: 90%; left: 20%;" class="division bubble button column bubble-5 peabody-institute "><span class="text">fMRI</span> </button></a>
                                    <a href="{{url("/linhasdepesquisa/QEEG")}}" ><button style="top: 90%; left: 40%; cursor: pointer;" class="division bubble button column bubble-6 sais "><span class="text">QEEG</span> </button></a>
                                    -->

                                    <a href="{{url("/programs/Teamm")}}" >
                                        <button style="top: 30%; left: 80%; cursor: pointer;" class="division bubble button column bubble-7 school-of-education ">
                                            <span class="text">Autism <br> <span style="font-weight: lighter">TEAMM </span></span>
                                        </button>
                                    </a>

                                    <a href="{{url("/programs/Inserir")}}" >
                                        <button style="top: 11%; left: 70%; cursor: pointer;" class="division bubble button column bubble-8 school-of-medicine ">
                                            <span class="text">Work and Recovery<br> <span style="font-weight: lighter">INSERIR </span></span>
                                        </button>
                                    </a>

                                    <a href="{{url("/programs/Papia")}}" >
                                        <button style="top: 66%; left: 30%; cursor: pointer;" class="division bubble button column bubble-9 school-of-nursing ">
                                            <span class="text">Childhood Schizophrenia  <br> <span style="font-weight: lighter">PAPIA</span></span>
                                        </button>
                                    </a>
                                    <a href="{{url("/programs/Proesq")}}" ><button style="top: 78%; left: 76%;" class="division bubble button column bubble-10 school-of-engineering ">
                                            <span class="text">Schizophrenia  <br> <span style="font-weight: lighter">PROESQ </span></span>
                                        </button>
                                    </a>
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--googleoff: all-->
        <div class="page-footer section" role="contentinfo">
            <div class="center">
                <div class="content force">
                    <div class="identification column force">
                        <a class="footer-logo column" href="{{url('/')}}" style="margin-right: 0px;">

<<<<<<< HEAD
                            <img class="horizontal-logo center" src="{{asset('/images/neuroservices/logoneuroservices.png')}}" alt="We-Mind - NeuroServices" >
                            <img class="vertical-logo center" src="{{asset('/images/neuroservices/logoneuroservices.png')}}" alt="We-Mind - NeuroServices">
=======
                         <img class="horizontal-logo center" src="{{asset('/images/neuroservices/y-mind-peb.png')}}" alt="Centro de Neuromodulação" >
                         <img class="vertical-logo center" src="{{asset('/images/neuroservices/y-mind-peb.png')}}" alt="Centro de Neuromodulação">

>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                        </a>


                        <ul class="contact column">
<<<<<<< HEAD
                            <li class="university-name">We Mind NeuroServices</li>
                            <li class="address"><i class="fa fa-fw fa-map-marker"></i>Av. Antônio Joaquim de Moura Andrade, 315<br>
                                Vila Nova Conceição, São Paulo<br>
                                SP, 04507-000</li>
                            <li class="phone-number"><i class="fa fa-fw fa-phone-square"></i>(11) 4305-6070</li>
=======
                            <li class="university-name">Y-Mind</li>
                            <li class="address"><i class="fa fa-fw fa-map-marker"></i>Rua Pedro de Toledo, 669,<br> terceiro andar<br>
                             Vila Clementino, São Paulo.<br>
                            </li>
                            <li class="phone-number"><i class="fa fa-fw fa-phone-square"></i>55-11-5576-4845</li>

                            <li class="university-name">
                                <a href="http://wemind.com.br/" target="_blank">
                                    <img style="width: 10%;float: left;" class="horizontal-logo center" src="{{asset('/images/neuroservices/wemind.png')}}" alt="Centro de Neuromodulação" >We-Mind group</a>
                            </li>

                            <li class="university-name">
                                <a href="https://www.decisionhub.com.br/portal/" target="_blank">
                                    <img style="width: 10%;float: left;" class="horizontal-logo center" src="{{asset('/images/neuroservices/decisionhub.png')}}" alt="Centro de Neuromodulação">DecisionHub</a>
                            </li>

>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                            <li>
                            <li>
                        </ul>
                    </div>
                    <div class="nav column force">
                        <a id="search"></a>
<<<<<<< HEAD

=======
                        <div class="search-box force">
                            <!--trocar o action-->
                            <form method="POST" action="{{url('#')}}" class="column force" role="search">
                                {{ csrf_field() }}
                                <label for="search-gsa-711">Search</label>
                                <input id="search-gsa-711" class="column" type="text" name="searchbar" value="" autocomplete="off">
                                <button type="submit" class="button column"><i class="fa fa-fw fa-search"></i><span class="text">Search</span></button>
                            </form>
                        </div>
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                        <a id="menu"></a>
                        <ul class="site-tree column tier-1">
                            <li class="parent-level">
                                <a href='#' class='toggle-section' title='Expand About Us section'>
                                    <i class='fa fa-plus-square-o' aria-hidden='true'></i>
                                    <span class='icon-fallback'>+</span>
                                    <span class='visuallyhidden'>Expandir o menu</span>
                                </a>
<<<<<<< HEAD
                                <a href="{{url('/sobrenos')}}" title="Sobre Nós" class="destination">Sobre Nós</a>
=======
                                <a href="{{url('/about-us')}}" title="About Us" class="destination">About Us</a>
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                            </li>

                            <li class="parent-level">
                                <a href='#' class='toggle-section' title='Expand Academics section'>
                                    <i class='fa fa-plus-square-o' aria-hidden='true'></i>
                                    <span class='icon-fallback'>+</span>
                                    <span class='visuallyhidden'>Expandir o menu</span>
                                </a>
<<<<<<< HEAD
                                <a href="{{url('/Neuromodulacao')}}" title="Neuromodulação" class="destination">Neuromodulação </a>
=======
                                <a href="{{url('/mission')}}" title="Mission" class="destination">Mission</a>
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                            </li>

                            <li class="parent-level">
                                <a href='#' class='toggle-section' title='Expand Academics section'>
                                    <i class='fa fa-plus-square-o' aria-hidden='true'></i>
                                    <span class='icon-fallback'>+</span>
                                    <span class='visuallyhidden'>Expandir o menu</span></a>
<<<<<<< HEAD
                                <a href="{{url('/Cetamina')}}" title="Cetamina" class="destination">Cetamina</a>
=======
                                <a href="{{url('/programs')}}" title="Programs" class="destination">Programs</a>
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                            </li>
                            <li class="parent-level"> <a href='#' class='toggle-section' title='Expand Academics section'>
                                    <i class='fa fa-plus-square-o' aria-hidden='true'></i>
                                    <span class='icon-fallback'>+</span>
                                    <span class='visuallyhidden'>Expandir o menu</span></a>
<<<<<<< HEAD
                                <a href="{{url('/Diagnostico')}}" title="Diagnóstico" class="destination">Diagnóstico </a>
=======
                                <a href="{{url('/team')}}" title="Team" class="destination">Team</a>
>>>>>>> b16558901def363bd4f77a0794e8071279ca30fb
                            </li>
                        </ul>
                    </div>

                </div>

            </div>


        </div>

        <!--googleon: all-->

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-26641937-9', 'auto');
            ga('send', 'pageview');
        </script>
        <script src="{{asset('/js/base-e003bc6ce6.js')}}"></script>
        <script src="{{asset('/js/home-374867c06c.js')}}"></script>
        <script src="{{asset('/js/brainanim.js')}}"></script>
    </v>

@endsection
