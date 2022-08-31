<!DOCTYPE html>
<html lang="es">
      <head> 
            <meta charset="utf-8">
            <meta name="author" content="Juan Guerra y Kevin Arcila">
            <meta name="description" content="Sitio web para la gestion y conteo de votos">
            <meta name="keywords" content="votaciones">
            <title>Votaciones Bachillerato</title>
            <link rel="icon" href="app\views\img\Logo_Colegio.png">
			<link rel="stylesheet" href="app\views\css\Pagina_Admin.css">
            
            

           
        </head>



        <body>

         

        	
        	 <div id="container">

                <div class="imagen"><img src="app\views\img\Logo_Colegio.png"></div>

                <header>
                    
                    <h1><i>Bienvenido a la Eleccion de Personero</i></h1>
                    
                    
                    
                
                </header>

                <section id="content">

                    <div class="login-box">
                           <link rel="stylesheet" href="app\views\css\Register.css">
                           <img src="app\views\img\Logo_Colegio.png" class="avatar" alt="Avatar Image">
                           <h1>REGISTRO DE ESTUDIANTES</h1>
                        <form>
                           <!-- CODIGO INSTITUCIONAL-->
                           <label for="codigo_intitucional">CODIGO INSTITUCIONAL</label>
                           <input type="text" placeholder="Codigo">
                           <!-- ESTUDIANTE INPUT -->
                           <label for="username">ESTUDIANTE</label>
                           <input type="text" placeholder="Nombre Apellido">
                           <!-- CURSO INPUT -->
                        <section id="opciones"> 
                                  
                          <label for= "curso">CURSO</label>
              
                         <select Name="curso">
              
                          <option value="curso">6A</option>
                          <option value="curso">6B</option>
                          <option value="curso">6C</option>
                          <option value="curso">7A</option>
                          <option value="curso">7B</option>
                          <option value="curso">7C</option>
                          <option value="curso">8A</option>
                          <option value="curso">8B</option>
                          <option value="curso">8C</option>
                          <option value="curso">9A</option>
                          <option value="curso">9B</option>
                          <option value="curso">9C</option>
                          <option value="curso">10A</option>
                          <option value="curso">10B</option>
                          <option value="curso">10C</option>
                          <option value="curso">11A</option>
                          <option value="curso">11B</option>
                          <option value="curso">11C</option>
                
                         </select required>
              
                        </section>
              
                      <br>
              
                       <!-- ROL INPUT -->
              
                      <label for= "Rol">ROL</label>
                      
                      <select name="Rol">
                      
                          <option value="administrador">Administrador</option>
                          <option value="estudiante">Estudiante</option>
                      
                      </select>
              
                      <br>
                      <br>
                    
                      
                      <input type="submit" value="Registrar">
                      
                      <br>
                      <a href="Login">Volver al incio</a><br>
                      
                      
                    </form>
                  </div>

                </section>

                <footer>
                    Juan Guerrra y Kevin Arcila Eleccion de personero 2022
                </footer>
            
            </div>

            
        
        </body>
 

</html>