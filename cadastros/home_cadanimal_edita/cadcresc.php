<?php 

	require("../conexao.php");




  			$dataEN = $_POST['dataEN'];
  			
  			$brincoAE = $_POST['brincoAE'];
  		

            $pesoME = $_POST['pesoME'];
            
            
        

  			 $resultado = mysqli_query($conexao,"insert into cresc(data_cresc, brinco_bezerro, peso_medio)
  												values ('$dataEN', '$pesoME', '$brincoAE')");

         


  		
  			if(mysqli_affected_rows($conexao) > 0){
  				echo ("$dataEN cadastrado com sucesso!!");
  				$redirecionar = "listaAnimal.php";
  				header("Location: $redirecionar", 3000);

  			}else{
  				echo ("Falha na inclusão!!");
  			}
  			
  			
  			mysqli_close($conexao);
  		?>

?>