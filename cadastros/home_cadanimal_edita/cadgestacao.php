<?php 

	require("../conexao.php");




  			$medG = $_POST['medG'];
  			
  			$vacG = $_POST['vacG'];
  			
        $dataCb = $_POST['dataCb'];
        
        $brincoM = $_POST['brincoM'];

        

        
        
        

  			 $resultado = mysqli_query($conexao,"insert into gestacao (data_cobertura, medicament, brinco_mae, vacinas)
  												values ('$dataCb', '$medG', '$brincoM', '$vacG')");

         


  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$medG cadastrado com sucesso!!");
  				$redirecionar = "listaGestacao.php";
  				header("Location: $redirecionar", 3000);

  			}else{
  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);
  		?>

?>