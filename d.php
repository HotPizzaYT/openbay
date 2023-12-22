<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
	<title><?php echo file_get_contents("sitename.txt"); ?></title>

	<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Cabin&display=swap');
	html, body {
		height: 100%;
        background-color: #2a2a2a;
        color: #fff;
        font-family: 'Cabin', sans-serif;
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
    a:link {
        color: #00ffff;
    }
    a:visited {
        color: #ff00ff;
    }
    a:active {
        color: #ffff00;
    }
    .rainbow {
		animation: rainbow 16s linear;
		animation-iteration-count: infinite;
        font-family: monospace;
    }
    @keyframes rainbow {
		100%,0%{
			color: rgb(255,0,0);
		}
		8%{
			color: rgb(255,127,0);
		}
		16%{
			color: rgb(255,255,0);
		}
		25%{
			color: rgb(127,255,0);
		}
		33%{
			color: rgb(0,255,0);
		}
		41%{
			color: rgb(0,255,127);
		}
		50%{
			color: rgb(0,255,255);
		}
		58%{
			color: rgb(0,127,255);
		}
		66%{
			color: rgb(0,0,255);
		}
		75%{
			color: rgb(127,0,255);
		}
		83%{
			color: rgb(255,0,255);
		}
		91%{
			color: rgb(255,0,127);
		}
}
	</style>
	<script>
		document.body.addEventListener("touchmove", function(e) {
			e.preventDefault();
		},false);
	</script>
</head>
<body>
	<h1 class="rainbow"><?php echo file_get_contents("sitename.txt"); ?></h1>
    <form action="search.php">
            <input type="text" name="q"> <input type="submit" value="Search"> <a href="index.php">Go back</a>
    </form> 
    <p>
        <?php
        $name = "Not found";
        $numfiles = "0";
        $size = "0 B";
        $ds = "1970-01-01";
        $by = "Unknown";
        $se = "0";
        $le = "0";
        $infohash = "0";
        $desc = "Torrent does not exist";
        $files = "<h2>Whoops! I could not find that torrent.</h2>";
            function formatBytes($bytes, $decimals = 2) {
                $size = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
                $factor = floor((strlen($bytes) - 1) / 3);
                return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . " " . @$size[$factor];
            }
            if(isset($_GET["id"])){
                $getf = file_get_contents("https://apibay.org/f.php?id=".urlencode($_GET["id"]));
                $jsonf = json_decode($getf, true);
                $gett = file_get_contents("https://apibay.org/t.php?id=".urlencode($_GET["id"]));
                $jsont = json_decode($gett, true);
                // f is files
                // t is info
                $name = $jsont["name"];
                $numfiles = $jsont["num_files"];
                $size = formatBytes($jsont["size"]) . " (" . $jsont["size"] . ")";
                
                $epoch = $jsont["added"];
                $dt = new DateTime("@$epoch");
                $ds = $dt->format("Y-m-d H:i:s");

                $by = $jsont["username"];
                $se = $jsont["seeders"];
                $le = $jsont["leechers"];
                $infohash = $jsont["info_hash"];
                $desc = $jsont["descr"];
                $files = "<table><tr><th>Filename</th><th>Size</th></tr><tr>";
                foreach($jsonf as $fileitem){
                    $files .= "<tr>";
                    $files .= "<td>".$fileitem["name"][0]."</td>";
                    $files .= "<td>".formatBytes($fileitem["size"][0])."</td>";
                    $files .= "</tr>";
                }
                $files .= "</table>";
            }



                /*
                $name = "Not found";
                 $numfiles = "0";
        $size = "0 B";
        $ds = "1970-01-01";
        $by = "Unknown";
        $se = "0";
        $le = "0";
        $infohash = "0";
        $desc = "Torrent does not exist";
        $files = "<h2>Whoops! I could not find that torrent.</h2>";
                */
        ?>
        
            <h2><?php echo htmlspecialchars($name); ?></h2>
            <p><b>Files:</b> <?php echo $numfiles; ?></p>
            <p><b>Size:</b> <?php echo $size; ?></p>
            <p><b>Uploaded:</b> <?php echo $ds; ?></p>
            <p><b>By:</b> <?php echo $by; ?></p>
            <p><b>Seeders:</b> <?php echo $se; ?></p>
            <p><b>Leechers:</b> <?php echo $le; ?></p>
            <p><b>Info hash:</b> <?php echo $infohash; ?></p>
            <br />
            <!-- It's okay to block this with an adblocker, I don't care. It's more of a recommendation than an ad. -->
            <p><span style="color: #ff0000"><b>It is <i>highly</i> recommended that you use a VPN while downloading this file <u>unless you are on public WiFi or on mobile data.</u> <span id="vpnad" class="vpnad ad advertisement">You can find a privacy focused VPN at <a href="https://mullvad.net/">Mullvad</a>. Prices start at ~USD$5.50 / €5.00 a month. pirate.based is not affiliated with Mullvad in any way.</span></b></span></p>
            <a href="magnet:?xt=urn:btih:<?php echo $infohash; ?>&dn=<?php echo urlencode($name); ?>&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Ftracker.bittor.pw%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Fpublic.popcorn-tracker.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce">Download this torrent</a>
            <p>
                <textarea readonly style="width: 100%; height: 100vh;"><?php echo $desc; ?></textarea>


            </p>
            <p><h2>Files</h2></p>
            <?php echo $files; ?>
        
    </p>
</body>
</html>