<?php

require_once(__DIR__."/functions.php");


# Home

$me = [
    "photoLink" => "/cv_web/public/imgBank/profil.jpg",
    "firstname" => "Maxime",
    "lastname" => "BOUNAAS-FERRET",
    "role" => "Developpeur - Ynov Lyon" //Javscript and PHP modif needed
];

$socialLinks = [
    "LinkedIn" => "https://www.linkedin.com/in/maxime-bounaas-ferret-513a25179/",
    "Facebook" => "https://www.facebook.com/profile.php?id=100009099774888",
    "Instagram" => "https://www.instagram.com/max__bf/"
];


# Parcours

$parcours = [
    [
        "iconClassAwesome" => "fas fa-globe-americas",
        "title" => "2011-2015: Brevet des collèges",
        "textContent" => 
        "
        Etude au collège Pierre Brossolette ou j'ai pu développer et améliorer mon anglais durant 4 années d'anglais renforcées.
        "
    ],
    [
        "iconClassAwesome" => "fas fa-atom",
        "title" => "2015-2018: Bac S option Science de l'ingénieur",
        "textContent" => 
        "
        Etude au lycée Parc Chabrière ou j'ai pu établir de solide bases dans mes connaissances ainsi que ma compréhension du monde, notamment dans son aspect scientifique avec mes 2 ans en spécialisation science de l'ingénieur. J'ai également pu peaufiner mon anglais durant 3 années d'anglais en section européene.
        "
    ],
    [
        "iconClassAwesome" => "fas fa-desktop",
        "title" => "2018-Aujourd'hui: Bachelor Informatique Ingésup à Ynov Lyon",
        "textContent" => 
        "
        Etude à Ynov Lyon ou je me spécialise dans le domaine du numérique et du digital tout en apprenant à travailler de manière professionalisante et innovante.
        "
    ],
    ];


# Caractere

$caracteres = [
    [
        "iconClassAwesome" => "fas fa-bolt",
        "title" => "Dynamique",
        "textContent" => 
        "
        Déterminé dans la réalisation de mes projets, je m'assure d'être le plus efficace et énérgique possible dans tout ce que je fais. Je fais également attention à avoir un style de vie sain pour toujours regorger d'énergie.
        "
    ],
    [
        "iconClassAwesome" => "fas fa-book-open",
        "title" => "Autodidacte",
        "textContent" => 
        "
        L'envie de créer des choses d'une manière plus créative que le commun m'a inscité très tôt à apprendre les choses par moi même et en utilisant mes propres méthodes. La lecture, l'apprentissage par le test et via des formations en ligne sont les principaux outils que j'utilise.
        "
    ],
    [
        "iconClassAwesome" => "fas fa-hand-rock",
        "title" => "Déterminé",
        "textContent" => 
        "
        Mes ambitions et mes nombreux objectifs m'ont très rapidement appris à ne jamais rien lâcher et m'ont permis de forger une personnalité de battant.
        "
    ],
    [
        "iconClassAwesome" => "fas fa-grin-alt",
        "title" => "Social",
        "textContent" => 
        "
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam vel consectetur autem, sapiente consequuntur aspernatur debitis error earum asperiores esse suscipit ab delectus qui magni aut adipisci veniam aliquid placeat.
        "
    ],
];


# Skills

$skills = [
    [
        ["name" => "HTML / CSS", "masteryLevel" => 85, "bgColor" => "rgb(36, 36, 221)"],
        ["name" => "JAVASCRIPT", "masteryLevel" => 55, "bgColor" => "rgb(233, 233, 23)"],
        ["name" => "PHP", "masteryLevel" => 35, "bgColor" => "rgb(68, 0, 68)"],
        ["name" => "SQL", "masteryLevel" => 25, "bgColor" => "skyblue"]
    ],
    [
        ["name" => "Communication", "masteryLevel" => 75, "bgColor" => "rgb(201, 58, 58)"],
        ["name" => "Teamwork", "masteryLevel" => 70, "bgColor" => "lightgreen"],
        ["name" => "Autonomie", "masteryLevel" => 90, "bgColor" => "rgb(104, 162, 182)"],
        ["name" => "Adaptabilité", "masteryLevel" => 80, "bgColor" => "rgb(238, 177, 65)"]
    ],
];

$skillCategories = [
    [
        "imgLink" => "/cv_web/public/imgBank/skill01_ligneDeCode.jpg",
        "title" => "Développement Web",
        "skills" => $skills[0]
    ],
    [
        "imgLink" => "/cv_web/public/imgBank/skill02_teamwork.jpg",
        "title" => "Divers",
        "skills" => $skills[1]
    ],
];
