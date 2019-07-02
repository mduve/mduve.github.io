<div class="ui-proj-detail">
	<header>
		<div class="container">
			<h3 class="m-0 text-uppercase mr-2">IAA Dispatch</h3>
			<a href="http://duvecreative.com/angular-dispatch/" target="_blank">view project</a>
		</div>
		<button type="button" class="button button-primary button-back" style="left: 0;">back</button>
	</header>

	<article  class="container">
		<div class="row">
			<div class="col-12">
				<img class="hero" src="projects/ui-dispatch/cover.png">
				<h4 class="mb-4">Dispatch is an angular application proof-of-concept I developed in 2018. 
					It was presented as part of a case study that I delivered to team leads and members, 
					in conjunction with a mobile application I designed, to help address usability 
					and performance oversights.  </h4>
				<small>All information in this case study is my own and does not necessarily reflect the views of IAA</small>

				<h5 class="section-header"><span>Team and Role</span></h5>
				<p>I developed the proof-of-concept application in 2018. It was done independently of team members and without management oversite for the purpose of discovery and introspection.</p>

				<h5 class="section-header"><span>The Challenge</span></h5>
				<p>With each of its 3 screens making calls to the backend, the 
				previous application was cumbersome and slow.
				Users complained of performance deficiencies as well as a UI that
				was repetitive. A conversation with my product owner over how to
				consolidate the design revealed that Dispatch could infact use a rewrite.</p>
				<p>After some deliberation, I chose to focus on the client side as a
				viable performance solution. To legitimize what I was trying to accomplish,
				I would keep as much of the original requirements intact as possible.
				As such, I would build as a mobile friendly desktop application. </p>

				<h6 class="header">High level goals and Objectives:</h6>
				<ol>
					<li>Demonstrate how web performance optimization could be improved 
						through the use of a client side framework.</li>
					<li>Preserve core acceptance criteria.</li>
				</ol>


				<h5 class="section-header">The Delivery</h5>

				<h6 class="section-header-sub"><i class="far fa-check-square"></i> Client Side Framework</h6>

				<p>Written in .NET MVC, the previous application employed a surplus of javascript 
					component libraries, including jQueryUI and KendoUI for interface interactions. My intention for picking a
					client side framework would be to show the performance advantage of handling data on the 
					front end before passing to the backend while using as little dependencies as possible.</p>

				<p>To execute the "List" and "Map" screens, I went with Angular over React, which offers two-way 
					data binding. Vue.js was also a consideration, although I believed, it just wasn't as much support and documentation available. 
					That being said, I found Angular's CLI tool incredibly helpful and easy 
					to use as it relates to all perspectives of building an angular app (compiling TypeScript and SCSS, creating components and services, linting, testing, and deploying).</p>

				<div class="row my-5">
					<div class="col-12">
						<h5>Consolidating "List" and "Map" Screens</h5>
					</div>
					<div class="col-12 col-sm-6 mb-3">
						<a href="projects/ui-dispatch/showcase-feature-6a.jpg"  target="_blank"><img class="w-tablet" src="projects/ui-dispatch/showcase-feature-6a.jpg"></a>
					</div>
					<div class="col-12 col-sm-6 mb-3">
						<a href="projects/ui-dispatch/showcase-feature-6b.jpg" target="_blank"><img class="w-tablet" src="projects/ui-dispatch/showcase-feature-6b.jpg"></a>
					</div>
				</div>
				

				<h6 class="section-header-sub"><i class="far fa-check-square"></i> Data Storage</h6>
				<p>Without a SQL database, I would not only need to find a data source but create one as well. 
					As a result, I created a CRUD component for my project using Firebase's Cloud Firestore, 
					a NoSQL document database, to develop my content dynamically and query my application against.</p>

				<h5 class="mt-5 mb-3">Rest API and local storage to retrieve and set data</h5>
				<div class="row">
					<div class="col-12 col-sm-6 mb-3">
						<p class="img-desc">Firebase Cloud Firestore</p>
						<a href="projects/ui-dispatch/showcase-feature-8b.jpg"  target="_blank"><img class="w-tablet" src="projects/ui-dispatch/showcase-feature-8b.jpg"></a>
					</div>
					<div class="col-12 col-sm-6 mb-3">
						<p class="img-desc">CRUD</p>
						<a href="projects/ui-dispatch/showcase-feature-8a.jpg"  target="_blank"><img class="w-tablet" src="projects/ui-dispatch/showcase-feature-8a.jpg"></a>
					</div>

				</div>

				<h6 class="section-header-sub"><i class="far fa-check-square"></i> Mobile Friendly UI Component Library</h6>
				<p>Dispatch, at the core, is a form used to collect data and update records. With proper validation in place, 
					as outlined by the requirements, it could potentially exist as a SPA as a step by step wizard. I didn't need 
					to look any further than Angular Material, which provides components for data tables and autocomplete as well. 
					Not only is it a comprehensive library but offers responsive layout solutions. It even includes 
					its own set of SVG icons, a performance advantage over the previous application's reliance on PNG images. </p>

				<h5 class="mt-5 mb-3">Angular Material For UI Layout and Components</h5>
				<div class="row">

					<div class="col-12 col-sm-6 mb-3">
						<p class="img-desc">Stepper w/ Validation</p>
						<a href="projects/ui-dispatch/showcase-feature-7b.jpg" target="_blank"><img class="w-tablet" src="projects/ui-dispatch/showcase-feature-7b.jpg"></a>
					</div>

					<div class="col-12 col-sm-6 mb-3">
						<p class="img-desc">Autocomplete</p>
						<a href="projects/ui-dispatch/showcase-feature-2b.jpg"  target="_blank"><img class="w-tablet" src="projects/ui-dispatch/showcase-feature-2b.jpg"></a>
					</div>
					<div class="col-12 col-sm-6 mb-3">
						<p class="img-desc">Navigation</p>
						<a href="projects/ui-dispatch/showcase-feature-2c.jpg"  target="_blank"><img class="w-tablet" src="projects/ui-dispatch/showcase-feature-2c.jpg"></a>
					</div>

					<div class="col-12 col-sm-6 mb-3">
						<p class="img-desc">Datatables (NGX)</p>
						<a href="projects/ui-dispatch/showcase-feature-4a.jpg"  target="_blank"><img class="w-tablet" src="projects/ui-dispatch/showcase-feature-4a.jpg"></a>
					</div>
					<div class="col-12 col-sm-6 mb-3">
						<p class="img-desc">Sort and Filter</p>
						<a href="projects/ui-dispatch/showcase-feature-4b.jpg"  target="_blank"><img class="w-tablet" src="projects/ui-dispatch/showcase-feature-4b.jpg"></a>
					</div>

					<div class="col-12 col-sm-6 mb-3">
						<p class="img-desc">Angular Google Maps (AGM) and Drag n' Drop (Dragula)</p>
						<a href="projects/ui-dispatch/showcase-feature-3a.jpg"  target="_blank"><img class="w-tablet" src="projects/ui-dispatch/showcase-feature-3a.jpg"></a>
					</div>

				</div>



				<div class="d-none">
					<a href="http://duvecreative.com/angular-dispatch/" target="_blank">view angular app</a>
					<p>An example of this would be to stick with tables as opposed to lists (which are a lot less mobile friendly). Ultimately, this would be my choice for keeping with a desktop design. performance was concerned while still supporting my first objective(.ie tables, )</p>
					<strong></strong>
					<img style="width:50%;margin: 0 auto;" src="projects/ui-dispatch/showcase-feature-1b.jpg">
				</div>


				<h5 class="section-header"><span>Conclusion</span></h5>
				<p>In the end, I believe I presented a strong argument to my team in favor of using a client side framework to improve performance on our projects while also preserving its core requirements. Not only did it help to create some discussion but also changed some perception on what we can achieve when we are committed to solving a problem.</p>

				<h5 class="section-header"><span>Details</span></h5>
				<p><strong>Technologies</strong><br>HTML, CSS, JS (Angular, TypeScript)</p>
				<p><strong>UI Components</strong><br>Angular Material</p>
				<p><strong>Data Storage</strong><br>Firebase Cloud Firestore</p>
				<p><strong>3rd Party</strong><br>Angular Google Maps (AGM), NGX-Datatables, Dragula.js</p>
				
				
			</div>
		</div>
	</article>
</div>
