<?php
echo '<?xml version="1.0" encoding="UTF-8"?>
<OpenSearchDescription xmlns="http://a9.com/-/spec/opensearch/1.1/">
<ShortName>consearch</ShortName>
<Description>conveniently use different searchengines</Description>
<Tags>consearch</Tags>
<Contact>consearch @ f p u n k t k . de</Contact>
<Url type="text/html" template="https://www.fpunktk.de/consearch/index.php';
if ( isset($_GET['dse']) and preg_match('/^[0-9a-z]{1,5}$/', $_GET['dse']) === 1 ) {
    echo '?dse=' . $_GET['dse'];
}
echo '#{searchTerms}" />
<Image height="16" width="16" type="image/png">https://www.fpunktk.de/consearch/consearch.png</Image>
</OpenSearchDescription>';
?>
