<?php 
    echo "<h1>Arrays</h1>";
    echo "<a href="."index.html"."><button>Menu</button></a>";

    $dato = array();

    $dato[1]=array("francisco","Benito","Alcantara",50,"neiva");
    $dato[2]=array("Bfrancisco","BBenito","BAlcantara","edad"=>20,"Bneiva","colombia");
    $dato[3]=array("Cfrancisco","CBenito","CAlcantara",30,"Cneiva");
    $dato[4]=array("Dfrancisco","DBenito","DAlcantara",26,"Dneiva");

    print("edad: ".$dato[2]["edad"]);
?>