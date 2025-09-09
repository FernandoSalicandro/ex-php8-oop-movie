<?php
include_once './Models/Movie.php';
include_once './Models/Genre.php';

$movies = [
    new Movie(
        "The Matrix",
        1999,
        "Un hacker scopre la verità dietro la realtà e combatte contro le macchine.",
        new Genre(["Sci-Fi", "Action"]),
        "https://placehold.co/280x280/png?text=The+Matrix"
    ),
    new Movie(
        "Inception",
        2010,
        "Un ladro che ruba segreti attraverso i sogni deve affrontare una missione impossibile.",
        new Genre(["Sci-Fi", "Thriller"]),
        "https://placehold.co/280x280/png?text=Inception"
    ),
    new Movie(
        "The Godfather",
        1972,
        "La saga della famiglia Corleone e del potere della mafia.",
        new Genre(["Crime", "Drama"]),
        "https://placehold.co/280x280/png?text=The+Godfather"
    ),
    new Movie(
        "Interstellar",
        2014,
        "Un gruppo di astronauti viaggia attraverso un wormhole alla ricerca di un nuovo pianeta.",
        new Genre(["Sci-Fi", "Drama"]),
        "https://placehold.co/280x280/png?text=Interstellar"
    ),
    new Movie(
        "Pulp Fiction",
        1994,
        "Storie intrecciate di criminali, pugili e gangster a Los Angeles.",
        new Genre(["Crime", "Comedy"]),
        "https://placehold.co/280x280/png?text=Pulp+Fiction"
    )
];

$movies[0]->setDirector('Sorelle Watchowski Lol');
