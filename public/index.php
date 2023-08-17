<?php

    require '../config/database.php';
    $db = new Database();
    $con = $db->conection();
    
    
    $sql_productos = $con->prepare("SELECT idProd, nombre FROM productos");
    $sql_productos->execute();
    $resultado_productos = $sql_productos->fetchAll(PDO::FETCH_ASSOC);


    $nombre = $_GET['nombre'];
    $email = $_GET['email'];
    $tel = $_GET['tel'];
    $msj = $_GET['msj'];

    $sql=$con->prepare("INSERT INTO contacto (nombre,email,tel,msj) VALUES ('$nombre','$email','$tel','$msj')");
    $sql->execute();
?>

<!DOCTYPE html>
<html lang="es">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mi Solcito</title>
        <!-- Bootstrap 5.1 CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link rel="shortcut icon" href="./icons/IMG-20230815-WA0038-removebg-preview.png" type="image/x-icon">
        
        <?php require ('./nav.php');?>

        <header id="inicio">
            <section class="hero container-fluid">
                <div class="text-center hero__description">
                    <img src="./images/IMG-20230815-WA0038.jpg" alt="" class="bg__image">
                </div>
                
            </section>
        </header>
        <main>
            <section class="products__container container pt-5" id="products">
                <div class="products__description">
                    <h2 class="products__title text-center mt-5 mb-3 container">Productos</h2>
                    <hr class="mb-5 container">
                </div>
                <ul class="products__link container align-items-center">
                    <?php foreach($resultado_productos as $row ) {?>
                        <?php $id = $row['idProd'];?>
                        <?php $nombre = $row['nombre'];?>
                        <?php $src_img = "./images/" . $nombre . ".png";?>
                       
                        <li class="product__content group-1 col mb-sm-4">
                            <div class="product__item" id="product__g1">
                                <img src="<?php echo $src_img; ?>" alt="Imagen de un <?php echo $nombre; ?>" class="product__image">
                                <p class="product__group text-center"><?php echo $nombre; ?></p>
                            </div>
                        </li>
                    <?php }?>
                    

                </ul>
            </section>
            <section class="form__container container-fluid mt-4 pt-4 pb-4" id="contacto">
                <h2 class="text-center mt-5 mb-3 container">Contacto</h2>
                <hr class="mb-5 container">
                <form class="container" method="get">
                    <div class="mb-4">
                        <label for="FormNombreInput" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="FormNombreInput"  name="nombre">
                        
                    </div>
                    <div class="mb-4">
                        <label for="FormEmailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="FormEmailInput" name="email">
                        
                    </div>
                    <div class="mb-4">
                        <label for="FormTelInput" class="form-label">Número de Teléfono</label>
                        <input type="tel" class="form-control" id="FormTelInput" name="tel">
                        
                    </div>
                    <div class="mb-4">
                        <label for="FormMsjInput" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="FormMsjInput" rows="3" name="msj"></textarea>
                        
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Enviar</button>
                    
                </form>
            </section>
            
            <?php require ('./footer.php');?>


            <?php

                $nombre = $_GET['nombre'];
                $email = $_GET['email'];
                $tel = $_GET['tel'];
                $msj = $_GET['msj'];

                $sql=$con->prepare("INSERT INTO contacto (id,nombre,email,tel,msj) VALUES (,'$nombre','$email','$tel','$msj')");
                $sql->execute();
            ?>