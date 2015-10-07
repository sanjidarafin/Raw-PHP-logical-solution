<html>
  <head>
    <title>calculator</title>
  </head>
  
    <body>
	
       <?php
	   
         if (! empty($_POST['1']) && ! empty($_POST['2']) )
		{
	
	         $number = $_POST['1'];
		     $number2 = $_POST['2'];
	
	                if ($_POST['operator'] == 'add')
					{
		
	                  $complete = $number+$number2;
		              echo $complete;
	                }
	
	                if ($_POST['operator'] == 'subtract')
					{
		
		               $complete = $number-$number2;
		               echo $complete;
	                }
	
	                if ($_POST['operator'] == 'multiplication')
					{
		
		               $complete = $number*$number2;
		               echo $complete;
	                }
	
	                if ($_POST['operator'] == 'division')
					{
		
		               $complete = $number/$number2;
		               echo $complete;
	                
					}
					
					if ($_POST['operator'] == 'modulus')
					{
		
		               $complete = $number%$number2;
		               echo $complete;
	                }
	
	
        }


        ?>

<form action="" method="post">

Enthe First Number <input type="number" name="1" placeholder="number"/>
  
    <select name="operator">
          <option value="add">+</option>
          <option value="subtract">-</option>
          <option value="multiplication">*</option>
          <option value="division">/</option>
		  <option value="modulus">%</option>
   </select>
Enter the Second Number <input type="number" name="2"  placeholder="number2"/>

<input type="submit" value="do math!"/>



</form>

    </body>
	
</html>		