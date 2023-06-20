<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/header.php'); ?>
</head>

<body>

    <?php

    $activeContent = array(
        "index" => "active",
        "courses" => "",
        "articles" => "",
        "pageboard" => ""
    );

    include('includes/navbar.php');

    ?>

    <div class="container">
        <h3>Ajouter un fichier au système</h3>
        <form method="post" enctype="multipart/form-data">
            <label for="filename">Nom du fichier(Format : Mot1 Mot2)</label><input type="text" id="inputname"
                name="filename"><br>
            <label for="year">Année de CPGE (1/2)</label><input type="number" min="1" max="2" id="inputyear"
                name="year"><br>
            <label for="topic">Matière</label><select name="topic" id="inputtopic">
                <option value="">Choisir une matière</option>
                <option value="mathematiques">mathematiques</option>
                <option value="physique">physique</option>
                <option value="informatique">informatique</option>
            </select><br>
            <label for="type">Type de document</label><select name="type" id="inputtype">
                <option value="">Choisir la provenance du fichier</option>
                <option value="latex">latex</option>
                <option value="word">word</option>
                <option value="hand">hand</option>
            </select><br>
            <label for="author">Nom du propriétaire du fichier</label><input type="text" name="author"
                id="inputauthor"><br>
            <label for="pathname">Nom du fichier dans la racine (sans le .pdf)</label><input type="text" name="pathname"
                , id="inputpathname"><br>
            <input type="file" name="file" id="inputfile"><br>
            <input type="submit" value="Enregistrer le fichier dans la base de donnée">
        </form>
        <div class="warning">
            <p>Valider l'enregistrement sur le site va publier le document. Il seras désormais accéssible à toute
                personne ayant une connection à internet !</p>
        </div>
    </div>

    <?php
    include 'includes/loadCourses.php';

    if (
        isset($_FILES['file']) && !empty($_POST['filename']) && !empty($_POST['year']) && $_POST['topic'] != "" && $_POST['type'] != "" && !empty($_POST['author']) && !empty($_POST['pathname'])
    ) {
        $file = $_FILES['file'];
        $getExtension = explode('.', $file['name'])[1];
        if (in_array($getExtension, ['pdf', 'PDF'])) {
            $newFileName = $_POST['pathname'] . '.pdf';

            $destination = 'files/' . strval($_POST['year']) . '/' . $_POST['topic'] . '/' . $newFileName;
            $id = getLastID();
            if (move_uploaded_file($file['tmp_name'], $destination)) {
                echo 'Le fichier a été téléchargé et renommé avec succès.';
                $filename = 'database/file-manager.csv';
                $file = fopen($filename, 'a');
                $data = array($id + 1, $_POST['filename'], $_POST['year'], $_POST['topic'], $_POST['type'], $_POST['author'], $_POST['pathname']);
                // Formatage de la ligne en tant que chaîne CSV avec un délimiteur ':'
                fputcsv($file, $data,";","\"","\\","\n");
                fclose($file);
            } else {
                echo 'Une erreur s\'est produite lors du téléchargement et du renommage du fichier.';
            }
        } else {
            echo ('Seuls les fichiers pdf peuvent être publiés');
        }

    } else {
        echo 'Veuillez remplir tous les champs correctement';
    }


    ?>

    <?php include('includes/jsincludes.php'); ?>

    <?php include('includes/footer.php'); ?>
</body>

</html>