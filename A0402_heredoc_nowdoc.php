<?php

  $test = 'muhhhh!';

  // heredoc - mehrzeiliger String, reagiert wie Text in doppelten Anführungszeichen
  // also mit Escaping und Variablenersetzung
  $heredoc = <<<EOT
  <article>
    <h1>Headline</h1>
    <p><strong>Teaser</strong></p>
    <p>Main Paragraph $test</p>
  </article>
EOT;

  echo $heredoc;

  // newdoc - mehrzeiliger String, reagiert wie Text in einfachen Anführungzeichen
  // kein Escaping und keine Variablenersetzung
  // genau das Richtige für (s)printf()
  $nowdoc = <<<'EOT'
  <article>
    <h1>%s</h1>
    <p><strong>%s</strong></p>
    <p>%s</p>
  </article>
EOT;

  printf($nowdoc, 'Test von Nowdoc mit printf()', 'Teaser', 'Content');



?>