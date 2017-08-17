<?php

        if(Session::has('cart')){
            echo "<span class='badge'>" .Session::get('cart')->totalQty. "</span>";
        }


