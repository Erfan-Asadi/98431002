<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Web Programming Class</title>
</head>

<style>
    code {
        font-family: Consolas,"courier new";
        color: green;
        background-color: #f1f1f1;
        padding: 2px;
        font-size: 80%;
    }
</style>

<body>

    <?php 

    // general description
    $title = 'Session 2 - Arrays and Functions';
    $date = 'date: 3/4/2023 - Saturday';
    $owner = 'Pouria Ghafarbeigi';

    // it's our data
    $objects = [
        [
            'first_name' => 'Mosh',
            'last_name' => 'Hamedoni',
            'born' => 'London',
            'job' => ['Programmer', 'Teacher']
        ],
        [
            'first_name' => 'Mohammad',
            'last_name' => 'Eslami',
            'born' => 'Karaj',
            'job' => ['Student', 'Coach']
        ],
        [
            'first_name' => 'Nariman',
            'last_name' => 'Eslami',
            'born' => 'Tehran',
            'job' => ['Coach', 'Caster', 'Psychologist']
        ],
        [
            'first_name' => 'Pouria',
            'last_name' => 'Ghafarbeigi',
            'born' => 'Kerman',
            'job' => ['Programmer', 'Student']
        ],
        [
            'first_name' => 'Naser',
            'last_name' => 'Akhondi',
            'born' => 'Semnan',
            'job' => ['Programmer', 'Teacher']
        ]
    ];

    // it's a function to merge firstname and lastname
    function formatName($name, $family) {
        return $name . ' ' . $family;
    }

    // it is used for changing our data's format
    function checkPersionName($person) {
        $name = formatName($person['first_name'], $person['last_name']);

        return [
            'name' => $name,
            'born' => $person['born'],
            'job' => $person['job']
        ];
    }

    // print a list of jobs
    function printJobs($jobs) {

        $filtered_jobs = '<ol>';
        foreach($jobs as $job) {
            $filtered_jobs = $filtered_jobs . '<li>' . $job . '</li>';
        }

        return $filtered_jobs . '</ol>';
    }

    // check keys to find jobs
    function isTypeOfJob($key, $value) {
        if($key == 'job') {
            return printJobs($value);
        }
        else {
            return $value;
        }
    }

    // Simple Example Of Nested Function (seonf)
    function seonf() {
           $output = <<<'TEXT'
            We can assign a funtion's result to the variable like the below example:
            <br><br>
            <code>
                <strong>$variable_name</strong> = <strong>function</strong>() {<br>
                
                    // body<br>
                    ...<br>
                }
                <br>

                <strong>function</strong> function_name(<strong>$variable_name</strong>) {<br>

                    // body<br>
                    ...<br>
                }
            </code> 
            TEXT;

            return $output;
    }
    ?>

    <!--header-->
    <h1>
        <?=$title?>
    </h1>

    <!--owner-->
    <div>
        <sub>
            <b>
                <?php echo($owner)?>
            </b>
        </sub>
    </div>

    <!--history-->
    <sub>
        <?php echo $date?>
    </sub>

    <br>
    <br>

    <!--second session points-->
    <div>
        <ul>
            <li>We can use <code>var_dump()</code> function to print our arrays.</li>
            <li>php has a function named <code>die()</code> to kill the program in specific situation.</li>
        </ul>
        <ul>
            <li><?= seonf()?></li>
            <br>
            <li>We were learned about <strong><a href="https://www.php.net/manual/en/ref.array.php">Array Functions</a></strong>. You can visit this site for more information.</li>
        </ul>
    </div>

    <!--print array of objects-->
    <div>
        <table class='table -table-bordered'>
            <theader>
                <th>Name</th>
                <th>Born in</th>
                <th>Job</th>
            </theader>
            <tbody>
                <?php 
                    foreach($objects as $person):
                ?>
                <tr>
                    <?php      
                        foreach(checkPersionName($person) as $key=>$value):
                    ?>
                        <td><?=isTypeOfJob($key, $value)?></td>
                    <?php 
                        endforeach;
                    ?>
                </tr>
                <?php 
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>