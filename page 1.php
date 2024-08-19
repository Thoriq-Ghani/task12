<?php
$data = [
  [
    "position" => 1,
    "url" => "https://google.com/",
    "title" => "Google. lakukan saja. google.com",
    "description" => "google tempat mencari hal yang tidak kita tau."
  ],
  [
    "position" => 2,
    "url" => "https://instagram.com",
    "title" => "Thoriq (@thoriq_elghani) • Foto dan Video Instagram saya",
    "description" => "305 Followers, 481 Following, 19 Posts - liat intagram foto dan video (@thoriq_elghani)"
  ],
  [
    "position" => 3,
    "url" => "https://YouTube.com",
    "title" => "Thoriq - YouTube",
    "description" => "tempat menonton video pembelajaran dan tutorial..."
  ],
  [
    "position" => 4,
    "url" => "https://facebook.com",
    "title" => "Thoriq - Facebook",
    "description" => "berita terkini..."
  ],
  [
    "position" => 5,
    "url" => "https://telegram.com",
    "title" => "Thoriq - Telegram",
    "description" => "Aplikasi nganggur di hp..."
  ],
  // Data tambahan akan ada di halaman 2
];

echo '<table border="1" cellpadding="5" cellspacing="0">';
echo '<tr><th>Position</th><th>URL</th><th>Title</th><th>Description</th></tr>';

foreach (array_slice($data, 0, 5) as $item) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($item['position']) . '</td>';
    echo '<td><a href="' . htmlspecialchars($item['url']) . '" target="_blank">' . htmlspecialchars($item['url']) . '</a></td>';
    echo '<td>' . htmlspecialchars($item['title']) . '</td>';
    echo '<td>' . htmlspecialchars($item['description']) . '</td>';
    echo '</tr>';
}

echo '</table>';

echo '<br><a href="page2.php">Next Page</a>';
?>
