<div class="ui-proj-detail">
	<header>
		<div class="container">
			<h3 class="m-0 text-uppercase mr-2">IAA Modernization</h3>
		</div>
		<button type="button" class="button button-primary button-back" style="left: 0;">back</button>
	</header>
	
	<article  class="container">
		<div class="row">
			<div class="col-12">
				<img class="hero" src="projects/ui-iaa-standardization/cover.png">
				<h4 class="mb-5">An initiative by IAA to standardize its legacy applications and services, 
					"Modernization", as it was called, was a large-scale, cross-functional effort 
					that required its development teams to rewrite entire applications to conform 
					to a modern, single code base.
				</h4>
				<small>All information in this case study is my own and does not necessarily reflect the views of IAA</small>

				<h5 class="section-header"><span>Team and Role</span></h5>
				<!--<p>Over the course of 4 years, I was involved as a front developer with the modernization of numerous legacy applications.</p>-->
				<p>From 2014-18, I worked with multiple teams, focusing primarily on presentation layer development but also assisting 
					with design, to help standardize over a dozen legacy applications. </p>

				<h5 class="section-header"><span>The Challenge</span></h5>
				<p>At the core of the operational business unit sits ASAP, the central hub of IAA's suite of applications, 
					dedicated to providing branch users the ability to complete their day-to-day work tasks. To improve 
					usability, a modern architectural framework was constructed, in addition to new global components, 
					carefully designed and built to ensure the success of their users.</p>
				<p>After implementation was complete, the codebase was shared and duplicated across teams and across 
					products. As such, maintaining a single codebase became increasingly difficult to maintain.
					To eliminate duplication moving forward, an external stylesheet was shared across the network 
					using a CDN while older products, such as Legacy, would required patches.</p>		
				
				<h6 class="header">High level goals and Objectives:</h6>
				<ul>
					<li>Build a single codebase shareable across current and future products.</li>
					<li>Update and maintain an ever growing pattern library.</li>
				</ul>
					
				<h5 class="section-header"><span>The Delivery</span></h5>
				<h6 class="header">Front End Modernization</h6>
				<p>"Front End Modernization" was a concept that had been floated around by business since 2014 
					but didn't reach fever pitch until the middle of 2016 when global components were 
					finally conceived, designed and developed. I was responsible for developing the ui for "Quick Search", 
					"Stock Search Results", and "Stock Detail" while integrating and ensuring code solubility 
					for all new global components across legacy and modern solutions.</p>
				<h5 class="mt-5">Quick Search</h5>
				<p class="img-desc">Quick Search returns recent searches on focus and filtered criteria on input. Users can also tab through and search against various categories without leaving the text field using mousetrap.js. </p>
				<a href="projects/ui-iaa-standardization/projects-standardization-1.jpg"  target="_blank"><img class="border" src="projects/ui-iaa-standardization/projects-standardization-1.jpg"></a>
				<h5 class="mt-5">Stock Search Results</h5>
				<p class="img-desc">The responsive data table (telerik kendo UI) fits optimally within the page and features a group, sort, filter, add/remove, print, and export capabilties.</p>  
				<a href="projects/ui-iaa-standardization/projects-standardization-2.jpg"  target="_blank"><img class="border" src="projects/ui-iaa-standardization/projects-standardization-2.jpg"></a>
				<h5 class="mt-5">Stock Detail</h5>
				<p class="img-desc">Stock Detail exists anywhere in the application where a stock number is clicked. A tray slides out and a user is able to perform vehicle lifecycle tasks.</p>
				<a href="projects/ui-iaa-standardization/projects-standardization-3.jpg"  target="_blank"><img class="border" src="projects/ui-iaa-standardization/projects-standardization-3.jpg"></a>

				<h6 class="header">Standardization</h6>
				<p>Post-Modernization, an internal design system and component library (based off the bootstrap toolkit) 
					was created to promote design consistency and scale design efforts of future projects across IAA 
					business units. The following products are just a few examples of projects I was involved in. </p>
				<h5 class="mt-5">Transporter Pickup</h5>
				<p class="img-desc">Mobile first application allowing users to pre-register vehicles for pickup.</p>
				<a href="projects/ui-iaa-standardization/projects-standardization-4.jpg"  target="_blank"><img class="border" src="projects/ui-iaa-standardization/projects-standardization-4.jpg"></a>

				<h5 class="mt-5">Remarketing</h5>
				<p class="img-desc">Remarketing marks the launch of its auction channel for targeted buying 
					and selling.</p>
				<a href="projects/ui-iaa-standardization/projects-standardization-5.jpg"  target="_blank"><img class="border" src="projects/ui-iaa-standardization/projects-standardization-5.jpg"></a>
				<h5 class="mt-5">Title Stock Search</h5>
				<p class="img-desc">I used CSS Grids and Chart.js to develop a ready made HTML template for 
					multiple dashboard screens.</p>
				<a href="projects/ui-iaa-standardization/projects-standardization-6.jpg"  target="_blank"><img class="border" src="projects/ui-iaa-standardization/projects-standardization-6.jpg"></a>
				<h5 class="mt-5">Bulk Notes</h5>
				<p class="img-desc">Bulk Notes was built to add/import a collection of notes to a stock (Kendo UI)</p>
				<a href="projects/ui-iaa-standardization/projects-standardization-7.jpg"  target="_blank"><img class="border" src="projects/ui-iaa-standardization/projects-standardization-7.jpg"></a>

				<h6 class="header">IAA Pattern Library</h6>
				<p class="mb-5">The Pattern Library, part of the IAA Design system, is a style guide and component library given to 
					developers to assist in building a more efficient and consistent UI across IAA - <a href="https://uxcomplib.iaai.com/" target="_blank">https://uxcomplib.iaai.com/</a>. 
					As such, I helped lead and develop v1.2 of the Pattern Library. My responsibilies included: </p>
				<ul>		
					<li>Infrastructure and framework</li>
					<li>Coding task assignments</li>
					<li>Developed process for code sharing (JS Fiddle)</li>
				</ul>
				<a href="projects/ui-iaa-standardization/projects-standardization-8.jpg"  target="_blank"><img class="border" src="projects/ui-iaa-standardization/projects-standardization-8.jpg"></a>


				<h5 class="section-header"><span>Conclusion</span></h5>
				<p>In September 2018 version 1.2 of the Pattern Library was launched. It was well recieved among colleagues and continues
					to provide guidance to developers at IAA at the time of this writing.    


				<h5 class="section-header"><span>Details</span></h5>
				<p><strong>Technologies</strong><br>HTML, CSS, JS, JSON, ASP.NET MVC</p>
				<p><strong>UI Components</strong><br>IAA Pattern Library (Bootstrap)</p>
				<p><strong>3rd Party</strong><br>Telerik Kendu UI, Chart.js</p>

			</div>
		</div>
	</article>
</div>
