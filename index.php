<?php

$knownTests = glob("*", GLOB_ONLYDIR);
$knownTests = array_flip($knownTests);
                                
function runTests(&$tests)
{
    foreach ($tests as $id => &$data){
        $data = [];
        $data['time'] = -microtime(true);
        $folder = __DIR__ . '/' . strtolower($id);
        $data['engine'] = trim(file_get_contents($folder . "/name.txt"));
        if ($data['engine'] == ' Mustache'){
            continue;
        }
        require $folder . '\\init.php';
        echo "<!-- Template start -->\n";
        $data['renderTemplate']('homepage', array(
            'title'         => 'Template Engines Comparison', 
            'engine'        => $data['engine'] . ":", 
            'pages'         => ['About', 'Is better <strong> or <b>?'],
            'currentPage'   => 'About',
        ));
        echo "<!-- Template end -->\n\n";
        $data['time'] += microtime(true);

        echo "<span class=\"results\">\n";
        printf("| Memory usage: %5.1f kB    ", memory_get_peak_usage() / 1024);
        printf("Execution time: %5.1f ms\n", $data['time'] * 1000);
        echo "</span><br />\n";
    }
}
?>

<style>
	body {
            font-family: sans-serif;
	}
        
        h1, h2 {
            display: inline-block;
            width: 5em;
        }
        
	ul {
            display: inline;
            margin: 0;
            padding: 0;
	}

	ul li {
            display: inline;
            width: 100px;
            padding: 7px 15px;
	}

	ul li:hover {
            background: #004F9D;
	}

	ul.tests li a {
            color: #fff;
            text-decoration: none;
            display: block;
	}

	pre.results {
            border-top: 2px solid #004F9D;
            width: 500px;
            padding: 5px;
            margin-top: 20px;
            font-family: Consolas, monospace;
            font-size: 16px;
	}
        
        .current {
            font-weight: bold;
        }
</style>

<?php if ($knownTests) runTests($knownTests); ?>
