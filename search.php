<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
	<title>OpenBay</title>

	<style type="text/css">
	html, body {
		height: 100%;
        background-color: #2a2a2a;
        color: #fff;
	}
        body {
		margin: 0;
		padding: 0;
	}
	/*  
		Disable the default callout when you touch and hold a touch target.
		and disable user from selecting content (dragging).
	*/
	*:not(input,textarea) {
		-webkit-touch-callout: none;
		-webkit-user-select: none; 
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}
	</style>
	<script>
		document.body.addEventListener("touchmove", function(e) {
			e.preventDefault();
		},false);
	</script>
</head>
<body>
	<h1>OpenBay</h1>
    <form action="search.php">
            <input type="text" name="q" value="<?php if(isset($_GET["q"])){ echo(htmlentities($_GET["q"])); } ?>"> <input type="submit" value="Search">
    </form>
    <p>
        <table>
            <tr>
                <th>Name</th>
                <th>Uploaded</th>
                <th>Item icons</th>
                <th>Size</th>
                <th>SE</th>
                <th>LE</th>
                <th>UL'd by</th>
            </tr>
            <tr>
                <?php
                $trackerstring = "&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Ftracker.bittor.pw%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Fpublic.popcorn-tracker.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce";
                
                function formatBytes($bytes, $decimals = 2) {
                    $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
                    $factor = floor((strlen($bytes) - 1) / 3);
                    return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . " " . @$size[$factor];
                }

                

                if(isset($_GET["q"])){
                    $get = file_get_contents("https://apibay.org/q.php?q=".urlencode($_GET["q"])."&cat=");
                    $json = json_decode($get, true);
                    foreach($json as $curr){
                        $epoch = $curr["added"];
                        $dt = new DateTime("@$epoch");
                        $ds = $dt->format("Y-m-d H:i:s");
                        echo "<tr>";
                        echo "<td><a href='d.php?id=".$curr["id"]."'>".$curr["name"]."</td>";
                        echo "<td>".$ds."</td>";
                        echo "<td>Not available</td>";
                        echo "<td>".formatBytes($curr["size"]). " (".$curr["size"]." bytes)</td>";
                        echo "<td>".$curr["seeders"]."</td>";
                        echo "<td>".$curr["leechers"]."</td>";
                        echo "<td>".$curr["username"]."</td>";
                        
                        echo "</tr>";
                    }
                } ?>
            </tr>
        </table>
    </p>
</body>
</html>