<!Doctype html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Assets/css/materialize.min.css">
</head>
<body>
<nav class="navbar-fixed">
    <ul>
        <li>Accueil</li>
    </ul>

</nav>


<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>NOM</td>
        <td>POSTNOM</td>
        <td>PRENOM</td>
    </tr>

    </thead>
    <tbody id="databody">
    <?php
    include_once '../Modele/Etudiant.php';



        $data='';
        $tableau=Etudiant::affichetout();
        if($tableau!=null)
        {
            foreach ($tableau as $etudiant)
            {
                echo "
               <tr>
               
                <td>".$etudiant->getId()."</td>
                <td class='nom' data-id='".$etudiant->getId()."' contenteditable='true'>".$etudiant->getNom()."</td>
                 <td class='postnom' data-id='".$etudiant->getId()."' contenteditable='true'>".$etudiant->getPostnom()."</td>
                <td class='prenom' data-id='".$etudiant->getId()."' contenteditable='true'>".$etudiant->getPrenom()."</td>
    </tr>
            ";

            }

        }




    ?>
    <tr>

        <td id="ajout">ajouter</td>
        <td id='nom'  contenteditable='true'></td>
        <td id='postnom'  contenteditable='true'></td>
        <td id='prenom'  contenteditable='true'></td>
    </tr>
    </tbody>

</table>








<script src="Assets/js/jquery-3.2.1.min.js"></script>
<script>
    var main = function () {

        $(".nom").blur(function () {
            var nom= $(this);
            var id=$(this).attr('data-id');
            var postnom=nom.next();
            var prenom=postnom.next();
            $.ajax({
                url:'http://localhost/mvcitot/Controlleur/Controlleuretudiant.php',
                method:'post',
                data:{update:'update',id:id,nom:nom.text(),prenom:prenom.text(),postnom:postnom.text()},
                success:function (result) {
                    alert("bintu biko bien");
                }
            })


        });

    };
    
    
    $(document).ready(main);
    


</script>
</body>
</html>