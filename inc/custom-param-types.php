<?php

kc_add_param_type( 'info', 'wolfie_param_info' );

function wolfie_param_info(){
    echo '{{data.value}}';
}