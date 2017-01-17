<?php 
	$path = '../';
	$path2 = '../';
 ?>

<?php include('../head.php'); ?>

<div class="dap-section">
	<div class="row" id="title" data-magellan-target="title">
		<div class="small-12 large-12 columns text-center">
			<h1 class="system-name">Development Academy of the Philippines</h1>
		</div>
	</div>
	<div class="row">
		<div class="small-6 columns text-center">
			<b class="system-subheading">
			<i class="fa fa-group"></i> Developed by:</b> <p class="system-subheading-info">Code Blues</p>
		</div>
		<div class="small-6 columns text-center">
			<b class="system-subheading">
			<i class="fa fa-calendar"></i> Date Developed:</b> <p class="system-subheading-info">October 2015 - February 2016</p>
		</div>
	</div>
	<div class="row" style="padding-bottom: 50px;">
		<div class="columns">
			<div class="system-cover-photo"></div>
		</div>
	</div>
	<div class="row">
		<div class="columns">
			<p class="system-paragraph">This system was a School Thesis/Project entitled "Management Information System for Development Academy of the Philippines. It is composed of 3 subsystems mainly: Employee Management, Performance Evaluation and Property Management. The members of the group includes Lea Andaya, Alaine Quinto, Ryan Santos, Michael Vicedo and of course your very own Ralph Martyn Esteva, which is me. Now you have seen the main home page as you have seen in the above image, I will give you a little tour in our system.</p>
		</div>
	</div>
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/login.jpg" class="system-cursor" data-open="login">
					</div>
				</div>
				<div class="media-object-section" id="tools" data-magellan-target="tools">
					<h4 class="system-paragraph-title">Tools and System Intro</h4>
					<p class="system-paragraph">We developed this system with the use of the PHP Programming Language and MySql as our main Sql Server. We also used Laravel as our main PHP framework, along with Bootstrap as our CSS framework. HTML and Jquery is also included. </p>
					<p class="system-paragraph">
						As you see here on the left is our login page. 
						The three below is the quick access section, the user menus and the footer.
						Users are only allowed to view/edit/print their information, request a leave, view announcements, send a self evaluation, change password, view property information, and request property transfer.
					</p>
				</div>
			</div>

		</div>
	</div>
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/quick-access.jpg" class="system-cursor" data-open="quick-access">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/systems.jpg" class="system-cursor" data-open="systems">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/footer.jpg" class="system-cursor" data-open="footer">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section main-section">
					<h4 class="system-paragraph-title" id="adminPanel" data-magellan-target="adminPanel">Admin Panel</h4>
					<p class="system-paragraph">
						Over here is the admin panel. Only Users with the role of any admin type has access here. If you are a Super Administrator, you have access to all of these panels. 
					</p>
					<ul>
						<li class="system-paragraph"><u>Employee Admin</u> - can register an employee, search for them, edit/delete their information, add leave credits, and post announcements.</li>
						<li class="system-paragraph"><u>Performance Admin</u> - has access and receives all of the performance evaluations of his subordinates under his department.</li>
						<li class="system-paragraph"><u>Property Admin</u> - can add/view/edit/delete a property, assign accountability, approve/reject property transfer requests and update the property's repair and maintenance info.</li>
					</ul>
				</div>
				<div class="media-object-section align-self-bottom">
					<div class="thumbnail">
						<img src="dap-images/admin-panel.jpg" class="system-cursor" data-open="admin-panel">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Super Admin Section -->
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/super/manage-administer-roles.jpg" class="system-cursor" data-open="manage-administer-roles">
					</div>
				</div>
				<div class="media-object-section main-section">
					<h4 class="system-paragraph-title">Super Administrator</h4>

					<p class="system-paragraph">The Super Administrator has access to all 3 subsystems, assign user roles, retrieve the deleted users/properties in the archives page and can filter the system if it needs to be hidden.</p>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/super/manage-system-filters.jpg" class="system-cursor" data-open="manage-system-filters">
					</div>
				</div>
			</div>	
		</div>
	</div>

	<!-- Employee Admin Section -->
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/ems/add-employee1.jpg" class="system-cursor" data-open="add-employee1">
					</div>
				</div>
				<div class="media-object-section">
					<h4 class="system-paragraph-title">Employee Management System</h4>
					<p class="system-paragraph">
						Our Employee Management System has a registration module where the admin can add accounts for the employees, the employee cannot make their own account. It records Personal information, Contacts, Common Ids, School information and Parents information. 
					</p>

					<p class="system-paragraph">
						Once employee registration is successful, the admin may now give the account credentials to the employees. The employees/users can now view and have limited access to editing their account information. They may also change their password, stay updated about the latest announcements or birthdays posted.  
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="columns">
			<p class="system-paragraph">
				Users can now file a leave and check their leave credits online. As long as the user has enough leave credits they can file a leave transaction. If the user is an admin of the said subsystem they can view all the leave requests of the employees. Of course it's the admin's decision if they are going to approve/reject their request. The subsystem also comes with the leaves list module as you see in the 3rd photo below, where they can view all the leave credits of the employees, and it has filtering feature which can be helpful for the admin if they want to see all credits by department. PDF is also provided in this module.
			</p>	
		</div>
	</div>
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/ems/leave-balance.jpg" class="system-cursor" data-open="leave-balance">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/ems/all-leave-requests.jpg" class="system-cursor" data-open="all-leave-requests">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/ems/leaves-list.jpg" class="system-cursor" data-open="leaves-list">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/ems/create-announcement.jpg" class="system-cursor" data-open="create-announcement">
					</div>
				</div>
				<div class="media-object-section">
					<p class="system-paragraph">
						The EMS admin can also create announcements to post in the user dashboard for everyone to see.
						They may also edit the announcement incase of errors. It also comes with a search feature for easier organizations of the announcements.
					</p>
					<div class="media-object">
						<div class="media-object-section">
							<div class="thumbnail">
								<img src="dap-images/ems/edit-announcement.jpg" class="system-cursor" data-open="edit-announcement">
							</div>
						</div>
						<div class="media-object-section">
							<div class="thumbnail">
								<img src="dap-images/ems/search-announcement.jpg" class="system-cursor" data-open="search-announcement">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Performance Admin Section -->

	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<h4 class="system-paragraph-title">Performance Evaluation System</h4>

					<p class="system-paragraph">Our Performance Evaluation system was the most featured system in this MIS Project. The system starts off with the employees opening the self evaluation form that has 3 indicators namely: Utilization, Quality of Work, and Potential for Future Perfomance.</p>

					<p class="system-paragraph">For each indicators, they have questions for the employees to answer from 1 to 6. The evaluation rubricks, guide and screenshot are also provided here for the users to know how to use the performance evaluation system.  Note: users are only allowed to send their self evaluation once.</p>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/perf/self-evaluation.jpg" class="system-cursor" data-open="self-evaluation">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="columns">
			<p class="system-paragraph">If the Performance Evaluation admin is as the same department as the one who sent the self evaluation, he can still receive it. If its not, well perhaps some other admin with the same department will receive it. As the admin receives the self evaluation, he may now review, edit or add a comment to the evaluation. Once it is done they're now going to send it back to the subordinate. </p>

			<p class="system-paragraph">Each users have their own page for viewing all their evaluations. On the 2nd picture below you'll see an example of the users evaluation and it's comparison with the past or future evaluations. Overall ratings for each indicators are marked red and a progress bar is provided for visual representation of the evaluation.</p>

			<p class="system-paragraph">One the right picture below is the report generation of the performance system. A pie chart shows up everytime you filter something along with the PDF version of the reports. You may see more pictures below.</p>
		</div>
	</div>

	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/perf/review-evaluation.jpg" class="system-cursor" data-open="review-evaluation">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/perf/line-chart.jpg" class="system-cursor" data-open="line-chart">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/perf/pie-chart.jpg" class="system-cursor" data-open="pie-chart">
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Property Admin Section -->
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/prop/search-property.jpg" class="system-cursor" data-open="search-property">
					</div>
				</div>
				<div class="media-object-section">
					<h4 class="system-paragraph-title">Property Management System</h4>
					<p class="system-paragraph">
						Although the company already has it's own Property Management System. We were thankful enough for the company in letting us allow to develop our own kind of Property Management System. Their existing Property system was the most used system in their company as "Michael Vicedo" is one of the admins of it.
					</p>

					<p class="system-paragraph">
						Our Property Management System, just to give a brief summary, records all the properties purchased by the company and assign it to an employee. As you see on the left is a picture of all the properties in the company. Some of them are just dummy data for testing purposes.
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="columns">
			<p class="system-paragraph">Before the Properties can be assigned, the property details need to be added to the database first. An employee could also request a property transfer to another employee and the admin could just approve it anytime. The system also records the accountability history of the property, tracking it's previous owners through the years. The property admin can record its repair and maintenance and generate reports for the properties.  </p>

		</div>
	</div>

	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/prop/my-properties.jpg" class="system-cursor" data-open="my-properties">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/prop/request-transfer.jpg" class="system-cursor" data-open="request-transfer">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="dap-images/prop/pdf-list-assigned-properties.jpg" class="system-cursor" data-open="pdf-list-assigned-properties">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Others section -->
<div class="row">
	<div class="large-12 columns">
		<h4 class="system-paragraph-title text-center"> Others: </h4>
	</div>
</div>

<div class="row">
	<div class="columns">
		<?php foreach(glob('./dap-images/others/*.*') as $index => $file): ?>
			<?php $exif = exif_read_data($file); ?>
			<div class="large-3 columns">
				<div class="card edm-image">
					<div class="card-divider">
						<h6 class="edm-title"><?php echo substr($file, 20, -4); ?></h6>	
					</div>
					<div class="ih-item square effect6 from_top_and_bottom">
						<a>
							<div class="img">
								<img src="<?php echo $file; ?>">
							</div>
							<div class="info">
							<h3>
								<button class="button warning large" data-open="system<?php echo $index; ?>">
									<i class="fa fa-search"></i> View
								</button>
							</h3>
							</div>
						</a>
					</div>
					<div class="img">
						<img src="<?php echo $file; ?>" class="thumbnail">
					</div>
					<div class="info">
						<h3>Heading here</h3>
						<button class="button primary">Click</button>
					</div>
				</div>
			</div>

		<?php endforeach; ?>
	</div>
</div>

</div>

<?php foreach(glob('./dap-images/others/*.*') as $index => $file): ?>	
	<div class="large reveal" id="system<?php echo $index; ?>" data-reveal data-animation-in="slide-in-up" data-animation-out="slide-out-right">
	 	<img src="<?php echo $file; ?>">
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endforeach; ?>

<?php include('works-modals.php') ?>
<?php include('../foot.php') ?>

			
