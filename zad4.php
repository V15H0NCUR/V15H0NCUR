<?php
$ciag = 12;
function series($ciag){
    if($ciag==0){
        return 0;
    }else if( $ciag == 1){
        return 1;
    } else {
        return (series($ciag-1) + series($ciag-2));

    }
}
for ($i =0 ; $i < $ciag ; $i++){
    echo series($i);
    echo "\n";

}