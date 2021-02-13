<?php

class content_es
{
    public $title = 'MI ESPAÑOL - TEU ESPANHOL';
    public $description = 'Transforma tus pasiones al español y portugués';
    public $copyright = 'Todos los derechos reservados.';
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
            'founder_title' => 'Nuestros fundadores',
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

        $this->plans = [
            'plan_1' => [
                'title'=> 'CLASE INDIVIDUAL',
                'text' => 'Esta es la mejor solución para las personas a las que les gusta aprender de forma privada. A su propio ritmo y adaptado a sus necesidades específicas, incluye:',
                'content' =>[
                    'Manual con audio y ejercicios para cada nivel.',
                    'Lecciones dinámicas personalizadas (online o físicas).',
                    'Material personalizado.',
                    'Asistencia en línea personalizada instantánea (práctica y preguntas).',
                    'Maestros nativos.',
                    'Certificación nacional e internacional por niveles.',
                ],
            ],
            'plan_2' => [
                'title'=> 'CLASE GRUPALES',
                'text' => 'Un plan hecho para personas a las que les gusta la personalización, pero que pueden compartir su aprendizaje con otros y sus logros con otros. (1-6) Máximo de personas.',
                'content' => [
                    'Manual con audio y ejercicios para cada nivel.',
                    'Lecciones dinámicas personalizadas (online o físicas).',
                    'Material personalizado.',
                    'Asistencia en línea personalizada instantánea (práctica y preguntas).',
                    'Maestros nativos.',
                    'Certificación nacional e internacional por niveles.',
                ],
            ],
            'plan_3' => [
                'title'=> 'CLASES DE PRÁCTICA',
                'text' => 'Ideal para personas que aprendieron hace mucho tiempo y quieren mejorar su español y portugues de forma natural.',
                'content' => [
                    'Conversaciones con nativos.',
                    'Prácticas Escritas.',
                    'Asistencia en línea personalizada instantánea (práctica y preguntas).',
                    'Maestros nativos.',
                    'Certificación Nacional e Internacional.',
                ],
            ],
            'plan_4' => [
                'title'=> 'EMPRESARIAL',
                'text' => '',
                'content' => [
                    'Vocabulario específico de su sector.',
                    'Dominio del texto técnico.',
                    'Escribe cartas y correos electrónicos técnicos.',
                    'Negociación y debate.',
                    'Conoce las normas sociales y aduaneras de los países latinos.',
                    'Certificación Nacional e Internacional.',
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