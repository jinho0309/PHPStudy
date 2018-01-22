<h1>Function</h1>
<?php
$adata = array('a','b','c');
array_push($adata,'d');
foreach ($adata as $item) {
   echo $item."<br>";
}
echo count($adata);

 ?>
<h1>Object</h2>
<?php
$odata = new ArrayObject(array('a','b','c'));
$odata->append('d');
foreach ($odata as $item) {
   echo $item."<br>";
}
echo $odata->count();
?>
