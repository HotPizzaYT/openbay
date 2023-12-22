<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
	<title>pirate.based</title>

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
<?php
$useragent=$_SERVER['HTTP_USER_AGENT'];

$ismobile = preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4));
?>
	<h1 class="rainbow">pirate.based</h1>
    <form action="search.php">
            <input type="text" name="q" value="<?php if(isset($_GET["q"])){ echo(htmlentities($_GET["q"])); } ?>"> <input type="submit" value="Search">
    </form>
    <p>
        <table>
            <tr>
                <?php
                if($ismobile){
                ?>
                    <th>Name</th>
                    <th>Uploaded</th>
                <?php
                } else {
                ?>
                    <th>Name</th>
                    <th>Uploaded</th>
                    <th>Item icons</th>
                    <th>Size</th>
                    <th>SE</th>
                    <th>LE</th>
                    <th>UL'd by</th>    
                <?php } ?>
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
                    $top100all = file_get_contents("https://apibay.org/precompiled/data_top100_all.json");
                    $top100all48 = file_get_contents("https://apibay.org/precompiled/data_top100_48h.json");
                    $json = json_decode($get, true);
                    if($_GET["q"] === "top100:all"){
                        $json = json_decode($top100all, true);
                    }
                    if($_GET["q"] === "top100:48"){
                        $json = json_decode($top100all48, true);
                    }
                    foreach($json as $curr){
                        $epoch = $curr["added"];
                        $dt = new DateTime("@$epoch");
                        $ds = $dt->format("Y-m-d H:i:s");
                        $stat = "<img src='".$curr["status"].".gif' />";
                        if($curr["status"] == "member"){
                            $stat = "";
                        }
                        if($curr["status"] == "trusted"){
                            $stat = "<img src='".$curr["status"].".png' />";
                        }
                        if(!($ismobile)){
                            echo "<tr>";
                            echo "<td><a href='d.php?id=".$curr["id"]."'>".$curr["name"]."</td>";
                            echo "<td>".$ds."</td>";
                            echo "<td><a href='magnet:?xt=urn:btih:".$curr["info_hash"]."&dn=".urlencode($curr["name"])."&tr=udp%3A%2F%2Ftracker.coppersurfer.tk%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.openbittorrent.com%3A6969%2Fannounce&tr=udp%3A%2F%2Fopen.stealth.si%3A80%2Fannounce&tr=udp%3A%2F%2Ftracker.torrent.eu.org%3A451%2Fannounce&tr=udp%3A%2F%2Ftracker.bittor.pw%3A1337%2Fannounce&tr=udp%3A%2F%2Ftracker.opentrackr.org%3A1337&tr=udp%3A%2F%2Fpublic.popcorn-tracker.org%3A6969%2Fannounce&tr=udp%3A%2F%2Ftracker.dler.org%3A6969%2Fannounce&tr=udp%3A%2F%2Fexodus.desync.com%3A6969&tr=udp%3A%2F%2Fopentracker.i2p.rocks%3A6969%2Fannounce'><img src='icon-magnet.gif' /></a> ".$stat."</td>";
                            echo "<td>".formatBytes($curr["size"]). " (".$curr["size"]." bytes)</td>";
                            echo "<td>".$curr["seeders"]."</td>";
                            echo "<td>".$curr["leechers"]."</td>";
                            echo "<td>".$curr["username"]."</td>";
                            echo "</tr>";
                        } else {
                            echo "<tr>";
                            echo "<td><a href='d.php?id=".$curr["id"]."'>".$curr["name"]."</td>";
                            echo "<td>".formatBytes($curr["size"]). " (".$curr["size"]." bytes)</td>";
                            echo "</tr>";
                        }
                    }
                } ?>
            </tr>
        </table>
    </p>
</body>
</html>