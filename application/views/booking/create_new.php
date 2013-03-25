<body>
	<?php echo heading($title, 3); ?>


	<script src="http://malsup.github.com/jquery.form.js"></script>

	<script> 
        // wait for the DOM to be loaded 
        $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#myForm').ajaxForm(function() { 
                alert("Thank you for your comment!"); 
            }); 
        }); 
    </script>

	<form id="myForm" action="<?php echo base_url().'booking/create_new'?>"
		method="post">
		Name: <input type="text" name="name" /> <br>
		Comment:<textarea name="comment"></textarea>
		<input type="submit" value="Submit Comment" />
	</form>

	

</body>
