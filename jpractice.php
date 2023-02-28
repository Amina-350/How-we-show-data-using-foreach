<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $emp=[
        [1,"amina","student",1000],
        [1,"Bilal","student1",2000],
        [1,"nawab","student2",3000],
    ];
    echo "<table>";
    foreach($emp as $key=>$v1){
    echo "<tr>";
     echo "<td>$key</td>";
     foreach($v1 as $v2){
        
     echo "<td>
        $v2; 
       </td>";
     }
    }
    echo "</table>";
    ?>
</body>
</html>