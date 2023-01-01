<!DOCTYPE html>
<html>
  <head>
    <title>My App</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}"  />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    <script src="{{ mix('/js/manifest.js') }}" defer></script>
    <script src="{{ mix('/js/vendor.js') }}" defer></script>

    @inertiaHead
  </head>
  <body>

    @inertia

  </body>
</html>
