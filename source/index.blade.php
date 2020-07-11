@extends('_layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row h-100">
            <div class="col hero">
                <h1 class="text-center d-sm-none d-md-block d-none d-lg-block my-5">Developer.</h1>
                <h2 class="text-center my-5">Software Engineer & Systems Analyst.</h2>
                <h3 class="text-center">Costa Rica</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col">
                <div class="row mt-2" id="main">
                    <div class="col-lg-7 content order-lg-1 order-2 text-justify">
                        <h3 class="text-center my-4">Software developer</h3>
                        <p>Hello my name is Felipe Alvarado Solano I believe in magic, I care about how my actions affect others and I want to have a meaningful existence.</p>
                        <p>I love software development and consider it one of the many ways I can contribute in this world creating something useful and well done. I love information technologies and how they interact.</p>
                        <p>Currently living in my hometown in Costa Rica. This website is a portfolio and a documentation of my journey as a developer.</p>
                    </div>
                    <div class="col-lg-5 background order-lg-2 order-1 mb-5">
                        <figure><img src="/assets/img/main.jpg" class="img-fluid rounded mx-auto d-block img-hover" /></figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-5" id="skills">
            <div class="col">
				<h3 class="text-center my-5">Skills</h3>
                <div class="accordion" id="accordionSkills">
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fas fa-suitcase fa-2x"></i> Project management
                                </button>
                            </h2>
                        </div>
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">Work as a team to achieve specific goals, the primary challenge of project management is to achieve all of the project goals within the given constraints.</p>
                                <p class="text-justify">The object of project management is to produce a complete project which complies with the client's objectives. In many cases the object of project management is also to shape or reform the client's brief in order to feasibly be able to address the client's objectives.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fas fa-pencil-alt fa-2x"></i> Programming languages
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">Programming paradigms are a way to classify programming languages based on their features. Languages can be classified into multiple paradigms. Just as software engineering (as a process) is defined by differing methodologies, so the programming languages (as models of computation) are defined by differing paradigms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="fas fa-database fa-2x"></i> Databases
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">A digital database based on the relational model of data, as proposed by E. F. Codd in 1970. A database is an organized collection of data, generally stored and accessed electronically from a computer system. Where databases are more complex they are often developed using formal design and modeling techniques.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingFour">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="fas fa-drafting-compass fa-2x"></i> UI/UX
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">User interface design (UI) or user interface engineering is the design of user interfaces for machines and software, such as computers, home appliances, mobile devices, and other electronic devices, with the focus on maximizing usability and the user experience. User interface design has been a topic of considerable research, including on its aesthetics.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingFive">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="fas fa-headphones fa-2x"></i> Customer service
                                </button>
                            </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">Customer service is the provision of service to customers before, during and after a purchase. From the point of view of an overall sales process engineering effort, customer service plays an important role in an organization's ability to generate income and revenue. From that perspective, customer service should be included as part of an overall approach to systematic improvement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-secondary" id="headingSix">
                            <h2 class="mb-0">
                                <button class="btn btn-outline-primary btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <i class="fas fa-magic fa-2x"></i> Automation
                                </button>
                            </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionSkills">
                            <div class="card-body bg-danger">
                                <p class="text-justify">DevOps, with its pursuit of continuous application updates, is revolutionizing the way organizations approach software development. Doing so allows to keep up with business demands. Those who over-automate typically focus on the tools more than the processes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="languages">
        	<div class="col-md-12">
                <hr class="new">
                <h3 class="text-center my-5">LANGUAGE EDUCATION</h3>
        		<div class="row text-center">
        			<div class="col-md">
        				<h3>Spanish</h3>
        			</div>
        			<div class="col-md">
        				<h3>English</h3>
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-md-6 mx-auto">
        				<p class="text-justify my-4">Being able to communicate effectively is one of the most important life skills to learn. Communication is defined as transferring information to produce greater understanding. It can be done vocally (through verbal exchanges), through written media (books, websites, and magazines), visually (using graphs, charts, and maps) or non-verbally (body language, gestures, pitch of voice, and tone).</p>
        			</div>
                </div>
                <hr class="new">
        	</div>
        </div>
		<div class="row" id="cover-letter">
			<div class="col-lg-8 content my-5">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">
                        <h5 class="card-title text-center my-2">Cover letter</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-justify">Currently working for a big tech company I do my work to the best of my abilities, learning from my peers and with the motivation to provide value and live the company values.</p>
                        <ul>
                            <li>Accountability</li>
                            <li>Collaboration</li>
                            <li>Transparency</li>
                            <li>Resilience</li>
                            <li>Respect</li>
                        </ul>
                    </div>
                </div>
			</div>
			<div class="col-lg-4 background">
				<img src="/assets/img/thanks.png" class="img-fluid rounded mx-auto d-block" />
			</div>
		</div>
        <div class="row" id="inspirational-quote">
        	<div class="col">
                <hr class="new">
                <h3 class="text-center my-5">Quote</h3>
                <blockquote class="blockquote text-center">
                    <p class="mb-0">“You are a little soul, carrying around a corpse.”</p>
                    <footer class="blockquote-footer"> - <cite title="Source Title">Epictetus</cite></footer>
                    <button class="btn btn-secondary my-4">Get random quote <i class="fas fa-book"></i></button>
                </blockquote>
        	</div>
        </div>
    </div>
@endsection
@push('head')
<script src="/assets/js/quotes.js"></script>
@endpush
