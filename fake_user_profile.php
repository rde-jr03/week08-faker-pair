<?php
require 'vendor/autoload.php'; 

$faker = Faker\Factory::create();

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>User ID (UUID)</th>
        <th>Full Name</th>
        <th>Email Address</th>
        <th>Username</th>
        <th>Password (SHA-256 Encrypted)</th>
        <th>Account Created</th>
      </tr>";

for ($i = 0; $i < 10; $i++) {
    $uuid = $faker->uuid;
    $fullName = $faker->name;
    $email = $faker->unique()->safeEmail;
    $username = strtolower(explode('@', $email)[0]);
    $rawPassword = $faker->password; 
    $hashedPassword = hash('sha256', $rawPassword);
    $accountCreated = $faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d H:i:s');

    echo "<tr>
            <td>{$uuid}</td>
            <td>{$fullName}</td>
            <td>{$email}</td>
            <td>{$username}</td>
            <td>{$hashedPassword}</td>
            <td>{$accountCreated}</td>
          </tr>";
}

echo "</table>";
?>
