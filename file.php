<?php
$handler = fopen('cz.txt','r'); //打开文件

while(!feof($handler)){
$m[] = fgets($handler,4096); //fgets逐行读取，4096最大长度，默认为1024
}

fclose($handler); //关闭文件

//记录单位（以天为单位）
$re="";
//记录次数
$coun="";
//记录每个单位的出现次数
$sum=0;
for ($i=0;$i<count($m)-1;$i++){
    //截取字符前九位，保留到日，进行比较前后数据是否相等，
   if (substr($m[$i],0,9)!=substr($m[$i+1],0,9)){
       $sum++;
       $re=$re.",".substr($m[$i],0,9);

       $coun=$coun.",".$sum;
       $sum=0;
   }else{
       $sum++;
   }
}

echo $re."+";
echo $coun;




?>