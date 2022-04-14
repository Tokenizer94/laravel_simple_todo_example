<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Styles -->
  <style>
    body {
      font-family: 'Nunito', sans-serif;
    }
  </style>
</head>

<body class="antialiased">
  <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div>
      <h1>Todo List</h1>

      @foreach($listItems as $listItem)
      <div class="flex" style="align-items: center;">
        <p>Item: {{ $listItem->name }}</p>
        <form action="{{ route('markComplete', $listItem->id) }}" method="post" accept-charset="UTF-8">
          {{ csrf_field() }}
          <button type="submit" style="max-height: 25px; margin-left: 20px; ">Mark Complete</button>
        </form>

      </div>
      @endforeach

      <form action="{{ route('saveItem') }}" method="post" accept-charset="UTF-8">
        {{ csrf_field() }}

        <label for="listItem">New Todo Item</label></br>
        <input type="text" name="listItem">
        <button type="submit">Submit</button>
      </form>
    </div>

  </div>
</body>

</html>