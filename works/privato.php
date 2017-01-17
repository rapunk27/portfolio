<?php 
	$path = '../';
	$path2 = '../';
 ?>

<?php include('../head.php'); ?>

<div class="privato-section">
	<div class="row" id="title">
		<div class="small-12 large-12 columns text-center">
			<h1 class="system-name">Privato Hotel</h1>
		</div>
	</div>
	<div class="small-7 row">
		<div class="small-6 columns text-center">
			<b class="system-subheading">
			<i class="fa fa-group"></i> Developed by:</b> <p class="system-subheading-info">GRYD</p>
		</div>
		<div class="small-6 columns text-center">
			<b class="system-subheading">
			<i class="fa fa-calendar"></i> Date Developed:</b> <p class="system-subheading-info">October 2016 - Present	</p>
		</div>
	</div>
	<div class="row" style="padding-bottom: 50px;">
		<div class="columns">
			<div class="privato-cover-photo system-cursor" data-open="dashboard"></div>
		</div>
	</div>
	<div class="row">
		<div class="columns">
			<p class="system-paragraph text-justify">This Project is from my friend Andrian Rada who is my programming partner for this system. Although I am not an official member of the group, I play a big role for them as I am the one consulting them for their concerns and also programming half of the system which means Andrian taking the other half. Take note that this system is still under development as it is not finished yet. Their group is composed of 3 members namely: Andrian Rada, Jaymarc and Audrey. </p>

			<p class="system-paragraph text-justify">Just to give you a brief introduction about Privato. It is an Italian-inspired business and lifestyle hotel in Pasig City. Strategically located near Capitol Commons, an upcoming lifestyle and dining development, and the Ortigas Central Business District, the hotel boasts of 177 rooms designed in contemporary style.</p>
		</div>
	</div>
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
						<div class="thumbnail">
							<img src="privato-images/user/login.jpg" class="system-cursor" data-open="login">
						</div>
					<div class="media-object-section">
						<div class="thumbnail">
							<img src="privato-images/user/successful-signin.jpg" class="system-cursor" data-open="successful-signin">
						</div>
					</div>
				</div>
				<div class="media-object-section">
					<h4 class="system-paragraph-title">Tools and System Intro</h4>
					<p class="system-paragraph text-justify"> Almost the same with Development Academy of the Philippines. We also used PHP and MySql for this project. For our Frameworks are Laravel 5.3 for PHP and Bootstrap for CSS. Compared to DAP, we used Github version control in backing up this project. Slack was also used for better team communications as it can filter conversations, link to popular applications like Github and Trello for better dissemination of tasks.
					</p>

					<p class="system-paragraph text-justify">
						Now moving on, as you see on the right side is the default navigation of all users. The navigation may change depending on the role of the user. So, if the user is an admin, the user has more links than an ordinary user.  
					</p>
					<p class="system-paragraph">
						On the left side is the login page and the default dashboard of the system. Compared from DAP, I moved the navigations on the left side. Some parts of the dashboard is not yet functional though.
					</p>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/user/sidebar.jpg" class="system-cursor" data-open="sidebar">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Recruitment Section -->
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<h4 class="system-paragraph-title">Recruitment Management System</h4>
					<p class="system-paragraph text-justify">
						The image on the right is a Job Opening from our very own recruitment system. Once a user is registered, he has limited access to the system as he is not yet an employee. The newly registered user can view some announcements posted by the Recruitment admin, mainly about the job openings available for them to apply.
					</p>

					<p class="system-paragraph text-justify">
						Once a user clicked on the Apply button, an application form is provided for them to fill up and send to the recruitment admin for review. Also to mention every user have their own Message Box as displayed on the left side of the image, so that they may know if they pass or fail.
					</p>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/recruit/job-opening.jpg" class="system-cursor" data-open="job-opening">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="columns">
			<p class="system-paragraph text-justify">
				Of course before an admin can post job openings online, they need to create a department, and add positions to that department. We created this module so that the system can be more flexible. After that the image in the middle below shows that you may add Qualifications and Job Responsibilities to a specific position. 
			</p>
			<p class="system-paragraph text-justify">
				Now going back, on the 3rd image below shows all the applications passed by different users. Modules of scheduling the applicant for interview is also available. Other screenshots will be posted in the bottom part of this page.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/recruit/add-position.jpg" class="system-cursor" data-open="add-position">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/recruit/search-position.jpg" class="system-cursor" data-open="search-position">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/recruit/view-applications.jpg" class="system-cursor" data-open="view-applications">
					</div>
				</div>
			</div>
		</div>
	</div> <!-- End of recruitment Section -->


	<!-- Employee Section -->
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/ems/search-user.jpg" class="system-cursor" data-open="search-user">
					</div>
				</div>
				<div class="media-object-section">
					<h4 class="system-paragraph-title">Employee Management System</h4>
					<p class="system-paragraph text-justify">
						The Employee Management Subsystem basically involves more on the employees and admins. There is a little attention for non employees. 
					</p>

					<p class="system-paragraph text-justify">
						Once hired, a regular employee can view/edit their information, file a leave request, view announcements and can even greet birthday celebrants. As for admins they can view all employees provided with a search functionality provided, approve/reject leave requests, posting of announcements and report generation of all employees per department. PDF generation is still missing as we are still working on it.
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
						<img src="privato-images/ems/personal-information.jpg" class="system-cursor" data-open="personal-information">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/ems/request-leave.jpg" class="system-cursor" data-open="request-leave">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/ems/greet-bday.jpg" class="system-cursor" data-open="greet-bday">
					</div>
				</div>
			</div>
		</div>
	</div> <!-- End of Employee section -->
	<!-- Performance section -->
	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<h4 class="system-paragraph-title">Performance Evaluation System</h4>
					<p class="system-paragraph text-justify">
						Same with the Performance Evaluation System of DAP, they almost have the same features.
						As you see the image on the right we made some changes to the UI of the evaluation form. Since the company's evaluation rubricks is from 1-5, I installed a plugin to create a star like rating.
					</p>

					<p class="system-paragraph text-justify">
						As mentioned by the HR of their company, that there are 2 types of Evaluation. One is Pre Evaluation and the other one is Post Evaluation. So I created a filtering type of module to filter which type of Evaluation to open. 
					</p>

					<p class="system-paragraph text-justify">Employees may also view the rubricks if they wanted to.</p>

				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/perms/evaluation-form.jpg" class="system-cursor" data-open="evaluation-form">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="columns">
			<p class="system-paragraph text-justify">
				Anyhow, once the subordinate submits his/her self evaluation, the admin may now review, update and add comment to the evaluation. After the admin sends it back, the subordinate may now view it. 
			</p>
			<p class="system-paragraph text-justify">
				As you on the images below we are still working on User interface of the Employee Evaluation results and Chart generation of Performance reports. We used Laravel Charting Package bye the way.
			</p>
		</div>
	</div>

	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/perms/add-indicator.jpg" class="system-cursor" data-open="add-indicator">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/perms/my-evaluation.jpg" class="system-cursor" data-open="my-evaluation">
					</div>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/perms/perf-reports.jpg" class="system-cursor" data-open="perf-reports">
					</div>
				</div>
			</div>
		</div>
	</div> <!-- End of Performance section -->

	<div class="row">
		<div class="columns">
			<div class="media-object">
				<div class="media-object-section main-section">
					<h4 class="system-paragraph-title">Super Administrator</h4>

					<p class="system-paragraph">The Super Administrator has access to all 3 subsystems. He can assign user roles and can filter the system if it needs to be hidden.</p>
				</div>
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/super/admin-filters.jpg" class="system-cursor" data-open="admin-filters">
					</div>
				</div>
	
				<div class="media-object-section">
					<div class="thumbnail">
						<img src="privato-images/super/manage-roles.jpg" class="system-cursor" data-open="manage-roles">
					</div>
				</div>
			</div>	
		</div>
	</div>

	<div class="callout large warning">
			<!-- Others section -->
		<div class="row">
			<div class="large-12 columns">
				<h4 class="system-paragraph-title text-center"> Others: </h4>
			</div>
		</div>

		<div class="row">
			<div class="columns">
				<?php foreach(glob('./privato-images/others/*.*') as $index => $file): ?>
					<?php $exif = exif_read_data($file); ?>
					<div class="large-3 columns">
						<div class="card edm-image">
							<div class="card-divider">
								<h6 class="edm-title"><?php echo substr($file, 24, -4); ?></h6>	
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
		</div> <!-- End of others -->
	</div>

	</div>

</div> <!-- end of privato section -->


<?php foreach(glob('./privato-images/others/*.*') as $index => $file): ?>	
	<div class="large reveal" id="system<?php echo $index; ?>" data-reveal data-animation-in="slide-in-up" data-animation-out="slide-out-right">
	 	<img src="<?php echo $file; ?>">
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endforeach; ?>

<!-- Used Images in Privato -->
<?php foreach(glob('./privato-images/used/*.*') as $index => $file): ?>	
	<div class="large reveal" id="<?php echo substr($file, 22, -4); ?>" data-reveal data-animation-in="slide-in-up" data-animation-out="slide-out-right">
	 	<img src="<?php echo $file; ?>">
	  <button class="close-button" data-close aria-label="Close modal" type="button">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
<?php endforeach; ?>



<?php include('../foot.php'); ?>	