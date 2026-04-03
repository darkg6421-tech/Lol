<?php
include 'db_config.php';

// Maan lijiye user ID 1 hai (Login system ke baad ye dynamic hoga)
$user_id = 1;
$bet_amount = $_POST['amount'];
$chosen_color = $_POST['color'];

// 1. Balance Check Karein
$query = "SELECT balance FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);

if ($user['balance'] >= $bet_amount) {
    // 2. Paisa Kaatlein
    $new_balance = $user['balance'] - $bet_amount;
    mysqli_query($conn, "UPDATE users SET balance = $new_balance WHERE id = $user_id");

    // 3. Fake Result Logic (Winning logic yahan aayegi)
    $win = (rand(1, 10) > 7); // 30% chance to win
    if ($win) {
        $final_balance = $new_balance + ($bet_amount * 2);
        mysqli_query($conn, "UPDATE users SET balance = $final_balance WHERE id = $user_id");
        echo json_encode(["status" => "success", "msg" => "You Won!", "new_balance" => $final_balance]);
    } else {
        echo json_encode(["status" => "success", "msg" => "You Lost!", "new_balance" => $new_balance]);
    }
} else {
    echo json_encode(["status" => "error", "msg" => "Insufficient Balance"]);
}
?>
