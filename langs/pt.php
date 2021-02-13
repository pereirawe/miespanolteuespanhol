<?php

class content_pt
{
    public $title = 'MI ESPAÑOL - TEU ESPANHOL';
    public $description = 'Transforme as suas paixões em espanhol e portugués';
    public $copyright = 'Todos os direitos reservados.';
    public $nav;
    public $home;
    public $aboutUs;
    public $plans;
    public $promotions;
    public $contacts;

    function __construct()
    {
        $this->nav = [
            'home' => 'Início',
            'about-us' => 'Sobre nós',
            'plans' => 'Planos',
            'promotions' => 'Promoções',
            'contacts' => 'Contatos',
        ];

        $this->home = [
            'p_1' => 'O que podemos te ensinar',
            'h1_1' => 'AULAS ONLINE',
            'h3' => 'Nosso objetivo é personalizar o aprendizado, fisicamente ou on-line, mantendo a eficácia no nosso legado e com horários flexíveis adeptos á necessidade de cada aluno.',
            'h4_1' => 'Empresarial',
            'p2_1' => 'Ensino Objetivo e técnico para atender às suas necessidades na sua área de trabalho.',
            'h4_2' => 'Aulas do Grupo',
            'p2_2' => 'Aulas de três ou quatro pessoas máximo.',
            'h4_3' => 'Aulas individuais',
            'p2_3' => 'Para um aprendizado mais pessoal.',
            'h4_4' => 'Programa de Prática',
            'p2_4' => 'O melhor para praticar o seu espanhol.',
            'btn_1' => 'Ver os planos!',
            'h1_2' => 'Sempre temos promoções!',
            'p3_1'=> 'A experiência no faz crescer en todos os aspectos da nossa vida, pensando nisso Mi español - Teu espanhol conta com professores dinâmicos e divertidos para te dar a melhor experiencia na aprendizagem del idioma espanhol.',
            'p3_2'=> 'Você gostaria de aprender espanhol e portugués exclusivamente?. Temos essa opção para você !! Aproveite esta oportunidade para aprender rápidamente a segunda língua mais falada no mundo.',
        ];

        $this->aboutUs = [
            'p1_1' => 'Vamos nos apresentar',
            'h1_1' => 'SOBRE MI ESPAÑOL - TEU ESPAÑOL',
            'h2_1' => 'Quem somos',
            'p2_1' => 'Somos uma empresa especializada em idiomas. Ministrando com excelência e experiência nativa em métodos de aprendizagem personalizados inovadores.',
            'h2_2' => 'Missão',
            'p2_2' => 'Inovar na forma de aprender utilizando diferentes técnicas, metodologias e ferramentas materiais e tecnológicas, inovando o deficiente processo de aprendizagem tradicional.',
            'h2_3' => 'Visão',
            'p2_3' => 'Nossa motivação é mudar vidas e criar oportunidades por meio do poder de aprender um novo idioma.',
            'founder_title' => 'Nossos fundadores',
            'founders' => [
                [
                    'title' => 'CO-FUNDADOR, PRES. EXECUTIVO CEO',
                    'name' => 'ALEJANDRO TOVAR',
                    'bio' => 'Uma relação com a idea de ensinar a língua espanhola é poder tornar a língua conhecida. Nascido na Venezuela, onde se desenvolveu como administrador e se especializou em marketing digital, onde poderia ter a oportunidade de participar de grandes projetos empresariais e educacionais em diferentes países.'
                ],
                [
                    'title' => 'CO-FUNDADOR, DIRETOR GERAL DE FINANÇAS',
                    'name' => 'CLAUDIO FERMINO',
                    'bio' => 'Seu primeiro encontro com o espanhol foi muito jovem, desde que ele teve contato com países latinos, o que o ajudou a se desenvolver na área de ensino, sempre com uma visão para o futuro.'
                ],
            ],
        ];

        $this->plans = [
            'plan_1' => [
                'title'=> 'AULA INDIVIDUAL',
                'text' => 'Esta é a melhor solução para pessoas que gostam de aprender em particular. No seu próprio ritmo e adequado a necessidades específicas inclui:',
                'content' =>[
                    'Manual com áudio e exercícios para cada nível.',
                    'Aulas dinâmicas personalizadas (online ou física).',
                    'Material personalizado.',
                    'Professores nativos.',
                    'Certificação Nacional e Internacional por níveis.',
                ],
            ],
            'plan_2' => [
                'title'=> 'AULA GRUPAL',
                'text' => 'Um plano feito para pessoas que gostam de personalização, mas que podem compartilhar seu aprendizado com outras pessoas e conquistas com outras. (1-6) Pessoas máximo.',
                'content' => [
                    'Manual com áudio e exercícios para cada nível.',
                    'Aulas dinâmicas personalizadas (online ou física).',
                    'Material personalizado.',
                    'Assistencia Online personalizada instantanêa (Prática e Dúvidas).',
                    'Professores nativos.',
                    'Certificação Nacional e Internacional por níveis.',
                ],
            ],

            'plan_3' => [
                'title'=> 'AULAS DE PRÁTICA',
                'text' => 'Ideal para pessoas que aprenderam há muito tempo a querer melhorar seu espanhol naturalmente.',
                'content' => [
                    'Conversas com nativos.',
                    'Assistencia Online personalizada instantanea (Prática e Dúvidas).',
                    'Professores nativos.',
                    'Certificação Nacional e Internacional.',
                ],
            ],
            'plan_4' => [
                'title'=> 'EMPRESARIAL',
                'text' => '',
                'content' => [
                    'Vocabulário Próprio do seu setor.',
                    'Domínio de texto técnico.',
                    'Escrever cartas e e-mails técnicos.',
                    'Negociação e debate.',
                    'Conhecer normas sociais e aduaneiras nos países latinos.',
                    'Certificação Nacional e Internacional.',
                ],
            ],
        ];

        $this->promotions = [
            'promotion_1' => [
                'text' => 'Sempre dando o melhor para você com as opções mais adequadas sala de aula em grupo no máximo 3-6 alunos com um tempo de 2 horas por semana, o custo a ser pago é por mês e inclui:' ,
                'content' => [
                    'Manual de exercícios e áudios para cada nível, desde o nível básico(A1) ao avançado(C2).',
                    'Aulas dinâmicas personalizadas (online).',
                    'Material personalizado.',
                    'Assistencia Online personalizada instantanêa (Via Whatsapp ou outras redes sociais).',
                    'Professores nativos.',
                    'Certificação Nacional e Internacional por níveis.',
                ],
            ],
            'promotion_2' => [
                'text' => 'Você gostaria de aprender espanhol e portugués exclusivamente?. Temos essa opção para você !! Aproveite esta oportunidade para aprender rápidamente a segunda língua mais falada no mundo.' ,
                'content' => [
                    'Manual de exercícios e áudios para cada nível, desde o nível básico(A1) ao avançado(C2).',
                    'Aulas dinâmicas personalizadas (online).',
                    'Material personalizado.',
                    'Assistência Online personalizada instantánea (Via Whatsapp ou outras redes sociais).',
                    'Professores nativos.',
                    'Certificação Nacional e Internacional por níveis.',
                ],
            ]
        ];

        $this->contacts = [];

    }
}