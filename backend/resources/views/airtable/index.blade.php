<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Données Airtable</title>
</head>
<body>
    <h1>Données récupérées depuis Airtable</h1>
    <ul>
        @foreach($records as $record)
            <li>{{ $record->fields->Nom }}</li> <!-- Change 'Nom' selon ton champ -->
        @endforeach
    </ul>
</body>
</html>