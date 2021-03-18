<?php 
include('header.php');
if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']!='1'){
	header('location:news.php');
	die();
}
?>
<div class="container-fluid">
   <!-- DataTables Example -->
   <div class="card mb-3">
	  <div class="card-header">
		 <i class="fa fa-fw fa-user"></i>
		 Student Table
	  </div>
	  <div class="card-body">
		 <div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
			   <thead>
				  <tr>
					 <th>Name</th>
					 <th>City</th>
					 <th>Email</th>
				  </tr>
			   </thead>
			   <tbody>
				  <tr>
					 <td>Vandhana Ravi</td>
					 <td>Palakkad</td>
					 <td>vandhanaer97@gmail.com</td>
				  </tr>
				  <tr>
					 <td>Vidhya V</td>
					 <td>Thrissur</td>
					 <td>vidhyav@gmail.com</td>
				  </tr>
				  <tr>
					 <td>Vishnu Das</td>
					 <td>Ernamkulam</td>
					 <td>vishnuv@gmail.com</td>
				  </tr>

			   </tbody>
			</table>
		 </div>
	  </div>
   </div>
</div>
<?php include('footer.php')?>