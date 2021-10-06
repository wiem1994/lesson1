<?php function getartic($nombre_article){

$articles = [

    [

        'titre' => 'Article 1',

        'texte' => 'Ceci est le premier article',

        'auteur' => 'Sylvie',

        'date' => '06-10-2021',

        

    ],

    [

        'titre' => 'Article 2',

        'texte' => 'Ceci est le deuxième article',

        'auteur' => 'Pierre',

        'date' => '09-12-2021',

    ],

    [

        'titre' => 'Article 3',

        'texte' => 'Ceci est le troisième article',

        'auteur' => 'Nathalie',

        'date' => '05-08-2021',

    ],
    [

        'titre' => 'Article 4',

        'texte' => 'Ceci est le 4ème article',

        'auteur' => 'Natha',

        'date' => '05-01-2021',

    ],
    [

        'titre' => 'Article 5',

        'texte' => 'Ceci est le 5ème article',

        'auteur' => 'ali',

        'date' => '05-04-2021',

    ],

];




// Compare function
function date_compare($element1, $element2) {
    $datetime1 = strtotime($element1['date']);
    $datetime2 = strtotime($element2['date']);
    return $datetime2 - $datetime1;
}
    // Sort the array 
    usort($articles, 'date_compare');
    // print_r($articles);



//function to get the last 3 items

    $slice_array[] = array_slice($articles,-3,$nombre_article);
    print_r($slice_array);
    echo "yesssss";
  
}
getartic(3);
?>