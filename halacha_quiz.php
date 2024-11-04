<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halachah Quiz</title>
</head>
<body>

<h1>Welcome to the Halachah Quiz!</h1>

<?php
// Define questions, options, and correct answers in an array
$questions = [
    ["What does 'Halachah' (הלכה) literally mean in Hebrew?", ["A) The Path (הדרך)", "B) Commandment (מצוה)", "C) Custom (מנהג)", "D) Prayer (תפילה)"], "A"],
    ["How many main types of work are prohibited on Shabbat?", ["A) 25", "B) 39", "C) 52", "D) 18"], "B"],
    ["Which of these activities is generally permitted on Shabbat?", ["A) Turning on a light", "B) Writing", "C) Praying", "D) Cooking"], "C"],
    ["Which holiday requires Jews to refrain from eating bread and instead eat matzah?", ["A) Purim", "B) Yom Kippur", "C) Sukkot", "D) Passover"], "D"],
    ["How many days do we sit in a Sukkah during Sukkot?", ["A) 3", "B) 7", "C) 10", "D) 8"], "B"]
];

// Display questions in an HTML form
echo '<form action="" method="post">';
foreach ($questions as $index => $q) {
    echo "<p>" . ($index + 1) . ". " . $q[0] . "</p>";
    foreach ($q[1] as $option) {
        echo "<label><input type='radio' name='question$index' value='" . substr($option, 0, 1) . "'> $option</label><br>";
    }
}
echo '<input type="submit" name="submit" value="Submit Quiz">';
echo '</form>';

// Check answers after form submission
if (isset($_POST['submit'])) {
    $score = 0;
    foreach ($questions as $index => $q) {
        if (isset($_POST["question$index"]) && $_POST["question$index"] == $q[2]) {
            $score++;
        }
    }
    echo "<p>You scored $score out of " . count($questions) . ".</p>";
}
?>

</body>
</html>
