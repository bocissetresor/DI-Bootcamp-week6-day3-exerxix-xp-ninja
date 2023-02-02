<?php

    function totalOvers($Nball) {
        $round = ceil($Nball/6) - 1;
        echo base_convert($Nball + $round, 10, 7);
    }

    totalOvers(2400);
?>