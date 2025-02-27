<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();

$genres = ['Fiction', 'Mystery', 'Science Fiction', 'Fantasy', 'Romance', 'Thriller', 'Historical', 'Horror'];

echo "<h2>Fake Book Records</h2>";
echo "<table border='1'>
        <tr><th>Title</th><th>Author</th><th>Genre</th><th>Publication Year</th><th>ISBN</th><th>Summary</th></tr>";

for ($i = 0; $i < 15; $i++) {
    echo "<tr>
            <td>{$faker->sentence(3)}</td>
            <td>{$faker->name}</td>
            <td>{$genres[array_rand($genres)]}</td>
            <td>{$faker->numberBetween(1900, 2024)}</td>
            <td>{$faker->isbn13}</td>
            <td>{$faker->paragraph(3)}</td>
          </tr>";
}
echo "</table>";
?>
