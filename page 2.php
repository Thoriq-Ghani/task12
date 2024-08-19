<?php
$data = [
  [
    "position" => 6,
    "url" => "https://www.footlocker.com/category/brands/nike.html",
    "title" => "Nike Sneakers, Apparel, and Accessories - Foot Locker",
    "description" => "Shop the latest selection of Nike at Foot Locker. Find the hottest sneaker drops from brands like Jordan, Nike, Under Armour, ..."
  ],
  [
    "position" => 7,
    "url" => "https://stockx.com/nike",
    "title" => "Buy Nike Shoes & New Sneakers - StockX",
    "description" => "Buy and sell Nike shoes at the best price on StockX, the live marketplace for StockX Verified Nike sneakers and other popular new releases."
  ],
  [
    "position" => 8,
    "url" => "https://play.google.com/store/apps/details?id=com.nike.omega&hl=en_US&gl=US",
    "title" => "Nike → Shoes, Apparel & Stories - Apps on Google Play",
    "description" => "Shop all perfect gifts for sport and style this Nike holiday season. Nike Member Exclusive products, end of year deals, and more - shop and ..."
  ],
  [
    "position" => 9,
    "url" => "https://de-de.facebook.com/nike/",
    "title" => "Nike - Home | Facebook",
    "description" => "Nike, Beaverton, OR. 36093752 likes · 306235 talking about this · 7259 were here. Just Do It."
  ],
  [
    "position" => 10,
    "url" => "https://www.linkedin.com/company/nike",
    "title" => "Nike - LinkedIn",
    "description" => "NIKE, Inc., named for the Greek goddess of victory, is the world's leading designer, marketer, and distributor of authentic athletic footwear, apparel, ..."
  ],
  // Data sebelumnya sudah di halaman 1
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

echo '<br><a href="page1.php">Previous Page</a>';
?>
