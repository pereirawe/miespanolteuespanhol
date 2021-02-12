<?php

class content_pt
{
    public $title = 'MI ESPAÑOL - TEU ESPANHOL';
    public $description = 'Transforme as suas paixões em espanhol e portugués';
    public $copyright = 'Todos os direitos reservados.';
    public $nav;
    public $home;

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

    }
}