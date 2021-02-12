<?php

class content_es
{
    public $title = 'MI ESPAÑOL - TEU ESPANHOL';
    public $description = 'Transforma tus pasiones al español y portugués';
    public $copyright = 'Todos los derechos reservados.';
    public $nav;
    public $home;

    function __construct()
    {
        $this->nav = [
            'home' => 'Início',
            'about-us' => 'Nosotros',
            'plans' => 'Planes',
            'promotions' => 'Promociones',
            'contacts' => 'Contactos',
        ];

        $this->home = [
            'p_1' => 'Que podemos enseñarte',
            'h1_1' => 'CLASES ONLINE',
            'h3' => 'Nuestro objetivo es personalizar el aprendizaje, físicamente o en línea, manteniendo la efectividad de nuestro legado y con horarios flexibles adaptados a las necesidades de cada alumno.',
            'h4_1' => 'Empresarial',
            'p2_1' => 'Enseñanza objetiva y técnica para satisfacer sus necesidades en su área de trabajo.',
            'h4_2' => 'Lecciones grupales',
            'p2_2' => 'Clases de tres o cuatro personas como máximo.',
            'h4_3' => 'Lecciones individuales',
            'p2_3' => 'Para un aprendizaje más personal.',
            'h4_4' => 'Programa de Prática',
            'p2_4' => 'Lo mejor para practicar tu español.',
            'btn_1' => 'Ver os planos!',
            'h1_2' => '¡Siempre tenemos promociones!',
            'p3_1'=> 'La experiencia nos hace crecer en todos los aspectos de nuestra vida, pensando en eso Mi español - Teu espanhol cuenta con profesores dinámicos y divertidos para darte la mejor experiencia en el aprendizaje del idioma portugués.',
            'p3_2'=> '¿Te gustaría aprender español y portugués exclusivamente?. ¡Tenemos esta opción para ti! Aproveche esta oportunidad para aprender rápidamente el segundo idioma más hablado del mundo.',
        ];

    }
}