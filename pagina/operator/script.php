<?php 

class all{
	
		public $con;

			function conexion(){
			
				// Create connection
					$this->con=mysqli_connect("localhost","root","","kds");
					//$this->con=mysqli_connect("localhost","pdgo","host3793850","pgdo");
					//$this->con=mysqli_connect("mysql.hostinger.es","u365833544_ad","u36pg58ad33us544","u365833544_pg");
					
				// Check connection
					if (mysqli_connect_errno($this->con))
					  {
					  echo "Fallo Conexion MySQL: " . mysqli_connect_error();
					  } //else { echo "Conexion establecida!\n";}
				  
			
			}
			
			function prueba($id)
			{
					
					$obj = new all;
					
					$obj->conexion();
					
					$sql= "select * from pro";
					
					$res = mysqli_query($obj->con,$sql);
					
					$fila = mysqli_fetch_array($res);
					
					
					for ($i=1; $i<=mysqli_num_rows($res) ; $i++)
					{
						print '<div class="catalogopro"><div class="catalogofot"><img src="img/productos/'.$id.'/catalogo/'.$i.'.png"/></div><div class="catalogover"></div></div>';	
					
					}	
					
				
					
					
			}
			
			function catalogo($id)
			{
					
					$obj = new all;
					
					$obj->conexion();
					
					$sql= "select p.id from linea l join modelo m on l.id=m.linea_id
						join producto p on m.id=p.modelo_id
						where l.id=".$id." && p.estado='activo'
						group by p.id";
					
					$res = mysqli_query($obj->con,$sql);
					
					
					
					
					while($fila = mysqli_fetch_array($res))
					{
						print '<div class="catalogopro"><div class="catalogofot"><img src="img/productos/'.$id.'/catalogo/'.$fila["id"].'.png"/></div><div class="catalogover"></div></div>';	
					
					}	
					
				
					
					
			}
			
			
			
			
			
}// fin de la clase all


?>