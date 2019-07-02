<div class="ux-proj-detail">
	<header>
		<div class="container">
			<h3 class="m-0 text-uppercase mr-2">IAA Stock Cancellation</h3>
		</div>
		<button type="button" class="button button-primary button-back" style="right: 0;">back</button>
	</header>

	<article  class="container">
		<div class="row">
			<div class="col-12">
				<img class="hero" src="projects/ux-stock-cancellation/cover.png">
				
				<h4 class="mb-5">When a stock is cancelled, it typically means the vehicle is being returned to the provider. But up until this point, the settlement agreement between parties did not include expenses incurred while the vehicle remained in IAA’s possession. As such, business needed new ways to track various checkpoints during the vehicle lifecycle.</h4>
				<small>All information in this case study is my own and does not necessarily reflect the views of IAA</small>

				<h5 class="section-header"><span>Team and Role</span></h5>
				<p>I worked alongside our Product Owner and BSA as the lead designer to communicate and illustrate design artifacts to fellow team members and stakeholders from October 2015 to December 2015.</p>

				<h6 class="header">Original Stock Cancellation (2015)</h6>
				<object class="w-100 pdf-preview border" data="projects/ux-stock-cancellation/stock-cancellation-UI-legacy.pdf">
					<a href="projects/ux-stock-cancellation/stock-cancellation-UI-legacy.pdf" target="_blank"><img src="projects/ux-stock-cancellation/problem-1.jpg" class="ui fluid image no-border no-shadow" /></a>
				</object>

				<h5 class="section-header"><span>Users</span></h5>
				<h6 class="header">Mostly the Business</h6>
				<p>This project was unique in that we would talk to not just branch users and call centers but the primary business units (ie. eBiz and CSA Today) to garner insight from all perspectives involved.</p>

				<h5 class="section-header"><span>The Challenge</span></h5>
				<p>While the "system" would to do most of the tracking behind the scenes, the application still required users to act as gatekeepers. Variables included type of users, vehicle lifecycle, as well as the physical location of the stock. The experience had to be seamless.</p>
				<h6 class="header">High level goals and Objectives:</h6>
				<ol>
					<li>Integrate multiple entry points into a system needed to streamline the process for cancelled stocks, from “request” to “approval” to “settlement”.</li>
					<li>Track vehicle expenses along the way.</li>
				</ol>

				<h5 class="section-header"><span>Design Process</span></h5>
				<h6 class="section-header-sub"><i class="far fa-check-square"></i> Strategy</h6>
				<p>Wireframes were drawn up to detail numerous system paths.</p>

				<object class="w-100 border" style="height: 60vh"  data="projects/ux-stock-cancellation/stock-cancellation-wires.pdf">
					<a href="projects/ux-stock-cancellation/stock-cancellation-wires.pdf" target="_blank"><img src="projects/ux-stock-cancellation/process-research-1.jpg" class="ui fluid image no-border no-shadow" /></a>
				</object>
				<small>wireframe credit: Srikant Chandan</small>

				<h6 class="section-header-sub"><i class="far fa-check-square"></i> Research &amp; Observation</h6>
				<p>Because strategy was being developed as we progressed, it was imperative to show how the data was being collected. Various aids were used to communicate and illustrate concepts during visioning.</p>

				<object class="w-100 pdf-preview border mb-3" data="projects/ux-stock-cancellation/stock-cancellation-worksheet.pdf">
					<a href="projects/ux-stock-cancellation/stock-cancellation-worksheet.pdf" target="_blank"><img src="projects/ux-stock-cancellation/process-research-2.jpg" class="ui fluid image no-border no-shadow" /></a>
				</object>

				<object class="w-100 pdf-preview border" data="projects/ux-stock-cancellation/stock-cancellation-flowchart.pdf">
					<a href="projects/ux-stock-cancellation/stock-cancellation-flowchart.pdf" target="_blank"><img src="projects/ux-stock-cancellation/process-research-3.jpg" class="ui fluid image no-border no-shadow" /></a>
				</object>

				<h6 class="section-header-sub"><i class="far fa-check-square"></i> Discovery &amp; Exploration</h6>
				<p>After a workflow was agreed upon, a generic UI was developed in order for easy consumption of ideas.</p>
				<object class="w-100 pdf-preview border" data="projects/ux-stock-cancellation/stock-cancellation-UI.pdf">
					<a href="projects/ux-stock-cancellation/stock-cancellation-UI.pdf" target="_blank"><img src="projects/ux-stock-cancellation/process-research-4.jpg" class="ui fluid image no-border no-shadow" /></a>
				</object>

				<h6 class="section-header-sub"><i class="far fa-check-square"></i> Interaction Design</h6>
				<p>The prototype had proved considerably useful when demonstrating the application to business owners and stakeholders. How the application would behave asynchronously as stocks would enter and exit a queue was instrumental in understanding the UI.</p>
				<!--<p>Each tray acts as an asynchronous queue that users could toggle between to exercise an action (approve/reject, edit, undo), or simply monitor the status of a stock</p>-->
				<div class="row">
					<div class="col-12 mb-3"><a href="projects/ux-stock-cancellation/prototype/page_1.html" target="_blank"><img class="border" src="projects/ux-stock-cancellation/process-interaction-1.jpg" /></a></div>
				</div>

				<h6 class="section-header-sub"><i class="far fa-check-square"></i> User Interface Design</h6>
				<p>A modern interface is given to the UI to reflect current design system.</p>

				<h5 class="mt-5">Stock Approval</h5>
				<ol class="img-desc">
					<li>User clicks "approve" to move stock into the the disposition queue.</li>
					<li>User clicks "deny" to remove stock from approval queue.</li>
					<li>Stocks entering and leaving queue in real time to reflect accurate data.</li>
				</ol>
				<a href="projects/ux-stock-cancellation/process-interface-1.jpg" target="_blank" class="mb-5"><img src="projects/ux-stock-cancellation/process-interface-1.jpg"></a>


				<h5 class="mt-5">Stock Disposition</h5>
				<ol class="img-desc">
					<li>Filter Table by status</li>
					<li>User clicks "undo" to move stock back into the Approval Queue.</li>
					<li>Stocks, Images and Dispatch status are updated asynchronously and then moved to the Complete Settlement queue.</li>
				</ol>
				<a href="projects/ux-stock-cancellation/process-interface-2.jpg" target="_blank" class="mb-5"><img src="projects/ux-stock-cancellation/process-interface-2.jpg"></a>

				<h5 class="mt-5">Stock Settlement Completion</h5>
				<ol class="img-desc">
					<li>User clicks "undo" to move stock back into the Disposition queue.</li>
					<li>Stocks entering and leaving queue in real time to reflect accurate data.</li>
				</ol>
				<a href="projects/ux-stock-cancellation/process-interface-3.jpg" target="_blank" class="mb-5"><img src="projects/ux-stock-cancellation/process-interface-3.jpg"></a>

				

				<h5 class="section-header"><span>Conclusion</span></h5>
				<p>The ramifications of implementing a project like Stock Cancellation would have created a workflow change that leadership was uncomfortable with. Others felt it could not be fit into a 6 month project. And so in the end, Stock Cancellation was quietly abandoned.</p>
				<h5 class="section-header"><span>Details</span></h5>
				<p><strong>Tools</strong><br>Adobe InDesign, Sketch, Axure</p>

			</div>
		</div>
	</article>

</div>
