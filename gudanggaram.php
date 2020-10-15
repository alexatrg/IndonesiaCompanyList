<!DOCTYPE html>
<html>
<title>Gudang Garam</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="index.php" class="w3-button w3-block">Home</a>
    </div>
    <div class="w3-col s3">
      <a href="company.php" class="w3-button w3-block">Company List</a>
    </div>
    <div class="w3-col s3">
        <a href="partner.php" class="w3-button w3-block">Our Partner</a>
      </div>
    <div class="w3-col s3">
      <a href="Asset/rdf/CompanyListRDF.rdf" class="w3-button w3-block">Download</a>
    </div>

  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

<?php
require_once( "sparqllib.php" );

$db = sparql_connect( "http://localhost:3030/DataPerusahaan/sparql" );
if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
sparql_ns("rdfs", "http://www.w3.org/2000/01/rdf-schema#");
sparql_ns("gn", "http://www.geonames.org/ontology#");
sparql_ns("foaf", "http://xmlns.com/foaf/0.1/");
sparql_ns("dc", "http://purl.org/dc/elements/1.1/");

$sparql = 
"PREFIX dc:<http://purl.org/dc/elements/1.1/>

SELECT ?Nama ?Logo ?Deskripsi

WHERE {
  ?data dc:title ?Nama .
  ?data dc:image ?Logo .
  ?data dc:description ?Deskripsi .
  FILTER (?Nama = 'Gudang Garam') .
}
";

$result = sparql_query( $sparql ); 
$fields = sparql_field_array( $result );

while( $row = sparql_fetch_array( $result ) )
{
    foreach( $fields as $field )
    {
        if ($field == "Nama") {
          echo "<h1>" . $row[$field] . "</h1><br>";
        }

        if ($field == "Logo") {
          echo "<center><img src='" . $row[$field] . "' height = '100' width = '300'></center>" . "<br>";
        }

        if ($field == "Deskripsi") {
          echo "<h4>" . $row[$field] . "</h4><br>";
        }

    }
}

$sparql = 
"PREFIX dc:<http://purl.org/dc/elements/1.1/>

SELECT ?Nama ?Jenis ?Simbol_Saham ?Didirikan ?Pendiri ?Kantor_Pusat ?Pemilik ?Cabang ?Karyawan ?Situs ?Produk

WHERE {
  ?data dc:title ?Nama .
  ?data dc:subject ?Jenis .
  ?data dc:identifier ?Simbol_Saham .
  ?data dc:date ?Didirikan .
  ?data dc:creator ?Pendiri .
  ?data dc:coverage ?Kantor_Pusat .
  ?data dc:publisher ?Pemilik .
  ?data dc:relation ?Cabang .
  ?data dc:contributor ?Karyawan .
  ?data dc:source ?Situs .
  ?data dc:type ?Produk .
  FILTER (?Nama = 'Bank Rakyat Indonesia') .
}
";

$result = sparql_query( $sparql ); 
$fields = sparql_field_array( $result );

print "<h2>Keterangan :</h2><br>";

while( $row = sparql_fetch_array( $result ) )
{
    print "<table border = '0'>";
    print "<tbody>";
          
    foreach( $fields as $field )
    {
        print "<td><b>$field</b></td>";
        print "<td> : </td>";
        print "<td>$row[$field]</td>";
        print "</tr>";
    }

    print "</tbody>";
    print "</table>";
}

?>
 
</div>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Copyright 2019. All Right Reserved. Company List (Semantic Web)</h4>
<!--   <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a> -->
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-youtube w3-hover-opacity"></i>
  </div>
 <!--  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p> -->
</footer>

</body>
</html>
