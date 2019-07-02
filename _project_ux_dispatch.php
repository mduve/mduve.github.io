<div class="ux-proj-detail">
	<header>
		<div class="container">
			<h3 class="m-0 text-uppercase mr-2">IAA Dispatch</h3>
			<a href="https://invis.io/MGN7FDINWQD" target="_blank">view project</a>
		</div>
		<button type="button" class="button button-primary button-back" style="right: 0;">back</button>
	</header>

	<article  class="container">
		<div class="row">
			<div class="col-12">
				<img class="hero" src="projects/ux-dispatch/cover.png">
				<h4 class="mb-5">The original desktop application was used across IAA branch operations to facilitate the movement of salvaged vehicles in need of being towed. As the number of vehicles increased, business would require Dispatch to perform more and more complex operations. 
					Success of the application would be determined on complete adoption by its users.</h4>
				<small>All information in this case study is my own and does not necessarily reflect the views of IAA</small>

				<h5 class="section-header"><span>Team and Role</span></h5>
				<p>In July of 2015 we had started Visioning and Discovery phases of the project where I led design of the Dispatch Management (DSPM) application, an enhancement of sorts for the original Dispatch (DSP).</p>
				<p>I worked alongside our development team to implement the presentation layer (HTML/CSS) when we launched in September 2015. I continued to provide enhancements to both DSP and DSPM throughout the remainder of my employment at IAA.</p>
				
				<h6 class="header">Original DSP and DSPM (2015)</h6>

				<div class="row mb-5">
					<div class="col-12 col-md-6">
						<a href="projects/ux-dispatch/challenge-dsp-list.jpg" target="_blank"><img class="border" src="projects/ux-dispatch/challenge-dsp-list.jpg"></a>
						<p class="img-desc mt-3">1. Dispatch Listing</p>
					</div>
					<div class="col-12 col-md-6">
						<a href="projects/ux-dispatch/challenge-dsp-map.jpg" target="_blank"><img class="border" src="projects/ux-dispatch/challenge-dsp-map.jpg"></a>
						<p class="img-desc mt-3">2. Dispatch Mapping</p>
					</div>
					<div class="col-12 col-md-6">
						<a href="projects/ux-dispatch/challenge-dsp-tbr.jpg" target="_blank"><img class="border" src="projects/ux-dispatch/challenge-dsp-tbr.jpg"></a>
						<p class="img-desc mt-3">3. Tow Batch Review</p>
					</div>
					<div class="col-12 col-md-6">
						<a href="projects/ux-dispatch/challenge-dspm.jpg" target="_blank"><img class="border" src="projects/ux-dispatch/challenge-dspm.jpg"></a>
						<p class="img-desc mt-3">4. Dispatch Management</p>
					</div>
				</div>

				<h6 class="header">Continuing exploration and process.</h6>
				<p>In January 2018, I set out to redesign the DSP and DSPM to demonstrate internally to our teams the benefits of user informed design. Seven months later, I rolled out my findings as part of a case study that I delivered to team leads and members, in conjunction with an angular application proof-of-concept I developed, to help address usability and performance oversights.</p>

				<object class="pdfobject mt-5" id="pdf" data="http://www.duvecreative.com/ducre-bootstrap/projects/ux-dispatch/DSP-Improving-the-Dispatch%20-User-Experience-Case-Study.pdf" style="width:100%;height: calc(100vh - 200px)">
					<a href="projects/ux-dispatch/DSP-Improving-the-Dispatch -User-Experience-Case-Study.pdf" target="_blank"><img src="projects/ux-dispatch/conclusion-case-study.jpg" class="ui fluid image no-border no-shadow" /></a>
				</object>

				<h5 class="section-header"><span>Users</span></h5>
				<h6 class="header">Trainers, Branch Managers and Dispatchers</h6>
				<p>I originally performed interviews with our branch users as early as December 2014. For a full transcript of details, <a href="https://docs.google.com/presentation/d/1jo93dzsyqjpowyzFcYdpR7ptkgcW2Ocz0CtI_8BcZ8E/edit?usp=sharing" target="_blank">click here</a> </p>

				<h5 class="section-header"><span>The Challenge</span></h5>
				<p>Dispatchers, reluctant to abandon IAA's legacy platform, needed new ways to manage stocks, citing poor performance, usability issues, and a bloated interface.</p>
				<p>As previously mentioned, DSPM was built to solve those problems. While it was successful, it still did not address feedback discussed during user research and testing.</p>
				<p>So although DSPM had solved the initial issue of managing stocks, it created a whole new set of problems for DSP. My goal for the "improved" DSP/DSPM was to leverage our knowledge of the user and to improve overall experience.</p>

				<h6 class="header">High level goals and Objectives:</h6>
				<ol>
					<li>Better integrate DSP/DSPM by deconstructing and rearchitecting a new workflow</li>
					<li>Provide a responsive, modern layout and ui</li>
					<li>Remove and/or consolidate redundancy</li>
				</ol>

				<h5 class="section-header"><span>Design Process</span></h5>
				<div class="row">
					<div class="col-4 mb-3"><a href="projects/ux-dispatch/research-1.jpg" target="_blank"><img src="projects/ux-dispatch/research-1.jpg"></a></div>
					<div class="col-4 mb-3"><a href="projects/ux-dispatch/research-2.jpg" target="_blank"><img src="projects/ux-dispatch/research-2.jpg"></a></div>
					<div class="col-4 mb-3"><a href="projects/ux-dispatch/research-3.jpg" target="_blank"><img src="projects/ux-dispatch/research-3.jpg"></a></div>
				</div>
				<h6 class="section-header-sub"><i class="far fa-check-square"></i> Research &amp; observation</h6>
				<p>While I had a general idea of what I wanted to accomplish, I still needed to validate my course of action. This meant exhuming whatever materials I had to support my case.</p>


				<h6 class="header">Assessing Feedback From Trainers and Branch Employees</h6>
				<p>In total, I completed interview and screen share sessions with 6 branches, the smallest being Oklahoma City and the largest being Houston, as well as 2 trainers. </p>
				<h6 class="header">My Findings</h6>
				<div class="table-responsive">
					<table class="table table-bordered chart">
						<thead>
							<tr>
								<td class="border-0"></td>
								<th>Small Branches</th>
								<th>Medium Branches</th>
								<th>Large Branches</th>
							</tr>
						</thead>
						<thead>
							<tr>
								<th colspan="4">Listing Screen</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="summary">
										<img src="projects/ux-dispatch/graph-50.jpg" class="chart-img" />
										<div>
											<h6 class="header chart-data">50% Branches Divided on Selecting Stocks</h6>
											<p>Larger branches favored the listing screen while reacting negatively to the mapping screen. </p>
											<p>Smaller branches were indifferent but used the table in the listing screen differently than larger branches. Atleast 2 Branches suggested they would like to consolidate both into one screen</p>
										</div>
									</div>
								</td>
								<td></td>
								<td ><i class="fas fa-check-circle"></i></td>
								<td><i class="fas fa-check-circle"></i></td>
							</tr>

							<tr>
								<td>
									<div class="summary">
										<img src="projects/ux-dispatch/graph-33.jpg" class="chart-img" />
										<div>
											<h6 class="header chart-data">33% Pagination and Stock Visibility</h6>
											<p>All large branches indicated they would like to remove pagination while medium and smaller branches preferred to paginate their results</p>
										</div>
									</div>
								</td>
								<td></td>
								<td></td>
								<td><i class="fas fa-check-circle"></i></i>
								</td>
							</tr>
							<tr>
								<td>
									<div class="summary">
										<img src="projects/ux-dispatch/graph-83.jpg" class="chart-img" />
										<div>
											<h6 class="header chart-data">83% Custom Table Data</h6>
											<p>5 of 6 of Branches suggested that they would prefer to add/remove columns from the listing screen data table</p>
										</div>
									</div>
								</td>
								<td><i class="fas fa-check-circle"></i></td>
								<td><i class="fas fa-check-circle"></i></td>
								<td><i class="fas fa-check-circle"></i></td>
							</tr>
						</tbody>
						<thead>
							<tr>
								<th colspan="4">Mapping Screen</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="summary">
										<img src="projects/ux-dispatch/graph-50.jpg" class="chart-img" />
										<div>
											<h6 class="header chart-data">50% Information Overload</h6>
											<p>Half of branch users interview indicated that most pin icons hold little meaning or relevance and could be removed</p>
											<p>Trainer Comments: too many pins in legend confusing to users</p>
										</div>
									</div>
								</td>
								<td><i class="fas fa-check-circle"></i></i></td>
								<td></td>
								<td><i class="fas fa-check-circle"></i></td>
							</tr>
							<tr>
								<td>
									<div class="summary">
										<img src="projects/ux-dispatch/graph-17.jpg" class="chart-img" />
										<div>
											<h6 class="header chart-data">17% Indicate Selected Stocks</h6>
											<p>Atleast 1 Branch suggested a counter for selected stocks</p>
											<p>Trainer Comments: the distinction between selected and unselected stocks on the map could be stronger.</p>
										</div>
									</div>
								</td>
								<td></td>
								<td></td>
								<td><i class="fas fa-check-circle"></i></td>
							</tr>
							<tr>
								<td>
									<div class="summary">
										<img src="projects/ux-dispatch/graph-33.jpg" class="chart-img" />
										<div>
											<h6 class="header chart-data">33% Generating Routes</h6>
											<p>It was found that in larger and medium sized branches (2 of 6 branches), maps are printed and given to tow companies create their own routes, rendering the generate routes functionality useless</p>
											<p>Trainer Comments: “Generate Route” needed at the smaller branch level but not at the higher branch level</p>
										</div>
									</div>
								</td>
								<td></td>
								<td><i class="fas fa-check-circle"></i></td>
								<td><i class="fas fa-check-circle"></i></td>
							</tr>
						</tbody>
						<thead>
							<tr>
								<th colspan="4">Review Screen</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<div class="summary">
										<img src="projects/ux-dispatch/graph-83.jpg" class="chart-img" />
										<div>
											<h6 class="header chart-data">83% Manage Stocks</h6>
											<p>5 out of 6 branches agreed that the ability to logout and manage check payments for stocks in bulk would be beneficial</p>
											<p>Trainer Comments: current system was too cumbersome to logout one at a time in legacy</p>
										</div>
									</div>
								</td>
								<td><i class="fas fa-check-circle"></i></td>
								<td><i class="fas fa-check-circle"></i></td>
								<td><i class="fas fa-check-circle"></i></td>
							</tr>
							<tr>
								<td>
									<div class="summary">
										<img src="projects/ux-dispatch/graph-17.jpg" class="chart-img" />
										<div>
											<h6 class="header chart-data">17% Hierarchy and Legibility</h6>
											<p>At least one branch felt that the tabbed sections in the modal were difficult to read, citing font size, shading, and redundancy as the main cause.</p>
										</div>
									</div>
								</td>
								<td><i class="fas fa-check-circle"></i></td>
								<td></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<h6 class="section-header-sub"><i class="far fa-check-square"></i> Discovery &amp; Exploration</h6>
				<p>What I discovered in my process was that there were glaring differences in preferences between large and small branches. I was also surprised to find that the legacy platform showed real advantages over the modernized application, particularly with the time it took to complete the dispatch process as well as training involved with newer users.</p>
				<p>I was willing to reconsider the assumption that a more modern interface is a better interface. Underneath it all, users valued accomplishing their task faster over the options and features given to them in this modernized experience.</p>
				<p>A lot of the negative feedback embedded in user voices was based out of a similar frustration. “How do I accomplish my task faster”? So by consolidating functionality and providing users the ability to say, keep settings, I was able to remove layers of repeated steps needed to perform the necessary tasks.</p>
				<h6 class="section-header-sub"><i class="far fa-check-square"></i> User Interface Design</h6>
				<p>First, I needed to deconstruct DSP’s many features by helping the user concentrate on one task at a time. As a result, I wanted to explore using mobile first methodologies.</p>
				<div class="row my-5">
					<div class="col-12 col-sm-4 mb-3">
						<h5>A. Shortening the Journey</h5>
						<p class="img-desc">I began to think of the “List”, “Map”, and “Review” dispatch screens as a form with 2 steps - “Select” and “Dispatch” with complete visibility of the entire process on one screen. Validation would prohibit the user from skipping steps.</p>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interface-1a.jpg" target="_blank"><img class="border w-mobile" src="projects/ux-dispatch/process-interface-1a.jpg"></a>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interface-1b.jpg" target="_blank"><img class="border w-mobile" src="projects/ux-dispatch/process-interface-1b.jpg"></a>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-12 col-sm-4 mb-3">
						<h5>B. Consolidating "List" and "Map" Screens</h5>
						<p class="img-desc">An observation made during the interview session was that a lot of data was duplicated from map to listing screen. No longer would users have to select stocks from a list and then refine that search within a map. Now a user could toggle between selecting stocks from a list OR a map while still fulfilling the same requirements.</p>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interface-2a.jpg" target="_blank"><img class="border w-mobile" src="projects/ux-dispatch/process-interface-2a.jpg"></a>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interface-2b.jpg" target="_blank"><img class="border w-mobile" src="projects/ux-dispatch/process-interface-2b.jpg"></a>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-12 col-sm-4 mb-3">
						<h5>C. Treating features as secondary</h5>
						<p class="img-desc">Redundant tasks such as selecting a branch, filtering stock lists, or adding/removing table columns could be performed once or even saved to a user’s preferences. It would always remain accessible within the applications settings or feature panel.</p>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interface-3a.jpg" target="_blank"><img class="border w-mobile" src="projects/ux-dispatch/process-interface-3a.jpg"></a>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interface-3b.jpg" target="_blank"><img class="border w-mobile" src="projects/ux-dispatch/process-interface-3b.jpg"></a>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-12 col-sm-4 mb-3">
						<h5>D. DSPM History</h5>
						<p class="img-desc">When designing the original DSPM screen we couldn’t load all dispatched stocks or the application would crash and so search criteria was added. But for the MDSP, I proposed users could also search using an associative list of dispatched stocks based off date.</p>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interface-4a.jpg" target="_blank"><img class="border w-mobile" src="projects/ux-dispatch/process-interface-4a.jpg"></a>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interface-4b.jpg" target="_blank"><img class="border w-mobile" src="projects/ux-dispatch/process-interface-4b.jpg"></a>
					</div>
				</div>

				<h6 class="section-header-sub"><i class="far fa-check-square"></i> Interaction Design</h6>

				<div class="row mb-5">
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interaction-1.jpg" target="_blank"><img class="w-mobile border-0" src="projects/ux-dispatch/process-interaction-1.jpg"></a>
						<p class="img-desc px-1">1) User selects a branch</p>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interaction-2.jpg" target="_blank"><img class="w-mobile border-0" src="projects/ux-dispatch/process-interaction-2.jpg"></a>
						<p class="img-desc px-1">2) User creates a batch of stocks by selecting from a map or list</p>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interaction-3.jpg" target="_blank"><img class="w-mobile border-0" src="projects/ux-dispatch/process-interaction-3.jpg"></a>
						<p class="img-desc px-1">3) User selects a tower to carry out the dispatch</p>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interaction-4.jpg" target="_blank"><img class="w-mobile border-0" src="projects/ux-dispatch/process-interaction-4.jpg"></a>
						<p class="img-desc px-1">4) After completing a dispatch, user chooses to dispatch more stocks or manage existing dispatched vehicles</p>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interaction-5.jpg" target="_blank"><img class="w-mobile border-0" src="projects/ux-dispatch/process-interaction-5.jpg"></a>
						<p class="img-desc px-1">5) User selects a batch to manage</p>
					</div>
					<div class="col-12 col-sm-4 mb-3">
						<a href="projects/ux-dispatch/process-interaction-6.jpg" target="_blank"><img class="w-mobile border-0" src="projects/ux-dispatch/process-interaction-6.jpg"></a>
						<p class="img-desc px-1">6) User selects an action to perform against the dispatch stocks</p>
					</div>
				</div>

				<h6 class="section-header-sub"><i class="far fa-check-square"></i> <i class="check square outline icon"></i> User Testing</h6>
				<p>Overall, users felt the "improved" DSP/DSPM interface was pretty intuitive and a step up from the previous design. However, initial testing showed that after completing a dispatch, it became less clear what to do after a dispatch was submitted. The results were encapsulated and used to inform the development of the angular application that I was building in tandem with the mobile design.</p>

				<h5 class="section-header"><span>Conclusion</span></h5>
				<p>I delivered both the Mobile POC as well as Angular POC to an internal team of designers and developers. 
					I did not expect to change minds overnight but I do think that I was successful in presenting the 
					case for user driven development which is commonly overlooked when delivering minimal viable product. </p>

				<h5 class="section-header"><span>Details</span></h5>
				<p><strong>Tools</strong><br>Sketch, Invision, Material Design Kit</p>
			</div>
		</div>
	</article>
</div>
