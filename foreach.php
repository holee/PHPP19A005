<?php
//number array or index array
$names=array("sun","alona","marith","narith","siva","rachana","vatana");
$countries=["cambodia","Thailand","Loa","VietName","Burma","India"];

echo $countries[5];//india
//echo $countries[count($countries)-1];

//echo $names[4];//siva

//for($index=0;$index<count($names);$index++){
 //   echo "<li>{$names[$index]}</li>";
//}
for($index1=0;$index1<count($countries); $index1++){
    echo "<li>{$countries[$index1]}</li>";
}

//syntax 1      0     1         2       3       4       5       6
  count($names);//count array elements
foreach ($names as $key => $value) {
    echo "<p>{$key}-{$value}</p>";
}
//syntax 2 

foreach ($names as $value) {
    echo "<p>{$value}</p>";
}