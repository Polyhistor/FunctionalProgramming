<?php

$all_votes = [
    "Harold", "Bennet", "Bennet", "Dominic", "Andy", "Steeb", "Steeb", "Jane", "Ben", "Jane", "Jim", "Arndold", "Arnold", "Ben", "Jane", "Jane", "Ben", "Pouya"
];


$tally_votes = function ($votes) {
    return array_reduce(
        $votes,
        fn ($carry, $vote) => array_merge(
            $carry,
            [$vote => (array_key_exists($vote, $carry) ? $carry[$vote] + 1 : 1)]
        ),
        [],
    );
};
