<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Companiesテーブル</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>会社名</th>
            <th>創立日</th>
            <th>住所</th>
        </tr>
        @foreach($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name ?? $company->company_name }}</td>
                <td>{{ $company->created_at ?? $company->established_at ?? '' }}</td>
                <td>{{ $company->address ?? '' }}</td>
            </tr>
        @endforeach
    </table>

    <h2>Salesテーブル</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>企業ID</th>
            <th>売上</th>
            <th>売上日</th>
        </tr>
        @foreach($sales as $sale)
            <tr>
                <td>{{ $sale->id }}</td>
                <td>{{ $sale->company_id }}</td>
                <td>{{ $sale->amount ?? $sale->price }}</td>
                <td>{{ $sale->created_at ?? $sale->aold_at ?? '' }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>