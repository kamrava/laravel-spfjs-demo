@php
$content = <<< EOT
<section id="page1">
  <h2>First Page Content</h2>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id, aliquam, harum, amet, dolor distinctio dicta atque deleniti fuga iusto quidem ut deserunt cum nihil sit adipisci consequuntur et consectetur obcaecati perspiciatis qui eligendi! Facilis, omnis, dignissimos, saepe, et nam deserunt minima non quibusdam neque ad ex expedita ducimus nulla cum dicta cumque doloribus! Praesentium, autem, soluta, laborum ipsum aliquid odio iure minima blanditiis dolorem fugit nostrum cumque dolorum rem debitis amet. Perferendis, ea, cupiditate, repellendus, tenetur quas atque voluptatum pariatur sed reprehenderit facere exercitationem sit neque porro suscipit consectetur impedit iure! Earum, doloribus repellat impedit similique corrupti aut nulla libero fugiat consectetur a sapiente quidem aliquam explicabo iste dignissimos dolor accusantium debitis hic id reprehenderit. Ipsa, molestiae, numquam, odio, illo quibusdam eius quo possimus voluptas tempora hic illum modi consequatur rem commodi eveniet blanditiis facilis culpa sunt nihil tempore beatae autem maxime alias veritatis temporibus voluptates reiciendis voluptatem. Aliquam, facilis!</p>
</section>
EOT;
$content = str_replace(array("\r","\n"),"", $content);
echo $content = str_replace("\"","\\\"", $content);
@endphp
