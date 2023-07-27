<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        footer.page-footer {
            height: 64px; 
            background-color: purple; 
            padding-top: 20px; 
        }

        footer.page-footer h5 {
            margin: 0; 
        }
    </style>
</head>

<body>
...
<nav class="nav-extended purple">
    
    <div class="nav-content">
        <ul class="tabs tabs-transparent">
            <li class="tab"><a href="index.php">inicio</a></li>
            <li class="tab"><a href="acerca.php">acerca de</a></li>
            <li class="tab"><a href="servicios.php">servicios</a></li>
            <li class="tab"><a href="contactanos.php">contactanos</a></li>
            <li class="tab"><a href="calculadora.php">calculadora</a></li>
        </ul>
    </div>
</nav>
...

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">JavaScript</a></li>
  </ul>

  

    <div class="container">
        <div class="row">
            <div class="col m4">
                <ul class="collection">
                    <li class="collection-item">Alvin</li>
                    <li class="collection-item">Alvin</li>
                    <li class="collection-item">Alvin</li>
                    <li class="collection-item">Alvin</li>
                </ul>
            </div>
            <div class="col m8" id="inicio">
                <h3>servicios</h3>
                <img class="responsive-img"src="https://w7.pngwing.com/pngs/531/468/png-transparent-cupcakes-background-cupcake-birthday-cake-muffin-bakery-cream-marshmallow-cake-material-food-baking-cake-decorating-thumbnail.png" alt="">
                <img class="responsive-img"src="https://w7.pngwing.com/pngs/204/172/png-transparent-the-complete-technology-book-on-bakery-products-baking-science-with-formulation-production-3rd-edition-bread-food-bread-baked-goods-food-baking-thumbnail.png" alt="">
                
                 Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem doloremque
                  quibusdam porro quaerat. Reiciendis harum, corrupti ex blanditiis tempora iste nam vero 
                  similique animi id non labore a! Eos, itaque.
                 Velit consequuntur pariatur nostrum, quas eius cum, veniam magni und
                <img src=" " alt="">
            </div>
        </div>
    </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
    
        $(document).ready(function(){
            $('.sidenav').sidenav();
        });
    </script>
</body>
</html>
