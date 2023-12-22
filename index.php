<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="chrome=1, IE=edge">
	<title><?php echo file_get_contents("sitename.txt"); ?> - home</title>

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
        font-family: monospace;
        font-size: 64px;
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
	<center>
        <h1 class="rainbow"><?php echo file_get_contents("sitename.txt"); ?></h1>
        <p style="color: #808080"><?php echo file_get_contents("subtext.txt"); ?></p>
        <p><b>Search Torrents</b> | <a href="search.php?q=top100:all">All Top 100</a> | <a href="search.php?q=top100:48">Top 100 in 48h</a>
        <form action="search.php">
            <input type="text" name="q"> <input type="submit" value="Search">
        </form>
    </center>
</body>
</html>