<!DOCTYPE html>
<html>
  <head>
    <title>VIEW BEST CUSTOMERS</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css" />
  </head>
  <body>
    <form name="form1" method="post" action="">
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>LIST OF THE BEST CUSTOMERS FROM THE FIRST TO THE LAST</h1>
</div>    

        </div>

        <div id="customer_number">
              <p class="description"><?php echo __( 'Enter the number of customers you want to view ', 'myplugin' ); ?></p>
              <label><input class="regular-text" type="number" name="customer_number" value="<?php echo $customer_number; ?>"></label>
            <p class="submit"><input type="submit" name="Submit" class="button-primary" value="<?php echo __( 'Save Changes', 'myplugin' ); ?>" /></p>
      </div>
    </div> 
  </form>

<?php 


if($_POST['Submit']){
if( (empty($_POST['customer_number'])) ){
      echo '<div class="updated"><p><strong>'. __( 'Wrong settings: Please enter the number of customers you want to view.', 'myplugin' ) .'</strong></p></div>';  
  }
else{


include('Control/best_customers_Control.php');
$get_data =new PrintBestCustomerClass;
$get_data->PrintCustomer("localhost","root","","test",$_POST['customer_number']); 



echo '<div class="updated"><p><strong>'. __( 'Settings saved.', 'myplugin' ) .'</strong></p></div>';

} 
}

?>




  </body>
</html>

