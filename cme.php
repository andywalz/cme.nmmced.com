<?php
$curYear = date('Y');
$prevYear = (int)$curYear - 1;
$prevprevYear = (int)$curYear - 2;

$keyParam = "key=0ArXPuC10_FqvdG1nSEI0VC10cElEN0NwaUd3YVBldnc&";

$sWithPeds = "https://spreadsheets.google.com/a/nmmced.com/tq?tqx=out:html&" . $keyParam . "tq=select+sum(C),+sum(D),+sum(E),+sum(F)+where+I+contains+'";
$qNoPeds = "https://spreadsheets.google.com/a/nmmced.com/tq?tqx=out:html&" . $keyParam . "tq=select+B,C,D,E,F,G,I,H+where+H+contains+'";

$sNoPeds = "https://spreadsheets.google.com/a/nmmced.com/tq?tqx=out:html&" . $keyParam . "tq=select+sum(C),+sum(D),+sum(E)+where+H+contains+'";
$qWithPeds = "https://spreadsheets.google.com/a/nmmced.com/tq?tqx=out:html&" . $keyParam . "tq=select+B,C,D,E,F,G,H,J,I+where+I+contains+'";

$s = $sWithPeds;
$q = $qWithPeds;

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CME Summary for <?php echo htmlentities($_REQUEST['e']); ?></title>
</head>

<body>
<h2>CME Summary For: <?php echo htmlentities($_REQUEST['e']); ?></h2>
<p><a href="https://sites.google.com/site/nmmced/current-physicians/cme/submit">Submit Another CME Record</a>  &nbsp;|&nbsp;  Made a mistake? Let us know: <a href="mailto:info@nmmced.com">info@nmmced.com</a></p>
<p>NOTE: Use the "Print Table" links to display full table views for printing or copy/pasting to Excel</p>


<h2><?php echo $curYear; ?> CME</h2>
<iframe frameborder="0" width="850px" height="70px" src="<?php echo $sWithPeds . htmlentities(strtolower($_REQUEST['e'])); ?>'&sheet=<?php echo $curYear; ?>"></iframe><br>
<a href="<?php echo $qWithPeds . htmlentities(strtolower($_REQUEST['e'])); ?>'&sheet=<?php echo $curYear; ?>" target="_blank">Print Table &gt;&gt;</a>
<br>
<iframe frameborder="0" width="100%" height="140px" src="<?php echo $qWithPeds . htmlentities(strtolower($_REQUEST['e'])); ?>'&sheet=<?php echo $curYear; ?>" style="min-height:95px;overflow-y:scroll; width: 100%"></iframe>
<hr>


<h2><?php
if($prevYear < 2016){
  $s = $sNoPeds;
  $q = $qNoPeds;
}
echo $prevYear; ?> CME</h2>
<iframe frameborder="0" width="850px" height="70px" src="<?php echo $s . htmlentities(strtolower($_REQUEST['e'])); ?>'&sheet=<?php echo $prevYear; ?>"></iframe><br>
<a href="<?php echo $q . htmlentities(strtolower($_REQUEST['e'])); ?>'&sheet=<?php echo $prevYear; ?>" target="_blank">Print Table &gt;&gt;</a>
<br>
<iframe frameborder="0" width="100%" height="140px" src="<?php echo $q . htmlentities(strtolower($_REQUEST['e'])); ?>'&sheet=<?php echo $prevYear; ?>" style="min-height:95px;overflow-y:scroll; width: 100%"></iframe>
<hr>


<h2><?php
if($prevprevYear < 2016){
  $s = $sNoPeds;
  $q = $qNoPeds;
}
echo $prevprevYear; ?> CME</h2>
<iframe frameborder="0" width="850px" height="70px" src="<?php echo $s . htmlentities(strtolower($_REQUEST['e'])); ?>'&sheet=<?php echo $prevprevYear; ?>"></iframe><br>
<a href="<?php echo $q . htmlentities(strtolower($_REQUEST['e'])); ?>'&sheet=<?php echo $prevprevYear; ?>">Print Table &gt;&gt;</a>
<br>
<iframe frameborder="0" width="100%" height="800px" src="<?php echo $q . htmlentities(strtolower($_REQUEST['e'])); ?>'&sheet=<?php echo $prevprevYear; ?>"></iframe>
</body>
</html>