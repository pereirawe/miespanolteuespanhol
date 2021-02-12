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
            'btn_1' => '¡Ver los planes!',
            'h1_2' => '¡Siempre tenemos promociones!',
            'p3_1'=> 'La experiencia nos hace crecer en todos los aspectos de nuestra vida, pensando en eso Mi español - Teu espanhol cuenta con profesores dinámicos y divertidos para darte la mejor experiencia en el aprendizaje del idioma portugués.',
            'p3_2'=> '¿Te gustaría aprender español y portugués exclusivamente?. ¡Tenemos esta opción para ti! Aproveche esta oportunidad para aprender rápidamente el segundo idioma más hablado del mundo.',
        ];

        $this->aboutUs =[
            'p1_1' => 'Vamos a presentarnos',
            'h1_1' => 'ACERCA DE MI ESPAÑOL TEU ESPAÑOL',
            'h2_1' => 'Quienes somos',
            'p2_1' => 'Somos una empresa especializada en idiomas. Ministrando con excelencia y experiencia nativa en métodos innovadores de aprendizaje personalizado.',
            'h2_2' => 'Misión',
            'p2_2' => 'Innovar en la forma de aprender utilizando diferentes técnicas, metodología y herramientas materiales y tecnológicas, innovando el proceso de aprendizaje tradicional defectuoso.',
            'h2_3' => 'Visión',
            'p2_3' => 'Nuestra motivación es cambiar vidas y crear oportunidades a través del poder de aprender un nuevo idioma.',
            'founders' => [
                [
                    'title' => 'CO-FUNDADOR, PRES. EJECUTIVO CEO',
                    'name' => 'ALEJANDRO TOVAR',
                    'bio' => 'Una relación con la idea de enseñar el idioma español es poder dar a conocer el idioma. Nacido en Venezuela, donde se desarrolló como administrador y se especializó en marketing digital, donde pudo tener la oportunidad de participar en grandes proyectos empresariales y educativos en diferentes países.'
                ],
                [
                    'title' => 'CO-FUNDADOR, DIRECTOR GENERAL DE FINANZAS',
                    'name' => 'CLAUDIO FERMINO',
                    'bio' => 'Su primer encuentro con el español fue muy joven, ya que tuvo contacto con países latinos, lo que le ayudó a desarrollarse en el área de la educación, siempre con visión de futuro.'
                ],
            ],
        ];
    }
}