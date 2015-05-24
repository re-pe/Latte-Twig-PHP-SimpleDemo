<?php

$knownTests = glob("*", GLOB_ONLYDIR);
$knownTests = array_flip($knownTests);
                                
function runTests(&$tests)
{
    foreach ($tests as $id => &$data){
        $data = [];
        $data['time'] = -microtime(true);
        $folder = __DIR__ . '\\' . strtolower($id);
        $data['engine'] = trim(file_get_contents($folder . "\\name.txt"));
        if ($data['engine'] == ' Plates'){
            continue;
        }
        require $folder . '\\init.php';
        echo "<!-- Template start -->\n";
        $data['renderTemplate']('homepage', array(
            'title'         => 'Temoplate Engines Comparison', 
            'engine'        => $data['engine'], 
            'pages'         => array('About', 'Is better <strong> or <b>?'),
            'currentPage'   => 'About',
        ));
        echo "<!-- Template end -->\n\n";
        $data['time'] += microtime(true);

        echo "<pre class=\"results\">\n";
        printf("Memory usage:   %5.1f kB\n", memory_get_peak_usage() / 1024);
        printf("Execution time: %5.1f ms\n", $data['time'] * 1000);
        echo "</pre>\n";
    }
}
?>

<style>
	body {
		font-family: sans-serif;
	}

	ul.tests {
		list-style-type: none;
		margin: 0;
		padding: 0;
	}

	ul.tests li {
		display: inline-block;
		background: #0080FF;
		width: 100px;
		padding: 7px 15px;
	}

	ul.tests li:hover {
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
</style>

<?php if ($knownTests) runTests($knownTests); ?>
