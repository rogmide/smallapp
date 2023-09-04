<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: center;
        }

        table tr th,
        table tr td {
            padding: 5px;
            border: 1px #eee solid;
        }

        tfoot tr th,
        tfoot tr td {
            font-size: 20px;
            color: black;
        }

        tfoot tr th {
            text-align: right;
        }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Check</th>
                <th>Description</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($transactions)) :  ?>
                <?php foreach ($transactions as $trans) : ?>
                    <tr>
                        <td><?= formatDate($trans['date']) ?></td>
                        <td><?= $trans['checkNumber'] ?></td>
                        <td><?= $trans['description'] ?></td>
                        <td><?= formatDollarAmount($trans['amount']) ?></td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </tbody>
        <tfoot>
            <tr>
                <th>Total Income:</th>
                <td><?= formatDollarAmount($totals['totalIncome']) ?? 0 ?></td>
            </tr>
            <tr>
                <th>Total Expense:</th>
                <td><?= formatDollarAmount($totals['totalExpense']) ?? 0 ?></td>
            </tr>
            <tr>
                <th>Net Total:</th>
                <td><?= formatDollarAmount($totals['netTotal']) ?? 0 ?></td>
            </tr>
        </tfoot>
    </table>
</body>

</html>