<?php
$xml = simplexml_load_file('i.xml');

if ($xml === false) {
    die('Error loading i.xml file.');
}
echo "<table border='2'>";
echo "Total Number Of  Books: " . count($xml->books);

echo "<tr>
        <th>ISBN</th>
        <th>Title</th>
        <th>Author</th>
        <th>Price</th>
        <th>Publisher</th>
      </tr>";
foreach ($xml->books as $book) {
    
    echo "<tr>";
    echo "<td>" . $book->ispn . "</td>";
    echo "<td>" . $book->title . "</td>";
    echo "<td>" . $book->author . "</td>";
    echo "<td>" . $book->Price . "</td>";
    echo "<td>" . $book->publisher . "</td>";
    echo "</tr>";
}
echo "</table>";

?>