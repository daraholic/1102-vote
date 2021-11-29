<h1>列出所有的問題</h1>
<?php
$subjects=all('topics');
echo "<ol>";
foreach ($subjects as $key => $value) {
    echo "<li>";    
    echo $value['topic'];
    echo "</li>";
}
echo "</ol>";

?>
