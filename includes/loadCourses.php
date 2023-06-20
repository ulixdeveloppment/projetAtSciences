<?php

// constant images

$select_images = array(
    'latex' => 'fa-solid fa-file-lines',
    'word' => 'fa-solid fa-file-word',
    'hand' => 'fa-solid fa-file-pen'
);
function openDB()
{
    $table = fopen("./database/file-manager.csv", "r");
    $articles = [];
    if ($table !== FALSE) {
        //On charge le fichier csv dans un tableau : handle
        while (($dataInfo = fgetcsv($table, null, ";")) !== FALSE) {
            //On avance de ligne en ligne data=une ligne
            array_push($articles, [$dataInfo[0], $dataInfo[1], $dataInfo[2], $dataInfo[3], $dataInfo[4], $dataInfo[5], $dataInfo[6]]);
        }
    }
    fclose($table); //On relâche le fichier
    return $articles;
}

function getLastID(){
    $table = openDB();
    if(!empty($table[1])){
        return $table[count($table)-1][0];
    }
    else return 0;
    
}

function DBtoFormat($imageTable,$topic,$year){
    $articles = openDB();
    for ($i = 1; $i < count($articles); $i++) {
        if ($articles[$i][3] == $topic && $articles[$i][2]==$year) {
            echo '
                <div class="item">
                    <div class="column-item title-item"><p>' . $articles[$i][1] . '</p></div>
    
                    <div class="column-item">
                        <div class="downloadContentCard">
                            <a href="files/' . $articles[$i][2] . '/' . $articles[$i][3] . '/' . $articles[$i][6] . '.pdf" target="_blank"><i class="fa-solid fa-download"></i></a>
                            <p>' . $articles[$i][6] . '.pdf</p>
                        </div>
                    </div>
    
                    <div class="column-item type-item"><div class="border"><i class="' . $imageTable[$articles[$i][4]] . '"></div></i></div>
                </div>
            ';
        }
    }
}



?>