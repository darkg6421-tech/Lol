<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Trading Pro</title>
    <style>
        :root {
            --red: #ff4d4d;
            --green: #2ecc71;
            --violet: #9b59b6;
            --dark: #2c3e50;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Header & Balance */
        .header {
            background-color: var(--dark);
            color: white;
            width: 100%;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .balance-card {
            background: white;
            width: 90%;
            max-width: 400px;
            margin-top: -20px;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        /* Betting Buttons */
        .button-container {
            display: flex;
            gap: 10px;
            margin: 30px 0;
        }

        .btn {
            padding: 15px 25px;
            border: none;
            border-radius: 5px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .btn:active { transform: scale(0.95); }
        .btn-green { background-color: var(--green); }
        .btn-violet { background-color: var(--violet); }
        .btn-red { background-color: var(--red); }

        /* History Table */
        .history-section {
            width: 90%;
            max-width: 500px;
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .result-dot {
            height: 15px;
            width: 15px;
            border-radius: 50%;
            display: inline-block;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Color Trade</h1>
    </div>

    <div class="balance-card">
        <p style="color: #777; margin: 0;">Available Balance</p>
        <h2 id="balance">₹ 1000.00</h2>
    </div>

    <div class="button-container">
        <button class="btn btn-green" onclick="placeBet('Green')">Join Green</button>
        <button class="btn btn-violet" onclick="placeBet('Violet')">Join Violet</button>
        <button class="btn btn-red" onclick="placeBet('Red')">Join Red</button>
    </div>

    <div class="history-section">
        <h3>Recent Records</h3>
        <table>
            <thead>
                <tr>
                    <th>Period</th>
                    <th>Price</th>
                    <th>Result</th>
                </tr>
            </thead>
            <tbody id="history-body">
                </tbody>
        </table>
    </div>

    <script>
        let balance = 1000;
        const historyBody = document.getElementById('history-body');

        function placeBet(color) {
            let amount = prompt(`Enter betting amount for ${color}:`, "10");
            
            if (amount != null && amount != "" && !isNaN(amount)) {
                amount = parseInt(amount);
                if (amount > balance) {
                    alert("Insufficient Balance!");
                    return;
                }

                // Logic Simulation
                balance -= amount;
                document.getElementById('balance').innerText = `₹ ${balance.toFixed(2)}`;
                
                // Add to history after a "wait" simulation
                setTimeout(() => {
                    const win = Math.random() > 0.5;
                    const resultColor = win ? color : (color === 'Red' ? 'Green' : 'Red');
                    
                    if(win) balance += amount * 2;
                    document.getElementById('balance').innerText = `₹ ${balance.toFixed(2)}`;
                    
                    addRecord(resultColor);
                }, 1000);
            }
        }

        function addRecord(color) {
            const period = Math.floor(Math.random() * 100000);
            const price = Math.floor(Math.random() * 5000);
            const row = `<tr>
                <td>${period}</td>
                <td>${price}</td>
                <td><span class="result-dot" style="background-color: ${color.toLowerCase()}"></span></td>
            </tr>`;
            historyBody.insertAdjacentHTML('afterbegin', row);
        }
    </script>
</body>
</html>
