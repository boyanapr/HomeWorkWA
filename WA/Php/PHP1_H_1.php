<!DOCTYPE html>
<html>
    <head>
	    <meta charset="UTF-8">
	    <title>"На колко години съм?"</title>  
		<style>
        .error {color: #FF0000;}
        </style>
    </head>
    <body>
	    
		<?php
		$birth_year = $_GET['year'];
		
		
		function is_positive() 
		{
			if(is_numeric($birth_year))
			{
				return ($birth_year > 0);
			}
			else
			{
				return false;
		        echo 'Please enter correct value';
				
			}
		}
		
		
		function is_negative()
		{
			if ($birth_year < 0)
			{
			    return false;
				echo 'This is negative number! It must be positive!';	
			}
				
		}
		
		
		function y_birth() 
		{
			if ( 1900 < $birth_year && $birth_year < 2016 )
			{
				return true;
			}
			else 
			   {
				   echo 'The year is incorrect!';
			   }
		}
		
		
		function get_age($age)
		{
			$now_year=date("Y");
			
			$age = $now_year - $birth_year;
		}
		
		
		function show_message()
		{
			if(empty($_GET['year']))
			{
		?>
		    <span class="error">
				<?php 
				    echo 'Please enter Year';
				?>
		    </span>
			<?php
			}
			
		}
		?>
		
		
		<form method="GET" action="">
		    <fieldset>
			    <legend>Information:</legend>
			    Year of birth:<br />
				<?php show_message();?>
				<br />
				<input type="number" name="year" >
			    <input type="submit" name="submit" value="Calculate"><br />
				<?php 	echo date("Y")-($_GET['year']);?>
				
            </fieldset>
	    </form>
		
    </body>
</html>