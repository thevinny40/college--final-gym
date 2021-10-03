<!DOCTYPE html>
<html>

<head>
	<title>About us Page</title>	
</head>

<body>

	<section class="background firstsection">
		<div class="box-main">
			<div class="firstHalf">
			<p class="text-big">About System</p>
			<p class="text-small">
			This System is Manage by MR.Kartik Naidu SIR.
			<br>
					This GYM MANAGEMENT web application is for systamatical arrangement of data of trainers and members.
					You can easily add a member and trainer and can see their information.They both are indirectly connected to each other.
					You can also track their fess and payment status.
                    
				</p>
				<p class="text-big">About US</p>

				<p class="text-small">
					This GYM MANAGEMENT web application is created by MR.Vinay Mansure.
                    
				</p>

				<br>
				
				<p class="center">
                    <h4> For any quary contact us on<h4>
                    <i class="fa fa-phone"></i> call : 7718070007
                    <br>
                    <i class="fa fa-envelope"></i> email :<a href="https://www.gmail.com/">vnmansure@gmail.com</a>
				</p>

			</div>
		</div>
	</section>

	
<style>
.firstsection{
	
	/* It is to make the height of the
	viewport to be 100 */
	height:60vh;
}
	
.box-main{
	
	/* This is to display the contact us and the
	sentences below it to be displayed in flex */
	display:flex;
	justify-content:center;
	align-items:center;
	
	/* This is to display the text to have
	a color of white */
	color:white;
	max-width:50%;
	
	/* Now we will set the margin to auto */
	/* This will make all the text to be
	displayed at the center of the page */
	margin:auto;
	
	/* This will make the text to display at
	the center of the page vertically */
	height:%;
}
	
.firstHalf{	
	width:700%;
	display:flex;
	
	/* It is to specify the direction of
	the flexible items */
	flex-direction:column;
	justify-content:center;
}
	
	
/* This is used to make the text to
appear bigger */
/* Now we have used a font here to distinguish
itself from the next text */
.text-big{
	font-family: 'Piazzolla', serif;
	
	/* The text to have a style of bold */
	font-weight: bold;
	
	/* The size of the text to be appearing as
	bigger to distinguish itself from the text
	in the class text-small */
	font-size: 40px;
	
	/* The text to be aligned at center */
	text-align:center;
}
	
.text-small{	
	font-family: 'Sansita Swashed', cursive;
	font-size: 15px;
	text-align:center;
}
	
.center{
	text-align: center;
}

</style>