<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $op = $_POST['operation'];

    switch ($op) {
        case 'add':
            $result = $n1 + $n2;
            echo "Result: $result";
            break;
			case 'sub':
            $result = $n1 - $n2;
            echo "Result: $result";
            break;
			case 'div':
            if ($n2 == 0) {
                echo "Error: Division by zero!";
            } else {
                $result = $n1 / $n2;
                echo "Result: $result";
            }
            break;
bash
Copy
Edit

    }
}
?>
