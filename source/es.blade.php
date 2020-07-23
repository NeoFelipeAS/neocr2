@extends('_layouts.master-es')

@section('content')
    <div class="container-fluid">
        <div class="row h-100">
            <div class="col hero">
                <h1 class="text-center d-sm-none d-md-block d-none d-lg-block my-5">Desarrollador.</h1>
                <h2 class="text-center my-5">Ingeniero de software y analista de sistemas.</h2>
                <h3 class="text-center">Costa Rica</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <div class="row mt-2" id="main">
                    <div class="col-lg-7 content order-lg-1 order-2 text-justify">
                        <h3 class="text-center my-4">Desarrollador de Software</h3>
                        <p>Hola mi nombre es Felipe Alvarado Solano Yo creo en la magia, me preocupo como mis acciones afectan a otros y yo quiero tener una existencia significativa.</p>
                        <p>Yo amo el desarrollo de software y considero esto como una de las muchas maneras en que puedo contribuir en este mundo creando algo útil y bien hecho. Yo amo las tecnologias de la informacion y como ellas interactúan.</p>
                        <p>Actualmente vivo en mi pueblo en Costa Rica. Este sitio web es un portafolio y una documentación de mi camino como un desarrollador.</p>
                    </div>
                    <div class="col-lg-5 background order-lg-2 order-1 mb-5">
                        <figure><img src="/assets/img/main-es.jpg" class="img-fluid rounded mx-auto d-block img-hover" /></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5" id="skills">
            <div class="col">
				<h3 class="text-center my-5">Habilidades</h3>
                <div class="accordion" id="accordionSkills">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-suitcase fa-2x"></i> Administración de proyectos
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">Trabajar como un equipo para lograr metas especificas, el reto princippal del manejo de proyectos es lograr todas las metas del proyecto dentro de las restricciones dadas.</p>
                                <p class="text-justify">El propósito del manejo de proyectos es producir un proyecto completo el cual cumpla con los objetivos del cliente. En muchos casos el propósito del manejo de proyectos también es el dar forma ó reformar las instrucciones del cliente en orden de ser capaz de direccionar los objetivos factiblemente.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-pencil-alt fa-2x"></i> Lenguajes de programación
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">Los paradigmas de progrmación son una manera de clasificar los lenguajes de programación basado en sus características. Los lenguajes pueden ser clasificados en multiples paradigmas. Así como la ingeniería de software (como proceso) es definido por metodologías diferentes, entonces los lenguajes de programación (como modelos computacionales) son definidos por diferentes paradigmas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-database fa-2x"></i> Bases de datos
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">Una base de datos digital basada en el modelo relacional de datos, propuesto por E. F. Codd en 1970. Una base de datos es una colección organizada de datos, generalmente almacenada y accesada electrónicamente desde un sistema computador. Donde las bases de datos son más complejas ellas normalmente son desarrolladas usando tecnicas formales de diseño y modelado.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fas fa-drafting-compass fa-2x"></i> Interfaces gráficas y experiencia de usuario
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">Diseño de interfaces de usuario (UI) or ingenieria de interfaces de usuario para maquinas y aplicaciones, como computadores, electrodomésticos, dispositivos móviles y otros dispositivos electronicos, con el enfoque de maximizar usabilidad y la experiencia. Diseño de interfaces de usuario ha sido un tema de considerable investigación, incluyendo su estética.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fas fa-headphones fa-2x"></i> Servicio al cliente
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">Servicio de atención al cliente es proporcionar el servicio al cliente antes, durante y despues de una compra. Desdé este punto de vista en general el esfuerzo del proceso de ventas ingenierado, el servicio al cliente juega un rol importante en la habilidad de una organización para generar ingresos y rédito. Desdé esta perspectiva, el servicio al cliente debe incluirse como parte de un acercamiento en general de una mejora sistematica.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingSix">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <i class="fas fa-magic fa-2x"></i> Automatización
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">DevOps, con su persecución continua de actualizaciones de aplicaciones, esta revolucionando la manera en que las organizaciones se acercan al desarrollo del software. Haciendo esto permite manetenerse al frente de las demandas del negocio. Los que desean sobre automatizar tipicamente se enfocan en las herramientas más que en el proceso.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="languages">
        	<div class="col-md-12">
                <hr class="new">
                <h3 class="text-center my-5">Educación en idiomas</h3>
        		<div class="row text-center">
        			<div class="col-md">
        				<h3>Español</h3>
        			</div>
        			<div class="col-md">
        				<h3>Inglés</h3>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-6 mx-auto">
        				<p class="text-justify my-4">Ser capaz de comunicarse efectivamente es una de las más importantes habilidades para la vida que se puede aprender. La comunicación se define como la transferencia de information para producir un mayor entendimiento. Esto se puede realizar de manera vocal (a través de intercambios verbales), a través de medios escritos (libros, sitios web y revistas), visualmente (utilizando gráficos, tablas y mapas) ó no verbal (lenguaje corporal, gestos, agudez de voz y tono).</p>
        			</div>
                </div>
                <hr class="new">
        	</div>
        </div>
		<div class="row" id="cover-letter">
			<div class="col-lg-8 content my-5">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">
                        <h5 class="card-title text-center my-2">Carta de presentación</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-justify">Actualmente trabajo para una empresa grande de tecnología donde hago mi trabajo a lo mejor de mis habilidades, aprendiendo de mis colegas y con la motivación para proveer valor y vivir los valores de la compañia.</p>
                        <ul>
                            <li></li>
                            <li>Responsabilidad</li>
                            <li>Colaboración</li>
                            <li>Transparencia</li>
                            <li>Resiliencia</li>
                            <li>Respeto</li>
                        </ul>
                    </div>
                </div>
			</div>
			<div class="col-lg-4 background">
				<img src="/assets/img/gracias.png" class="img-fluid rounded mx-auto d-block" />
			</div>
		</div>
        <div class="row" id="inspirational-quote">
        	<div class="col">
                <hr class="new">
                <h3 class="text-center my-5">Frase</h3>
                <blockquote class="blockquote text-center">
                    <p id="quote" class="mb-0">“Nunca rompas el silencio si no es para mejorarlo.”</p>
                    <footer class="blockquote-footer">por <cite id="cite" title="Source Title">Epictetus</cite></footer>
                </blockquote>
                <button id="target" class="btn btn-secondary my-4 mx-auto d-block">Obtener una frase aleatoria <i class="fas fa-book"></i></button>
        	</div>
        </div>
    </div>
@endsection
@push('head')
<script src="/assets/js/quotes-es.js"></script>
@endpush
